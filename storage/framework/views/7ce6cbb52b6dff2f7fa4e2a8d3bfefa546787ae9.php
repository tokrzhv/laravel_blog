<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo e(route('main.index')); ?>" class="brand-link">
        <img src="<?php echo e(asset('dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Blog Edica</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo e(route('admin.main.index')); ?>" class="d-block">Sergi Tkrzhvskiy</a>
            </div>
        </div>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?php echo e(route('admin.main.index')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Main
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.user.index')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.post.index')); ?>" class="nav-link">
                    <i class="nav-icon far fa-clipboard"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.category.index')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.tag.index')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>
<?php /**PATH D:\Laravel\blog\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>