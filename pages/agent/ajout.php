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
    <h3 class="m-5"> Nouveau Agent...</h3>
    <form class=" form p-5 d-flex flex-column justify-content-around" method="post" enctype="multipart/form-data" action="../../traitements/ajouter.php?enite=Agent">

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


            <div class="col-md-3 mt-3 ">
            <label>Photo</label>
            <input class="form-control " name="photo" placeholder="Photo" type="file"> 
            </div> 
        </div>

    </fieldset>


        <fieldset class="avancement p-2 border">
         <legend class="w-auto pl-1 pr-1">Avancement de l'agent</legend>
        <div class="row justify-content-between sub-form">
        <div class="col-md-5 mt-3 ">
            <label>Classe</label>
             <select class="form-control " name="classe" placeholder="Classe" type="text" >
                <option value="01">1ere classe</option>
                <option value="02">2eme classe</option>
                <option value="03">3eme classe</option>
            </select>
        </div> 


            <div class="col-md-5 mt-3 ">
               <label>Echelle</label>
               <select class="form-control " name="echelle" placeholder="Echelle" >
               <option value="01">Echelle 1</option>
                <option value="02">Echelle 2</option>
                <option value="03">Echelle 3</option>
               </select> 
            </div>
        </div>  
        


        <div class="row justify-content-between sub-form">

           <div class="col-md-5 mt-3 ">
              <label>Echelon</label>
              <select class="form-control   " name="echellon" placeholder="Echelon"   type="text" >
              <option value="01">Echelon 1</option>
                <option value="02">Echelon 2</option>
                <option value="03">Echelon 3</option>
                <option value="04">Echelon 4</option>
                <option value="05">Echelon 5</option>
                <option value="06">Echelon 6</option>
                <option value="07">Echelon 7</option>
                <option value="08">Echelon 8</option>
                <option value="09">Echelon 9</option>
                <option value="10">Echelon 10</option>
                <option value="11">Echelon 11</option>
                <option value="12">Echelon 12</option>
                <option value="13">Echelon 13</option>
                <option value="14">Echelon 14</option>
                <option value="15">Echelon 15</option>
                <option value="16">Echelon 16</option>
                <option value="17">Echelon 17</option>
                <option value="18">Echelon 18</option>
              </select>
            </div> 

            <div class="col-md-5 mt-3 ">
            <label>Categorie</label>
            <select class="form-control" name="categorie" type="date" >
                <option value="U">U</option>
                <option value="N">N</option>
                <option value="M">M</option>
                <option value="S">S</option>
                <option value="F">F</option>
                <option value="G">G</option>
            </select>
            </div>
        </div>
        </fieldset>


            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>

</body>
</html>

