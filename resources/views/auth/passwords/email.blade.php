@extends('layouts.auth')

@section('pageTitle', 'Lupa Kata Sandi')

@section('style')
    <!-- CSS Libraries -->
@endsection

@section('content')

<form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" action="{{ route('password.email') }}" method="POST">
    @csrf
    <div class="text-center mb-10">
        <h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
        <div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
    </div>
    <div class="fv-row mb-8">
        <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off" class="form-control bg-transparent" />
    </div>
    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
        <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
            <span class="indicator-label">Submit</span>
            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <a href="{{ route('login') }}" class="btn btn-light">Cancel</a>
    </div>
</form>

@endsection

@section('script')
    <script src="{{ asset('assets/js/custom/authentication/reset-password/reset-password.js') }}"></script>
    @if (session('status'))
        <script>
            success();
        </script>
    @endif
    @error('email')
        <script>
            error();
        </script>
    @enderror
@endsection


