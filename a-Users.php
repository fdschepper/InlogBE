<?php include('./connect_db.php') ?>
<?php 
$sql = "SELECT * FROM `register` ORDER BY id DESC ";
$query = mysqli_query($conn, $sql);
?>

<table>
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>password (encrypted)</th>
    <th>role</th>
    <th>activated</th>
  </tr>

<?php

  while ($row = mysqli_fetch_array($query)) 
  {
    echo ' <tr> 
    <td>'.$row['id'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['password'].'</td>
    <td>'.$row['role'].'</td>
    <td>'.$row['activated'].'</td>
    
    
    

    <td> <a href="./index.php?content=edituser&id='.$row['id'].'">  Edit </td> <td> </a> <a href="./index.php?content=ban&id='.$row['id'].'">  Ban  </a> </td>

    </tr>';
  }

  echo "</table>";
  
?>

<?php
while ($row = mysqli_fetch_array($query)) 
{



?>


<?php } ?>