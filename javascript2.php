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
            #droppable { height: auto; min-height: 500px; border: 1px solid black; background-color: yellow; z-index: 0;}
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
                        <div class="row">
                            <div class=" draggable miniature">
                                <div class="jumbotron row" id="accueil">
                                    <h1 class="text-center">Bienvenue dans notre espace</h1>
                                    <img class="col-sm-12 col-md-5" src="assets/img/accueil.jpg" alt="Accueil">     
                                    <p class="col-sm-12 col-md-7">Nous sommes spécialisés dans tous types de constructions et nous prenons en charge les projets de A à Z. Vous pouvez nous confier en toute confiance des projets de toutes dimensions, des plus simples aux plus osés. Notre équipe est efficace, réactive et compétente. Nous entretenons toujours un dialogue de tous les instants avec nos clients. Bien qu'à la pointe de notre activité nous pratiquons des prix rigoureux et adaptés à tous les budgets.</p>
                                </div>
                            </div>

                            <div class=" draggable miniature">
                                <div class="jumbotron row" id="qui">
                                    <h1 class="text-center">Une équipe efficace</h1>
                                    <img class="col-sm-12 col-md-5 col-md-push-7" src="assets/img/equipe.jpg" alt="Equipe"> 
                                    <p class="col-sm-12 col-md-7 col-md-pull-5">Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients. Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients. Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients.Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients.</p>
                                </div>
                            </div>
                            <div class=" draggable miniature">
                                <div class="jumbotron row" id="qui">
                                    <h1 class="text-center">Une équipe efficace</h1>
                                    <img class="col-sm-12 col-md-5 col-md-push-7" src="assets/img/equipe.jpg" alt="Equipe"> 
                                    <p class="col-sm-12 col-md-7 col-md-pull-5">Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients. Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients. Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients.Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients.</p>
                                </div>
                            </div>

                            <div class=" draggable miniature">
                                <div class="jumbotron row" id="qui">
                                    <h1 class="text-center">Une équipe efficace</h1>
                                    <img class="col-sm-12 col-md-5 col-md-push-7" src="assets/img/equipe.jpg" alt="Equipe"> 
                                    <p class="col-sm-12 col-md-7 col-md-pull-5">Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients. Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients. Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients.Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients.</p>
                                </div>
                            </div>

                            <div class=" draggable miniature">
                                <div class="jumbotron row" id="qui">
                                    <h1 class="text-center">Une équipe efficace</h1>
                                    <img class="col-sm-12 col-md-5 col-md-push-7" src="assets/img/equipe.jpg" alt="Equipe"> 
                                    <p class="col-sm-12 col-md-7 col-md-pull-5">Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients. Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients. Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients.Notre équipe est jeune, experte et motivée. Notre entreprise est certifiée ISO 9001. Nous cherchons en permanence à améliorer la qualité de nos services et nous sommes à l'écoute de nos clients.</p>
                                </div>
                            </div>


                            <div class="draggable">
                                <p>Troisieme drag</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container">
                        <p>Drop here</p>
                        <div id="droppable">


                        </div>
                        <form>
                            <input type="submit" id="downloadButton" name="ok" value="Générer le projet" />
                        </form>
                    </div>
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

            var link = document.createElement('a');
            link.setAttribute('download', 'test.zip');
            link.setAttribute('href', 'Zip.zip');
            link.click();

            $.appendTo('')
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
                        console.info("Data: " + data + "\nStatus: " + status);
                    })
                    .fail(function (data, status) {
                        // Retour dans le code Javascript apres requete asynchrone
                        console.error("FAILED Data: " + data + "\nStatus: " + status);
                    })
                    ;
        });


    </script>


</body>
</html>