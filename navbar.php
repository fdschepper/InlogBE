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
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "home" || $active == "") {echo "active";} ?>" aria-current="page" href="./index.php?content=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "Thegame") {echo "active";} ?>" href="/index.php?content=Thegame">The game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "History") {echo "active";} ?>" href="/index.php?content=History">History</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if ($active == "Buy" || $active == "Themaking") {echo "active";} ?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item <?php if ($active == "Buy") {echo "active";} ?>" href="/index.php?content=Buy">Buy</a></li>
            <li><a class="dropdown-item <?php if ($active == "Themaking") {echo "active";} ?>" href="/index.php?content=Themaking">The making</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>