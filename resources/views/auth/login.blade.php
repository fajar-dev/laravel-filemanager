@extends('layouts.auth')

@section('pageTitle', 'Masuk')

@section('content')

<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"  action="{{ route('login') }}" method="POST" >
    @csrf
    <div class="text-center mb-11">
        <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
        <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
    </div>
    <div class="fv-row mb-8">
        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
    </div>
    <div class="fv-row mb-3">
        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
    </div>
    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <div></div>
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="link-primary">Forgot Password ?</a>
        @endif
    </div>
    <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
            <span class="indicator-label">Sign In</span>
            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>
    @if (Route::has('register'))
    <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
        <a href="{{ route('register') }}" class="link-primary">Sign up</a></div>
    @endif
</form>



@endsection

@section('script')
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
    @if($errors->any())
    <script>
        error()
    </script>
    @endif
@endsection