<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elvi Events</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
        </head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="images/logoremovebg.png" alt="Elvi Events Logo">
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="ourwork.php">Our Work</a></li>
            
            <!-- <li><a href="spotlight.php">Spotlight</a></li> -->
            <!-- <li><a href="blog.php">Blog</a></li> -->
            <li><a href="contactus.php">Contact</a></li>
            <!-- <li><a href="faqs.php">Faqs</a></li> -->
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
