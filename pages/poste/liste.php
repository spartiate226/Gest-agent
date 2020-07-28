<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 $liste=$class->Post->all();
 $cl=$class->Service;
 function refractor($id){
 $serv=$cl->find($id);
 return $serv['nom_service'];
}
 if (isset($_GET['del'])) {
    $dep->delete($_GET['del']);
 }
?>
    <h3 class="m-5">LISTE DES EMPLOIS</h3>
    <div class="m-5 a-content form">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>N°</td>
                    <td>Intitule</td>
                    <td>Service Lié</td>                  
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
            <?php
            $nb=1;
            foreach ($liste as $key) {
            ?>
                <tr>
                    <td>N° <?php echo $nb++ ?></td>
                    <td><?php echo $key['intitule']?></td>
                    <td><?php echo $key['code_service']?></td>                  
                    <td>
                    <a class="btn btn-info" href="modifier.php?id=<?php echo $key['code_poste']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.php?enite=Poste&id=<?php echo $key['code_poste']?>">Supprimer</a>
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