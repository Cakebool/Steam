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
    <link href="css/style.css" rel="stylesheet">
      <link href="romain.css" rel="stylesheet">
    <!-- JS -->
    <link href="js/script.js" rel="stylesheet">

  </head>
  <body>
    <header>
      <?php include 'menu.php'; ?>
    </header>

    <section style="background-color: #1A445F">
        <div class="container">
            <div class="row">
                <div class="content col-md-6">
                    <img class="img-responsive" src="img/avatar.jpg" style="height:230px;" alt="">
                    <form action="profiledit.php" method="post">
                        <p>Prénom</p>
                        <input type="text" name="prenom" value="Romain" />
                        <p>Nom</p>
                        <input type="text" name="Nom" value="Giraud" />
                        <p>Pseudo</p>
                        <input type="text" name="Pseudo" value="Cakebool" />
                        <p>Date de naissance</p>
                        <input type="text" name="birth" value="date de naissance" />
                        <input type="submit" value="Valider" />
                    </form>
                </div>
            </div>
        </div>
      
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>