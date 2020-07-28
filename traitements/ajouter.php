<?php
include('../Class/main.class.php');
$class=new main();
if(isset($_POST) && !empty($_POST)){
    if(isset($_GET['enite'])){
    switch ($_GET['enite']) {
        case 'Absence':
            $class->Absence->save($_POST);
            header('location:../pages/absence/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Agent':
                $don=[
                    "mat_agent"=>$_POST['mat_agent'],
                    "code_direction"=>$_POST['code_direction'],
                    "code_poste"=>$_POST['code_poste'],
                    "nom_agent"=>$_POST['nom_agent'],
                    "prenom_agent"=>$_POST['prenom_agent'],
                    "sexe"=>$_POST['sexe'],
                    "date_naiss"=>$_POST['date_naiss'],
                    "lieu_naiss"=>$_POST['lieu_naiss'],
                    "situation_matri"=>$_POST['situation_matri'],
                    "nbr_enfant"=>$_POST['nbr_enfant'],
                    "email"=>$_POST['email'],
                    "telephone"=>$_POST['telephone'],
                    "adresse"=>$_POST['adresse'],
                    "nationalite"=>$_POST['nationalite'],
                    "date_embauche"=>$_POST['date_embauche'],
                    "date_service"=>$_POST['date_service'],
                    "statut"=>$_POST['statut'],
                    "niveau_recru"=>$_POST['niveau_recru'],
                    "photo"=>"photo_agent/".sha1($_POST['mat_agent']).".jpg"
                ];
            $class->Agent->save($don);
            $donne=[
                "mat_agent"=>$_POST['mat_agent'],
                "echelle"=>$_POST['echelle'],
                "echellon"=>$_POST['echellon'],
                "categorie"=>$_POST['categorie'],
                "classe"=>$_POST['classe']
            ];
            $class->Agent->store_image($_FILES['photo']['tmp_name'],"../pages/agent/photo_agent/".sha1($_POST['mat_agent']).".jpg");
            $class->Agent->avancement($donne);
            header('location:../pages/agent/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Compte':
            $class->Compte->save($_POST);
            header('location:../pages/compte/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Conge':
            $class->Conge->save($_POST);
            header('location:../pages/conge/ajout.php?reponse=Ajout effectue avec succes!');
            break;
            case 'Departement':
            $class->Departement->save($_POST);
            header('location:../pages/departement/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Direction':
            $class->Direction->save($_POST);
            header('location:../pages/direction/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Formation':
            $class->Formation->save($_POST);
            header('location:../pages/formation/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Mission':
            $class->Mission->save($_POST);
            header('location:../pages/mission/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Note':
            $class->Note->save($_POST);
             header('location:../pages/note/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Payement':
            $class->Payement->save($_POST);
            header('location:../pages/payement/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Poste':
            $class->Post->save($_POST);
            header('location:../pages/poste/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'Service':
            $class->Service->save($_POST);
            header('location:../pages/service/ajout.php?reponse=Ajout effectue avec succes!');
            break;

            case 'avancement':
                if(isset($_GET["mat_agent"]))
                {
                    $_POST['mat_agent']=$_GET["mat_agent"];
                    $_POST['change_date']=date('Y-m-d h:m:s');
                    $class->Agent->avancement($_POST);
                    header('location:../pages/agent/liste.php?reponse=Ajout effectue avec succes!');
                }
                break;
        
        default:
            # code...
            break;
    }
    }
}