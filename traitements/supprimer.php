<?php
include('../Class/main.class.php');
$class=new main();


    if(isset($_GET['enite']) && isset($_GET['id'])){
    switch ($_GET['enite']) {
        case 'Absence':
            $class->Absence->delete($_GET['id']);
            header('location:../pages/absence/liste.php?reponse=Element supprimer!');
            break;

            case 'Agent':
               $agent=$class->Agent->find($_GET['id']);
            $class->Agent->delete($_GET['id']);
            if(file_exists('../pages/agent/photo_agent/'.$agent['photo'])){
                unlink('../pages/agent/photo_agent/'.$agent['photo']);
            }
            header('location:../pages/agent/liste.php?reponse=Element supprimer!');
            break;

            case 'Compte':
            $class->Compte->delete($_GET['id']);
            header('location:../pages/compte/liste.php?reponse=Element supprimer!');
            break;

            case 'Conge':
            $class->Conge->delete($_GET['id']);
            header('location:../pages/conge/liste.php?reponse=Element supprimer!');
            break;
            case 'Departement':
            $class->Departement->delete($_GET['id']);
            header('location:../pages/departement/liste.php?reponse=Element supprimer!');
            break;

            case 'Direction':
            $class->Direction->delete($_GET['id']);
            header('location:../pages/direction/liste.php?reponse=Element supprimer!');
            break;

            case 'Formation':
            $class->Formation->delete($_GET['id']);
            header('location:../pages/formation/liste.php?reponse=Element supprimer!');
            break;

            case 'Mission':
            $class->Mission->delete($_GET['id']);
            header('location:../pages/mission/liste.php?reponse=Element supprimer!');
            break;

            case 'Note':
            $class->Note->delete($_GET['id']);
             header('location:../pages/note/liste.php?reponse=Element supprimer!');
            break;

            case 'Payement':
            $class->Payement->delete($_GET['id']);
            header('location:../pages/payement/liste.php?reponse=Element supprimer!');
            break;

            case 'Poste':
            $class->Post->delete($_GET['id']);
            header('location:../pages/poste/liste.php?reponse=Element supprimer!');
            break;

            case 'Service':
            $class->Service->delete($_GET['id']);
            header('location:../pages/service/liste.php?reponse=Element supprimer!');
            break;
        
        default:
            # code...
            break;
    }
    }