<!Doctype html>
<html class="">
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
?>
    <div class="m-5 a-content">
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/modifier.php?enite=Direction&id=<?=$_GET['id']?>" method="post">
            <label for="">Nom direction</label>
            <input class="champ" type="text"name="nom_direction"> <br>
            <label for="">Chef direction</label>
            <input class="champ" type="text"name="chef_direction"> <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>
