<?php include_once('./functions.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allociné</title>
    <!-- css -->
    <link rel="stylesheet" href="../style.css">
    <!-- js -->
    <script src="../assets/js/script.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-0" style="background-color: #fecc00;">
            <div class="container">
                <a class="navbar-brand" href="#">Allociné</a>
                <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="d-flex justify-content-start align-items-center">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01" style="margin-left: 285px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link px-3" href="#!">Films du Moment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#!">Top Films</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#!">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header -->
    <?php test(); ?>