<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReportesController extends Reportes{

    public function Index(){
        security::validate();
        require_once('views/Reportes/Index.php');
    }
    
    public function createReportExcel(){
        $fila = 2;

        $spreadsheet = new Spreadsheet();

        // Establecer encabezados para el reporte
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'NOMBRE');
        $sheet->setCellValue('C1', 'PRECIO');
        $sheet->setCellValue('D1', 'CANTIDADES');
        $sheet->setCellValue('E1', 'TOTAL');

        // Calcular automaticamente el ancho de las columnas
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);

        // Imprimir los resultados de la consulta

        //while($row = $resultado->fetch_assoc()){
        for($i=0; $i <= 20; $i++){
            //$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['id']);
            $sheet->setCellValue('A'.$fila, 'ID'.$i);
            $sheet->setCellValue('B'.$fila, 'NOMBRE'.$i);
            $sheet->setCellValue('C'.$fila, 'PRECIO'.$i);
            $sheet->setCellValue('D'.$fila, 'CANTIDADES'.$i);
            $sheet->setCellValue('E'.$fila, 'TOTAL'.$i);

            $fila++;
        }

        $styleArray = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                    'color' => ['argb' => '000'],
                ],
            ],
        ];
        
        $sheet->getStyle('A1:E1')->applyFromArray($styleArray);

	    // Cabecera para generar archivo y poderlo descargar
        //$writer = new Xlsx($spreadsheet);
        //$writer->save('hello world.xlsx');
        
        // redirect output to client browser
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Reporte Excel.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }

}

?>