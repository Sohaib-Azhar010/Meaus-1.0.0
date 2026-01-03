<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm <?php echo e(request()->routeIs('home') ? '' : 'mb-5'); ?>">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand">
                <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Medinova Logo" style="height: 50px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?php echo e(route('home')); ?>" class="nav-item nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Home</a>
                    <a href="<?php echo e(route('about')); ?>" class="nav-item nav-link <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">About</a>
                    <a href="<?php echo e(route('service')); ?>" class="nav-item nav-link <?php echo e(request()->routeIs('service') ? 'active' : ''); ?>">Service</a>
                    <a href="<?php echo e(route('price')); ?>" class="nav-item nav-link <?php echo e(request()->routeIs('price') ? 'active' : ''); ?>">Pricing</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo e(request()->routeIs(['blog', 'blog.detail', 'team', 'testimonial', 'appointment', 'search']) ? 'active' : ''); ?>" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo e(route('blog')); ?>" class="dropdown-item">Blog Grid</a>
                            <a href="<?php echo e(route('blog.detail', 1)); ?>" class="dropdown-item">Blog Detail</a>
                            <a href="<?php echo e(route('team')); ?>" class="dropdown-item">The Team</a>
                            <a href="<?php echo e(route('testimonial')); ?>" class="dropdown-item">Testimonial</a>
                            <a href="<?php echo e(route('appointment')); ?>" class="dropdown-item">Appointment</a>
                            <a href="<?php echo e(route('search')); ?>" class="dropdown-item">Search</a>
                        </div>
                    </div>
                    <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<?php /**PATH C:\Users\Microsoft\Desktop\Frontend Bootstrap\Meaus-1.0.0\resources\views/partials/navbar.blade.php ENDPATH**/ ?>