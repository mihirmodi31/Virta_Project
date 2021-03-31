<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px 20px;
            cursor: pointer;

        }

        .button1 {
            background-color: #4CAF50;
        }

        .button2 {
            background-color: #008CBA;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .image {
            background-image: url("..\image_heading.jpg");
            background-color: #F39C12;
            height: 300px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .head {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        /*for slide show*/
        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        .slideshow-container {
            max-width: 1500px;
            position: relative;
            margin: auto;
        }

        .text {
            color: #f2f2f2;
            font-size: 25px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .numbertext {
            color: black;
            font-size: 20px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @media only screen and (max-width: 300px) {
            .text {
                font-size: 50px
            }
        }
    </style>


</head>

<body align="center">

    <div class="image">
        <div class="head">
            <h1 style="font-size:50px">Welcome To Veerata</h1>
            <h3>A donation site for our Soldiers...</h3>
        </div>
    </div>

    <button class="button button1"> <a href="6 login.php" style="color: white;">Login</button>
    <button class="button button2"> <a href="4 registration.php " style="color: white;">Sign Up</button>


    <br>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="welcome_image/slide1.jpg" style="width:100%">
            <div class="text">Jai Hind</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="welcome_image/slide2.jpg" style="width:100%">
            <div class="text">Jai Hind</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="welcome_image/slide3.jpg" style="width:100%">
            <div class="text">Jai Hind</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="welcome_image/slide4.jpg" style="width:100%">
            <div class="text">Jai Hind</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="welcome_image/slide5.jpg" style="width:100%">
            <div class="text">Jai Hind</div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>


    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); 
        }
    </script>

</body>

</html>

<?php
    
?>