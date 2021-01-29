<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          // TODO Display the students here, each student inside a new <li> element
       foreach ($students as $student) {
           echo "<li>$student</li>";
       }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           for($x = 1; $x <= 31; $x++) {
               echo "<option value='$x'>$x</option>";
           }
           // TODO list of day ?>
       </select>
       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           for($x = 1; $x <= 12; $x++) {
               echo "<option value='$x'>$x</option>";
           }
           // TODO list of month ?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           for($x = 2000; $x <= date("Y"); $x++) {
               echo "<option value='$x'>$x</option>";
           }
           // TODO list of year ?>
       </select>
     </form>
     <hr>
    <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
    <?php
    if(isset($_GET['sexe'])) {
        if($_GET['sexe'] === "fille") {
            echo "<p>Je suis une fille</p>";
        }
        else {
            echo "<p>Je suis une garçon</p>";
        }
    }
    else {
        echo "<p>Je suis indéfini</p>";
    }
    ?>

     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->

     <!-- TODO Instruction : Afficher ce bloc dans les autres cas -->

  </body>
</html>
