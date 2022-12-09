<?php $__env->startSection('content'); ?>
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up"><?php echo e($post->title); ?></h1>
            <p class="edica-blog-post-meta" data-aos="fade-up"
               data-aos-delay="200"> <?php echo e($date->format('F')); ?> <?php echo e($date->day); ?>, <?php echo e($date->year); ?>

                • <?php echo e($date->format('H:i')); ?> • Featured • <?php echo e($post->comments->count()); ?> Comments</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="<?php echo e(asset('storage/' . $post->main_image)); ?>" alt="featured image" class="w-100">
            </section>
            <section class="post-content mb-4">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <?php echo $post->content; ?>

                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="py-0 mb-3">
                        <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('post.like.store',$post->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <span><?php echo e($post->liked_users_count > 0 ? $post->liked_users_count : ''); ?></span>
                            <button type="submit" class="border-0 bg-transparent">
                                    <i class="text-danger fa<?php echo e(auth()->user()->likedPosts->contains($post->id) ? 's' : "r"); ?> fa-heart"></i>
                            </button>
                        </form>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                            <div>
                                <span><?php echo e($post->liked_users_count > 0 ? $post->liked_users_count : ''); ?></span>
                                <i class="text-danger far fa-heart"></i>
                            </div>
                        <?php endif; ?>
                    </section>
                    <?php if($relatedPosts->count() > 0): ?>
                        <section class="related-posts">
                            <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                            <div class="row">
                                <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                        <img src="<?php echo e(asset('storage/' . $relatedPost->main_image)); ?>" alt="related post"
                                             class="post-thumbnail">
                                        <p class="post-category"><?php echo e($relatedPost->category->title); ?> </p>
                                        <a href="<?php echo e(route('post.show', $relatedPost->id)); ?>"><h5
                                                class="post-title"><?php echo e($post->title); ?></h5></a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </section>
                    <?php endif; ?>
                    <?php if($post->comments->count() > 0): ?>
                        <section class="comment-list mb-5">
                            <h2 class="section-title mb-5" data-aos="fade-up">Comments (<?php echo e($post->comments->count()); ?>

                                )</h2>
                            <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="comment-text mb-3">
                                <span class="username">
                                    <div><?php echo e($comment->user->name); ?></div>
                                    <span
                                        class="text-nuted float-right"><?php echo e($comment->DateAsCarbon->diffForHumans()); ?></span>
                                </span>
                                    <?php echo e($comment->message); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </section>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                        <section class="comment-section">
                            <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>
                            <form action="<?php echo e(route('post.comment.store', $post->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up">
                                        <label for="comment" class="sr-only"></label>
                                        <textarea name="message" id="comment" class="form-control" placeholder="Comment"
                                                  rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <input type="submit" value="Send Message" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        </section>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\blog\resources\views/post/show.blade.php ENDPATH**/ ?>