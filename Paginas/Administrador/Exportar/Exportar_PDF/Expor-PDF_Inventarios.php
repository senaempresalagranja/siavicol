<?php
set_time_limit(100000);
	require_once('../../../../assets/lib/tcpdf/config/lang/spa.php');
	require_once('../../../../assets/lib/tcpdf/tcpdf.php');
	require_once('conexion.php');

	$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);
	$pdf->SetTitle('Inventario_Registrado (SIAVICOL)'); //Titlo del pdf
	$pdf->setPrintHeader(true); // (false) No se imprime cabecera       (true) inprime la cabesera 
	$pdf->setPrintFooter(true); // (false) No se imprime pie de pagina  (true) inprime la cabesera 
	$pdf->SetMargins(15, 15, 15, false); //Se define margenes izquierdo, alto, derecho
	$pdf->SetAutoPageBreak(true, 20); //Se define un salto de pagina con un limite de pie de pagina

	//el logo se cambia en la carpeta config en el archivo tcpdf_config.php en la linea 134 y el la linea 139 de cabia el tamaño 
	$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SIAVICOL', 'Sistema de informacion avicola');



	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	$pdf->addPage();


	$html = '
	<style>
		h1{
			position: relative;
			display: block; 
			color: #000;
			font-family: "quicksand";
			
			font-size: 3em;
			text-align: center;
		}

		img{
			width:40px;
			line-height:1;
			margin-right:20px;
			margin-left:20px;
		}
		
		table tr th{
			    font-weight: bold;
			    font-size: 41px;
			    background-color: #ff9800; 
			    padding: 1115em;

		}

	</style>
	
	<h1>Inventario Registado</h1>
	<table>
	  <thead>
		<tr>
		  <th>Articulo</th>
		  <th>Novedad</th>
		  <th>Fecha</th>
		  <th>Hora</th>
		  <th>Unidad de Medida</th>
		  <th>Cantidad (Kg)</th>
		  <th>Cantidad Actual (Kg)</th>
		  <th>Cantidad Actual (Bultos)</th>
		</tr>
	  </thead>
	</table>';

	$conexion=mysqli_connect($local,$usuario,$contra,$bd);
					$busqueda="SELECT inventarios.idinventario, articulos.Nombre,inventarios.Novedad,inventarios.Fecha,inventarios.Hora,inventarios.Cantidad,articulos.idArticulo,articulos.UnidadMedida,idTipoArticulo  FROM  inventarios INNER JOIN articulos ON inventarios.idArticulo=articulos.idArticulo ORDER BY Fecha DESC";
     
					$query=mysqli_query($conexion,$busqueda);
					while ($fila=mysqli_fetch_row($query)){
						$id_inventario=$fila[6];
if ($fila[5]<0) {
	$fila[5]=$fila[5]*-1;
}


				$busqueda1="SELECT SUM(Cantidad) FROM `inventarios` WHERE idArticulo=$id_inventario";
     
					$query1=mysqli_query($conexion,$busqueda1);

$fila1=mysqli_fetch_row($query1);
if ($fila[7]=="KG") {
	$bultos=$fila1[0]/40;
}else{
	$bultos=0;
	
}
		$html .='
			<style>
				table,td{

				border:1px solid black;
				border-collapse:collapse;
				font-size:38px;
			}



			</style>

			<table>
				<thead>

				<tr>
				  <td>'.$fila[1].'</td>
				  <td>'.$fila[2].'</td>
				  <td>'.$fila[3].'</td>
				  <td>'.$fila[4].'</td>
				  <td>'.$fila[7].'</td>
				  <td>'.$fila[5].'</td>
				  <td>'.$fila1[0].'</td>
				  <td>'.$bultos.'</td>
				</tr>
				</thead>
			</table>	

	';


	
}

	$pdf->SetFont('Helvetica', '', 10);

	$pdf->writeHTML($html, true, 0, true, 0);
	$pdf->lastPage();
	
	$pdf->output('Inventario_Registrado (SIAVICOL).pdf', 'D');
?>