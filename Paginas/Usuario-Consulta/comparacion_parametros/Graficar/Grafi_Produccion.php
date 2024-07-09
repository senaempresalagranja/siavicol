<?php

$id_encasetamiento = $_POST["id_encasetamiento"];
$semanas           = $_POST["semanas"];

$connection = mysqli_connect("localhost", "root", "", "siavicol");
$query3     = "SELECT encasetamiento.idEncasetamiento, galpon.NombreGalpon, encasetamiento.Cantidad,encasetamiento.IdManual FROM `encasetamiento`  INNER JOIN galpon ON encasetamiento.idGalpon=galpon.idGalpon  where encasetamiento.idEncasetamiento=$id_encasetamiento GROUP BY encasetamiento.idEncasetamiento";
$resource3  = mysqli_query($connection, $query3);

$canitdad_aves         = mysqli_fetch_row($resource3);
$nombre_encasetamiento = $canitdad_aves[1];
$manuales              = $canitdad_aves[3];
$canitdad_aves         = $canitdad_aves[2];

echo "<script>
var nombre_encasetamiento='$nombre_encasetamiento';
</script>";

?>
<script>





$(function () {


  $('#container').highcharts({
    chart: {
      type: 'line',
      options3d: {
        enabled: true,
        alpha: 2,
        beta: 0
      },
    },
    title: {
      text: 'Produccion de Encasetamiento ' + nombre_encasetamiento
    },
    subtitle: {
      text: 'SIAVICOL'
    },
    xAxis: {
      categories: [
            //AQUI SE CONECTA CON LA BASE DE DATOS Y ESTRAE EL NOMBRE DE LOS CAMPOS PARA PONERLOS EN EL GRAFICO EJEMPLO N P SI

            <?php

$connection = mysqli_connect("localhost", "root", "", "siavicol");

$sql    = "SELECT  week(`Fecha`) as semana FROM `produccion` WHERE `idEncasetamiento`=$id_encasetamiento GROUP BY semana";
$result = mysqli_query($connection, $sql);
$semana = 17;
while ($fila = mysqli_fetch_array($result)) {
    ?>



<?php
$semana = $semana + 1;

    ?>
              '<?php echo "semana $semana" ?>',

              <?php
}
mysqli_close($connection);
?>],
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: '% Huevo Ave Dia'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true
        },
        plotOptions: {
          column: {
            pointPadding: 0.2,
            borderWidth: 0,
            colorByPoint: true// AQUI ES PARA ACTIVAR QUE SE PUEDA CAMBIAR EL COLOR DE CADA COLUMNA DE LA GRAFICA
          }
        },
        series: [{
          name: 'Produccion Real',
          data: [      <?php

$connection = mysqli_connect("localhost", "root", "", "siavicol");
$sql        = "SELECT  week(`Fecha`) as semana, SUM(CantidadTipoA) as huevos_A, SUM(`CantidadTipoB`) AS huevos_B, SUM(`CantidadTipoAA`) AS huevo_AA, SUM(`CantidadTipoAAA`) AS huevos_AAA, SUM(`CantidadTipoC`) AS huevo_C, SUM(`CantidadTipoJumbo`) AS huevos_Jumbo  FROM `produccion` where idEncasetamiento=$id_encasetamiento  GROUP BY semana";
$result     = mysqli_query($connection, $sql);

while ($registros4 = mysqli_fetch_array($result)) {
    ?>
<?php
$cantidad_total = $registros4[1] + $registros4[2] + $registros4[3] + $registros4[4] + $registros4[5] + $registros4[6];
    $cantidad_total = $cantidad_total / $canitdad_aves;
    ?>

            <?php echo $cantidad_total ?>,

            <?php
}
mysqli_close($connection);

?> ],
          colors: [//AQUI ES PONIENDO COLORES A CADA COLUMNA Y SI HAY MUCHAS COLUMNAS LOS COLORES SE REPITEN ADEMAS SON VARIABLES Y LOS COLORES PUEDEN CAMBIAR
          Highcharts.getOptions().colors[0],
          Highcharts.getOptions().colors[1],
          Highcharts.getOptions().colors[2],
          Highcharts.getOptions().colors[3],
          Highcharts.getOptions().colors[4],
          Highcharts.getOptions().colors[5],
          Highcharts.getOptions().colors[6],
          Highcharts.getOptions().colors[7],
          Highcharts.getOptions().colors[8],
          Highcharts.getOptions().colors[9]


          ],

        },{
          name: 'Producción Esperada',
          data: [      <?php

$connection = mysqli_connect("localhost", "root", "", "siavicol");
$sql        = "SELECT * FROM `parametros` where IdManual=$manuales order by semana";
$result     = mysqli_query($connection, $sql);

while ($registros4 = mysqli_fetch_array($result)) {
    ?>
<?php
$cantidad_esperada = $registros4[3]
    ?>

            <?php echo $cantidad_esperada ?>,

            <?php
}
mysqli_close($connection);

?> ],
          colors: [//AQUI ES PONIENDO COLORES A CADA COLUMNA Y SI HAY MUCHAS COLUMNAS LOS COLORES SE REPITEN ADEMAS SON VARIABLES Y LOS COLORES PUEDEN CAMBIAR
          Highcharts.getOptions().colors[0],
          Highcharts.getOptions().colors[1],
          Highcharts.getOptions().colors[2],
          Highcharts.getOptions().colors[3],
          Highcharts.getOptions().colors[4],
          Highcharts.getOptions().colors[5],
          Highcharts.getOptions().colors[6],
          Highcharts.getOptions().colors[7],
          Highcharts.getOptions().colors[8],
          Highcharts.getOptions().colors[9]


          ],

        }]
      });
    });




  </script>
