<?php
session_start();
?>



<?php

     if (!empty($_POST["Aname_3"]) || !empty($_POST["Aname_2"]) || !empty($_POST["Aname_1"])) {
    
         if (empty($_POST["Aname_3"]) && empty($_POST["Aname_2"])) {

$_SESSION["Aname"] = $_POST["Aname_1"]; 
$_SESSION["Alastname"] = $_POST["Alastname_1"];
$_SESSION["Apassport_number"] = $_POST["Apassport_number1"];
$_SESSION["Aage"] = $_POST["Aage1"];
        
        echo $_SESSION["Aname"];
        echo $_SESSION["Alastname"];
        echo $_SESSION["Apassport_number"];
        echo $_SESSION["Aage"];
        
        
$user = $_SESSION["userID"];
$aName = $_SESSION["Aname"];
$alastname = $_SESSION["Alastname"];
$aPassport = $_SESSION["Apassport_number"];
$aAge = $_SESSION["Aage"];
        
$servername = "localhost";
$username = "root";
$password = "Nyashadzashe23";
$dbname = "bookings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO adult_dependant (userID, aName, aLastname, aPassport_number, Age) VALUES ('$user','$aName','$alastname','$aPassport','$aAge')";

if ($conn->query($sql) === TRUE) {
    echo "<h5>Please proceed to payment...</h5>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();    
        
    } elseif (empty($_POST["Aname_3"])) {
        
        $_SESSION["Aname_2"] = $_POST["Aname_2"]; 
        $_SESSION["Alastname_2"] = $_POST["Alastname_2"];
        $_SESSION["Apassport_number2"] = $_POST["Apassport_number2"];
        $_SESSION["Aage2"] = $_POST["Aage2"];
       
        echo $_SESSION["Aname_2"];
        echo $_SESSION["Alastname_2"];
        echo $_SESSION["Apassport_number2"];
        echo $_SESSION["Aage2"];
        
        
        $_SESSION["Aname"] = $_POST["Aname_1"]; 
        $_SESSION["Alastname"] = $_POST["Alastname_1"];
        $_SESSION["Apassport_number"] = $_POST["Apassport_number1"];
        $_SESSION["Aage"] = $_POST["Aage1"];
        
        echo $_SESSION["Aname"];
        echo $_SESSION["Alastname"];
        echo $_SESSION["Apassport_number"];
        echo $_SESSION["Aage"];
        
            
$user = $_SESSION["userID"];
$aName = $_SESSION["Aname"];
$alastname = $_SESSION["Alastname"];
$aPassport = $_SESSION["Apassport_number"];
$aAge = $_SESSION["Aage"];
   
    $user = $_SESSION["userID"];
    $aName1 = $_SESSION["Aname_2"];
    $alastname1 = $_SESSION["Alastname_2"]; 
    $aPassport1 = $_SESSION["Apassport_number2"]; 
    $aAge1 = $_SESSION["Aage2"];     
        
        
$servername = "localhost";
$username = "root";
$password = "Nyashadzashe23";
$dbname = "bookings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sqla = "INSERT INTO adult_dependant (userID, aName, aLastname, aPassport_number, Age) VALUES ('$user','$aName','$alastname','$aPassport','$aAge')";

$sqla1 = "INSERT INTO adult_dependant (userID, aName, aLastname, aPassport_number, Age) VALUES ('$user','$aName1','$alastname1','$aPassport1','$aAge1')";

if ($conn->query($sqla) === TRUE && $conn->query($sqla1) === TRUE) {
    echo "<h5>Please proceed to payment...</h5>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();      
        
        
        
        
        
        
        
        
        
        
    } else  {
        
        
        $_SESSION["Aname_2"] = $_POST["Aname_2"]; 
        $_SESSION["Alastname_2"] = $_POST["Alastname_2"];
        $_SESSION["Apassport_number2"] = $_POST["Apassport_number2"];
        $_SESSION["Aage2"] = $_POST["Aage2"];
       
        echo $_SESSION["Aname_2"];
        echo $_SESSION["Alastname_2"];
        echo $_SESSION["Apassport_number2"];
        echo $_SESSION["Aage2"];
        
        
        $_SESSION["Aname"] = $_POST["Aname_1"]; 
        $_SESSION["Alastname"] = $_POST["Alastname_1"];
        $_SESSION["Apassport_number"] = $_POST["Apassport_number1"];
        $_SESSION["Aage"] = $_POST["Aage1"];
        
        echo $_SESSION["Aname"];
        echo $_SESSION["Alastname"];
        echo $_SESSION["Apassport_number"];
        echo $_SESSION["Aage"];
        
        $_SESSION["Aname3"] = $_POST["Aname_3"]; 
        $_SESSION["Alastname3"] = $_POST["Alastname_3"];
        $_SESSION["Apassport_number3"] = $_POST["Apassport_number3"];
        $_SESSION["Aage3"] = $_POST["Aage3"];    
        
        echo $_SESSION["Aname3"];
        echo $_SESSION["Alastname3"];
        echo $_SESSION["Apassport_number3"];
        echo $_SESSION["Aage3"];
        
        
        $user = $_SESSION["userID"];
        $aName = $_SESSION["Aname"];
        $alastname = $_SESSION["Alastname"];
        $aPassport = $_SESSION["Apassport_number"];
        $aAge = $_SESSION["Aage"];
   
        $user = $_SESSION["userID"];
        $aName1 = $_SESSION["Aname_2"];
        $alastname1 = $_SESSION["Alastname_2"]; 
        $aPassport1 = $_SESSION["Apassport_number2"]; 
        $aAge1 = $_SESSION["Aage2"];
            
        $user = $_SESSION["userID"];
        $aName2 = $_SESSION["Aname3"];
        $alastname2 = $_SESSION["Alastname3"]; 
        $aPassport2 = $_SESSION["Apassport_number3"]; 
        $aAge2 = $_SESSION["Aage3"]; 
     
        
        
$servername = "localhost";
$username = "root";
$password = "Nyashadzashe23";
$dbname = "bookings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sqal = "INSERT INTO adult_dependant (userID, aName, aLastname, aPassport_number, Age) VALUES ('$user','$aName','$alastname','$aPassport','$aAge')";

$sqla1 = "INSERT INTO adult_dependant (userID, aName, aLastname, aPassport_number, Age) VALUES ('$user','$aName1','$alastname1','$aPassport1','$aAge1')";
        
$sqla2 = "INSERT INTO adult_dependant (userID, aName, aLastname, aPassport_number, Age) VALUES ('$user','$aName2','$alastname2','$aPassport2','$aAge2')";

if ($conn->query($sqal) === TRUE && $conn->query($sqla1) === TRUE && $conn->query($sqla2) === TRUE) {
    echo "<h5>Please proceed to payment...</h5>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();      
       
    }
     }
 
?>



<!DOCTYPE html>
<html>
<head>
<title>Register Your Child(ren)</title>
<meta content="noindex, nofollow" name="robots">
<!-- Importing Font Family From Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="multipleform.js"></script>
</head>
<body>
<div class="container">
<h2>Register your child dependants</h2>
<div id="selected_form_code">
<select id="select_btn">
<option value="0">Select Number of Children</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
<div id="form1">
<form action="process1.php" id="form_submit" method="post" name="form_submit">

</form>
</div>
</div>
    
