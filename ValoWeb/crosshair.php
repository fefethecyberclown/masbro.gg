<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<head>
	<title>Crosshair recomendation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="stylecrosshair.css">
</head>
<body>

	<header>
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
						<li><a href="Contact.html">CONTACT</a></li>
					</ul>
				</div>
				<i class="fa fa-bars" onclick="ShowMenu"></i>
			</nav>
			<h1>Crosshair Recommendation</h1>
		</section>
	</header>

	<main>
		<h5>Crosshair Recomendation</h5>
		<div class="row">
			<div class="col">
				<section>
					<article>
						<img src="/images/jinggg.png">
						<h2>Jinggg</h2>
						<button id="copy-btn1">Copy Code</button>
					</article>
				</section>
			</div>
			<div class="col">
				<section>
					<article>
						<img src="images/cned.png">
						<h2>cned</h2>
						<button id="copy-btn2">Copy Code</button>
					</article>
				</section>
			</div>
			<div class="col">
				<section>
					<article>
						<img src="images/Cyro.png">
						<h2>Cyro</h2>
						<button id="copy-btn3">Copy Code</button>
					</article>
				</section>
			</div>
            <div class="col">
				<section>
					<article>
						<img src="images/shroud.jpg">
						<h2>shroud</h2>
						<button id="copy-btn4">Copy Code</button>
					</article>
				</section>
			</div>
            <div class="col">
				<section>
					<article>
						<img src="images/tarik.png">
						<h2>tarik</h2>
						<button id="copy-btn5">Copy Code</button>
					</article>
				</section>
			</div>
            <div class="col">
				<section>
					<article>
						<img src="images/tenz.jpg">
						<h2>Tenz</h2>
						<button id="copy-btn6">Copy Code</button>
					</article>
				</section>
			</div>

			<div class="col">
				<section>
					<article>
						<img src="images/Hollow circle.png">
						<h2>Hollow Circle</h2>
						<button id="copy-btn7">Copy Code</button>
					</article>
				</section>
			</div>
			<div class="col">
				<section>
					<article>
						<img src="images/shuriken.png">
						<h2>Shuriken</h2>
						<button id="copy-btn8">Copy Code</button>
					</article>
				</section>
			</div>
			<div class="col">
				<section>
					<article>
						<img src="images/asuna.png">
						<h2>Asuna</h2>
						<button id="copy-btn9">Copy Code</button>
					</article>
				</section>
			</div>
		</div>		
        <div class="container">
            <p>*More crosshair will be added later*</p>
          </div>
          
	</main>

	<script>
		const copyBtn = document.getElementById("copy-btn1");
		copyBtn.addEventListener("click", copyToClipboard);
	  
		function copyToClipboard() {
		  const textToCopy = "0;s;1;P;c;1;o;1;0t;1;0l;2;0o;2;0a;1;0f;0;1b;0;S;c;5";
		  navigator.clipboard.writeText(textToCopy)

		  

		}
	  </script>

<body>
					