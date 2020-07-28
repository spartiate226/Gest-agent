<?php
    class Post extends Base{

        function __construct(){

        }

        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO poste(code_service,intitule) VALUES(:code_service, :intitule)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){
            $del=parent::db()->prepare('DELETE FROM Poste WHERE code_poste=:code_poste');
            $del->execute(array('code_poste' =>$id));
        }

        function find($id){
            $one=parent::db()->prepare('SELECT * FROM Poste WHERE code_poste=:code_poste');
            $one->execute(array('code_poste' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM poste ORDER BY intitule ASC');
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
            $sql="UPDATE poste SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);

        }
    }
    ?>
    