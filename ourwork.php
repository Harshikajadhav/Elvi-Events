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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="sstyles.css" />        

</head>
<body>
    <header style="font-size: 15px;
       font-family: 'Alegreya', serif;    font-style: normal;">
        <a href="#" class="logo">
            <img src="images/logoremovebg.png" alt="Elvi Events Logo">
        </a>
        <ul>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="ourwork.html">Our Work</a></li>
                
                <li><a href="#footer">Contact</a></li>
                <li><a href="login_form.php">Login</a></li>
            </ul>
        </ul>
    </header>
    <section class="banner">
        <video autoplay muted loop playsinline>
            <source src="videos/combine2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="banner-content">
            <h1>Our Work</h1>
        </div>
    </section>

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>

    











<style>
    /* Grid container styles */
    .grid-container {

        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 columns */
        grid-template-rows: repeat(2, 1fr); /* 2 rows */
        gap: 15px; /* Spacing between grid items */
        padding: 20px;
        justify-items: center; /* Center items horizontally */
    }

    /* Image styles */
    .grid-container img {
        justify-content: center;
        width: 500px; /* Set width for images */
        height: 300px; /* Set height for images */
        /* object-fit: cover;  */
        background-size: cover;
        border-radius: 12px; /* Rounded corners */
        transition: transform 0.3s ease-in-out; /* Smooth zoom on hover */
        cursor: pointer; /* Cursor changes to pointer on hover */
    }

    /* Hover effect for images */
    .grid-container img:hover {
        transform: scale(1.1); /* Zoom effect on hover */
    }

    /* Overlay styles */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        display: none; /* Hide overlay by default */
        z-index: 1000;
    }

    /* Overlay content styles */
    .overlay img {
        max-width: 90%;
        max-height: 90%;
        border-radius: 12px;
    }

    /* Close button styles */
    .close-overlay {
        position: absolute;
        top: 20px;
        right: 40px;
        font-size: 50px;
        color: white;
        cursor: pointer;
        transition: 0.3s;
    }

    /* Navigation arrows styles */
    .nav-arrow {
        position: absolute;
        top: 50%;
        font-size: 50px;
        color: white;
        cursor: pointer;
        user-select: none;
        transition: 0.3s;
    }

    .nav-arrow.left {
        left: 20px;
    }

    .nav-arrow.right {
        right: 20px;
    }

    /* Hover effect for arrows and close button */
    .nav-arrow:hover, .close-overlay:hover {
        color: #ccc;
    }
    .wedding-head{
        font-size: 40px;
        text-align: center;
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
    <!-- Grid container with 3x2 images -->
    <div class="grid-container">
        <div class="wedding-head">
        <a href="wedding1.html"><img src="images/our-work/RishTasPakka/coverr.jpg" alt="Image 1"></a><br>
          #RishTasPakka
    </div>

    <div class="wedding-head">
       <a href="wedding2.html"> <img src="images/our-work/TheKatariaShadi/coverrr.jpg" alt="Image 2"></a><br>
    #TheKatariaShahDi
    </div>



        <div class="wedding-head">
        <a href="weddingg3.html"><img src="images/our-work/TheShayStory/coverr.jpg" alt="Image 3"></a><br>
    #TheShayStory</div>

    
    </div>


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