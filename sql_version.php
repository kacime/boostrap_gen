<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Draggable - Default functionality</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <style>
            .draggable {  z-index: 1; }
            #droppable { height: auto; min-height: 500px; z-index: 0;}
            #final .container{border: 1px solid black;}
            .miniature p {font-size: 0.8em;}
            .miniature h1 {font-size: 2em;}
            .container { width: 95%; }
        </style>
    </head>


    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="container">

                    <select name="carlist" form="carform">
                      <option value="titre">titre</option>
                      <option value="vignette">vignette</option>
                    </select>


                    <div id="selection"></div>


                    </div>
                </div>

                <div id="final" class="col-md-8">
                    <div class="container">
                        <p>Drop here</p>
                        <div id="droppable">


                        </div>
                        <form>
                            <input type="submit" id="downloadButton" name="ok" value="Générer le projet" />
                            <a href=""></a>
                        </form>
                    </div>
                </div>

            </div>
        </div>






    <?php
    if (file_exists('Zip.zip')) {
        unlink('Zip.zip');
    }
    ?>






    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <script   src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"   integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>



        $(function () {




            $('.draggable').draggable({
                revert: true,
                drag: function (event, ui) {
                }
            });

            $(".draggable").on("drag", function (event, ui) {
                var index = $(".draggable").index($(this));
                $("span").html(index);
            });

            $("#droppable").droppable({
                drop: function (event, ui) {
                    var draggableText = ui.draggable.html();
                    $(this).html($(this).html() + draggableText);
                }
            });


        });

        function downloadZip() {
//            while (!UrlExists('http://localhost:8888/Zip.zip')) {
//            while (!UrlExists('http://localhost/Zip.zip')) {
//
//            }
            $('form a').remove();
            var link = document.createElement('a');
            link.setAttribute('download', 'test.zip');
            link.setAttribute('href', 'Zip.zip');
            link.innerHTML = ("Veuillez utiliser ce lien si le telechargement ne se lance pas automatiquement...");
            link.click();
            $('form').append(link);


        }

        function UrlExists(url) {
            var http = new XMLHttpRequest();
            http.open('HEAD', url, false);
            http.send();
            return http.status != 404;
        }


        $('#downloadButton').click(function (e) {
            // Empeche l'action par default du bouton de s'executer
            // (envoyer le submit et donc recharger la page)
            e.preventDefault();

            var elementHtml = document.getElementById("droppable").innerHTML;

            // Executer un appel POST asynchrone (le navigateur fera la requete)
            $.post("copy.php",
                    {
                        page: elementHtml,
                    }
            )
                    .done(function (data, status) {
                        // Retour dans le code Javascript apres requete asynchrone
                        alert("de la balle");
                        //console.info("Data: " + data + "\nStatus: " + status);
                        downloadZip();
                    })
                    .fail(function (data, status) {
                        // Retour dans le code Javascript apres requete asynchrone
                        console.error("FAILED Data: " + data + "\nStatus: " + status);
                    })
                    ;
        });





        $(document).ready(function() {
        $('select').change(function() {
        //On récupère le nom
        alert('changement');
        var value = $(this).val();

        //On prépare l'Ajax
        $.post("traitement.php",
                    {
                        nom: value,
                    }
            )
                    .done(function (data, status) {
                        // Retour dans le code Javascript apres requete asynchrone
                         $("#selection").html(data);
                       
                    })
                    .fail(function (data, status) {
                        // Retour dans le code Javascript apres requete asynchrone
                        console.error("FAILED Data: " + data + "\nStatus: " + status);
                    })
                    ;
    });
});








    </script>


</body>
</html>