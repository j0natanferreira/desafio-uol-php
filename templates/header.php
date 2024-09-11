<?php
    include_once("config/base_url.php");
    include_once("config/process.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL?>assets/css/styles.css">
    <!-- FAVICON -->
    <link rel="shortcut icon"  href="<?= $BASE_URL?>assets/img/favicon.png" type="image/x-icon">
    <title>Desafio UOL</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark">
            <a class="logo" href="<?= $BASE_URL?>index.php" class="text-center">
                <img src=" <?= $BASE_URL?>assets/img/logo.webp" alt="logomarca">
            </a>
        </nav>
        <div class="main-title">
            <i class="fa-regular fa-user"></i>
            <h1>Painel de clientes</h1>      
        </div>
        <hr class="bg-dark">
    </header>