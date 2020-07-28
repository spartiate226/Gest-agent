<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 $liste=$class->Direction->all();
?>
    <h3 class="m-5">LISTE DES DIRECTIONS</h3>
    <div class="m-5 a-content form">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>N°</td>
                    <td>Nom direction</td>
                    <td>Chef direction</td>                  
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
            <?php
            $nb=1;
            foreach ($liste as $key) {
            ?>
                <tr>
                    <td><?php echo $nb++ ?></td>
                    <td><?php echo $key['nom_direction']?></td>
                    <td><?php echo $key['chef_direction']?></td>                  
                    <td>
                    <a class="btn btn-info" href="modifier.php?id=<?php echo $key['code_direction']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.php?enite=Direction&id=<?php echo $key['code_direction']?>">Supprimer</a>
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