<!Doctype html>
<html class="">
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
    $direct=new Direction();
    $list=$direct->all();
?>
    <div class="m-5 a-content">
        <h3>Nouveau département</h3>
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/ajouter.php?enite=departement" method="post">
            <label for="">Nom département</label>
            <input class="champ" type="text" name="nom_departement" required> <br>
            <label for="">Chef département</label>
            <input class="champ" type="text"name="chef_departement" required> <br>
            <label for="">Direction du département</label>
            <select name="code_direction" class="champ">
                <?php
                    foreach($list as $key)
                    echo' <option value="' .$key['code_direction'].'">'.$key['nom_direction'].'</option>'
                ?>
            </select>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>

