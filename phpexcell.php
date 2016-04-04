<?php

require_once './phpexcell/Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();
// Set properties
$objPHPExcel->getProperties()->setCreator("ThinkPHP")
				->setLastModifiedBy("Daniel Schlichtholz")
				->setTitle("Office 2007 XLSX Test Document")
				->setSubject("Office 2007 XLSX Test Document")
				->setDescription("Test doc for Office 2007 XLSX, generated by PHPExcel.")
				->setKeywords("office 2007 openxml php")
				->setCategory("Test result file");
$objPHPExcel->getActiveSheet()->setTitle('Minimalistic demo');







?>