<?php
    class Absence extends Base{
        function __construct(){

        }

        function save($donne=[]){
            print_r($donne);
            $insert=parent::db()->prepare('INSERT INTO absence(mat_agent,d_debut,d_fin,raison,justifier) 
            VALUES(:mat_agent,:d_debut,:d_fin,:raison,:justifier)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){

            $del=parent::db()->prepare('DELETE FROM absence WHERE code_absence=:code_absence');
            $del->execute(array('code_absence' =>$id));

        }

        function find($id){

            $one=parent::db()->prepare('SELECT * FROM Absence WHERE code_absence=:code_absence');
            $one->execute(array('code_absence' =>$id));
            $on=$one->fetch();
            return $on;
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM absence');
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
            $sql="UPDATE absence SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);

        }
        
        function avancement(){

        }
    }
    ?>
    