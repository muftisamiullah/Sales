@extends('web.layouts.sidebar')
@section('content')

<div id="content">
    <div class="content-page woocommerce">
        <div class="container">
            @include('web.includes.breadcrumbs')
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-shop-page" style="font-size: 30px;">Checkout</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-ms-12">
                            <div class="check-billing">
                                <div class="form-my-account">
                                    <h2 class="title18">Billing Details</h2>
                                    <div class="form-row">
                                       <div class="col-md-12 form-group">
                                            <input id="checkoutName" placeholder="Name *" type="text" name="checkoutName"
                                                class="form-control">
                                             <small class="form-text" id="checkoutNameError"></small>
                                      </div>
                                 </div>
                        <div class="form-row">
                               <div class="col-md-6 form-group">
                                <input  placeholder="Phone *" type="text" name="checkoutPhone"
                                    class="form-control" id="checkoutPhone">
                               <small class="form-text" id="checkoutPhoneError"></small>

                               </div>
                            <div class="col-md-6 form-group">
                                <input id="checkoutState" placeholder="State *" type="text" name="checkoutState" class="form-control">
                                <small class="form-text" id="checkoutStateError"></small>
                            </div>
                        </div>
                                   
                                    <div class="form-group col-md-12">
                                                    
                                        <select class="form-control" name="checkoutCountry" id="checkoutCountry">
                                           <option value="">Country*</option>
                                            <option value="India">India</option>
                                            <option value="United State">United State</option>
                                            <option value="England">England</option>
                                            <option value="Germany">Germany</option>
                                            <option value="France">France</option>
                                         </select>
                                         <small class="form-text" id="checkoutCountryError"></small>
                                    </div>
                                        <!-- <select name="checkoutCountry" id="checkoutCountry">
                                            <option value="">Country*</option>
                                            <option value="India">India</option>
                                            <option value="United State">United State</option>
                                            <option value="England">England</option>
                                            <option value="Germany">Germany</option>
                                            <option value="France">France</option>
                                        </select>
                                        <small class="form-text" id="checkoutCountryError"></small>
                                    </p> -->
                                           
                                    <div class="form-row">
                                       <div class="col-md-12 form-group">
                                            <input id="checkoutAddress" placeholder="Address *" type="text" name="checkoutAddress"
                                                class="form-control">
                                             <small class="form-text" id="checkoutAddressError"></small>
                                      </div>
                                 </div>
                                    

                                 <div class="form-row">
                                       <div class="col-md-12 form-group">
                                            <input id="checkoutLandmark" placeholder="Landmark *" type="text" name="checkoutLandmark"
                                                class="form-control">
                                             <small class="form-text" id="checkoutLandmarkError"></small>
                                      </div>
                                 </div>

                                 <div class="form-row">
                               <div class="col-md-6 form-group">
                                <input  placeholder="PostCode / Zip *" type="text" name="checkoutZip"
                                    class="form-control" id="checkoutZip">
                               <small class="form-text" id="checkoutZipError"></small>

                               </div>
                            <div class="col-md-6 form-group">
                                <input id="checkoutCity" placeholder="City *" type="text" name="checkoutCity" class="form-control">
                                <small class="form-text" id="checkoutCityError"></small>
                            </div>
                        </div>
                                    
                                    <!-- <p> -->
                                    <!-- <input type="checkbox"  id="remember" /> <label for="remember">Create an account?</label> -->
                                    <!-- place-order -->
                                    <div class="form-row text-center">
                                        <input type="submit" value="Add Address" id="addAddress"
                                            name="addAddress" class="button alt">
                                    </div>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                        <div><h2 class="title18 text-center">Ship to a different Address</h2></div>
                        <p>
                        <div class="col-md-6 col-sm-6 col-ms-12">
                        <div class="">
                            <div class="row">
                            <div class="container"id="addressCard">
                            
                            
                            
                            </div>   
                            </div>

                            </div>
                        </div></p>
                    </div>
                    <h3 class="order_review_heading" >Your order</h3>
                    <div class="woocommerce-checkout-review-order" id="order_review">
                        <div class="table-responsive" >
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="products">
                                    <!-- <tr class="cart_item">
                                        <td class="product-name">
                                            Luphen Caunoiteng kug&nbsp; <span class="product-quantity">× 1</span>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">$68.00</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Cooc Huyinh Phale&nbsp; <span class="product-quantity">× 2</span>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">$38.00</span>
                                        </td>
                                    </tr> -->
                                </tbody>
                                 <tfoot id="footer">
                                <!--    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><strong class="amount">$106.00</strong></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td>
                                            <ul id="shipping_method" class="list-none">
                                                <li>
                                                    <input type="radio" class="shipping_method" checked="checked"
                                                        value="free_shipping" id="shipping_method_0_free_shipping"
                                                        data-index="0" name="shipping_method[0]">
                                                    <label for="shipping_method_0_free_shipping">Free Shipping</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="shipping_method" value="local_delivery"
                                                        id="shipping_method_0_local_delivery" data-index="0"
                                                        name="shipping_method[0]">
                                                    <label for="shipping_method_0_local_delivery">Local Delivery
                                                        (Free)</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="shipping_method" value="local_pickup"
                                                        id="shipping_method_0_local_pickup" data-index="0"
                                                        name="shipping_method[0]">
                                                    <label for="shipping_method_0_local_pickup">Local Pickup
                                                        (Free)</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong><span class="amount">$106.00</span></strong> </td>
                                    </tr>-->
                                </tfoot>
                            </table>
                        </div>
                        <div class="woocommerce-checkout-payment" id="payment">
                            <ul class="payment_methods methods list-none">
                                <!-- <li class="payment_method_bacs">
                                    <input type="radio" data-order_button_text="" value="bacs" name="payment_method"
                                        class="input-radio" id="payment_method_bacs" checked="checked">
                                    <label for="payment_method_bacs">Direct Bank Transfer </label>
                                    <div class="payment_box payment_method_bacs">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as
                                            the payment reference. Your order won’t be shipped until the funds have
                                            cleared in our account.</p>
                                    </div>
                                </li> -->
                                <!-- <li class="payment_method_cheque">
                                    <input type="radio" data-order_button_text="" value="cheque" name="payment_method"
                                        class="input-radio" id="payment_method_cheque">
                                    <label for="payment_method_cheque">Cheque Payment </label>
                                    <div class="payment_box payment_method_cheque">
                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State
                                            / County, Store Postcode.</p>
                                    </div>
                                </li> -->
                                <li class="payment_method_cod">
                                    <input type="radio" data-order_button_text="" value="cod" checked name="payment_method"
                                        class="input-radio" id="payment_method_cod">
                                    <label for="payment_method_cod">Cash on Delivery </label>
                                    <div class="payment_box payment_method_cod">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </li>
                                <li class="payment_method_paypal">
                                   <input type="radio" data-order_button_text="Proceed to PayPal" value="online"
                                       name="payment_method" class="input-radio" id="payment_method_paypal">
                                   <label for="payment_method_paypal">
                                       Online <img alt="PayPal Acceptance Mark"
                                           src="{{asset('distweb/img/images/shop/payment.png')}}">
                                   </label>
                                   <div class="payment_box payment_method_paypal">
                                       <p>Pay online; you can pay with your credit card if you don’t have a PayPal
                                           account.</p>
                                   </div>
                               </li>
                            </ul>
                            <div class="form-row place-order">
                    
                                        <input type="submit" value="Place Order" id="placeOrder"
                                            name="placeOrder" class="button alt">
                                    
                            </div>
                        </div>
                    </div>
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
<script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validateBill.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    fetchAddress();
    fetchProducts();
    $(document).on('click', '#addAddress', function() {
        console.log("before calling save");
        addAddress();
    });
    $(document).on('click', '#placeOrder', function() {
        placeOrder();
    });
});
function fetchProducts() {
    var token = '{{ Session::get('user_access_token') }}';
    var $url=decodeURIComponent(window.location.href);
    var ids = $url.split(',');
    let searchParams = new URLSearchParams($url);
    // console.log($url);
    $total= searchParams.get("a");
    // console.log($total);
    for(var i=1;i<ids.length-1;i++){
        // console.log(ids[i]);
    var url = '{{ url("/api/order","id") }}';
    url = url.replace('id', ids[i]);
         $.ajax({
            url: url,
            type: 'GET', 
            dataType: 'JSON',
			headers: {"Authorization": 'Bearer ' + token},
            success: function(jsonData) {
				// console.log(jsonData.data.orderShipName);
                $('#products').append('<tr class="cart_item">'+'<td class="product-name">'+jsonData.data.orderShipName+'<span class="product-quantity">× 1</span>'+'</td>'+'<td class="product-total"><span class="amount">$'+jsonData.data.orderAmount+'</span></td>'+'</tr>');
            }
         }); }
         $('#footer').append('<tr class="order-total">'+'<th>Total</th>'+'<td><strong><span id="total" class="amount">'+$total+'</span></strong></td>'+'</tr>');
}
function addAddress() {
    var token = '{{ Session::get('user_access_token') }}';
    // console.log(token);

    var isValid = true;
    $("input[type=text].validate-required,input[type=email].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required")
        .each(function() {
            // alert('hello');

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
        success: function(data) {
            fetchAddress();
            // console.log(data);
            switch (data['result']) {
                case 'success':
                    _isDirty = false;
                    swal({
                        title: data['title'],
                        text: data['message'],
                        icon: data['result'],
                        button: "OK",
                        timer: 2000,
                    }).then(function() {
                        document.location.href = "{!! URL::to('/checkout'); !!}";
                    });
                    break;
                case 'error':
                    swal({
                        title: data['title'],
                        text: data['message'],
                        icon: data['result'],
                        button: "OK",
                    });
                    break;
            }
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
        success: function(jsonData) {
            console.log(jsonData.data);
            $('#addressCard').empty();
            for (var info in jsonData.data) {


               
                $('#addressCard').append(
                '<div class="col-md-5 col-sm-5 col-xs-12 border col-xs-offset-1 currentCard" id="' + jsonData.data[info]['id'] + '">'+
                                    '<div class="">'+
                                    '<span class="cross pr-6"></span>'+'<span class="tick"></span>'+
                                        '<div class="service-info">'+
                                            '<h2 class="title14">' + jsonData.data[info]['name'] +'</h2>'+
                                             '<p>' + jsonData.data[info]['phone'] +'</p>'+
                                               '<ul class="list-unstyled">'+
                                                '<li><a href="#">'+' Address: '+' ' +jsonData.data[info]['address'] +'</a></li>'+
                                                '<li><a href="#">'+' City: '+' ' +jsonData.data[info]['city'] +'</a></li>'+
                                                '<li><a href="#">'+' State: '+' ' +jsonData.data[info]['state'] +'</a></li>'+
                                                '<li><a href="#">'+' Country: '+' ' +jsonData.data[info]['country'] +'</a></li>'+
                                                '<li><a href="#">'+' Zip: '+' ' +jsonData.data[info]['zip'] +'</a></li>'+
                                                '<li><a href="#">'+' LandMark: '+' ' +jsonData.data[info]['landMark'] +'</a></li>'+
                                                
                                                
                                            '</ul>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>')
                 }//loop close

                        $('.currentCard').click(function(){
                            $('.currentCard .tick').hide();
                             $('.currentCard').css('border-color','#e5e5e5');
                              $(this).css('border-color','green');
                              $('.tick', this).show();
                               var id= $(this).attr('id');
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
                                                                success: function(data) {
                                                                }

                                                                            });//ajax close


                           

                        });//click fun close


                              


           

              //delete from db

                    $('.currentCard').one('mouseenter',function(){
                                    
                                    var id= $(this).attr('id');
                                    console.log(id);
                                $('.cross', this).click(function(){
                                  
                                   
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
                                              fetchAddress();
                                           },
                                          
                                   });//ajax close
                                   
                           
                               });//click close
                            
                    
                            });//mouseenter close

            $('.currentCard').first().css('border-color','green');
            $('.currentCard .tick').append('<i class="fa fa-check" aria-hidden="true"></i>')
            .css({"color":"green","float":"right","font-size":"20px"});
            $('.currentCard .tick').hide();
            $('.currentCard .tick').first().show();
            $('.currentCard .cross').append('<i class="fa fa-window-close" aria-hidden="true"></i>')
            .css({"color":"red","float":"right","font-size":"20px","padding-left":"8px"});
        }
    });

}
function placeOrder(){
    var paymentMethod=$('input[name="payment_method"]:checked').val();
    
    if(paymentMethod =='cod'){
      var token = '{{ Session::get('user_access_token') }}';
 
        $.ajax({
            url:"{{ url('/placeOrder') }}",
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {
                paymentMethod: paymentMethod,
                "_token": "{{ csrf_token() }}",
            },
            success: function(data) {
                console.log(data);
                //   document.location.href = "{!! URL::to('/sucess'); !!}";
                window.location.href="/sucess";
            }
        });
    }
    else{       
                var $total=$('#total').text();
                console.log($total);
                var url='order='+"order"+'&total='+$total
                console.log(url);
                window.location.href = '/pay' + '?'+encodeURIComponent(url);
                //   document.location.href = "{!! URL::to('/sucess'); !!}";
                // window.location.href="/pay";
        }
}
</script>
@stop
<div>
    @include('web.includes.footer')
</div>
<a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
@stop