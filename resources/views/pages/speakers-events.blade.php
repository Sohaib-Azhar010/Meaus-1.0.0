@extends('layouts.app')

@section('title', 'Speakers & Events - MEAUS International Programs')
@section('keywords', 'MEAUS speakers, international events, uveitis conferences, ophthalmology speakers, MEAUS achievements')
@section('description', 'Explore MEAUS international speakers, global events participation, and achievements in uveitis advancement across Middle East and Africa.')

@section('content')
<!-- Breadcrumb Start -->
<div class="container-fluid pb-3 pt-3 bg-light" style="margin-top: 0px;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Speakers & Events</li>
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
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5 mb-3" style="border-color: rgba(256, 256, 256, .3) !important;">Speakers & Events</h5>
                <h1 class="display-4 text-white mb-3">Global Reach, Local Impact</h1>
                <p class="lead text-white mb-0">Connecting international expertise with regional uveitis advancement</p>
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
                <a href="#events-participation" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="fa fa-calendar-alt me-2"></i>Events & Participation
                </a>
            </div>
            <div class="col-auto">
                <a href="#year-2026" class="btn btn-outline-primary rounded-pill px-4">
                    2026
                </a>
            </div>
            <div class="col-auto">
                <a href="#year-2025" class="btn btn-outline-primary rounded-pill px-4">
                    2025
                </a>
            </div>
            <div class="col-auto">
                <a href="#year-2024" class="btn btn-outline-primary rounded-pill px-4">
                    2024
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Quick Navigation End -->

