
<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 $depart=new Departement();
 $list=$depart->all();
?>
    <div class="m-5 a-content">
        <h3>Nouveau service</h3>
        <form method="POST" action="../../traitements/ajouter.php?enite=Service" class=" form p-5 d-flex flex-column w-50">
            <label for="">Nom du service</label>
            <input class="champ" type="text" name="nom_service" required> <br>
            <label for="">Chef du service</label>
            <input class="champ" type="text" name="chef_service" required> <br>
            <label for="">Département lié</label>
            <select name="code_departement" class="champ">
                <?php
                    foreach($list as $key)
                    echo' <option value="' .$key['code_departement'].'">'.$key['nom_departement'].'</option>'
                ?>
            </select>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>

</body>
</html>

