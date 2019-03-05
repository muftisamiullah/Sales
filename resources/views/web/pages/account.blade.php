@extends('web.layouts.sidebar')
@section('content')

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        @include('web.includes.breadcrumbs')
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <!-- <h2 class="page-heading">
            <span class="page-heading-title2">My Account</span>
        </h2> -->
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row text-center">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <!-- <div class="box-authentication"> -->
                    <!-- <form method="post" id="signup" action="/"> -->
                    <!-- @csrf -->
                    <!-- <h3>My Profile</h3> -->
                    <!-- <p>Please enter your email address to create an account.</p> -->
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input placeholder="First Name" type="text" name="fname" class="form-control" id="fname">
                            <small class="form-text text-danger" id="fnameerror"></small>

                        </div>
                        <div class="col-md-6 form-group">
                            <input id="lname" placeholder="Last Name" type="text" name="lname" class="form-control">
                            <small class="form-text text-danger" id="lnameerror"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <input id="email1" placeholder="Email" type="text" name="email" class="form-control"
                                readonly>
                            <small class="form-text text-danger" id="email1Nameerror"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <input id="phone" placeholder="Phone" type="text" name="phone" class="form-control">
                            <small class="form-text text-danger" id="phoneError"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input id="passwordRegistration" type="password" name="password" placeholder="Password"
                                class="form-control">
                            <small class="form-text text-danger" id="passwordRegistrationNameerror"></small>

                        </div>
                        <div class="col-md-6 form-group">
                            <input id="passwordRegistration1" type="password" name="password1"
                                placeholder="Confirm Password" class="form-control">
                            <small class="form-text text-danger" id="passwordRegistration1Nameerror"></small>

                        </div>
                    </div>
                    <!-- <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input  placeholder="City" type="text" name="city"
                                    class="form-control" id="city">
                            </div>
                            <div class="col-md-6 form-group">
                                <input id="state" placeholder="State" type="text" name="state" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input  placeholder="Zip" type="text" name="zip"
                                    class="form-control" id="city">
                            </div>
                            <div class="col-md-6 form-group">
                                <input id="country" placeholder="Country" type="text" name="country" class="form-control">
                            </div>
                        </div> -->
                    <button class="button" id="saveUser" type="submit"><i class="fa fa-user"></i> Update</button>
                    <!-- </div> -->
                    <!-- </form> -->
                </div>
            </div>
            <!---------------------------------------------------- update address ------------------------------------------------------->
            <br><br>
                <!-- <nav class="bread-crumb radius container" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light bg-transparent mb-0">
                        <li class="breadcrumb-item p-6"><a href="http://127.0.0.1:8000">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Address</li>
                    </ol>
                </nav> -->
                <!-- {{$title ='My Address'}} -->
                @include('web.includes.breadcrumbs')
            <div class="row text-center">
                
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <!-- <div class="box-authentication"> -->
                    <!-- <form method="post" id="signup" action="/"> -->
                    <!-- @csrf -->
                    <!-- <h3>My Profile</h3> -->
                    <!-- <p>Please enter your email address to create an account.</p> -->
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

                    <button class="button" id="saveAddress" type="submit"><i class="fa fa-user"></i> Update</button>

                </div>
                <div class="col-md-2">
                </div>
            </div>
            <!-- --------------------------------------------------------------------------------------------------------------------- -->

        </div>
    </div>
</div>



@section('page-script')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery.actual.min.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('distweb/js/libs/theme-script1.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('js/validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/validateBill.js') }}"></script>
<script type="text/javascript" src="{{asset('distweb/js/toastr.min.js')}}"></script>
<script type="text/javascript">
// my custom script
$(document).ready(function() {

    fetchUser();
    fetchAddress();

    // $(document).on('click', '#saveUser', function() {
    // saveUser();      // ***************function call in validate.js****************
    // });
    //  $(document).on('click', '#saveAddress', function() {
    //        saveAddress();      // ***************function call in validateBill.js****************
    //  });
});

function fetchAddress() {
    var token = '{{ Session::get('user_access_token') }}';
    var url = '{{ url("/currentaddress") }}';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'JSON',
        headers: {
            "Authorization": 'Bearer ' + token
        },
        data: {},
        success: function(jsonData) {
          
            console.log(jsonData);
            // console.log(jsonData[0]['phone']);
            
            $('#checkoutPhone').val(jsonData[0]['phone']);
            $('#checkoutName').val(jsonData[0]['name']);
            $('#checkoutState').val(jsonData[0]['state']);
            $('#checkoutCountry').val(jsonData[0]['country']);
            $('#checkoutAddress').val(jsonData[0]['address']);
            $('#checkoutLandmark').val(jsonData[0]['landMark']);
            $('#checkoutZip').val(jsonData[0]['zip']);
            $('#checkoutCity').val(jsonData[0]['city']);
        }
    });
}

function fetchUser() {
    var token = '{{ Session::get('user_access_token') }}';
    var url = '{{ url("/getSingleUser") }}';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'JSON',
        headers: {
            "Authorization": 'Bearer ' + token
        },
        data: {},
        success: function(jsonData) {
            data = jsonData.data;
            console.log(jsonData);
            $('#fname').val(data.firstName);
            $('#lname').val(data.lastName);
            $('#email1').val(data.email);
            $('#phone').val(data.phone);
        }
    });
}

function saveUser() {
    var token = '{{ Session::get('user_access_token') }}';
    var url = '{{ url("/updateUserAccount") }}';
    // console.log(url);
    firstName = $('#fname').val();
    lastName = $('#lname').val();
    email = $('#email1').val();
    phone = $('#phone').val();
    password = $('#passwordRegistration').val();
    // console.log("ejjj");
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        headers: {
            "Authorization": 'Bearer ' + token
        },
        data: {
            firstName: firstName,
            lastName: lastName,
            email: email,
            phone: phone,
            password: password,
            '_method': 'PUT',
            '_token': "{{ csrf_token() }}",
        },
        success: function(jsonData) {
            console.log(jsonData);
            if (jsonData) {
                showToast("Account Updated!", "Kindly Re-login", "success");
            } else {
                showToast("Something went wrong", "", "error");
            }
            window.location.href = '/login';
        }
    });
}

function saveAddress() {
    var token = '{{ Session::get('user_access_token') }}';
    var url = '{{ url("/currentaddress") }}';
           var phone= $('#checkoutPhone').val();
           var name= $('#checkoutName').val();
           var state= $('#checkoutState').val();
           var country = $('#checkoutCountry').val();
           var address = $('#checkoutAddress').val();
           var landmark = $('#checkoutLandmark').val();
           var zip= $('#checkoutZip').val();
           var city=$('#checkoutCity').val();
    // console.log("ejjj");
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        headers: {
            "Authorization": 'Bearer ' + token
        },
        data: {
            phone : phone,    
            name : name,
            state :  state,
            country :  country,
            address :  address,
            landmark :  landmark,
            zip  :  zip,
            city  :  city,
            '_method': 'PUT',
            '_token': "{{ csrf_token() }}",
        },
        success: function(jsonData) {
            console.log(jsonData);
            if (jsonData) {
                showToast("Account Updated!", "", "success");
            } else {
                showToast("Something went wrong", "", "error");
            }
            // window.location.href = '/login';
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