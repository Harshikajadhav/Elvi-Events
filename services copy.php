<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elvi Events</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sstyles.css" />        

    <style>
      

        #servicess {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center items */
            padding: 20px;
            max-width: 1600px; /* Set a max width for the section */
            margin: 0 auto; /* Center the section horizontally */
        }

        .column {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px; /* Fixed width for a rectangular shape */
            margin: 10px; /* Space between cards */
            display: flex;
            flex-direction: column; /* Stack icon and text */
            text-align: left;
            opacity: 0; /* Start as invisible */
            transform: translateY(20px); /* Start slightly down */
            transition: opacity 0.3s ease, transform 0.3s ease; /* Smooth transitions */
        }

        .column.visible {
            opacity: 1; /* Fully visible when scrolled into view */
            transform: translateY(0); /* Slide up */
        }

        .icon-wrapper {
            margin-right: 20px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
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
        <div class="banner-content">
            <h1>Services</h1>
        </div>
    </section>

    <section id="servicess">
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/client.png" alt="client" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Client Servicing</h3>
                <p>It doesn’t matter if it’s your “Plan A” or “Plan Z”, once we are on board be rest assured it’ll be our priority to make it the “Plan P”erfect.</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/videography.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Photography and Videography</h3>
                <p>Crazy photo-bombs to Insta worthy photo-dump We’ve got it all captured!</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/artistmgmt.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Artist Management</h3>
                <p>Finding and managing an artist who will make you dance off into the next morning.</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/decor.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Decore</h3>
                <p>Whether it is creating a spectacular stage view or curating a personalised colour hue, we’ll find the right theme and decorator for You !!</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/logistics.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Logistics</h3>
                <p>Right from arrivals to departures, and every “special guest request” in between, we’ve got you chauffeured.</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/foodandbeverages.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Food and Beverages</h3>
                <p>You might not have travelled round the globe yet, but your taste buds surely will.</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/hampers.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Hampers and Favours</h3>
                <p>Be it creating personalised gifts for your guests or curating lip-smacking hampers for the midnight cravers, we’ll help you all along.</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/hospitality.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Hospitality and RSVP</h3>
                <p>All you need to do is invite your guest, and we will take care of the rest!</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/WC.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Wedding Collaterals</h3>
                <p>From Save the Dates to beautifully crafted E-invites to designing personalised themes, we’ll find a way to make all your craziest ideas come true!</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/production.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Production</h3>
                <p>We produce and manage the show to create memorable moments.</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/vendormgmt.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Vendor Management</h3>
                <p>We’ll find the best vendors and manage everything seamlessly!</p>
            </div>
        </div>
        <div class="column">
            <div class="icon-wrapper">
                <img src="images/icons/venuesorcing.png" alt="" style="height: 80px; width: 80px;">
            </div>
            <div>
                <h3>Venue Sourcing</h3>
                <p>Be it a Palace which eludes royalty and grandeur or a Beach Wedding which is simple and intimate, we'll help you source the right venue as per your taste.</p>
            </div>
        </div>
    </section>

    

    <script>
       
    const columns = document.querySelectorAll('.column');

    const checkScroll = () => {
        columns.forEach((column) => {
            const rect = column.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                column.classList.add('visible'); // Fade in and slide up
            } else {
                column.classList.remove('visible'); // Fade out and slide down
            }
        });
    };

    window.addEventListener('scroll', checkScroll);
    window.addEventListener('load', checkScroll); // Check on page load
</script>

    <div class="copyrights" style="color:white; font-size: 13px;">
    <div class="footer-container">
        
        <!-- footer-container starts -->
        <div class="footer-logo">
            <!-- footer-logo starts -->
            <a href="index.php">
            <img src="images/icons/Elvi_Logo__2_-removebg-preview.png" alt="Logo"></a>
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