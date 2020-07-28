<?php
include('../Class/main.class.php');
$class=new main();
if(isset($_POST) && !empty($_POST)){
    if(isset($_GET['enite']) && isset($_GET['id'])){
    switch ($_GET['enite']) {
        case 'Absence':
            $class->Absence->update($_GET['id'],'code_absence',$_POST);
            header('location:../pages/absence/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Agent':
            $class->Agent->update($_GET['id'],'mat_agent',$_POST);
            header('location:../pages/agent/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Compte':
            $class->Compte->update($_GET['id'],'code_compte',$_POST);
            header('location:../pages/compte/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Conge':
            $class->Conge->update($_GET['id'],'code_conge',$_POST);
            header('location:../pages/conge/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;
            case 'Departement':
            $class->Departement->update($_GET['id'],'code_departement',$_POST);
            header('location:../pages/departement/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Direction':
            $class->Direction->update($_GET['id'],'code_direction',$_POST);
            header('location:../pages/direction/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Formation':
            $class->Formation->update($_GET['id'],'code_formation',$_POST);
        header('location:../pages/formation/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Mission':
            $class->Mission->update($_GET['id'],'code_mission',$_POST);
            header('location:../pages/mission/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Note':
            $class->Note->update($_GET['id'],'code_note',$_POST);
            header('location:../pages/note/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Payement':
            $class->Payement->update($_GET['id'],'code_payement',$_POST);
            header('location:../pages/payement/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Post':
            $class->Post->update($_GET['id'],'code_poste',$_POST);
            header('location:../pages/post/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;

            case 'Service':
            $class->Service->update($_GET['id'],'code_service',$_POST);
            header('location:../pages/service/liste.php?reponse=Mise a jour effectuee avec succes!');
                    break;
        
        default:
            # code...
            break;
    }
    }
}