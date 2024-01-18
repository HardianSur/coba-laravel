<?php $__env->startSection('container'); ?>
    <h1>Halaman about</h1>
    <h3><?php echo e($nama); ?></h3>
    <h3><?php echo e($email); ?></h3>
    <img src="assets/<?php echo e($image); ?>" alt="" class="img-thumbnail rounded-circle">
<?php $__env->stopSection(); ?>
    

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\coba-laravel\resources\views/about.blade.php ENDPATH**/ ?>