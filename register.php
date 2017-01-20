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
	<link href="css/register.css" rel="stylesheet">

</head>
<body>
	<header>
		<?php include 'menu.php'; ?>
	</header>

	<div class="container">

		<form class="form-signin" method="post" action="register.php">
			<h2 class="form-signin-heading">Please sign in</h2>

			<label for="inputPassword" class="sr-only">Nom</label>
			<input type="text" name="nom" id="inputPassword" class="form-control" placeholder="Nom" required="" style="margin-top: 40px;">

			<label for="inputPassword" class="sr-only">Prénom</label>
			<input type="text" name="prenom" id="inputPassword" class="form-control champ" placeholder="Prénom" required="">

			<label for="inputPassword" class="sr-only">Pseudo</label>
			<input type="text" name="pseudo" id="inputPassword" class="form-control champ" placeholder="Pseudo" required="">


            <label for="inputPassword" class="sr-only">Date de naissance</label>
			<input type="datetime-local" name="birth" id="inputPassword" class="form-control champ" placeholder="Dare de naissance" required="">


			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" name="email" id="inputEmail" class="form-control champ" placeholder="Email address" required="" >

			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="pwd" id="inputPassword" class="form-control champ" placeholder="Password" required="">

			<label for="inputPassword" class="sr-only">Confimez</label>
			<input type="password" name="pwdconf" id="inputPassword" class="form-control champ" placeholder="Confirmez le mot de passe" required="">

			
			<button class="btn btn-lg btn-primary btn-block" name="signin" type="submit">Sign in</button>
		</form>
        <?php
            
        if (isset($_POST["pseudo"]) &&
            isset($_POST["nom"]) &&
            isset($_POST["prenom"]) &&
            isset($_POST["birth"]) &&
            isset($_POST["pwdconf"]) &&
            isset($_POST["pwd"]) && 
            isset($_POST["email"])){
                if( !empty($_POST["pseudo"]) &&
                    !empty($_POST["nom"]) &&
                    !empty($_POST["prenom"]) &&
                    !empty($_POST["birth"]) &&
                    !empty($_POST["pwd"]) &&
                    !empty($_POST["pwdconf"]) &&
                    !empty($_POST["email"])){
                $pseudo =htmlspecialchars($_POST["pseudo"]);
                $nom = htmlspecialchars ($_POST["nom"]);
                $prenom = htmlspecialchars ($_POST["prenom"]);
                $birth = htmlspecialchars ($_POST["birth"]);
                $pwd = htmlspecialchars ($_POST["pwd"]);
                $email = htmlspecialchars ($_POST["email"]);
                $request = $db->prepare("SELECT id FROM joueurs WHERE pseudo LIKE :pseudo OR email LIKE :email");
                $request->execute(
                    array(
                        "pseudo" => $pseudo,
                        "email" => $email
                    )
                );
                $joueurs = $request->fetchAll();
                if (sizeof($joueurs) ==0){
                }
                else{
                    echo "Erreur : ce joueurs existe déjà";
                }
                $request = $db->prepare("INSERT INTO joueurs (pseudo, pwd, email, prenom, nom, birth ) VALUES (:pseudo, :pwd, :email, :prenom, :nom, :birth)");
                $request->execute(
                    array(
                        "pseudo" => $pseudo,
                        "nom" => $nom,
                        "prenom" => $prenom,
                        "birth" => $birth,
                        "pwd" => $pwd,
                        "email" => $email
                    )
                );
                header('Location: index.php');
            }
            else{
                echo "Merci de renseigner tous les champs";
            }
        }
        ?>

	</div> <!-- /container -->


	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
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