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
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/modifier.php?enite=Payement&id=<?= $_GET['id']?>" method="POST">
            <label for="">Agent</label>
            <input class="champ" type="text"name="mat_agent"> <br>
            <label for="">Type de payement</label>
            <select class="champ" name="type_payement" id="">
                <option value="">Choisir</option>
                <option value="Mensuel">Mensuel</option>
                <option value="Frais de formation">Frais de formation</option>
                <option value="Frais de mission">Frais de mission</option>
            </select>
            <label for="">Date du payement</label>
            <input class="champ" type="date"name="date_payement"> <br>
            <label for="">Observation</label>
            <input class="champ" type="text"name="observation"> <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>

