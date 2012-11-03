<?php

	$access = mysql_connect("localhost","root","12345");

	if (! $access) die ("Cound not connect MYSQL");

		mysql_select_db("home", $access);

		$query = mysql_query("SELECT DISTINCT city FROM homework ");

  	
	function xlsBOF() {
		echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);  
	return;
	}

	function xlsEOF() {
		echo pack("ss", 0x0A, 0x00);
	return;
	}

	function xlsWriteNumber($Row, $Col, $Value) {
		echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
		echo pack("d", $Value);
    return;
	}

	function xlsWriteLabel($Row, $Col, $Value ) {
		$L = strlen($Value);
		echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
		echo $Value;
	return;
	} 

// Send Header
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Content-Type: application/force-download");
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");;
	header("Content-Disposition: attachment;filename=query.xls ");
	header("Content-Transfer-Encoding: binary ");

// XLS Data Cell

	xlsBOF();
	xlsWriteLabel(0,0,"Number");
	xlsWriteLabel(0,1,"City");

	
	$xlsRow = 1;
	$no= 1;

	while($row = mysql_fetch_array($query)){
		xlsWriteNumber($xlsRow, 0, $no);
		xlsWriteLabel($xlsRow, 1, $row['city']);
		$xlsRow++;
		$no++;
    }
    xlsEOF();
    exit();
?>
