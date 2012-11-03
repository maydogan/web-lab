<?php

	$access = mysql_connect("localhost","root","12345");

	if (! $access) die ("Cound not connect MYSQL");

		mysql_select_db("home", $access);

		$query = mysql_query("SELECT * FROM homework WHERE first_name='" . $_POST["first_name"] . "' or 
														   last_name='" . $_POST["last_name"] . "' or
											               email='" . $_POST["mail"] . "' or
											               address='" . $_POST["address"] . "' or
											               city='" . $_POST["city"] . "' or
											               country='" . $_POST["country"] . "'" );

  	
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


	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Content-Type: application/force-download");
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");;
	header("Content-Disposition: attachment;filename=query.xls ");
	header("Content-Transfer-Encoding: binary ");



	xlsBOF();
	xlsWriteLabel(0,0,"ID");
	xlsWriteLabel(0,1,"First Name");
	xlsWriteLabel(0,2,"Last Name");
	xlsWriteLabel(0,3,"Email");
	xlsWriteLabel(0,4,"Address");
	xlsWriteLabel(0,5,"City");
	xlsWriteLabel(0,6,"Country");
	
	$xlsRow = 1;

	while($row = mysql_fetch_array($query)){
		xlsWriteNumber($xlsRow, 0, $row['id']);
		xlsWriteLabel($xlsRow, 1, $row['first_name']);
		xlsWriteLabel($xlsRow, 2, $row['last_name']);
		xlsWriteLabel($xlsRow, 3, $row['email']);
		xlsWriteLabel($xlsRow, 4, $row['address']);
		xlsWriteLabel($xlsRow, 5, $row['city']);
		xlsWriteLabel($xlsRow, 6, $row['country']);
		$xlsRow++;
    }
    xlsEOF();
    exit();
?>
