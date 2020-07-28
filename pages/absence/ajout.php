<!Doctype html>
<html>

<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
?>

    <div class="m-5 a-content">
        <h3>Nouvelle Absence</h3>
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/ajouter.php?enite=Absence" method="POST">
            <label for="">Agent</label>
            <input class="champ" type="text"  name="mat_agent" required> <br>
            <label for="">Debut</label>
            <input class="champ" type="date" name="d_debut" required> <br>
            <label for="">Fin</label>
            <input class="champ" type="date" name="d_fin" required> <br>
            <label for="">Raison</label>
            <input class="champ" type="text" name="raison" required> <br>
            <label for="">Justifier</label>
            <input class="champ" type="text" name="justifier" required> <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>

</body>
</html>

