<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
    $list=$class->Note->all();
    $cl=$class->Agent;
    function refractor($id){
        $get=$cl->find($id);
        return $get['nom_agent']." ".$get['prenom_agent'];
       }
?>
    <h3 class="m-5">LISTE DES NOTES</h3>
    <div class="m-5 a-content form">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>N°</td>
                    <td>Agent</td>
                    <td>Note</td>                  
                    <td>Date du note</td>
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
                    <td><?=refractor($key['mat_agent'])?></td>
                    <td><?=$key['note']?></td>
                    <td><?=$key['date_note']?></td>
                    <td><?=$key['observation']?></td>
                    <td><a class="btn btn-info" href="modifier.php?id=<?php echo $key['code_note']?>">Modifier</a>
                      <a class="btn btn-warning" href="../../traitements/supprimer.php?enite=Note&id=<?php echo $key['code_note']?>">Supprimer</a>
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