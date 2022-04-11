<?php

if (isset($_GET["content"]))
{
  $active = $_GET["content"];
}
else { $active = '';}

?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=home">Omori</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <?php 
          if (isset($_SESSION["id"]))
          {
            switch($_SESSION["role"]){
              case 'admin':
                echo '<li class="nav-item">
                <a class="nav-link '; if ($active == "a-home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=a-home">Home</a>
              </li>';
              break;
              case 'root':
                echo '<li class="nav-item">
                <a class="nav-link '; if ($active == "r-home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=r-home">Home</a>
              </li>';
              break;
              case 'moderator':
                echo '<li class="nav-item">
                <a class="nav-link '; if ($active == "m-home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=m-home">Home</a>
              </li>';
              break;
              case 'customer':
                echo '<li class="nav-item">
                <a class="nav-link '; if ($active == "c-home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=c-home">Home</a>
              </li>';
              break;
              default: break;
            }
          }
          else{
            echo '<li class="nav-item">
            <a class="nav-link ';if ($active == "home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=home">Home</a>
          </li>';
          }
        ?>
        
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "Thegame") {echo "active";} ?>" href="./index.php?content=TheGame">The game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "History") {echo "active";} ?>" href="./index.php?content=History">History</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if ($active == "Buy" || $active == "Themaking") {echo "active";} ?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item <?php if ($active == "Buy") {echo "active";} ?>" href="./index.php?content=Buy">Buy</a></li>
            <li><a class="dropdown-item <?php if ($active == "Themaking") {echo "active";} ?>" href="./index.php?content=TheMaking">The making</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php
  if (isset($_SESSION["id"])) 
  {

    switch ($_SESSION["role"]){
    case 'customer':
      //customer btn
    break;
    case 'root':
      //root btn
    break;
    case 'moderator':
      //moderator btn
    break;
    case 'admin':
      echo '<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle '; if ($active == "a-Users" || $active == "a-ResetPassword") {echo "active";} echo'" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Admin
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item '; if ($active == "Buy") {echo "active";} echo'" href="./index.php?content=a-Users">a-Users</a></li>
        <li><a class="dropdown-item '; if ($active == "Themaking") {echo "active";} echo'" href="./index.php?content=a-ResetPassword">Reset password</a></li>
      </ul>
    </li>';
    break;
    default: 
    break;
    }

    echo '<li class="nav-item">
  <a class="nav-link '; if ($active == "logout") {echo "active";} echo'" href="./index.php?content=Logout">Log out</a>
</li>';
    
  } 
  else
  {
    echo '<li class="nav-item">
    <a class="nav-link '; if ($active == "login") {echo "active";} echo'" aria-current="page" href="./index.php?content=Login">Login</a>
  </li>';
  echo '<li class="nav-item">
    <a class="nav-link '; if ($active == "register") {echo "active";} echo'" href="./index.php?content=Register">Sign up</a>
  </li>';
  }



        ?>
        
      </ul>
    </div>
  </div>
</nav>