<?php
    session_start();
    include"conf/db.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Steam</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/enzo.css" rel="stylesheet">

  </head>
  <body>
    <header>
      <?php include 'menu.php'; ?>
    </header>

    <section>
      <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item">
            <img class="first-slide" src="img/bf1.jpeg" alt="First slide">
          </div>
          <div class="item active">
            <img class="second-slide" src="img/gta5.jpg" alt="Second slide">
          </div>
          <div class="item">
            <img class="third-slide" src="img/re7.jpg" alt="Third slide">
          </div>
        </div>
      </div><!-- /.carousel -->

    </section>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <section class="customsection1">

        <div class="container marketing">

          <!-- Three columns of text below the carousel -->
            <h1 style="margin-top: 60px;">Voici les jeux les plus téléchargé du moment</h1>
          <div class="row customcircle">

              <div class="col-md-4">
                <div class="panel-body">
                <img class="img-responsive center-block" src="img/steep_logo.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>STEEP <span class="text-muted" style="color: silver;">(PC)</span></h2></h2>
                <p style="margin-top: 30px;">Parcourez un immense monde ouvert inspiré des Alpes et de l’Alaska, où la poudreuse est toujours bonne et la piste infinie. Défiez et domptez les sommets les plus épiques en ski, wingsuit, snowboard ou encore en parapente.</p>
              </div><!-- /.col-lg-4 -->
            </div>

              <div class="col-md-4">
                <div class="panel-body">
                <img class="img-responsive center-block" src="img/stellaris_logo.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>STELLARIS <span class="text-muted" style="color: silver;">(PC)</span></h2></h2>
                <p style="margin-top: 30px;">Explorez une vaste galaxie pleine d'émerveillement! Paradox Development Studio, réalisateurs de la série Crusader Kings et Europa Universalis présente Stellaris, une évolution du genre de la grande stratégie avec l'exploration de l'espace à sa base.</p>
              </div><!-- /.col-lg-4 -->
            </div>

            <div class="col-md-4">
                <div class="panel-body">
                <img class="img-responsive center-block" src="img/ark_logo.png" alt="Generic placeholder image" width="140" height="140">
                <h2>ARK <span class="text-muted" style="color: silver;">(PC)</span></h2></h2>
                <p style="margin-top: 30px;">En tant qu'homme ou femme échoué nu, mourant de froid et de faim sur une île mystérieuse, vous devrez chasser, récolter, fabriquer des objets, faire pousser des plantes et construire des abris pour survivre.</p>
              </div><!-- /.col-lg-4 -->
            </div>

          </div><!-- /.row -->

          <!-- START THE FEATURETTES -->
      </section>


        <section class="customsection2">

          <div class="row featurette">
            <div class="col-md-7" style="padding: 30px;">
              <h1 class="featurette-heading">H1Z1 <span class="text-muted">(PC)</span></h1>
              <p class="lead" style="margin-top: 70px;">H1Z1: King of the Kill is a fast-paced shooter in which players compete in large-scale chaotic PvP spectacles of skill, wit and a little luck, where everyone must fight to the death to stand alone at the top of the podium.</p>
            </div>
            <div class="col-md-5">
              <img class="image_droite" src="img/h1_icone.jpg" data-holder-rendered="true">
            </div>
          </div>

        </section>


        <section class="customsection3">

          <div class="row featurette">
            <div class="col-md-7 col-md-push-5" style="padding: 30px;">
              <h1 class="featurette-heading">Overwatch<span class="text-muted">(PC-PS4)</span></h1>
              <p class="lead" style="margin-top: 70px;">Soldats. Scientifiques. Aventuriers. Marginaux.
              Dans une période de crise mondiale, des héros venus de tous les horizons ont composé une équipe d’intervention internationale pour ramener la paix dans un monde déchiré par la guerre : OVERWATCH.
              Cette organisation a mis fin à la crise et préservé la paix pendant les décennies suivantes, inspiré une ère d’exploration, d’innovation et de découvertes.
              Aujourd'hui, le conflit s'étend à nouveau au monde entier… Répondrez-vous à l'appel qui a été lancé ?
              </p>
            </div>
            <div class="col-md-5 col-md-pull-7">
              <img class="featurette-image img-responsive center-block image_gauche"  src="img/overwatch_icone.jpg" data-holder-rendered="true">
            </div>
          </div>

        </section>


        <section class="customsection4">

          <div class="row featurette">
            <div class="col-md-7" style="padding: 30px;">
              <h1 class="featurette-heading">Call of duity Infinite Warfarre <span class="text-muted">(PC-PS4-XboxOne)</span></h1>
              <p class="lead" style="margin-top: 60px;">Le Multijoueur combine un système de mouvement fluide basé sur la dynamique, des cartes plaçant le joueur au centre de l'action, une personnalisation poussée et un tout nouveau système d'armures de combat. Le résultat : une expérience de jeu intense où chaque seconde compte. Les armures sont de redoutables machines de combat à la pointe de la technologie, et chacune est conçue pour un style de jeu particulier. Le joueur pourra aussi rejoindre l'une des quatre nouvelles unités d'intervention pour débloquer des cartes d'agent, des camouflages, des emblèmes et des armes propres à son unité.
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-responsive center-block image_droite" src="img/codiw_icone.jpg" data-holder-rendered="true">
            </div>
          </div>

        </section>


        <!-- FOOTER -->
        <footer>
          <p style="text-align: center;">Steam© 2016 Company, Inc. · Tout droit réservé</p>
        </footer>

      </div><!-- /.container -->





  <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script type="js/script.js">

    </script>
  </body>
</html>
