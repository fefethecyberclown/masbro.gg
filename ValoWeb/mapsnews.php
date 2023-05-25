<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant Web Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>
<section class="sub-header">
    <nav>
        <a href="index.php"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="HideMenu"></i>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Course.php">COURSE</a></li>
                <li><a href="Blog.php">BLOG</a></li>
                <div class="dropdown">
                    <button class="dropbtn">FEATURES</button>
                    <div class="dropdown-content">
                      <a href="discussion.php">Community Discussion</a>
                      <a href="crosshair.php">Crosshair Recommendation</a>
                      <a href="mapsnews.php">Maps & News</a>
                    </div>
                  </div>
                <li><a href="Contact.php">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="ShowMenu"></i>
    </nav>
    <h1>Maps & News</h1>
</section>

<section class="events">
    <h1>Our News</h1>
    <p></p>

    <div class="row">
        <div class="events-col">
            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc78f411fde106d31/6419188f8f12893d46e405ee/Dev_Diaries_2023_Gekko_notxt_450k.jpg?auto=webp&disable=upscale&width=332 alt="News 1">
            <h3>Gekko: Viva Familia // Dev Diaries - VALORANT</h3>
            <p>Developing a new kind of Initiator and his found family.</p>
            <a href="#">SEE ARTICLE</a>
        </div>
        <div class="events-col">
            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt1131b07814783e7c/641397d1b37b2a447b42d58d/032023_VCT_thefearless_ep4_Banner.jpg?auto=webp&disable=upscale&width=332" alt="News 2">
            <h3>Changing the Game: A VCT Documentary</h3>
            <p>In November 2022, eight of the world's most elite women and marginalized gender teams converged in Berlin, Germany to crown the first international VCT Game Changers champion.</p>
            <a href="#">SEE ARTICLE</a>
        
        </div>
        <div class="events-col">
            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6c94e488fda35bd1/640f8683aeefb86bfe4b5bad/VCT23_GC_Location_Announcement_Header.jpg?auto=webp&disable=upscale&width=332" alt="News 3">
            <h3>Announcing the VCT23 Game Changers Championship</h3>
            <p>Find out the details about the biggest event of the 2023 Game Changers season!</p>
            <a href="#">SEE ARTICLE</a>
        </div>
    </div>

</section>

<section class="maps">
    <h1>Our Maps</h1>
    <p></p>

    <div class="row">
        <div class="map-col">
            <img src="images/ascent.jpg">
            <div class="layer">
                <h3>LOTUS</h3>
            </div>
        </div>
        <div class="map-col">
            <img src="images/split.png">
            <div class="layer">
                <h3>SPLIT</h3>
            </div>
        </div>
        <div class="map-col">
            <img src="images/bind.png">
            <div class="layer">
                <h3>BIND</h3>
            </div>
        </div>
    </div>

</section>

<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, soluta voluptates aliquam molestias esse similique voluptatem cumque vitae cum dolor tempora distinctio odit fuga, sunt dolorem. Harum, ea et! Veniam!</p>
    <div class="icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-discord"></i>
        <i class="fab fa-youtube"></i>
    </div>
    <p>Made with <i class="far fa-heart"></i> by Masbro.gg</p>
</section>


<script>
    var navlinks = document.getElementById("navLinks");

    function ShowMenu(){
        navLinks.style.right = "0";
    }
    function HideMenu(){
        navLinks.style.right = "-200px";
    }

</script>

</body>
</html>