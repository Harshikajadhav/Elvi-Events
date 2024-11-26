<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="images/icons/artistngmt.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIF Loader with Redirect</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Center the loader */
        .img-load {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body onload="myFunction()" style="margin:0; padding-bottom: 0%;">

    <!-- Loader -->
    <div class="img-load">
        <img id="loader" src="Crafting Moments For You.gif" class="img-fluid" alt="Loading">
    </div>

    <!-- Script to handle loader and redirect -->
    <script>
        function myFunction() {
            var loader = document.getElementById("loader");
            
            // Get the duration of the GIF
            var gifDuration = 4000; // Example duration in milliseconds (adjust as needed)

            loader.style.display = "block"; // Show the loader

            // Wait for the GIF to finish playing
            setTimeout(function() {
                loader.style.display = "none"; // Hide the loader
                window.location.href = "homepage.php"; // Redirect to ourwork.html
            }, gifDuration);
        }
    </script>

</body>
</html>