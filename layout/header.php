<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Shelf - Your open library</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        
        <?php

            $logged = $_SESSION["logged"] ?? "false";
            $user = $_SESSION["username"] ?? null;

            if($logged == "true") :
        
        ?>     
        <nav class="navbar">
            <div class="logo">Open Shelf</div>
            <ul>
                <li class="nav-links"><a href="/main-page">Home</a></li>
                <li class="nav-links"><a href="/catalogue">Catalogue</a></li>
                <li class="nav-links"><a href="/catalogue/search-to-lend">Lending book</a></li>
                <li class="nav-links"><a href="/author">For author</a></li>
                <li class="nav-links"><a href="">FAQs</a></li>
            </ul>

            <a href="/my-profile">    
                <button class="btn-profile"><img class="img-profile" src="/assets/profile.webp" alt="My profile"></button>
            </a>
       </nav>

        <?php
            
            else :

        ?>
        
        <nav class="navbar">
            <div class="logo">Open Shelf</div>
            <ul>
                <li class="nav-links"><a href="/main-page">Home</a></li>
                <li class="nav-links"><a href="/catalogue">Catalogue</a></li>
                <li class="nav-links"><a href="/catalogue/search-to-lend">Lending book</a></li>
                <li class="nav-links"><a href="/author">For author</a></li>
                <li class="nav-links"><a href="">FAQs</a></li>
            </ul>        
            <div>
                <a href="/register">
                    <button class="btn-signin">Sign in</button>
                </a>
                <a href="/login">
                    <button class="btn-login">Login</button>
                </a>
                <a href="/my-profile">    
                     <button class="btn-profile"><img class="img-profile" src="/assets/profile.webp" alt="My profile"></button>
                </a>
            </div>        
        </nav>

        <?php endif; ?>

    </header>
