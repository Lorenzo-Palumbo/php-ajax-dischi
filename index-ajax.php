<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
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

            </main>
        </div>
        <script id="entry-template" type="text/x-handlebars-template">
            <div class="card">
                <div class="card-img">
                    <img src="{{img}}" alt="">
                </div>
                <div class="card-bottom">
                    <h3>{{album}}</h3>
                    <h4>{{artist}}</h4>
                    <small>{{year}}</small>
                </div>
            </div>
        </script>

        <script src="dist/js/main.js" charset="utf-8"></script>
    </body>
</html>
