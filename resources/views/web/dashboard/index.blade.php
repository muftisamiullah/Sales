@extends('web.layouts.sidebar')
@section('content')

<div class="wrapv fakeLoader">
<div id="content">
		<div class="container">
			<div class="content-top4">
				<div class="row">
				
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="content-top-left4">
							<div class="cat-icon4">
								<div class="wrap-cat-icon">
									<ul class="list-cat-icon">
										<li class="has-cat-mega cat-size-big">
											<a href="/products/softwares"><img src="{{asset('distweb/img/images/cat-icon/tablet.png')}}" alt=""><span>Software</span></a>
											<div class="cat-mega-menu cat-mega-style1">
												<div class="row">
														<div id="softsub">
														<div class="list-cat-mega-menu">
															<ul class="slider-list">
																
															</ul>
														</div>
														</div>
												</div>
											</div> 
										</li><br>
										<li class="has-cat-mega cat-size-big">
											<a href="/products/laptops"><img src="{{asset('distweb/img/images/cat-icon/monitor.png')}}" alt=""><span>Laptops</span></a>
											<div class="cat-mega-menu cat-mega-style1">
												<div class="row">
													<div id="lapsub">
														<div class="list-cat-mega-menu">
															<ul class="slider-list">

															</ul>
														</div>
													</div>
												</div>
											</div> 
										</li><br>
										<li class="has-cat-mega cat-size-big">
											<a href="/products/printers"><img src="{{asset('distweb/img/images/cat-icon/printer.png')}}" alt=""><span>Printers</span></a>
											<div class="cat-mega-menu cat-mega-style1">
												<div class="row">
													<div id="printsub">
														<div class="list-cat-mega-menu">
															<ul class="slider-list">

															</ul>
														</div>
													</div>
												</div>
											</div> 
										</li><br>
										<li class="has-cat-mega cat-size-big">
											<a href="/products/accessories"><img src="{{asset('distweb/img/images/cat-icon/headphones.png')}}" alt=""><span>Accessories</span></a>
											<div class="cat-mega-menu cat-mega-style1">
												<div class="row">
													<div id="accesssub">
														<div class="list-cat-mega-menu">
															<ul class="slider-list">

															</ul>
														</div>
													</div>
												</div>
											</div> 
										</li>
									</ul>
								</div>
							</div>
							<div class="banner-slider banner-slider4 banner-direct-nav">
								<div id="slider-top" class="wrap-item" data-pagination="false" data-autoplay="true" data-navigation="true" data-itemscustom="[[0,1]]" data-transition="fade">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- HOT DEALS -->


			<!-- <div class="category-color color-orange">
				<div class="header-cat-color">
					<h2 class="title18">Hot Deals</h2>
				</div>
				<div class="content-cat-color">
					<div class="clearfix">
						<div class="slider-cat-color" style="float: none; width: 100%;">
							<div id="hot-deals" class="wrap-item" data-itemscustom="[[0,1],[480,2],[768,2],[1024,3],[1200,5]]" data-pagination="false" data-navigation="true">

							</div>
						</div>
					</div>
				</div>
			</div> -->

			<div class="category-color color-orange">
				<div class="header-cat-color">
				 <div class="title-tabpro5">
					<h2 class="title18">Hot Deals</h2>
					<!-- <a href="/products/laptops" class="cat-color-link wobble-top">more</a> -->
							<div class="hotdeal5">
								<span>Ends in:</span>
								<div class="countdown-master"></div>
							</div>
				 </div>
				</div>
				<div class="content-cat-color">
					<div class="clearfix">
						<div class="slider-cat-color" style="float: none; width: 100%;">
							<div id="hot-deals" class="wrap-item" data-itemscustom="[[0,1],[480,2],[768,2],[1024,3],[1200,5]]" data-pagination="false" data-navigation="true">

							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- SOFTWARE CATEGORY -->


			<div class="category-color color-brown">
				<div class="header-cat-color">
					<h2 class="title18">Software</h2>
					<a href="/products/softwares" class="cat-color-link wobble-top">more</a>
				</div>
				<div class="content-cat-color">
					<div class="clearfix">
						<div class="banner-cat-color">
							<div class="banner-cat-color-thumb">
								<a href="/products/softwares"><img src="{{asset('distweb/img/images/products/nortonbanner.jpg')}}" height="172px" alt="" /></a>
							</div>
							<div class="banner-cat-color-info">
								<h2>Software</h2>
								<a href="/products/softwares" class="pulse-grow">Shop now!</a>
							</div>
						</div>
						<div class="slider-cat-color" >
							<div id="software" class="wrap-item" data-itemscustom="[[0,1],[480,2],[768,2],[1024,3],[1200,5]]" data-pagination="false" data-navigation="true">
								
							</div>
						</div>
					</div>
				</div>
				<!-- End Content Cat Color -->
				<div class="brand-cat-color">
					<div id="antibrands" class="wrap-item" data-autoplay="true" data-itemscustom="[[0,2],[560,3],[768,4],[980,5],[1200,6]]" data-pagination="false" data-autoplay="true">
						
					</div>
				</div>
				<!-- End Brand Cat Color -->
			</div>
			<!-- End Category Color -->


			<!-- BANNER ONE -->


			<div class="list-adv-color4">
				<div class="row">
					<div id="banneronef" class="col-md-6 col-sm-6 col-xs-12">
					</div>
					<div id="bannerones" class="col-md-6 col-sm-6 col-xs-12">
					</div>
				</div>
			</div>


			<!-- LAPTOP CATEGORY -->


			<div class="category-color color-blue">
				<div class="header-cat-color">
					<h2 class="title18">Laptops</h2>
					<a href="/products/laptops" class="cat-color-link wobble-top">more</a>
				</div>
				<div class="content-cat-color">
					<div class="clearfix">
						<div class="banner-cat-color">
							<div class="banner-cat-color-thumb">
								<a href="/products/laptops"><img src="{{asset('distweb/img/images/products/lap15.jpg')}}" height="125px" alt="" /></a>
							</div>
							<div class="banner-cat-color-info">
								<h2>MacBook</h2>
								<a href="products/laptops" class="pulse-grow">Shop now!</a>
							</div>
						</div>
						<div class="slider-cat-color">
							<div id="laptops" class="wrap-item" data-itemscustom="[[0,1],[480,2],[768,2],[1024,3],[1200,5]]" data-pagination="false" data-navigation="true">

							</div>
						</div>
					</div>
				</div>
				<!-- End Content Cat Color -->
				<div class="brand-cat-color">
					<div id="lapbrands" class="wrap-item" data-autoplay="true" data-itemscustom="[[0,2],[560,3],[768,4],[980,5],[1200,6]]" data-pagination="false" data-autoplay="true">
						
					</div>
				</div>
				<!-- End Brand Cat Color -->
			</div>
			<!-- End Category Color -->


			<!-- BEST SELLERS -->


			<div class="category-color color-orange">
				<div class="header-cat-color">
					<h2 class="title18">Best Sellers</h2>
					<!-- <a href="/products/laptops" class="cat-color-link wobble-top">more</a> -->
				</div>
				<div class="content-cat-color">
					<div class="clearfix">
						<div class="slider-cat-color" style="float: none; width: 100%;">
							<div id="best-seller" class="wrap-item" data-itemscustom="[[0,1],[480,2],[768,2],[1024,3],[1200,5]]" data-pagination="false" data-navigation="true">

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- PRINTER CATEGORY -->


			<div class="category-color color-green">
				<div class="header-cat-color">
					<h2 class="title18">Printers</h2>
					<a href="/products/printers" class="cat-color-link wobble-top">more</a>
				</div>
				<div class="content-cat-color">
					<div class="clearfix">
						<div class="banner-cat-color">
							<div class="banner-cat-color-thumb">
								<a href="/products/printers"><img src="{{asset('distweb/img/images/products/printer2.jpg')}}" height="129px" alt="" /></a>
							</div>
							<div class="banner-cat-color-info">
								<h2>Wireless Printer</h2>
								<a href="/products/printers" class="pulse-grow">Shop now!</a>
							</div>
						</div>
						<div class="slider-cat-color">
							<div id="printers" class="wrap-item" data-itemscustom="[[0,1],[480,2],[768,2],[1024,3],[1200,5]]" data-pagination="false" data-navigation="true">
								
							</div>
						</div>
					</div>
				</div>
				<!-- End Content Cat Color -->
				<div class="brand-cat-color">
					<div id="printbrands" class="wrap-item" data-autoplay="true" data-itemscustom="[[0,2],[560,3],[768,4],[980,5],[1200,6]]" data-pagination="false" data-autoplay="true">
						
					</div>
				</div>
				<!-- End Brand Cat Color -->
			</div>
			<!-- End Category Color -->


			<!-- BANNER TWO -->


			<div class="list-adv-color4">
				<div class="row">
					<div id="bannertwof" class="col-md-6 col-sm-6 col-xs-12">
					</div>
					<div id="bannertwos" class="col-md-6 col-sm-6 col-xs-12">
					</div>
				</div>
			</div>


			<!-- ACCESSORIES CATEGORY -->


			<div class="category-color color-purple">
				<div class="header-cat-color">
					<h2 class="title18">Accessories</h2>
					<a href="/products/accessories" class="cat-color-link wobble-top">more</a>
				</div>
				<div class="content-cat-color">
					<div class="clearfix">
						<div class="banner-cat-color">
							<div class="banner-cat-color-thumb">
								<a href="/products/accessories"><img src="{{asset('distweb/img/images/products/access4.jpg')}}" height="145px" alt="" /></a>
							</div>
							<div class="banner-cat-color-info">
								<h2>Pen Drives &amp; OTG</h2>
								<a href="/products/accessories" class="pulse-grow">Shop now!</a>
							</div>
						</div>
						<div class="slider-cat-color">
							<div id="accessories" class="wrap-item" data-itemscustom="[[0,1],[480,2],[768,2],[1024,3],[1200,5]]" data-pagination="false" data-navigation="true">
								
							</div>
						</div>
					</div>
				</div>
				<!-- End Content Cat Color -->
				<div class="brand-cat-color">
					<div id="accessbrands" class="wrap-item" data-autoplay="true" data-itemscustom="[[0,2],[560,3],[768,4],[980,5],[1200,6]]" data-pagination="false" data-autoplay="true">
						
					</div>
				</div>
				<!-- End Brand Cat Color -->
			</div>
			<!-- End Category Color -->
		</div>
