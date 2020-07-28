<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 $list=$class->Absence->all();
  $cl=$class->Agent;
    // function refractor($id){
    //     $get=$cl->find($id);
    //     return $get['nom_agent']." ".$get['prenom_agent'];
    //    }
?>
    <h3 class="m-5">LISTE DES ABSENCES</h3>
    <div class="m-5 a-content form">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>N° matricule</td>
                    <td>Agent</td>
                    <td>Début</td>
                    <td>Fin</td>
                    <td>Raison</td>
                    <td>Justifier</td>
                    <td>Modifier</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($list as $key) {
                ?>
                <tr>
                    <td><?=$key['mat_agent']?></td>
                    <td><?= /*refractor(*/$key['mat_agent']/*)*/?></td>
                    <td><?=$key['d_debut']?></td>
                    <td><?=$key['d_fin']?></td>
                    <td><?=$key['raison']?></td>
                    <td><?=$key['justifier']?></td>
                    <td>
                      <a class="btn btn-info" href="modifier.php?id=<?php echo $key['code_absence']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.php?enite=Absence&id=<?php echo $key['code_absence']?>">Supprimer</a>
                    </td>
                </tr>
                <?php
                 }
                ?> 
            </tbody>
        </table>
    </div>
</body>
</html>
