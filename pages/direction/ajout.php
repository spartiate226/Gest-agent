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
        <h3>Nouvelle direction</h3>
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/ajouter.php?enite=Direction" method="post">
            <label for="">Nom direction</label>
            <input class="champ" type="text"name="nom_direction" required> <br>
            <label for="">Chef direction</label>
            <input class="champ" type="text"name="chef_direction" required> <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>
