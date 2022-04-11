

<?php include("./connect_db.php") ?>



<?php var_dump($_GET); 

$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM `register` WHERE id = $id";

mysqli_query($conn, $sql);

header("Location: https://backendbembou.000webhostapp.com/InlogSysteemBe/index.php?content=a-Users");


?>