

<?php $__env->startSection('title', 'Media - MEAUS News, Updates & Gallery'); ?>
<?php $__env->startSection('keywords', 'MEAUS news, MEAUS gallery, uveitis events, ophthalmology updates, MEAUS Instagram'); ?>
<?php $__env->startSection('description', 'Stay updated with MEAUS news, events, and browse our photo gallery from international conferences and meetings.'); ?>

<?php $__env->startSection('content'); ?>
<!-- Breadcrumb Start -->
<div class="container-fluid pb-3 pt-3 bg-light" style="margin-top: 0px;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Media</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Page Header/Banner Start -->
<div class="container-fluid bg-primary py-5 mb-5" style="background: linear-gradient(rgba(29, 42, 77, 0.8), rgba(29, 42, 77, 0.8)), url(<?php echo e(asset('img/about.png')); ?>) center center no-repeat; background-size: cover;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5 mb-3" style="border-color: rgba(256, 256, 256, .3) !important;">Media Center</h5>
                <h1 class="display-4 text-white mb-3">News, Updates & Visual Stories</h1>
                <p class="lead text-white mb-0">Follow our journey in advancing uveitis care across Middle East and Africa</p>
            </div>
        </div>
    </div>
</div>
<!-- Page Header/Banner End -->

<!-- Quick Navigation Start -->
<div class="container-fluid bg-light py-4 mb-5">
    <div class="container">
        <div class="row g-3 justify-content-center">
            <div class="col-auto">
                <a href="#news-updates" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="fa fa-newspaper me-2"></i>News & Updates
                </a>
            </div>
            <div class="col-auto">
                <a href="#gallery" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="fa fa-images me-2"></i>Gallery
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Quick Navigation End -->

<!-- News & Updates Section Start -->
<div id="news-updates" class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                <i class="fa fa-newspaper me-2"></i>Latest News
            </h5>
            <h1 class="display-4 mb-3">Latest News & Updates</h1>
            <p class="lead">Stay informed about MEAUS activities, achievements, and upcoming events.</p>
        </div>
        
        <div class="row g-5">
            <!-- News Item 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded overflow-hidden h-100 shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-1.jpg')); ?>" alt="New Executive Board Member" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-primary">Leadership</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <small class="text-muted">Recent</small>
                        </div>
                        <h4 class="mb-3">Welcoming Our New Executive Board Member</h4>
                        <p class="mb-3">We are delighted to welcome Dr. Anoud Al-Saati as a new executive board member of MEAUS. Dr. Al-Saati brings valuable expertise and will contribute to our strategic development.</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Leadership</span>
                            <span class="badge bg-light text-dark">New Members</span>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill">
                            Read More <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- News Item 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded overflow-hidden h-100 shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-2.jpg')); ?>" alt="Dr. AlBloushi Award" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-warning">Awards</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <small class="text-muted">November 22, 2025</small>
                        </div>
                        <h4 class="mb-3">Congratulations to Dr. AlBloushi for Award Win</h4>
                        <p class="mb-3">Dr. Abdulrahman AlBloushi wins Best Rapid Fire Presentation award at IOIS Brazil 2025. This international recognition highlights the quality of research emerging from our region.</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Awards</span>
                            <span class="badge bg-light text-dark me-1">Achievements</span>
                            <span class="badge bg-light text-dark">International</span>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill">
                            Read More <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- News Item 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded overflow-hidden h-100 shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-3.jpg')); ?>" alt="IOIS Brazil 2025" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-success">Events</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <small class="text-muted">June 2025</small>
                        </div>
                        <h4 class="mb-3">MEAUS & EUSG International Participation at IOIS Brazil</h4>
                        <p class="mb-3">Successful collaboration session "Infectious Uveitis Not to Miss" at International Ocular Inflammation Society congress in Rio de Janeiro. Prof. Al-Dhibi presented the IUAD project.</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Events</span>
                            <span class="badge bg-light text-dark me-1">Collaboration</span>
                            <span class="badge bg-light text-dark">International</span>
                        </div>
                        <a href="<?php echo e(route('speakers-events')); ?>#events-participation" class="btn btn-primary rounded-pill">
                            Read More <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- News Item 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded overflow-hidden h-100 shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-1.jpg')); ?>" alt="EOS Cairo 2025" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-info">Education</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <small class="text-muted">May 2025</small>
                        </div>
                        <h4 class="mb-3">Second MEAUS International Participation at EOS Cairo</h4>
                        <p class="mb-3">Participation in Egyptian Ophthalmology Society conference with MEACO Courses in Ocular Imaging for Uveitis, May 7-9, 2025 in Cairo.</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Events</span>
                            <span class="badge bg-light text-dark me-1">Education</span>
                            <span class="badge bg-light text-dark">Egypt</span>
                        </div>
                        <a href="<?php echo e(route('speakers-events')); ?>#events-participation" class="btn btn-primary rounded-pill">
                            Read More <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- News Item 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded overflow-hidden h-100 shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-2.jpg')); ?>" alt="MIOC Muscat 2024" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-danger">Milestone</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <small class="text-muted">November 2024</small>
                        </div>
                        <h4 class="mb-3">First MEAUS International Participation at MIOC Muscat</h4>
                        <p class="mb-3">Our debut international participation at Muscat International Ophthalmology Conference with Uveitis (MEACOUS) Sessions & Course.</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Events</span>
                            <span class="badge bg-light text-dark me-1">Milestone</span>
                            <span class="badge bg-light text-dark">Oman</span>
                        </div>
                        <a href="<?php echo e(route('speakers-events')); ?>#events-participation" class="btn btn-primary rounded-pill">
                            Read More <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- News Item 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded overflow-hidden h-100 shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-3.jpg')); ?>" alt="First Executive Committee Meeting" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-primary">Milestone</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <small class="text-muted">Recent</small>
                        </div>
                        <h4 class="mb-3">Founding Executive Committee First In-Person Meeting</h4>
                        <p class="mb-3">Historic first in-person meeting of MEAUS founding executive committee, setting foundation for society's vision, structure, and initiatives.</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Milestone</span>
                            <span class="badge bg-light text-dark me-1">Leadership</span>
                            <span class="badge bg-light text-dark">Meeting</span>
                        </div>
                        <a href="<?php echo e(route('leadership')); ?>" class="btn btn-primary rounded-pill">
                            Read More <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- News Item 7 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded overflow-hidden h-100 shadow-sm">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-1.jpg')); ?>" alt="MEAUS Launch Announcement" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-success">Announcement</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <small class="text-muted">October 5, 2025</small>
                        </div>
                        <h4 class="mb-3">About MEAUS - Society Launch Announcement</h4>
                        <p class="mb-3">Official announcement of MEAUS as a non-profit independent scientific society under MEACO umbrella, dedicated to uveitis study in Middle East.</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Announcement</span>
                            <span class="badge bg-light text-dark me-1">Foundation</span>
                            <span class="badge bg-light text-dark">Society</span>
                        </div>
                        <a href="<?php echo e(route('about')); ?>" class="btn btn-primary rounded-pill">
                            Read More <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News & Updates Section End -->

<!-- Newsletter Subscription Section Start -->
<div class="container-fluid bg-primary py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h3 class="text-white mb-3">Stay Updated</h3>
                <p class="text-white mb-4">Subscribe to receive MEAUS news directly in your inbox.</p>
                <form class="d-flex flex-column flex-md-row gap-3 justify-content-center" style="max-width: 600px; margin: 0 auto;">
                    <input type="email" class="form-control form-control-lg rounded-pill" placeholder="Enter your email address" required>
                    <button type="submit" class="btn btn-light btn-lg rounded-pill px-5">
                        <i class="fa fa-envelope me-2"></i>Subscribe
                    </button>
                </form>
                <p class="text-white-50 small mt-3 mb-0">We respect your privacy. Unsubscribe anytime.</p>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Subscription Section End -->

