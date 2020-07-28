<!Doctype html>
<html>

<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 if (isset($_POST) AND !empty($_POST)) {
    $class->Absence->update($_GET['code_absence'],'code_absence',$_POST);
}
?>

    <div class="m-5 a-content">
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/modifier.php?enite=Absence&id=<?=$_GET['id']?>" method="POST">
            <label for="">Debut</label>
            <input class="champ" type="date" name="d_debut" value=""> <br>
            <label for="">Fin</label>
            <input class="champ" type="date" name="d_fin" value=""> <br>
            <label for="">Raison</label>
            <input class="champ" type="text" name="raison" value=""> <br>
            <label for="">Justifier</label>
            <input class="champ" type="text" name="justifier" value=""> <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>

</body>
</html>