<!-- International Speakers Section Start -->
<div id="international-speakers" class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                <i class="fa fa-microphone-alt me-2"></i>International Speakers
            </h5>
            <p class="lead">Renowned experts contributing to MEAUS educational programs and knowledge exchange.</p>
        </div>
        <div class="row g-5">
            <!-- Dr. AbdulAziz Badia -->
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden h-100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/speaker-badia.png') }}" alt="Dr. AbdulAziz Badia" style="height: 350px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-microphone text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">Dr. AbdulAziz Badia</h4>
                        <p class="text-primary fw-bold mb-2"><i class="fa fa-stethoscope me-2"></i>Vitreoretina</p>
                        <p class="mb-2 small"><strong>Affiliation:</strong> Leading vitreoretinal specialist</p>
                        <p class="mb-0 small"><strong>Contributions:</strong> Advanced surgical techniques in uveitis management</p>
                    </div>
                </div>
            </div>
            
            <!-- Dr. Abdulrahman AlBloushi -->
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden h-100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/speaker-albloushi.png') }}" alt="Dr. Abdulrahman AlBloushi" style="height: 350px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">Dr. Abdulrahman AlBloushi</h4>
                        <p class="text-primary fw-bold mb-2"><i class="fa fa-graduation-cap me-2"></i>Ocular Immunology and Medical Institute</p>
                        <p class="mb-2 small"><strong>Affiliation:</strong> Award-winning researcher</p>
                        <p class="mb-0 small"><strong>Achievement:</strong> Best Rapid Fire Presentation, IOIS Brazil 2025</p>
                    </div>
                </div>
            </div>
            
            <!-- Dr. Hassan Al-Dhibi -->
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden h-100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/speaker-aldhibi.png') }}" alt="Dr. Hassan Al-Dhibi" style="height: 350px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-user-tie text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">Dr. Hassan Al-Dhibi</h4>
                        <p class="text-primary fw-bold mb-2"><i class="fa fa-eye me-2"></i>Uveitis</p>
                        <p class="mb-2 small"><strong>Affiliation:</strong> MEAUS Vice President</p>
                        <p class="mb-0 small"><strong>Projects:</strong> Co-founder of IUAD tentative project</p>
                    </div>
                </div>
            </div>
            
            <!-- Prof. Bahram Bodagiri -->
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden h-100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-2.jpg') }}" alt="Prof. Bahram Bodagiri" style="height: 350px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-user-graduate text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">Prof. Bahram Bodagiri</h4>
                        <p class="text-primary fw-bold mb-2"><i class="fa fa-eye me-2"></i>Uveitis</p>
                        <p class="mb-2 small"><strong>Affiliation:</strong> International uveitis authority</p>
                        <p class="mb-0 small"><strong>Experience:</strong> 20+ years in ocular inflammation</p>
                    </div>
                </div>
            </div>
            
            <!-- Prof. Manor Singh -->
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden h-100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-3.jpg') }}" alt="Prof. Manor Singh" style="height: 350px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-microscope text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">Prof. Manor Singh</h4>
                        <p class="text-primary fw-bold mb-2"><i class="fa fa-eye-dropper me-2"></i>Cornea and Microbial Uveitis</p>
                        <p class="mb-2 small"><strong>Affiliation:</strong> Infectious uveitis specialist</p>
                        <p class="mb-0 small"><strong>Expertise:</strong> Ocular infections and inflammation</p>
                    </div>
                </div>
            </div>
            
            <!-- Prof. Konod Kastallah -->
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden h-100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-1.jpg') }}" alt="Prof. Konod Kastallah" style="height: 350px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-university text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">Prof. Konod Kastallah</h4>
                        <p class="text-primary fw-bold mb-2"><i class="fa fa-graduation-cap me-2"></i>Uveitis and Medical Institute</p>
                        <p class="mb-2 small"><strong>Affiliation:</strong> Academic and clinical leader</p>
                        <p class="mb-0 small"><strong>Focus:</strong> Institutional uveitis programs</p>
                    </div>
                </div>
            </div>
            
            <!-- Prof. Quan Daba Nayakla -->
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden h-100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/team-2.jpg') }}" alt="Prof. Quan Daba Nayakla" style="height: 350px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-hospital text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">Prof. Quan Daba Nayakla</h4>
                        <p class="text-primary fw-bold mb-2"><i class="fa fa-graduation-cap me-2"></i>Uveitis and Medical Institute</p>
                        <p class="mb-2 small"><strong>Affiliation:</strong> Cross-disciplinary expert</p>
                        <p class="mb-0 small"><strong>Approach:</strong> Integrated medical management</p>
                    </div>
                </div>
            </div>
            
            <!-- Prof. Vishal Gupta -->
            <div class="col-lg-4 col-md-6">
                <div class="team-item bg-light rounded overflow-hidden h-100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('img/speaker-gupta.png') }}" alt="Prof. Vishal Gupta" style="height: 350px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa fa-syringe text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">Prof. Vishal Gupta</h4>
                        <p class="text-primary fw-bold mb-2"><i class="fa fa-syringe me-2"></i>Uveitis and Vitreoretinal Surgery</p>
                        <p class="mb-2 small"><strong>Affiliation:</strong> Surgical uveitis pioneer</p>
                        <p class="mb-0 small"><strong>Innovation:</strong> Surgical interventions for complex uveitis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- International Speakers Section End -->

