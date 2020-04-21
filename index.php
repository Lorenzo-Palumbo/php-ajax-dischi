<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <title>php-ajax-dischi</title>
    </head>
    <body>
        <header>
            <div id="logo">
                <a href="#">
                    <img src="https://antidote71.com/wp-content/uploads/2018/11/spotify-logo.png" alt="logo">
                </a>
            </div>
        </header>
        <div class="container-full">
            <main>
                <?php
                    include 'data.php';
                 ?>
                 <?php foreach ($cards as $key => $card) {?>
                     <div class="card">
                         <div class="card-img">
                             <img src="<?php echo $card['image'] ?>" alt="">
                         </div>
                         <div class="card-bottom">
                             <h3><?php echo $card['album_name'] ?></h3>
                             <h4><?php echo $card['artist_name'] ?></h4>
                             <small><?php echo $card['album_year'] ?></small>
                         </div>
                     </div>
                     <?php

                 } ?>
            </main>
        </div>
    </body>
</html>
