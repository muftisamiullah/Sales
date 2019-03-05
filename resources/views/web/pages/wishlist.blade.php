@extends('web.layouts.sidebar')
@section('content')

<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				@include('web.includes.breadcrumbs')
				<div class="cart-content-page">
					<!-- <h2 class="title-shop-page" style="font-size: 30px;">My Wishlist</h2> -->
					<form method="post">
						<div class="table-responsive">
							<table cellspacing="0" class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">Remove</th>
										<th class="product-thumbnail">Image</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-subtotal">Action</th>
									</tr>
								</thead>
								
								<tbody id="wish">
									<!-- <tr class="cart_item">
										<td class="product-remove">
											<a class="remove" href="#"><i class="fa fa-times"></i></a>
										</td>
										<td class="product-thumbnail">
											<a href="#"><img  src="images/photos/fashion/7.jpg" alt=""/></a>					
										</td>
										<td class="product-name">
											<a href="#">Luphen Caunoiteng kug </a>					
										</td>
										<td class="product-price">
											<span class="amount">$68.00</span>					
										</td>
										<td class="product-quantity">
											<div class="detail-qty border radius">
												<a href="#" class="qty-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
												<span class="qty-val">6</span>
												<a href="#" class="qty-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
											</div>		
										</td>
										<td class="product-subtotal">
											<span class="amount">$68.00</span>					
										</td>
									</tr> -->
									<!-- <tr class="cart_item">
										<td class="product-remove">
											<a class="remove" href="#"><i class="fa fa-times"></i></a>					
										</td>
										<td class="product-thumbnail">
											<a href="#"><img src="images/photos/fashion/8.jpg" alt=""/></a>					
										</td>
										<td class="product-name">
											<a href="#">Cooc Huyinh Phale </a>					
										</td>
										<td class="product-price">
											<span class="amount">$19.00</span>					
										</td>
										<td class="product-quantity">
											<div class="detail-qty border radius">
												<a href="#" class="qty-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
												<span class="qty-val">6</span>
												<a href="#" class="qty-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
											</div>			
										</td>
										<td class="product-subtotal">
											<span class="amount">$38.00</span>					
										</td>
									</tr> -->
									<!-- <tr>
										<td class="actions" colspan="6">
											<div class="coupon">
												<label for="coupon_code">Coupon:</label> 
												<input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> 
												<input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
											</div>
											<input type="submit" value="Update Cart" name="update_cart" class="button">			
										</td>
									</tr> -->
								</tbody>
							</table>
						</div>
					</form>

					<div class="cart-collaterals">
						<!-- <div class="cart_totals ">
							<h2>Cart Totals</h2>
							<div class="table-responsive">
								<table cellspacing="0" class="table">
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><strong class="amount">$106.00</strong></td>
										</tr>
										<tr class="shipping">
											<th>Shipping</th>
											<td>
												<ul id="shipping_method">
													<li>
														<input type="radio" class="shipping_method" checked="checked" value="free_shipping" id="shipping_method_0_free_shipping" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_free_shipping">Free Shipping</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_delivery" id="shipping_method_0_local_delivery" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_delivery">Local Delivery (Free)</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_pickup" id="shipping_method_0_local_pickup" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_pickup">Local Pickup (Free)</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr class="order-total">
											<th>Total</th>
											<td><strong><span class="amount">$106.00</span></strong> </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> -->
					</div>
					<!-- <div class="wc-proceed-to-checkout">
								<button class="checkout-button button alt wc-forward proceed" id="myLink" disabled>Proceed to Checkout </button>
					</div> -->
				</div>
			</div>	
		</div>
		<!-- End Content Page -->
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
<!-- <script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script> -->

<script type="text/javascript">
    $(document).ready(function(){
        fetchWishlist();
	$(document).on("click",".remove", function(){
		removeItemFromWishlist($(this).attr('id'));
	});
	$(document).on("click",".add", function(){
		addToCart($('.remove').attr('id'));
	});
});
	function addToCart(id){
		var token =  '{{ Session::get('user_access_token') }}';
		var url = '{{ url("/moveToCart", "id") }}';
		console.log(id);
		url = url.replace('id', id);
		console.log(url);
		$.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                data: {
					id : id,
					'_method':'PUT',
					"_token": "{{ csrf_token() }}",
                },
				success: function (data) {
					console.log(data);
					if(data){
					showToast("Added to cart","", "success");
					}else{
					showToast("Something went wrong","","error");
					}
					fetchWishlist();
				},
		});
	}
	function removeItemFromWishlist(id){
		var token =  '{{ Session::get('user_access_token') }}';
		var url = '{{ url("/api/order", "id") }}';
		url = url.replace('id', id);
		$.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                data: {
                    '_method':'delete'
                },
				success: function (data) {
					console.log(data);
					if(data="success"){
					showToast("item removed","", "warning");
					}else{
					showToast("Something went wrong","", "error");
					}
					fetchWishlist();
				},
		});
	}

	function fetchWishlist(){
		var token =  '{{ Session::get('user_access_token') }}';
		var url = '{{ url("/getWishlist") }}';
		$.ajax({
			url: url,
			type: 'GET', 
			dataType: 'JSON',
			headers: {"Authorization": 'Bearer ' + token},
			success: function(jsonData) {
				// jsonData=data.data;
				console.log(jsonData);
				$('#wish').empty();
				for(var i=0; i<jsonData.length;i++){
					// console.log(jsonData[i]);
				// var productImage = '{{URL::asset('distweb/img/images/products') }}'+ '/'+jsonData[i]['productImage'];
				// console.log(productImage);
				$('#wish').append('<tr class="cart_item">'+'<td class="product-remove">'+
				'<a id="'+jsonData[i]['id']+'" class="remove" href="javascript:void(0)"><i class="fa fa-times"></i></a>'+
				'</td>'+
				'<td class="product-thumbnail">'+
					// '<a href="#"><img  src="'+productImage+'" alt=""/></a>'+
				// 	'<div class="avatar">' +
				//         '<img src="' + productImage +
				//         '" alt="item" class="avatar-img rounded-circle">' +
				//         '</div>'+
				'</td>'+
				'<td class="product-name">'+
					'<a href="#">'+jsonData[i]['orderShipName']+'</a>'+					
				'</td>'+
				'<td class="product-price">'+
					'<span class="amount">'+symbolUnit+' '+((currencyUnit * jsonData[i]['orderAmount']).toFixed(2))+'</span>'+			 	
				'</td>'+
				'<td class="product-subtotal">'+
					'<a id="'+jsonData[i]['id']+'" href="javascript:void(0)" class="add"><i class="fa fa-plus"> Add to Cart</a>'+					
				'</td>'+
				'</tr>');
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