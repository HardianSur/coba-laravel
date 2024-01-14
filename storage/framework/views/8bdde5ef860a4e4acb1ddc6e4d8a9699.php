

<?php $__env->startSection('container'); ?>

    <h2 class="text-center"><?php echo e($title); ?></h2>

    <div class="row justify-content-center my-3">
        <div class="col-md-6">
            <form action="/posts" method="GET">
                <div class="input-group mb-3">
                    <?php if(request('category')): ?>
                        <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
                    <?php endif; ?>
                    <?php if(request('author')): ?>
                        <input type="hidden" name="author" value="<?php echo e(request('author')); ?>">
                    <?php endif; ?>
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="<?php echo e(request('search')); ?>">
                    <button class="btn btn-outline-secondary" type="submit" id="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <?php if($posts->count()): ?>
        <div class="card mb-3">
            <img src="https://source.unsplash.com/500x400?<?php echo e($posts[0]->category->name); ?>" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/posts/<?php echo e($posts[0]->slug); ?> "
                        class="text-decoration-none text-dark"><?php echo e($posts[0]->title); ?></a>
                </h3>
                <small class="text-body-secondary">
                    <p>By. <a href="/posts?author=<?php echo e($posts[0]->author->username); ?>"
                            class="text-decoration-none"><?php echo e($posts[0]->author->name); ?></a> in <a
                            href="/posts?category=<?php echo e($posts[0]->category->slug); ?>" class="text-decoration-none">
                            <?php echo e($posts[0]->category->name); ?></a>
                        <?php echo e($posts[0]->created_at->diffForHumans()); ?>

                    </p>
                </small>
                <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>
                <p class="card-text"></p>
                <a href="/posts/<?php echo e($posts[0]->slug); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 ">
                            <a href="/posts?category=<?php echo e($post->category->slug); ?>"
                                class="badge bg-dark position-absolute mt-2 ms-2 text-decoration-none"
                                style="--bs-bg-opacity: .75;"><?php echo e($post->category->name); ?></a>
                            <img src="https://source.unsplash.com/500x400?<?php echo e($post->category->name); ?>" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($post->title); ?></h5>
                                <small class="text-body-secondary">
                                    <p>By. <a href="/posts?author=<?php echo e($post->author->username); ?>"
                                            class="text-decoration-none"><?php echo e($post->author->name); ?></a>
                                        <?php echo e($post->created_at->diffForHumans()); ?>

                                    </p>
                                </small>
                                <p class="card-text"><?php echo e($post->excerpt); ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="/posts/<?php echo e($post->slug); ?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php else: ?>
        <p class="text-center fs-4">No Post Found</p>
    <?php endif; ?>

    <?php echo e($posts->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\coba-laravel\resources\views/posts.blade.php ENDPATH**/ ?>