$(document).ready(function (){

    $.ajax({
        url:'server.php',
        method: 'GET',
        success: function(data){
            var albums = JSON.parse(data);
            console.log(dati);
            for (var i = 0; i < albums.length; i++) {
                var album = albums[i];
            }
        },
        error: function(error){
            alert('errore');
        }
    });








});
