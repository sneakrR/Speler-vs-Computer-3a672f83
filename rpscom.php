<?php

$enemy[0] = "Steen";
$enemy[1] = "Papier";
$enemy[2] = "Schaar";


$random = rand(0, count($enemy));

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$jij = $_POST['jij'];

       if ($jij == $enemy[$random]){
               echo "Het is gelijkspel";
       }

       elseif ($jij == 'Steen' && $enemy[2] == 'Schaar'){
               echo "Jij wint";
       }
       elseif ($jij == 'Papier' && $enemy[0] == 'Steen'){
               echo "Jij wint";
       }

       elseif ($jij == 'Schaar' && $enemy[1] == 'Papier'){
               echo "Jij wint";
       }

       elseif ($jij == 'Steen' && $enemy[1] == 'Papier'){
               echo "Jij verliest";
       }



       elseif ($jij == 'Papier' && $enemy[2] == 'Schaar'){
               echo "Jij verliest";
       }

       elseif ($jij == 'Schaar' && $enemy[0] == 'Steen'){
               echo "Jij verliest";
       }


       else {

               echo "Het is mislukt";
       }
}

       else{

?>
<html>

    <form method='POST' action=''>

    <b>Maak je keuze:</b><br>
    <select name='jij'>
    <option value='Steen'>Steen</option>
    <option value='Papier'>Papier</option>
    <option value='Schaar'>Schaar</option>
    </select>
    <input type='submit' name='submit'>

    </form>

<?php
}
?>
