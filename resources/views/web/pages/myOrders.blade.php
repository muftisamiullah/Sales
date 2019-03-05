@extends('web.layouts.sidebar')
@section('content')

<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				@include('web.includes.breadcrumbs')
				<div class="cart-content-page">
					<!-- <h2 class="title-shop-page" style="font-size: 30px;">My Orders</h2> -->
					<form method="post">
						<div class="table-responsive">
							<table cellspacing="0" class="shop_table cart table">
								<thead>
									<tr>
										<th class="orderId">Order Id</th>
										<th class="name">Name</th>
										<th class="orderName">Order Name</th>
										<th class="orderAddress">Order Address</th>
										<th class="orderPhone">Order Phone</th>
                                        <th class="orderAmount">Order Amount</th>
                                        <th class="orderStatus">Order Status</th>
									</tr>
								</thead>
								
								<tbody id="orders">
									
								</tbody>
							</table>
						</div>
					</form>

					<div class="cart-collaterals">
						
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
        fetchOrders();
	
});
	

	function fetchOrders(){
		var token =  '{{ Session::get('user_access_token') }}';
		var url = '{{ url("/myorder") }}';
		$.ajax({
			url: url,
			type: 'GET', 
			dataType: 'JSON',
			headers: {"Authorization": 'Bearer ' + token},
			success: function(jsonData) {
				// jsonData=data.data;
				console.log(jsonData);
				$('#orders').empty();
				for(var i=0; i<jsonData.length;i++){
					 if(jsonData[i]['orderStatus']==1 || jsonData[i]['orderStatus']==2 || jsonData[i]['orderStatus']==3){
                         switch(jsonData[i]['orderStatus']){
                             case 1 :
                                 var orderStatus="Processing";
                                 break;
                             case 2 :
                                 var orderStatus="Shipped";
                                 break;
                             case 3 :
                                 var orderStatus="Delivered";
                                 break;
                         }
				$('#orders').append('<tr class="cart_item">'+
				'<td class="orderId">'+
					'<a href="#">'+jsonData[i]['id']+'</a>'+					
				'</td>'+
				
				'<td class="name">'+
					'<a href="#">'+jsonData[i]['orderDeliverName']+'</a>'+					
				'</td>'+
				'<td class="orderName">'+
					'<span class="amount">'+jsonData[i]['orderShipName']+'</span>'+					
				'</td>'+

                '<td class="orderAddress">'+
					'<a href="#">'+jsonData[i]['orderShipAddress']+ ',' +' '+  jsonData[i]['orderShipAddress2']+  ','+' '+jsonData[i]['orderCity']+
                    ',' + ' '+ jsonData[i]['orderState']+ ','+' '+jsonData[i]['orderCountry']+ ','+' '+jsonData[i]['orderZip']+'</a>'+					
				'</td>'+
                '<td class="orderPhone">'+
					'<span class="amount">'+jsonData[i]['orderPhone']+'</span>'+					
				'</td>'+
                '<td class="orderAmount">'+
					'<span class="amount">'+jsonData[i]['orderAmount']+'</span>'+					
				'</td>'+
                '<td class="orderStatus">'+
					'<span class="amount">'+orderStatus+'</span>'+					
				'</td>'+
				
				'</tr>');
                     }//if close
				} //for close
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