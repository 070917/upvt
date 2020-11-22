<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Sistema 1</title>
  </head>
  <body>

      <section>

      <form action="" method="post">
        Nombre: <input type="text" name="nombre"> <br>
        Edad: <input type="number" name="edad"> <br>
        Correo: <input type="email" name="correo"> <br>
        <input type="submit" value="guardar" name="boton">
      </form>

      <form action="" id="fEliminar" method="post">

      <?php
      require_once ("persona.php");
      $obj = new Persona();

      if (isset($_POST["boton"])) {
        $LastName = $_POST["nombre"];
        $Age = $_POST["edad"];
        $Email = $_POST["correo"];

        $obj->insertar($LastName,$Age,$Email);
        echo "<h2>Persona Registrada</h2>";

      }

      if (isset($_POST["eliminar"])) {
        if (!empty($_POST["checkEliminar"])) {
          foreach ($_POST["checkEliminar"] as $id) {
            $obj->eliminar($id);
          }
          echo "<h2>Persona Eliminada</h2>";
        }else {
          echo "<h2>Selecciona a las personas que quieres eliminar</h2>";
        }
      }

      $resultado = $obj->consultar();
      echo "<br>";
      echo "<table>";
      echo "<th>Nombre</th>";
      echo "<th>Edad</th>";
      echo "<th>Correo</th>";
      echo "<th>eliminar</th>";
      while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$fila["LastName"]."</td>";
        echo "<td>".$fila["Age"]."</td>";
        echo "<td>".$fila["Email"]."</td>";
        echo "<td>";
      ?>

        <input type="checkbox" value="<?php echo $fila['Personid'];?>" name="checkEliminar[]">

      <?php
        echo "</td>";
        echo "</tr>";
      }
      echo "</table>";

       ?>
       <input type="submit" name="eliminar" value="eliminar">
       <br>

       </form>
    </section>

  </body>
</html>
