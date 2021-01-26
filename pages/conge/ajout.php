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
        <h3>Nouveau congé</h3>
        <form class=" form p-5 d-flex flex-column w-50" action="../../traitements/ajouter.php?enite=Conge" method="post">
            <label for="">Agent</label>
            <select class="champ" type="text"  name="mat_agent" required>
                <?php
                 $agents=$class->Agent->all();
                 foreach ($agents as $agent) {
                ?>
                <option value="<?php echo $agent->id ?>"><?php echo $agent->nom." ".$agent->prenom?></option>
                <?php
                 }
                ?>
            </select><br>
            <label for="">Début</label>
            <input class="champ" type="date"name="d_debut" required> <br>
            <label for="">Fin</label>
            <input class="champ" type="date"name="d_fin" required> <br>
            <label for="">Lieu jouissance</label>
            <input class="champ" type="text"name="lieujouissance" required> <br>
            <label for="">Période du travail</label>
            <input class="champ" type="text"name="periode_travail" required> <br>
            <label for="">Statut</label>
            <input class="champ" type="text"name="statut" required> <br>
            <label for="">Observation</label>
            <input class="champ" type="text"name="observation" required> <br>
            <button class="btn btn-info w-25 mt-4" type="submit">Ajouter <i class="fa fa-save"></i></button>
        </form>
    </div>
</body>
</html>

