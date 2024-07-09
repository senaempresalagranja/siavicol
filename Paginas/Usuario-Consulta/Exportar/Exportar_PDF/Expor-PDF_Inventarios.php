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



	$sql = "SELECT`idArticulo`, `Novedad`, `Fecha`, `Hora`, `Cantidad` FROM `inventarios`";
	$siavicol = $mysqli->query($sql);
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
		  <th>Cantidad</th>
		</tr>
	  </thead>
	</table>';

	$item = 0;
	foreach($siavicol as $row){
		$idArticulo = $row['idArticulo'];
		$Novedad = $row['Novedad'];
		$Fecha = $row['Fecha'];
		$Hora = $row['Hora'];
		$Cantidad = $row['Cantidad'];
		// $Hora = $pdf->serializeTCPDFtagParameters(array($Hora, 'C128', '', '', 72, 25, 0.5, array('position'=>'S', 'border'=>false, 'padding'=>2, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>7, 'stretchtext'=>6), 'N'));

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
				  <td>'.$idArticulo.'</td>
				  <td>'.$Novedad.'</td>
				  <td>'.$Fecha.'</td>
				  <td>'.$Hora.'</td>
				  <td>'.$Cantidad.'</td>
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