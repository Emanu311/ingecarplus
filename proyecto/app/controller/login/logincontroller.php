<?php
require_once(PATH_MODELS .'/Login/LoginModel.php');

class LoginController extends Controller {
    
    private $loginModel;
    
    public function __construct()
    {
        $this->loginmodel = new LoginModel();        
    }

    public function login($params){
        $validate = $this->loginmodel->validate_user($params["user"]);
    }

    public function exec(){
        $this->render(__CLASS__);
    }

}