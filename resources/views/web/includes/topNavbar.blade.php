<div id="header">
		<div class="header">
			<div class="top-header top-header4">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="account-login">
							@if ($name=session()->get('username') )
							<a href="/account">My Account({{$name}})</a>
							@endif
						{{--	@if (session()->has('user_access_token'))
								<a href="/account">My Account</a>
							@endif--}}
							@if (!session()->has('user_access_token'))
								<a href="/login">Login</a>
								<a href="/login">Register</a>
							@endif
							<a>Toll Free: <strong style="color:#f40;">1-888-383-3362</strong></a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 hidden-xs">
							<div class="currency-language">
								<!-- <div class="language-box">
									<a href="#" class="language-current"><img src="{{asset('distweb/img/images/flag/flag.png')}}" alt="" /><span>English</span></a> -->
									<!-- <ul class="language-list list-unstyled">
										<li><a href="#"><img src="{{asset('distweb/img/images/flag/flag-en.png')}}" alt="" /><span>English</span></a></li>
										<li><a href="#"><img src="{{asset('distweb/img/images/flag/flag-fr.png')}}" alt="" /><span>French</span></a></li>
										<li><a href="#"><img src="{{asset('distweb/img/images/flag/flag-gm.png')}}" alt="" /><span>German</span></a></li>
									</ul> -->
								<!-- </div> -->
								<div class="currency-box">

									<a href="#" class="currency-current"><span id="current-currency">USD</span></a>
									<ul class="currency-list list-unstyled">
									<li class="currency-item"><a href="#" ><span class="currency-index">$</span><span class="currency-type">USD</span></a></li>
									<li class="currency-item"><a href="#" ><span class="currency-index">₹</span><span class="currency-type">INR</span></a></li>
                                    <li class="currency-item"><a href="#" ><span class="currency-index">€</span><span class="currency-type">EUR</span></a></li>
									<li class="currency-item"><a href="#" ><span class="currency-index">£</span><span class="currency-type">GBP</span></a></li>

									</ul>
                                    

								</div>
								<div class="address-box">
									<a href="#" class="address-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
									<ul class="address-list list-unstyled">
										<li><p>4191 Naco Perrin Boulevard San Antonio, Texas 78217.</p></li>
										<!-- <li><p>Address 2: 8901 Marmora Road, Glasgow, D04  89GR.</p></li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Top Header -->
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="logo logo4">
								<h1 class="hidden">AntiVirus Shopping Site</h1>
								
								<a href="/"><img src="{{asset('distweb/img/avs2.png')}}" alt="" /></a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="smart-search smart-search4">
								<div class="select-category">
									<a class="category-toggle-link" href="#"><span>Search</span></a>
									<!-- <ul class="list-category-toggle list-unstyled">
										<li><a href="#">Softwares</a></li>
										<li><a href="#">Laptops</a></li>
										<li><a href="#">Printers</a></li>
										<li><a href="#">Accessories</a></li>
									</ul> -->
								</div>
								
								<form method="get" action="/allproductsgrid/" class="smart-search-form ajax-search">
               						<input type="text" name="search" id="search_box" class='search_box'/>
               						<input type="submit" value="" class="search_button" />
            					</form>
            					<!-- <div id="searchword">
            					Search results for <b><span class="searchword"></span></b></div> -->
            					<!-- <div id="flash"></div> -->
            					<div id="insert_search" class="list-product-search">
            					</div>
            					<!-- <ol id="insert_search" class="update" style="color:#990000;"></ol> -->
							</div>
						</div>
						{{--@if (session()->has('user_access_token'))--}}
						<div class="col-md-3 col-sm-3 col-xs-9">
							<div class="check-cart check-cart4">
								<div class="mini-cart-box">
									<a class="mini-cart-link" href="/cart" title="Cart">
										<span class="mini-cart-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
										<span class="mini-cart-number" id="mini-cart2">0</span>

									</a>
								</div>
								<!-- End Mini Cart -->
								
								<div class="checkout-box">
									<a href="#" class="checkout-link"><i class="fa fa-lock checkout-change" aria-hidden="true"></i></a>
									<ul class="list-checkout list-unstyled">
										<li><a href="/account"><i class="fa fa-user"></i> Account Info</a></li>
										<li><a href="/wishlist"><i class="fa fa-heart-o"></i> Wish List</a></li>
										<li><a href="/myorders"><i class="fa fa-toggle-on"></i> My Orders</a></li>
										<!-- <li><a href="/userlogin"><i class="fa fa-key" aria-hidden="true"></i>Sign in</a></li> -->
										@if (session()->has('user_access_token'))
											<li><a href="javascript:void(0);" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-key" aria-hidden="true"></i>Log out</a></li>
										@endif
										@if (!session()->has('user_access_token'))
										<li><a href="/login"><i class="fa fa-key" aria-hidden="true"></i>Login</a></li>
										@endif
										<!-- <li><a href="/checkout"><i class="fa fa-sign-in"></i> Checkout</a></li> -->
									</ul>
								</div>
								<!-- End Check Out Box -->
								<div class="wishlist-box">
								@if (session()->has('user_access_token'))
									<a href="/wishlist" class="wishlist-top-link" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									@endif
								</div>
								<!-- End Wishlist -->
							</div>
						</div>
						{{--@endif--}}
						
					  <div class="col-md-12 col-sm-12 col-xs-3">
							<nav class="main-nav main-nav4">
								<ul>
									<li class="menu-item-has-children">
										<a href="/">Home</a>
									</li>
									<li class="has-mega-menu" >
										<a href="/products/softwares">Software </a>
										<div class="mega-menu">
											<div class="row">
												<div class="col-md-4 col-sm-4 col-xs-4">
													<div class="mega-adv">
														<div class="banner-image">
															<a href="/products/softwares"><img src="{{asset('distweb/img/images/products/avastbanner.png')}}" alt="" /></a>
														</div>
														<div class="mega-adv-info">
															<h3 class="title18"><a href="/products/softwares">Softwares &amp; AntiVirus</a></h3>
															
														</div>
													</div>
												</div>
												<div class="col-md-8 col-sm-8 col-xs-8">
													<div class="mega-new-arrival">
														<h2 class="mega-menu-title">Featured Product</h2>
														<div class="mega-new-arrival-slider">
															 <div class="wrap-item featured-anti" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[768,2]]">
																 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</li>
									<li class="has-mega-menu">
										<a href="/products/laptops">Laptops</a>
										<div class="mega-menu">
											<div class="row">
												<div class="col-md-4 col-sm-4 col-xs-4">
													<div class="mega-adv">
														<div class="banner-image">
															<a href="/products/laptops"><img src="{{asset('distweb/img/images/products/lenovobanner.png')}}" alt="" /></a>
														</div>
														<div class="mega-adv-info">
															<h3 class="title18"><a href="/products/laptops">Laptops &amp; Notebooks</a></h3>
														</div>
													</div>
												</div>
												<div class="col-md-8 col-sm-8 col-xs-8">
													<div class="mega-new-arrival">
														<h2 class="mega-menu-title">Featured Product</h2>
														<div class="mega-new-arrival-slider">
															<div class="wrap-item featured-lap" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[768,2]]">
																
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</li>
									<li class="has-mega-menu">
										<a href="/products/printers">Printers</a>
										<div class="mega-menu">
											<div class="row">
												<div class="col-md-5 col-sm-4 col-xs-12">
													<div class="mega-adv">
														<div class="banner-image">
															<a href="/products/printers"><img src="{{asset('distweb/img/images/products/canonbanner.jpg')}}" alt="" /></a>
														</div>
														<div class="mega-adv-info">
															<h3 class="title18"><a href="/products/printers">Printers &amp; Scanners</a></h3>
														</div>
													</div>
												</div>
												<div class="col-md-7 col-sm-8 col-xs-12">
													<div class="mega-new-arrival">
														<h2 class="mega-menu-title">Featured Product</h2>
														<div class="mega-new-arrival-slider">
															<div class="wrap-item featured-print" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[768,2]]">
																
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</li>
									<li class="has-mega-menu">
										<a href="/products/accessories">Accessories</a>
										<div class="mega-menu">
											<div class="row">
												<div class="col-md-5 col-sm-4 col-xs-12">
													<div class="mega-adv">
														<div class="banner-image">
															<a href="/products/accessories"><img src="{{asset('distweb/img/images/products/sandiskbanner.jpg')}}" alt="" /></a>
														</div>
														<div class="mega-adv-info">
															<h3 class="title18"><a href="/products/accessories">Accessories</a></h3>
														</div>
													</div>
												</div>
												<div class="col-md-7 col-sm-8 col-xs-12">
													<div class="mega-new-arrival">
														<h2 class="mega-menu-title">Featured Product</h2>
														<div class="mega-new-arrival-slider">
															<div class="wrap-item featured-access" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[768,2]]">
																
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</li>
									
								</ul>
								<a href="#" class="toggle-mobile-menu"><span></span></a>
							</nav>
						</div>

						
					</div>

					
				</div>
			</div>
		</div>
		
		<div class="header-ontop">
			<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="logo">
						<a href="/"><img src="{{asset('distweb/img/avs2.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-8 col-sm-8 col-xs-12">
					<nav class="main-nav main-nav-ontop">
						<ul>
							<li class="menu-item-has-children">
								<a href="/">Home</a>
							</li>
							<li class="has-mega-menu">
								<a href="/products/softwares">Software </a>
								<div class="mega-menu">
									<div class="row">
										<div class="col-md-5 col-sm-4 col-xs-12">
											<div class="mega-adv">
												<div class="banner-image">
													<a href="/products/softwares"><img src="{{asset('distweb/img/images/products/avastbanner.png')}}" alt="" /></a>
												</div>
												<div class="mega-adv-info">
													<h3 class="title18"><a href="/products/softwares">AntiVirus &amp; Security</a></h3>
													<p class="desc">Our most advanced antivirus gives you our complete range of security and performance features. It protects your PC, home network, and passwords against zero-second threats with smart cloud-based detection.</p>
												</div>
											</div>
										</div>
										<div class="col-md-7 col-sm-8 col-xs-12">
											<div class="mega-new-arrival">
												<h2 class="mega-menu-title">Featured Product</h2>
												<div class="mega-new-arrival-slider">
													<div class="wrap-item featured-anti" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[768,2]]">
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</li>
							<li class="has-mega-menu">
								<a href="/products/laptops">Laptops</a>
								<div class="mega-menu">
									<div class="row">
										<div class="col-md-5 col-sm-4 col-xs-12">
											<div class="mega-adv">
												<div class="banner-image">
													<a href="products/laptops"><img src="{{asset('distweb/img/images/products/lenovobanner.png')}}" alt="" /></a>
												</div>
												<div class="mega-adv-info">
													<h3 class="title18"><a href="/products/laptops">Examplui coloniu tencaug</a></h3>
													<!-- <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
												</div>
											</div>
										</div>
										<div class="col-md-7 col-sm-8 col-xs-12">
											<div class="mega-new-arrival">
												<h2 class="mega-menu-title">Featured Product</h2>
												<div class="mega-new-arrival-slider">
													<div class="wrap-item featured-lap" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[768,2]]">
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</li>
							<li class="has-mega-menu">
								<a href="products/printers">Printers</a>
								<div class="mega-menu">
									<div class="row">
										<div class="col-md-5 col-sm-4 col-xs-12">
											<div class="mega-adv">
												<div class="banner-image">
													<a href="/products/printers"><img src="{{asset('distweb/img/images/products/canonbanner.jpg')}}" alt="" /></a>
												</div>
												<div class="mega-adv-info">
													<h3 class="title18"><a href="/products/printers">Printers &amp; Scanners</a></h3>
													<!-- <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
												</div>
											</div>
										</div>
										<div class="col-md-7 col-sm-8 col-xs-12">
											<div class="mega-new-arrival">
												<h2 class="mega-menu-title">Featured Product</h2>
												<div class="mega-new-arrival-slider">
													<div class="wrap-item featured-print" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[768,2]]">
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</li>
							<li class="has-mega-menu">
								<a href="/products/accessories">Accessories</a>
								<div class="mega-menu">
									<div class="row">
										<div class="col-md-5 col-sm-4 col-xs-12">
											<div class="mega-adv">
												<div class="banner-image">
													<a href="/products/accessories"><img src="{{asset('distweb/img/images/products/sandiskbanner.jpg')}}" alt="" /></a>
												</div>
												<div class="mega-adv-info">
													<h3 class="title18"><a href="/products/accessories">Accessories</a></h3>
													<!-- <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
												</div>
											</div>
										</div>
										<div class="col-md-7 col-sm-8 col-xs-12">
											<div class="mega-new-arrival">
												<h2 class="mega-menu-title">Featured Product</h2>
												<div class="mega-new-arrival-slider">
													<div class="wrap-item featured-access" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[768,2]]">
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Mega Menu -->
							</li>
							<!-- <li class="menu-item-has-children">
								<a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="/allproductsgrid">Products</a></li>
									<li><a href="/aboutus">About Us</a></li>
									<li><a href="/contactus">Contact Us</a></li>
								</ul>
							</li> -->
						</ul>
					</nav>
					<!-- End Main Nav -->
				</div>
				{{--@if (session()->has('user_access_token'))--}}
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="check-cart check-cart-ontop">
						<div class="checkout-box">
							<a href="javascript:void(0);" class="checkout-link"><i class="fa fa-lock" aria-hidden="true"></i></a>
							<ul class="list-checkout list-unstyled">
								<li><a href="/account"><i class="fa fa-user"></i> Account Info</a></li>
								<li><a href="/wishlist"><i class="fa fa-heart-o"></i> Wish List</a></li>
								<!-- <li><a href="#"><i class="fa fa-toggle-on"></i> Compare</a></li> -->
								<!-- <li><a href="/userlogin"><i class="fa fa-key" aria-hidden="true"></i>Sign in</a></li> -->
								@if (session()->has('user_access_token'))
											<li><a href="javascript:void(0);" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-key" aria-hidden="true"></i>Log out</a></li>
										@endif
										@if (!session()->has('user_access_token'))
										<li><a href="/login"><i class="fa fa-key" aria-hidden="true"></i>Login</a></li>
										@endif
								<!-- <li><a href="/checkout"><i class="fa fa-sign-in"></i> Checkout</a></li> -->
							</ul>
						</div>
						<!-- End Check Out Box -->
						<!-- <div class="search-hover-box">
							<a href="#" class="search-hover-link"><i class="fa fa-search" aria-hidden="true"></i></a>
							<form class="search-form-hover">
								<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Search..." type="text">
								<input value="" type="hidden">
							</form>
						</div> -->
						<!-- End Wishlist -->
						<div class="mini-cart-box">
							<a class="mini-cart-link" href="/cart">
								<span class="mini-cart-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
								<span class="mini-cart-number" id="mini-cart3">0</span>

							</a>
							<!--<div class="mini-cart-content">
								<ul class="list-mini-cart-item list-unstyled">
									 <li>
										<div class="mini-cart-edit">
											<a class="delete-mini-cart-item" href="#"><i class="fa fa-trash-o"></i></a>
											<a class="edit-mini-cart-item" href="#"><i class="fa fa-pencil"></i></a>
										</div>
										<div class="mini-cart-thumb">
											<a href="#"><img alt="" src="{{asset('distweb/img/images/home1/mini-cart-thumb.png')}}"></a>
										</div>
										<div class="mini-cart-info">
											<h3><a href="#">Burberry Pink &amp; black</a></h3>
											<div class="info-price">
												<span>$59.52</span>
												<del>$17.96</del>
											</div>
											<div class="qty-product">
												<span class="qty-down">-</span>
												<span class="qty-num">1</span>
												<span class="qty-up">+</span>
											</div>
										</div>
									</li> 
									<li>
										<div class="mini-cart-edit">
											<a class="delete-mini-cart-item" href="#"><i class="fa fa-trash-o"></i></a>
											<a class="edit-mini-cart-item" href="#"><i class="fa fa-pencil"></i></a>
										</div>
										<div class="mini-cart-thumb">
											<a href="#"><img alt="" src="{{asset('distweb/img/images/home1/mini-cart-thumb.png')}}"></a>
										</div>
										<div class="mini-cart-info">
											<h3><a href="#">Burberry Pink &amp; black</a></h3>
											<div class="info-price">
												<span>$59.52</span>
												<del>$17.96</del>
											</div>
											<div class="qty-product">
												<span class="qty-down">-</span>
												<span class="qty-num">1</span>
												<span class="qty-up">+</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="mini-cart-total">
									<label>TOTAL</label>
									<span>$24.28</span>
								</div>
								<div class="mini-cart-button">
									<a class="mini-cart-view" href="/cart">view my cart </a>
									 <a class="mini-cart-checkout" href="/checkout">Checkout</a>
								</div>
							</div>-->
						</div>
						<!-- End Mini Cart -->

					</div>
				</div>
				{{--@endif--}}
			</div>
			</div>
		</div>
		<!-- End Header On Top -->
	</div>
