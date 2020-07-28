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
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/modifier.php?enite=Note?id=<?= $_GET['id']?>" method="POST">
            <label for="">Agent</label>
            <input class="champ" type="text"name="mat_agent"> <br>
            <label for="">Note</label>
            <input class="champ" type="text"name="note"> <br>
            <label for="">Date du note</label>
            <input class="champ" type="date"name="date_note"> <br>
            <label for="">Observation</label>
            <input class="champ" type="text"name="observation"> <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>

