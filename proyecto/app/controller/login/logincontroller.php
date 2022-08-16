<?php
require_once(PATH_MODELS .'/Login/LoginModel.php');

class LoginController extends Controller {
    
    private $loginModel;
    
    public function __construct()
    {
        $this->loginmodel = new LoginModel();        
    }

    public function login($params){
        $validate = $this->loginmodel->validate_user($params["user"],$params["pass"],$params["rol"]);
        
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