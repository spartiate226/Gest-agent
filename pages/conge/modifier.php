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
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/modifier.php?enite=Conge&id=<?= $_GET['id']?>" method="post">
            <label for="">Agent</label>
            <input class="champ" type="text" name="mat_agent" > <br>
            <label for="">Début</label>
            <input class="champ" type="date"name="d_debut" > <br>
            <label for="">Fin</label>
            <input class="champ" type="date"name="d_fin" > <br>
            <label for="">Lieu jouissance</label>
            <input class="champ" type="text"name="lieujouissance" > <br>
            <label for="">Période du travail</label>
            <input class="champ" type="text"name="periode_travail" > <br>
            <label for="">Statut</label>
            <input class="champ" type="text"name="statut" > <br>
            <label for="">Observation</label>
            <input class="champ" type="text"name="observation" > <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>

