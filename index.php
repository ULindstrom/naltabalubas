
<!DOCTYPE html>
<html lang="sv">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Auto Database">
        <meta name="keywords" content="Cars, money saving tips">
        <meta name="author" content="Urban Lindström">
        <title>Nalta Balubas | En gemenskap med plånboksvänliga tips för hobbybils älskaren</title>
            <!--<h1>TOGETHER WE HAVE THE KNOWLEDGE</h1>-->
            <!--<h3>TO AVOID COSTLY MISTAKES</h3>-->
            
        
        <link href="./css/style.css" rel="stylesheet" type="text/css">
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-7891646353086955",
        enable_page_level_ads: true
        });
    </script>
    </head>
    <body>
        
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Nalta Balubas</span><a href="index.php"></h1>
                </div>
        
                
                <nav id="main">
                    
                	<?php
                	
						if (isset($_SESSION['u_id'])) {
							echo '<form action="includes/logout.inc.php" method="POST">
						<button type="submit name="submit">Login</button>	
					</form>';

						} else {
							echo '<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username/e-mail">
						<input type="password" name="pwd" placeholder="password">
						<button type="submit" name="submit">Login</button></form>
					<a href="signup.php">Sign up</a>';
						}
					?>
					
					<div>
                    <ul class="wrapper">
                        <li class="current"><a href="index.php">Home</a></li>
                        <li><a href="about.php">Mek/trimtips</a></li>
                        <li><a href="services.php">Bildatabas</a></li>
                        <!--<li>AVOID COSTLY MISTAKES</li>-->
                        <!--<li>ABOUT</li>-->
                    </ul
                </div>
            </div>
            </nav>

        </header>

        <section id="showcase">
            <div class="container">
                <h1>Nalta Balubas Racing</h1>
                <p>MER KVAR I PLÅNBOKEN</p>
            </div>
        </section>

        <section id="newsletter">
            <div class="container">
                <h1>Subcribe To Our Newsletter</h1>
                <form>
                    <input type="email" placeholder="Enter Email...">
                    <button type="submit" class="button_1">Subscribe</button>
                </form>
            </div>
        </section>

        <section id="boxes">
            <div class="container">
                <div class="box">

                    <a href="#"> <i class="fa fa-wrench fa-lg" aria-hidden="true"></i></a>
                    <h3>Mechanics</h3>
                    <p>Lorum ipsum ehhded kjefnekfje efleferkfgrtg olgfegjkegj lkeg</p>
                </div>
                <div class="box">
                    <h3>CSS3 Styling</h3>
                    <p>Lorum ipsum ehhded kjefnekfje efleferkfgrtg olgfegjkegj lkeg</p>
                </div>
                <div class="box">
                    <h3>Graphic Design</h3>
                    <p>Lorum ipsum ehhded kjefnekfje efleferkfgrtg olgfegjkegj lkeg</p>
                </div>
            </div>
        </section>
        <!--<section id="social-media">
            <div class="container-area">
                <div class="boxes">-->

                <!--<a href="#"> <i class="fa fa-instagram fa-5x" aria-hidden="true"></i></a>-->
                
                <!-- Scroll to top -->
                    <a href="#page-top" class="page-scroll scroll-to-top">
                    <i class="fa fa-angle-up"></i>
                </a>
        <footer>
            <a href="#" class="scrollup">Scroll</a>
            <p> Copyright &copy; URBAN LINDSTRÖM -2017</p>
        </footer>
        <script>
            const nav = document.querySelector('#main');
            const topOfNav = nav.offsetTop;
            
            function fixNav() {
                if(window.scrollY >= topOfNav) {
                    document.body.style.paddingTop = nav.offsetHeight + 'px';
                    document.body.classList.add('fixed-nav');
                    
                } else {
                document.body.style.paddingTop = 0;
                document.body.classList.remove('fixed-nav');
                
            }
        }
            
            window.addEventListener('scroll', fixNav);
        </script>
        
        <script>
        
        
            $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
           }
       });
       $('.scrollup').click(function () {
           $("html, body").animate({
               scrollTop: 0
           }, 600);
           return false;
       });
   });
 </script>
        <script type="text/javascript" src="../public/javascript/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="../public/javascript/bootstrap.min.js"></script>
        <script type="text/css" src="../css/bootstrap.css"></script>
    </body>
</html>

