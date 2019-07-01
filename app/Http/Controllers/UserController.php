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


    /**
     * @ApiDescription (section = Contas, description="Cria uma conta como produtor")
     * @ApiMethod(type="POST")
     * @ApiRoute(name="/api/users/produtor")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     * @ApiParams(name="username", type="string", nullable=false, description="Username / Numero de Telefone")
     * @ApiParams(name="password", type="string", nullable=false, description="Password")
     * @ApiParams(name="nome", type="string", nullable=false, description="Nome do Utilizador")
     * @ApiParams(name="foto", type="string ", nullable=false, description="Foto do Utilizador")
     * @ApiParams(name="telefone", type="string", nullable=false, description="Numero de Telefone")
     * @ApiParams(name="distritos_id", type="integer", nullable=false, description="Id do Distrito do produtor")
     */
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



    /**
     * @ApiDescription (section = Contas, description="Cria uma conta como Revendedor")
     * @ApiMethod(type="POST")
     * @ApiRoute(name="/api/users/revendedor")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     * @ApiParams(name="username", type="string", nullable=false, description="Username / Numero de Telefone")
     * @ApiParams(name="password", type="string", nullable=false, description="Password")
     * @ApiParams(name="nome", type="string", nullable=false, description="Nome do Utilizador")
     * @ApiParams(name="foto", type="string ", nullable=false, description="Foto do Utilizador")
     * @ApiParams(name="telefone", type="string", nullable=false, description="Numero de Telefone")
     * @ApiParams(name="mercados_id", type="integer", nullable=false, description="Id do Mercado do Revendedor")
     */
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



    /**
     * @ApiDescription (section = Contas, description="Efectuar um Login")
     * @ApiMethod(type="POST")
     * @ApiRoute(name="/api/login")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     * @ApiParams(name="username", type="string", nullable=false, description="Username / Numero de Telefone")
     * @ApiParams(name="password", type="string", nullable=false, description="Password")
     */
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



    /**
     * @ApiDescription (section = Contas, description="Efectuar o Logout")
     * @ApiMethod(type="POST")
     * @ApiRoute(name="/api/logout")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     * @ApiParams(name="token", type="string", nullable=false, description="Token de Autenticacao")
     */
    public function logout(Request $request){
        return response()->json(['logout'=> JWTAuth::invalidate($request->token)]);
    }


    /**
     * @ApiDescription (section = Contas, description="Retorna o utilizador atraves do token")
     * @ApiMethod(type="GET")
     * @ApiRoute(name="/api/get-user-token/{token}")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     * @ApiParams(name="token", type="string", nullable=false, description="Token de Autenticacao")
     */
    public function getUserFromToken($token){
        $user = $this->getUserKind(JWTAuth::toUser($token));
        return ['tipo_user' => $this->getClassName($user), 'user' => $user, 'token' => $token];
    }



    public function getUserKind($user){
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




    /**
     * @ApiDescription (section = Contas, description="Verifica se um determinado número é valido / único ou não")
     * @ApiMethod(type="GET")
     * @ApiRoute(name="/api/user/verify-numbem/{numero}")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     * @ApiParams(name="numero", type="string", nullable=false, description="Numero do Utilizador")
     */
    public function verifyNumber($numero){

        if($numero){
            $user = User::where('username', $numero)->count();

            return $user == 0 ? ['result' => false] : ['result' => true];
        }
        else
            return new \Exception("No Number Provided");

    }


    /**
     * @ApiDescription (section = Utilizadores, description="Retorna todos Utilizadores")
     * @ApiMethod(type="get")
     * @ApiRoute(name="/api/users")
     * @ApiHeaders(name="Content-Type", type="application/json", descriptoin="Tipo de conteudo")
     */
    public function getAll(Request $request)
    {
        return parent::getAll($request); // TODO: Change the autogenerated stub
    }

    /**
     * @ApiDescription (section = Utilizadores, description="Busca Uma Determinada Utilizadores existente")
     * @ApiMethod(type="GET")
     * @ApiParams(name="id", type="integer", nullable=false, description="Utilizadores ID")
     * @ApiRoute(name="/api/users/{id}")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     */
    public function get($id)
    {
        return parent::get($id);
    }


    /**
     * @ApiDescription (section = Utilizadores, description="Cria uma nova Procura")
     * @ApiMethod(type="POST")
     * @ApiRoute(name="/api/users")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     * @ApiParams(name="username", type="string", nullable=false, description="Username / Numero de Telefone")
     * @ApiParams(name="password", type="string", nullable=false, description="Password")
     * @ApiParams(name="nome", type="string", nullable=false, description="Nome do Utilizador")
     * @ApiParams(name="foto", type="string ", nullable=false, description="Foto do Utilizador")
     */
    public function store(Request $request)
    {
        return parent::store($request); // TODO: Change the autogenerated stub
    }

    /** @ApiDescription (section = Utilizadores, description="Actualiza uma Utilizadores")
     * @ApiMethod(type="put")
     * @ApiRoute(name="/api/users/{id}")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     * @ApiParams(name="id", type="integer", nullable=false, description="Utilizadores ID")
     */
    public function update(Request $object, $id)
    {
        return parent::update($object, $id); // TODO: Change the autogenerated stub
    }


    /** @ApiDescription (section = Utilizadores, description="Elimina uma Utilizadores")
     * @ApiMethod(type="delete")
     * @ApiRoute(name="/api/users/{id}")
     * @ApiHeaders(name="Content-Type", type="application/json", description="Tipo de Conteudo")
     * @ApiParams(name="id", type="integer", nullable=false, description="Utilizadores ID")
     */
    public function destroy(Request $objecto, $id)
    {
        return parent::destroy($objecto, $id); // TODO: Change the autogenerated stub
    }










}
