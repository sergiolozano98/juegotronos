<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Actores</title>
  </head>
  <body>
    <?php
    include 'thronesDB.php';
    $juegodetronos=new gt();
      if ($juegodetronos->geterror()==false){

        ?>
<table border="1px">


    <p><h1>Lista de Personajes</h1></p>
    <?php
            //creamos el objeto "resultado"
            $personaje = $juegodetronos->personajes();
            echo "<h3><a href=index.php>Inicio</a></h3>";
            echo "<br>";
            while ($listaper = $personaje->fetch_assoc()) {
              echo "<tr>";
              echo "<td>";
              echo $listaper["full_desc"];
              echo "</tr>";
            }
            echo "</table>";
        }
?>
  </body>
</html>
