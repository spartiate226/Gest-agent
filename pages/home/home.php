<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>

<?php
 include('../../include/header.php');
?>
<div class="container mt-5 mb-5">
    <section class="row justify-content-between">
        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-user-md"></i>
        </div>
           <h4 class="titre">absence</h4>
           <a href="../absence/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../absence/liste.php" class="btn btn-light action" >Liste</a>
        </div>

        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-user-md"></i>
        </div>
           <h4 class="titre">agent</h4>
           <a href="../agent/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../agent/liste.php" class="btn btn-light action" >Liste</a>
        </div>
    </section>

    <section class="row justify-content-between">
        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-user-md"></i>
        </div>
           <h4 class="titre">conge</h4>
           <a href="../conge/ajout.php" class="btn btn-light action">Ajouter</a>
           <a href="../conge/liste.php" class="btn btn-light action">Liste</a>
        </div>

        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-hospital-o"></i>
        </div>
           <h4 class="titre">departement</h4>
           <a href="../departement/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../departement/liste.php" class="btn btn-light action" >Liste</a>
        </div>
    </section>

    <section class="row justify-content-between">

        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-h-square"></i>
        </div>
           <h4 class="titre">direction</h4>
           <a href="../direction/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../direction/liste.php" class="btn btn-light action" >Liste</a>
        </div>

        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-book"></i>
        </div>
           <h4 class="titre">formation</h4>
           <a href="../formation/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../formation/liste.php" class="btn btn-light action" >Liste</a>
        </div>
    </section>

    <section class="row justify-content-between">
        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-ambulance"></i>
        </div>
           <h4 class="titre">mission</h4>
           <a href="../mission/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../mission/liste.php" class="btn btn-light action" >Liste</a>
        </div>

        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-edit"></i>
        </div>
           <h4 class="titre">note</h4>
           <a href="../note/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../note/liste.php" class="btn btn-light action" >Liste</a>
        </div>
    </section>

    <section class="row justify-content-between">
        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-money"></i>
        </div>
           <h4 class="titre">payement</h4>
           <a href="../payement/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../payement/liste.php" class="btn btn-light action" >Liste</a>
        </div>

        <div class="col-md-5 border-1 h-25 cadre">
        <div>
            <i class="fa fa-tasks"></i>
        </div>
           <h4 class="titre">Emploi</h4>
           <a href="../poste/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../poste/liste.php" class="btn btn-light action" >Liste</a>
        </div>
    </section>

    <section class="row justify-content-between">
    
    <div class="col-md-12 border-1 h-25 cadre">
    <div>
            <i class="fa fa-stethoscope"></i>
        </div>
           <h4 class="titre">service</h4>
           <a href="../service/ajout.php" class="btn btn-light action" >Ajouter</a>
           <a href="../service/liste.php" class="btn btn-light action" >Liste</a>
    </div>
    </section>
</div>
</body>
</html>

