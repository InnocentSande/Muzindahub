<?php 
$pageTitle = "Welcome to Muzinda Airlines";

include("inc/header.php"); 


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
        <img src="images/aircraft.jpg" alt="Africa" class="siteImage africa">
            </div>
        
        
         <div>   
        <img src="images/aircraft1.jpg" alt="Asia" class="siteImage odd asia">
    
     </div>
        
        
        
        <img src="images/airplane3.jpg" alt="Europe" class="siteImage europe">
        
    
        
    
        
        <img src="images/wing.jpg" alt="Australia" class="siteImage australia">
        
     
        
      
        
        <img src="images/passenger.jpg" alt="South America" class="siteImage southamerica">
        
     
        
   
    
        <img src="images/chicago.jpg" alt="North America" class="siteImage northamerica">
        
</div>

   <div>  
       
        <?php include("inc/footer.php"); ?>