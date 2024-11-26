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
<style>
    
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
</body>
</html>
