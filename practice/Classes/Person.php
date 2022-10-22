<?php



class Person{


    // Properties
     public $firstName=[];
     public $lastName=[];
     public $age=[];

    // Methods


public function __construct($myData){
$json= file_get_contents($myData);
$this->Person= json_decode($json, true);



}


public function fullName(int $id){

return $this->firstName." ".$this->lastName;
 }



}
















