<?php
require_once(CORE .'/Model.php');

class ConsultasModel extends Model {
    private $user_id;
    private $user_email;
    private $user_service;
    private $user_rol;
    private $date;
    private $car_id;
    private $car_model;
    private $user_name;
    private $user_number;

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
    public function setService(){
                
    }
    public function setRol(){
                
    }
    public function setName(){
                
    }
    public function setCarid(){
                
    }
    public function setCarmodel(){
                
    }
    public function setDate(){

    }
    public function setNumber(){

    }

    public function getId()
    {
        return $this->user_id;
    }
    public function getEmail()
    {
        return $this->user_email;
    }
    public function getservice()
    {
        return $this->user_service;
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
    public function getDate(){
        return $this->date;
    }
    public function getUsernumber(){
        return $this->user_number;
    }
   
}
