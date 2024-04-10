<?php
require_once("connectie.php");
/**
 * @var $connect ;
 */



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<nav>
    <div class="logo"><img src="photos/logo.png" alt="" height="35px"> COFFEE</div>
    <div class="li-container">
        <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Menu">Menu</a></li>
            <li><a href="#Contact">Contact Us</a></li>
            <a href="login.php"><img src="photos/login.png" alt="login button" height="25px"></a>
        </ul>
    </div>
</nav>


<section id="Home" class="page1">

    <div class="home-txt-container">
        <h1 class="title">
            All we need <br>
            is <span class="coffee-word">coffee</span>
        </h1>
        <p class="sub-txt">
            Discover great coffee and hospitality with us. Come in and
            enjoy your favorite brew!
        </p>

        <button class="menu-btn">Menu</button>
    </div>

</section>


<section id="About" class="page2">
    <div class="page2-content">
        <div class="txt-container">
            <h1 class="our-story">Our story</h1>
            <p class="our-story-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut neque velit,
                aliquet ac placerat vitae,
                lacinia eu leo. Mauris at arcu at dolor hendrerit mattis sit amet in arcu. Duis laoreet sit amet
                ligula nec dignissim. Cras enim mi, volutpat sed fermentum vel, gravida id tortor. Donec in bibendum
                mauris. Nulla euismod quam sed ultrices vestibulum. Donec eu ex tortor. Duis id sollicitudin arcu,
                eget porta odio. Vivamus a neque justo. Maecenas non pharetra erat. Donec aliquet, mi sed
                pharetra.</p>
        </div>
    </div>
</section>


<section id="Menu" class="page3">
    <div class="menu-container">
        <h1 class="menu-txt">Menu</h1>
        <img src="photos/menu-img.png" alt="Menu icon" class="menu-icon">
    </div>
    <div class="category-contaier">
        <div class="coffee-filter">
            <div class="box">
                <input type="text" placeholder="Search...">
                <a href="#">
                    <i class="bi bi-search"></i>
                </a>
            </div>
            <div class="category">Most popular</div>
            <div class="category">Coffee</div>
            <div class="category">Tea</div>
        </div>
    </div>


    <div class="menu-container2">
        <div class="item-container">

            <h3>Latte</h3>
            <p>Enjoy our classic latte! It's like a warm hug in a cup. Made with rich espresso and creamy milk, it's
                perfect anytime you need a cozy pick-me-up.</p>

            <div class="edit-container">
                <i class="bi bi-pencil-square"></i>
                <button class="price">2,99 Euro</button>
            </div>
        </div>

    </div>
</section>


<section id="Contact" class="contact-page4">
    <div class="contact-form-container">
        <form class="form" action="#">
            <input class="contact-input" type="text" name="firstname" placeholder="Your name..">
            <input class="contact-input" type="email" name="email" placeholder="Your email..">
            <textarea name="massege" cols="33" rows="1" placeholder="Enter your message here ..."></textarea>
            <input type="submit">
        </form>


    </div>

    <div class="contact-txt">
        <h1 class="coffee-word">Contact <br><img class="line" src="photos/Line%201.png" alt=""> Us</h1>
    </div>

</section>


</body>
</html>