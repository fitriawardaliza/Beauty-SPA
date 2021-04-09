<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Beauty and Spa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Styles -->
        <style>
            html, body{
                background-image: url("images/images.jpeg");
                color: rgb(228, 149, 31);
                font-family: 'fantasy';
                
            }
            h1 {
                text-align: center;
                font-family: Georgia, 'Times New Roman', Times, serif;
                color: rgb(228, 149, 31);
            }
            h2, h3 {
                text-align: center;
                font-family: Georgia, 'Times New Roman', Times, serif;
                color: white;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <a class="navbar-brand"> Beauty and Spa </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active"  href="/">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/about">About </a>
            <a class="nav-item nav-link" href="/contact ">Contact</a>
            <a class="nav-item nav-link" href="/location"> Location </a>
            <?php if(Route::has('login')): ?>
                        <div class="top-right links">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(url('/home')); ?>">Home</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>">Login</a>

                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>">Register</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
            </div>
        </div> #50360f;"
        </nav> -->
        
        
                
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <img src="<?php echo e(url('images/spa.jpeg')); ?>" class="rounded mx-auto d-block" width="200" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/about">ABOUT US </a>
                </li>
                 <li class="nav-item active">
                    <a class="nav-link" href="/contact ">CONTACT</a>
                </li>
                 <li class="nav-item active">
                    <a class="nav-link" href="/location"> LOCATION</a>
                </li>
                </ul>
                 <?php if(Route::has('login')): ?>
                        <div class="top-right links">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(url('/home')); ?>">Home</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>">Login</a>

                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>">Register</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
            </div>
        </nav>

        <div class=" position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                <!-- <img src="<?php echo e(url('images/logo-spa.png')); ?>" class="rounded mx-auto d-block" width="800" alt=""> -->
                     WELCOME TO
                    <h1>BEAUTY and SPA </h1>
                    <h2>  Body treatment and beauty that gives the best Quality of service, special for Women </h2>
                    <h3>Enjoy & Relax refresh your body </h3>
                
                </div>
            </div>
        </div>
    </body>
    <!-- Foter -->
<footer class="footer bg-dark text-center">
        <div class="container">
            <!-- Social Links -->
			<div class="footer-social-links pb-10 pt-20">
				<a href="https://www.facebook.com/beautyandspaid.id"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/beautyandspa.id/"><i class="fab fa-instagram"></i></a>
                <a href="https://web.whatsapp.com/082165110187"><i class="fab fa-whatsapp-square"></i></a>
                <a href="https://www.youtube.com/watch?v=2G9EzVgOm_o" ><i class="fab fa-youtube"></i></a>
            </div>
            <!-- End Social Links -->  
                    
            <!-- Footer Text -->
            <div class="footer-text text-center">
                <!-- Copyright -->
                <div class="footer-copy font-alt">
                    <a style="text-decoration:none;">©️ Copyright 2020 BEAUTY AND SPA</a>
                </div>
                <!-- End Copyright -->
                <div class="footer-made">
                    <a href="/privacy"> Privacy Policy </a> |
                    <a href="/term"> Term of Us </a>
                </div>
            </div>
            <!-- End Footer Text --> 
        </div>
    </footer>
    <!-- End Foter -->
</html>
<?php /**PATH C:\xampp\htdocs\ProjekPBW\resources\views/welcome.blade.php ENDPATH**/ ?>