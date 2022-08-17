<?php
require_once(CORE .'/Model.php');

class RegisterModel extends Model {
    private $user_id;
    private $user_email;
    private $user_pass;
    private $user_rol;
    private $user_name;
    private $something;
    private $car_id;
    private $car_model;
    

    public function create($data_array){

    }
    public function read($data_array){

    }
    public function update($data_array){

    }
    public function delete($data_array){

    }
    public function setId(){
                
    }
    public function setEmail(){
                
    }
    public function setPass(){
                
    }
    public function setRol(){
                
    }
    public function setName(){
                
    }
    public function setCarid(){
                
    }
    public function setCarmodel(){
                
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
    public function getName(){
        return $this->user_name;    
    }
    public function getCarid(){
        return $this->car_id;       
    }
    public function getCarmodel(){
        return $this->car_model;        
    }

}