<?php
    $conexion = new mysqli('localhost','root','','siavicol',3306);
	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}
	$consulta = "SELECT 
	galpon.NombreGalpon,
	produccion.Reponsable,
	produccion.Fecha,
	produccion.Hora,
	produccion.CantidadHuevosNoComerciales,
	produccion.CantidadTipoA,
	produccion.CantidadTipoAA,
	produccion.CantidadTipoAAA,
	produccion.CantidadTipoB,
	produccion.CantidadTipoC,
	produccion.CantidadTipoJumbo,
	produccion.Total_huevos
	FROM produccion
		inner join encasetamiento on encasetamiento.idEncasetamiento = produccion.idEncasetamiento
		inner join galpon on galpon.idGalpon = encasetamiento.idGalpon order by Fecha DESC";
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
							 ->setTitle("Producción Registrada")
							 ->setSubject("Producción Registrada")
							 ->setDescription("Producción De Huevos de la unidad de avicultura")
							 ->setKeywords("Producción")
							 ->setCategory("Reporte excel");

		// 3) Escribiendo data
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setName('Siavicol');
		$objDrawing->setDescription('');
		$objDrawing->setPath('../../../../assets/img/Logo_Siavicol_Nombre.png');     
		$objDrawing->setHeight(60);             
		$objDrawing->setCoordinates('A1');   
		$objDrawing->setOffsetX(30);     
		$objDrawing->setOffsety(10);           
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());					 

		$tituloReporte = "Producción Registrada";
		$titulosColumnas = array('Encasetamiento', 'Responsable', 'Fecha', 'Hora', 'Huevos Comerciales', 'Cantidad No Comerciales', 'Huevos Tipo A', 'Huevos Tipo B', 'Huevos Tipo AA', 'Huevos Tipo AAA', 'Huevos Tipo C', 'Huevos Tipo Jumbo');
		
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:L1');
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte)
        		    ->setCellValue('A2',  $titulosColumnas[0])
		            ->setCellValue('B2',  $titulosColumnas[1])
        		    ->setCellValue('C2',  $titulosColumnas[2])
            		->setCellValue('D2',  $titulosColumnas[3])
		            ->setCellValue('E2',  $titulosColumnas[5])
        		    ->setCellValue('F2',  $titulosColumnas[6])
            		->setCellValue('G2',  $titulosColumnas[8])
            		->setCellValue('H2',  $titulosColumnas[9])
		            ->setCellValue('I2',  $titulosColumnas[7])
        		    ->setCellValue('J2',  $titulosColumnas[10])
            		->setCellValue('K2',  $titulosColumnas[11])
            		->setCellValue('L2',  $titulosColumnas[4]);
		
		//Se agregan los datos de los alumnos
		$i = 3; // esto es para mostrar laos nombres de las columnas 
		while ($fila = $resultado->fetch_array()) 
		{
			$objPHPExcel->setActiveSheetIndex(0)
        		    ->setCellValue('A'.$i,  $fila['0'])
		            ->setCellValue('B'.$i,  $fila['1'])
        		    ->setCellValue('C'.$i,  $fila['2'])
            		->setCellValue('D'.$i,  $fila['3'])
		            ->setCellValue('E'.$i,  $fila['4'])
        		    ->setCellValue('F'.$i,  $fila['5'])
            		->setCellValue('G'.$i,  $fila['6'])
            		->setCellValue('H'.$i,  $fila['7'])
		            ->setCellValue('I'.$i,  $fila['8'])
        		    ->setCellValue('J'.$i,  $fila['9'])
            		->setCellValue('K'.$i,  $fila['10'])
            		->setCellValue('L'.$i,  $fila['11']);
					$i++;
		}

		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(60); //este es para el ancho de la fila (1)
		// $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(137);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(13);
		// $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth();



		
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
		 
		$objPHPExcel->getActiveSheet()->getStyle('A1:L1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A2:L2')->applyFromArray($estiloTituloColumnas);		
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A3:L".($i-1));
				
		for($i = 'A'; $i <= 'L'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Producción Registrada');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		// el 0 equilale a las filas
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,3);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Produccion_Registrada-SIAVICOL.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print_r('No hay resultados para mostrar');
	}
?>