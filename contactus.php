<html>
    <head>
        <title>Contact US</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <style>
body{
margin: 0;
padding: 0;
box-sizing: border-box;
/* font-family: 'Poppins', sans-serif; */
}




.contactt {
  position: relative;
  min-height: 100vh;
  padding: 50px 100px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: url("images/contactus.jpg");
  background-size: cover;
  background-position: center;
  z-index: 1; /* Ensures content stays above the vignette */
}

.contactt::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    to bottom, 
    rgba(255, 255, 255, 0.8) 0%, 
    transparent 5%, 
    transparent 95%, 
    rgba(255, 255, 255, 0.8) 100%
  );
  z-index: 0; /* Keeps gradient behind the content */
  pointer-events: none; /* Ensures the vignette doesn’t interfere with content interaction */
}








.contactt .contentt{
max-width: 800px;
text-align: center;
}
.contactt .contentt h2{
font-size: 36px;
font-weight: 500;
color: #fff;
}
.contactt .contentt p{

font-weight: 300;
color: #fff !important;
}
.containeer{
width: 100%;
display: flex;
justify-content: center;
align-items: center;
margin-top: 30px;

}

.containeer .contaactInfo{
width: 50%;
display: flex;
flex-direction: column;
background-color: transparent;
}

.containeer .contaactInfo .boxx{
position: relative;
padding: 20px;
display: flex;
background-color: transparent !important;
}

.containeer .contaactInfo .icon{
font-size: 30px;
color: white !important;
}

.containeer .contaactInfo .boxx .icon{
min-width: 80px;
height: 60px;
background: transparent;
display: flex;
justify-content: center;
align-items: center;
}

.containeer .contaactInfo .boxx .text{
display: flex;
margin-left: 20px;
font-size: 16px;
color: #fff !important;
flex-direction: column;
font-weight: 300;
}
.containeer .contaactInfo .boxx .text h3{
font-weight: 500;
color: #00bcd4;
}

.contacttForm{
width: 40%;
padding: 40px;
background: transparent;
border: 2px solid white;
border-radius: 20px;
backdrop-filter: blur(5px);
}

/* PREVIOUSLY
.contacttForm{
width: 40%;
padding: 40px;
background: #fff;
border-radius: 20px;
} */
.contacttForm h2{
font-size: 30px;
color: white;
font-weight: 500;
}
.contacttForm .inputBox{
position: relative;
width: 100%;
margin-top: 10px;
flex-direction: column;
}
.contacttForm .inputBox input,
.contacttForm .inputBox textarea{
background: transparent;
color: white;
width: 100%;
padding: 5px 0;
font-size: 16px;
margin: 10px 0;
border: none;
border-bottom: 2px solid white;
outline: none;
resize: none;
}
.contacttForm .inputBox span{
position: absolute;
left: 0;
padding: 5px 0px;
font-size: 16px;
margin: 10px 0;
pointer-events: none;
transition: 0.5s;
color: white;
}

.contacttForm .inputBox input:focus ~ span,
.contacttForm .inputBox input:valid ~ span,
.contacttForm .inputBox textarea:focus ~ span,
.contacttForm .inputBox textarea:valid ~ span
{
color: white; 
font-size: 14px;
transform: translateY(-20px);
} 
.contacttForm .inputBox input[type="submit"]
{
width: 100px;
background: #00bcd4;
color: #fff;
border: none;
cursor: pointer;
padding: 10px;
font-size: 18px;
}

</style>
<!-- Contact form style ends-->
    </head>
    <body>
        
    <header style="font-size: 15px;
       font-family: 'Alegreya', serif;    font-style: normal;">
        <a href="#" class="logo">
            <img src="images/logoremovebg.png" alt="Elvi Events Logo">
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <!-- <li><a href="ourwork.php">Our Work</a></li> -->
            
            <!-- <li><a href="spotlight.php">Spotlight</a></li> -->
            <!-- <li><a href="blog.php">Blog</a></li> -->
            <li><a href="contactus.php">Contact</a></li>
            <!-- <li><a href="faqs.php">Faqs</a></li> -->
        </ul>
    </header>
    <section class="banner" style="margin-bottom: 0px">
        <video autoplay muted loop playsinline>
            <source src="videos/combine2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- You can place additional content over the video here -->
        <div class="banner-content">
            <h1>Contact us</h1>
            <!-- <p>Your event, our expertise.</p> -->
        </div>
    </section>

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
        </script>
        <script src="script.js"></script>



        <!-- Contact form starts -->
