@extends('web.layouts.sidebar')
@section('content')


<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				@include('web.includes.breadcrumbs')
				<div class="about-banner banner-image">
					<img src="{{asset('distweb/img/images/photos/about-banner.jpg')}}" alt="" />
				</div>
				<ul class="about-menu">
					<li><a href="#intro">Introduction </a></li>
					<li><a href="#protection">Protection</a></li>
					<li><a href="#review"> Customer Reviews</a></li>
				</ul>
				<div id="intro" class="contact-info-page about-info-page">
					<div class="list-contact-info">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info">
									<a class="contact-icon icon-quality"><i class="fa fa-diamond"></i></a>
									<h2>100% Product quality protection</h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info">
									<a class="contact-icon icon-shipment"><i class="fa fa-clock-o"></i></a>
									<h2>100% On-time shipment protection</h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info last-item">
									<a class="contact-icon icon-payment"><i class="fa fa-usd"></i></a>
									<h2>100% Payment protection</h2>
								</div>
							</div>
						</div>
					</div>
					<p class="desc">If the product quality does not meet the standards set in your contract, We will refund the covered amount of your payment.</p>
				</div>
				<div id="protection" class="protect-video">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="about-full-protec">
								<h2 class="title-default">For Any Queries</h2>
								<ul>
									<li><span class="about-num"><span>1</span></span> <p>Call Our TOLL FREE number</p></li>
									<li><span class="about-num"><span>2</span></span> <p>We Will TRACK your order</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="about-full-protec">
						<h2 class="title-default"></h2><br>
						        <ul>
									<li><span class="about-num"><span>3</span></span> <p>Provide CONFIRMATION for you</p></li>
									<li><span class="about-num"><span>4</span></span> <p>DELIVER your order on time</p></li>
						        </ul>	
						</div>
					</div>
				</div>
				<div id="review" class="about-review">
					<h2 class="title-default">Customer Reviews</h2>
					<div class="list-about-review">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="item-about-review">
									<div class="about-review-thumb">
										<a><img src="{{asset('distweb/img/images/pages/cus1.jpg')}}" alt="" /></a>
									</div>
									<div class="about-info">
										<h3><a>Steve Johnson </a></h3>
										<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris consectetuer adipiscing</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="item-about-review">
									<div class="about-review-thumb">
										<a><img src="{{asset('distweb/img/images/pages/cus2.jpg')}}" alt="" /></a>
									</div>
									<div class="about-info">
										<h3><a>Madison Knight</a></h3>
										<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris consectetuer adipiscing</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="item-about-review">
									<div class="about-review-thumb">
										<a><img src="{{asset('distweb/img/images/pages/cus3.jpg')}}" alt="" /></a>
									</div>
									<div class="about-info">
										<h3><a>Charlie McGlynn</a></h3>
										<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris consectetuer adipiscing</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="item-about-review last-item">
									<div class="about-review-thumb">
										<a><img src="{{asset('distweb/img/images/pages/cus4.jpg')}}" alt="" /></a>
									</div>
									<div class="about-info">
										<h3><a>Alina Rouch</a></h3>
										<p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris consectetuer adipiscing</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Content -->



@section('page-script')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script>

@stop

	<div>
        @include('web.includes.footer')
    </div>
    <a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

@stop