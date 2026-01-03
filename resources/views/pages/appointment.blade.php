@extends('layouts.app')

@section('title', 'Appointment - MEDINOVA')

@section('content')
<!-- Appointment Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointment</h5>
                    <h1 class="display-4">Make An Appointment For Your Family</h1>
                </div>
                <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et
                    dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea
                    et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore
                    sanctus sed et. Takimata takimata sanctus sed.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="{{ route('search') }}">Find Doctor</a>
                <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="{{ route('about') }}">Read More</a>
            </div>
            <div class="col-lg-6">
                <div class="bg-light text-center rounded p-5">
                    <h1 class="mb-4">Book An Appointment</h1>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('appointment.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select name="department" class="form-select bg-white border-0 @error('department') is-invalid @enderror" style="height: 55px;" required>
                                    <option value="">Choose Department</option>
                                    <option value="1" {{ old('department') == '1' ? 'selected' : '' }}>Department 1</option>
                                    <option value="2" {{ old('department') == '2' ? 'selected' : '' }}>Department 2</option>
                                    <option value="3" {{ old('department') == '3' ? 'selected' : '' }}>Department 3</option>
                                </select>
                                @error('department')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <select name="doctor" class="form-select bg-white border-0 @error('doctor') is-invalid @enderror" style="height: 55px;" required>
                                    <option value="">Select Doctor</option>
                                    <option value="1" {{ old('doctor') == '1' ? 'selected' : '' }}>Doctor 1</option>
                                    <option value="2" {{ old('doctor') == '2' ? 'selected' : '' }}>Doctor 2</option>
                                    <option value="3" {{ old('doctor') == '3' ? 'selected' : '' }}>Doctor 3</option>
                                </select>
                                @error('doctor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="name" class="form-control bg-white border-0 @error('name') is-invalid @enderror" placeholder="Your Name"
                                    style="height: 55px;" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control bg-white border-0 @error('email') is-invalid @enderror" placeholder="Your Email"
                                    style="height: 55px;" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="date" class="form-control bg-white border-0 datetimepicker-input @error('date') is-invalid @enderror"
                                        placeholder="Date" data-target="#date" data-toggle="datetimepicker"
                                        style="height: 55px;" value="{{ old('date') }}" required>
                                </div>
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" name="time" class="form-control bg-white border-0 datetimepicker-input @error('time') is-invalid @enderror"
                                        placeholder="Time" data-target="#time" data-toggle="datetimepicker"
                                        style="height: 55px;" value="{{ old('time') }}" required>
                                </div>
                                @error('time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Make An
                                    Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
@endsection

