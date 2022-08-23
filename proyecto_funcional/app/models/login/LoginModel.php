<?php
require_once(CORE .'/Model.php');

class LoginModel extends Model {
    private $user_id;
    private $user_email;
    private $user_pass;
    private $user_rol;

    public function create($data_array){

    }
    public function read($data_array){

    }
    public function update($data_array){

    }
    public function delete($data_array){

    }
    public function validate_user($email, $pass){
        $stm = $this->pdo->prepare("SELECT * FROM users WHERE user = :EmailParam AND pass = :PassParam " );

        $stm->bindParam(':EmailParam',$email);
        $stm->bindParam(':PassParam',$pass);
        
        $stm->execute();

        $data = $stm->fetch();

        if($data){
            
            $this->user_id = $data ["user"];
            $this->user_id = $data ["pass"];
            return true;
        }else{
            return false;
        }
    }
    
    public function setId($user_id){
        $this->user_id = $user_id;
    }
    public function setEmail($user_email){
        $this->user_id = $user_email;
    }
    public function setPass($user_pass){
        $this->user_id = $user_pass;       
    }
    public function setRol($user_rol){
        $this->user_id = $user_rol;      
    }

    public function getId()
    {
        return $this->user_id;
    }
    public function getEmail()
    {
        return $this->user_email;
    }
    public function getPass()
    {
        return $this->user_pass;
    }
    public function getRol()
    {
        return $this->user_rol;
    }
}