@extends('web.layouts.sidebar')
@section('content')

<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="banner-shop">
					<div class="banner-shop-thumb">
						<a href="#"><img src="distweb/img/images/shop/bn-grid-boxed.jpg" alt="" /></a>
					</div>
					<div class="banner-shop-info text-center">
						<h2>AntiVirus 2019</h2>
						<p>Avast, Norton, McAfee</p>
					</div>
				</div>
				<!-- End Banner -->
				@include('web.includes.breadcrumbs')
				<!-- End Bread Crumb -->
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
							<!-- End widget -->
							
							<div class="widget widget-seller">
								<h2 class="widget-title title14">best sellers</h2>
								<div class="widget-content">
									<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1]]">
										<div class="list-pro-seller">
											<div class="item-pro-seller">
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
											</div>		
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
								<div class="view-type pull-left">
									<a href="/allproductsgrid" class="grid-view "></a>
									<a href="/allproductslist" class="list-view "></a>
								</div>
								<div class="sort-paginav pull-right">
									<div class="sort-bar select-box">
										<label>Sort By:</label>
										<select>
											<option value="">position</option>
											<option value="">price</option>
										</select>
									</div>
									<div class="show-bar select-box">
										<label>Show:</label>
										<select>
											<option value="">20</option>
											<option value="">12</option>
											<option value="">24</option>
										</select>
									</div>
									<div class="pagi-bar">
										<a href="#" class="current-page">1</a>
										<a href="#">2</a>
										<a href="#" class="next-page"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
							<!-- End Sort PagiBar -->
							<div id="allproductslist" class="list-pro-color">
								<div class="pagi-bar bottom">
									<a class="current-page" href="#">1</a>
									<a href="#">2</a>
									<a class="next-page" href="#"><i aria-hidden="true" class="fa fa-caret-right"></i></a>
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
	});
	function fetchAllProducts(){
		 $.ajax({
            url: "{{ url('/api/product') }}",
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                // console.log(jsonData);
                console.log(jsonData.data);
                for(var i in jsonData.data){
                	var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.data[i]['productImage'];
                	console.log(productImage);
                $('#allproductslist').append('<div class="item-product-list">'+
					'<div class="row">'+
						'<div class="col-md-3 col-sm-4 col-xs-12">'+
							'<div class="item-pro-color">'+
								'<div class="product-thumb">'+
									'<a href="/productdetail/'+jsonData.data[i]['id']+'" class="product-thumb-link">'+
										'<img data-color="black" class="active" src="'+productImage+'" alt="">'+
										'<img data-color="purple" src="images/photos/fashion/3.jpg" alt="">'+
										'<img data-color="blue" src="images/photos/fashion/4.jpg" alt="">'+
										'<img data-color="cyan" src="images/photos/fashion/5.jpg" alt="">'+
									'</a>'+
									'<a href="quick-view.html" class="quickview-link plus fancybox.iframe"><span>quick view</span></a>'+
								'</div>'+
							'</div>'+
						'</div>'+
						'<div class="col-md-9 col-sm-8 col-xs-12">'+
							'<div class="product-info">'+
								'<h3 class="product-title"><a href="/productdetail/'+jsonData.data[i]['id']+'">'+jsonData.data[i]['productName']+'</a></h3>'+
									'<div class="product-price">'+
									(jsonData.data[i]['productSku'] != null  ? '<del><span class="prePrice"><span>'+symbolUnit+(jsonData.data[i]['productSku'] * currencyUnit.toFixed(2)+'</span></del>' : '')+
                               '<ins><span>'+symbolUnit+(jsonData.data[i]['productPrice'] * currencyUnit).toFixed(2)+'</span></ins>'+
						
									'</div>'+
									'<p class="desc">'+jsonData.data[i]['productShortDesc']+'</p>'+
									'<div class="product-rate">'+
										'<div class="product-rating" style="width:90%"></div>'+
									'</div>'+
									'<div class="product-extra-link2">'+
										'<a href="#" class="addcart-link">Add to Cart</a>'+
										'<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i></a>'+
										'<a href="#" class="compare-link"><i class="fa fa-refresh" aria-hidden="true"></i></a>'+
									'</div>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</div>');
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