<form id="logout-form" action="/logout" method="POST" style="display: none;">
	@csrf
	<input type="hidden" name="token" value="{{ Session::get('user_access_token') }}">
</form>
<form id="setCurrency-form" action="/setCurrency" method="POST" style="display: none;">
	@csrf
	<input type="hidden" name="currency" id="currency" value="">
	<input type="hidden" name="currencySymbol" id="currencySymbol" value="">
	<input type="hidden" name="currencyValue" id="currencyValue" value="">
	<input type="hidden" name="token" value="{{ Session::get('user_access_token') }}">
</form>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/wow.js')}}"></script>
<!-- <script type="text/javascript" src="{{asset('distweb/js/libs/flipclock.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script> -->
<script src="{{asset('dist/js/sweetalert.min.js')}}"></script>
	<script type="text/javascript">
// my custom script
    var currencyUnit = '{{Session::get('unit')}}';
	var symbolUnit ='{{Session::get('symbol')}}';
	var currencyVal='{{Session::get('currencyValue')}}';
		currencyUnit = (currencyUnit!='')?currencyUnit:1;
		symbolUnit = (symbolUnit!='')?symbolUnit:'$';
		currencyVal = (currencyVal!='')?currencyVal:'USD';
		console.log(currencyVal);
		$("#current-currency").text(currencyVal);

