<?php
    class Service extends Base{

        function __construct(){

        }

        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO Service(nom_service,chef_service,code_departement) 
            VALUES(:nom_service, :chef_service, :code_departement)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){
            $del=parent::db()->prepare('DELETE FROM Service WHERE code_service=:code_service');
            $del->execute(array('code_service' =>$id));
        }

        function find($id){
            $one=parent::db()->prepare('SELECT * FROM Service WHERE code_service=:code_service');
            $one->execute(array('code_service' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM Service ORDER BY nom_service ASC');
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
            $sql="UPDATE service SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);
            echo $sql;
            echo "<pre>";
            print_r($newtab);
            echo "</pre>";

        }
    }
    ?>
    