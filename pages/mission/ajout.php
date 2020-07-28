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
        <h3>Nouvelle mission</h3>
        <form class=" form p-5 d-flex flex-column w-50" method="post" action="../../traitements/ajouter.php?enite=Mission">
            <label for="">Intitule</label>
            <input class="champ" type="text"name="intitule" required> <br>
            <label for="">Date du début</label>
            <input class="champ" type="date"name="d_debut" required> <br>
            <label for="">Date de fin</label>
            <input class="champ" type="date"name="d_fin" required> <br>
            <label for="">Observation</label>
            <input class="champ" type="text"name="observation" required> <br>
            <label for="">Statut</label>
            <input class="champ" type="text"name="statut" required> <br>
            <label for="">Agents</label>
            <textarea class="" name="agents" required></textarea> <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>

