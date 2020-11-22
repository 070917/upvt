<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Uno.php</title>
  </head>
  <body>
    <h1>Primer sesion en PHP</h1>
    <form action="" method="post">
      Numero 1: <input type="text" name="n1">
      <br>
      Numero 2: <input type="text" name="n2" >
      <br>
      <input type="submit" value="Sumar" name="boton">
    </form>


     <h1>Tarea</h1>
     <form action="" method="post">
       Ingresa un numero: <input type="text" name="n">
       <br>
       <input type="submit" value="Generar" name="btn_generar">
       <br>
     </form>
     <?php
     //isset es para saber si existe un boton.
     if (isset($_POST["boton"])) {
       $n1 = $_POST["n1"];
       $n2 = $_POST["n2"];
       $sum = $n1+$n2;
       echo "<h2>La suma es: $sum</h2>";
     }
     if (isset($_POST[btn_generar])) {
       $n = $_POST["n"];
       for ($i=0; $i <= $n; $i++) {
         echo "*";
         echo "<br>";
         for ($j=0; $j <=$i ; $j++) {
           echo "*";
         }

       }
     }
      ?>
  </body>
</html>
