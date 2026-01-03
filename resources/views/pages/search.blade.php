@extends('layouts.app')

@section('title', 'Search Doctor - MEDINOVA')

@section('content')
<!-- Search Start -->
<div class="container-fluid bg-primary my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Find A Doctor</h5>
            <h1 class="display-4 mb-4">Find A Healthcare Professionals</h1>
            <h5 class="text-white fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos
                sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
        </div>
        <div class="mx-auto" style="width: 100%; max-width: 600px;">
            <form action="{{ route('search') }}" method="GET">
                <div class="input-group">
                    <select name="department" class="form-select border-primary w-25" style="height: 60px;">
                        <option value="">Department</option>
                        <option value="1" {{ request('department') == '1' ? 'selected' : '' }}>Department 1</option>
                        <option value="2" {{ request('department') == '2' ? 'selected' : '' }}>Department 2</option>
                        <option value="3" {{ request('department') == '3' ? 'selected' : '' }}>Department 3</option>
                    </select>
                    <input type="text" name="keyword" class="form-control border-primary w-50" placeholder="Keyword" value="{{ request('keyword') }}">
                    <button class="btn btn-dark border-0 w-25" type="submit">Search</button>
                </div>
            </form>
        </div>
        @if(request('keyword') || request('department'))
        <div class="container mt-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-light rounded p-4 text-center">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/team-1.jpg') }}" style="width: 150px; height: 150px; object-fit: cover;" alt="">
                        <h4>Doctor Name</h4>
                        <p class="text-primary">Cardiology Specialist</p>
                        <a href="{{ route('appointment') }}" class="btn btn-primary">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- Search End -->
@endsection

