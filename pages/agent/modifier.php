<!Doctype html>
<html class="">
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 $postes=$class->Post->all();
 $directions=$class->Direction->all();
?> 
<div class="mt-5 mb-5 a-content">
    <form class=" form p-5 d-flex flex-column justify-content-around" method="post" action="../../traitements/modifier.php?enite=Agent&id=<?=$_GET['id']?>">

    <fieldset class="info_agent mb-3 p-2 border">
    <legend class="w-auto pl-1 pr-1">Informations sur l'agent</legend>
        <div class="row justify-content-between sub-form">
            <div class="col-md-3 mt-3">
            <label for="">Numero matricule</label>
            <input class="form-control" placeholder="Numero matricule" name="mat_agent" type="text"> 
            </div>

            <div class="col-md-3 mt-3">
            <label for="">Direction</label>
            <select class="form-control   " name="code_direction">
               <?php
                foreach ($directions as $direction) {
               ?>
                <option value="<?= $direction['nom_direction'] ?>"><?= $direction['nom_direction'] ?></option>
               <?php
                }
               ?>
            </select>
            </div>

            <div class="col-md-3 mt-3 ">
            <label>Emploi</label>
             <select class="form-control   " name="code_poste">
            <?php
                foreach ($postes as $poste) {
               ?>
                <option value="<?= $poste['intitule'] ?>"><?= $poste['intitule'] ?></option>
               <?php
                }
               ?>
            </select> 
            </div>

        </div>

        <div class="row justify-content-between sub-form">

            <div class="col-md-3 mt-3 ">
            <label>Nom agent</label>
            <input class="form-control" placeholder="Nom" name="nom_agent" type="text">
            </div>

            <div class="col-md-3 mt-3 ">
            <label>Prenom agent</label>
            <input class="form-control " placeholder="Prenom" name="prenom_agent" type="text">
            </div>

            <div class="col-md-3 mt-3 ">
            <label>Sexe</label>
            <select class="form-control  " name="sexe">
                <option selected value="Masculin">Masculin</option>
                <option  value="Feminin">Feminin</option>
            </select> 
            </div>  

        </div>

        <div class="row justify-content-between sub-form">
        <div class="col-md-3 mt-3 ">
            <label>Date de naissance</label>
             <input class="form-control " name="date_naiss" type="date">
            </div> 

            <div class="col-md-3 mt-3 ">
            <label>Lieu de naissance</label>
            <input class="form-control " placeholder="Lieu de naissance" name="lieu_naiss" type="text"> 
            </div> 

            <div class="col-md-3 mt-3 ">
            <label>Situation matrimoniale</label>
            <select class="form-control "  name="situation_matri">
                <option value="">Marie(e)</option>
                <option value="">Celibataire</option>
            </select>
            </div> 
        </div>


        <div class="row justify-content-between sub-form">
        <div class="col-md-3 mt-3 ">
            <label>Nombre d'enfants</label>
            <input class="form-control  " placeholder="Nombre d'enfants" type="number" name="nbr_enfant">
            </div> 

            <div class="col-md-3 mt-3 ">
            <label>Email</label>
            <input class="form-control " placeholder="Email" type="email" name="email"> 
            </div> 

            <div class="col-md-3 mt-3 ">
            <label>Numero de telephone</label>
            <input class="form-control " name="telephone" placeholder="Numero de telephone" type="text">
            </div> 
        </div>

        <div class="row justify-content-between sub-form">
        <div class="col-md-3 mt-3 ">
            <label>Adresse</label>
            <input class="form-control  "  name="adresse"placeholder="Adresse" type="text">
            </div> 

            <!-- <div class="col-md-3 mt-3 ">
               <label>Emploie</label>
               <select class="form-control  " name="emploi " placeholder="Emploi"    type="date" required> 
                <option value="op">opt1</option>
               </select>
            </div>  -->


            <div class="col-md-3 mt-3 ">
            <label>Nationalite</label>
            <input class="form-control "  name="nationalite"placeholder="Nationalite" type="text">
            </div>

            <div class="col-md-3 mt-3 ">
               <label>Fonctions</label>
               <select class="form-control " name="fonction" placeholder="fonction" >
                <option value="Directeur">Directeur</option>
                <option value="chef de service">chef de service</option>
                <option value="chef de departement">chef de departement</option>
                <option value="SUS">SUS</option>
                <option value="CUT">CUT</option>
                <option value="CUS">CUS</option>
               </select> 
            </div>


            <div class="col-md-3 mt-3 ">
            <label>Date embauche</label>
            <input class="form-control " name="date_embauche"  type="date">
            </div> 
        </div>

        <div class="row justify-content-between sub-form">
        <div class="col-md-3 mt-3 ">
            <label>Date de prise de service</label>
            <input class="form-control "  name="date_service"placeholder="Date de prise de service" type="date"> 
            </div> 


            <div class="col-md-3 mt-3 ">
            <label>Statut</label>
            <select class="form-control " name="statut" placeholder="Statut" >
            <option value="">opt1</option>
            </select>
            </div> 

            <div class="col-md-3 mt-3 ">
            <label>Niveau de recrutement</label>
            <input class="form-control " name="niveau_recru" placeholder="Niveau de recrutement" type="text">
            </div>  
        </div>

    </fieldset>


            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>

</body>
</html>

