@extends('web.layouts.sidebar')
@section('content')

<section class="process_area section_padding section_gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="page_title text-center">
                            <h1>How we help ?</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="process_area_menu">
                        <ul>
                            <li>
                                <a href=""><img src="{{asset('distweb/img/images/process_1.png')}}" alt=""></a>
                                <p class="process_title">CALL OR VISIT</p>
                            </li>
                            <li>
                                <a href=""><img src="{{asset('distweb/img/images/process_2.png')}}" alt=""></a>
                                <p class="process_title">DIAGNOSE ISSUES</p>
                            </li>
                            <li>
                                <a href=""><img src="{{asset('distweb/img/images/process_3.png')}}" alt=""></a>
                                <p class="process_title">We Fix Issues</p>
                            </li>
                            <li>
                                <a href=""><img src="{{asset('distweb/img/images/process_4.png')}}" alt=""></a>
                                <p class="process_title">READY FOR DELIVERY</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <div class="container">
        	<div class="row">
        		<div class="col-md-3 text-center">
        			<h3 class="heading-border">SMART PHONE & GAME CONSOLE REPAIR</h3>
        			<p class="price_dolar"><strong><span>$</span>39.00</strong></p>
        			<div class="service-info-new service-height">
        				<ul class="list-unstyled text-left">
                            <li><a>Any Hardware Issues</a></li>
                            <li><a>Any Software Issues</a></li>
                            <li><a>OS Updation</a></li>
                            <li><a>Driver Support</a></li>
                            <li><a>Recovery Help</a></li>
                            <li><a>24/7 Support</a></li>
                        </ul>
        			</div>
        		</div>
        		<div class="col-md-3 text-center">
        			<h3 class="heading-border">PRINTER & ROUTER REPAIR SERVICE</h3>
        			<p class="price_dolar"><strong><span>$</span>49.00</strong></p>
        			<div class="service-info-new service-height">
        				<ul class="list-unstyled text-left">
                            <li><a>Any Hardware Issues</a></li>
                            <li><a>Any Software Issues</a></li>
                            <li><a>Driver Support</a></li>
                            <li><a>Installation Help</a></li>
                            <li><a>72 Hours Delivery Assured</a></li>
                            <li><a>24/7 Phone Support</a></li>
                        </ul>
        			</div>
        		</div>
        		<div class="col-md-3 text-center">
        			<h3 class="heading-border">COMPUTER REPAIR & OPTIMIZATION</h3>
        			<p class="price_dolar"><strong><span>$</span>99.00</strong></p>
        			<div class="service-info-new service-height">
        				<ul class="list-unstyled text-left">
                            <li><a>Any Hardware Issues</a></li>
                            <li><a>Any Software Issues</a></li>
                            <li><a>Slow Computer And Optimization</a></li>
                            <li><a>Virus Removal</a></li>
                            <li><a>72 Hours Delivery Assured</a></li>
                            <li><a>24/7 Phone Support</a></li>
                        </ul>
        			</div>
        		</div>
        		<div class="col-md-3 text-center">
        			<h3 class="heading-border">ANNUAL MAINTENANCE CONTRACT</h3>
        			<p class="price_dolar"><strong><span>$</span>299.00</strong></p>
        			<div class="service-info-new service-height">
        				<ul class="list-unstyled text-left">
                            <li><a>Any Hardware Issues</a></li>
                            <li><a>Any Software Issues</a></li>
                            <li><a>Printer And Router Support</a></li>
                            <li><a>Virus Removal</a></li>
                            <li><a>Hard Drive Recovery</a></li>
                            <li><a>24/7 Support</a></li>
                        </ul>
        			</div>
        		</div>
        	</div>
        	<input type='button' value='Back to Cart' class="button" onclick="document.location.href='/cart';"/>
        </div>
        <br>
        <section class="newsletter_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                       <div class="signup_newsletter">
                           <p>Need Help</p>
                           <h3>Request a call back to get help with computers problems, Printer Problems, Antivirus Issues</h3>
                           <form action="">
                               <input type="phone" placeholder="Enter your phone number" id="phone" required="">
                               <input type="submit" value="Call Back" id="callback" class="button">
                           </form>
                           <small class="form-text text-danger" id="phoneError"></small>
                       </div>
                    </div>
                </div>
            </div>
        </section>

@section('page-script')
    <!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

<script type="text/javascript" src="{{asset('distweb/js/libs/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/flipclock.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/validate.js') }}"></script>

<script>
        $(document).on('click', '#callback', function(e) {
            e.preventDefault();
            // callBack(); called in validate.js
        });
        function callBack() {
            var token =  '{{ Session::get('user_access_token') }}';
            var phone = $('#phone').val();
            $.ajax({
            url: "{{ url('/api/callback') }}",
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {
                phone: phone,
            },
                success: function(data) {
                    console.log(data);
                    if(data.success)
                    {
                        showToast("We will call you Shortly","", "success");
                    }else{
                        showToast("Something went wrong","", "error");
                    }
                }
            });
        }
    </script>

@stop

	<div>
        @include('web.includes.footer')
    </div>
    <a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>
@stop