<!-- Gallery Section Start -->
<div id="gallery" class="container-fluid bg-light py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                <i class="fa fa-images me-2"></i>Photo Gallery
            </h5>
            <h1 class="display-4 mb-3">Photo Gallery</h1>
            <p class="lead">Visual journey through MEAUS events, meetings, and milestones.</p>
        </div>
        
        <!-- Gallery Categories -->
        <div class="row g-3 mb-5 justify-content-center">
            <div class="col-auto">
                <button class="btn btn-outline-primary rounded-pill filter-btn active" data-filter="all">
                    <i class="fa fa-th me-2"></i>All
                </button>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-primary rounded-pill filter-btn" data-filter="events">
                    <i class="fa fa-calendar me-2"></i>Events & Conferences
                </button>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-primary rounded-pill filter-btn" data-filter="meetings">
                    <i class="fa fa-users me-2"></i>Meetings & Leadership
                </button>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-primary rounded-pill filter-btn" data-filter="awards">
                    <i class="fa fa-trophy me-2"></i>Awards & Recognition
                </button>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-primary rounded-pill filter-btn" data-filter="education">
                    <i class="fa fa-graduation-cap me-2"></i>Educational Activities
                </button>
            </div>
        </div>
        
        <!-- Gallery Grid -->
        <div class="row g-4" id="gallery-grid">
            <!-- Gallery Item 1 - Events -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="events">
                <div class="position-relative overflow-hidden rounded shadow-sm" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="<?php echo e(asset('img/blog-1.jpg')); ?>" data-bs-caption="IOIS Brazil 2025 - MEAUS Session">
                    <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-1.jpg')); ?>" alt="IOIS Brazil 2025 - MEAUS Session" style="height: 300px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-75 opacity-0 transition" style="transition: opacity 0.3s;">
                        <i class="fa fa-search-plus fa-3x text-white"></i>
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                        <h6 class="mb-0">IOIS Brazil 2025 - MEAUS Session</h6>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 2 - Meetings -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="meetings">
                <div class="position-relative overflow-hidden rounded shadow-sm" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="<?php echo e(asset('img/blog-2.jpg')); ?>" data-bs-caption="First Executive Committee Meeting">
                    <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-2.jpg')); ?>" alt="First Executive Committee Meeting" style="height: 300px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-75 opacity-0 transition" style="transition: opacity 0.3s;">
                        <i class="fa fa-search-plus fa-3x text-white"></i>
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                        <h6 class="mb-0">First Executive Committee Meeting</h6>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 3 - Events -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="events">
                <div class="position-relative overflow-hidden rounded shadow-sm" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="<?php echo e(asset('img/blog-3.jpg')); ?>" data-bs-caption="EOS Cairo 2025 Conference">
                    <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-3.jpg')); ?>" alt="EOS Cairo 2025 Conference" style="height: 300px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-75 opacity-0 transition" style="transition: opacity 0.3s;">
                        <i class="fa fa-search-plus fa-3x text-white"></i>
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                        <h6 class="mb-0">EOS Cairo 2025 Conference</h6>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 4 - Awards -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="awards">
                <div class="position-relative overflow-hidden rounded shadow-sm" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="<?php echo e(asset('img/blog-1.jpg')); ?>" data-bs-caption="Award Ceremony - Dr. AlBloushi">
                    <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-1.jpg')); ?>" alt="Award Ceremony - Dr. AlBloushi" style="height: 300px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-75 opacity-0 transition" style="transition: opacity 0.3s;">
                        <i class="fa fa-search-plus fa-3x text-white"></i>
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                        <h6 class="mb-0">Award Ceremony - Dr. AlBloushi</h6>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 5 - Events -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="events">
                <div class="position-relative overflow-hidden rounded shadow-sm" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="<?php echo e(asset('img/blog-2.jpg')); ?>" data-bs-caption="MIOC Muscat 2024 Participation">
                    <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-2.jpg')); ?>" alt="MIOC Muscat 2024 Participation" style="height: 300px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-75 opacity-0 transition" style="transition: opacity 0.3s;">
                        <i class="fa fa-search-plus fa-3x text-white"></i>
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                        <h6 class="mb-0">MIOC Muscat 2024 Participation</h6>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 6 - Meetings -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="meetings">
                <div class="position-relative overflow-hidden rounded shadow-sm" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="<?php echo e(asset('img/blog-3.jpg')); ?>" data-bs-caption="Planning Session">
                    <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-3.jpg')); ?>" alt="Planning Session" style="height: 300px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-75 opacity-0 transition" style="transition: opacity 0.3s;">
                        <i class="fa fa-search-plus fa-3x text-white"></i>
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                        <h6 class="mb-0">Planning Session</h6>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 7 - Education -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="education">
                <div class="position-relative overflow-hidden rounded shadow-sm" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="<?php echo e(asset('img/blog-1.jpg')); ?>" data-bs-caption="Speaker Presentation">
                    <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-1.jpg')); ?>" alt="Speaker Presentation" style="height: 300px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-75 opacity-0 transition" style="transition: opacity 0.3s;">
                        <i class="fa fa-search-plus fa-3x text-white"></i>
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                        <h6 class="mb-0">Speaker Presentation</h6>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 8 - Events -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="events">
                <div class="position-relative overflow-hidden rounded shadow-sm" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="<?php echo e(asset('img/blog-2.jpg')); ?>" data-bs-caption="Networking at Conference">
                    <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-2.jpg')); ?>" alt="Networking at Conference" style="height: 300px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-75 opacity-0 transition" style="transition: opacity 0.3s;">
                        <i class="fa fa-search-plus fa-3x text-white"></i>
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                        <h6 class="mb-0">Networking at Conference</h6>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 9 - Meetings -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="meetings">
                <div class="position-relative overflow-hidden rounded shadow-sm" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="<?php echo e(asset('img/blog-3.jpg')); ?>" data-bs-caption="Group Photo - Founding Members">
                    <img class="img-fluid w-100" src="<?php echo e(asset('img/blog-3.jpg')); ?>" alt="Group Photo - Founding Members" style="height: 300px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-75 opacity-0 transition" style="transition: opacity 0.3s;">
                        <i class="fa fa-search-plus fa-3x text-white"></i>
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 text-white">
                        <h6 class="mb-0">Group Photo - Founding Members</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Section End -->

