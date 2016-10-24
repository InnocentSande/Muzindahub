<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
       
<?php
        $_SESSION["userID1"];
        $_SESSION["userID"];
        $n = $_SESSION["name_on_card"];
        $o = $_SESSION["name_of_holder"];
        $p = $_SESSION["card_num"];    
        $q = $_SESSION["ex_date"];
        $r = $_SESSION["security_code"];
        $user1 = $_SESSION["userID1"];
        $user = $_SESSION["userID"];
        $_SESSION["w"];
        $best       = $_SESSION["numOfAdult"];
        $worst  =      $_SESSION["numOfChild"];
        
        
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



        if ($user === $user1) { 

$sql = "INSERT INTO successful_bookings
SELECT personal_details.FirstName,
personal_details.LastName,
personal_details.Passport,
personal_details.Email,
personal_details.Occupation,
personal_details.Nationality,

reserved.r_plane_trip_type,
reserved.from_current_location,
reserved.to_destination,
reserved.r_class,
reserved.r_numOf_seats,
reserved.departure,

payment_details.Name_of_card,
payment_details.Name_of_holder,
payment_details.Card_number,
payment_details.Expiry_date,
payment_details.Security_code,
payment_details.booktime_2


FROM personal_details

INNER JOIN reserved
ON personal_details.userID = reserved.userID

INNER JOIN payment_details 
ON payment_details.userID = personal_details.userID


ORDER BY id_number DESC
LIMIT 1";  
        }
        
        if ($_SESSION["w"] == 'Economy') {
            $sql1 = "UPDATE available  
    SET economy_seats = economy_seats - ($best + $worst)
    WHERE plane = 'a'
    AND economy_seats > 1";

        }


 elseif ($_SESSION["w"] == 'Business'){
    $sql1 = "UPDATE available  
    SET executive_seats = executive_seats - ($best + $worst)
    WHERE plane = 'a'
    AND executive_seats > 1";
     
} elseif ($_SESSION["w"] == 'Suits') {
      $sql1 = "UPDATE available  
    SET suits_seats = suits_seats - ($best + $worst)
    WHERE plane = 'a'
    AND suits_seats > 1";
 }
        
        
$sql2 = "UPDATE `available`
SET `departure` = DATE_ADD(`departure`, INTERVAL 7 DAY)
WHERE departure < DATE(now()) OR (economy_seats = 0 AND executive_seats = 0 AND suits_seats = 0) ";
$result = $conn->query($sql2);
        
        
        
if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo "AWESOME!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!, Successfully booked, enjoy your flight  ";
} else {
    echo "Your request was not sent in time, something happened with our server, Please go back to main menu and start over, sorry for the inconvinience";
}
        

$conn->close();
?>               
        
        
        
        
        
        
      
     

    </body>
</html>