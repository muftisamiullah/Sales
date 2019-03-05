@extends('web.layouts.sidebar')
@section('content')

<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="banner-shop">
					<div class="banner-shop-thumb">
						<a href="#"><img src="{{asset ('distweb/img/images/shop/bn-grid-boxed.jpg') }}" alt="" /></a>
					</div>
					<div class="banner-shop-info text-center">
						<h2>Software Laptops</h2>
						<h2>Printers Accessories</h2>
					</div>
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
											<!-- <div class="item-pro-seller">
												<div class="product-thumb">
													<a href="#" class="product-thumb-link"><img src="images/photos/homeware/8.jpg" alt="" /></a>
												</div>
												<div class="product-info">
													<h3 class="product-title"><a href="detail.html">new favorite</a></h3>
													<div class="product-price">
														<ins><span>$360.00</span></ins>
														<del><span>$400.00</span></del>
													</div>
													<div class="product-rate">
														<div style="width:90%" class="product-rating"></div>
													</div>
												</div>
											</div>	
											<div class="item-pro-seller">
												<div class="product-thumb">
													<a href="#" class="product-thumb-link"><img src="images/photos/homeware/2.jpg" alt="" /></a>
												</div>
												<div class="product-info">
													<h3 class="product-title"><a href="detail.html">new favorite</a></h3>
													<div class="product-price">
														<ins><span>$360.00</span></ins>
														<del><span>$400.00</span></del>
													</div>
													<div class="product-rate">
														<div style="width:90%" class="product-rating"></div>
													</div>
												</div>
											</div>	
											<div class="item-pro-seller">
												<div class="product-thumb">
													<a href="#" class="product-thumb-link"><img src="images/photos/homeware/9.jpg" alt="" /></a>
												</div>
												<div class="product-info">
													<h3 class="product-title"><a href="detail.html">new favorite</a></h3>
													<div class="product-price">
														<ins><span>$360.00</span></ins>
														<del><span>$400.00</span></del>
													</div>
													<div class="product-rate">
														<div style="width:90%" class="product-rating"></div>
													</div>
												</div>
											</div> -->		
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
								<div id="productsmangrid" class="row">
									
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
		fetchProductsBestSeller();
	});

	function fetchAllProducts(){
		 var $manName = "{{$man}}";
		 console.log($manName);
		 $.ajax({
            url: "{{ url('/productbymanufacturer') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
            	var table=$('#productsmangrid');
            	var json = jsonData[$manName];
            	var max_size=json.length;
     			 var sta = 0;
     			 var elements_per_page = 8;
     			 var limit = elements_per_page;
     			 goFun(sta,limit);
     			 function goFun(sta,limit) {
                if(jsonData.hasOwnProperty($manName) && jsonData[$manName]!=undefined){
                	for (var i =sta ; i < limit; i++){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData[$manName][i]['productImage'];
                	console.log(productImage);
                $('#productsmangrid').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">'+
								'<div class="item-pro-color">'+
									'<div class="product-thumb">'+
										'<a href="/productdetail/'+jsonData[$manName][i]['id']+'" class="product-thumb-link">'+
										'<img data-color="black" class="active" src="'+productImage+'" alt="">'+
										'</a>'+
										'<a href="'+productImage+'" class="quickview-link plus fancybox.iframe"><span>quick view</span></a>'+
									'</div>'+
									'<br>'+
									'<div class="product-info">'+
										'<h3 class="product-title"><a href="/productdetail/'+jsonData[$manName][i]['id']+'">'+jsonData[$manName][i]['productName']+'</a></h3>'+
										'<div class="product-price">'+
										(jsonData[$manName][i]['productSku'] != null  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData[$manName][i]['productSku'] * currencyUnit).toFixed(2)+'</span></del>' : '')+
                               '<ins><span>'+symbolUnit+(jsonData[$manName][i]['productPrice'] * currencyUnit).toFixed(2)+'</span></ins>'+
						
										'</div>'+
										'<div class="product-extra-link">'+
											'<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to Cart</span></a>'+
											'<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>'+
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
        	}
        });
    } 
    function fetchProductsBestSeller(){
		 $.ajax({
            url: "{{ url('/bestsell') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                console.log(jsonData);
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
													(jsonData[i]['productSku'] != ''  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData[i]['productSku'] * currencyUnit).toFixed(2)+'</span></del>' : '')+
                               '<ins><span>'+symbolUnit+(jsonData[i]['productPrice'] * currencyUnit).toFixed(2)+'</span></ins>'+
						
													'</div>'+
												'</div>'+
											'</div>');
                	}
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

@stop