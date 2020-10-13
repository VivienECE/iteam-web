<?php
include("db.php");   
include("fonctions.php");
include("header/header.php");

?>
<center><br><br>

<h3>Les membres qui ne sont pas encore règler la cotisation</h3><br><br>
<?php
confirm_member();

?>

<br><br>
<form action='' method='POST'>
<input type="text" name="id" style="width:20%" required>
<button class='btn btn-success' type='submit' name='button_regle'>Règlé</button>
</form>


</center>