<?php 
		require('esai.php');
		
			
			if (isset($_GET['erreur'])) {
				
			$err = $_GET['erreur'];
			if ($err==1||$err==2) {
				echo "<p style='color:red'>Utilisateur ou le mode depasse incorect</p>";
			}

		}
		?>



		<?php 


if (isset($_POST['email']) && isset($_POST['password'])) {
	$host = 'localhost';
	$user = 'francis';
	$pwd = 'root';
	$dbname ='de';
	$connexion = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pwd)
	OR die('pas de connexion à la base de donnée');


	$email= mysql_real_escape_string($db,htmlspecialchars($_POST['email']));
	$password= mysql_real_escape_string($db,htmlspecialchars($_POST['password']));
	if ($email!=="" && $password!=="") {
		$requete = "SELECT cont(*) FROM demo WHERE email ='".$email. "';and password='".$password."' ";
		$exrc_requet=mysql_query($db,$requete);
		$reponse= mysql_fetch_array($exrc_requet);
		
		$cont =$reponse['cont(*)'];
		if ($cont!=0) 
		{
			echo "mercie votre pour votre connexion";
			$_SESSION['email']=$email;
			header('Location:index.php');
		}
		else{
			echo "votre email ou votre mot de passe incorète";
			header('Location:connexion.php');
		}
		
		
	}

}
?>
		

<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	
	
	<link rel="stylesheet" href="css/connexion.css" media="screen">
</head>
<body>
<div id="logo">
				<h1> <a href="index.php"><span class="fa fa-home" aria-hidden="true"></span><div id="logo">
				<h1> <a href="index.php"><span class="fa fa-home" aria-hidden="true"></span> </span><span style=" color:blue">B.</span><span> P .</span><span style="color: green">S</span></a> <span style="color: #fff">batti plus service</span></h1></a></h1>
			</div>  </a></h1>
			</div>


	<div class="col-md-12">
	<div class="col-md-4" id="container">
				<div class="row">
					<form action="" method="POST">
						<h1>connexion</h1>
						<div class="col-md-4">
						<input type="email" name="email" placeholder="votre email">	
						</div>
						<br>
						<div class="col-md-4">
						<input type="password" name="password" placeholder="votre mot de passe">	
						</div>
						<br>
						<div class="col-md-4">
						<input type="submit" name="valide" value="Envoyer">	
						</div>
						<p> je n'est pas de compte <a href="inscription.php"> s'inscrire</a></p>
					</form>
				
				</div>
		</div>
			
		</div>
	

</body>
</html>