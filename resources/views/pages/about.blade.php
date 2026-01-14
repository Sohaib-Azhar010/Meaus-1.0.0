@extends('layouts.app')

@section('title', 'About MEAUS - Middle East Africa Uveitis Society')
@section('keywords', 'MEAUS, Middle East Africa Uveitis Society, uveitis, ocular inflammation, ophthalmology, medical society')
@section('description', 'Learn about MEAUS - our history, mission, goals, and founding members. Advancing uveitis care across Middle East and Africa.')

@section('content')
<!-- Breadcrumb Start -->
<div class="container-fluid pb-3 pt-3 bg-light" style="margin-top: 0px;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About MEAUS</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Page Header/Banner Start -->
<div class="container-fluid bg-primary py-5 mb-5" style="background: linear-gradient(rgba(29, 42, 77, 0.8), rgba(29, 42, 77, 0.8)), url({{ asset('img/about.png') }}) center center no-repeat; background-size: cover;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5 mb-3" style="border-color: rgba(256, 256, 256, .3) !important;">About MEAUS</h5>
                <h1 class="display-4 text-white mb-3">Middle East Africa Uveitis Society</h1>
                <p class="lead text-white mb-0">Advancing Education, Research, and Collaboration in Uveitis and Ocular Inflammation</p>
            </div>
        </div>
    </div>
</div>
<!-- Page Header/Banner End -->

<!-- History & Mission Section Start -->
<div id="history-section" class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="{{ asset('img/about.png') }}" alt="MEAUS History" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                        <i class="fa fa-history me-2"></i>Our History
                    </h5>
                    <h1 class="display-4 mb-4">History & Mission</h1>
                </div>
                
                <div class="mb-4">
                    <h3 class="mb-3">Our History</h3>
                    <p class="mb-3">MEAUS (Middle East Africa Uveitis Society) was founded in <strong>June 2024</strong> by a dedicated group of uveitis specialists with a shared vision to advance the field of ocular inflammation across the region.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fa fa-calendar-check text-primary me-2"></i><strong>Key Founding Date:</strong> June 2024</li>
                        <li class="mb-2"><i class="fa fa-sitemap text-primary me-2"></i><strong>Umbrella Organization:</strong> MEACO (Middle East Africa Council of Ophthalmology)</li>
                        <li class="mb-2"><i class="fa fa-building text-primary me-2"></i><strong>Status:</strong> Non-profit independent scientific society</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">
                        <i class="fa fa-bullseye text-primary me-2"></i>Our Mission
                    </h3>
                    <p class="mb-3">MEAUS is a non-profit independent scientific society under the umbrella of MEACO, dedicated to the study of uveitis in the Middle East and Africa. We strive to improve patient care through:</p>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fa fa-handshake text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Scientific Collaboration</h6>
                                    <p class="mb-0 small">Fostering partnerships across the region</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fa fa-graduation-cap text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Professional Education</h6>
                                    <p class="mb-0 small">Advancing knowledge and skills</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fa fa-microscope text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Research Advancement</h6>
                                    <p class="mb-0 small">Promoting evidence-based practices</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fa fa-network-wired text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Regional Networking</h6>
                                    <p class="mb-0 small">Connecting specialists and experts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- History & Mission Section End -->

<!-- Our Goals Section Start -->
<div id="goals-section" class="container-fluid bg-light py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                <i class="fa fa-tasks me-2"></i>Our Goals
            </h5>
            <h1 class="display-4">Our Goals</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fa-2x text-white"></i>
                        </div>
                        <h3 class="mb-0">1. Formulate a Uveitis Experts Group</h3>
                    </div>
                    <p class="mb-0">Gather specialists from all countries of the Middle East to create a unified network of expertise.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-stethoscope fa-2x text-white"></i>
                        </div>
                        <h3 class="mb-0">2. Improve Uveitis Field Practice</h3>
                    </div>
                    <p class="mb-0">Enhance clinical practice through scientific collaboration between our member experts.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-book-reader fa-2x text-white"></i>
                        </div>
                        <h3 class="mb-0">3. Encourage Knowledge Transfer</h3>
                    </div>
                    <p class="mb-0">Support junior uveitis specialists through mentorship programs and experience sharing in this challenging field.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-heartbeat fa-2x text-white"></i>
                        </div>
                        <h3 class="mb-0">4. Achieve Better Patient Care</h3>
                    </div>
                    <p class="mb-0">Elevate the standard of uveitis patient care across the Middle East through education and collaboration.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Goals Section End -->

