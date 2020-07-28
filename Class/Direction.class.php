<?php
    class Direction extends Base{
        function __construct(){

        }

        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO Direction(nom_direction,chef_direction) VALUES(:nom_direction,:chef_direction)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){

            $del=parent::db()->prepare('DELETE FROM Direction  WHERE code_direction=:code_direction');
            $del->execute(array('code_direction' =>$id));

        }

        function find($id){

            $one=parent::db()->prepare('SELECT * FROM direction WHERE code_direction=:code_direction');
            $one->execute(array('code_direction' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM direction');
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
            $sql="UPDATE direction SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);

        }
    }
    ?>
    