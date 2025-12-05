<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- 1 - Bootstrap CSS -->
    <!-- Versi bootstrapnya jsdelivr dari GPT yang untuk menjalankan fungsi Carousel Banner -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- 1 - Bootstrap CSS for Navbar 2.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="../../2_styleCSS/navbarStyle.css">-->
    <!-- 2 - Styling CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/popUpStyle.css">
    <!-- Coba Navbar dari Ecogada_Fullstack -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/navbar.css">
    <!-- 3 - React, ReactDOM, Babel Standalone -->
    <title>Halaman <?= $data['judul']; ?></title>
</head>
<body>
    <!-- Navbar -->
    <!--<div id="navbar"></div>--> <!-- Sengaja disable disini, butuh komentar tag // untuk menjelaskan masing2 kegunaan navbar yang dicode ini --> 
    <header class="fixed-navbar">
        <nav class="navbar navbar-expand-lg bg-custom"> <!-- Recently .navbar-light .bg-light -->
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="<?= BASEURL; ?>/img/shidokan-indonesia.png" alt="Shidokan Indonesia Logo" style="width: 80px;">
            </a>
            <button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgb(110, 4, 110);">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/index">Panel Utama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/instruktur">Panel Instruktur</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    </header>