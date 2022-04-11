

<?php include("./connect_db.php") ?>

<?php $id = $_GET["id"];

$sql = "SELECT * FROM `register` WHERE id = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result); ?>

<?php $id = $_GET['id']; ?>

<?php echo $record['email']; ?>

<form action="./index.php?content=updatescriptu" method="post">
<label for="">Email</label>
<input value="<?php echo $record['email']; ?>" placeholder="" type="text" name="email" id="email" Required>
<br>
<label for="">password (do not edit!)</label>
<input value="<?php echo $record['password']; ?>" placeholder="(please be carefull when editing)" type="text" name="password" id="password" Required>
<br>
<label for="">role (choose between "admin", "root", "customer" and "moderator")</label>
<input value="<?php echo $record['role']; ?>" placeholder="watch out for typos" type="text" name="role" id="role" Required>
<br>
<label for="">active</label>
<input value="<?php echo $record['activated']; ?>" placeholder="" type="number" name="active" id="active" Required>
<br>

<br>
<label for="">id of target user (recomended not to change)</label>
<input value="<?php echo $record['id']; ?>" placeholder="" type="number" name="id" id="id" Required>
<br>

<input class="Confirmbtn" type="submit" value="verander">