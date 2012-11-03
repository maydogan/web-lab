<html>
<body>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajaaax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
  <form id= "one">
<?php

//~ include("mysql_excel.inc.php");
	$access = mysql_connect("localhost","root","12345");

	if (! $access) die ("Cound not connect MYSQL");

	mysql_select_db("home", $access);

	$query = mysql_query("SELECT * FROM homework WHERE first_name='" . $_POST["first_name"] . "' or 
													   last_name='" . $_POST["last_name"] . "' or
											           email='" . $_POST["mail"] . "' or
											           address='" . $_POST["address"] . "' or
											           city='" . $_POST["city"] . "' or
											           country='" . $_POST["country"] . "'" );
											  


	
	if (mysql_num_rows($query) > 0)	{				  
											  
		while ($row = mysql_fetch_array($query))
		{

			echo "----------------------------"."<br>";
			echo "First Name:  ".$row['first_name']."<br>";
			echo "Last Name:  ".$row['last_name']."<br>";
			echo "Email:  ".$row['email']."<br>";
			echo "Address:  ".$row['address']."<br>";
			echo "City:  ".$row['city']."<br>";
			echo "Country:  ".$row['country']."<br>";
			echo "----------------------------"."<br>"; 

		}
	}

	else
		echo "No record found!..";
		
	mysql_close($access);

?>
		</form>
	</body>
</html>