$(document).ready(function() {



    
    var token='{{ Session::get('user_access_token') }}';
        if(token){
            console.log(token);
            getCountCart();
        }else{
            console.log("hello");
            getCountCartTemp();
        }

		$(document).on("click",".currency-item",function(){
			var to = ($(this).find('.currency-type').text());
			var symbol = ($(this).find('.currency-index').text());
			var currencyValue = ($(this).find('.currency-type').text());
			
	
			 convertCurrency(to,symbol,currencyValue);
		});

});

//currency convert
 function convertCurrency(to,symbol,currencyValue){
var endpoint = 'latest'
var access_key = '3240714215e8605b0f707808078ae2a5';
var from = 'USD';
var oneUnit=1;

// get the most recent exchange rates via the "latest" endpoint:
$.ajax({
    url: 'http://data.fixer.io/api/' + endpoint + '?access_key=' + access_key + '&symbols=' + from + "," + to ,
	type: 'GET',
    dataType: 'JSON',
    success: function(json) {

        oneUnit=(json.rates[to] / json.rates[from]).toFixed(2);
	
		$('#currency').val(oneUnit);
		
		$('#currencySymbol').val(symbol);
		$('#currencyValue').val(currencyValue);

		$('#setCurrency-form').submit();
	      
        }
       });
 }

