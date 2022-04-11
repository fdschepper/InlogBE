
<?php 
include("./functions.php");

    is_authorized(["admin", "root", "moderator"]);
    
    echo "i am a " . $_SESSION["role"];
    echo "<br>";
    echo "my id is " . $_SESSION["id"];

    
?>