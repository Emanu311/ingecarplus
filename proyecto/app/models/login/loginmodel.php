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
    public function valifate_user($email, $pass, $role){
        $stm = $this->pdo->prepare("SELECT * FROM 'user_email' = :EmailParam AND 'user_email' = :PassParam " );

        $stm->bindParam(':EmailParam',$email);
        $stm->bindParam(':PassParam',$pass);
        $stm->bindParam(':RoleParam',$role);
        
        $stm->execute();

        $data = $stm->fetch();

        if($data){
            $this->user_id = $data ["user_id"];
            $this->user_id = $data ["user_email"];
            $this->user_id = $data ["user_pass"];
            $this->user_id = $data ["user_rol"];
        }else{
            return false;
        }
    }
}