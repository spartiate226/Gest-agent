<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
    $list=$class->Service->all();
?>
    <h3 class="m-5">LISTE DES SERVICES</h3>
    <div class="m-5 a-content form">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>N°</td>
                    <td>Nom service</td>
                    <td>Chef service</td>
                    <td>Departement</td>
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
            <?php    
                    $nbr=1;
                    foreach($list as $key) {
                ?>
                <tr>
                    <td><?=$nbr++;?></td>
                    <td><?=$key['nom_service']?></td>
                    <td><?=$key['chef_service']?></td>
                    <td><?=$key['code_departement']?></td>
                    <td>
                    <a class="btn btn-info" href="modifier.php?id=<?php echo $key['code_service']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.php?enite=Service&id=<?php echo $key['code_service']?>">Supprimer</a>
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