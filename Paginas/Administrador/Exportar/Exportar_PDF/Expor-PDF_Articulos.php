<?php
	require_once('../../../../assets/lib/tcpdf/config/lang/spa.php');
	require_once('../../../../assets/lib/tcpdf/tcpdf.php');
	require_once('conexion.php');

	$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);
	$pdf->SetTitle('Articulos_Registrados (SIAVICOL)'); //Titlo del pdf
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
	
	<h1>Articulos Registrados</h1>
	<table>
	  <thead>
		<tr>
		  <th>Tipo De Insumo</th>
		  <th>Marca</th>
		  <th>Nombre</th>
		  <th>Unidad De Medida</th>
		  <th>Cantidad</th>
		</tr>
	  </thead>
	</table>';

	$conexion=mysqli_connect($local,$usuario,$contra,$bd);
					$busqueda="SELECT articulos.idArticulo, tipoarticulos.Descripcion, marcas.Nombre, articulos.Nombre, `UnidadMedida`FROM `articulos` INNER JOIN tipoarticulos ON articulos.idTipoArticulo=tipoarticulos.idTipoArticulo INNER JOIN marcas ON articulos.idMarca=marcas.idMarca";
					// $busqueda="SELECT articulos.idArticulo, tipoarticulos.Descripcion, marcas.Nombre, articulos.Nombre, `UnidadMedida`, SUM(inventarios.Cantidad) FROM `articulos` INNER JOIN inventarios ON articulos.idArticulo=inventarios.idArticulo INNER JOIN tipoarticulos ON articulos.idTipoArticulo=tipoarticulos.idTipoArticulo INNER JOIN marcas ON articulos.idMarca=marcas.idMarca GROUP BY idArticulo ORDER BY articulos.Nombre";
     
					$query=mysqli_query($conexion,$busqueda);
					while ($fila=mysqli_fetch_row($query)){


$id_articulo=$fila[0];

			$busqueda1="SELECT articulos.idArticulo, tipoarticulos.Descripcion, marcas.Nombre, articulos.Nombre, `UnidadMedida`, SUM(inventarios.Cantidad) FROM `articulos` INNER JOIN inventarios ON articulos.idArticulo=inventarios.idArticulo INNER JOIN tipoarticulos ON articulos.idTipoArticulo=tipoarticulos.idTipoArticulo INNER JOIN marcas ON articulos.idMarca=marcas.idMarca where articulos.idArticulo='$id_articulo' GROUP BY idArticulo ORDER BY articulos.Nombre";
			$resource=mysqli_query($conexion,$busqueda1);
			$fila1=mysqli_fetch_row($resource);

if ($fila1==true) {
	$cantidad=$fila1[5];
}else{
	$cantidad=0;
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
				  <td>'.$cantidad.'</td>
				</tr>
				</thead>
			</table>	

	';


	
}

	$pdf->SetFont('Helvetica', '', 10);

	$pdf->writeHTML($html, true, 0, true, 0);
	$pdf->lastPage();
	
	$pdf->output('Articulos_Registrados (SIAVICOL).pdf', 'D');
?>