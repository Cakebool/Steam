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
	<title>Cart | E-Shopper</title>
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
<?php include 'menu.php'; ?>
<body>
	
	<header id="header"><!--header-->
		
		
		
		
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
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="shop.php">Home</a></li>
					<li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
				</table>
			</div>





			<div class="row">
				<!-- Large modal -->
				<button type="button" class="btn btn-lg btn-primary btn-block" style="margin-bottom: 30px;" data-toggle="modal" data-target=".bs-example-modal-lg">Validez la commande</button>

				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							
							<div class="modal-body">
								
								<H2>Merci de votre commande</H2>
								<h4>Pour revenir a la boutique, cliquez <a href="shop.php"/>ici</h4>		




							</div>
						</section> <!--/#cart_items-->

						<script src="js/jquery.js"></script>
						<script src="js/bootstrap.min.js"></script>
						<script src="js/jquery.scrollUp.min.js"></script>
						<script src="js/jquery.prettyPhoto.js"></script>
						<script src="js/main.js"></script>
					</body>
					</html>