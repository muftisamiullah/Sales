@extends('agentadmin.layouts.default')
@section('content')
    <div class="row">
        <div class="col-xl-5 pa-0">
            <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{asset('dist/img/bg2.jpg')}}">
                    <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                        <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                            <h1 class="display-3 text-white mb-20">Understand and look deep into nature.</h1>
                            <p class="text-white">The purpose of lorem ipsum is to create a natural looking block of
                                text (sentence, paragraph, page, etc.) that doesn't distract from the layout. Again
                                during the 90s as desktop publishers bundled the text with their software.</p>
                        </div>
                    </div>
                    <div class="bg-overlay bg-trans-dark-50"></div>
                </div>
                <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{asset('dist/img/bg1.jpg')}}">
                    <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                        <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                            <h1 class="display-3 text-white mb-20">Experience matters for good applications.</h1>
                            <p class="text-white">The passage experienced a surge in popularity during the 1960s when
                                Letraset used it on their dry-transfer sheets, and again during the 90s as desktop
                                publishers bundled the text with their software.</p>
                        </div>
                    </div>
                    <div class="bg-overlay bg-trans-dark-50"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-7 pa-0">
            <div class="auth-form-wrap py-xl-0 py-50">
                <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                    <form method="post" action="{{ action('AuthController@agentAuthenticate') }}" id="adminLogin">
                        @csrf
                        <h1 class="display-4 mb-10"> AntiVirus Sale By Onsite Repair US </h1>
                        <p class="mb-30">Sign in to manage your Store<br>(Authorized Accounts only)</p>
                        {{ session()->forget('forbidden') }}
                        @if ($flash = session('errors'))
                            <div class="alert alert-danger" role="alert">
                                {{ $flash }}
                            </div>
                        @endif
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Email"  id="email" type="email">
                            <small class="form-text text-danger" id="emailError"></small>
                           
                        </div>
                        <!-- <input type="hidden" name="check" value="1"> -->
                        <div class="form-group">
                            <!-- <div class="input-group"> -->
                                <input class="form-control" name="password" placeholder="Password" id="password" type="password" required>
                                <small class="form-text text-danger" id="passwordError"></small>

                              {{--  <div class="input-group-append">
                                    <span class="input-group-text">
                                        <span class="feather-icon">
                                            <i data-feather="eye-off"></i>
                                        </span>
                                    </span>
                                </div>--}}

                            <!-- </div> -->
                        </div>
                        <div class="custom-control custom-checkbox mb-25">
                            <input class="custom-control-input" id="same-address" type="checkbox" checked>
                            <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                        </div>
                        <button class="btn btn-primary btn-block" id="submitLoginBtn" >Agent Login</button>
                        <p class="font-14 text-center mt-15">Having trouble logging in? <a href="{{URL::to('')}}">Forgot Password</a></p>
                        {{--onclick="window.location='{{ URL::to('admin/dashboard') }}'"--}}
                        {{--  <div class="option-sep">or</div>
                          <div class="form-row">
                              <div class="col-sm-6 mb-20">
                                  <button class="btn btn-indigo btn-block btn-wth-icon"><span class="icon-label"><i
                                                  class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span>
                                  </button>
                              </div>
                              <div class="col-sm-6 mb-20">
                                  <button class="btn btn-primary btn-block btn-wth-icon"><span class="icon-label"><i
                                                  class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span>
                                  </button>
                              </div>
                          </div>--}}
 
                        <!-- <p class="text-center">Do'nt have an account yet? <a href="{{URL::to('admin/register')}}">Sign Up</a></p> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop



