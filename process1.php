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

<?PHP

$_SESSION["userID"];
echo "<h5>Trip type as: </h5>". " " .$_SESSION["trip_type"]. "<br>";
echo "<h5>Travelling from:</h5>". " " .$_SESSION["current_location"]. " to ". $_SESSION["destination"]. "<br>";
echo "<h5>Departure Date:</h5>". " " .$_SESSION["depart_on"];
echo "<h5>Return Date:</h5>". " " .$_SESSION["return_on"];
echo "<h5>Class:</h5>". " " .$_SESSION["w"];
echo "<h5>Adult:</h5>". " " .$_SESSION["numOfAdult"];
echo  "<h5>Child(ren):</h5>". " " .$_SESSION["numOfChild"]."<br>";

?>
        
        
        
<?php
        if (!empty($_POST["Aname_3"]) && !empty($_POST["Aname_2"]) && !empty($_POST["Aname_1"])) {
        
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

    $sqla1 = "INSERT INTO adult_dependant01 (userID, aName, aLastname, aPassport_number1, Age) VALUES ('$user','$aName1','$alastname1','$aPassport1','$aAge1')";

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

    $sqla1 = "INSERT INTO adult_dependant01 (userID, aName, aLastname, aPassport_number1, Age) VALUES ('$user','$aName1','$alastname1','$aPassport1','$aAge1')";

    $sqla2 = "INSERT INTO adult_dependant02 (userID, aName, aLastname, aPassport_number2, Age) VALUES ('$user','$aName2','$alastname2','$aPassport2','$aAge2')";

    if ($conn->query($sqal) === TRUE && $conn->query($sqla1) === TRUE && $conn->query($sqla2) === TRUE) {
        echo "<h5>Please proceed to payment...</h5>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();      

        }
        }
        
        

    ?>
        
        
        
        
        
        
        
        
        
        
    
        
        
        
        
        
        
        
        
        
        
<?php
    if (!empty($_POST["name_3"]) || !empty($_POST["name_2"]) || !empty($_POST["name_1"])) {    
        
    if (empty($_POST["name_3"]) && empty($_POST["name_2"])) {
$_SESSION["name_"] = $_POST["name_1"]; 
$_SESSION["email_"] = $_POST["email_1"];
$_SESSION["Passport_number"] = $_POST["Passport_number1"];
$_SESSION["Age"] = $_POST["Age1"];
        
        echo $_SESSION["name_"];
        echo $_SESSION["email_"];
        echo $_SESSION["Passport_number"];
        echo $_SESSION["Age"];
        
        
$user = $_SESSION["userID"];
$cName = $_SESSION["name_"];
$cEmail = $_SESSION["email_"];
$cPassport = $_SESSION["Passport_number"];
$cAge = $_SESSION["Age"];
        
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

$sql = "INSERT INTO child_dependant (userID, cName, cLastname, cPassport_number, Age) VALUES ('$user','$cName','$cEmail','$cPassport','$cAge')";

if ($conn->query($sql) === TRUE) {
    echo "<h5>Please proceed to payment...</h5>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();    
        
    } elseif (empty($_POST["name_3"])) {
        
        $_SESSION["name_2"] = $_POST["name_2"]; 
        $_SESSION["email_2"] = $_POST["email_2"];
        $_SESSION["Passport_number2"] = $_POST["Passport_number2"];
        $_SESSION["Age2"] = $_POST["Age2"];
       
        echo $_SESSION["name_2"];
        echo $_SESSION["email_2"];
        echo $_SESSION["Passport_number2"];
        echo $_SESSION["Age2"];
        
        
        $_SESSION["name_"] = $_POST["name_1"]; 
        $_SESSION["email_"] = $_POST["email_1"];
        $_SESSION["Passport_number"] = $_POST["Passport_number1"];
        $_SESSION["Age"] = $_POST["Age1"];
        
        echo $_SESSION["name_"];
        echo $_SESSION["email_"];
        echo $_SESSION["Passport_number"];
        echo $_SESSION["Age"];
            
    $user = $_SESSION["userID"];
    $cName = $_SESSION["name_"];
    $cSurname = $_SESSION["email_"];
    $cPassport = $_SESSION["Passport_number"];
    $cAge = $_SESSION["Age"];
   
    $user = $_SESSION["userID"];
    $cName1 = $_SESSION["name_2"];
    $cSurname1 = $_SESSION["email_2"]; 
    $cPassport1 = $_SESSION["Passport_number2"]; 
    $cAge1 = $_SESSION["Age2"];     
        
        
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

$sql = "INSERT INTO child_dependant (userID, cName, cLastname, cPassport_number, Age) VALUES ('$user','$cName','$cSurname','$cPassport','$cAge')";

$sql1 = "INSERT INTO child_dependant01 (userID, cName, cLastname, cPassport_number1, Age) VALUES ('$user','$cName1','$cSurname1','$cPassport1','$cAge1')";

if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
    echo "<h5>Please proceed to payment...</h5>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();      
        
        
        
        
        
        
        
        
        
        
    } else  {
        
        
        $_SESSION["name_"] = $_POST["name_1"]; 
        $_SESSION["email_"] = $_POST["email_1"];
        $_SESSION["Passport_number"] = $_POST["Passport_number1"];
        $_SESSION["Age"] = $_POST["Age1"];
        
        echo $_SESSION["name_"];
        echo $_SESSION["email_"];
        echo $_SESSION["Passport_number"];
        echo $_SESSION["Age"];
    
         
        $_SESSION["name_2"] = $_POST["name_2"]; 
        $_SESSION["email_2"] = $_POST["email_2"];
        $_SESSION["Passport_number2"] = $_POST["Passport_number2"];
        $_SESSION["Age2"] = $_POST["Age2"];
       
        echo $_SESSION["name_2"];
        echo $_SESSION["email_2"];
        echo $_SESSION["Passport_number2"];
        echo $_SESSION["Age2"];
        
        $_SESSION["name_3"] = $_POST["name_3"]; 
        $_SESSION["email_3"] = $_POST["email_3"];
        $_SESSION["Passport_number3"] = $_POST["Passport_number3"];
        $_SESSION["Age3"] = $_POST["Age3"];    
        
        echo $_SESSION["name_3"];
        echo $_SESSION["email_3"];
        echo $_SESSION["Passport_number3"];
        echo $_SESSION["Age3"];
        
        
        
    $user = $_SESSION["userID"];
    $cName = $_SESSION["name_"];
    $cSurname = $_SESSION["email_"];
    $cPassport = $_SESSION["Passport_number"];
    $cAge = $_SESSION["Age"];
   
    $user = $_SESSION["userID"];
    $cName1 = $_SESSION["name_2"];
    $cSurname1 = $_SESSION["email_2"]; 
    $cPassport1 = $_SESSION["Passport_number2"]; 
    $cAge1 = $_SESSION["Age2"]; 
        
    $user = $_SESSION["userID"];
    $cName2 = $_SESSION["name_3"];
    $cSurname2 = $_SESSION["email_3"]; 
    $cPassport2 = $_SESSION["Passport_number3"]; 
    $cAge2 = $_SESSION["Age3"]; 
     
        
        
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

$sql = "INSERT INTO child_dependant (userID, cName, cLastname, cPassport_number, Age) VALUES ('$user','$cName','$cSurname','$cPassport','$cAge')";

$sql1 = "INSERT INTO child_dependant01 (userID, cName, cLastname, cPassport_number1, Age) VALUES ('$user','$cName1','$cSurname1','$cPassport1','$cAge1')";
        
$sql2 = "INSERT INTO child_dependant02 (userID, cName, cLastname, cPassport_number2, Age) VALUES ('$user','$cName2','$cSurname2','$cPassport2','$cAge2')";

if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo "<h5>Please proceed to payment...</h5>";
} else {
    echo "Somethng wrong with our server";
}

$conn->close();      
       
    }
    }
 
