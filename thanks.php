<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Booked successfully</h1>
       
<?PHP


echo "<h5>Trip type as: </h5>". " " .$_SESSION["trip_type"]. "<br>";
echo "<h5>Travelling from:</h5>". " " .$_SESSION["current_location"]. " to ". $_SESSION["destination"]. "<br>";
echo "<h5>Departure Date:</h5>". " " .$_SESSION["depart_on"];
echo "<h5>Return Date:</h5>". " " .$_SESSION["return_on"];
echo "<h5>Class:</h5>". " " .$_SESSION["w"];
echo "<h5>Adult:</h5>". " " .$_SESSION["numOfAdult"];
echo  "<h5>Child(ren):</h5>". " " .$_SESSION["numOfChild"]."<br>";



        
?>    
        
<?php 
        

echo " ".$_SESSION["surname"];
echo "<h5>Passport number: </h5>". " " .$_SESSION["passport"];
echo "<h5>Email Address: </h5>". " " .$_SESSION["email"];
echo "<h5>Occupation: </h5>". " " .$_SESSION["occupation"];
echo "<h5>Nationality: </h5>". " " .$_SESSION["nationality"];

?>
    
<?php
$_SESSION["userID1"] = $_POST["userID1"];
$_SESSION["name_on_card"] = $_POST["name_on_card"]; 
$_SESSION["name_of_holder"] = $_POST["name_of_holder"];
$_SESSION["card_num"] = $_POST["card_num"];
$_SESSION["ex_date"]  = $_POST["ex_date"]; 
$_SESSION["security_code"] = $_POST["security_code"];
        
echo "<h5>Hie again</h5>". " " .$_SESSION["name"]."thanx for flying with us";
echo "<h5>Card name</h5>". " " . $_SESSION["name_on_card"];
echo "<h5>Name of holder</h5>". " " .$_SESSION["name_of_holder"];
echo "<h5>We want your authorisation on </h5>". " " .$_SESSION["card_num"];

?>
  
<?php
        $n = $_SESSION["name_on_card"];
        $o = $_SESSION["name_of_holder"];
        $p = $_SESSION["card_num"];    
        $q = $_SESSION["ex_date"];
        $r = $_SESSION["security_code"];
        $user1 = $_SESSION["userID1"];
        
        
        
        
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

$sql = "INSERT INTO Payment_Details(Name_of_card, Name_of_holder, Card_number, Expiry_date, Security_code, userID) VALUES ('$n','$o','$p','$q','$r','$user1')";

if ($conn->query($sql) === TRUE) {
    echo "Please proceed to print your reciept...<br> Looking fprward to flying with you on the". " " .$_SESSION["depart_on"];"Please dont miss your flight!!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>                        
        <form action="verify.php" method="post">
<input type="submit" value="Authorise" value="send"> 
        </form>
        
        
        

    
    
          
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </body>
    </html>