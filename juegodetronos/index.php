<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <?php
    include 'thronesDB.php';
    $juegodetronos=new gt();
      if ($juegodetronos->geterror()==false) {
        //echo "Funciona";

        ?>
        <h1>Base de datos de Juego de tronos</h1>
        <table>
          <tr>
           <td><h3><em><a href="actores.php">Actores</a></em></h3></td>
           <td><h3><em><a href="actoresTemp.php">Actores por episodio</a></em></h3></td>
        </tr>
        </table>
    <?php
       $resumen = $juegodetronos->resumen();
       echo "<b>Resumen de la serie:</b>";
       while ($lista = $resumen->fetch_assoc()) {
         echo $lista["plot"];
       }
      }
     ?>



  </body>
</html>
