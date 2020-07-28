<?php
    class Mission extends Base{

        function __construct(){
    
        }

        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO Mission(intitule,d_debut,d_fin,statut,observation,agents) VALUES(:intitule, :d_debut, :d_fin,:statut,:observation,:agents)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){
            $del=parent::db()->prepare('DELETE FROM Mission WHERE code_mission=:code_mission');
            $del->execute(array('code_mission' =>$id));
        }

        function find($id){
            $one=parent::db()->prepare('SELECT * FROM Mission WHERE code_mission=:code_mission');
            $one->execute(array('code_mission' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM Mission ORDER BY intitule ASC');
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
            $sql="UPDATE mission SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);

        }
    }
    ?>
    