</div>

@section('page-script')
    <!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
		$('.hotdeal5').hide();
		//fetchAllProducts();
		fetchSliderImg();
		fetchProductsByCategory();
		fetchProductsHotDeals();
		fetchBannerOne();
		fetchProductsBestSeller();
		fetchBannerTwo();
		fetchManufacturers();
		fetchSubCat();
		'{{ Session::forget('flag') }}';
		var sami  =  '{{ Session::get('done') }}';
	
		if (sami !='') {
			console.log(sami);
			addTempCart();
		}
		
 
		$(document).on("click",".addcart-link", function(){
			var token =  '{{ Session::get('user_access_token') }}';
			 if(token){
			addToCart($(this).attr('id'));
			getCountCart();
			 }
			 else{
                 addToCartTemp($(this).attr('id'));
             }
		});
		$(document).on("click",".wishlist-link", function(){
			addToWishlist($(this).attr('id'));
		});
	});

    function addTempCart(){
		var productId='{!! json_encode(Session::get('products_id')) !!}';
		console.log('thee');
		console.log(productId);
	
		var token ='{{ Session::get('user_access_token') }}';
		if(token && (productId!="[]")){
			console.log('i am in');
			var url = '{{ url("/addToOrdersTable") }}';
			var token ='{{ Session::get('user_access_token') }}';
			$.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
			headers: {"Authorization": 'Bearer ' + token},
			data:{
				// quantity,quantity,
				"_token": "{{ csrf_token() }}",
			},
            success: function(jsonData) {
				console.log(jsonData);
				if(jsonData){
					showToast("added to cart","", "success");
					}else{
					showToast("Something went wrong","", "error");
					}
				}
		});
		}
		else{
			console.log('i am out');
		}
	}
	function addToWishlist(id){
		var token ='{{ Session::get('user_access_token') }}';
		var url = '{{ url("/addToWishlist") }}';
		$.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
			headers: {"Authorization": 'Bearer ' + token},
			data:{
				id:id,
				"_token": "{{ csrf_token() }}",
			},
            success: function(jsonData) {
				console.log(jsonData);
				if(jsonData.message){
					showToast("Already in Wishlist","", "info");
					}else{
					showToast("Added to Wishlist","", "success");
					}
				}
		});
	}

	function addToCart(id){
			var token =  '{{ Session::get('user_access_token') }}';
			var url = '{{ url("/api/order") }}';
			$.ajax({
				url: url,
				type: 'POST',
				dataType: 'JSON',
				headers: {"Authorization": 'Bearer ' + token},
				data:{
					id:id,
				},
				success: function(jsonData) {
					console.log(jsonData);
					if(jsonData.message){
					showToast("Already in Cart","","info");
					}else{
					showToast("Added to Cart","","success");
					}
				}
			});
	}

	function addToCartTemp(id){	
		var url = '{{ url("/tempcart", "id") }}';
		url = url.replace('id', id);
		$.ajax({
			url: url,
			type: 'POST',
			dataType: 'JSON',
			
			data:{
				
				id:id,
				// quantity:quantity,
				// price:price,
				'_method':'post',
				"_token": "{{ csrf_token() }}",
		
			},
			success: function(jsonData) {
				console.log(jsonData);
				if(jsonData){
					showToast("added to cart","", "success");
				}else{
					showToast("Something went wrong","", "error");
					}
				}
		});
}
	// function fetchAllProducts(){
	// 	 $.ajax({
 //            url: "{{ url('/api/product') }}",
 //            type: 'GET',
 //            dataType: 'JSON',
 //            success: function(jsonData) {
 //                console.log(jsonData.data);
 //                for(var i in jsonData.data){
 //                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.data[i]['productImage'];
 //                	console.log(productImage);
 //                $('#antivirus').append('<div class="item-product item-product4">'+
 //                	'<div class="product-thumb">'+
	// 					'<a href="detail.html" class="product-thumb-link">'+
	// 					'<img src="'+productImage+'" alt="" />'+
	// 					'</a>'+
	// 					'<a href="quick-view.html" class="quickview-link plus fancybox.iframe">quick view</a>'+
	// 					'<div class="product-extra-link">'+
	// 						'<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>'+
	// 							'<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
	// 							'<a href="#" class="compare-link"><i class="fa fa-refresh" aria-hidden="true"></i></a>'+
	// 					'</div>'+
	// 					'</div>'+
	// 					'<div class="product-info">'+
	// 						'<h3 class="product-title"><a href="detail.html">'+jsonData.data[i]['productName']+'</a></h3>'+
	// 						'<div class="product-price">'+
	// 						'<del><span>$'+jsonData.data[i]['productSku']+'</span></del>'+
	// 						'<ins><span>$'+jsonData.data[i]['productPrice']+'</span></ins>'+
	// 						'</div>'+
	// 					'</div>'+
	// 				'</div>');
 //            }

 //            }
 //        });
	// } 

	function fetchSubCat(){
		$.ajax({
			url:"{{url('/subcatslider')}}",
			type: 'GET',
			dataType: 'JSON',
			success: function(jsonData){
				if(jsonData.softwares!=undefined){
					var dataTracker =[];
                    var map = new Map();
                    for (var _i = 0; _i < jsonData.softwares.length; _i++) {
                        var item = jsonData.softwares[_i];
						if (!map.has(item.subName)) {
                           	map.set(item.subName, true); // set any value to Map
                           	dataTracker.push(item);
                          }
                    }
					for(var j in dataTracker){
						var li ='';
						var subCat='';
						for(var i in jsonData.softwares){
							var manName = jsonData.softwares[i]['manufacturerName'];
		                	var manufacturerName=manName.charAt(0).toUpperCase() + manName.slice(1);
							if(dataTracker[j]['subName'] == jsonData.softwares[i]['subName']){
						 li += '<li><a href="/productsman/'+jsonData.softwares[i]['manufacturerName']+'">'+manufacturerName+'</a></li>';
						 }
						}
						subCat =dataTracker[j]['subName'];
						$("#softsub").append('<a href="/productsub/'+subCat+'">'+
												'<h2 class="title-cat-mega-menu">'+subCat+'</h2>'+
											'</a>'+
											'<div class="list-cat-mega-menu">'+
												'<ul class="slider-list">'+li+
												'</ul>'+
											'</div>');
					}
				}

				if(jsonData.laptops!=undefined){
					var dataTracker =[];
                    var map = new Map();
                    for (var _i = 0; _i < jsonData.laptops.length; _i++) {
                        var item = jsonData.laptops[_i];
						if (!map.has(item.subName)) {
                           	map.set(item.subName, true); // set any value to Map
                           	dataTracker.push(item);
                          }
                    }
					for(var j in dataTracker){
						var li ='';
						var subCat='';
						for(var i in jsonData.laptops){
							var manName = jsonData.laptops[i]['manufacturerName'];
		                	var manufacturerName=manName.charAt(0).toUpperCase() + manName.slice(1);
							if(dataTracker[j]['subName'] == jsonData.laptops[i]['subName']){
						 li += '<li><a href="/productsman/'+jsonData.laptops[i]['manufacturerName']+'">'+manufacturerName+'</a></li>';
						 }
						}
						subCat =dataTracker[j]['subName']
						$("#lapsub").append('<a href="/productsub/'+subCat+'">'+
											'<h2 class="title-cat-mega-menu">'+subCat+'</h2>'+
											'</a>'+
											'<div class="list-cat-mega-menu">'+
												'<ul class="slider-list">'+li+
												'</ul>'+
											'</div>');
					}
				}

				if(jsonData.printers!=undefined){
					var dataTracker =[];
                    var map = new Map();
                    for (var _i = 0; _i < jsonData.printers.length; _i++) {
                        var item = jsonData.printers[_i];
						if (!map.has(item.subName)) {
                           	map.set(item.subName, true); // set any value to Map
                           	dataTracker.push(item);
                          }
                    }
					for(var j in dataTracker){
						var li ='';
						var subCat='';
						for(var i in jsonData.printers){
							var manName = jsonData.printers[i]['manufacturerName'];
		                	var manufacturerName=manName.charAt(0).toUpperCase() + manName.slice(1);
							if(dataTracker[j]['subName'] == jsonData.printers[i]['subName']){
						 li += '<li><a href="/productsman/'+jsonData.printers[i]['manufacturerName']+'">'+manufacturerName+'</a></li>';
						 }
						}
						subCat =dataTracker[j]['subName']
						$("#printsub").append('<a href="/productsub/'+subCat+'">'+
												'<h2 class="title-cat-mega-menu">'+subCat+'</h2>'+
											'</a>'+
											'<div class="list-cat-mega-menu">'+
												'<ul class="slider-list">'+li+
												'</ul>'+
											'</div>');
					}
				}

				if(jsonData.accessories!=undefined){
					var dataTracker =[];
                    var map = new Map();
                    for (var _i = 0; _i < jsonData.accessories.length; _i++) {
                        var item = jsonData.accessories[_i];
						if (!map.has(item.subName)) {
                           	map.set(item.subName, true); // set any value to Map
                           	dataTracker.push(item);
                          }
                    }
					for(var j in dataTracker){
						var li ='';
						var subCat='';
						for(var i in jsonData.accessories){
							var manName = jsonData.accessories[i]['manufacturerName'];
		                	var manufacturerName=manName.charAt(0).toUpperCase() + manName.slice(1);
							if(dataTracker[j]['subName'] == jsonData.accessories[i]['subName']){
						 li += '<li><a href="/productsman/'+jsonData.accessories[i]['manufacturerName']+'">'+manufacturerName+'</a></li>';
						 }
						}
						subCat =dataTracker[j]['subName']
						$("#accesssub").append('<a href="/productsub/'+subCat+'">'+
												'<h2 class="title-cat-mega-menu">'+subCat+'</h2>'+
											'</a>'+
											'<div class="list-cat-mega-menu">'+
												'<ul class="slider-list">'+li+
												'</ul>'+
											'</div>');
					}
				}
			}
		});

	}

	function fetchManufacturers(){
	
		$.ajax({
            url: "{{ url('/getmanufacturers') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
            	for(var i in jsonData.softwares){
                var manufacturerImage='{{ asset('manufacturer/images')}}'+'/'+jsonData.softwares[i]['manufacturerImage'];
                	$('#antibrands').append('<div class="item-band-cat-color">'+
							'<a href="/productsman/'+jsonData.softwares[i]['manufacturerName']+'"><img src="'+manufacturerImage+'" alt="" /></a>'+
						'</div>');
        		}
                for(var i in jsonData.laptops){
                var manufacturerImage='{{ asset('manufacturer/images')}}'+'/'+jsonData.laptops[i]['manufacturerImage'];
                	$('#lapbrands').append('<div class="item-band-cat-color">'+
							'<a href="/productsman/'+jsonData.laptops[i]['manufacturerName']+'"><img src="'+manufacturerImage+'" alt="" /></a>'+
						'</div>');
                }
                for(var i in jsonData.printers){
                var manufacturerImage='{{ asset('manufacturer/images')}}'+'/'+jsonData.printers[i]['manufacturerImage'];
                	$('#printbrands').append('<div class="item-band-cat-color">'+
							'<a href="/productsman/'+jsonData.printers[i]['manufacturerName']+'"><img src="'+manufacturerImage+'" alt="" /></a>'+
						'</div>');
            	}
                for(var i in jsonData.accessories){
                var manufacturerImage='{{ asset('manufacturer/images')}}'+'/'+jsonData.accessories[i]['manufacturerImage'];
                	$('#accessbrands').append('<div class="item-band-cat-color">'+
							'<a href="/productsman/'+jsonData.accessories[i]['manufacturerName']+'"><img src="'+manufacturerImage+'" alt="" /></a>'+
						'</div>');
                }
        }
    });
	}

	function fetchProductsByCategory(){
	
		 $.ajax({
            url: "{{ url('/productbycategory') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
				
                if(jsonData.softwares!=undefined){
                	 for(var i in jsonData.softwares){
						console.log(jsonData.softwares[i]['productSku']);
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.softwares[i]['productImage'];
                $('#software').append('<div class="item-product item-product4">'+
                	'<div class="product-thumb" id="'+jsonData.softwares[i]['id']+'">'+
						'<a href="/productdetail/'+jsonData.softwares[i]['id']+'" class="product-thumb-link">'+
						'<img src="'+productImage+'" alt="" />'+
						'</a>'+
						'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>'+
						'<div class="product-extra-link">'+ 
							'<a href="javascript:void(0);" class="addcart-link" id="'+jsonData.softwares[i]['id']+'"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>'+
							'<a href="javascript:void(0);" class="wishlist-link" id="'+jsonData.softwares[i]['id']+'"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
								// '<a href="#" class="compare-link"><i class="fa fa-refresh" aria-hidden="true"></i></a>'+
						'</div>'+
						'</div>'+
						'<div class="product-info">'+
							'<h3 class="product-title"><a href="/productdetail/'+jsonData.softwares[i]['id']+'">'+jsonData.softwares[i]['productName']+'</a></h3>'+
							'<div class="product-price">'+	
                         (jsonData.softwares[i]['productSku'] != null  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData.softwares[i]['productSku'] * currencyUnit).toFixed(2)+'</span></del>' : '')+
                               '<ins><span>'+symbolUnit+(jsonData.softwares[i]['productPrice'] * currencyUnit ).toFixed(2)+'</span></ins>'+
							'</div>'+
						'</div>'+
					'</div>');
            	}
            }
				if(jsonData.laptops!=undefined){
                	 for(var i in jsonData.laptops){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.laptops[i]['productImage'];
                $('#laptops').append('<div class="item-product item-product4">'+
                	'<div class="product-thumb" id="'+jsonData.laptops[i]['id']+'">'+
						'<a href="/productdetail/'+jsonData.laptops[i]['id']+'" class="product-thumb-link">'+
						'<img src="'+productImage+'" alt="" />'+
						'</a>'+
						'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>'+
						'<div class="product-extra-link">'+
							'<a href="javascript:void(0);" class="addcart-link" id="'+jsonData.laptops[i]['id']+'"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>'+
								'<a href="javascript:void(0);" class="wishlist-link" id="'+jsonData.laptops[i]['id']+'"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
								// '<a href="#" class="compare-link"><i class="fa fa-refresh" aria-hidden="true"></i></a>'+
						'</div>'+
						'</div>'+
						'<div class="product-info">'+
							'<h3 class="product-title"><a href="/productdetail/'+jsonData.laptops[i]['id']+'">'+jsonData.laptops[i]['productName']+'</a></h3>'+
							'<div class="product-price">'+
							(jsonData.laptops[i]['productSku'] != null  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData.laptops[i]['productSku'] * currencyUnit).toFixed(2)+'</span></del>' : '')+
							'<ins><span>'+symbolUnit+(jsonData.laptops[i]['productPrice'] *  currencyUnit).toFixed(2)+'</span></ins>'+
						
							
							'</div>'+
						'</div>'+
					'</div>');
            }
                }
				 if (jsonData.printers != undefined) {
                    for (var i in jsonData.printers) {
                    	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.printers[i]['productImage'];
                        $('#printers').append('<div class="item-product item-product4">' +
                            '<div class="product-thumb" id="'+jsonData.printers[i]['id']+'">' +
                            '<a href="/productdetail/' + jsonData.printers[i]['id'] +
                            '" class="product-thumb-link">' +
                            '<img src="' + productImage + '" alt="" />' +
                            '</a>' +
                            '<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>' +
                            '<div class="product-extra-link">' +
                            '<a href="javascript:void(0);" class="addcart-link" id="'+jsonData.printers[i]['id']+'"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>' +
                            '<a href="javascript:void(0);" class="wishlist-link" id="'+jsonData.printers[i]['id']+'"><i class="fa fa-heart" aria-hidden="true"></i></a>' +
                            // '<a href="#" class="compare-link"><i class="fa fa-refresh" aria-hidden="true"></i></a>' +
                            '</div>' +
                            '</div>' +
                            '<div class="product-info">' +
                            '<h3 class="product-title"><a href="/productdetail/' + jsonData.printers[i][
                                'id'
                            ] + '">' + jsonData.printers[i]['productName'] + '</a></h3>' +
                            '<div class="product-price">' +
							(jsonData.printers[i]['productSku'] != null  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData.printers[i]['productSku'] * currencyUnit).toFixed(2)+'</span></del>' : '')+
                               '<ins><span>'+symbolUnit+(jsonData.printers[i]['productPrice'] * currencyUnit).toFixed(2)+'</span></ins>'+
						
                            '</div>' +
                            '</div>' +
                            '</div>');
                    }
                }
				if (jsonData.accessories != undefined) {
                    for (var i in jsonData.accessories) {
                    	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.accessories[i]['productImage'];
                        $('#accessories').append('<div class="item-product item-product4">' +
                            '<div class="product-thumb" id="'+jsonData.accessories[i]['id']+'">' +
                            '<a href="/productdetail/' + jsonData.accessories[i]['id'] +
                            '" class="product-thumb-link">' +
                            '<img src="' + productImage + '" alt="" />' +
                            '</a>' +
                            '<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>' +
                            '<div class="product-extra-link">' +
                            '<a href="javascript:void(0);" class="addcart-link" id="'+jsonData.accessories[i]['id']+'"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>' +
                            '<a href="javascript:void(0);" class="wishlist-link" id="'+jsonData.accessories[i]['id']+'"><i class="fa fa-heart" aria-hidden="true"></i></a>' +
                            // '<a href="#" class="compare-link"><i class="fa fa-refresh" aria-hidden="true"></i></a>' +
                            '</div>' +
                            '</div>' +
                            '<div class="product-info">' +
                            '<h3 class="product-title"><a href="/productdetail/' + jsonData.accessories[i][
                                'id'
                            ] + '">' + jsonData.accessories[i]['productName'] + '</a></h3>' +
                            '<div class="product-price">' +
							(jsonData.accessories[i]['productSku'] != null  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData.accessories[i]['productSku'] * currencyUnit).toFixed(2)+'</span></del>' : '')+
                            '<ins><span>'+symbolUnit+(jsonData.accessories[i]['productPrice'] * currencyUnit).toFixed(2)+'</span></ins>'+
						
                            '</div>' +
                            '</div>' +
                            '</div>');
                    }
                }
            }
        });
	}



	function fetchProductsHotDeals(){
		 $.ajax({
            url: "{{ url('/hotdeals') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                if(jsonData!=undefined){
                	 for(var i in jsonData){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData[i]['productImage'];
                	$('#hot-deals').append('<div class="owl-item active" style="width: 308px;">'+
							'<div class="item-product5 item-product">'+
							'<div class="product-thumb">'+
								'<a href="/productdetail/'+jsonData[i]['id']+'" class="product-thumb-link">'+
									'<img src="'+productImage+'" height="170px" alt="">'+
								'</a>'+
								'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>'+
								'<div class="product-extra-link">'+
									'<a href="javascript:void(0);" class="addcart-link" id="'+jsonData[i]['id']+'"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>'+
									'<a href="javascript:void(0);" class="wishlist-link" id="'+jsonData[i]['id']+'"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
								'</div>'+
							'</div>'+
							'<div class="product-info">'+
								'<h3 class="product-title"><a href="/productdetail/'+jsonData[i]['id']+'">'+jsonData[i]['productName']+'</a></h3>'+
								'<div class="product-price">'+
								(jsonData[i]['productSku'] != null  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData[i]['productSku'] * currencyUnit).toFixed(2)+'</span></del>' : '')+
                               '<ins><span>'+symbolUnit+(jsonData[i]['productPrice'] * currencyUnit).toFixed(2)+'</span></ins>'+
						
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>');
                	}
                }
            }
        });
	}

	function fetchProductsBestSeller(){
		 $.ajax({
            url: "{{ url('/bestsell') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                             if(jsonData!=undefined){
                	 for(var i in jsonData){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData[i]['productImage'];
                	
                	$('#best-seller').append('<div class="item-product-ajax item-product">'+
								'<div class="product-thumb">'+
									'<a href="/productdetail/'+jsonData[i]['id']+'" class="product-thumb-link">'+
										'<img src="'+productImage+'" alt=""/>'+
									'</a>'+
									'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe">quick view</a>'+
									'<div class="product-extra-link">'+
										'<a href="javascript:void(0);" class="addcart-link" id="'+jsonData[i]['id']+'"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>'+
										'<a href="javascript:void(0);" class="wishlist-link" id="'+jsonData[i]['id']+'"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
										// '<a href="#" class="compare-link"><i class="fa fa-refresh" aria-hidden="true"></i></a>'+
									'</div>'+
								'</div>'+
								'<div class="product-info">'+
									'<h3 class="product-title"><a href="/productdetail/'+jsonData[i]['id']+'">'+jsonData[i]['productName']+'</a></h3>'+
									'<div class="product-price">'+
									(jsonData[i]['productSku'] != null  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData[i]['productSku'] * currencyUnit).toFixed(2)+'</span></del>' : '')+
                               '<ins><span>'+symbolUnit+(jsonData[i]['productPrice'] * currencyUnit).toFixed(2)+'</span></ins>'+
						
									'</div>'+
								'</div>'+
							'</div>');
                	}
                }
            }
        });
	}
	function fetchBannerOne(){
		$.ajax({
            url: "{{ url('/banneronefirst') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                if(jsonData!=undefined){
                	 for(var i in jsonData){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData[i]['productImage'];
                	var str=jsonData[i]['productCartDesc'];
                	var dots="...";
                	var productCartDesc=str.substr(0,100) + dots;
		$('#banneronef').append('<div class="item-adv-color info-left color-maroon">'+
							'<div class="adv-color-thumb">'+
								'<a href="/productdetail/'+jsonData[i]['id']+'"><img src="'+productImage+'" alt="" /></a>'+
							'</div>'+
							'<div class="adv-color-info">'+
								'<div class="inner-adv-color-info">'+
									'<h2>'+jsonData[i]['productName']+'</h2>'+
									'<p>'+productCartDesc+'</p>'+
									'<a class="shopnow" href="/productdetail/'+jsonData[i]['id']+'"><span>Shop now</span></a>'+
								'</div>'+
							'</div>'+
						'</div>');
					}
                }
            }
        });
        $.ajax({
            url: "{{ url('/banneronesecond') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                if(jsonData!=undefined){
                	 for(var i in jsonData){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData[i]['productImage'];
                	var str=jsonData[i]['productCartDesc'];
                	var dots="...";
                	var productCartDesc=str.substr(0,100) + dots;
		$('#bannerones').append('<div class="item-adv-color info-right color-cyan">'+
							'<div class="adv-color-thumb">'+
								'<a href="/productdetail/'+jsonData[i]['id']+'"><img src="'+productImage+'" alt="" /></a>'+
							'</div>'+
							'<div class="adv-color-info">'+
								'<div class="inner-adv-color-info">'+
									'<h2>'+jsonData[i]['productName']+'</h2>'+
									'<p>'+productCartDesc+'</p>'+
									'<a class="shopnow" href="/productdetail/'+jsonData[i]['id']+'"><span>Shop now</span></a>'+
								'</div>'+
							'</div>'+
						'</div>');
					}
                }
            }
        });
	}
	function fetchBannerTwo(){
		$.ajax({
            url: "{{ url('/bannertwofirst') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                if(jsonData!=undefined){
                	 for(var i in jsonData){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData[i]['productImage'];
                	var str=jsonData[i]['productCartDesc'];
                	var dots="...";
                	var productCartDesc=str.substr(0,100) + dots;
		$('#bannertwof').append('<div class="item-adv-color info-left color-yellow">'+
							'<div class="adv-color-thumb">'+
								'<a href="/productdetail/'+jsonData[i]['id']+'"><img src="'+productImage+'" alt="" /></a>'+
							'</div>'+
							'<div class="adv-color-info">'+
								'<div class="inner-adv-color-info">'+
									'<h2>'+jsonData[i]['productName']+'</h2>'+
									'<p>'+productCartDesc+'</p>'+
									'<a class="shopnow" href="/productdetail/'+jsonData[i]['id']+'"><span>Shop now</span></a>'+
								'</div>'+
							'</div>'+
						'</div>');
					}
                }
            }
        });
        $.ajax({
            url: "{{ url('/bannertwosecond') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                if(jsonData!=undefined){
                	 for(var i in jsonData){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData[i]['productImage'];
                	var str=jsonData[i]['productCartDesc'];
                	var dots="...";
                	var productCartDesc=str.substr(0,100) + dots;
		$('#bannertwos').append('<div class="item-adv-color info-right color-blue">'+
							'<div class="adv-color-thumb">'+
								'<a href="/productdetail/'+jsonData[i]['id']+'"><img src="'+productImage+'" alt="" /></a>'+
							'</div>'+
							'<div class="adv-color-info">'+
								'<div class="inner-adv-color-info">'+
									'<h2>'+jsonData[i]['productName']+'</h2>'+
									'<p>'+productCartDesc+'</p>'+
									'<a class="shopnow" href="/productdetail/'+jsonData[i]['id']+'"><span>Shop now</span></a>'+
								'</div>'+
							'</div>'+
						'</div>');
					} 
                }
            }
        });
	}
	function fetchSliderImg(){
		 $.ajax({
            url: "{{ url('/sliderimg') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData){
            	console.log(jsonData);
            	if(jsonData!=undefined){
                	 for(var i in jsonData){
                	var sliderImage='{{ asset('distweb/img/images/banners')}}'+'/'+jsonData[i]['slidersImage'];
                	console.log(sliderImage);
                	$('#slider-top').append('<div class="item-banner4">'+
										'<div class="banner-thumb">'+
											'<img src="'+sliderImage+'" height=450px alt="" />'+
										'</div>'+
										'<div class="banner-info animated" data-animated="bounceInLeft">'+
											'<h2>'+jsonData[i]['slidersTitle']+'</h2>'+
											'<h3><strong>'+jsonData[i]['slidersGroup']+'</strong></h3>'+
										'</div>'+
									'</div>');

              }
           }
        }
  	  });
	}
