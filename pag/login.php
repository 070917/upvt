<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/loginstyle.css">
    <title>Login</title>
  </head>
  <body>
    <img id="fondo" src="../img/fondo.jpg" alt="">
  	<section>
  		<form action="" method="post">
  			<h3>Login Form</h3>
  			<div>
  			<img src="../img/user.png" id="user" alt="">
  			<input name="usuario" type="text" placeholder="Email or Phone">
  			</div>
        <div class="">
          <img src="../img/pass.png" id="user" alt="">
          <input name="password" type="password" placeholder="Password"> <br>
        </div>

  			<p>
  				Forgot Password?
  			</p>
  			<input name="boton" type="submit" value="LOGIN"> <br>

  			<?php
  				if(isset($_GET["error"])){
  					echo "<h2 id='error'>El nombre de usuario y/o password son incorrectos </h2>";
  				}

  			?>
  			Or login with <br>
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
echo "estoy en: ".$_SERVER['SERVER_NAME'];
echo '<button> <img src="fb.png"> <a href="' . $loginUrl . '">Log in con Facebook!</a></button>';

 ?>

  			<input type="button" value="Instagram"> <br>
  			Don´t have account? <a href="">Signup now</a>

        <br><br>
        <a href="../index.php">Go back home</a>
  		</form>
  	</section>
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
