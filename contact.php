<?php


 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>contacter moi!</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- font de google -->
	
</head>
<body>
   
<!-- cote logo -->
<header class="py-4">
	<div class="container">
			<div id="logo">
				<h1> <a href="index.php"><span class="fa fa-home" aria-hidden="true"></span><span style="color:blue">B</span><span>P</span><span style="color: green">S</span></a> batti plus service</h1>
			</div>
		<!-- partie navigation -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle">Menus</label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class="mr-lg-4 mr-3"><a href="index.php">acceuil</a></li>
				<li class="mr-lg-4 mr-3"><a href="services.php">nos services</a></li>
				<li class="mr-lg-4 mr-3">
				
				<label for="drop-2" class="toggle">Compte<span class="fa fa-angle-down" aria-hidden="true"></span> </label>
				<a href="#">Compte<span class="fa fa-angle-down" aria-hidden="true"></span></a>
				<input type="checkbox" id="drop-2"/>
				<ul class="inner-ul">
					<li><a href="inscrire.php">S'incrire</a></li>
					<li><a href="login.php">connexion</a></li>
				<li><a href="deconnexion.php">deconnexion</a></li>
				</ul>
				</li>
				<li class="mr-lg-4 mr-3"><a href="properties.html">moi</a></li>
				<li class="mr-lg-4 active"><a href="contact.php">Contact </a></li>
			</ul>
			<div class="login-icon mt-2">
				<a class="user" href="#popup3"><span class="fa fa-user-circle-o" aria-hidden="true"></span></a>
			</div>
		</nav>
		<div class="clear"></div>
	
	</div>
</header>

<div class="banner inner-banner" id="home">
	<div class="container">

	</div>
</div>

<section class="contact py-5 my-lg-5">
	<div class="container">
		<h3 class="heading mb-5">Contact nous</h3>
		<div class="row contact_information">
			<div class="col-md-6">
				<div class="contact_right p-lg-5 p-4">
					<form action="" method="POST">
						<div class="w3_agileits_contact_left">
							<h3 class="mb-3">Contact</h3>
							<input type="text" name="name" placeholder="Your Votre nom" required="">
							<input type="email" name="email" placeholder=" Votre email" required="">
							<input type="text" name="Phone" placeholder="votre  numero" required="">
							<textarea placeholder="Votre message ici" required=""></textarea>
						</div>
						<div class="w3_agileits_contact_right">
							<button type="submit" name="submit" >Envoyer</button>
						</div>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
			<div class="col-md-6 contact_left p-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6350041.310790406!2d30.68773492426509!3d39.0014851732576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2sTurkey!5e0!3m2!1sen!2sin!4v1522753415269">Côte D'ivore</iframe>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="mt-5 information">
					<h4 class="text-uppercase mb-4"><span class="fa fa-comments"></span> Communication</h4>
					<p class="mb-3 text-capitalize">Pour plus d'information veuiller nous contacter  <a href="mailto:info@battiserviceplus.com">info@battiserviceplus.com</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-5 mt-2 information">
				<h4 class="text-uppercase mb-4"><span class="fa fa-life-ring"></span> Support Technique</h4>
				<p class="mb-3 text-capitalize">vous pouvez nous écrire sur <span>+25571070744</span>.</p>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-5 mt-2 information">
				<h4 class="text-uppercase mb-4"><span class="fa fa-map"></span> Autres</h4>
				<p class="mb-3 text-capitalize">vous pouvez nous écrire sur : <span>+25571070744</span>.</p>
			</div>
		</div>
	</div>
</section>
<!-- //Contact page -->

