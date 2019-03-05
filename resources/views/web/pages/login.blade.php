@extends('web.layouts.sidebar')
@section('content')


<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        @include('web.includes.breadcrumbs')
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <!-- <h2 class="page-heading">
            <span class="page-heading-title2">Authentication</span>
        </h2> -->
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
                <div class="col-md-6">
                    <!-- <div class="box-authentication"> -->
                    <form method="post" id="signup" action="/register">
                        @csrf
                        <h3>Create an account</h3>
                        <!-- <p>Please enter your email address to create an account.</p> -->
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input  placeholder="First Name" type="text" name="fname"
                                    class="form-control" id="fname">
                               <small class="form-text text-danger" id="fnameerror"></small>

                            </div>
                            <div class="col-md-6 form-group">
                                <input id="lname" placeholder="Last Name" type="text" name="lname" class="form-control">
                                <small class="form-text text-danger" id="lnameerror"></small>
                            </div> 
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <input id="email1" placeholder="Email" type="text" name="email"
                                    class="form-control">
                                    <small class="form-text text-danger" id="email1Nameerror"></small>
                            </div>
                        </div>
                        <input id="check" type="hidden" name="check" class="form-control" value="0">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <input id="passwordRegistration" type="password" name="password" placeholder="Password"
                                    class="form-control">
                                    <small class="form-text text-muted" id="passwordRegistrationNameerror">
                                    Minimum eight characters, at least one letter, one number and one special character*</small>
                            </div>
                            <div class="col-md-12 form-group">
                                <input id="passwordRegistration1" type="password" name="password1" placeholder="Confirm Password"
                                    class="form-control">
                                    <small class="form-text text-danger" id="passwordRegistration1Nameerror"></small>
                            </div>
                        </div>
                        <div class="text-center">
                        <button class="button" type="submit"><i class="fa fa-user"></i> Create an account</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <!-- <div class="box-authentication"> -->
                    <h3>Already registered?</h3>
                    
                    <form method="post" action="/login" id="login">
                    {{ session()->forget('error') }}
                        @if ($flash = session('error1'))
                            <div class="alert alert-danger" role="alert">
                                {{ $flash }}
                            </div>
                        @endif
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <input id="email" placeholder="Email" type="text" name="email"
                                    class="form-control  validate-required">
                                    <small class="form-text text-danger" id="emailError"></small>
                            </div>
                        </div>
                        <!-- <input id="check" type="hidden" name="check" class="form-control" value="0"> -->
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <input id="password" type="password" name="password" placeholder="Password"
                                    class="form-control  validate-required">
                                    <small class="form-text text-danger" id="passwordError"></small>
                            </div>
                        </div>
                        <div class="text-center">
                        <p class="forgot-pass"><a href="#">Forgot your password?</a></p>
                        <button type="submit" class="button" id="signIn"><i class="fa fa-lock"></i> Sign in</button>
                        </div>
                    </form>
                    <br>
                  <div class="option-sep"></div>
                          <div class="form-row">
                              <div class="col-sm-6 mb-20 text-center">
                              
                              <a href="{{URL::to('auth/facebook')}}">    <button type="submit" class="button"><span class="icon-label"><i
                                                  class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span>
                                  </button></a>
                              </div>
                              <div class="col-sm-6 mb-20 text-center">
                              <a href="{{URL::to('auth/google')}}">  <button type="submit" class="button"><span class="icon-label"><i
                                                  class="fa fa-google"></i> </span><span class="btn-text">Login with Google</span>
                                  </button></a>
                              </div>
                          </div>
                </div>
            </div>
        </div>
    </div>
</div>

 
@section('page-script')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<!-- <script type="text/javascript" src="{{ asset('distweb/js/libs/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery.actual.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/theme-script1.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('js/validate.js') }}"></script>

@stop

<div>
    @include('web.includes.footer')
</div>
<a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

@stop

