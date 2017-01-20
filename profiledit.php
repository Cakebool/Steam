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

    <section style="background-color: #1A445F">
        <div class="container">
            <div class="row">
                <div class="content col-md-6">
                    <img class="img-responsive" src="images/avatar.png" style="height:230px;" alt="">
                    <?php
                        $request = $db->prepare("SELECT * FROM joueurs");
                        $request->execute(array());
                        if (isset($_POST["pseudo"]) &&
                            isset($_POST["nom"]) &&
                            isset($_POST["prenom"]) &&
                            isset($_POST["email"])){
                                if( !empty($_POST["pseudo"]) &&
                                    !empty($_POST["nom"]) &&
                                    !empty($_POST["prenom"]) &&
                                    !empty($_POST["email"])){
                                $pseudo =htmlspecialchars($_POST["pseudo"]);
                                $nom = htmlspecialchars ($_POST["nom"]);
                                $prenom = htmlspecialchars ($_POST["prenom"]);
                                $email = htmlspecialchars ($_POST["email"]);
                                $id = $_SESSION["id_joueurs"];
                                $req = $db->prepare('UPDATE joueurs SET pseudo = :varpseudo, nom = :varnom, prenom = :varprenom, email = :varemail WHERE id = :varid');
                                $req->execute(array(
                                    'varpseudo' => $pseudo,
                                    'varnom' => $nom,
                                    'varprenom' => $prenom,
                                    'varemail' => $email,
                                    'varid' => $id,
                                    ));
                               
                                header('Location: profil.php');
                                }
                        }
                        
                    ?>
                        <form class="form-signin" method="post" action="profiledit.php">
                            <h2 class="form-signin-heading">Modifier le profil</h2>

                            <label for="inputPassword" class="sr-only">Nom</label>
                            <input type="text" name="nom" id="inputPassword" class="form-control" value="<?php echo $aJeux[0]["nom"] ?>" required="" style="margin-top: 40px;">

                            <label for="inputPassword" class="sr-only">Prénom</label>
                            <input type="text" name="prenom" id="inputPassword" class="form-control champ" value="<?php echo $aJeux[0]["prenom"] ?>" required="">

                            <label for="inputPassword" class="sr-only">Pseudo</label>
                            <input type="text" name="pseudo" id="inputPassword" class="form-control champ" value="<?php echo $aJeux[0]["pseudo"] ?>" required="">

                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" name="email" id="inputEmail" class="form-control champ" value="<?php echo $aJeux[0]["email"] ?>" required="" >


                            <button class="btn btn-lg btn-primary btn-block" name="sauver" type="submit">Sauvegarder</button>
                        </form>
                <?php
                        
                        
                    
                    ?>
                    
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