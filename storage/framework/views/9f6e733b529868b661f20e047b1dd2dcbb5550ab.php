

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> <?php echo e($barang->nama_barang); ?> </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo e(url('images/spa-facial.jpg')); ?>" class="rounded mx-auto d-block" width="300" alt="">
                            <!-- <img src="<?php echo e(url('images/spa-haircut.jpg')); ?>" class="rounded mx-auto d-block" width="300" alt=""> -->
                        </div>
                        <div class="col-md-6">
                            <blockquote class="blockquote text-center">
                            <p class="mb-0">Beautiful skin requires commitment not a miracle</p>
                            <footer class="blockquote-footer"> Erno Lazlo <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <br><br><br><br><br><br><br>
                            <div>
                            <h3> Your booking was succesfully! </h3>
                            </div>
                       </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

for every beauty there is an eye somewhere to see it. for every truth there is an ear somewhere to hear it. for every love there is a heart somewhere to receive it. -marylin monroe
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjekPBW\resources\views/pesan/index.blade.php ENDPATH**/ ?>