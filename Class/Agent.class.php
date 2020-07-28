<?php
    class Agent extends Base{
        function __construct(){

        }

        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO  Agent(mat_agent,code_direction,code_poste , nom_agent,prenom_agent , sexe ,  date_naiss,lieu_naiss,situation_matri,nbr_enfant,email,telephone,adresse,nationalite,fonction,date_embauche,date_service,statut,niveau_recru,photo) VALUES(:mat_agent,:code_direction,:code_poste,:nom_agent,:prenom_agent,:sexe,:date_naiss,:lieu_naiss,:situation_matri,:nbr_enfant,:email,:telephone,:adresse,:nationalite,:fonction,:date_embauche,:date_service,:statut,:niveau_recru,:photo)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){

            $del=parent::db()->prepare('DELETE FROM Agent  WHERE mat_agent=:mat_agent');
            $del->execute(array('mat_agent' =>$id));

        }

        function find($id){

            $one=parent::db()->prepare('SELECT * FROM Agent  WHERE mat_agent=:mat_agent');
            $one->execute(array('mat_agent' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM Agent ');
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
            $sql="UPDATE agent SET ".$col." WHERE ".$id_indice."=:".$id_indice;
            $update=parent::db()->prepare($sql);
            $update->execute($newtab);

        }
        function avancement($donne){
            $insert=parent::db()->prepare('INSERT INTO  historique(echelle,echellon,categorie,classe,mat_agent,change_date) VALUES(:echelle,:echellon,:categorie,:classe,:mat_agent,:change_date)');
            $insert->execute($donne);
        }

        function historique($id){
            $all=parent::db()->prepare('SELECT * FROM historique WHERE mat_agent=:mat_agent ORDER BY change_date DESC');
            $all->execute(array("mat_agent"=>$id));
            return $all->fetchAll();
        }

        function store_image($nom,$chemain){
            move_uploaded_file($nom,$chemain);
        }
    }
    ?>
    