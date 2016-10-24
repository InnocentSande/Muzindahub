<!--
Hie there , this is my Airplane Ticket Booking Web Service.
I had a late start hence the project is half finished,
Had only left to implement the following points, 

1--Form Validation, for now any value you enter into the fields will be accepted and book successfully

2--Incomplete contact us page as the email cannot send to the server yet

3--The flight booking div form is yet to be made interactive with jquery as it covers most of the page,
    want to make it visble on click.

4--js fee calculation runs in the consle for now.

5--php $_post output is not styled properly.

6-- some of my logic is not well explained so you might have tough time interpreting it

i guess thats only wats left, will continue developing the site though, 
-->



<!--
For logic sake;

i have got 

available table: for planes available for booking
reserved table: for reserves made, the number of seats which will then decrement available seats wen successfully booked,
personal details table
payment details table
adult and child dependant table which will correspond with the user email wen generating a report
successful boking table: with all the session data in one place
-->









<?php 
$pageTitle = "Welcome to Muzinda Airlines";

include("inc/header.php"); 



?>

<?php
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

$sql = "UPDATE `available`
SET `departure` = DATE_ADD(`departure`, INTERVAL 7 DAY)
WHERE departure < DATE(now()) OR (economy_seats = 0 AND executive_seats = 0 AND suits_seats = 0) ";

$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "<h5>Welcome</h5>";
} else {
    echo "Our server is down at the moment, please come back leta";
}

$conn->close();



?>        




           
            <h1>A trip around the world is just a click away</h1>

            <form action="process.php"
      method="POST" class="bookingForm" name="flight_booking" onsubmit="return validateForm()">
                <h4>Flight Bookings</h4>
    <label for="aday"></label>
    <p id="aday"></p>
                <input type="text" id="userID" placeholder="Email Address" name="userID">
    
    
                <div id="radio" name="p_trip">
                <label>Round Trip</label>
                <input type="radio" id="roundTrip" value="Round Trip" name="userTrip" for="roundTrip" checked="checked">
                
                <label>One Way</label>
                <input type="radio" id="OneWay" value="One way" name="userTrip" for="roundTrip" class="">
                    <br><br>
                </div>
    
                
                <div id="destination">
                    <label for="initial">From:</label>
                        <select name="initial" id="initial">
                            <option value="Harare">Harare</option>
                            <option value="Bulawayo">Bulawayo</option>
                            <option value="Pretoria">Pretoria</option>
                            <option value="Melbourne">Melbbourne</option>
                            <option value="Chitungwiza">Chitungwiza</option>
                        </select><br>

                    <label for="final">To:</label><br>
                        <select id="final" name="userFinal">
                            <option value="Harare">Harare</option>
                            <option value="Bulawayo">Bulawayo</option>
                            <option value="Pretoria">Pretoria</option>
                            <option value="Melbourne">Melbbourne</option>
                            <option value="Chitungwiza">Chitungwiza</option>
                    </select>
                    
                </div>
               
                <div id="selectables">
                    <label>Depart date</label>
                    <div>
                        <input type="date" id="departure" value="departure" name="userDeparture" for="departure" class="" onclick = "t_day()"></div>
           
                   <label>Return Date</label>
                        <div>
                     <input type="date" id="return" value="return" name="userReturn" for="return" class=""><br>
                        </div>


                
                    <label for="classType">Class</label><br>
                        <select name="a" id="a">
                            <option value="Economy">Economy</option>
                            <option value="Business">Business</option>
                            <option value="Suits">Suits</option>
                        </select><br>
                    
                     
                        <div class="adult">
                    <label>Adult</label><br>
                        <select id="adult" name="numOfAdult">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                            </div>
                            
                           <div class="child"> 
                    <label>Child</label><br>
                        <select id="child" name="numOfChild">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                           
                            </div>
                
                
                   
               </div>
                <div class="buttons">
                
                    <input type="submit" value="Search" onclick="pick();" >
                    <input type="button" value="calculate" onclick="cal();" >
                   

                </div>    
                    
            </form>
        










            <div class="siteImages">
        <div>
        <img src="images/wallpaper-cape-town-city-south-africa.jpg" alt="Africa" class="siteImage africa">
            </div>
        
        
         <div>   
        <img src="images/taj-mahal.jpg" alt="Asia" class="siteImage odd asia">
    
     </div>
        
        
        
        <img src="images/darling-harbour.jpg" alt="Europe" class="siteImage europe">
        
    
        
    
        
        <img src="images/sydney.jpg" alt="Australia" class="siteImage australia">
        
     
        
      
        
        <img src="images/cable-car.jpg" alt="South America" class="siteImage southamerica">
        
     
        
   
    
        <img src="images/chicago.jpg" alt="North America" class="siteImage northamerica">
        
</div>

   <div>  
       
        <?php include("inc/footer.php"); ?>