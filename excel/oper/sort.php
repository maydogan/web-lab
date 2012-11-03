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
		$access = mysql_connect("localhost","root","12345");

		if (! $access) die ("Cound not connect MYSQL");

		mysql_select_db("home", $access);
		$qu = $_POST['s1'];

		$query = mysql_query("SELECT all $qu FROM homework order by $qu decs ");
											      
    while ($row = mysql_fetch_array($query))
		{

			echo "----------------------------"."<br>";
		    echo $row["s1"];
		}
	mysql_close($access);

?>
		</form>
	</body>
</html>
