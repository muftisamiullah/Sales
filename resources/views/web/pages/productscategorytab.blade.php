@extends('web.layouts.sidebar')
@section('content')

<div id="content">
		<div class="content-page">
			<div class="container">

				<div id="catbanner" class="banner-shop">
					<!-- <div class="banner-shop-thumb">
						<a href="#"><img src="{{asset ('distweb/img/images/shop/bn-grid-boxed.jpg') }}" alt="" /></a>
					</div>
					<div class="banner-shop-info text-center">
						<h2>AntiVirus Laptops</h2>
						<h2>Printers Accessories</h2>
					</div> -->
				</div>
				<!-- End Banner -->
				@include('web.includes.breadcrumbs')
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="sidebar sidebar-left">
							<div class="widget widget-filter-price">
								<h2 class="widget-title title14">Price</h2>
								<div class="widget-content">
									<div class="range-filter">
										<div id="slider-range"></div>
										<div id="amount"></div>
										<button class="btn-filter">Filter</button>
									</div>
								</div>
							</div>

							<div class="widget widget-seller">
								<h2 class="widget-title title14">best sellers</h2>
								<div class="widget-content">
									<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1]]">
										<div id="best" class="list-pro-seller">	
										</div>									
									</div>
								</div>
							</div>
							<!-- End widget -->
						</div>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12">
						<div class="content-grid-boxed">
							<div class="sort-pagi-bar clearfix">
								<!-- <div class="view-type pull-left">
									<a href="/products/antivirus" class="grid-view active"></a>
									<a href="/products/antivirus" class="list-view"></a>
								</div> -->
								<div class="sort-paginav pull-right">
									<div class="sort-bar select-box">
										<label>Sort By:</label>
										<select>
											<option value="">position</option>
											<option value="">price</option>
										</select>
									</div>
									<!-- <div class="show-bar select-box">
										<label>Show:</label>
										<select>
											<option value="">20</option>
											<option value="">12</option>
											<option value="">24</option>
										</select>
									</div> -->
									<!-- <div class="pagi-bar">
										<a href="#" class="current-page">1</a>
										<a href="#">2</a>
										<a href="#" class="next-page"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
									</div> -->
								</div>
							</div>
							<!-- End Sort PagiBar -->
							<div class="grid-pro-color">
								<div id="productscatgrid" class="row">
									
								</div>
								<div class="pagi-bar pagi-bar-new bottom">
									<a class="next-page" id="prepage"><i aria-hidden="true" class="fa fa-caret-left"> Previous</i></a>
									<a class="next-page" id="nextpage">Next <i aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
							<!-- End List Pro color -->
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- End Content -->

