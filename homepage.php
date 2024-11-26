<!-- Contact US Form Integration Starts-->
<?php
    // Include the database connection
    include('dbconnection.php');
    
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Fetch the form data
        $pname = $_POST['pname'];
        $bname = $_POST['bname'];
        $gname = $_POST['gname'];
        $contactnum = $_POST['contactnum'];
        $weddingdate = $_POST['weddingdate'];

        // Prepare and execute the insert query using prepared statements
        $stmt = $connection->prepare("INSERT INTO contactdetails (PrimaryName, BrideName, GroomName, ContactNum, WeddingDate) VALUES (?, ?, ?, ?, ?)");
        
        // Bind the parameters
        $stmt->bind_param("sssss", $pname, $bname, $gname, $contactnum, $weddingdate);

        // Execute the query
        if ($stmt->execute()) {
            echo "<script>alert('Data Inserted Successfully')</script>";
        } else {
            echo "<script>alert('Error Inserting Data')</script>";
        }

        // Close the statement
        $stmt->close();
    }
    
    // Close the database connection (optional)
    mysqli_close($connection);
?>



<!-- Contact US Form Integration Ends -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Elvi Events</title>
    <link rel="stylesheet" href="indexstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">

    <style>
        .curator{
            margin-top: 50px;

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
        <div class="banner-content" style="  font-family: Great Vibes, cursive;
  font-weight: 400;  font-style: normal">
            <h1>Crafting Moments for you </h1>
            <!-- <p>Your event, our expertise.</p> -->
        </div>
    </section>


    <!-- Testimonial Starts -->
    <div class="testimonial-container">
        <h2 class="testimonial-heading">Testimonials</h2>

        <div class="testimonial-wrapper">
            <!-- Duplicate the last slide at the beginning -->
            <div class="testimonial-slide">
                <p>"The attention to detail was phenomenal. Every aspect was perfect."</p>
                <h3>Emily Rose</h3>
                <span>Birthday Party</span>
            </div>

            <!-- Original slides -->
            <div class="testimonial-slide">
                <p>"Hiring this wedding planner transformed my sister's wedding into an unforgettable, stress-free, and enjoyable holiday. <br> I can't thank them enough for their outstanding service and dedication to making my sister's special day perfect. Highly recommended!"
                </p>
                <h3>Jay S</h3>
                <!-- <span>Wedding Event</span> -->
            </div>
            <div class="testimonial-slide">
                <p>"The team was reliable, got things done on time. Whenever we needed to get help from them, they were available. <br> Most importantly they were kind and understanding, which is a rare and wonderful quality. A great team of wedding planners, and ever greater individuals. 10/10"</p>
                <h3>Karan K</h3>
                <!-- <span>Corporate Event</span> -->
            </div>

            <div class="testimonial-slide">
                <p>"It was the perfect execution of how we planned and imagined our wedding to be. Thank you Shreyas, Sejal and the entire team of Elvi for all the efforts <br> you've put to make OUR day so special. You provided us with such an amazing event, proving it was a right decision to hire the professionals to the job."</p>
                <h3>Saikumar K</h3>
                <!-- <span>Corporate Event</span> -->
            </div>




            <!-- Duplicate the first slide at the end -->
            <div class="testimonial-slide">
                <p>"Hiring this wedding planner transformed my sister's wedding into an unforgettable, stress-free, and enjoyable holiday. <br> I can't thank them enough for their outstanding service and dedication to making my sister's special day perfect. Highly recommended!"
                </p>
                <h3>Jay S</h3>
                <!-- <span>Wedding Event</span> -->
            </div>
        </div>
        <div class="testimonial-arrow left-arrow">&#10094;</div>
        <div class="testimonial-arrow right-arrow">&#10095;</div>
    </div>

    <!-- Testimonial Ends -->

  
  
  
  
    <!-- Curator.io starts -->
 
    <!-- Place <div> tag where you want the feed to appear -->
<div id="curator-feed-default-feed-layout" style="background: url('images/curatorio.jpg');background-size:cover;margin-top:50px;transparency:"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>

<!-- The Javascript can be moved to the end of the html page before the </body> tag -->
<script type="text/javascript">
/* curator-feed-default-feed-layout */
(function(){
var i,e,d=document,s="script";i=d.createElement("script");i.async=1;i.charset="UTF-8";
i.src="https://cdn.curator.io/published/00068342-cfdf-4664-af45-6d8a06915aaf.js";
e=d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
})();
</script>
    <!-- Curator.io ends -->

    <!-- Contact Form Starts -->
    <div class="appointment-container">
        <div class="appointment-header">
            <h1>Book an Appointment!</h1>
        </div>
        <div class="appointment-content">
            <div class="appointment-left">
                <img src="images/undraw-contact.svg" alt="Contact Image">
            </div>
            <div class="appointment-right">
                <form method="POST">
                    <input type="text" name="pname" placeholder="Primary Contact Name" required>
                    <input type="text" name="bname" placeholder="Bride's Name" required>
                    <input type="text" name="gname" placeholder="Groom's Name" required>
                    <input type="text" name="contactnum" placeholder="Contact No." pattern="\d{10}" title="Please enter a 10-digit phone number" required>
                    <label for="weddingdate" id="weddingdate" style="text-align: left;">Wedding Date:</label>
                    <input type="datetime-local" id="weddingdate" name="weddingdate">
                    <button type="submit">Send Message</button>
                </form>

            </div>
        </div>
    </div>


    <!-- Contact Form Ends -->

    <script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
    </script>
    <script src="script.js"></script>


<!-- FOOTER -->




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