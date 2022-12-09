<?php $__env->startSection('content'); ?>
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Category</h1>
            <section class="featured-posts-section">
                <ul>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('category.post.index', $category->id)); ?>"><?php echo e($category->title); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </section>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\blog\resources\views/category/index.blade.php ENDPATH**/ ?>