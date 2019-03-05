@extends('web.layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Error!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('error') !!}
            @if($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('success') !!}
            <div class="panel panel-default">
                <div class="panel-heading">Pay Securely</div>

                <div class="panel-body text-center">
                    <form action="{!!route('orders')!!}" method="POST" >
                        <!-- Note that the amount is in paise = 50 INR -->
                        <!--amount need to be in paisa-->
                        <!-- Name: <input type="text" name="cname" required><br>
                        Phone : <input type="phone" name="cphone" required><br>
                        Email : <input type="email" name="cemail" required><br> -->
                        <!-- <script>
                         var $url=decodeURIComponent(window.location.href);
                        // console.log($url);
                        let searchParams = new URLSearchParams($url);
                        $total= 10000;//searchParams.get("total")*100;
                        var dataAmount ='data-amount='+$total

                        console.log(dataAmount);
                        </script>-->
                        <!-- <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="rzp_test_jp7UawxsbeQTFU"
                                dataAmount=1000
                                data-buttontext="Pay 10 INR"
                                data-name="Laravelcode"
                                data-description="Order Value"
                                data-image="yout_logo_url"
                                data-prefill.name="name"
                                data-prefill.email="email"
                                data-theme.color="#ff7529">
                        </script> -->
                        <button id="rzp-button1">Pay</button>
                        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                        <script>
                        // var $url=decodeURIComponent(window.location.href);
                        // // console.log($url);
                        // let searchParams = new URLSearchParams($url);
                        // $total= searchParams.get("total")*100;
                        // console.log($total);
                        var options = {
                            "key": "rzp_test_jp7UawxsbeQTFU",
                            "amount": 1000, // 2000 paise = INR 20
                            "name": "Anti Virus Sales",
                            "description": "Purchase Description",
                            "image": "public/distweb/img/logo.png",
                            "handler": function (response){
                                console.log(response);
                                alert(response.razorpay_payment_id);
                             },
                            "prefill": {
                                "name": "Gaurav Kumar",
                                "email": "test@test.com"
                            },
                            "notes": {
                                "address": "Hello World"
                            },
                            "theme": {
                                "color": "#F37254"
                            }
                        };
                        var rzp1 = new Razorpay(options);

                        document.getElementById('rzp-button1').onclick = function(e){
                            rzp1.open();
                            
                            e.preventDefault();
                            // return rzp1;t
                            $(this).submit();

                        }
                        </script>
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

	<div>
        @include('web.includes.footer')
    </div>
    <a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- </div> -->
@stop