<!-- Founding Members Section Start -->
<div id="founders-section" class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                <i class="fa fa-users me-2"></i>Founding Members
            </h5>
            <h1 class="display-4">Founding Members</h1>
            <p class="lead">MEAUS was established by these pioneering specialists in <strong>June 2024</strong>:</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-1.jpg') }}" alt="Prof. Khalid Tabbara" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-crown text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Prof. Khalid Tabbara</h5>
                        <p class="text-primary mb-0 fw-bold">Honorary President</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-2.jpg') }}" alt="Prof. Moncef Khairallah" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-user-tie text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Prof. Moncef Khairallah</h5>
                        <p class="text-primary mb-0 fw-bold">President</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/speaker-aldhibi.png') }}" alt="Prof. Hassan Al-Dhibi" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-user-tie text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Prof. Hassan Al-Dhibi</h5>
                        <p class="text-primary mb-0 fw-bold">Vice President</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-3.jpg') }}" alt="Dr. Zamzam Al-Baker" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Dr. Zamzam Al-Baker</h5>
                        <p class="text-primary mb-0 fw-bold">General Secretary</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-1.jpg') }}" alt="Dr. Rola Hamam" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-microscope text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Dr. Rola Hamam</h5>
                        <p class="text-primary mb-0 fw-bold">Scientific Committee Chair</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/speaker-albloushi.png') }}" alt="Dr. Abdulrahman AlBloushi" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-graduation-cap text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Dr. Abdulrahman AlBloushi</h5>
                        <p class="text-primary mb-0 fw-bold">Education Committee Member</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-2.jpg') }}" alt="Dr. Dina Baddar" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-microscope text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Dr. Dina Baddar</h5>
                        <p class="text-primary mb-0 fw-bold">Scientific Committee Chair</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-3.jpg') }}" alt="Dr. Sana Khochtali" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-microscope text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Dr. Sana Khochtali</h5>
                        <p class="text-primary mb-0 fw-bold">Scientific Committee Member</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-1.jpg') }}" alt="Sheikha Dr. Noura Al Qassimi" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-bullhorn text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Sheikha Dr. Noura Al Qassimi</h5>
                        <p class="text-primary mb-0 fw-bold">Communication & PR Chair</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden text-center">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-2.jpg') }}" alt="Dr. Naila Al Harthi" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-bullhorn text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Dr. Naila Al Harthi</h5>
                        <p class="text-primary mb-0 fw-bold">Communication & PR Member</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Founding Members Section End -->

<!-- Call to Action Section Start -->
<div class="container-fluid bg-primary py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="d-inline-block text-white text-uppercase border-bottom border-5 mb-3" style="border-color: rgba(256, 256, 256, .3) !important;">Join Our Mission</h5>
            <h1 class="display-4 text-white mb-4">Interested in Becoming Part of MEAUS?</h1>
            <p class="lead text-white mb-5">We welcome ophthalmologists, researchers, and medical professionals specializing in uveitis and ocular inflammation.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact') }}" class="btn btn-light rounded-pill py-3 px-5">
                    <i class="fa fa-envelope me-2"></i>Contact Us for Membership
                </a>
                <a href="#" class="btn btn-outline-light rounded-pill py-3 px-5">
                    <i class="fa fa-users me-2"></i>View Leadership Team
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action Section End -->
@endsection