<!-- footer -->
<footer class="footer-emp-w3ls py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="row footer-top">
			<div class="col-lg-4 col-sm-6 footer-grid-wthree">
				<h1 class="footer-title text-uppercase text-white mb-4">Qui sommes nous?</h1>
				<div class="contact-info">
					<p>Battiserviceplus</h4>
						<p>Votre service qui vient vous aider dans le domaine de l'entretient de votre maison batiment </p>
					<h4 class="mt-3">plus de 1000 utilisateurs </h4>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid-wthree mt-sm-0 mt-5">
				<h3 class="footer-title text-uppercase text-white mb-4">information</h3>
				<div class="contact-info">
					<div class="footer-style-w3ls">
						<h4 class="mb-2"><span class="fa mr-1 fa-twitter"></span> Retrouver nous sur Twitter</h4>
						<p>Battiserviceplus</h4>
						<p>Votre service qui vient vous aider</p>
						<p class="date">24 Avril 2019 projet.</p>
					</div>
					<div class="footer-style-w3ls mt-3">
						<h4 class="mb-2"><span class="fa mr-1 fa-twitter"></span> Battiserviceplus</h4>
						<p>Votre service qui vient vous aider</p>
						<p class="date">24 Avril 2019 projet </p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid-wthree mt-lg-0 mt-5">
				<h3 class="footer-title text-uppercase text-white mb-4">Contacter moi</h3>
				<div class="contact-info">
					<div class="footer-style-w3ls">
						<h4 class="mb-2"> <span class="fa mr-1 fa-map-marker"></span>lieux</h4><p>cote D'ivoire</p>
						
					</div>
					<div class="footer-style-w3ls my-3">
						<h4 class="mb-2"><span class="fa mr-1 fa-phone"></span> Phone</h4>
						<p>+22571070744</p>
					</div>
					<div class="footer-style-w3ls">
						<h4 class="mb-2"><span class="fa mr-1 fa-envelope-open"></span> Email</h4>
						<p><a href="mailto:gbatofrancis@gmail.com">gbatofrancis@gmail.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 footer-grid-wthree mt-lg-0 mt-5">
				<h2 class="footer-title text-uppercase text-white mb-4">Qui somme nous?</h2>
				<ul class="links list-unstyled">
					<li>
						<a class="" href="#home"> acceuil</a>
					</li>
					<li>
						<a class="" href="#about"> moi</a>
					</li>
					<li>
						<a class="" href="services.html">nos service</a>
					</li>
					<li>
						<a class="" href="#">nos Agents</a>
					</li>
					<li>
						<a class="" href="properties">A propos</a>
					</li>
					<li>
						<a class="" href="contact.html">contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<a href="#home" class="move-top text-center"><span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a>
	<div class="copy-right-top border-top mt-4">
		<p class="copy-right text-center pt-xl-5 pt-4">&copy; 2019 Tous droit reserver battiplusservice
		
		</p>
	</div>
</footer>
<!-- //footer -->

	
<!-- popup for login -->
<div id="popup3" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">connecter vous</h5>
			<form action="#" method="post">
				<div class="form-group">
					<label class="mb-2">address email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
					<small id="emailHelp" class="form-text text-muted">nous n'allons pas publier ton email.</small>
				</div>
				<div class="form-group">
					<label class="mb-2">mot de passe</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
				</div>
				<button type="submit" class="btn btn-primary submit mt-2">se connecter</button>
				<p class="text-center mt-2">
					<a href="#popup4"> je n'est pas de compte?</a>
				</p>
			</form>
		</div>

		<a class="close" href="#">&times;</a>
	</div>
</div>

<div id="popup4" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">s'enregistrer</h5>
			<form action="" method="post">
				<div class="form-group">
					<label>nom</label>

					<input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>numero de téléphone</label>
					<input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
				</div>

				<div class="form-group">
					<label class="mb-2">mode de passe</label>
					<input type="password" class="form-control" id="password1" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Confirmer le mot de passe</label>
					<input type="password" class="form-control" id="password2" placeholder="" required="">
				</div>

				<button type="submit" class="btn btn-primary submit">Register</button>
				<p class="text-center mt-3">
					<a href="#">connecter vous</a>
				</p>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

</body>
</html>