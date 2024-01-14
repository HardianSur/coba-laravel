

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2><?php echo e($post->title); ?></h2>
                <p>By. <a href="/authors/<?php echo e($post->author->username); ?>" class="text-decoration-none"><?php echo e($post->author->name); ?>

                    in <a href="/categories/<?php echo e($post->category->slug); ?>"> <?php echo e($post->category->name); ?></a></p>
                <img src="https://source.unsplash.com/1200x400?<?php echo e($post->category->name); ?>" class="img-fluid" alt="...">
                <article class="my-3 fs-5">
                    <!-- untuk eksekusi tag html -->
                    <?php echo $post->body; ?>

                </article>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\coba-laravel\resources\views/post.blade.php ENDPATH**/ ?>