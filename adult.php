<?php
session_start();
?>

<?php
$_SESSION["name"] = $_POST["name"]; 
$_SESSION["surname"] = $_POST["surname"];
$_SESSION["passport"] = $_POST["passport"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["occupation"] = $_POST["occupation"]; 
$_SESSION["nationality"] = $_POST["nationality"];
?>


<!DOCTYPE html>
<html>
<head>
<title>Adult dependants</title>
<meta content="noindex, nofollow" name="robots">
<!-- Importing Font Family From Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="multipleforms.js"></script>
</head>
<body>
<div class="container">
<h2>Register your adult dependants excluding yourself</h2>
<div id="selected_form_code">
<select id="select_btn">
<option value="0">Select Number of Adult dependant</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
<div id="form1">
<form <?php       
 if ($_SESSION["numOfChild"] >= 1) {
      ?>  action="child.php"
      <?php
      } else {
          ?> action="process1.php"
      <?php
      }
      
      
      
      ?> id="form_submit" method="post" name="form_submit">
    

</form>
</div>
</div>
    
