<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 $missions=$class->Mission->all();
?>
    <h3 class="m-5">LISTE DES MISSIONS</h3>
    <div class="m-5 a-content form">
        <table class="table table-bordered">
            <thead>
                <th>
                    <td>Code mission</td>
                    <td>Agents</td>
                    <td>Intitule</td>
                    <td>Date du debut</td>                  
                    <td>Date de fin</td>
                    <td>Observation</td>
                    <td>statut</td>
                    <td>Option</td>
                </th>
            </thead>
            <tbody>
              <?php
               foreach ($missions as $mission) {
                   ?>
                   <tr>
                    <td><?= $mission['code_mission']?></td>
                    <td><?= $mission['agents']?></td>
                    <td><?= $mission['intitule']?></td>                  
                    <td><?= $mission['d_debut']?></td>
                    <td><?= $mission['d_fin']?></td>
                    <td><?= $mission['observation']?></td>
                    <td><?= $mission['statut']?></td>
                    <td>
                    <a class="btn btn-info" href="modifier.php?id=<?php echo $mission['code_mission']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.phpenite=Mission&?id=<?php echo $mission['code_mission']?>">Supprimer</a>
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