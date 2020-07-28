<?php
    class Formation extends Base{
        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO Formation(intitule ,description ,d_debut ,d_fin,agents) VALUES(:intitule ,:description ,:d_debut ,:d_fin,:agents)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){

            $del=parent::db()->prepare('DELETE FROM Formation  WHERE code_formation=:id');
            $del->execute(array('id' =>$id));

        }

        function find($id){

            $one=parent::db()->prepare('SELECT * FROM Formation  WHERE code_formation=:id');
            $one->execute(array('id' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM Formation ');
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
            $sql="UPDATE formation SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);

        }
    }
    ?>
    