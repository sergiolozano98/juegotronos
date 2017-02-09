<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actores por Temporadas</title>
  </head>
  <body>
    <?php
    include 'thronesDB.php';
    $juegodetronos=new gt();
      if ($juegodetronos->geterror()==false){

        ?>
<table border="1px">


    <p><h1>Lista de Personajes por temporada</h1></p>

    <?php
            //creamos el objeto "resultado"
            $temporadapersonajes = $juegodetronos->tempersonajes($_POST['capitulo']);
            echo $_POST['capitulo'];
            echo "<h3><a href=index.php>Inicio</a></h3>";
            echo "<br>";
            while ($listatemp = $temporadapersonajes->fetch_assoc()) {
              echo "<tr>";
              echo "<td>";
              echo $listatemp["name"];
              echo "</td>";
              echo "<td>";
              echo "season:".$listatemp["season"];
              echo "</td>";
              echo "<td>";
              echo "episode:".$listatemp["episode"];
              echo "</td>";
              echo "</tr>";

            }
            echo "</table>";
        }
?>
  </body>
</html>
