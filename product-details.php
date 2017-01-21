<?php
session_start();
include"conf/db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Product Details | E-Shopper</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/price-range.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<?php 

		include ('menu.php')

		?>

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse"> 
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							</ul>
						</div>
					</div>
					<?php

					$mydb = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8','root','root');

					$jeux = $mydb->query('SELECT Nom,Image,Description FROM jeux ORDER BY id DESC');
					if(isset($_GET['q']) AND !empty($_GET['q'])) {
						$q = htmlspecialchars($_GET['q']);
						$jeux = $mydb->query('SELECT Nom, Image, Description FROM jeux WHERE Nom LIKE "%'.$q.'%" ORDER BY id DESC');
						
							}
						?>
						<div class="col-sm-4" style="float: right;">
							<div class="form-group">
								<div class="input-group input-group-sm icon-addon addon-sm">
									<input type="text" placeholder="Texte" name="" id="schbox" class="form-control input-sm">
									<i class="icon icon-search"></i>
									<span class="input-group-btn">
										<button type="submit" class="btn btn-inverse">Rechercher</button>
									</span>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product-details.php">aventures</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product-details.php">sport</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product-details.php">Combat</a></h4>
								</div>
								
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product-details.php">Action</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product-details.php">Jeux de rôle</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product-details.php">Horreur</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop.php">Tous les jeux</a></h4>
								</div>
							</div>
							
						</div><!--/category-productsr-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<?php 
					
					if (isset($_GET["id"]))
					{
						$id = htmlspecialchars($_GET["id"]);

						$request = $db->prepare("SELECT jeux.id, Nom, Prix, Image, Description FROM jeux ORDER BY jeux.Prix DESC");
						$request->execute(array("id" => $id));
						 
						while ($data = $request->fetch())
						{
							?>
							<div class="product-details"><!--product-details-->
								<div class="col-sm-5">
									<div class="view-product">
										<img src="<?php echo $data["Image"] ?> ">
									</div>
								</div>
								<div class="col-sm-7">
									<div class="product-information"><!--/product-information-->
										<img src="images/product-details/new.jpg" class="newarrival" alt="" />
										<h2><?php echo $data["Nom"]; ?></h2>
										<img src="images/product-details/rating.png" alt="" />
										<span>
											<span><?php echo $data["Prix"]."€" ?></span>
											<label>Quantity:</label>
											<input type="text" value="1" />
											<button type="button" class="btn btn-fefault cart">
												<i class="fa fa-shopping-cart"></i>
												Add to cart
											</button>
										</span>
										<p><b>Availability:</b> In Stock</p>
										<p><b>Condition:</b> New</p>
										<p><b>Brand:</b> E-SHOPPER</p>
										<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
									</div><!--/product-information-->
								</div>
							</div><!--/product-details-->					
						</div>
					</div>
					<div class="jumbotron">
						<h1><?php echo $data["Nom"] ?></h1>
						<p><?php echo $data["Description"] ?></p>
					</div>
					<?php }?>
				<?php }?>
				
			</div>
		</section>  
		<script src="js/jquery.js"></script>
		<script src="js/price-range.js"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/main.js"></script>
	</body>
	</html>
