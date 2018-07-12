<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;
use JWTAuth;

class UserController extends ModelController
{

    public function __construct() {
        $this->object = new User();
        $this->objectName = 'user';
        $this->objectNames = 'users';
        $this->relactionships = ['produtor','cadastrador', 'revendedor'];
    }



    public function signup(){

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




}
