@extends('layouts.app')

@section('title', 'Blog Detail - MEDINOVA')

@section('content')
<!-- Blog Detail Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ asset('img/blog-1.jpg') }}" alt="">
                    <h1 class="mb-4">Dolor clita vero elitr sea stet dolor justo diam</h1>
                    <p>Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna rebum clita rebum dolor stet amet justo. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-white mb-4">Recent Posts</h4>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('img/blog-1.jpg') }}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="{{ route('blog.detail', 1) }}" class="h5 d-flex align-items-center bg-white px-3 mb-0">Dolor clita vero elitr sea stet</a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('img/blog-2.jpg') }}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="{{ route('blog.detail', 2) }}" class="h5 d-flex align-items-center bg-white px-3 mb-0">Dolor clita vero elitr sea stet</a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('img/blog-3.jpg') }}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="{{ route('blog.detail', 3) }}" class="h5 d-flex align-items-center bg-white px-3 mb-0">Dolor clita vero elitr sea stet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Detail End -->
@endsection

