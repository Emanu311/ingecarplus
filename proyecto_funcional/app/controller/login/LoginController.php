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
            header("Location:".FOLDER_PATH."/consultas");
        }else{
            echo "CREDENCVIUALES MAL error al iniciar sesion";
        }
    }

    public function exec(){
        $this->render(__CLASS__);
    }

}