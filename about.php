<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elvi Events</title>
    <!-- <link rel="shortcut icon" type="x-icon" href="client.png"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">    
<style>
h1 {
    font-size: 48px; 
    margin-bottom: 20px; 
}
p {
    font-size: 18px; /* Set font size for paragraph */
}

.section {
    display: flex;
    align-items: center;
    height: 100vh; /* Full height of the viewport */
    background-color: ; /* Optional background color for section */
}

.image-container {
    flex: 1; /* Take up half of the section */
    height: 100%; /* Full height of the section */
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: contain; /* Ensure the entire image fits within the container */
}

.content-container {
    flex: 1; /* Take up half of the section */
    padding: 40px; /* Add some padding */
   border-radius:80px;


  background-color:lightblue;
  margin-right:80px;
  margin-left:80px;
  padding:60px;

    
}
.content-container h1{
    font-size:100px;

    font-family: "Playfair Display", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}

.content-container p {
    font-size:22px;

  font-family: "Libre Franklin", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
    margin-bottom: 20px; /* Space between elements */
}




footer {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
        }
        
        .elvi-footer {
    background-image: url("images/newimage.jpeg");
    background-size: cover;
    background-position: center;
    color: white;
    padding: 30px 0 20px;
    font-family: Arial, sans-serif;
}

.elvi-footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.elvi-footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.elvi-contact-info,
.elvi-address-info,
.elvi-social-media {
    flex-basis: 30%;
    margin-bottom: 20px;
}

.elvi-footer h3 {
    font-size: 18px;
    margin-bottom: 15px;
    font-weight: bold;
}

.elvi-footer p {
    margin: 5px 0;
    font-size: 16px;
}

.elvi-social-media a {
    color: white;
    font-size: 24px;
    margin-right: 15px;
    text-decoration: none;
}

.elvi-social-media a:hover {
    opacity: 0.8;
}

.elvi-copyright {
    text-align: center;
    margin-top: 20px;
    font-size: 12px;
    border-top: 1px solid rgba(255,255,255,0.1);
    padding-top: 20px;
}

@media (max-width: 768px) {
    .elvi-footer-content {
        flex-direction: column;
    }

    .elvi-contact-info,
    .elvi-address-info,
    .elvi-social-media {
        flex-basis: 100%;
    }
}






</style>






</head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="images/logoremovebg.png" alt="Elvi Events Logo">
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="ourwork.html">Our Work</a></li>
            
            <li><a href="#footer">Contact</a></li>
            <li><a href="login_form.php">Login</a></li>
        </ul>
    </header>
    <section class="banner">
        <video autoplay muted loop playsinline>
            <source src="videos/combine2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- You can place additional content over the video here -->
        <div class="banner-content">
            <h1>About us</h1>
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
<div class="about" style="    
    justify-content: center;       align-items: center;           text-align: center;
    padding: 10px;             
    margin: 20px auto;    
    font-size: 24px;     
    width: 80%;                
    height: 400px;   
    background-color: #add8e6;
    color: black;            
    border-top-left-radius: 250px;
    border-bottom-right-radius: 250px;
    
}
"><br>
        <h1 style="font-size: 80px">Why Elvi?</h1>
        We're a team of passionate event enthusiasts dedicated to crafting unforgettable experiences. <br> With precision planning, attention to detail, and a dash of creativity, we bring your vision to life. <br> From weddings to corporate events, we have got you covered! <br>
        Our expert team listens, creates, and delivers tailored experiences that exceed your expectations. <br>  With love, care, and attention to detail, we make your special moments truly unforgettable.
        </div>
        <br><br><br><br>
<section class="section">
  <div class="image-container">
      <img src="images/Sejal.jpeg" alt="Sejal">
  </div>
  <div class="content-container">
    <div class="stickynote">
      <h1>Sejal Singh</h1>
    </div>
    
      <p>A serial achiever since 18, I've hustled in multiple MNCs before discovering my true calling - Event Management! With 4 years of experience in the field, I took the leap of faith and turned my passion into successful business. Now, I live my passion every day about creating buzzworthy events that leave a lasting impact!</p>
  </div>
</section>

<br>

<!-- Section with image on the right and content on the left -->
<section class="section" style="margin-right: 100px;">
  <div class="content-container">
      <h1>Shreyas Adapa</h1>
      <p>An Engineer by degree but an Event planner by passion! After a brief stint in the corporate world, I traded spreadsheets for a walkie-talkie and a 9-to-5 desk life for the fast-paced world of event planning. 
      I now thrive on turning chaos into unforgettable moments – because, let’s face it, planning an intimate wedding is way more exciting than debugging code!</p>
  </div>
  <div class="image-container">
      <img src="images/shreyas.JPG" alt="Shreyas">
  </div>
</section>
<br><br><br>

<script>
const columns = document.querySelectorAll('.column');

const checkScroll = () => {
    columns.forEach((column) => {
        const rect = column.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
            column.classList.add('visible');
        } else {
            column.classList.remove('visible');
        }
    });
};

// New script for sticky header effect
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
    checkScroll(); // Call the existing column animation function
});

window.addEventListener('load', checkScroll);

document.addEventListener('DOMContentLoaded', function() {
const hamburger = document.querySelector('.elvi-hamburger');
const menu = document.querySelector('.elvi-menu');

hamburger.addEventListener('click', function() {
hamburger.classList.toggle('active');
menu.classList.toggle('active');
});
});

document.addEventListener('DOMContentLoaded', function() {
// Get the current page URL
var currentPage = window.location.pathname.split("/").pop();

// Find the matching menu item and add the 'active' class
var menuItems = document.querySelectorAll('.elvi-menu a');
menuItems.forEach(function(item) {
if (item.getAttribute('href') === currentPage) {
    item.classList.add('active');
}
});
});
</script>





<footer class="elvi-footer">
<div class="elvi-footer-container">
<div class="elvi-footer-content">
    <div class="elvi-contact-info">
        <h3>CONTACT</h3>
        <p><i class="fa-solid fa-envelope"></i> sejal.elvievents@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i> 9168933930</p>
        <p><i class="fa-solid fa-envelope"></i> shreyas.elvievents@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i> 9290119516</p>
    </div>
    
    <div class="elvi-address-info">
        <h3>ADDRESS</h3>
        <p>Northland Complex,<br>
            Shop No. 1& 2,<br>
            Ground Floor,<br>
            Indrayani Nagar,<br>
            Pune, Maharashtra 411039<br>
        </p>
    </div>
    
    <div class="elvi-social-media">
        <h3>Social Media</h3>
        <a href="https://www.instagram.com/elvievents?igsh=MTQ4cDI1eDd3bzVhNg=="><i class="fa-brands fa-instagram fa-lg"></i></a>
        <a href="https://www.facebook.com/worldofelvi?mibextid=ZbWKwL"><i class="fa-brands fa-facebook fa-lg"></i></a>
    </div>
</div>
</div>
<div class="elvi-copyright">
<p><i class="fa-regular fa-copyright"></i> 2023 Copyright: Elvi Events | Developed By Harshika Jadhav and Saanchi Kukreja</p>
</div>
</footer>
</div>
</section> 



</body>
<script>
const element1 = document.querySelector('.elvi-header');
const element2 = document.querySelector('.banner');



// Check if element1 has the 'active' class
if (element1.classList.contains('.sticky')) {
element2.classList.add('.hidden');
} else {
element2.classList.remove('.hidden');
}

</script>
</html>