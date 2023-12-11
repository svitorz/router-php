<?php
    $existentFiles = glob('./pages/*.php'); 
    $existentFiles = array_map(fn ($file) => str_replace(['./pages/', '.php'], '', $file), $existentFiles);
    $existentFiles = array_filter($existentFiles, fn ($file) => $file !== '404');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Corazon was here</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">He4rtless Drop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <?php
        foreach($existentFiles as $menuItem) {
            ?>
            <li class="nav-item">
                <a class="nav-link active" href="/<?= $menuItem ?>"><?= str_replace('-', ' ', ucfirst($menuItem)) ?>
                    
                </a>
            </li>
            <?php
        }
        ?>
       
      </ul>
      <ul class="navbar-nav d-flex">
        <li class="nav-item">
            <a href="" class="nav-link">
            by @danielhe4rt
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    
