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
            flex-direction: column;
            align-items:center;
            max-width: 100%; /* Set a max width for the section */
            margin:  auto; /* Center the section horizontally */
        }
        #servicess h1{
            color:#333;
           width:100% !important;
           height:100% !important;
           font-size:70px;
           font-family: 'Dancing Script', cursive;
            
        }
        .servicess-items{
            display: flex;
            flex-wrap:wrap;
            justify-content: center; /* Center items */
            padding: 20px;
            max-width: 1600px; /* Set a max width for the section */
            margin:  auto; /* Center the section horizontally */
           
            
        }

        .column {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px; /* Fixed width for a rectangular shape */
            margin: 50px; /* Space between cards */
            display: flex;
            flex-direction: row; /* Stack icon and text */
            align-items:center;
            text-align: left;
            opacity: 0; /* Start as invisible */
            transform: translateY(20px); /* Start slightly down */
            transition: opacity 0.3s ease, transform 0.3s ease; /* Smooth transitions */
        }
        .column p{
            margin-top: 15px;
       
               background-color: #fff;
            
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
        
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10000;
            transition: 0.5s all;
        }

        header.sticky {
            background: #fff;
            background-image: url("images/newimage.jpeg");
            padding: 10px 100px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            color:#ccc;
            transition: 0.3s all;
        }

        header .logo img {
            max-width: 150px;
            transition: 0.5s;
        }

        header.sticky .logo img {
            max-width: 150px;
        }

        header ul li a {
          
            transition: 0.5s;
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

.elvi-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: transperant;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    transition: 0.3s;
}

.elvi-menu {
    display: flex;
    list-style-type: none;
    
}

.elvi-menu li {
    margin-left: 20px;
   
}

.elvi-menu a {
    text-decoration: none;
    font-weight: bold;
    position: relative;
    transition: 0.3s;
}
.elvi-menu a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -5px;
    left: 0;
    background-color: #fff; /* Change this to match your design */
    transition: width 0.3s;
}
.elvi-menu a:hover::after,
.elvi-menu a.active::after {
    width: 100%;
}
header.sticky .elvi-menu a::after {
    background-color: #fff; /* Change this to match your sticky header design */
    border-radius: 10px;
}

.elvi-hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.elvi-hamburger span {
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 2px 0;
    transition: 0.3s;
}

@media (max-width: 760px) {
    .elvi-menu {
        position: absolute;
        top: 100%;
        right: 0;
        width: 100%;
        background-color: #333;
        flex-direction: column;
        align-items: center;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        border-radius:5px;
    }

    .elvi-menu.active {
        max-height: 300px;
        
    }

    .elvi-menu li {
        margin: 15px 0;
    }

    .elvi-menu a:hover::after,
.elvi-menu a.active::after {
    width: 100%;
   
}

    .elvi-hamburger {
        display: flex;
       
    }

    .elvi-hamburger.active span:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .elvi-hamburger.active span:nth-child(2) {
        opacity: 0;
    }

    .elvi-hamburger.active span:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
    }
}

        
     
         
        
    </style>
</head>
<body>
   <header class="elvi-header">
    <a href="#" class="logo">
        <img src="images/logoremovebg.png" alt="Elvi Events Logo">
    </a>
    <nav class="elvi-nav">
        <ul class="elvi-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php" class="active">Services</a></li>
            <li><a href="ourwork.html">Our Work</a></li>
            <li><a href="#footer">Contact</a></li>
            <li><a href="login_form.php">Login</a></li>
        </ul>
    </nav>
    <div class="elvi-hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
    <section class="banner">
        <video autoplay muted loop playsinline>
            <source src="videos/combine2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
       
    </section>





    <section id="servicess">
         <div class="servicess-banner-content">
            <h1>Services</h1>
        </div>
        <div class="servicess-items">
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
                <h3>Decor</h3>
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
        </div>
    </section>

    

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