<?php
    class Departement extends Base{
        function __construct(){

        }

        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO Departement(code_direction,nom_departement,chef_departement) 
            VALUES(:code_direction,:nom_departement,:chef_departement)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){

            $del=parent::db()->prepare('DELETE FROM Departement  WHERE code_departement=:code_departement');
            $del->execute(array('code_departement' =>$id));

        }

        function find($id){

            $one=parent::db()->prepare('SELECT * FROM Departement  WHERE code_departement=:code_departement');
            $one->execute(array('code_departement' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM Departement ');
            return $all->fetchAll();
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
            $sql="UPDATE departement SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);

        }
    }
    ?>
    