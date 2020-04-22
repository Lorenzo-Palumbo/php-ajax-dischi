$(document).ready(function (){

    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);

    $.ajax({
        url:'server.php',
        method: 'GET',
        success: function(data){
            var albums = JSON.parse(data);
            for (var i = 0; i < albums.length; i++) {
                var album = albums[i];
                console.log(album);
                var context = {
                    img: album.image,
                    album: album.album_name,
                    artist: album.artist_name,
                    year: album.album_year
                 };
                var html = template(context);
                $('main').append(html);
            }
        },
        error: function(error){
            alert('errore');
        }
    });








});
