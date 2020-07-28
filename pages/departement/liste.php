<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 $liste=$class->Departement->all();
  $cl=$class->Direction;
 function refractor($id){
    $get=$cl->find($id);
    return $get['nom_direction'];
   }
?>
    <h3 class="m-5">LISTE DES DEPARTEMENTS</h3>
    <div class="m-5 a-content form">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom département</th>
                    <th>Chef département</th>
                    <th>Direction liée</th>                  
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $nb=1;
            foreach ($liste as $key) {
            ?>
                <tr>
                    <td>N° <?php echo $nb++ ?></td>
                    <td><?php echo $key['nom_departement']?></td>
                    <td><?php echo $key['chef_departement']?></td>
                    <td><?php echo refractor($key['code_direction'])?></td>                  
                    <td>
                    <a class="btn btn-info" href="modifier.php?id=<?php echo $key['code_departement']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.php?enite=Departement&id=<?php echo $key['code_departement']?>">Supprimer</a>
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