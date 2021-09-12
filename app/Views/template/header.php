<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- own css -->
    <link rel="stylesheet" type="text/css" href="/e-learning/public/assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:var(--bg-primary);">
        <div class="container-fluid">
            <!-- insert logo here -->
            <a href="<?= base_url('e-learning/public/')?>" class="navbar-brand" style="font-size:1.5rem;">E-learning <i class="fas fa-graduation-cap fa-lg"></i></a>
            <!-- toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <!-- links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('e-learning/public/register')?>">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('e-learning/public/login')?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
