<?php
require_once('Base.class.php');
 require_once('Absence.class.php');
 require_once('Agent.class.php');
 require_once('Compte.class.php');
 require_once('Conge.class.php');
 require_once('Departement.class.php');
 require_once('Direction.class.php');
 require_once('Formation.class.php');
 require_once('Mission.class.php');
 require_once('Note.class.php');
 require_once('Payement.class.php');
 require_once('Post.class.php');
 require_once('Service.class.php');
class main{
    private $Absence;
    private $Agent;
    private $Compte;
    private $Conge;
    private $Departement;
    private $Direction;
    private $Formation;
    private $Mission;
    private $Note;
    private $Payement;
    private $Post;
    private $Service;
    function __construct(){
        $this->Absence=new Absence();
        $this->Agent=new Agent();
        $this->Compte=new Compte();
        $this->Conge=new Conge();
        $this->Departement=new Departement();
        $this->Direction=new Direction();
        $this->Formation=new Formation();
        $this->Mission=new Mission();
        $this->Note=new Note();
        $this->Payement=new Payement();
        $this->Post=new Post();
        $this->Service=new Service();
    }

    function __get($class){
        if(property_exists($this,$class)){
            return $this->$class;
        }else{
            echo 'classe '.$class.' non trouve';
        }
    }

}

?>