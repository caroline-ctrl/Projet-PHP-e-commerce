<<<<<<< HEAD <?php include('inc/header.php') ?> <!-- row et col-3 dans le header -->

  <div class="col-9 jumbotron">
    <h1 class="display-3">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>



  <!-- ceci ferme la row du corps de la page -->
  =======
  <?php
              $server = 'localhost';
              $login = 'root';
              $pass = '';

              try {
                $connection = new PDO("mysql:host=$server;dbname=present", $login, $pass);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              } catch (Exception $e) {
                echo $e->getMessage();
                die();
              }


              include('vue/header.php') ?>

  <div class="col-9 jumbotron">
    <h1 class="display-3">Cadeaux d'invités </h1>
    <p class="lead">Marchand de bonheur depuis 2010, Les Petits Cadeaux est le spécialiste du petit cadeau d’invité de mariage chic et moderne. Boite à dragées personnalisée, petit cadeau d’assiette pas cher, badge personnalisé original, jolies boites coeur... le site propose une sélection originale de cadeaux pour les invités à personnaliser et des centaines d'étiquettes personnalisées pour les rendre tout à fait unique.</p>
    <hr class="my-4">
    <p>Notre concept : tous les designs de la collection sont entièrement personnalisables, qu’il s’agisse d’y ajouter des prénoms, une date, quelques mots, mais aussi de modifier les couleurs du fond, de l’illustration ou du texte. Notre studio graphique peut, sur simple demande, adapter les étiquettes aux couleurs exactes choisies par nos clients. Notre nuancier exclusif de 70 teintes, des plus vives au plus délicates, est disponible en ligne.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="magasin.php" role="button">Voir les produits</a>
    </p>
  </div>



  >>>>>>> 98eb2675e0d29f121b7506ce5b8312121162e1df
  </div>



  <<<<<<< HEAD <?php include('inc/footer.php') ?>=======<?php include('vue/footer.php') ?> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>

    </html>
    >>>>>>> 98eb2675e0d29f121b7506ce5b8312121162e1df