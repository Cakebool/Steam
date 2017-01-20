<?php
    session_start();
    include"conf/db.php";
   $request = 'select * FROM joueurs WHERE id="'.$_SESSION["id_joueurs"].'"';
$oJeux= $db->query($request);
$aJeux= $oJeux->fetchAll(PDO::FETCH_ASSOC);

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
    <link href="css/style.css" rel="stylesheet">
    <link href="rom.css" rel="stylesheet">
    <!-- JS -->
    <link href="js/script.js" rel="stylesheet">

  </head>
  <body>
    <header>
      <?php include 'menu.php'; ?>
    </header>

    <section class="fond" style="background-color: #1A445F">
        <div class="container">
            <div class="row">
                <div class="infouser col-md-12">
                    <div class="infouser_content row">
                        
                        <?php 
                        $request = $db->prepare("SELECT joueurs.id, pseudo, avatar FROM joueurs");
                        $request->execute(array());
                        ?>
                        
                            <div class="infouser_avatar col-md-3">
                                <img class="img-responsive" src="images/avatar.png" alt="" style="height:230px;">
                            </div>
                            <div class="infouser_persona col-md-6">
                                <h2 class="name"><?php echo $aJeux[0]["pseudo"] ?></h2>
                            </div>
                              
                        <div class="infouser_badge col-md-3">
                            <a href="profiledit.php" class="btn btn-primary btn-primary">Modifier le profil</a>
                        </div>
                    </div>
                </div>
                <div class="bibli col-md-12">
                    <div class="bibli_content row">
                        <h1>Mes jeux</h1>
                        <a href="profilgames.php" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-book"></span> Ma bibliothèque de jeux</a>
                    </div>
                </div>
                <div class="bibli col-md-12">
                    <div class="bibli_content row">
                        <a><h1>Jeux des Amis</h1></a>
                        
                    </div>
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
<!-- -->