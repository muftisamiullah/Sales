@extends('web.layouts.sidebar')
@section('content')

    <div id="content">
        <div class="content-page woocommerce">
            <div class="container">
				@include('web.includes.breadcrumbs')
                <div class="cart-content-page">
                    <!-- <h2 class="title-shop-page" style="font-size: 30px;">My Cart</h2> -->
                    <form method="post">
                        <div class="table-responsive">
                            <table cellspacing="0" class="shop_table cart table">
                                <thead>
                                <tr>
                                    <th class="product-remove">Remove</th>
                                    @if (session()->has('user_access_token'))
                                    <th class="product-thumbnail">Move to Wishlist</th>
                                    @endif
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    @if (session()->has('user_access_token'))
                                        <th class="product-quantity">Quantity</th>
                                    @endif
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>

                                <tbody id="cart">
                                <!-- <tr>
                                    <td class="actions" colspan="6">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label>
                                            <input type="text" placeholder="Coupon code" value="" id="coupon_code"
                                                   class="input-text" name="coupon_code">
                                            <input type="submit" value="Apply Coupon" name="apply_coupon"
                                                   class="button">
                                        </div>
                                        <input type="submit" value="Update Cart" name="update_cart" class="button">
                                    </td>
                                </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="cart-collaterals" id="payment">
                    </div>
                    <div class="cart-collaterals" id="lop">
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
                    <div class="wc-proceed-to-checkout">
                        <button class="checkout-button button alt wc-forward proceed" id="myLink" disabled>Proceed to
                            Checkout
                        </button>
                    </div>
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
	<script type="text/javascript" src="{{asset('js/validateBill.js')}}"></script>
	


    <script type="text/javascript">
        var $total = 0;
        var couponDiscount=0
        $(document).ready(function () {

            $(document).on('click', '#applyCoupon', function(event) {
                event.preventDefault();
            applyCoupon();
        });
        
        $(document).on('click', '.removeCoupon', function(event) {
                event.preventDefault();
            removeCoupon();
        });
            //adding support charges using radio buttons
            $(document).on("change", ".form-check-input", function () {
                if ($(this).is(":checked")) { // check if the radio is checked
                    val = $(this).val(); // retrieve the value
                    var subTotal = 0;
                    $('.amount-per-item').each(function () {

                        subTotal += parseFloat($(this).text());

                    });
                    subTotal = parseFloat(subTotal) + parseFloat(val);
                    $('#subTotalAmount').text(parseFloat(subTotal).toFixed(2));
                    $('.sumTotal').text(parseFloat(subTotal).toFixed(2));
                }
            });

            //change Payment method
            $(document).on("change", ".input-radio", function () {
                if ($(this).is(":checked")) { // check if the radio is checked
                    val = $(this).val(); // retrieve the value
                    console.log(val);
                    var $amount =$('#orderAmountTotal').val(); 
                    if(val=='online'){
                         $('.place-order').html('<input type="submit" value="Pay ' + $amount + '"id="rzp-button1"name="onlinePlaceOrder" orderamount='+$amount+' class="button alt">');
                    }else{
                        $('.place-order').html('<input type="submit" value="Place Order" id="placeOrder" name="codPlaceOrder" orderamount='+$amount+' class="button alt">');
                    }
                    // var subTotal = 0;
                    // $('.amount-per-item').each(function () {
                    //
                    //     subTotal += parseFloat($(this).text());
                    //
                    // });
                    // subTotal = parseFloat(subTotal) + parseFloat(val);
                    // $('#subTotalAmount').text(parseFloat(subTotal).toFixed(2));
                    // $('.sumTotal').text(parseFloat(subTotal).toFixed(2));
                }
            });
            //


            $(document).on("click","#rzp-button1",function(e){
                var amount=$('#orderAmountTotal').val();
                var amount = amount *1000;
                console.log(amount);
                var options = {
                    "key"        : 'rzp_test_jp7UawxsbeQTFU',
                    "amount"     : parseInt(amount),
                    "name"       : 'Yasir',
                    "description": 'Description',
                    "image"      : "",
                    "prefill"    : {
                        "name": 'Yasir',
                        "email": 'kuchayyasir@gmail.com',
                        "contact": '9796563123',
                    },
                    "notes"      : {
                        "address": 'Nowshera',
                    },
                    "theme"      : {
                        "color": "#F37254"
                    },
                };
                options.handler = function (response){
                    console.log(response.razorpay_payment_id);
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    document.getElementById('razorpay_signature').value = response.razorpay_signature;
                    document.getElementById('_token').value = "{{csrf_token()}}";
                    e.preventDefault();
                    placeOrder();

                   // document.razorpayform.submit();
                };
                options.theme.image_padding = false;
                options.modal = {
                    ondismiss: function() {
                        console.log("This code runs when the popup is closed");
                    },
                    escape: true,
                    backdropclose: false
                };
                var rzp = new Razorpay(options);
                rzp.open();
                e.preventDefault();
            });
            //checking whether the user is logged in or not nd calling the appropriate function
            //to add an item to cart
            var token = '{{ Session::get('user_access_token') }}';
            if (token) {
                fetchCart();
            } else {
                fetchTempCart();
            }

            //removing an item from the cart
            $(document).on("click", ".remove", function () {
							if (token) {
					removeItemFromCart($(this).attr('id'));
                    getCountCart();
					}
					else{
						removeItemFromTempCart($(this).attr('id'));
						}
            });

            //opening different content on the same page/opening checkout page
            $(document).on("click", "#myLink", function () {
                var orderDetails = [];
                var sumTotal = $('.sumTotal').text();
                $('.detail-qty').each(function () {

                    var qty = $(this).find('.qty-val').text();
                    var id = $(this).find('.qty-val').attr('id');
                    var obj = {
                        'orderId': id,
                        'quantity': qty,
                        'totalAmount': $('.productPrice_' + id).text(),
                    };

                    orderDetails.push(obj);
                });
                console.log(orderDetails);
                //console.log(quantity);
                var back = $('#content').html();
                $('#content').html('');
                proceedToCheckOut(orderDetails, sumTotal);
                // var $productArray =[];
                // $('.remove').each(function(){
                // 	$(this).attr('id');
                // 	$productArray.push($(this).attr('id'));
                // })
                // var $total = $('#total').text().replace('$','');
                // console.log($total);
                // console.log($productArray);
                // console.log(encodeURIComponent('?o=,'+$productArray+',&a='+$total));
                // var url='order=,'+$productArray+',&a='+$total;
                // console.log(url);
                //  window.location.href = '/checkout' + '?'+encodeURIComponent(url);
                // window.location.href = '/checkout' + (url);
            });

            //moving an item to wishlist
            $(document).on("click", "#wish", function () {
                moveToWishlist($(".remove").attr('id'));
            });

            //changing the quantity of an item
            $(document).on("click", "a.qty-up", function () {

                var id = $(this).parent().find('.qty-val').attr('id');
                var quantity = $(this).parent().find('.qty-val').text();
                var price = $('.price' + id).text();
                total = parseFloat(price) * parseFloat(quantity);
                $(".productPrice_" + id).text(total.toFixed(2));
                var sumation = 0;
                $('.amount-per-item').each(function () {

                    sumation += parseFloat($(this).text());

                });
                $('#subTotalAmount').text(parseFloat(sumation).toFixed(2));
                $('.sumTotal').text(parseFloat(sumation).toFixed(2));
            });

            //changing the quantity of an item
            $(document).on("click", "a.qty-down", function () {
                var id = $(this).parent().find('.qty-val').attr('id');
                var quantity = $(this).parent().find('.qty-val').text();
                var price = $('.price' + id).text();
                total = parseFloat(price) * parseFloat(quantity);
                $(".productPrice_" + id).text(total.toFixed(2));
                var sumation = 0;
                $('.amount-per-item').each(function () {

                    sumation += parseFloat($(this).text());

                });
                $('#subTotalAmount').text(parseFloat(sumation).toFixed(2));
                $('.sumTotal').text(parseFloat(sumation).toFixed(2));
            });
            //add new addresses
            // $(document).on('click', '#addAddress', function () {
				// addAddress();
			  //Added Address in validateBill.js
            // });

            //placing an order
            $(document).on('click', '#placeOrder', function () {
                placeOrder();
            });
        });

        //loading another page on clicking proceeed button
        function proceedToCheckOut(order, amount) {
			
            updateOrders(order);
            fetchAddress();
            fetchProducts();
            $('#content').empty().html('<div class="content-page woocommerce">'
                + '<div class="container">' + '<div class="row">' +
                '<div class="col-md-12">' +
                '<h2 class="title-shop-page"style="font-size: 30px;">Checkout</h2>' +
                '<div class="row">' + '<div class="col-md-6 col-sm-6 col-ms-12">' +
                '<div class="check-billing">' + '<div class="form-my-account">' +
                '<h2 class="title18">Billing Details</h2>' +
                '<div class="form-row">' +
                '<div class="col-md-12 form-group">' +
                '<input id="checkoutName" placeholder="Name *" type="text" name="checkoutName"class="form-control validate-required"><small class="form-text" id="checkoutNameError"></small></div>' +
                '</div>' + '<div class="form-row">' + '<div class="col-md-6 form-group">' + '<input  placeholder="Phone *" type="text" name="checkoutPhone" class="form-control" id="checkoutPhone">                              <small class="form-text" id="checkoutPhoneError"></small>               </div>' + '<div class="col-md-6 form-group">' + '<input id="checkoutState" placeholder="State *" type="text" name="checkoutState" class="form-control">' + '<small class="form-text" id="checkoutStateError"></small>' + '</div>' + '</div>' + '<div class="form-group col-md-12">' + '<select class="form-control" name="checkoutCountry" id="checkoutCountry">' + '<option value="">Country*</option>' + '<option value="India">India</option>' + '<option value="United State">United State</option>' +
                '<option value="England">England</option>' +
                '<option value="Germany">Germany</option>' +
                '<option value="France">France</option>' +
                '</select>' + '<small class="form-text" id="checkoutCountryError"></small>' + '</div>' + '<div class="form-row">' + '<div class="col-md-12 form-group">' + '<input id="checkoutAddress" placeholder="Address *" type="text" name="checkoutAddress" class="form-control"><small class="form-text" id="checkoutAddressError"></small></div>' +
                '</div>' + '<div class="form-row"><div class="col-md-12 form-group"><input id="checkoutLandmark" placeholder="Landmark *" type="text" name="checkoutLandmark"class="form-control">' + '<small class="form-text"id="checkoutLandmarkError"></small></div>' + '</div>' + '<div class="form-row">' +
                '<div class="col-md-6 form-group">' +
                '<input  placeholder="PostCode / Zip *" type="text" name="checkoutZip"class="form-control" id="checkoutZip">' +
                '<small class="form-text" id="checkoutZipError"></small></div>' +
                '<div class="col-md-6 form-group"><input id="checkoutCity" placeholder="City *" type="text" name="checkoutCity" class="form-control"> <small class="form-text" id="checkoutCityError"></small></div>' + '</div>' + '<div class="form-row text-center">' +
                '<input type="submit" value="Add Address" id="addAddress"name="addAddress" class="button alt"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div><h2 class="title18 text-center">Ship to a different Address</h2></div>' + '<p>' + '<div class="col-md-6 col-sm-6 col-ms-12">' +
                '<div class="">' + '<div class="row">' +
                '<div class="container"id="addressCard">' +
                '</div>' + '</div>' + '</div>' + '</div>' + '</p>' + '</div>' + '<h3 class="order_review_heading hide" >Your order</h3>' + '<div class="woocommerce-checkout-review-order" id="order_review">' + '<div class="table-responsive" >' + '<table class="shop_table woocommerce-checkout-review-order-table">' + '<thead>' + '<tr>' + '<th class="product-name hide">Product</th>' + '<th class="product-total hide">Total</th>' + '</tr>' + '</thead>' + '<tbody id="products">' + '</tbody>' + '<tfoot id="footer">' + '</tfoot>' + '</table>' + '</div>' + '<div class="woocommerce-checkout-payment" id="payment">' + '<ul class="payment_methods methods list-none">' + '<li class="payment_method_cod">' + '<input type="radio" data-order_button_text="" value="cod" checked name="payment_method"  class="input-radio" id="payment_method_cod">' + '<label for="payment_method_cod">Cash on Delivery </label>' + '<div class="payment_box payment_method_cod">' + '<p>Pay with cash upon delivery.</p>' + '</div>' + '</li>' + '<li class="payment_method_paypal">' + '<input type="radio" data-order_button_text="Proceed to PayPal" value="online"name="payment_method" class="input-radio" id="payment_method_paypal">' + '<label for="payment_method_paypal">Online <img alt="PayPal Acceptance Mark"src="{{asset('distweb/img/images/shop/payment.png')}}">' + '</label>' + ' <div class="payment_box payment_method_paypal">' + '<p>Pay online; you can pay with your credit card if you don’t have a PayPal account.</p>' + '</div>' + '</li>' + '</ul>' +
                '<input type="hidden" value="'+amount+'"id="orderAmountTotal">' +
                '<div class="form-row place-order">' +
                '<input type="submit" value="Place Order" id="placeOrder" name="codPlaceOrder" orderamount='+amount+' class="button alt">'+
                '</div>' + '</div>' + '</div>' + ' </div>' + '</div>' + '</div>' + '</div>');
        }


        function updateOrders(order) {
            // console.log(order); 
            var token = '{{ Session::get('user_access_token') }}';
            $.ajax({
                url: '{{ url("/updateOrders") }}',
                type: 'POST',
                dataType: 'JSON',
                headers: {
                    "Authorization": 'Bearer ' + token
                },
                data: {order, '_method': 'PUT', "_token": "{{ csrf_token() }}",},
                success: function (data) {
					console.log(data);
                    
					
                }
            });
        }

        function fetchProducts() {
            var token = '{{ Session::get('user_access_token') }}';
            var $url = decodeURIComponent(window.location.href);
            var ids = $url.split(',');
            let searchParams = new URLSearchParams($url);
            // console.log($url);
            $total = searchParams.get("a");
            // console.log($total);
            for (var i = 1; i < ids.length - 1; i++) {
                // console.log(ids[i]);
                var url = '{{ url("/api/order","id") }}';
                url = url.replace('id', ids[i]);
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    headers: {"Authorization": 'Bearer ' + token},
                    success: function (jsonData) {
                        // console.log(jsonData.data.orderShipName);
                        $('#products').append('<tr class="cart_item">' + '<td class="product-name">' + jsonData.data.orderShipName + '<span class="product-quantity">× 1</span>' + '</td>' + '<td class="product-total"><span class="amount">$' + jsonData.data.orderAmount + '</span></td>' + '</tr>');
                    }
                });
            }
            $('#footer').append('<tr class="order-total">' + '<th>Total</th>' + '<td><strong><span id="total" class="amount">' + $total + '</span></strong></td>' + '</tr>');
        
        }

        function addAddress() {
            var token = '{{ Session::get('user_access_token') }}';
            var isValid = true;
            $("input[type=text].validate-required,input[type=email].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required")
                .each(function () {
                    var input = $(this).attr('id');
                    var inputType = $(this).attr('type');
                    var inputvalue = $("#" + input).val().trim();
                    if (inputvalue == "") {
                        $(this).addClass("is-invalid");
                        $("small#" + input + 'Help').removeClass('d-none');
                        isValid = false;
                    }
                    if (inputvalue == "" && inputType != undefined && inputType == 'file') {
                        $('.fileinput').removeClass("is-valid-file").addClass("is-invalid-file");
                        $("small#" + input + 'Help').removeClass('d-none');
                        isValid = false;
                    }
                });

            if (isValid == false) {
                return false;
            }
            var name = $('#checkoutName').val();
            var phone = $('#checkoutPhone').val();

            var zip = $('#checkoutZip').val();
            var city = $('#checkoutCity').val();
            var state = $('#checkoutState').val();
            var landMark = $('#checkoutLandmark').val();
            var country = $('#checkoutCountry').val();
            var address = $('#checkoutAddress').val();
            $.ajax({
                url: "{{ url('/api/address') }}",
                type: 'POST',
                dataType: 'JSON',
                headers: {
                    "Authorization": 'Bearer ' + token
                },
                data: {
                    name: name,
                    phone: phone,
                    city: city,
                    state: state,
                    zip: zip,
                    country: country,
                    address: address,
                    landMark: landMark,
                },
                success: function (data) {
                    if(data){
                    showToast("Address Added","set as default", "success");
					}else{
					showToast("Something went wrong","", "error");
					}
                    fetchAddress();
                    console.log(data);
                }
            });
        }

        //fetch Address
        function fetchAddress() {
            var token = '{{ Session::get('user_access_token') }}';
            $.ajax({
                url: "{{ url('/api/address') }}",
                type: 'GET',
                headers: {
                    "Authorization": 'Bearer ' + token
                },
                dataType: 'JSON',
                success: function (jsonData) {
                    console.log(jsonData.data);
                    $('#addressCard').empty();
                    for (var info in jsonData.data) {


                        $('#addressCard').append(
                            '<div class="col-md-5 col-sm-5 col-xs-12 border col-xs-offset-1 currentCard" id="' + jsonData.data[info]['id'] + '">' +
                            '<div class="">' +
                            '<span class="cross pr-6"></span>' + '<span class="tick"></span>' +
                            '<div class="service-info">' +
                            '<h2 class="title14">' + jsonData.data[info]['name'] + '</h2>' +
                            '<p>' + jsonData.data[info]['phone'] + '</p>' +
                            '<ul class="list-unstyled">' +
                            '<li><a href="#">' + ' Address: ' + ' ' + jsonData.data[info]['address'] + '</a></li>' +
                            '<li><a href="#">' + ' City: ' + ' ' + jsonData.data[info]['city'] + '</a></li>' +
                            '<li><a href="#">' + ' State: ' + ' ' + jsonData.data[info]['state'] + '</a></li>' +
                            '<li><a href="#">' + ' Country: ' + ' ' + jsonData.data[info]['country'] + '</a></li>' +
                            '<li><a href="#">' + ' Zip: ' + ' ' + jsonData.data[info]['zip'] + '</a></li>' +
                            '<li><a href="#">' + ' LandMark: ' + ' ' + jsonData.data[info]['landMark'] + '</a></li>' +


                            '</ul>' +
                            '</div>' +
                            '</div>' +
                            '</div>')
                    }//loop close

                    $('.currentCard').click(function () {
                        $('.currentCard .tick').hide();
                        $('.currentCard').css('border-color', '#e5e5e5');
                        $(this).css('border-color', 'green');
                        $('.tick', this).show();
                        var id = $(this).attr('id');
                        //update to select the particular address

                        var url = '{{ url("/api/address", "id") }}';
                        url = url.replace('id', id);
                        var selectAddress = 1;

                        $.ajax({
                            url: url,
                            type: 'POST',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + token},
                            data: {
                                selectAddress: selectAddress,
                                '_method': 'PUT'
                            },
                            success: function (data) {
                                if(data){
                                        showToast("Selected Address set as Default!","", "success");
                                    }else{
                                        showToast("Something went wrong","", "error");
                                    }
                            }
                        });//ajax close
                    });//click fun close
        //delete from db
                    $('.currentCard').one('mouseenter', function () {

                        var id = $(this).attr('id');
                        console.log(id);
                        $('.cross', this).click(function () {


                            console.log(id);

                            var url = '{{ url("/api/address", "id") }}';
                            url = url.replace('id', id);

                            $.ajax({
                                url: url,
                                type: 'POST',
                                dataType: 'JSON',
                                headers: {"Authorization": 'Bearer ' + token},
                                data: {
                                    '_method': 'delete'
                                },
                                success: function (data) {
                                    if(data){
                                    showToast("Address deleted Successfully!","Please Wait!", "error");
                                    }else{
                                    showToast("Something went wrong","", "error");
                                    }
                                    fetchAddress();
                                },
                            });//ajax close
                        });//click close
                    });//mouseenter close

                    $('.currentCard').first().css('border-color', 'green');
                    $('.currentCard .tick').append('<i class="fa fa-check" aria-hidden="true"></i>')
                        .css({"color": "green", "float": "right", "font-size": "20px"});
                    $('.currentCard .tick').hide();
                    $('.currentCard .tick').first().show();
                    $('.currentCard .cross').append('<i class="fa fa-window-close" aria-hidden="true"></i>')
                        .css({"color": "red", "float": "right", "font-size": "20px", "padding-left": "8px"});
                }
            });

        }

        function placeOrder() {
            var paymentMethod = $('input[name="payment_method"]:checked').val();
            //  var checkAddress = $('#content').hasClass( "currentCard" );
             var checkAddress  = $("#content").find('.currentCard').length > 0;
             if(checkAddress){
            
            if (paymentMethod == 'cod') {
                var token = '{{ Session::get('user_access_token') }}';

                $.ajax({
                    url: "{{ url('/placeOrder') }}",
                    type: 'POST',
                    dataType: 'JSON',
                    headers: {"Authorization": 'Bearer ' + token},
                    data: {
                        paymentMethod: paymentMethod,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (data) {
                        // console.log(data);
                        //   document.location.href = "{!! URL::to('/sucess'); !!}";
                        window.location.href = "/sucess";
                    }
                });
            } 
            else {
                var token = '{{ Session::get('user_access_token') }}';
                var $total = $('#total').text();
                    $payment_id=$('#razorpay_payment_id').val();
                    // alert('Done');
                $.ajax({
                    url: "{{ url('/placeOrder') }}",
                    type: 'POST',
                    dataType: 'JSON',
                    headers: {"Authorization": 'Bearer ' + token},
                    data: {
                        paymentMethod: paymentMethod,
                        "_token": "{{ csrf_token() }}",
                    },
                        success: function (data) {
                            // console.log(data);
                            $payment_id=$('#razorpay_payment_id').val();
                            fetchInfo($payment_id);

                            //   document.location.href = "{!! URL::to('/sucess'); !!}";
                            window.location.href = "/sucess";
                        }
                    });
                //window.location.href = '/pay' + '?' + encodeURIComponent(url);

                //   document.location.href = "{!! URL::to('/sucess'); !!}";
                // window.location.href="/pay";
            }

        }//check adress if given
        else{
            showToast("Please provide the address details","", "error");
        }

        }
        function fetchInfo(p_id){
            console.log("in fetch info");
            // console.log(p_id);
            var token = '{{ Session::get('user_access_token') }}';

            $.ajax({
                    url: "{{ url('/payment') }}",
                    type: 'POST',
                    dataType: 'JSON',
                    headers: {"Authorization": 'Bearer ' + token},
                    data: {
                        p_id:p_id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (data) {
                    console.log("sucess");
                    //   document.location.href = "{!! URL::to('/sucess'); !!}";
                    // window.location.href = "/sucess";
                    }
                });
        }
        function moveToWishlist(id) {
            // var id=id;
            var token = '{{ Session::get('user_access_token') }}';
            var url = '{{ url("/moveToWishlist", "id") }}';
            url = url.replace('id', id);
            console.log(url);
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                data: {
                    id: id,
                    '_method': 'PUT',
                    "_token": "{{ csrf_token() }}",
                },
                success: function (data) {
                    console.log(data);
					if(data){
					showToast("moved to wishlist","", "success");
					}else{
					showToast("Something went wrong","", "error");
					}
                    fetchCart();
                },
            });
        }

        function removeItemFromCart(id) {
            var token = '{{ Session::get('user_access_token') }}';

            var url = '{{ url("/api/order", "id") }}';
            url = url.replace('id', id);
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                data: {
                    '_method': 'delete',
                },
                success: function (data) {
					// toastr.info('Are you the 6 fingered man?');
					console.log(data);
					if(data){
					    showToast("item removed","","warning");
					}else{
					    showToast("Something went wrong","", "error");
					}
					// toastr.info('Are you the 6 fingered man?')
                    // 	if(data.result=="success"){
                    // swal({
                    // title: "Item removed!",
                    // icon: "success",
                    // timer: 2000,
                    // button: false,
                    // });
                    // } else{
                    // 	swal({
                    // title: "Something went wrong!",
                    // icon: "warning",
                    // timer: 2000,
                    // button: false,
                    // });
                    // }
                    fetchCart();
                },
            });
        }

        function fetchCart() {
            console.log("adasd");
        
            var url = '{{ url("/order") }}';
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                success: function (jsonData) {
                    // jsonData=data.data;
                    if (jsonData.length > 0) {
                        $('#myLink').removeClass('proceed');
                        $('#myLink').prop('disabled', false);
                    }
                    var sum = 0;
                    // sum =sum+parseInt(val);
                    $('#cart').empty();
                    $('#payment').empty();
                    $('#lop').empty();
                    for (var i = 0; i < jsonData.length; i++) {
                        sum += ((jsonData[i]['orderAmount'] * currencyUnit).toFixed(2)) * jsonData[i]['orderQuantity'];
                        
                        // console.log(jsonData[i]);
                        // var productImage = '{{URL::asset('distweb/img/images/products') }}'+ '/'+jsonData[i]['productImage'];
                        // console.log(productImage);
                        
                        $('#cart').append('<tr class="cart_item">' +
                            '<td class="product-remove">' +
                            '<a id="' + jsonData[i]['id'] + '" class="remove" href="javascript:void(0)"><i class="fa fa-times"></i></a>' +
                            '</td>' +
                            '<td class="product-thumbnail">' +
                            // '<a href="#"><img  src="'+productImage+'" alt=""/></a>'+
                            // 	'<div class="avatar">' +
                            //         '<img src="' + productImage +
                            //         '" alt="item" class="avatar-img rounded-circle">' +
                            //         '</div>'+
                            '<a id="wish" href="javascript:void(0)"><i class="fa fa-heart"></i></a>' +
                            '</td>' +
                            '<td class="product-name">' +
                            '<a href="#">' + jsonData[i]['orderShipName'] + '</a>' +
                            '</td>' + '<td class="product-price">' +
                            '<span>'+symbolUnit+'</span><span class="amount  price' + jsonData[i]['id'] + '">' +(jsonData[i]['orderAmount'] * currencyUnit).toFixed(2)+'</span>' +
                            '</td>' +
                            '<div class="twoCol">' +
                            '<td class="product-quantity">' +
                            '<div class="detail-qty border radius">' +
                            '<a href="javascript:void(0);" class="qty-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>' +
                            '<span class="qty-val" id="' + jsonData[i]['id'] + '">' + jsonData[i]['orderQuantity'] + '</span>' +
                            '<a href="javascript:void(0);" class="qty-up"><i class="fa fa-caret-up" aria-hidden="true"></i>' +
                            '</a>' +
                            '</div>' +
                            '</td>' +
                            '<td class="product-subtotal">' +
                            '<span class="amount amount-per-item productPrice_' + jsonData[i]['id'] + '">' + ((jsonData[i]['orderAmount'] * currencyUnit).toFixed(2))* jsonData[i]['orderQuantity'] + '</span>' +
                            '</td>' +
                            '<div>' +
                            '</tr>');
                    }
                    // <button class="checkout-button button alt wc-forward proceed">View Benefits</button>
                    if (jsonData.length > 0) {
                        $('#cart').append(                         
                        '<tr>'+'<td class="actions" colspan="6">'+
                                        '<div class="coupon">'+
                                            '<label for="couponCode">Coupon:</label>'+
                                            '<input type="text" placeholder="Coupon code" value="" id="couponCode" class="input-text" name="couponCode">'+
                                                   '<input type="submit" value="Apply Coupon" name="applyCoupon" id= "applyCoupon" class="button">'+
                                                   '</div>'+
                                                   '<input type="submit" value="Remove Coupon"  name="removeCoupon" id="none" class="button removeCoupon">'+
                                                   '</td>'+
                                                   '</tr>');
                        $('#payment').append('<div class="container"><div class="row text-center"><h2 class="orange"><strong>We recommend subscribing to our Support Packages</strong></h2><div class="col-sm-1"></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/not_interested.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Not Interested, Thank You!</strong></h5><p class="card-text">NO EXTRA SERVICES OR BENEFITS.</p></div><ul class="list-group list-group-flush"><li class="list-group-item">No Extra Benefits</li><li class="list-group-item"><input class="form-check-input" type="radio" value="0" id="defaultCheck1" name="support" checked>&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit+ ((0 * currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/smartphone.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Basic</strong></h5><p class="card-text">SMART PHONE & GAME CONSOLE REPAIR.</p></div><ul class="list-group list-group-flush"><li class="list-group-item"><a href="/packages" class="card-link">View Benefits</a></li><li class="list-group-item"><input class="form-check-input" type="radio" value='+((39 * currencyUnit).toFixed(2))+' id="defaultCheck1" name="support">&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit+ ((39 * currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/printer_rep.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Standard</strong></h5><p class="card-text">PRINTER & ROUTER REPAIR SERVICE.</p></div><ul class="list-group list-group-flush"><li class="list-group-item"><a href="/packages" class="card-link">View Benefits</a></li><li class="list-group-item"><input class="form-check-input" type="radio" value='+((49 * currencyUnit).toFixed(2))+' id="defaultCheck1" name="support">&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit+ ((49 *currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/computer_repair.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Pro</strong></h5><p class="card-text">COMPUTER REPAIR & OPTIMIZATION.</p></div><ul class="list-group list-group-flush"><li class="list-group-item"><a href="/packages" class="card-link">View Benefits</a></li><li class="list-group-item"><input class="form-check-input" type="radio" value='+((99 * currencyUnit).toFixed(2))+' id="defaultCheck1" name="support">&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit+ ((99 * currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/amc.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Ultimate</strong></h5><p class="card-text">ANNUAL MAINTENANCE CONTRACT.</p></div><ul class="list-group list-group-flush"><li class="list-group-item"><a href="/packages" class="card-link">View Benefits</a></li><li class="list-group-item"><input class="form-check-input" type="radio" value='+((299 * currencyUnit).toFixed(2))+' id="defaultCheck1" name="support" >&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit + ((299 * currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-1"></div></div></div><br>');
                    }

                    $('#lop').append('<div class="cart_totals ">' + '<h2>Cart Totals</h2>' + '<div class="table-responsive">' + '<table cellspacing="0" class="table">' + '<tbody>' + '<tr class="cart-subtotal">' + '<th>Subtotal</th>' + '<td><strong class="amounts" id="subTotalAmounts" sum="' + sum + '">'+symbolUnit+'<span id="subTotalAmount"></span></strong></td>' + '</tr>' + '<tr class="shipping">' + '<th>Shipping</th>' + '<td>' + '<ul id="shipping_method">' + '<li>' + '<input type="radio" class="shipping_method" checked="checked" value="free_shipping" id="shipping_method_0_free_shipping" data-index="0" name="shipping_method[0]">' + '<label for="shipping_method_0_free_shipping">Free Shipping</label>' + '</li>' + '<li>' + '<input type="radio" class="shipping_method" value="local_delivery" id="shipping_method_0_local_delivery" data-index="0" name="shipping_method[0]">' + '<label for="shipping_method_0_local_delivery">Local Delivery (Free)</label>' + '</li>' + '<li>' + '<input type="radio" class="shipping_method" value="local_pickup" id="shipping_method_0_local_pickup" data-index="0" name="shipping_method[0]">' + '<label for="shipping_method_0_local_pickup">Local Pickup (Free)</label>' + '</li>' + '</ul>' + '</td>' + '</tr>' + 
                   
                    '<tr class="coupon-total">' + '<th>Coupon Discount</th>' + '<td><strong><span class="discountTotal"  id="totalDiscount">' + couponDiscount + '</span></strong> </td>' + '</tr>' + 


                    '<tr class="order-total">' + '<th>Total</th>' + '<td><strong><span class="amount sumTotal"  id="' + sum + '">'+symbolUnit+ sum + '</span></strong> </td>' + '</tr>' + 

                    '</tbody>' + '</table>' + '</div>' + '</div>');
                    $('#subTotalAmount').text(sum);
                }

            });
        }

        function applyCoupon(){
            
            var token =  '{{ Session::get('user_access_token') }}';
            var couponCode = $('#couponCode').val();
           
            $.ajax({
            url: "{{ url('/applycoupon') }}",
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {
                couponCode : couponCode,
               
                '_token': "{{ csrf_token() }}",
            },
            success: function (data) {
                if (data.error) {
                    showToast(data.error, "", "warning");
                }
                else{
                    $(".removeCoupon").attr('id', data[0]['id']);
                          if(data[0]['amountType'] == 'Fixed'){
                                couponAmount = data[0]['discountAmount'];
                            $('.discountTotal').text(couponAmount);
                            var total = $('.sumTotal').text();
                            $('.sumTotal').text(total - couponAmount);
                            
                              
                            }
                            else{
                                
                                var totalAmount=$('#subTotalAmount').text();
                                  couponAmount = totalAmount * (data[0]['discountAmount']/100).toFixed(2);
                                  $('.discountTotal').text(couponAmount.toFixed(2));
                                
                                 console.log(couponAmount);
                            }
                            showToast("Coupon Added Sucessfully","", "success");
                        
                            
                          }
                           
            }
        });
    
        }

        function removeCoupon(){
             var token =  '{{ Session::get('user_access_token') }}';
           var id= $(".removeCoupon").attr('id'); //coupon id
           var url = '{{ url("/deletecoupon", "id") }}';
	         url = url.replace('id', id);
	     $.ajax({
			url: url,
			type: 'POST',
			dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
			data: {
               id:id,
				"_token": "{{ csrf_token() }}",
				'_method':'delete',
			},
			success: function (data) {
                // console.log(data.message);
                if(data.message){
                    showToast(data.message,"", "success");
					}
                    if(data.error){
                    showToast(data.error,"", "error");
                }
				fetchCart();
			}
	});
}

       

        function fetchTempCart() {

            var url = '{{ url("/showtempcart") }}';
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'JSON',

                success: function (jsonData) {
                    if (jsonData.length > 0) {
                        $(document).on('mouseover', '.wc-proceed-to-checkout', function () {
                            // document.location.href = "{!! URL::to('login'); !!}";
                            showToast("Please login first","", "warning");

                        });
                        // $('#myLink').removeClass('proceed');
                        $('#myLink').prop('disabled', true);


                    }//lenght if close
                    var sum = 0;
                    $('#cart').empty();
                    $('#payment').empty();
                    $('#lop').empty();
                    console.log(jsonData);
                    for (var i = 0; i < jsonData.length; i++) {
                
                       sum+= ((jsonData[i][0]['productPrice'] * currencyUnit).toFixed(2)) * 1;
                       $('#cart').append('<tr class="cart_item">' +
                            '<td class="product-remove">' +
                            '<a id="' + jsonData[i][0]['id'] + '" class="remove" href="javascript:void(0)"><i class="fa fa-times"></i></a>' +
                            '</td>' +
                            // '<td class="product-thumbnail">' +
                            // '<a href="#"><img  src="'+productImage+'" alt=""/></a>'+
                            // 	'<div class="avatar">' +
                            //         '<img src="' + productImage +
                            //         '" alt="item" class="avatar-img rounded-circle">' +
                            //         '</div>'+
                            // '<a id="wish" href="javascript:void(0)"><i class="fa fa-heart"></i></a>' +
                            // '</td>' +
                            '<td class="product-name">' +
                            '<a href="#">' + jsonData[i][0]['productName'] + '</a>' +
                            '</td>' + '<td class="product-price">' +
                            '<span>'+symbolUnit+'</span><span class="amount">' + ((jsonData[i][0]['productPrice'] * currencyUnit).toFixed(2)) + '</span>' +
                            '</td>' + '<td class="product-subtotal">' +
                            '<span class="amount productPrice">' + ((jsonData[i][0]['productPrice']*currencyUnit).toFixed(2)) + '</span>' +
                            '</td>' +
                            '</tr>');
                    }

                    // <button class="checkout-button button alt wc-forward proceed">View Benefits</button>
                    if (jsonData.length > 0) {
                        $('#payment').append('<div class="container"><div class="row text-center"><h2 class="orange"><strong>We recommend subscribing to our Support Packages</strong></h2><br><div class="col-sm-1"></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/not_interested.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Not Interested, Thank You!</strong></h5><p class="card-text">NO EXTRA SERVICES OR BENEFITS.</p></div><ul class="list-group list-group-flush">    <li class="list-group-item">No Extra Benefits</li><li class="list-group-item"><input class="form-check-input" type="radio" value="0" id="defaultCheck1" name="support" checked>&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit+ ((0 * currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/smartphone.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Basic</strong></h5><p class="card-text">SMART PHONE & GAME CONSOLE REPAIR.</p></div><ul class="list-group list-group-flush"><li class="list-group-item"><a href="/packages" class="card-link">View Benefits</a></li><li class="list-group-item"><input class="form-check-input" type="radio" value='+((39 * currencyUnit).toFixed(2))+' id="defaultCheck1" name="support">&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit+ ((39 * currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/printer_rep.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Standard</strong></h5><p class="card-text">PRINTER & ROUTER REPAIR SERVICE.</p></div><ul class="list-group list-group-flush"><li class="list-group-item"><a href="/packages" class="card-link">View Benefits</a></li><li class="list-group-item"><input class="form-check-input" type="radio" value='+((49 * currencyUnit).toFixed(2))+' id="defaultCheck1" name="support">&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit+ ((49 * currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/computer_repair.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Pro</strong></h5><p class="card-text">COMPUTER REPAIR & OPTIMIZATION.</p></div><ul class="list-group list-group-flush"><li class="list-group-item"><a href="/packages" class="card-link">View Benefits</a></li><li class="list-group-item"><input class="form-check-input" type="radio" value='+((99 * currencyUnit).toFixed(2))+' id="defaultCheck1" name="support">&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit+ ((99 * currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-2 mx-auto"><div class="card border" style="width: 19rem;"><img src="{{asset('distweb/img/images/amc.png')}}" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title orange"><strong>Ultimate</strong></h5><p class="card-text">ANNUAL MAINTENANCE CONTRACT.</p></div><ul class="list-group list-group-flush"><li class="list-group-item"><a href="/packages" class="card-link">View Benefits</a></li><li class="list-group-item"><input class="form-check-input" type="radio" value='+((299 * currencyUnit).toFixed(2))+' id="defaultCheck1" name="support">&nbsp;<label class="form-check-label" for="defaultCheck1">'+symbolUnit+ ((299 * currencyUnit).toFixed(2))+'</label></li></ul></div></div><div class="col-sm-1"></div></div></div><br>');
                    }

                    $('#lop').append('<div class="cart_totals ">' + '<h2>Cart Totals</h2>' + '<div class="table-responsive">' + '<table cellspacing="0" class="table">' + '<tbody>' + '<tr class="cart-subtotal">' + '<th>Subtotal</th>' + '<td><strong class="amounts" id="subTotalAmounts" sum="' + sum + '">'+symbolUnit+'<span id="subTotalAmount"></span></strong></td>' + '</tr>' + '<tr class="shipping">' + '<th>Shipping</th>' + '<td>' + '<ul id="shipping_method">' + '<li>' + '<input type="radio" class="shipping_method" checked="checked" value="free_shipping" id="shipping_method_0_free_shipping" data-index="0" name="shipping_method[0]">' + '<label for="shipping_method_0_free_shipping">Free Shipping</label>' + '</li>' + '<li>' + '<input type="radio" class="shipping_method" value="local_delivery" id="shipping_method_0_local_delivery" data-index="0" name="shipping_method[0]">' + '<label for="shipping_method_0_local_delivery">Local Delivery (Free)</label>' + '</li>' + '<li>' + '<input type="radio" class="shipping_method" value="local_pickup" id="shipping_method_0_local_pickup" data-index="0" name="shipping_method[0]">' + '<label for="shipping_method_0_local_pickup">Local Pickup (Free)</label>' + '</li>' + '</ul>' + '</td>' + '</tr>' + '<tr class="order-total">' + '<th>Total</th>' + '<td><strong><span id="total" class="amount">'+symbolUnit+' '+ sum + '</span></strong> </td>' + '</tr>' + '</tbody>' + '</table>' + '</div>' + '</div>');
                    $('#subTotalAmount').text(sum);
                }//sucess close


            });//ajax close

        }//fun close
		function removeItemFromTempCart(id){
	var url = '{{ url("/deletetempcart", "id") }}';
	url = url.replace('id', id);
	$.ajax({
			url: url,
			type: 'POST',
			dataType: 'JSON',
		
			data: {
				"_token": "{{ csrf_token() }}",
				'_method':'delete',
			},
			success: function (data) {
                console.log(data);
                if(data){
					showToast("item removed","", "warning");
					}else{
					showToast("Something went wrong","", "error");
					}
				fetchTempCart();
			},
	});
}

    </script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <form name='razorpayform' action="/orders" method="POST">

        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
        <input type="hidden" name="razorpay_signature" id="razorpay_signature">
        <input type="hidden" name="_token" id="_token" >

    </form>
    <script>
    </script>
    <script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('js/validateBill.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('distweb/js/toastr.min.js')}}"></script>
	

    <!-- <link href="toastr.css" rel="stylesheet"/>
        <script src="toastr.js"></script> -->
@stop
<div>
    @include('web.includes.footer')
</div>
<a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
@stop