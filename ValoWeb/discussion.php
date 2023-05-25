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
    <h1>Discussion Forum</h1>
</section>

<section class="proplayer">
    <h1>What People Says</h1>
    <p></p>

    <div class="row">
        <div class="proplayer-col">
            <img src="images/shroud.jpg">
            <div>
                <p>Valo ini game susah banget ya aku kok gakbisa, botfrag terus, bantuin aku dong. Kak open tutor valo lah.  Gimana cara biar rankku naek ya.
                    Adakah yang punya ide?
                </p>
                <h3>Bukan Fefe</h3>
            </div>
        </div>
        <div class="proplayer-col">
            <img src="images/tenz.jpg">
            <div>
                <p>Wah valo ni game bagus bgt ya. Aku pengen jadi pro player valo nihh, Semoga soon aku bisa pro dan bisa competitive di Valo.
                    Sayangnya, tugasku terlalu banyak jadi aku gabisa nih maen valo. Saddd. Pls BINUS ujiannya jangan susah" dan tugasnya
                    jangan banyak"
                </p>
                <h3>Fefe</h3>
            </div>
        </div>  
    </div>

</section>

<div class="comment-box">

    <h3>Berikan Opinimu</h3>

    <form class="comment-form">
        <input type="text" placeholder="Enter Name">
        <textarea rows="5" placeholder="Your Comment"></textarea>
        <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
    </form>
</div>

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
