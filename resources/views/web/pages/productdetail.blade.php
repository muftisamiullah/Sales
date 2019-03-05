@extends('web.layouts.sidebar')
@section('content')
    <div id="content">
		<div class="content-page">
			<div class="container">
				@include('web.includes.breadcrumbs')
				<!-- End Bread Crumb -->
				<div class="row">
					<div class="col-md-9 col-sm-8 col-col-xs-12">
						<div id="details" class="product-detail accordion-detail border radius">

						</div>
						
					</div>

					<div class="col-md-3 col-sm-4 col-col-xs-12">
						<div class="sidebar sidebar-right">
							<div class="list-detail-adv">
								<div class="detail-adv">
									<a href="/aboutus"><img class="radius wobble-horizontal" alt="" src="{{asset('distweb/img/images/shop/pro-adv1.jpg')}}"></a>
								</div>
								<div class="detail-adv">
									<a href="/contactus"><img class="radius wobble-horizontal" alt="" src="{{asset('distweb/img/images/shop/pro-adv4.jpg')}}"></a>
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
<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.jcarousellite.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/TimeCircles.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/flipclock.js')}}"></script>

<script type="text/javascript">
	var rate;
    $(document).ready(function(){
		var id=fetchProductDetails();
		fetchReview(id);

		// var flag=0;
		// var flag=0;
		// $(document).on("click","a.qty-up", function(){
		// 	var quantity=$(".qty-val").text();
		// 	// console.log(quantity);
		// 	var total=0;
		// 	if(flag==0){
		// 		init=$(".productPrice").text();
		// 	} flag=1;
		// 	total=parseFloat(init)*parseInt(quantity);
		// 	// console.log(total);
		// 	$(".productPrice").text(total);
		// });
		// $(document).on("click","a.qty-down", function(){
		// 	var quantity=$(".qty-val").text();
		// 	console.log(init);
		// 	// console.log(quantity);
		// 		// if(flag==0){
		// 		// 	init=$(".productPrice").text();
		// 		// }
		// 		// flag=1;
		// 		// var total=0;s
		// 		// total=$(".productPrice").text();
		// 		// // console.log(total);
		// 		// sum=parseFloat(total)-parseFloat(init);
		// 		// // console.log(sum);
		// 		// $(".productPrice").text(sum);
		// 		total=parseFloat(init)*parseInt(quantity);
		// 		$(".productPrice").text(total);
		// });



			$(document).on("click","a.parrot", function(){
			var token =  '{{ Session::get('user_access_token') }}';
			if(token){
				var set=true;
			// $("a.parrot").text("Added to Cart");
			// $("a.parrot").prop('disabled',true);
        	addToCart(id);
			getCountCart();
			}else{
				addToCartTemp(id);
				// alert("Please Login.");
				// console.log('no token');
				// window.location.href='/login';
			}
		});
		$(document).on("click","a.wish", function(){
			// $("a.wish").text("Added to Cart");
			$("a.wish").prop('disabled',true);
			addToWishlist(id);
		});
		$(document).on('click', '#revwrite', function(event) {
            event.preventDefault();
            writeReview(id,rate);

            // contact(); called in validate.js
        });
		$(document).on('click', '#revstar input', function() {
            // event.preventDefault();
            // writeReview(id);
            rate = $('[name=ratingnew]:checked').val(); 
            // console.log(rate);
            // writeReview(id,rate);


            // contact(); called in validate.js
        });
    });
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
				if(jsonData.message){
					showToast("Already in Wishlist","", "info");
					}else{
					showToast("Added to Wishlist","", "success");
					}
				
				}
		});
	}

	function addToCart(id){
		var quantity=$(".qty-val").text();
		var price=$(".productPrice").text(); 
		var token =  '{{ Session::get('user_access_token') }}';
		var url = '{{ url("/api/order") }}';
	
		$.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
			headers: {"Authorization": 'Bearer ' + token},
			data:{
				id:id,
				quantity:quantity,
				price:price,
			},
            success: function(jsonData) {
				if(jsonData.message){
					showToast("Already in Cart!","", "info");
					}else{
					showToast("Added to Cart","", "success");
					}
				}
		});
	}
	function addToCartTemp(id){
	
		var quantity=$(".qty-val").text();
		var price=$(".productPrice").text(); 
		var url = '{{ url("/tempcart", "id") }}';
		url = url.replace('id', id);
		$.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
			
			data:{
				
				id:id,
				quantity:quantity,
				price:price,
				'_method':'post',
				"_token": "{{ csrf_token() }}",
        
			},
            success: function(jsonData) {
				if(jsonData){
					showToast("Added to Cart!","", "success");
					}else{
					showToast("Already in Cart","", "info");
					}
				}
		});
	}

    function fetchProductDetails(){
    	var id = "{!! $id !!}";
        var url = '{{ url("/api/product", "id") }}';
        url = url.replace('id', id);
         $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData) {
                var productImage='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.data['productImage'];
                var productImageOne='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.data['productImageOne'];
                var productImageTwo='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.data['productImageTwo'];
                var productImageThree='{{ asset('distweb/img/images/products')}}'+'/'+jsonData.data['productImageThree'];
                console.log(jsonData);
                $('#details').append('<div class="row">'+
							'<div class="col-md-5 col-sm-12 col-xs-12">'+
								'<div class="detail-gallery">'+
									'<div class="mid">'+
										'<img src="'+productImage+'" alt=""/>'+
									'</div>'+
									'<div class="gallery-control">'+
										'<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>'+
										'<div class="carousel slide">'+
											'<ul>'+
											'<li><a href="#" class="active" ><img src="'+productImageOne+'" alt=""/></a></li>'+
											'<li><a href="#"><img src="'+productImageTwo+'" alt=""/></a></li>'+
											'<li><a href="#"><img src="'+productImageThree+'" alt=""/></a></li>'+
											'<li><a href="#"><img src="'+productImage+'" alt=""/></a></li>'+
											'</ul>'+
										'</div>'+
										'<a href="#" class="next"><i class="fa fa-angle-right"></i></a>'+
										'</div>'+
									'</div>'+
									
									'<div class="detail-social">'+
										'<ul class="list-social-detail list-inline-block">'+
										'<li><a href="#" class="soci-fa soc-tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>'+
										'<li><a href="#" class="soci-fa soc-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>'+
										'<li><a href="#" class="soci-fa soc-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>'+
										'<li><a href="#" class="soci-fa soc-print"><i class="fa fa-print" aria-hidden="true"></i></a></li>'+
										'<li>'+
									'<div class="more-social">'+
										'<a class="soci-fa add-link soc-add" href="#"><i aria-hidden="true" class="fa fa-plus"></i></a>'+
										'<ul class="list-social-share list-none">'+
										'<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i><span>Youtute</span></a></li>'+
										'<li><a href="#"><i class="fa fa-linkedin"></i><span>linkedin</span></a></li>'+
										'<li><a href="#"><i class="fa fa-pinterest"></i><span>pinterest</span></a></li>'+
										'<li><a href="#"><i class="fa fa-google"></i><span>google</span></a></li>'+
										'<li><a href="#"><i class="fa fa-instagram"></i><span>instagram</span></a></li>'+
										'<li><a href="#"><i class="fa fa-flickr"></i><span>flickr</span></a></li>'+
										'<li><a href="#"><i class="fa fa-reddit"></i><span>reddit</span></a></li>'+
										'</ul>'+
									'</div>'+
									'</li>'+
									'</ul>'+
									'</div>'+
								'</div>'+
								'<div class="col-md-7 col-sm-12 col-xs-12">'+
									'<div class="detail-info">'+
										'<h2 class="title-detail">'+jsonData.data['productName']+'</h2>'+
										'<p class="desc">'+jsonData.data['productCartDesc']+'</p>'+
										'<div class="product-price">'+
											'+<ins><span class="productPrice" id="'+((jsonData.data['productPrice'] * currencyUnit).toFixed(2))+'">'+symbolUnit+((jsonData.data['productPrice'] * currencyUnit).toFixed(2))+'</span></ins>'+
										'</div>'+
										'<div class="available">'+
											'+<strong>Availability: </strong>'+
											'<span class="in-stock">'+jsonData.data['productStock']+' In Stock</span>'+
										'</div>'+	
										'<div class="detail-extralink">'+
											'<div class="detail-qty border radius">'+
												'<a href="javascript:void(0);" class="qty-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>'+
												'<span class="qty-val">1</span>'+
												'<a href="javascript:void(0);" class="qty-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>'+
											'</div>'+
											'<div class="product-extra-link2">'+
												'<a id="cartAdd" class="addcart-link parrot" href="javascript:void(0)">Add to Cart</a>'+
												'<a id="wishAdd" class="wishlist-link wish" href="javascript:void(0)"><i aria-hidden="true" class="fa fa-heart"></i></a>'+
												
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>'+
							'</div>'+
							'<div class="product-tab">'+
                            '<ul class="nav-tab">'+
                                '<li class="active">'+
                                  '<a aria-expanded="false" data-toggle="tab" href="#longdesc">Description</a>'+
                                '</li>'+
                                '<li>'+
                                    '<a data-toggle="tab" href="#tech">Technical Specifications</a>'+
                                '</li>'+
                                '<li>'+
                                    '<a data-toggle="tab" href="#addinfo">Additional Information</a>'+
                                '</li>'+
                                '<li>'+
                                    '<a data-toggle="tab" href="#reviews">Reviews</a>'+
                                '</li>'+
                            '</ul>'+
                            '<div class="tab-container">'+
                                '<div id="longdesc" class="tab-panel active">'+
                                    '<p>'+jsonData.data['productLongDesc']+'</p>'+
                                '</div>'+
                                '<div id="tech" class="tab-panel">'+
                                    '<p>'+jsonData.data['productTechSpecs']+'</p>'+
                                '</div>'+
                                '<div id="addinfo" class="tab-panel">'+
                                    '<p>'+jsonData.data['productAddInfo']+'</p>'+
                                '</div>'+
                                '<div id="reviews" class="tab-panel">'+

                                '<form>'+
                                '<p>'+
  								'<button class="button" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Write Your Review</button>'+
								'</p>'+
    							'<div class="collapse multi-collapse" id="multiCollapseExample1">'+
      							'<div class="card card-body"><textarea class="rev-textarea" rows="5" cols="60" id="reviewtext"></textarea></div>'+

      							'<fieldset class="rating" id="revstar">'+
    							'<input type="radio" id="star5" name="ratingnew" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>'+
    							'<input type="radio" id="star4half" name="ratingnew" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>'+
    							'<input type="radio" id="star4" name="ratingnew" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>'+
    							'<input type="radio" id="star3half" name="ratingnew" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>'+
    							'<input type="radio" id="star3" name="ratingnew" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>'+
    							'<input type="radio" id="star2half" name="ratingnew" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>'+
    							'<input type="radio" id="star2" name="ratingnew" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>'+
    							'<input type="radio" id="star1half" name="ratingnew" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>'+
    							'<input type="radio" id="star1" name="ratingnew" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>'+
    							'<input type="radio" id="starhalf" name="ratingnew" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>'+
								'</fieldset>'+

      							'<input type="submit" value="Submit" class="submit-review" id="revwrite" />'+
    							'</div>'+
    							'</form>'+

                                '</div>'+                     
                            '</div>'+
                        '</div>');          
        		}
			});
		return id;
	}
	
	function fetchReview(id){
		var url = '{{ url("/rev", "id") }}';
		url = url.replace('id', id);
		$.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            success: function(jsonData){
            	for(var i in jsonData){
            		if(jsonData[i]['status']===1){
            		var ratings='';
        			var ratingCount = parseInt(jsonData[i]['rating']);
            		for(var j=0; j<ratingCount; j++){
            			ratings += '<i class="fa fa-star"></i>';
            		}
            		if((jsonData[i]['rating'] % 1)>0){
        				ratings += '<i class="fa fa-star-half"></i>';
        			}
            $('#reviews').append('<div class="product-comments-block-tab">'+
                                        '<div class="comment row">'+
                                            '<div class="col-sm-3 author">'+
                                            '<div class="grade">'+
                                                    '<span>Rating</span>'+
                                                    '<span class="reviewRating">'+
                                                        ratings+
                                                    '</span>'+
                                                '</div>'+
                                                '<div class="info-author">'+
                                                    '<span><strong>'+jsonData[i]['firstName']+' </strong></span>'+
                                                    '<em>'+_getDateString(jsonData[i]['reviewDate'])+'</em>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-sm-9 commnet-dettail">'+
                                                '<p>'+jsonData[i]['reviewContent']+'</p>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>');
        		}
        	}
       	}
     	});
	}
	function _getDateString(str) {
   if (str == '' || str == undefined)
   return;


   var dateObj = new Date(str);

   if(dateObj.getTimezoneOffset() >= 0)
   {
       var offset = (dateObj.getTimezoneOffset()/60)+ (24-(dateObj.getHours()+(dateObj.getTimezoneOffset()/60)));
       dateObj = new Date(dateObj.setHours(dateObj.getHours()+ offset));
   }

   var month = dateObj.getMonth() + 1; //months from 1-12
   var day = dateObj.getDate();
   var year = dateObj.getFullYear();
   return (day + "-" + month + "-" + year);
}

function writeReview(id,rate){
	 var token =  '{{ Session::get('user_access_token') }}';
	var id = "{!! $id !!}";
	console.log(rate);
	var rev = $('#reviewtext').val();
	
	// console.log(rate);
	$.ajax({
            url: "{{ url('/api/review') }}",
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {

            	reviewProductId:id,
				reviewContent:rev,
				rating:rate,
		
            },
                success: function(data) {
                	console.log(data);
                    if(data.result=='success')
                    {
                    	$('#reviewtext').val("");
                        showToast("Thank You.","","success");
                    }else{
                        showToast("Something went wrong","", "error");
                    }
                }
            });
}


</script>
<script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{asset('distweb/js/toastr.min.js')}}"></script>

@stop

	<div>
        @include('web.includes.footer')
    </div>
    <a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
@stop