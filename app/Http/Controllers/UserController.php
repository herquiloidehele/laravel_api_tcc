<?php

namespace App\Http\Controllers;


use App\Models\Interess;
use App\Models\Produtore;
use App\Models\Produz;
use App\Models\Revendedore;
use Illuminate\Http\Request;
use App\User;
use JWTAuth;

class UserController extends ModelController
{

    public function __construct() {
        $this->object = new User();
        $this->objectName = 'user';
        $this->objectNames = 'users';
        $this->relactionships = ['produtores','cadastradores', 'revendedores'];
    }



    public function createProdutor(Request $request){

        $user = $request->get('user');
        if(!$user)
            return new \Exception('Utilizador Nao definido', 404);

        \DB::beginTransaction();

        $userCreated = User::create([
            'username' => $user['username'],
            'password' => '1234',
            'nome' => $user['nome'],
            'estado' => 0,
        ]);

        if(!$userCreated)
            return new \Exception('Erro ao criar Utilizador, os parametros envidos podem estar errados', 500);

        $produtorCreated = Produtore::create([
            'telefone' => $userCreated['username'],
            'users_id' => $userCreated['id'],
            'distritos_id' => $user['distrito_id']
        ]);

        if(!$produtorCreated){
            \DB::rollBack();
            return new \Exception('Erro ao criar Produto,  os parametros envidos podem estar errados',500);
        }

        foreach ($user['interesses'] as $interesse){
            $produtosDoProdutor = Produz::create([
                'produtores_id' => $produtorCreated['id'],
                'produtos_id' => $interesse
            ]);

            if(!$produtosDoProdutor) {
                \DB::rollBack();
                return new \Exception('Erro ao Registar Produtos do produtor, os parametros enviados podem estar incorrentos', 500);
            }
        }

        \DB::commit();
        return ['user' => $this->getProdutorById($produtorCreated['id']), 'message' => 'Conta de Produtor criada com sucesso'];

    }



    private function getProdutorById($produtor_id){
        return Produtore::with(['distrito', 'user', 'produtosProduzidos', 'ofertas'])->where('id', '=', $produtor_id)->first();
    }



    public function createRevendedor(Request $request){
        $user = $request->get('user');
        if(!$user)
            return new \Exception('Utilizador Não definido', 404);

        \DB::beginTransaction();

        $userCreated = User::create([
            'username' => $user['username'],
            'password' => '1234',
            'nome' => $user['nome'],
            'estado' => 0,
        ]);

        if(!$userCreated)
            return new \Exception('Erro ao criar Utilizador, os parametros envidos podem estar errados', 500);


        $revendedorCreated = Revendedore::create([
            'telefone' => $userCreated['username'],
            'users_id' => $userCreated['id'],
            'mercados_id' => $user['mercados_id']
        ]);

        if(!$revendedorCreated){
            \DB::rollBack();
            return new \Exception('Erro ao criar Revendedor,  os parametros envidos podem estar errados',500);
        }



        foreach ($user['interesses'] as $interesse) {
            $interesseDoRevendedor = Interess::create([
                'revendedores_id' => $revendedorCreated['id'],
                'produtos_id' => $interesse
            ]);

            if (!$interesseDoRevendedor) {
                \DB::rollBack();
                return new \Exception('Erro ao Registar Produtos do Revendedor, os parametros enviados podem estar incorrentos', 500);
            }
        }

        \DB::commit();
        return ['user' => $this->getRevendedorById($revendedorCreated['id']), 'message' => 'Conta de Revendedor criada com sucesso'];


    }


    public function getRevendedorById($revendedor_id){
        return Revendedore::with([
            'user',
            'mercado' => function($query){
                $query->with('distrito');
            },
            'interesses' ,
            'procuras' => function($query){
                $query->with(['produto', 'unidades_medida'
                ]);
            }])->where('id', '=', $revendedor_id)->first();
    }



    public function login(Request $request){

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $credencias = $request->only(['username', 'password']);

        try{
            if(! $token = JWTAuth::attempt($credencias))
                return response()->json(['message' => 'Credencias Erradas'], 401);
        }catch (JWTException $ex){
            return response()->json(['message' => 'Erro ao gerar token'], 500);
        }


        return response()->json($this->getUserFromToken($token), 200);
    }



    public function logout(Request $request){
        return response()->json(['logout'=> JWTAuth::invalidate($request->token)]);
    }


    /**
     * return the user associated with the token
     */
    public function getUserFromToken($token){
        $user = $this->getUserKind(JWTAuth::toUser($token));
        return ['tipo_user' => $this->getClassName($user), 'user' => $user, 'token' => $token];
    }


    /**
     * Return the user Kind of the user: Agricultor, Revendedor ou Cadastrador
     */
    private function getUserKind($user){
        if($user->produtor)
            return $user->produtor;
        if($user->revendedor)
            return $user->revendedor;
        if ($user->cadastrador)
            return $user->cadastrador;
        throw new \Exception('Nao tem permissao para entrar', 401);
    }


    /**
     * @param $instance a instancia do utilizador
     * @return String - retorna o nome do
     */
    private function getClassName($instance){
        $instancePath = get_class($instance);

        $pathAsArray = explode('\\', $instancePath);

        return $pathAsArray[sizeof($pathAsArray)-1];

    }

//    public function getUserFromTokenRequest(Request $request){
//        return $request->all();
//        return $this->getUserKind(JWTAuth::toUser($request->get('token')));
//    }




    public function verifyNumber($numero){

//        ['result' => true];

        if($numero){
            $user = User::where('username', $numero)->count();

            return $user == 0 ? ['result' => false] : ['result' => true];
        }
        else
            return new \Exception("No Number Provided");

    }




}