function getCountCartTemp(){
        var token =  '{{ Session::get('user_access_token') }}';
            var url = '{{ url("/getCountCartTemp") }}';
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                success: function(jsonData) {
                    $('#mini-cart2').text(jsonData);
                    $('#mini-cart3').text(jsonData);                }
            });
    }
function getCountCart(){
        var token = '{{ Session::get('user_access_token') }}';
       console.log(token);
        $.ajax({
            url: "{{ url('/getCountCart') }}",
            type: 'GET',
            // dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {

            },
            success: function(data) {
                console.log("in getcount");
                console.log(data);
                $('#mini-cart2').text(data);
                $('#mini-cart3').text(data);
                
            }
        });
    }






function showToast(msg,title,status)
               {
                   var toastCount = 0;
                   var $showDuration = 400;
                   var $hideDuration = 1000;
                   var $timeOut = 7000;
                   var $extendedTimeOut = 1000;
                   var $showEasing = 'swing';
                   var $hideEasing = 'linear';
                   var $showMethod = 'fadeIn';
                   var $hideMethod = 'fadeOut';
                   var toastIndex = toastCount++;
                   toastr.options = {
                       "closeButton": true,
                       "debug": false,
                       "newestOnTop": true,
                       "progressBar": true,
                       "positionClass": "toast-top-right",
                       "preventDuplicates": false,
                       "onclick": null,
                       "showDuration": "300",
                       "hideDuration": "1000",
                       "timeOut": "5000",
                       "extendedTimeOut": "1000",
                       "showEasing": "swing",
                       "hideEasing": "linear",
                       "showMethod": "fadeIn",
                       "hideMethod": "fadeOut"
                   };

                   var $toast = toastr[status](title,msg); // Wire up an event handler to a button in the toast, if it exists
				   return $toast;
               }
    function logOut() {
    var token = '{{ Session::get('user_access_token') }}';
    console.log(token);
    $.ajax({
                url: "{{ url('/logout') }}",
                type: 'POST',
                // dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                data: {
                    '_method':'post',
                    "_token": "{{ csrf_token() }}",
				},
				success: function() {
				}
	});
	// swal("Good job!", "You clicked the button!", "success");

}

