<?php 
$pageTitle = "Contact Us";


include("inc/header.php");


?>


<div>
            
            <h3>Leave us a message</h3>
            <form>
                <label for="firstName">Name:</label><br>
                <input type="text" id="firstName" name="user_firstNme"><br>
                <label for="lastName">Surname:</label><br>
                 <input type="text" id="lasttName" name="user_lastName"><br>
                <label for="email">Email Address:</label><br>
                 <input type="email" id="mail" name="userEmail"><br>
                <label for="message">Message:</label><br>
                <textarea id="message" name="userMessage"></textarea>
            </form>



   
    <footer class="fooooot">
        <section class="socialMedia">
            <img src="socialMedia/fb.jpg" alt="Like us on faceBook" class="fb"><br>
            <img src="socialMedia/twitter.jpg" alt="follow us on twitter" class="fb"><br>
            <img src="socialMedia/Linkedin.jpg" alt="Linked In" class="fb"><br>
            <img src="socialMedia/Instagram.jpg" alt="Tag Us" class="fb"><br>
            <img src="socialMedia/youtube.JPG" alt="youtube" class="fb"><br>
        </section>
    
       
        
         
             <div class="container media">
                    <div><a href="index.html">Home</a></div>
                    <div><a href="explore.html">Explore</a></div>
                    <div><a href="aboutus.html">About Us</a></div>
                    <div><a href="contactus.html">Contact Us</a></div>
                    <div><a href="weatherforecast.html">Weather</a></div>
            </div>

         
        <div class="office">
            <h2>Office Hours</h2>
            <p> Monday - Friday<br>
                0800hrs - 1630hrs<br>
                Saturdays<br>
                0800hrs - 1200hrs<br>
                Closed on Sunday
            </p>
        </div>
    
            
       <div class="adres">
        
            #2562 Samora Machel ave <br>
            po box 245 Harare<br>
            Zimbabwe
        </div>

        
        <div class="tag">
            <p>Muzinda Airlines || All rights reserved &copy; <?php echo date ("Y"); ?>|| Developed by Innocent Sande || Privacy Policy</p>
            <a href="#top" id="back_t_top"> Back to booking form &raquo;</a>
        </div>
    </footer>
    
