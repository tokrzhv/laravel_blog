<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo e(route('main.index')); ?>" class="brand-link">
        <img src="<?php echo e(asset('dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Blog Personal Area</span>
    </a>
    <div class="sidebar">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?php echo e(route('personal.main.index')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Main
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('personal.liked.index')); ?>" class="nav-link">
                    <i class="nav-icon far fa-heart"></i>
                    <p>
                        Liked Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('personal.comment.index')); ?>" class="nav-link">
                    <i class="nav-icon far fa-comment"></i>
                    <p>
                        Comments
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>
<?php /**PATH D:\Laravel\blog\resources\views/personal/includes/sidebar.blade.php ENDPATH**/ ?>