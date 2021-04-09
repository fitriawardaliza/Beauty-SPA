<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Beauty and Spa</title>
        
        <style>
            html, body{
                background-image: url("images/images.jpeg");
                color: rgb(228, 149, 31);
                font-family: 'fantasy';
                
            }

            h2, h3 {
                width:100%;
                color: rgb(228, 149, 31);
                font-size: 60px;
                font-family: audiowide;
                line-height: 30px;
            }
        </style>
    
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="{{ url('images/spa.jpeg') }}" class="rounded mx-auto d-block" width="200" alt="">
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
            </div>
        </nav>
        <br/>

        <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
                <h2 class="section-title text-center font-alt mb-70 mb-sm-40">Find Us On :</h2><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <div class="middle">
                <a class="btn" href="https://www.facebook.com/beautyandspaid.id">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn" href="https://web.whatsapp.com/082165110187">
                    <i class="fab fa-whatsapp-square"></i>
                </a>
                <a class="btn" href="https://mail.google.com/hilya01flash@gmail.com">
                <i class="fas fa-envelope-square"></i>
                </a>
                <a class="btn" href="https://www.instagram.com/beautyandspa.id">
                <i class="fab fa-instagram"></i>
                </a>
                <a class="btn" href="https://www.youtube.com/watch?v=2G9EzVgOm_o">
                    <i class="fab fa-youtube"></i>
                </a>
                </div>
            </div>
        </div>
        <br/><br/><br/><br/><br/><br/>
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