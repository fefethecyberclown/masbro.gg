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
<h1>Our Achivements For 2023</h1>
</section>

<section class="blog-content">

    <div class="row">
        <div class="blog-left">
            <img src="images/squad2.jpg">
            <h2>Our Achivements For 2023</h2>
            <p>Sebagai bisnis yang telah beroperasi 20 tahun, kita berhasil mencetak berbagai proplayer hebat dan membuat course yang diikuti oleh 2.000 orang.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel doloremque natus nostrum nobis eum inventore harum quae fugiat consequatur neque tenetur non eligendi nulla dolores atque, facere, provident cumque consectetur.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi cum debitis dicta eum! Tenetur itaque explicabo inventore architecto possimus placeat harum ea id cum, animi ut dicta voluptates mollitia amet.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nulla ducimus odio quo, eveniet quaerat error sunt sit laboriosam officiis quasi atque nesciunt earum, debitis odit, placeat magni laudantium quidem!</p>

            <div class="comment-box">

                <h3>Leave a Comment</h3>

                <form class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter Email">
                    <textarea rows="5" placeholder="Your Comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                </form>
            </div>


        </div>
        <div class="blog-right">
            <h3>Valorant Tournaments</h3>
            <div>
                <span>Valorant Challengers</span>
                <span>1</span>
            </div>
            <div>
                <span>Valorant Masters</span>
                <span>2</span>
            </div>
            <div>
                <span>Valorant Champions</span>
                <span>3</span>
            </div>
            <div>
                <span></span>
                <span></span>
            </div>
            <div>
                <span></span>
                <span></span>
            </div>
            <div>
                <span></span>
                <span></span>
            </div>
            <div>
                <span></span>
                <span></span>
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