</script>
<script type="text/javascript">
	$(document).ready(function(){
		//fetchAllProducts();
		fetchProductsFeatured();
	});

	function fetchProductsFeatured(){
		 $.ajax({
            url: "{{ url('/featured') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                console.log(jsonData);
                if(jsonData.softwares!=undefined){
                	 for(var i in jsonData.softwares){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.softwares[i]['productImage'];
                	console.log(productImage);
                	$('.featured-anti').append('<div class="item">'+
                		'<div class="item-product-ajax item-product">'+
												'<div class="product-thumb">'+
													'<a href="/productdetail/'+jsonData.softwares[i]['id']+'" class="product-thumb-link">'+
														'<img src="'+productImage+'" alt="">'+
													'</a>'+
													'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>'+
													'<div class="product-extra-link">'+
														'<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>'+
														'<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
													'</div>'+
												'</div>'+
												'<div class="product-info">'+
													'<h3 class="product-title"><a href="/productdetail/'+jsonData.softwares[i]['id']+'">'+jsonData.softwares[i]['productName']+'</a></h3>'+
													'<div class="product-price">'+
													'<del><span>$'+jsonData.softwares[i]['productSku']+'</span></del>'+
													'<ins><span>$'+jsonData.softwares[i]['productPrice']+'</span></ins>'+
													'</div>'+
												'</div>'+
											'</div>'+
											'</div>');
                	}
                }
                if(jsonData.laptops!=undefined){
                	 for(var i in jsonData.laptops){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.laptops[i]['productImage'];
                	console.log(productImage);
                	$('.featured-lap').append('<div class="item">'+
                		'<div class="item-product-ajax item-product">'+
												'<div class="product-thumb">'+
													'<a href="/productdetail/'+jsonData.laptops[i]['id']+'" class="product-thumb-link">'+
														'<img src="'+productImage+'" alt="">'+
													'</a>'+
													'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>'+
													'<div class="product-extra-link">'+
														'<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>'+
														'<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
													'</div>'+
												'</div>'+
												'<div class="product-info">'+
													'<h3 class="product-title"><a href="/productdetail/'+jsonData.laptops[i]['id']+'">'+jsonData.laptops[i]['productName']+'</a></h3>'+
													'<div class="product-price">'+
													'<del><span>$'+jsonData.laptops[i]['productSku']+'</span></del>'+
													'<ins><span>$'+jsonData.laptops[i]['productPrice']+'</span></ins>'+
													'</div>'+
												'</div>'+
											'</div>'+
											'</div>');
                	}
                }
                if(jsonData.printers!=undefined){
                	 for(var i in jsonData.printers){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.printers[i]['productImage'];
                	console.log(productImage);
                	$('.featured-print').append('<div class="item">'+
                		'<div class="item-product-ajax item-product">'+
												'<div class="product-thumb">'+
													'<a href="/productdetail/'+jsonData.printers[i]['id']+'" class="product-thumb-link">'+
														'<img src="'+productImage+'" alt="">'+
													'</a>'+
													'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>'+
													'<div class="product-extra-link">'+
														'<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>'+
														'<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
													'</div>'+
												'</div>'+
												'<div class="product-info">'+
													'<h3 class="product-title"><a href="/productdetail/'+jsonData.printers[i]['id']+'">'+jsonData.printers[i]['productName']+'</a></h3>'+
													'<div class="product-price">'+
													'<del><span>$'+jsonData.printers[i]['productSku']+'</span></del>'+
													'<ins><span>$'+jsonData.printers[i]['productPrice']+'</span></ins>'+
													'</div>'+
												'</div>'+
											'</div>'+
											'</div>');
                	}
                }
                if(jsonData.accessories!=undefined){
                	 for(var i in jsonData.accessories){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.accessories[i]['productImage'];
                	console.log(productImage);
                	$('.featured-access').append('<div class="item">'+
                		'<div class="item-product-ajax item-product">'+
												'<div class="product-thumb">'+
													'<a href="/productdetail/'+jsonData.accessories[i]['id']+'" class="product-thumb-link">'+
														'<img src="'+productImage+'" alt="">'+
													'</a>'+
													'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>'+
													'<div class="product-extra-link">'+
														'<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>'+
														'<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
													'</div>'+
												'</div>'+
												'<div class="product-info">'+
													'<h3 class="product-title"><a href="/productdetail/'+jsonData.accessories[i]['id']+'">'+jsonData.accessories[i]['productName']+'</a></h3>'+
													'<div class="product-price">'+
													'<del><span>$'+jsonData.accessories[i]['productSku']+'</span></del>'+
													'<ins><span>$'+jsonData.accessories[i]['productPrice']+'</span></ins>'+
													'</div>'+
												'</div>'+
											'</div>'+
											'</div>');
                	}
                }
            }
        });
	}
