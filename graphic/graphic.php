<html>
	<head>
	<title> Türkiye'de Okuma ve İzleme Oranları </title> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<style>
		.wrapper{
			top: 20px;
			border: 32px solid #CCCCFF; 
			background-color: #f0f0f0; 
			width: 1000px; 
			height: 500px;
			position : relative;
		}
		.wrapper >.ruler{
			bottom: 0px;
			left: -32px;
			width: 30px;
			position : absolute;	
			margin: 1px;
			display : inline-block; 
		}
		.wrapper > .line{
			bottom: 0px;
			width: 20px;
			position : absolute;	
			background-color: #aeaeae; 
			margin: 1px;
			display : inline-block; 
		}
		.wrapper > div .percent{
			margin-top:-15px;
			font-size:10px;
			font-weight:bold;
		}
		.wrapper > div .head{
			margin-top: 100px;
			font-size: 15px;
			color: #800000; 
		}
		
		.header {
			text-align:center;
			font-size: 36px;
			line-height: 40px;

			color: inherit;
			font-family: inherit;
			font-weight: bold;
			line-height: 1;
			margin: 10px 0;
			text-rendering: optimizelegibility;

		}
 </style>
 </head>
	<body>
		
		<h1 class='header'>Türkiye'de Okuma ve İzleme Oranları</h1>
<?php

	$fileInfo = Array();
	$data = file("db.csv");

	foreach ($data as $line) {
		$values = explode("," , $line);
		$fileInfo[$values[0]] = $values[1];
	}

	echo "<center>";
	echo "<div class='wrapper'>\n";
	for ($i = 100; $i > 0; $i = $i - 10) {
		$y = $i*5 +"px";
		echo "<div class='ruler' style='height:$y;'>$i</div>";
	}
	
	$i = 10;
	$count = 85 / count($fileInfo);
	foreach ($fileInfo as $info => $value) {
		$x = $i + "px";
		$y = $value + "px";
		$nx = $x * $count;
		$ny = $y * 5;
		$ry = $ny + 5 + "px";
		echo "<div class='line' style='left:$nx;height:$ny;'><div class='percent' >%$y</div><div class='head' style='margin-top:$ry'>$info</div></div>";
		
		$i = $i + 10;
	}
	echo "</div>";
	echo "</center>";
		
?>
</body>
	</html>
