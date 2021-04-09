<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>"> -->
    <!-- <title>Database</title> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <style>
   {
                /* background-color: #FFFFF0 ;
                /* color: #E9967A; */ 
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
    </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="<?php echo e(url('images/spa.jpeg')); ?>" class="rounded mx-auto d-block" width="150" alt=""> 
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


<?php $__env->startSection('content'); ?>

 
<div class="container">

    <div class="row justify-content-center">
    <div class="col-md-12 mb-3">
        <!-- <img src="<?php echo e(url('images/spa-spa.jpg')); ?>" class="rounded mx-auto d-block" width="600" alt=""> -->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="images/spa-spa.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Spa and Massage</h5>
                        <p>Massage is best done when the body is feeling achy or tired, because blood flow in the body becomes smoother.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="images/haircut.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Hair Cut Models</h5>
                        <p>Consult the hair style you want with our haircut for best results.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="images/mani-padi.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Manicure and Pedicure</h5>
                        <p>With manicure and pedicure, feet and hands will be guaranteed cleanliness.</p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <!-- <div class="rows"  class="col-md-4">
            <div class="card mr-2 ml-3" style="width: 15rem;">
            <img src="images/spa-facial.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Facial</h5>
                <p class="card-text">facial facials can help make skin look clean, well hydrated and look younger. The benefits of facial facials can also relieve stress and make the body more relaxed.</p>
                <a href="#" class="btn btn-primary">Booking</a>
                
            </div>
            </div>
        </div> -->
      
    </div>
    <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card"  class="col-md-4">
            <h5 class="card-header"><?php echo e($barang -> nama_barang); ?></h5>
                <div class="card-body">
                <!-- <h5 class="card-title"><?php echo e($barang -> nama_barang); ?></h5> -->
                <p class="card-text"><?php echo e($barang -> keterangan); ?></p>
                <strong> Harga :</strong> Rp. <?php echo e(number_format ($barang ->harga)); ?>

                <br>
                <br>
                <a href="<?php echo e(url('pesan')); ?>/<?php echo e($barang->id); ?>" class="btn btn-primary">Booking</a>
                </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          
    </div>
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
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjekPBW\resources\views/home.blade.php ENDPATH**/ ?>