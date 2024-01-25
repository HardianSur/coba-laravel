<?php $__env->startSection('container'); ?>
<h1 class="h2">Welcome Back, <?php echo e(auth()->user()->name); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\coba-laravel\resources\views/dashboard/index.blade.php ENDPATH**/ ?>