<?php $__env->startSection('content'); ?>
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <div class="row">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <?php if(!isset ($post->preview_image)): ?>
                                    <img src="<?php echo e(asset('storage/images/doesnotexist.jpg')); ?>" alt="blog post">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('storage/' . $post->preview_image)); ?>" alt="blog post">
                                <?php endif; ?>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category"><?php echo e($post->category->title); ?></p>
                                <?php if(auth()->guard()->check()): ?>
                                <form action="<?php echo e(route('post.like.store', $post->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <span><?php echo e($post->liked_users_count > 0 ? $post->liked_users_count : ''); ?></span>
                                    <button type="submit" class="border-0 bg-transparent">

                                            <?php if(auth()->user()->likedPosts->contains($post->id)): ?>
                                                <i class="text-danger fas fa-heart"></i>
                                            <?php else: ?>
                                                <i class="text-danger far fa-heart"></i>
                                            <?php endif; ?>
                                    </button>
                                </form>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>
                                    <div>
                                        <span><?php echo e($post->liked_users_count > 0 ? $post->liked_users_count : ''); ?></span>
                                        <i class="text-danger far fa-heart"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo e(route('post.show', $post->id)); ?>" class="blog-post-permalink">
                                <h6 class="blog-post-title"><?php echo e($post->title); ?></h6>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="mx-auto mb-3">
                        <?php echo e($posts->links()); ?>

                    </div>
                </div>
            </section>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\blog\resources\views/category/post/index.blade.php ENDPATH**/ ?>