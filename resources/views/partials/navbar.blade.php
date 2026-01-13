<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm {{ request()->routeIs('home') ? '' : (request()->routeIs('about') || request()->routeIs('leadership') || request()->routeIs('speakers-events') || request()->routeIs('sponsorship') || request()->routeIs('media') ? 'mb-0' : 'mb-5') }}">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('img/logo.png') }}" alt="MEAUS Logo" style="height: 50px; width: auto;" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" 
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto py-0">
                    <!-- 1. HOME -->
                    <li class="nav-item">
                        <a href="{{ route('home') }}" 
                           class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}">Home</a>
                    </li>
                    
                    <!-- 2. ABOUT (With Dropdown) -->
                    <li class="nav-item dropdown">
                        <a href="#" 
                           class="nav-link dropdown-toggle {{ request()->routeIs('about') || request()->is('about*') ? 'active' : '' }}" 
                           role="button" 
                           data-bs-toggle="dropdown" 
                           aria-expanded="false"
                           aria-haspopup="true"
                           aria-controls="aboutDropdown">
                            About
                        </a>
                        <ul class="dropdown-menu m-0" id="aboutDropdown">
                            <li><a class="dropdown-item" href="{{ route('about') }}#history-section"><i class="fa fa-info-circle text-primary me-2"></i>History & Mission</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#goals-section"><i class="fa fa-bullseye text-primary me-2"></i>Our Goals</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#founders-section"><i class="fa fa-users text-primary me-2"></i>Founding Members</a></li>
                        </ul>
                    </li>
                    
                    <!-- 3. LEADERSHIP (With Dropdown) -->
                    <li class="nav-item dropdown">
                        <a href="#" 
                           class="nav-link dropdown-toggle {{ request()->routeIs('leadership') || request()->is('leadership*') ? 'active' : '' }}" 
                           role="button" 
                           data-bs-toggle="dropdown" 
                           aria-expanded="false"
                           aria-haspopup="true"
                           aria-controls="leadershipDropdown">
                            Leadership
                        </a>
                        <ul class="dropdown-menu m-0" id="leadershipDropdown">
                            <li><a class="dropdown-item" href="{{ route('leadership') }}#executive-board"><i class="fa fa-users-cog text-primary me-2"></i>Executive Board</a></li>
                            <li><a class="dropdown-item" href="{{ route('leadership') }}#committees"><i class="fa fa-sitemap text-primary me-2"></i>Committees</a></li>
                            <li><a class="dropdown-item" href="{{ route('leadership') }}#new-members"><i class="fa fa-user-plus text-primary me-2"></i>New Members</a></li>
                        </ul>
                    </li>
                    
                    <!-- 4. SPEAKERS & EVENTS (With Dropdown) -->
                    <li class="nav-item dropdown">
                        <a href="#" 
                           class="nav-link dropdown-toggle {{ request()->routeIs('speakers-events') || request()->is('speakers*') || request()->is('events*') || request()->is('achievements*') ? 'active' : '' }}" 
                           role="button" 
                           data-bs-toggle="dropdown" 
                           aria-expanded="false"
                           aria-haspopup="true"
                           aria-controls="speakersEventsDropdown">
                            Events
                        </a>
                        <ul class="dropdown-menu m-0" id="speakersEventsDropdown">
                            <li><a class="dropdown-item" href="{{ route('speakers-events') }}#international-speakers"><i class="fa fa-microphone text-primary me-2"></i>International Speakers</a></li>
                            <li><a class="dropdown-item" href="{{ route('speakers-events') }}#events-participation"><i class="fa fa-calendar text-primary me-2"></i>Events & Participation</a></li>
                            <li><a class="dropdown-item" href="{{ route('speakers-events') }}#achievements"><i class="fa fa-trophy text-primary me-2"></i>Achievements</a></li>
                        </ul>
                    </li>
                    
                    <!-- 5. SPONSORSHIP (No Dropdown) -->
                    <li class="nav-item">
                        <a href="{{ route('sponsorship') }}" 
                           class="nav-link {{ request()->routeIs('sponsorship') || request()->is('sponsorship*') ? 'active' : '' }}">
                            Membership
                        </a>
                    </li>
                    
                    <!-- 6. MEDIA (With Dropdown) -->
                    <li class="nav-item dropdown">
                        <a href="#" 
                           class="nav-link dropdown-toggle {{ request()->routeIs('media') || request()->is('media*') || request()->is('news*') || request()->is('gallery*') ? 'active' : '' }}" 
                           role="button" 
                           data-bs-toggle="dropdown" 
                           aria-expanded="false"
                           aria-haspopup="true"
                           aria-controls="mediaDropdown">
                            Media
                        </a>
                        <ul class="dropdown-menu m-0" id="mediaDropdown">
                            <li><a class="dropdown-item" href="{{ route('media') }}#news-updates"><i class="fa fa-newspaper text-primary me-2"></i>News & Updates</a></li>
                            <li><a class="dropdown-item" href="{{ route('media') }}#gallery"><i class="fa fa-images text-primary me-2"></i>Gallery</a></li>
                        </ul>
                    </li>
                    
                    <!-- 7. CONTACT (No Dropdown) -->
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" 
                           class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

