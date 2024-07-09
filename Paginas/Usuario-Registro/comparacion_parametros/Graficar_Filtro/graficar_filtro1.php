<?php
$id_encasetamiento=$_POST["id_encasetamiento"];
 $semanas=$_POST["semanas"];

 $connection=mysqli_connect("localhost","root","","siavicol");
    $query3="SELECT week(Fecha) as numero_semana FROM `mortalidad` where idEncasetamiento=$id_encasetamiento  GROUP BY numero_semana";
               $resource3=mysqli_query($connection,$query3);

               $numero_semana=17;
while ($fila=mysqli_fetch_row($resource3)) {
 $numero_semana= $numero_semana+1;


if ( $fila[0]== $semanas) {
break;
}
}




  $connection=mysqli_connect("localhost","root","","siavicol");
    $query3="SELECT encasetamiento.idEncasetamiento, galpon.NombreGalpon, encasetamiento.Cantidad,IdManual FROM `encasetamiento`  INNER JOIN galpon ON encasetamiento.idGalpon=galpon.idGalpon  where encasetamiento.idEncasetamiento=$id_encasetamiento GROUP BY encasetamiento.idEncasetamiento";
               $resource3=mysqli_query($connection,$query3);

               $canitdad_aves=mysqli_fetch_row($resource3);
               $nombre_encasetamiento=$canitdad_aves[1];
               $manuales=$canitdad_aves[3];
               $canitdad_aves=$canitdad_aves[2];


echo "<script>

var nombre_encasetamiento='$nombre_encasetamiento';

var semanas='$semanas';



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

            $connection=mysqli_connect("localhost","root","","siavicol");


            $sql = "SELECT Fecha, dayname(Fecha) as dias  FROM `mortalidad` WHERE week(Fecha)=$semanas
 AND idEncasetamiento=$id_encasetamiento GROUP BY dias ORDER BY Fecha";
            $result = mysqli_query($connection,$sql);

            while ($fila=mysqli_fetch_array($result))
            { ?>



<?php 


?>
              '<?php echo "$fila[1]--$fila[0] " ?>',

              <?php
            }
            mysqli_close($connection);
            ?>],
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Aves Muertas'
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
          name: 'Muertes Reales',
          data: [      <?php

          $connection=mysqli_connect("localhost","root","","siavicol");
          $sql = "SELECT week(Fecha) as semana, SUM(NumeroAves) as NumeroAves ,Fecha, dayname(Fecha) as dias FROM `mortalidad` WHERE week(Fecha)=$semanas AND idEncasetamiento=$id_encasetamiento GROUP BY dias ORDER BY Fecha";
          $result = mysqli_query($connection,$sql);


          while ($registros4=mysqli_fetch_array($result))
          { ?>
<?php 
$cantidad_total=$registros4[1];
$cantidad_total=$cantidad_total/$canitdad_aves;
 ?>

            <?php echo $cantidad_total  ?>,

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
          name: 'Muertes Experadas',
          data: [      <?php

          $connection=mysqli_connect("localhost","root","","siavicol");
          $sql = "SELECT * FROM `parametros` where semana=$numero_semana and IdManual=$manuales";
          $result = mysqli_query($connection,$sql);


          while ($registros4=mysqli_fetch_array($result))
          { ?>
<?php 
$cantidad_esperada=$registros4[4]

 ?>

            <?php echo $cantidad_esperada  ?>,
             <?php echo $cantidad_esperada  ?>,
              <?php echo $cantidad_esperada  ?>,
               <?php echo $cantidad_esperada  ?>,
                <?php echo $cantidad_esperada  ?>,
                 <?php echo $cantidad_esperada  ?>,

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