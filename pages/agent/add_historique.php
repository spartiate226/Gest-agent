<!Doctype html>
<html class="">
<?php
 include('../../include/head.php');
?>
<body>
<?php
 include('../../include/header.php');
 $historiques=$class->Agent->historique($_GET["mat_agent"]);
?> 
<div class="bg-light p-5">
<div class=" mb-5 a-content">
<h2 class="border-bottom">Changer l'avancement</h2>
    <form class=" form p-5 d-flex flex-column justify-content-around" method="post" action="../../traitements/ajouter.php?enite=avancement&mat_agent=<?= $_GET['mat_agent']?>">

        <fieldset class="avancement p-2 border">
         <legend class="w-auto pl-1 pr-1">Avancement de l'agent</legend>
        <div class="row justify-content-between sub-form">
        <div class="col-md-5 mt-3 ">
            <label>Classe</label>
             <select class="form-control " name="classe" placeholder="Classe" type="text" required>
                <option value="01">1ere classe</option>
                <option value="02">2eme classe</option>
                <option value="03">3eme classe</option>
            </select>
        </div> 


            <div class="col-md-5 mt-3 ">
               <label>Echelle</label>
               <select class="form-control " name="echelle" placeholder="Echelle" required>
                <option value="01">Echelle 1</option>
                <option value="02">Echelle 2</option>
                <option value="03">Echelle 3</option>
               </select> 
            </div>
        </div>  
        


        <div class="row justify-content-between sub-form">

           <div class="col-md-5 mt-3 ">
              <label>Echellon</label>
              <select class="form-control   " name="echellon" placeholder="Echelon"   type="text" required>
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
            <select class="form-control" name="categorie" type="date" required>
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
    <div class="mt-4">
    <h2 class="border-bottom">Historique des avacements</h2>
        <table class="table table-bordered bg-light">
            <thead>
                <th>Matricule</th>
                <th>Categorie</th>
                <th>Classe</th>
                <th>Echelle</th>
                <th>Echellon</th>
                <th>Date de changement d'avancement</th>
            </thead>
            <tbody>
                <?php
                $i=0;
                  foreach ($historiques as $historique) {
                ?>
                <tr class="<?php if($i==0){ echo "bg-success text-light";}?>">
                    <td><?=$historique["mat_agent"]?></td>
                    <td><?=$historique["categorie"]?></td>
                    <td><?=$historique["classe"]?></td>
                    <td><?=$historique["echelle"]?></td>
                    <td><?=$historique["echellon"]?></td>
                    <td><?=$historique["change_date"]?></td>
                </tr>
                <?php
                $i++;
                  }
                ?>
            </tbody>
        </table>
    </div>

    </div>
</body>
</html>