<!-- Instagram Integration Section Start -->
<div class="container-fluid bg-primary py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h3 class="text-white mb-3"><i class="fab fa-instagram me-2"></i>Follow Us on Instagram</h3>
                <p class="text-white mb-4">Latest updates from <strong>@meausofficial</strong></p>
                <div class="row g-4 mb-4">
                    <!-- Instagram Post Placeholders -->
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="bg-white rounded p-3" style="aspect-ratio: 1;">
                            <i class="fab fa-instagram fa-3x text-primary"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="bg-white rounded p-3" style="aspect-ratio: 1;">
                            <i class="fab fa-instagram fa-3x text-primary"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="bg-white rounded p-3" style="aspect-ratio: 1;">
                            <i class="fab fa-instagram fa-3x text-primary"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="bg-white rounded p-3" style="aspect-ratio: 1;">
                            <i class="fab fa-instagram fa-3x text-primary"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="bg-white rounded p-3" style="aspect-ratio: 1;">
                            <i class="fab fa-instagram fa-3x text-primary"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="bg-white rounded p-3" style="aspect-ratio: 1;">
                            <i class="fab fa-instagram fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
                <a href="https://instagram.com/meausofficial" target="_blank" class="btn btn-light btn-lg rounded-pill px-5">
                    <i class="fab fa-instagram me-2"></i>Follow on Instagram
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Instagram Integration Section End -->

<!-- Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <img id="modalImage" src="" alt="Gallery Image" class="img-fluid w-100">
                <div class="p-3 bg-light">
                    <h5 id="modalCaption" class="mb-0"></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
.gallery-item:hover .transition {
    opacity: 1 !important;
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
// Gallery Filtering
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter gallery items
            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Gallery Modal
    const galleryModal = document.getElementById('galleryModal');
    if (galleryModal) {
        galleryModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const imageSrc = button.getAttribute('data-bs-image');
            const caption = button.getAttribute('data-bs-caption');
            
            const modalImage = galleryModal.querySelector('#modalImage');
            const modalCaption = galleryModal.querySelector('#modalCaption');
            
            modalImage.src = imageSrc;
            modalImage.alt = caption;
            modalCaption.textContent = caption;
        });
    }
});
</script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Meaus-1.0.0\resources\views/pages/media.blade.php ENDPATH**/ ?>