?>

        
<?php
    
if (!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["passport"]) && !empty($_POST["email"]) && !empty($_POST["occupation"]) && !empty($_POST["nationality"])) {
    
$_SESSION["name"] = $_POST["name"]; 
$_SESSION["surname"] = $_POST["surname"];
$_SESSION["passport"] = $_POST["passport"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["occupation"] = $_POST["occupation"]; 
$_SESSION["nationality"] = $_POST["nationality"];

}

?>

        
<?PHP


echo "<h5>Hie: </h5>". " " .$_SESSION["name"];
echo " ".$_SESSION["surname"];
echo "<h5>Passport number: </h5>". " " .$_SESSION["passport"];
echo "<h5>Email Address: </h5>". " " .$_SESSION["email"];
echo "<h5>Occupation: </h5>". " " .$_SESSION["occupation"];
echo "<h5>Nationality: </h5>". " " .$_SESSION["nationality"];
?>
   
    

<?php
        $h = $_SESSION["name"];
        $i = $_SESSION["surname"];    
        $j = $_SESSION["passport"];
        $k = $_SESSION["email"];
        $l = $_SESSION["occupation"];
        $m = $_SESSION["nationality"];
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

$sql = "INSERT INTO Personal_Details (FirstName, LastName, Passport, Email, Occupation, Nationality, userID) VALUES ('$h','$i','$j','$k','$l','$m', '$user')";

if ($conn->query($sql) === TRUE) {
    echo "<h5>Please proceed to payment...</h5>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>        
       
        
        <h1>Payment Info</h1>
<div class="form2">
<form action="thanks.php" method="post">

    <div class="processform">
    <label>userID</label>
    <td><input type="text" id="userID1" name="userID1" placeholder="please enter your userID"/></td>
         
   <label>Name On Card:</label>
    <input type="text" id="name_on_card" name="name_on_card"/>
       
        
   <label>Name On Holder</label>
    <input type="text" id="name_of_holder" name="name_of_holder"/>
       
      
   <label>Card Number</label>
   <input type="text" id="card_num" name="card_num"/>
       
       
    <label>Expiry Date</label><br><br>
    <input type="date" id="ex_date" name="ex_date"/><br><br>
       
       
    <label>Security Code</label>
    <input type="text" id="security_code" name="security_code"/>
    </div>
    <input type="submit" value="Approve" id="process" />
    </form>
    </div>

<!--<?php include("inc/footer.php"); ?>-->
   
    </body>
</html>  
    
