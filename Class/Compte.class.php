<?php
    class Compte extends Base{
        function __construct(){

        }

        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO Compte(nom_user,prenom_user, identifiant,pwd,profil) VALUES(:nom_user,:prenom_user,:identifiant,:pwd,:profil)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){

            $del=parent::db()->prepare('DELETE FROM Compte  WHERE code_compte=:code_compte');
            $del->execute(array('code_compte' =>$id));

        }

        function find($id){

            $one=parent::db()->prepare('SELECT * FROM Compte  WHERE code_compte=:code_compte');
            $one->execute(array('code_compte' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM Compte ');
            return $all->fetchAll();
        }

        function auth($form){
            $verif=parent::db()->prepare('SELECT * FROM Compte WHERE identifiant=:identifiant AND pwd=:pwd');
            $verif->execute(array("identifiant"=>$form['identifiant'],"pwd"=>$form['pwd']));
            $result=$verif->fetchAll();
            if(count($result)!=0){
                return $result[0];
            }else{
                return false;
            }
        }
        function isupdate($id,$don,$id_indice){
            $elm=$this->find($id);
            $newtab=[];
            $col="";
            foreach ($don as $key => $value) {
                if($elm[$key]!=$don[$key] && $don[$key]!="" && $don[$key]!=null){
                    $newtab[$key]=$don[$key];
                }
            }

            $compte=0;
            foreach($newtab as $key=>$value){
                if($compte==count($newtab)-1){
                    $col.=$key."=:".$key;
                }else {
                    $col.=$key."=:".$key.",";
                }
                $compte++;
            }

            $newtab[$id_indice]=$id;
            $sql="UPDATE compte SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);

        }
    }
    ?>
    