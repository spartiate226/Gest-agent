<?php
    class Conge extends Base{
        function __construct(){

        }

        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO conge(mat_agent,d_debut,d_fin,lieujouissance,observation,statut,periode_travail)
            VALUES(:mat_agent,:d_debut,:d_fin,:lieujouissance,:observation,:statut,:periode_travail)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){

            $del=parent::db()->prepare('DELETE FROM Conge  WHERE code_conge=:code_conge');
            $del->execute(array('code_conge' =>$id));

        }

        function find($id){

            $one=parent::db()->prepare('SELECT * FROM Conge  WHERE code_conge=:code_conge');
            $one->execute(array('code_conge' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM Conge ');
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
            $sql="UPDATE conge SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);

        }
    }
    ?>
    