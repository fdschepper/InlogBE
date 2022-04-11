logout!!!!!!!!
<?php 
//maakt session leeg
unset($_SESSION["id"]);
unset($_SESSION["role"]);

//verwijder het session bestand
session_destroy();

header("Location: ./index.php?content=message&alert=logout")
?>