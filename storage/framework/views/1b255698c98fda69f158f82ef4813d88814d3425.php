<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex ">
                        <h1 class="m-0 mr-2"> <?php echo e($tag->title); ?> ___
                            <a href="<?php echo e(route('admin.tag.edit', $tag->id)); ?>" class="text-lime">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </h1>
                        <form action="<?php echo e(route('admin.tag.delete', $tag->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="border-0 bg-transparent">
                              <h1>
                                  <i class="fas fa-trash text-danger" role="button"></i>
                              </h1>
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 mt-3">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td><?php echo e($tag['id']); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td><?php echo e($tag['title']); ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\blog\resources\views/admin/tag/show.blade.php ENDPATH**/ ?>