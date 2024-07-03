<?php
require_once('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
  <div class="container-fluid">
    <span class="navbar-brand fw-medium fs-2" href="#">Ajouter un vinyle</span>
  </div>
</nav>
<div class="container-fluid">
    <form action="ajout_script.php" method="post" enctype="multipart/form-data">
<br><br>
<p class="fs-5"> Title</p>
<input class="form-control" type="text" placeholder="Enter title" aria-label="default input example" style="width: 800px; height: 35px;">
<br>
<p class="fs-5"> Artist</p>
<input class="form-select" type="text" placeholder="Select Artist" aria-label="default input example" style="width: 800px; height: 35px;">
<br>
<p class="fs-5"> Year</p>
<input class="form-control" type="text" placeholder="Enter year" aria-label="default input example" style="width: 800px; height: 35px;">
<br>
<p class="fs-5"> Genre</p>
<input class="form-control" type="text" placeholder="Enter genre (Rock, Pop, Prog...)" aria-label="default input example" style="width: 800px; height: 35px;">
<br>
<p class="fs-5"> Label</p>
<input class="form-control" type="text" placeholder="Enter label (EMI, Warner, PolyGram, Univers sale...)" aria-label="default input example" style="width: 800px; height: 35px;">
<br>
<p class="fs-5"> Price</p>
<input class="form-control" type="text" aria-label="default input example " style="width: 800px; height: 35px;">
<br>
<p class="fs-5"> Picture</p>
<label for="formFile" class="form-label "><div style="width: 800px; height: 100px;"></label>
  <input type="file" id="formFile">
<br><br>
<div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="button">Ajouter</button>
  <button class="btn btn-primary" type="button">Retour</button>
</div>
</from>
</div>


</body>
</html>

