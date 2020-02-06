<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZenOffice</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>

<header id="header">
    <nav class="navbar">
        <a class="navbar-brand" href="index.html">
            <img class="logo" src="public/images/LOGO.png" alt="logo">
        </a>
        <button id="navbar-toggler" class="navbar-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul>
                <li><a class="nav-links" href="./">Accueil</a></li>
                <li><a class="nav-links" href="concept.php">Concept</a></li>
                <li><a class="nav-links" href="services.php">Services</a></li>
                <li><a class="nav-links" href="zenattitude.php">ZenAttitude</a></li>
                <li><a class="nav-links" href="tarifs.php">Tarifs</a></li>
                <li><a class="nav-links" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      $('#navbar-toggler').on('click', function(){
            $('#navbar-collapse').toggleClass('show');
      });
    });
</script>

<main id="main">