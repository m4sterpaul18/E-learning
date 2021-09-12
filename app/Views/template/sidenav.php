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
    <link rel="stylesheet" href="/e-learning/public/assets/css/style.css">
</head>
<body>
    <nav class="navibar">
        <ul class="navi-nav">
            <p class="text-light text-center my-4 logo">Howdy! <?=session()->get('firstname')?></p>
            <li class="navi-item">
                <a class="navi-link" href="/e-learning/public/dashboard"><i class="fas fa-home"></i> <span class="link-text">Home</span></a>
            </li>
            <li class="navi-item">
                <a class="navi-link" href="/e-learning/public/profile"><i class="fas fa-user-alt"></i> <span class="link-text">Profile</span></a>
            </li>
            <li class="navi-item">
                <a class="navi-link" href=""><i class="fas fa-book-open"></i> <span class="link-text">Learn</span></a>
            </li>
            <li class="navi-item">
                <a class="navi-link" href="/e-learning/public/ranking"><i class="fas fa-gamepad"></i> <span class="link-text">Ranking</span></a>
            </li>
            <li class="navi-item">
                <a class="navi-link" href="/e-learning/public/logout"><i class="fas fa-sign-out-alt"></i> <span class="link-text">Sign Out</span></a>
            </li>
        </ul>
    </nav>