</script>
<!-- <script type="text/javascript">
	$.ajax({
    dataType: "json",
    url: '/search',
    data: {keyword: $('#search').val()},
    success: function (result) {
        // update your page with the result json
        console.log(result);
    },
});
</script> -->
<!-- <script type="text/javascript">
$("#search").keyup(function(){
       var str=  $("#searchbtn").val();
       if(str == "") {
               $( "#txtHint" ).html("<b>Blogs information will be listed here...</b>"); 
       }
       else {
               $.get( "{{ url('search?id=') }}"+str, function( data ) {
                   $( "#txtHint" ).html(data);  
            });
       }
   });
</script> -->


<script type="text/javascript">




$(function() 
    {
    	$(document).on('.item-search-pro','click',function(){

			alert('HI');
			window.location = $(this).attr("rel");
  			return false;
		});
    $(document).on("keyup change",".search_box",function() 
    {
    	console.log('!');
    var search_word = $("#search_box").val();
    var dataString = 'search_word='+ search_word;
    
    if(search_word=='')
    {
    	// $("#flash").hide();
    }
    else
    {
    $.ajax({
    type: "GET",
    url: "{{ url('/search') }}",
    data: dataString,
    cache: false,
    beforeSend: function(html) 
    {
    	console.log(html);
    document.getElementById("insert_search").innerHTML = ''; 
    $("#flash").show();
    $("#searchword").show();
    $(".searchword").html(search_word);
    $("#flash").html('<img src="ajax-loader_2.gif" /> Loading Results...');
    },
    
    success: function(html){
    	console.log(html);
    	for(var i in html){
    		productImage='{{ asset('distweb/img/images/products')}}'+'/'+html[i]['productImage'];
    			$("#insert_search").show();
    			$("#insert_search").append('<div class="item-search-pro" rel="'+html[i]['id']+'">'+
    						'<div class="search-ajax-thumb product-thumb">'+
								'<a href="/productdetail/'+html[i]['id']+'" class="product-thumb-link"><img src="'+productImage+'" alt="" /></a>'+
							'</div>'+
							'<div class="search-ajax-title"><h3 class="title14">'+
								'<a href="/productdetail/'+html[i]['id']+'">'+html[i]['productName']+'</a>'+
								'</h3>'+
							'</div>'+
							'<div class="search-ajax-price">'+
								'<span>$'+html[i]['productPrice']+'</span>'+
							'</div>'+
						'</div>');
    			// $("#flash").hide();
			}
    	}
    });
    }
    return false;
    });
    });


	
</script>