@section('page-script')
    <!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function(){
		fetchAllProducts();
		fetchCategoryImage();
		fetchProductsBestSeller();
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
		console.log(id);
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

	function fetchAllProducts(){
		 var $catName = "{{$cat}}";
		 $.ajax({
            url: "{{ url('/productbycategory') }}",
            type: 'GET',
            dataType: 'JSON',

            success: function(jsonData) {
            	var table=$('#productscatgrid');
            	var json = jsonData[$catName];
            	var max_size=json.length;
            	console.log(json);
     			 var sta = 0;
     			 var elements_per_page = 8;
     			 var limit = elements_per_page;
     			 if(limit > max_size) limit = max_size;
     			 console.log(limit);
     			 goFun(sta,limit);
     			 function goFun(sta,limit) {
                if(jsonData.hasOwnProperty($catName) && jsonData[$catName]!=undefined){
                	for (var i =sta ; i < limit; i++){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData[$catName][i]['productImage'];
                $('#productscatgrid').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">'+
								'<div class="item-pro-color">'+
									'<div class="product-thumb">'+
										'<a href="/productdetail/'+jsonData[$catName][i]['id']+'" class="product-thumb-link">'+
											'<img data-color="black" class="active" src="'+productImage+'" alt="">'+
										'</a>'+
										'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe"><span>quick view</span></a>'+
									'</div>'+
									'<br>'+
									'<div class="product-info">'+
										'<h3 class="product-title"><a href="/productdetail/'+jsonData[$catName][i]['id']+'">'+jsonData[$catName][i]['productName']+'</a></h3>'+
										'<div class="product-price">'+
										(jsonData[$catName][i]['productSku'] != null  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData[$catName][i]['productSku'] * currencyUnit).toFixed(2)+'</span></del>' : '')+
                               '<ins><span>'+symbolUnit+(jsonData[$catName][i]['productPrice'] * currencyUnit).toFixed(2)+'</span></ins>'+
						
										'</div>'+
										'<div class="product-extra-link">'+
											'<a href="javascript:void(0);" class="addcart-link" id="'+jsonData[$catName][i]['id']+'"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to Cart</span></a>'+
											'<a href="javascript:void(0);" class="wishlist-link" id="'+jsonData[$catName][i]['id']+'"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>'+
										'</div>'+
									'</div>'+
								'</div>'+
							'</div>');
            		}
        		}
        	}
        	$('#nextpage').click(function(){
        		var next = limit;
        		if(max_size>next) {
        		limit = limit + $('.item-pro-color').length;
        		if(limit>max_size){
        			limit =max_size;
        		}
        		table.empty();
        		console.log(next +' -next- '+limit);
        		goFun(next,limit);
        		}
      		});

      		$('#prepage').click(function(){
        		var pre = limit-($('.item-pro-color').length + elements_per_page);
        		if(pre<0){
        			//console.log(pre);
        			limit+=Math.abs(pre);
        			pre = 0;
        		}
        		if(pre>=0) {
        		limit = limit - $('.item-pro-color').length;
        		console.log(pre +' -pre- '+limit);
        		table.empty();
        		goFun(pre,limit); 
        		}
      		});
        	// $('#nextpage').click(function(){

        	// 	var next = limit;
        	// 	if(max_size>=next) {
        	// 	limit = limit+elements_per_page;
        	// 	table.empty();
        	// 	console.log(next +' -next- '+limit);
        	// 	goFun(next,limit);
        	// 	}
      			// });

      			// $('#prepage').click(function(){
        	// 	var pre = limit-(2*elements_per_page);
        	// 	if(pre>=0) {
        	// 	limit = limit-elements_per_page;
        	// 	console.log(pre +' -pre- '+limit);
        	// 	table.empty();
        	// 	goFun(pre,limit); 
        	// 	}
      			// });
        }
        });
    } 

    function fetchProductsBestSeller(){
		 $.ajax({
            url: "{{ url('/bestsell') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                // console.log(jsonData);
                if(jsonData!=undefined){
                	 for(var i in jsonData){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData[i]['productImage'];
                	var str=jsonData[i]['productName'];
                	var dots="...";
                	var productName=str.substr(0,14) + dots;
                	$('#best').append('<div class="item-pro-seller">'+
												'<div class="product-thumb">'+
													'<a href="/productdetail/'+jsonData[i]['id']+'" class="product-thumb-link"><img src="'+productImage+'" alt="" /></a>'+
												'</div>'+
												'<div class="product-info">'+
													'<h3 class="product-title"><a href="/productdetail/'+jsonData[i]['id']+'">'+productName+'</a></h3>'+
														'<br>'+
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
	function fetchCategoryImage(){
		var $catName = "{{$cat}}";
		// console.log($catName);
		$.ajax({
            url: "{{ url('/categoryimages') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
            	// console.log(jsonData);
            	if(jsonData.hasOwnProperty($catName) && jsonData[$catName]!=undefined){
                for(var i in jsonData[$catName]){
                	var categoryImage='{{ asset('distweb/img/images/banners')}}'+'/'+jsonData[$catName][i]['catImage'];
                $('#catbanner').append('<div class="banner-shop-thumb">'+
											'<img src="'+categoryImage+'" alt="" />'+
										'</div>'+
										'<div class="banner-shop-info text-center">'+
											'<h1><strong>'+jsonData[$catName][i]['catImageTitle']+'</strong></h1>'+
											'<h3><strong>'+jsonData[$catName][i]['catImageGroup']+'</strong></h3>'+
										'</div>');
            		}
        		}
            }
           });
	}
</script>
<script type="text/javascript" src="{{asset('distweb/js/toastr.min.js')}}"></script>

@stop

	<div>
        @include('web.includes.footer')
    </div>
    <a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

@stop