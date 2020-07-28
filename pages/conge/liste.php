<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
    $list=$class->Conge->all();
    $cl=$class->Agent;
    /*function refractor($id){
        $get=$cl->find($id);
        return $get['nom_agent']." ".$get['prenom_agent'];
       }*/
?>
    <h3 class="m-5">LISTE DES CONGES</h3>
    <div class="m-5 a-content form">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>N° matricule</td>
                    <td>Agent</td>
                    <td>Date début</td>
                    <td>Date fin</td>                  
                    <td>Période travail</td>
                    <td>Lieu jouissance</td>
                    <td>Statut</td>
                    <td>Observation</td>
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
            <?php    
                    $nbr=1;
                    foreach($list as $key) {
                ?>
                <tr>
                    <td><?=$key['mat_agent']?></td>
                    <td><?=/*refractor(*/$key['mat_agent']//)?></td>
                    <td><?=$key['d_debut']?></td>
                    <td><?=$key['d_fin']?></td>
                    <td><?=$key['periode_travail']?></td>
                    <td><?=$key['lieujouissance']?></td>
                    <td><?=$key['statut']?></td>
                    <td><?=$key['observation']?></td>
                    <td><a class="btn btn-info" href="modifier.php?id=<?php echo $key['code_conge']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.php?enite=Conge&id=<?php echo $key['code_conge']?>">Supprimer</a></td>
                </tr>
                <?php
                 }
                ?> 
            </tbody>
        </table>
    </div>
</body>
</html>