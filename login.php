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
	<link href="css/login.css" rel="stylesheet">

</head>
<body>
	<header>
		<?php include 'menu.php'; ?>
	</header>

	<div class="container">

		<form class="form-signin" method="post" action="login.php">
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="margin-top: 40px";>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required="" style="    margin-top: 10px;">
			<button class="btn btn-lg btn-primary btn-block" type="submit">log in</button>
		</form>
        <?php
        if(isset($_POST["email"]) and isset($_POST["pwd"])){
            $email = htmlspecialchars($_POST["email"]);
            $pwd = htmlspecialchars($_POST["pwd"]);

        $request = $db->prepare("SELECT id FROM joueurs WHERE email LIKE :email AND pwd = :pwd");
        $request->execute(
                array(
                    "email" => $email,
                    "pwd" => $pwd
                    )
            );

        $joueurs = $request->fetchAll();
        if(sizeof($joueurs) > 0){

                $id_joueurs = $joueurs[0]["id"];
                $_SESSION["id_joueurs"] = $id_joueurs;
               
               
                header('Location: index.php');
            }

        else {
            echo "Erreur : mot de passe ou pseudo incorrect";
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