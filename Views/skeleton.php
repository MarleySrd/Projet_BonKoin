<?php include(__DIR__ .'/header.php');?>

<body>
<nav>
  <ul class="nav nav-pills d-flex align-items-center justify-content-around">
    <li class="nav-item">
      <a class="nav-link" href=""><h2>Le Bon Koin</h2></a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-success" href="">Déposer une annonce</a>
    </li>
    <li class="nav-item">
      <input type="text" name="" value="" placeholder="Rechercher une annonce">
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><img class="logoAccount" src="../Assets/img/user.png"" alt="Logo account"></a>
    </li>
  </ul>
  
</nav>

<?php if (!empty($loopAnnonces)) {
    echo $loopAnnonces;
  } ?>
  </div>


<?php include(__DIR__ .'/footer.php');?>
</body>
</html>


