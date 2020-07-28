<!Doctype html>
<html>

   <?php
   include('../../include/head.php');
   ?>
   <body>
   <?php
   include('../../include/header.php');
   if (isset($_POST) AND !empty($_POST)) {
       $auth=$class->Compte->auth($_POST);
       if($auth!=false){
           $_SESSION['admin']=$auth;
           header('location:../home/home.php');
       }
   }
   ?>

<div class="m-5 a-content">
    <h3 class="text-center">Authentification</h3>
    <div class="d-flex justify-content-center">
        <form class=" form p-5 d-flex flex-column w-25" action="" method="POST">
            <label for="">Identifiant</label>
            <input class="champ mb-1" type="text"  name="identifiant" required>
            <label class="mt-1" for="">Mot de passe</label>
            <input class="champ" type="password"  name="pwd" required>
            <button class="btn btn-info  mt-4" type="submit">connection  <i class="fa fa-save"></i></button>
        </form>
    </div>
</div>

</body>
</html>

