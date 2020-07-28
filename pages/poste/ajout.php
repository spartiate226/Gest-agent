<!Doctype html>
<html class="">
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
    $serv=new Service();
    $list=$serv->all();
?> 
    <div class="m-5 a-content">
        <h3>Nouveau poste</h3>
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/ajouter.php?enite=Poste" method="POST">
            <label for="">Intitule</label>
            <input class="champ" type="text"name="intitule"  required> <br>
            <label for="">Service lié</label>
            <select name="code_service" class="champ">
                <?php
                    foreach($list as $key)
                    echo' <option value="' .$key['code_service'].'">'.$key['nom_service'].'</option>'
                ?>
            </select>
            <!-- <input class="champ" type="text" name="code_service" required> <br> -->
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>

