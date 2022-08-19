<?php
require_once(PATH_MODELS .'Login/LoginModel.php');

class LoginController extends Controller {
    
    private $loginModel;
    
    public function __construct()
    {
        $this->loginModel = new LoginModel();        
    }

    public function login($params){
        print_r($params);
        $validate = $this->loginModel->validate_user($params["email"],$params["pass"]);
        
        if($validate){
            header("Location:insetar ubcacion de consultas");
        }else{
            echo "error al iniciar sesion";
        }
    }

    public function exec(){
        $this->render(__CLASS__);
    }

}