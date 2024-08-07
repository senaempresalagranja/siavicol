<?php
    $conexion = new mysqli('localhost','root','','siavicol',3306);
	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}
	$consulta = "SELECT * FROM  tipoarticulos ";
	$resultado = $conexion->query($consulta);
	if($resultado->num_rows > 0 ){
						
		date_default_timezone_set('America/Bogota');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once '../../../../assets/lib/PHPExcel/Classes/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("Siavicol") //Autor
							 ->setLastModifiedBy("Siavicol") //Ultimo usuario que lo modificó
							 ->setTitle("Tipo de Articulos Registrados")
							 ->setSubject("Tipo de Articulos Registrados")
							 ->setDescription("Tipo de Articulos de la unidad de avicultura")
							 ->setKeywords("Tipo de Articulos")
							 ->setCategory("Reporte excel");

		// 3) Escribiendo data
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setName('Siavicol');
		$objDrawing->setDescription('');
		$objDrawing->setPath('../../../../assets/img/Logo_Siavicol_Nombre.png');     
		$objDrawing->setHeight(60);             
		$objDrawing->setCoordinates('A1');   
		$objDrawing->setOffsetX(20);     
		$objDrawing->setOffsety(10);           
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());					 

		$tituloReporte = "Tipo de Articulos Registrados";
		$titulosColumnas = array(' Marcas');
		
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:F1')
        		    ->mergeCells('A2:F2');
        		    // ->mergeCells('A:F');
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte)
        		    ->setCellValue('A2',  $titulosColumnas[0]);
        		  
            		
		
		//Se agregan los datos de los alumnos
		$i = 3; // esto es para mostrar laos nombres de las columnas 
		while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0)
        		    ->setCellValue('A'.$i,  $fila['1']);
					$i++;
		}

		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(60);
		$objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(30);
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

           	),

           	'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'rotation'   => 0,
        			'wrap'          => true 
    		)

        ));
		 
		$objPHPExcel->getActiveSheet()->getStyle('A1:A1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A2:F2')->applyFromArray($estiloTituloColumnas);		
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A3:F".($i-1));
				
		for($i = 'A'; $i <= 'A'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Tipo De Articulos Registrados');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		// el 0 equilale a las filas
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,3);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Tipo_de_Articulos_Registrados-SIAVICOL.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print_r('No hay resultados para mostrar');
	}
?>