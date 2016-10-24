<?php
session_start();
?>
<?php 
$pageTitle = "Welcome to Muzinda Airlines";

include("inc/header.php"); 


?>
<!DOCTYPE html>
<html>
    <body>
   
<h1>Your Have chosen:</h1>         
        
<?php

$_SESSION["userID"] = $_POST["userID"];
$_SESSION["trip_type"] = $_POST["userTrip"];    
$_SESSION["current_location"] = $_POST["initial"]; 
$_SESSION["destination"] = $_POST["userFinal"];
$_SESSION["depart_on"] = $_POST["userDeparture"];
$_SESSION["return_on"] = $_POST["userReturn"];
$_SESSION["w"] = $_POST["a"]; 
$_SESSION["numOfAdult"] = $_POST["numOfAdult"];
$_SESSION["numOfChild"] = $_POST["numOfChild"];

echo "<h5>Trip type as: </h5>". " " .$_SESSION["trip_type"]. "<br>";
echo "<h5>Travelling from:</h5>". " " .$_SESSION["current_location"]. " to ". $_SESSION["destination"]. "<br>";
echo "<h5>Departure Date:</h5>". " " .$_SESSION["depart_on"];
echo "<h5>Return Date:</h5>". " " .$_SESSION["return_on"];
echo "<h5>Class:</h5>". " " .$_SESSION["w"];
echo "<h5>Adult:</h5>". " " .$_SESSION["numOfAdult"];
echo  "<h5>Child(ren):</h5>". " " .$_SESSION["numOfChild"]."<br>";


?>
        
<?php
        $a = $_SESSION["trip_type"];
        $b = $_SESSION["current_location"];    
        $c = $_SESSION["destination"];
        $d = $_SESSION["w"];
        $e = $_SESSION["numOfAdult"] + $_SESSION["numOfChild"];
        $f = $_SESSION["depart_on"];
        $user = $_SESSION["userID"];
        
        
        
        
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

$sql = "INSERT INTO reserved (r_plane_trip_type, from_current_location, to_destination, r_class, r_numOf_seats, departure, userID) VALUES ('$a','$b','$c','$d','$e','$f', '$user')";

if ($conn->query($sql) === TRUE) {
    echo "<h5>Please proceed to booking info...<h5>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>        
        
        
        
        
<h1>Available Flights According to your search, tick one</h1>        
<?php
$xxx = $_SESSION["current_location"];
$yyy = $_SESSION["destination"];

 

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

        
$sql = "SELECT `plane`, `departure`, `from_destination`, `to_destination` FROM `available` WHERE from_destination = '$xxx' AND to_destination = '$yyy'" ;
$result = $conn->query($sql);
        
//        if ($_SESSION["w"] == 'Economy') {  
//$sql = "SELECT `plane`, `departure`, `from_destination`, `to_destination`, FROM `available` WHERE from_destination = '$xxx' AND to_destination = '$yyy' AND economy_seats > 0 " ;
//         $result = $conn->query($sql);   
//        }

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         
         echo "<br>". $row["plane"]. " ". $row["departure"]. " ". $row["from_destination"]. " " . $row["to_destination"]. "<input type='radio' id='choose_flight' name='choose_flight'> <br>";
    
     }
} else {
     echo "<h1>Sorry, No Results found, please edit you search<h1>";
}

$conn->close();
?>  



<?php
// define variables and set to empty values
$departureErr = $emailErr = $returnErr = "";
$departure = $email = $return = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid =true; 
  
     if (empty($_POST["name"])) {
    $emailErr = "Email is required";
       $valid = false;
  } else {
    $email = ($_POST["name"]);
  }
    
    if (empty($_POST["surname"])) {
    $departureErr = "Date required";
    $valid = false;
  } else {
    $departure = ($_POST["surname"]);
  }
  
 
    
  if (empty($_POST["passport"])) {
    $returnErr = "Date Required";
  } else {
    $return = ($_POST["passport"]);
  }
    if ($valid) {
        header('Location: http://localhost/process1.php');
    }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}
?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <h1>Proceed to Booking info</h1>
        
        
        
<div class="form2">
    
    
<form  <?php       
if ($_SESSION["numOfAdult"] > 1){
  ?>  action="adult.php" 
      <?php 
}
    
      else if ($_SESSION["numOfChild"] >= 1) {
      ?>  action="child.php"
      <?php
      } else {
          ?> action="process1.php"
      <?php
      }
      
      
      
      ?>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      method="post" class="in_form2">

    
    <div class="processform">
    <label>Name</label>
    <input type="text" id="name" name="name"/>

       
       
    <label>Surname:</label>
    <input type="text" id="surname" name="surname"/>
       
       
    <label>Passport number:</label>
    <input type="text" id="passport" name="passport"/>
    
       
       
    <label>Email:</label>
    <input type="text" id="email" name="email"/>
    
       
    
    <label>Re-Enter Email:</label>
    <input type="text" id="re_mail" name="re_mail"/>
        
       
       
       
    <label>Occupation:</label>
    <input type="text" id="occupation" name="occupation"/>
    
       
    
    <label>Nationality:</label>
    <input type="text" id="nationality" name="nationality"/>
    </div>
    
    <input type="submit" value="Proceed" id="process" />
    </form>
    
    
    </div>
        
    
 
<?php include("inc/footer.php"); ?>

</body>

</html>