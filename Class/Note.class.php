<?php
    class Note extends Base{

        function __construct(){

        }

        function save($donne=[]){
            $insert=parent::db()->prepare('INSERT INTO note(mat_agent,note,date_note,observation) VALUES(:mat_agent,:note,:date_note,:observation)');
            $insert->execute($donne);
        }

        function update($id,$id_indice,$donne){
            $this->isupdate($id,$donne,$id_indice);
        }

        function delete($id){
            $del=parent::db()->prepare('DELETE FROM Note WHERE code_note=:code_note');
            $del->execute(array('code_payement' =>$id));
        }

        function find($id){
            $one=parent::db()->prepare('SELECT * FROM Note WHERE code_note=:code_note');
            $one->execute(array('code_note' =>$id));
            return $one->fetch();
        }

        function all(){
            $all=parent::db()->query('SELECT * FROM Note ORDER BY code_note ASC');
            return $all->fetchAll();
        }

        function isupdate($id,$don,$id_indice){
            $elm=$this->find($id);
            $newtab=[];
            $col="";
            $i=0;
            foreach ($don as $key => $value) {
                if($elm[$key]!=$don[$key]){
                    $i++;
                }
            }
            $compte=0;
            foreach ($don as $key => $value) {
                if($elm[$key]!=$don[$key]){
                    if($compte!=$i){
                        $col.=$key."=:".$key.",";
                    }else{
                        $col.=$key."=:".$key;
                    }
                    $newtab[$key]=$don[$key];
                }
                $compte++;
            }
            $newtab[$id_indice]=$id;
            $sql="UPDATE note SET ".$col." WHERE ".$id_indice."=:".$id_indice;
             $update=parent::db()->prepare($sql);
             $update->execute($donne);

        }
    }
    ?>
    