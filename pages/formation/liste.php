<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 $formations=$class->Formation->all();
?>
    <h3 class="m-5">LISTE DES FORMATIONS</h3>
    <div class="m-5 a-content form">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>N°</td>
                    <td>Agents</td>
                    <td>Intitule</td>
                    <td>Description</td>
                    <td>Date du debut</td>                  
                    <td>Date de fin</td>
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($formations as $formation) {
            ?>
                <tr>
                    <td><?=$formation['code_formation']?></td>
                    <td><?=$formation['agents']?></td>
                    <td><?=$formation['intitule']?></td>
                    <td><?=$formation['description']?></td>
                    <td><?=$formation['d_debut']?></td>                  
                    <td><?=$formation['d_fin']?></td>
                    <td>
                    <a class="btn btn-info" href="modifier.php?id=<?php echo $formation['code_formation']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.php?enite=Formation&id=<?php  echo $formation['code_formation']?>">Supprimer</a>
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