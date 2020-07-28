<!Doctype html>
<html>
<?php
 include('../../include/head.php');
?>
<body>
<style>
</style>
<?php
 include('../../include/header.php');
$agents=$class->Agent->all();
?>
    <h3>LISTE DES AGENTS</h3>
        <div class="row justify-content-center">
            <?php
            foreach ($agents as $agent) {
                ?>
                <section class="col-md-5 agent-card m-2 p-2">
                <div class="row">
                <img style="height:200px" class="col-md-4" src="<?=$agent['photo']?>" alt="">
                <ul class="col-md-7 p-2">
                   <li><b>Matricule :</b> <?=$agent['mat_agent']?></li>
                   <li><b>Nom :</b> <?=$agent['nom_agent']?></li>
                   <li><b>Prenom(s) :</b> <?=$agent['prenom_agent']?></li>
                   <li><b>Date denaissance :</b> <?=$agent['date_naiss']?></li>
                   <li><b>Lieu de naissance :</b> <?=$agent['lieu_naiss']?></li>
                   <li><b>Adresse :</b> <?=$agent['adresse']?></li>
                   <li><b>Telephone :</b> <?=$agent['telephone']?></li>
                   <li><b>Email :</b> <?=$agent['email']?></li>
                </ul>
                </div>
                <ul class="p-3">
                   <li><b>Direction :</b><?=$agent['code_direction']?></li>
                   <li><b>Emploi :</b><?=$agent['code_poste']?></li>
                   <li><b>Fonction :</b><?=$agent['fonction']?></li>
                   <li><b>Sexe :</b><?=$agent['sexe']?></li>
                   <li><b>Situation matrimoniale :</b><?=$agent['situation_matri']?></li>
                   <li><b>Nombres d'enfants :</b><?=$agent['nbr_enfant']?></li>
                   <li><b>Nationalite :</b><?=$agent['nationalite']?></li>
                   <li><b>Date d'embauche :</b><?=$agent['date_embauche']?></li>
                   <li><b>Date de prise de service :</b><?=$agent['date_service']?></li>
                   <li><b>Statut :</b><?=$agent['statut']?></li>
                   <li><b>Niveau de recrutrement :</b><?=$agent['niveau_recru']?></li>
                </ul>
                <div>
                <a class="btn btn-info" href="modifier.php?id=<?php echo $agent['mat_agent']?>">Modifier</a>
                <a class="btn btn-warning" href="add_historique.php?mat_agent=<?= $agent['mat_agent']?>">avancements</a>
                <a class="btn btn-danger" href="../../traitements/supprimer.php?enite=Agent&id=<?=$agent['mat_agent']?>">Supprimer</a>
                </div>
                </section>
        <?php
            }
            ?>

        </div>
</body>
</html>