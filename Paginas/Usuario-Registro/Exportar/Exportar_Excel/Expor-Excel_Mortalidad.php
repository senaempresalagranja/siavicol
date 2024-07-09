<?php
    $conexion = new mysqli('localhost','root','','siavicol',3306);
	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}
	$consulta = "SELECT encasetamiento.idEncasetamiento, galpon.NombreGalpon, `NumeroAves`, `Fecha`, `Hora`, `Motivo` FROM `mortalidad` INNER JOIN encasetamiento ON mortalidad.idEncasetamiento=encasetamiento.idEncasetamiento INNER JOIN galpon ON encasetamiento.idGalpon=galpon.idGalpon	 ORDER BY Fecha DESC";
	$resultado = $conexion->query($consulta);
	if($resultado->num_rows > 0 ){
						
		date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once '../../../../assets/lib/PHPExcel/Classes/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("Siavicol") //Autor
							 ->setLastModifiedBy("Siavicol") //Ultimo usuario que lo modificó
							 ->setTitle("Registros De Motalidad")
							 ->setSubject("Registros De Motalidad")
							 ->setDescription("Registros De Motalidad de la unidad de avicultura")
							 ->setKeywords("Registros De Motalidad")
							 ->setCategory("Reporte excel");

		// 3) Escribiendo data
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setName('Siavicol');
		$objDrawing->setDescription('');
		$objDrawing->setPath('../../../../assets/img/Logo_Siavicol_Nombre.png');     
		$objDrawing->setHeight(60);             
		$objDrawing->setCoordinates('A1');   
		$objDrawing->setOffsetX(25);     
		$objDrawing->setOffsety(10);           
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());					 

		$tituloReporte = "Registros De Mortalidad"; //titulo del Reporte
		//titulos de cada columna 
		$titulosColumnas = array('Encasetamiento', 'Numero De Aves', 'Fecha', 'Hora ', 'Motivo');
		
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:E1');
						
		/// Se agregan los titulos del reporte pero al tener todas las columnas necesarias se termina con un punto y coma(;)
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte) //el A1 es el titulo del reporte
        		    ->setCellValue('A2',  $titulosColumnas[0]) //despues con los titulos de cada columna
		            ->setCellValue('B2',  $titulosColumnas[1])
        		    ->setCellValue('C2',  $titulosColumnas[2])
            		->setCellValue('D2',  $titulosColumnas[3])
            		->setCellValue('E2',  $titulosColumnas[4]);
            		
		
		// aqui se colocan los campos de la base de datos 
		$i = 3; // esto es para mostrar en que fila estaran los nombres las nombres de las columnas 
		while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0)
        		    ->setCellValue('A'.$i,  $fila['1'])
		            ->setCellValue('B'.$i,  $fila['2'])
        		    ->setCellValue('C'.$i,  $fila['3'])
            		->setCellValue('D'.$i,  $fila['4'])
            		->setCellValue('E'.$i,  $fila['5']);
					$i++;
		}

		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(60);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(52000);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(22000);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(22000);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(100000000000);


		
		$estiloTituloReporte = array(
        	'font' => array(
	        	'name'      => 'Quicksand',
    	        'bold'      => true,
        	    'italic'    => false,
                'strike'    => false,
               	'size' =>18,
	            	'color'     => array(
    	            	'rgb' => '000000'
        	       	)
            ),
	        'fill' => array(
				'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'	=> array('argb' => 'ff9800')
			),
            'borders' => array(
               	'allborders' => array(
                	'style' => PHPExcel_Style_Border::BORDER_NONE                    
               	)
            ), 
            'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'rotation'   => 0,
        			'wrap'          => true 
    		),

        );

		$estiloTituloColumnas = array(
            'font' => array(
                'name'      => 'Quicksand',
                'bold'      => true,                          
                'color'     => array(
                    'rgb' => '000000'
                )
            ),
            'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
				'rotation'   => 90,
        		'startcolor' => array(
            		'rgb' => 'ff9800'
        		),
        		'endcolor'   => array(
            		'argb' => 'FFFFFF'
        		)
			),
            'borders' => array(
            	'top'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => 'ff9800'
                    )
                ),
                'bottom'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => 'FFFFFF'
                    )
                )
            ),
			'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'wrap'          => TRUE
    		));
			
		$estiloInformacion = new PHPExcel_Style();
		$estiloInformacion->applyFromArray(
			array(
           		'font' => array(
               	'name'      => 'Quicksand',               
               	'color'     => array(
                   	'rgb' => '000000'
               	)
           	),
           	'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('argb' => 'FFFFFF')
			),
           	'borders' => array(
               	'allborders'     => array(
                   	'style' => PHPExcel_Style_Border::BORDER_THIN ,
	                'color' => array(
    	            	'rgb' => '3a2a47'
                   	)
               	) 

           	)

      //      	'alignment' =>  array(
      //   			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
      //   			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
      //   			'rotation'   => 0,
      //   			'wrap'          => true 
    		// ),

        ));
		 
		$objPHPExcel->getActiveSheet()->getStyle('A1:E1')->applyFromArray($estiloTituloReporte); //para cuantas columnas va a tener el titulo del documento
		$objPHPExcel->getActiveSheet()->getStyle('A2:E2')->applyFromArray($estiloTituloColumnas); //cuantas columnas va atner el Documento	
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A3:E".($i-1)); // donde empiesa a mostrarse los datos de cada tabla
				
		for($i = 'A'; $i <= 'E'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Registros De Mortalidad');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		// el 0 equilale a las filas
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,3);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Mortalidad_Registrada-SIAVICOL.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print_r('No hay resultados para mostrar');
	}
?>