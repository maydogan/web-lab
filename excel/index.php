<html>
<body>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajaaax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
  <form id="one" action = "oper/query.php" method = "POST" > 
    <fieldset>
    <legend>Query Registry</legend>
    <h5>Fill in registration information what you want to call!</h5>
    First Name<br><input type = "text" name = "first_name"><br/><br/>
    Last Name<br><input type = "text" name = "sifre"><br/><br/>
    Email<br><input type = "text" name = "email"><br/><br/>
    Address<br><input type = "text" name = "address"><br/><br/>
    City<br><input type = "text" name = "city"><br/><br/>
    Country<br><input type = "text" name = "country"><br/><br/>

    <input type = "submit" value = "Query" >
    </fieldset>
  </form>
	
  <form id="two" action = "oper/excel.php" method = "POST" > 
    <fieldset>
    <legend>Save As Excel File To Registry </legend>
    <h5>Fill in registration information what you want to call!</h5>
    First Name<br><input type = "text" name = "first_name"><br/><br/>
    Last Name<br><input type = "text" name = "sifre"><br/><br/>
    Email<br><input type = "text" name = "email"><br/><br/>
    Address<br><input type = "text" name = "address"><br/><br/>
    City<br><input type = "text" name = "city"><br/><br/>
    Country<br><input type = "text" name = "country"><br/><br/>
    <input type = "submit" value = "Query" >
    </fieldset>    
  </form>
  <form id="four" action = "oper/sort.php" method = "POST">
	<fieldset>
    <legend>Sort Registry </legend>
	  <h5> Select the that want to sort area!</h5>
	  <input type="radio" name="s1" value="first_name" /> First Name<br/>
      <input type="radio" name="s1" value="last_name" /> Last Name<br/>
      <input type="radio" name="s1" value="email" /> Email<br/>
      <input type="radio" name="s1" value="address" /> Address<br/>
      <input type="radio" name="s1" value="city" /> City<br/>
      <input type="radio" name="s1" value="country" /> Country<br/>
      <input type="submit" align = "center" value="Sort" />
     </fieldset>
  </form>
  <form id="three">
	  <fieldset>
       <legend>How many cities or countries? </legend>
	  <a href="oper/city.php"> Click here </a>to learn how many diffirent cities on database..<br>
	  <a href="oper/country.php"> Click here </a>to learn how many diffirent countries on database..
	  </fieldset>
  </form>

  <tr>
        <td colspan="2" style="background-color:#FFA500;text-align:center;">
         Copyright &copy 2012 maydogan </td>
  </tr>
  </body>
</html>
