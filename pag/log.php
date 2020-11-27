<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="../css/stylelo.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="../img/wave.png">
	<div class="container">
		<div class="img">
			<img src="../img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="../img/avatar.svg">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input name="usuario" type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input name="password" type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">¿Olvidaste tu contraseña?</a>
            	<input name="boton" type="submit" class="btn" value="Acceder">
							<?php
			  				if(isset($_GET["error"])){
			  					echo "<p class='social-text'>El nombre de usuario y/o password son incorrectos </p>";
			  				}

			  			?>
							<p class="social-text">O inicia con las siguientes plataformas</p>
							<?php
							session_start();
							require_once  '../vendor/autoload.php';
							$fb = new Facebook\Facebook([
			  			'app_id' => '3535111159871793',
			  			'app_secret' => '220cbee07402135037bd7c3d42ae03b0',
			  			'default_graph_version' => 'v3.2',
			  			]);

							$helper = $fb->getRedirectLoginHelper();

							$permissions = ['email']; // Optional permissions
							$redirectURL = "https://".$_SERVER['SERVER_NAME']."/fb-callback.php";
							$loginUrl = $helper->getLoginUrl($redirectURL, $permissions);
							//echo '<button> <img src="../img/fb.png"> <a href="' . $loginUrl . '">Facebook!</a></button>';
							echo '<div class="social-media"><a href="' . $loginUrl . '" class="social-icon"><i class="fab fa-facebook-f"></i></a></div>';

			 			?>

            </form>
        </div>
    </div>

    <script type="text/javascript" src="../js/main.js"></script>
		<?php
  		if(isset($_POST["boton"])){
  			$u = $_POST["usuario"];
  			$p = $_POST["password"];
  			require_once("usuario.php");
  			$obj = new Usuario();
  			$obj->comprobar($u,$p);
  		}
  	 ?>
</body>
</html>
