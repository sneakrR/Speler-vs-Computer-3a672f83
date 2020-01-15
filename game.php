<html>
<form method='GET'>

<?php
if(!isset($_GET['p1'])){
?>

    <b>Maak je keuze player 1:</b><br>
    <select name='p1'>
    <option value='steen'>Steen</option>
    <option value='papier'>Papier</option>
    <option value='schaar'>Schaar</option>
    </select>
    <input type='submit' name='submit1'>

<?php
}
if(!isset($_GET['p2'])&& isset($_GET['p1'])){
    ?>

<b>Maak je keuze player 2:</b><br>
<select name='p2'>
<option value='steen'>Steen</option>
<option value='papier'>Papier</option>
<option value='schaar'>Schaar</option>
</select>
<input type='submit' name='submit2'>
<input type="hidden" name="p1" value="<?php echo $_GET['p1']; ?>">


<?php
}
?>
</form>
<?php
if (isset($_GET["p1"])){
    $keuze1 = $_GET["p1"];
}

if (isset($_GET["p2"])){
    $keuze2 = $_GET["p2"];
}
if($keuze1 == "steen" && $keuze2 == "papier"  ||
    $keuze1 == "schaar" && $keuze2 == "steen" ||
    $keuze1 == "papier" && $keuze2 == "schaar") {
        echo "player 2 wint";
    }
if($keuze2 == "steen" && $keuze1 == "papier" ||
    $keuze2 == "schaar" && $keuze1 == "steen" ||
    $keuze2 == "papier" && $keuze1 == "schaar") {
        echo "player 1 wint";
    }
if ($keuze1 == $keuze2) {
    echo "gelijkspel";
}
?>

// <?php
// }
// ?>
