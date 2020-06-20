$(document).ready(function() {
  // alert('ciao');
  //Chiamata ajax
    $.ajax({
        // qui parte l'oggetto dei dischi dieci musicali
        'url': 'database/dischi.php',
        'method': 'GET',
        'success': function(disco) {

          var infodischi = JSON.parse(disco);
            // stampo le informazioni per ogni disco
            console.log(infodischi);
            stampahtml(infodischi);

        }
    });

    function stampahtml(infodischi) {
        var schedadisco = $('#entry-template').html();
        var template_function = Handlebars.compile(schedadisco);

        for (var i = 0; i < infodischi.length; i++) {
            console.log(i);
            var info= infodischi[i];
            var disco = {
                'poster': info.poster,
                'title' : info.title,
                'author': info.author,
                'year': info.year,
                'genre': info.genre
            }
            var html_finale = template_function(disco);
            $('.card_container.container').append(html_finale);
        }
    }
});
