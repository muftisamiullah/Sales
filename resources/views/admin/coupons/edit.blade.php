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
                </span>Coupons</h4>
        </div>
        <!-- /Title -->

         <!-- Row -->
         <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Add Coupon</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 form-group">
                                    <label for="couponCode" class="label-required">Coupon Code</label>
                                    <input class="form-control validate-required" id="couponCode"
                                        name="couponCode" placeholder="Coupon Code" value="" type="text" minlength="5" maxlength="15 ">
                                    <small class="form-text text-danger d-none" id="couponCodeHelp">Coupon Code
                                         is required</small>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="discountAmount" class="label-required">Discount Amount</label>
                                    <input class="form-control validate-required" id="discountAmount"
                                        name="discountAmount" placeholder="Discount Amount" value="" type="number" min="1">
                                    <small class="form-text text-danger d-none" id="discountAmountHelp">Discount Amount
                                         is required</small>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                        
                              <div class="form-group col-md-6">
                                    <label for="amountType" class="colored label-required">Amount Type</label>
                                    <!-- <input type="text" class="form-control" id="media" placeholder="Media Type"
                                                name="media"> -->
                                    <select name="amountType" id="amountType" class="form-control validate-required">
                                        <option value="Percentage">Percentage</option>
                                        <option value="Fixed">Fixed</option>

                                    </select>
                                    <small class="form-text text-danger d-none" id="amountTypeHelp">Amount Type is
                                        required</small>
                                </div>
                            
                                <div class="col-md-6 form-group">
                                    <label for="expiryDate" class="label-required">Expiry Date</label>
                                    <input class="form-control validate-required" id="expiryDate"
                                        name="expiryDate" placeholder="Discount Amount" value="" type="text">
                                    <small class="form-text text-danger d-none" id="expiryDateHelp">Expiry Date
                                         is required</small>
                                </div>
                                
                            </div>
                            <div class="row justify-content-md-center">
                            
                                <div class="col-md-12 form-group text-center">
                                    <label for="status" class="label-required">Enable</label>
                                    <input class="" id="status"
                                        name="status" placeholder="status" value="1" type="checkbox">
                                    <!-- <small class="form-text text-danger d-none" id="expiryDateHelp">Expiry Date
                                         is required</small> -->
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-md-center">
                                <button id="saveCoupon" class="btn btn-primary mr-10">Save</button>
                                <button id="cancelCoupon" class="btn btn-light">Cancel</button>
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
    <script type="text/javascript">
    // my custom script
    var _isDirty = false;
    $(document).ready(function() {
        $(":input").change(function() {
            _isDirty = true;
        });
        // Fetch By Id
        fetchById();
        // Save Function
        $(document).on('click', '#saveCoupon', function() {
            saveCoupon();
        });
        // Cancel Function
        $(document).on('click', '#cancelCoupon', function() {
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
                            document.location.href = "{!! URL::to('admin/coupons'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('admin/coupons'); !!}";
            }
        });
    });

    function fetchById() {
        var token =  '{{ Session::get('access_token') }}';
        console.log("fetchbyid");
        var id = "{!! $id !!}";
        console.log(id);
        var url = '{{ url("/api/voucher", "id") }}';
        url = url.replace('id', id);
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {},
            success: function(jsonData) {
                console.log(jsonData.data);
        
                $('#couponCode').val(jsonData.data.code);
                $('#discountAmount').val(jsonData.data.discountAmount);
                $('#amountType').val(jsonData.data.amountType);
                $('#expiryDate').val(jsonData.data.expiryDate);
                if(jsonData.data.status===1){
                    $('#status').prop('checked', true);}
                    else{
                        $('#status').prop('checked', false);
                    }
            }
        });
    }

    function saveCoupon() {
        var token =  '{{ Session::get('access_token') }}';
        var id = "{!! $id !!}";
        var url = '{{ url("/api/voucher", "id") }}';
        url = url.replace('id', id);
        var couponCode = $('#couponCode').val();
        var discountAmount = $('#discountAmount').val();
        var amountType = $('#amountType').val();
        var expiryDate = $('#expiryDate').val();
        var status = $('#status').prop('checked') ? 1 : 0 ;

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {
                couponCode : couponCode,
                discountAmount : discountAmount,
                amountType : amountType,
                expiryDate : expiryDate,
                status : status,
                '_method': 'PUT'
            },
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
                            document.location.href = "{!! URL::to('admin/coupons'); !!}";
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