<!-- Events & Participation Section Start -->
<div id="events-participation" class="container-fluid bg-light py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                <i class="fa fa-calendar-alt me-2"></i>Events & Participation
            </h5>
            <h1 class="display-4 mb-3">Events & Participation</h1>
            <p class="lead">MEAUS's growing presence in international ophthalmology forums.</p>
        </div>
        
        <!-- Year 2026 Section -->
        <div id="year-2026" class="row mb-5">
            <div class="col-lg-12">
                <h3 class="mb-4"><i class="fa fa-calendar-check text-primary me-2"></i>2026</h3>
                <div class="bg-white rounded p-5 shadow-sm border border-primary border-3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-calendar-check fa-3x text-white"></i>
                        </div>
                        <div>
                            <span class="badge bg-success mb-2">Upcoming Event</span>
                            <h2 class="mb-1">MEAUS Symposium 2026</h2>
                            <p class="text-muted mb-0">Mark your calendars for this landmark event</p>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa fa-calendar text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Date</h6>
                                    <p class="mb-0">April 11th, 2026</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa fa-map-marker-alt text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Venue</h6>
                                    <p class="mb-0">Rotana City Centre, Doha, Qatar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa fa-bullseye text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Focus</h6>
                                    <p class="mb-0">Uveitis advancements and partnership opportunities</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="fa fa-star text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Highlights</h6>
                                    <p class="mb-0">Keynote sessions, workshops, networking</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary rounded-pill px-5">
                            <i class="fa fa-download me-2"></i>Download Sponsorship Prospectus
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Year 2025 Section -->
        <div id="year-2025" class="row mb-5">
            <div class="col-lg-12">
                <h3 class="mb-4"><i class="fa fa-history text-primary me-2"></i>2025</h3>
                
                <!-- IOIS Brazil 2025 -->
                <div class="bg-white rounded p-4 mb-4 shadow-sm">
                    <div class="row g-4">
                        <div class="col-md-3 text-center">
                            <div class="bg-primary text-white rounded p-3 mb-3">
                                <h5 class="mb-0">June 2025</h5>
                            </div>
                            <p class="mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Rio de Janeiro, Brazil</p>
                        </div>
                        <div class="col-md-9">
                            <h4 class="text-primary mb-3">IOIS - International Ocular Inflammation Society</h4>
                            <div class="mb-3">
                                <h6 class="mb-2"><i class="fa fa-microphone text-primary me-2"></i>Session:</h6>
                                <p class="mb-2">"Infectious Uveitis Not to Miss" - MEAUS and EUSG collaboration</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="mb-2"><i class="fa fa-trophy text-primary me-2"></i>Achievement:</h6>
                                <p class="mb-2"><strong>Dr. AlBloushi</strong> - Best Rapid Fire Presentation</p>
                            </div>
                            <div>
                                <h6 class="mb-2"><i class="fa fa-presentation text-primary me-2"></i>Presentation:</h6>
                                <p class="mb-0">Prof. Al-Dhibi presented <strong>IUAD project</strong> (founded by Dr. Zamzam Al-Baker & Prof. Al-Dhibi)</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- EOS Cairo 2025 -->
                <div class="bg-white rounded p-4 mb-4 shadow-sm">
                    <div class="row g-4">
                        <div class="col-md-3 text-center">
                            <div class="bg-primary text-white rounded p-3 mb-3">
                                <h5 class="mb-0">May 2025</h5>
                            </div>
                            <p class="mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Cairo, Egypt</p>
                        </div>
                        <div class="col-md-9">
                            <h4 class="text-primary mb-3">EOS - Egyptian Ophthalmology Society Conference</h4>
                            <div class="mb-3">
                                <h6 class="mb-2"><i class="fa fa-graduation-cap text-primary me-2"></i>Session:</h6>
                                <p class="mb-2">MEACO Courses in Ocular Imaging for Uveitis</p>
                            </div>
                            <div>
                                <h6 class="mb-2"><i class="fa fa-bullseye text-primary me-2"></i>Focus:</h6>
                                <p class="mb-0">Advanced imaging techniques in uveitis diagnosis</p>
                            </div>
                            <div class="mt-3">
                                <h6 class="mb-2"><i class="fa fa-users text-primary me-2"></i>Impact:</h6>
                                <p class="mb-0">Training Middle Eastern ophthalmologists</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Year 2024 Section -->
        <div id="year-2024" class="row">
            <div class="col-lg-12">
                <h3 class="mb-4"><i class="fa fa-history text-primary me-2"></i>2024</h3>
                
                <!-- MIOC Muscat 2024 -->
                <div class="bg-white rounded p-4 mb-4 shadow-sm">
                    <div class="row g-4">
                        <div class="col-md-3 text-center">
                            <div class="bg-primary text-white rounded p-3 mb-3">
                                <h5 class="mb-0">November 2024</h5>
                            </div>
                            <p class="mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Muscat, Oman</p>
                        </div>
                        <div class="col-md-9">
                            <h4 class="text-primary mb-3">MIOC - Muscat International Ophthalmology Conference</h4>
                            <div class="mb-3">
                                <span class="badge bg-warning text-dark mb-3">
                                    <i class="fa fa-star me-1"></i>Milestone: First international participation of MEAUS
                                </span>
                            </div>
                            <div class="mb-3">
                                <h6 class="mb-2"><i class="fa fa-microphone text-primary me-2"></i>Session:</h6>
                                <p class="mb-2">Uveitis (MEACOUS) Sessions & Course</p>
                            </div>
                            <div>
                                <h6 class="mb-2"><i class="fa fa-flag text-primary me-2"></i>Significance:</h6>
                                <p class="mb-0">Establishment of regional presence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Events & Participation Section End -->

