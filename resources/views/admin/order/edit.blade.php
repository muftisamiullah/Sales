@extends('admin.layouts.sidebar')
@section('content')
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    @include('admin.includes.breadcrumb')
    <!-- /Breadcrumb -->
    <!-- Container -->
    <div class="container">

        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title">
                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span>
                </span>Order</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Edit Order</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row justify-content-md-center">
                                <div class="form-group col-md-4">
                                    <label for="OrderName" class="colored label-required">Order Name</label>
                                    <input type="text" class="form-control validate-required" id="orderShipName"
                                        placeholder="Order Name" name="orderShipName">
                                    <small class="form-text text-danger d-none" id="orderShipNameHelp">Order Name is
                                        required</small>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="orderPhone" class="colored label-required">Phone</label>
                                    <input type="number" class="form-control validate-required" id="orderPhone"
                                        placeholder="Phone" name="phone">
                                        <small class="form-text text-danger d-none" id="orderPhoneHelp">Phone is
                                        required</small>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="orderAmount" class="colored label-required">Amount</label>
                                    <input type="number" class="form-control validate-required" id="orderAmount"
                                        placeholder="Amount" name="orderAmount">
                                        <small class="form-text text-danger d-none" id="orderAmountHelp">Amount is
                                        required</small>                              
                                          </div>
                            </div>


                            <div class="row justify-content-md-center ">
                           
                            <div class="form-group col-md-4">
                                    <label for="orderShipAddress" class="colored label-required">Ship Address</label>
                                    <input type="text" class="form-control validate-required" id="orderShipAddress"
                                        placeholder="Order Ship Address" name="orderShipAddress">
                                        <small class="form-text text-danger d-none" id="orderShipAddressHelp">Ship Address is
                                        required</small>
                            </div>

                            <div class="form-group col-md-4">
                                    <label for="orderState" class="colored label-required">State</label>
                                    <input type="text" class="form-control validate-required" id="orderState"
                                        placeholder="Order State" name="orderState">
                                        <small class="form-text text-danger d-none" id="orderStateHelp">State is
                                        required</small>
                            </div>

                            <div class="form-group col-md-4">
                                    <label for="orderCountry" class="colored label-required">Country</label>
                                    <input type="text" class="form-control validate-required" id="orderCountry"
                                        placeholder="Order Country" name="orderCountry">
                                        <small class="form-text text-danger d-none" id="orderCountryHelp">Order Country is
                                        required</small>
                            </div>
                            </div>
                            <!-- <div class="row justify-content-md-center">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="colored">Manufacturer Part</label>
                                    <input type="text" class="form-control" id="manufacture"
                                        placeholder="Manufacturer Part" name="manufacture">
                                    <small class="form-text" style="color:red"></small>
                                </div>-->
                            <!-- <div class="form-group col-md-12"> -->

                            <!-- </div> -->
                            <!-- </div>  -->
                            <div class="row justify-content-md-center">
                                <div class="form-group col-md-6">
                                    <label for="orderEmail" class="colored label-required">Email</label>
                                    <input type="orderEmail" id="orderEmail" class="form-control validate-required"
                                        placeholder="Order Email" name="orderEmail">
                                        <small class="form-text text-danger d-none" id="orderEmail">Email is
                                        required</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="orderStatus" class="colored label-required">Order Status</label>
                                   
                                    <select name="orderStatus" id="orderStatus" class="form-control validate-required">
                                        <option value="0">In Cart</option>
                                        <option value="1">Processing</option>
                                        <option value="2">Shipped</option>
                                        <option value="3">Delivered</option>
                                        <option value="4">Wishlist</option>
                                    </select>
                                    
                                </div>
                                <!-- <div class="form-group col-md-4">
                                    <label for="orderStatus" class="colored label-required">Order Status</label>
                                   
                                    <select name="orderStatus" id="orderStatus" class="form-control validate-required">
                                        <option value="0">Not Delivered</option>
                                        <option value="1">Delivered</option>
                                    </select>
                                    
                                </div> -->

                            </div>
                           


                            <hr>
                            <div class="row justify-content-md-center">
                                <button id="saveOrder" class="btn btn-primary mr-10">Save</button>
                                <button id="cancelOrder" class="btn btn-light">Cancel</button>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->
    @section('page-script')
    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Jasny-bootstrap  JavaScript -->
    <script src="{{asset('vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- Ion JavaScript -->
    <script src="{{asset('vendors/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('dist/js/rangeslider-data.js')}}"></script>
    <!-- <script src="{{asset('js/validate.js')}}"></script> -->

    <!-- Select2 JavaScript -->
    <script src="{{asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('dist/js/select2-data.js')}}"></script>

    <!-- Bootstrap Tagsinput JavaScript -->
    <script src="{{asset('vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>

    <!-- Daterangepicker JavaScript -->
    <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('dist/js/daterangepicker-data.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('dist/js/feather.min.js')}}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('dist/js/sweetalert.min.js')}}"></script>
    <!-- Toggles JavaScript -->
    <script src="{{asset('vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('dist/js/toggle-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('dist/js/init.js')}}"></script>
    <!-- Custom JavaScript -->
    <!-- Custom JavaScript -->
    <script type="text/javascript">
    // my custom script
    var _isDirty = false;
    $(document).ready(function() {
    
        console.log("in redy");
        $(":input").change(function() {
            _isDirty = true;
        });
        // Fetch By Id

        $(document).on("keyup change keydown click","input[type=text].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required",
        function() {
                var input = $(this).attr('id');
                $(this).removeClass("is-invalid").addClass("is-valid");
                    $("small#" + input + 'Help').addClass('d-none');
                    // $('.fileinput').removeClass("is-invalid-file").addClass("is-valid-file");

        });
        console.log("in ready1");

        fetchById();
        // Save Function
        console.log("in ready2");

        $(document).on('click', '#saveOrder', function() {
            // alert('call save product');
            saveOrder();
        });
        // Cancel Function
        $(document).on('click', '#cancelOrder', function() {
            if (_isDirty) {
                swal({
                        title: "",
                        text: "Do you want to Close without saving the changes?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            document.location.href = "{!! URL::to('admin/order'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('admin/order'); !!}";
            }
        });
    });

    function fetchById() {
        var token =  '{{ Session::get('access_token') }}';
        console.log("hello1");
        var id = "{!! $id !!}";
        console.log(id);
        var url = '{{ url("/api/order", "id") }}';
        console.log(url);
        url = url.replace('id', id);

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {},
            success: function(jsonData) {
                console.log(jsonData.data);
                $('#orderShipName').val(jsonData.data.orderShipName);
                $('#orderPhone').val(jsonData.data.orderPhone);
                $('#orderAmount').val(jsonData.data.orderAmount);
                $('#orderStatus').val(jsonData.data.orderStatus);
                $('#orderShipAddress').val(jsonData.data.orderShipAddress);
                $('#orderCountry').val(jsonData.data.orderCountry);
                $('#orderState').val(jsonData.data.orderState);
                $('#orderShipped').val(jsonData.data.orderShipped);
                $('#orderEmail').val(jsonData.data.orderEmail);
               
            }
        });
    }

    function saveOrder() {
        var token =  '{{ Session::get('access_token') }}';
        var isValid = true;
        $("input[type=text].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required")
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







        var id = "{!! $id !!}";
        var url = '{{ url("/api/order", "id") }}';
        url = url.replace('id', id);
        
        var form_data = new FormData();
       
        form_data.append('orderShipName', $('#orderShipName').val());
        form_data.append('orderPhone', $('#orderPhone').val());
        form_data.append('orderAmount', $('#orderAmount').val());
        form_data.append('orderStatus', $('#orderStatus').val());
        form_data.append('orderShipAddress', $('#orderShipAddress').val());
        form_data.append('orderCountry', $('#orderCountry').val());
        form_data.append('orderState', $('#orderState').val());
        form_data.append('orderShipped', $('#orderShipped').val());
        form_data.append('orderEmail', $('#orderEmail').val());
        form_data.append('_method','PUT');
        // var productName = $('#productName').val();
        // var price = $('#price').val();
        // var weight = $('#weight').val();
        // var category = $('#category').val();
        // var stock = $('#stock').val();
        // var location = $('#location').val();

        // var description = $('#description').val();
        // var cartDescription = $('#cartDescription').val();
        // var prePrice = $('#prePrice').val();
        $.ajax({
            url: url,
             cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        headers: {"Authorization": 'Bearer ' + token},
        data: form_data,
       
            success: function(data) {
                console.log(data);
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
                            document.location.href = "{!! URL::to('admin/order'); !!}";
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

    
    </script>
    @stop
    <!-- Footer -->
    <div class="hk-footer-wrap container">
        @include('admin.includes.footer')
    </div>
    <!-- /Footer -->
</div>
@stop