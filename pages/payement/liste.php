<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
    $list=$class->Payement->all();
?>
    <h3 class="m-5">LISTE DES PAYEMENTS</h3>
    <div class="m-5 a-content form">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>N°</td>
                    <td>Agent</td>
                    <td>Type payement</td>                  
                    <td>Date payement</td>
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
                    <td><?=$nbr++;?></td>
                    <td><?=$key['mat_agent']?></td>
                    <td><?=$key['type_payement']?></td>
                    <td><?=$key['date_payement']?></td>
                    <td><?=$key['observation']?></td>
                    <td><a class="btn btn-info" href="modifier.php?id=<?php echo $key['code_payement']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.php?enite=Payement&id=<?php echo $key['code_payement']?>">Supprimer</a></td>
                </tr>
                <?php
                 }
                ?> 
            </tbody>
        </table>
    </div>
</body>
</html>