<!-- Achievements Section Start -->
<div id="achievements" class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                <i class="fa fa-trophy me-2"></i>Achievements & Recognition
            </h5>
            <h1 class="display-4 mb-3">Achievements & Recognition</h1>
            <p class="lead">Celebrating milestones in MEAUS's journey.</p>
        </div>
        
        <div class="row g-5 justify-content-center">
            <!-- Best Rapid Fire Presentation Award -->
            <div class="col-lg-8">
                <div class="bg-light rounded p-5 h-100 shadow-sm border border-primary border-3">
                    <div class="text-center mb-4">
                        <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px;">
                            <i class="fa fa-trophy fa-4x text-white"></i>
                        </div>
                        <h3 class="text-primary mb-2">Best Rapid Fire Presentation Award</h3>
                    </div>
                    <div class="text-center mb-4">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/speaker-albloushi.png') }}" alt="Dr. Abdulrahman AlBloushi" style="width: 150px; height: 150px; object-fit: cover;">
                        <h4 class="mb-2">Dr. Abdulrahman AlBloushi</h4>
                        <p class="text-primary fw-bold mb-3">IOIS Brazil 2025</p>
                    </div>
                    <div class="border-top pt-4">
                        <h6 class="mb-2"><i class="fa fa-star text-primary me-2"></i>Significance:</h6>
                        <p class="mb-2">International recognition of MEAUS members' research excellence</p>
                        <h6 class="mb-2"><i class="fa fa-chart-line text-primary me-2"></i>Impact:</h6>
                        <p class="mb-0">Enhanced credibility and visibility for Middle Eastern uveitis research</p>
                    </div>
                </div>
            </div>
            
            <!-- International Collaborations -->
            <div class="col-lg-12">
                <div class="bg-white rounded p-5 shadow-sm">
                    <h3 class="text-primary mb-4"><i class="fa fa-handshake me-2"></i>International Collaborations Established</h3>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center p-4 bg-light rounded">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <i class="fa fa-clock fa-3x text-white"></i>
                                </div>
                                <h5 class="mb-2">Coming Soon</h5>
                                <p class="mb-0 small">More information will be available soon.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-top">
                        <h5 class="mb-3"><i class="fa fa-graduation-cap text-primary me-2"></i>Knowledge Exchange Initiatives</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Multiple international conference participations</p>
                            </div>
                            <div class="col-md-4">
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Educational sessions reaching hundreds of ophthalmologists</p>
                            </div>
                            <div class="col-md-4">
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Mentorship programs for junior uveitis specialists</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Achievements Section End -->

<!-- Call to Action Section Start -->
<div class="container-fluid bg-primary py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="d-inline-block text-white text-uppercase border-bottom border-5 mb-3" style="border-color: rgba(256, 256, 256, .3) !important;">Be Part of Our Next Event</h5>
            <h1 class="display-4 text-white mb-4">Interested in Speaking at MEAUS Events?</h1>
            <p class="lead text-white mb-5">Join us in advancing uveitis care through collaboration and knowledge exchange.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact') }}" class="btn btn-light rounded-pill py-3 px-5">
                    <i class="fa fa-paper-plane me-2"></i>Submit Speaker Proposal
                </a>
                <a href="#" class="btn btn-outline-light rounded-pill py-3 px-5">
                    <i class="fa fa-calendar-check me-2"></i>Register for Doha 2026
                </a>
                <a href="#" class="btn btn-outline-light rounded-pill py-3 px-5">
                    <i class="fa fa-images me-2"></i>View Event Gallery
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action Section End -->
@endsection

