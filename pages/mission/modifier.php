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
        <form class=" form p-5 d-flex flex-column w-50" method="post" action="../../traitements/modifier.php?enite=Mission&id=<?=$_GET['id']?>">
            <label for="">Intitule</label>
            <input class="champ" type="text"name="intitule"> <br>
            <label for="">Date du début</label>
            <input class="champ" type="date"name="d_debut"> <br>
            <label for="">Date de fin</label>
            <input class="champ" type="date"name="d_fin"> <br>
            <label for="">Observation</label>
            <input class="champ" type="text"name="observation"> <br>
            <label for="">Statut</label>
            <input class="champ" type="text"name="statut"> <br>
            <label for="">Agents</label>
            <textarea class="" name="agents"></textarea> <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>

