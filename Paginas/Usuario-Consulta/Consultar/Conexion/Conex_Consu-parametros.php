

<div class="panel panel-default">
        
        <table class="table table-fixed table-hover table-bordered">
          <thead>
            <tr>
              <th class="col-xs-3">Semana</th>
              <th class="col-xs-3">Valor Menor Produccion</th>
              <th class="col-xs-3">Valor Mayor Produccion</th>
              <th class="col-xs-3">Porcentaje Mortalidad</th>
            </tr>
          </thead>
	  <?php 

	     $local="localhost";
	     $usuario="root";
	     $contra="";
	     $bd="siavicol";
         $manual=$_POST["manual"];

		  $conexion=mysqli_connect($local,$usuario,$contra,$bd);
		  $query="SELECT * FROM `parametros` WHERE `IdManual`=$manual"; 
		  $resource=mysqli_query($conexion,$query);
		  while ($fila=mysqli_fetch_row($resource)) {
				    					 ?>
          
			<tr>
		      <td class="col-xs-3"><?php echo "$fila[2]"; ?></td>
		      
		      <td class="col-xs-3"><?php echo "$fila[3]"; ?></td>
		   
		      <td class="col-xs-3"><?php echo "$fila[4]"; ?></td>
		  
		      <td class="col-xs-3"><?php echo "% $fila[5]"; ?></td>
            </tr>
          
          <?php 
	  }

           ?>
  </table>
</div>

<style>
	.table-fixed thead {
    width: 100%;
}
.table-fixed tbody {
    height: 370px;
    overflow-y: auto;
    width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
    display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
    float: left;
    border-bottom-width: 0;
}

.panel{
    border-radius: 0;
}

.table-fixed thead tr th {
    float: left;
    background-color: #ff9800;
    border-color: #ff9800;
    border:0;
    color: #fff;
    border-radius: 0;
}
</style>