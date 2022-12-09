<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/font-awesome/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/aos/aos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <script src="<?php echo e(asset('assets/vendors/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/loader.js')); ?>"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?php echo e(route('main.index')); ?>"><img src="<?php echo e(asset('assets/images/logo.svg')); ?>"
                                                                         alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(route('main.index')); ?> ">Blog<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(route('category.index')); ?> ">Category</a>
                    </li>
                    <li class="nav-item active">
                        <?php if(auth()->guard()->check()): ?>
                            <a class="nav-link" href="<?php echo e(route('personal.main.index')); ?> ">Personal account <span class="sr-only">(current)</span></a>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                            <a class="nav-link" href="<?php echo e(route('personal.main.index')); ?> ">Login<span class="sr-only">(current)</span></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<?php echo $__env->yieldContent('content'); ?>
<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Download it now.</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"><img src="<?php echo e(asset('assets/images/apple@1x.svg')); ?>" alt="ios"
                                                     class="mr-2"> App Store
                </button>
                <button class="btn btn-success"><img src="<?php echo e(asset('assets/images/android@1x.svg')); ?>" alt="android"
                                                     class="mr-2"> Google Play
                </button>
            </div>
            <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or
                service.</p>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="<?php echo e(route('main.index')); ?>" class="footer-brand-wrapper">
                    <img src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="edica logo">
                </a>
                <p class="contact-details">tokarzhevskiy@gmail.com</p>
                <p class="contact-details">+380 00 000 00 00</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">Company</a>
                    <a href="#!" class="nav-link">Android App</a>
                    <a href="#!" class="nav-link">ios App</a>
                    <a href="#!" class="nav-link">Blog</a>
                    <a href="#!" class="nav-link">Partners</a>
                    <a href="#!" class="nav-link">Careers</a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">FAQ</a>
                    <a href="#!" class="nav-link">Reporting</a>
                    <a href="#!" class="nav-link">Block Storage</a>
                    <a href="#!" class="nav-link">Tools & Integrations</a>
                    <a href="#!" class="nav-link">API</a>
                    <a href="#!" class="nav-link">Pricing</a>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i
                            class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                        </button>
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-content">
            <p class="mb-0">© Edica. 2020 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">bootstrapdash</a> . All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="<?php echo e(asset('assets/vendors/popper.js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/aos/aos.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>
</html>
<?php /**PATH D:\Laravel\blog\resources\views/layouts/main.blade.php ENDPATH**/ ?>