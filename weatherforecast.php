<?php 
$pageTitle = "Welcome to Muzinda Airlines";

include("inc/header.php"); 


?>

           
            <h1>Our Most trusted weather forecasts</h1>
            
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












<div>
<h2>External links</h2>
    
    <center><img src="images/Website_Page_Under_Construction.jpg" alt="Page Under Construction" id="site_construction" align="middle" class="underconstruction"></center>
    
</div>