<section class="contactt" style="margin-bottom: 10px; margin-top: 10px;">
    <div class="contentt">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos mollitia dolore doloremque facilis tempore iure exercitationem! Amet autem recusandae, quidem nam hic ut quaerat error sunt tempore natus odio quam?</p>
    </div>
    <div class="containeer" style="background: transparent">
        <div class="contaactInfo" style="background: transparent">
            
            <div class="boxx">
                <div class="icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
                <div class="text">
                    <h2 style="color: white;">Address</h2>
                    <p>Northland Complex, Shop No. 1& 2, Ground Floor, <br>Indrayani Nagar, Pune, Maharashtra 411039</p>
                </div>
            </div>
            <div class="boxx">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <div class="text">
                    <h2 style="color: white;">Phone</h2>
                    <p>+1-555-555-1212</p>
                </div>
            </div>
            <div class="boxx">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h2 style="color: white;">Email</h2>
                    <p>shreyas.elvievents@gmail.com</p>
                </div>
            </div>
        </div>
  
  
        <div class="contacttForm">
            <form>
                <h2>Send Message</h2><br>
                <div class="inputBox">
                    <input type="text" name="">
                    <span>Full Name</span>
                </div>
                <!-- <div class="inputBox">
                    <input type="text" name="">
                    <span>Partner's Full Name</span>
                </div> -->
                <div class="inputBox">
                    <input type="text" name="">
                    <span>Email ID</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="">
                    <span>Contact Number</span>
                </div>
                <!-- <div class="inputBox">
                    <input type="text" name="">
                    <span>Tentative Dates</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="">
                    <span>Destination</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="">
                    <span>Approximate Guest Size</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="">
                    <span>Destination</span>
                </div> -->
                <div class="inputBox">
                    <textarea></textarea>
                    <span>Any information that you want to convey it to us?</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="" value="Send">
                </div>
            </form>
        </div>
    </div>
  </section>
<!-- Contact form end -->


<!-- End contact form for mobile -->

<!-- FOOTER -->



<section id="footer">
    <div class="copyrights" style="color:white; font-size: 13px;">
    <div class="footer-container">
        
        <!-- footer-container starts -->
        <div class="footer-logo">
            <!-- footer-logo starts -->
            <a href="index.php">
            <img src="images/logoremovebg.png" alt="Logo"></a>
        </div>

        <div class="footer-content">
            <div class="footer-section contact-info">
                <h3>CONTACT</h3>
                <!-- <p>Sejal Singh</p> -->
                <p><i class="fa-solid fa-envelope"></i>  sejal.elvievents@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i> 9168933930</p>
                <!-- <p>Shreyas Adapa</p> --> <br>
                <p><i class="fa-solid fa-envelope"></i>  shreyas.elvievents@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i> 9290119516</p>
               
            </div>
            
            <div class="footer-section contact-info">
            <h3>ADDRESS</h3>
                <p>Northland Complex,<br>
                    Shop No. 1& 2,<br>
                    Ground Floor,<br>
                    Indrayani Nagar,<br>
                    Pune, Maharashtra 411039<br>
                </p>
            
            </div>
            <div class="footer-section menu">
                <h3>MENU</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="ourwork.php">Our Work</a></li>
                </ul>
            </div>
            <!-- <div class="footer-section menu">
                <ul>
                    <li><a href="contactus.php">Contact</a></li>
                </ul>
            </div> -->
            
            &emsp; &emsp; &emsp;
            <div class="footer-section social-media">
                <a href="https://www.instagram.com/elvievents?igsh=MTQ4cDI1eDd3bzVhNg=="><i class="fa-brands fa-instagram fa-lg"></i></a><br>
                <a href="https://www.facebook.com/worldofelvi?mibextid=ZbWKwL"><i class="fa-brands fa-facebook fa-lg"></i></a><br>
                <!-- <a href="#"><i class="fa-brands fa-twitter fa-lg"></i></a> -->
            </div>
            
            </div>
            
        </div>
       <center> 
        <i class="fa-regular fa-copyright"></i> 2023 Copyright: Elvi Events     |    Developed By Harshika Jadhav and Saanchi Kukreja </center><br><br>
    </div>
</div>
</section> <!-- footer-container  starts -->
</footer>

    </body>
</html>