</script>

<script type="text/javascript" src="{{asset('distweb/js/libs/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/flipclock.js')}}"></script>

<script type="text/javascript" src="{{asset('distweb/js/toastr.min.js')}}"></script>
<!-- <script type="text/javascript" src="{{asset('distweb/js/fakeLoader.min.js')}}"></script> -->
<script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script>
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('distweb/css/fakeLoader.css') }}"/> -->




<script>
//Flash Count Down

//  jQuery(document).ready(function(){
// 	if($('.countdown-master').length>0){
// 		    var date = new Date(2019, 2, 21, 0,0,0,0);
//     var today = new Date();

//     var dif = today.getTime() - date.getTime();
//     console.log(dif);

//     var timeLeft = Math.abs(dif/1000)/60;
//     console.log(timeLeft);


//     var clock = $('.countdown-master').FlipClock({
//         autoStart: false,
//         clockFace: 'DailyCounter',
//         countdown: true
//     });

//     clock.setTime(timeLeft);
//     clock.start();
// 	}
// 	// var date1=15-02-2019 11:10:05;
// 	// var date2=16-02-2019 11:10:05;
// 	// var hours = Math.abs(date2 - date1) / 1000;
// 	// console.log(hours);
// });
var clock;

$(document).ready(function() {
	
	fetchTimer();
	
	function fetchTimer() {
    var token = '{{ Session::get('user_access_token') }}';
    var url = '{{ url("/gettimer") }}';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'JSON',
        headers: {
            "Authorization": 'Bearer ' + token
        },
        data: {},
        success: function(jsonData) {
          
          if (jsonData[0]['status']) {
			$('.hotdeal5').show();
              runTimer(jsonData[0]['countDown']);
          }//if close
		  else{
			  $('.hotdeal5').hide();
		  }
            
         
        }
		
    });
	//
}
	function runTimer(timerDate){
		
    

  // Grab the current date
  var now = new Date();
  var currentDate = new Date(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate(),  now.getUTCHours(), now.getUTCMinutes(), now.getUTCSeconds());
  currentDate.setHours(currentDate.getHours() - 7);
console.log(currentDate);
  // Set some date in the future. In this case, it's always Jan 1
  //get month
  var date = new Date(timerDate);
  var month = date.getMonth();
  var date= date.getDate();
  
  
  var futureDate = new Date(currentDate.getFullYear() + 0, +month ,+date , 0, 0);
  console.log("futureDate");
console.log(futureDate);
  // Calculate the difference in seconds between the future and current date
  var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

  

  // Limit time difference to zero
  if (diff < 0) {
    diff = 0;
  }

  // Instantiate a coutdown FlipClock
  clock = $('.countdown-master').FlipClock(diff, {
    clockFace: 'DailyCounter',
    countdown: true,
    showSeconds: true,
    callbacks: {
      stop: function() {
        $('.message').html('The clock has stopped!');
      }
    }
  });
  clock.start();
	}
});


  

</script>
@stop

	<div>
        @include('web.includes.footer')
    </div>
    <a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>


@stop
