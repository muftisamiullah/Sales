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
                </span>Customers</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Edit Customer</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 form-group">
                                    <label for="customerName" class="label-required">Customer Name</label>
                                    <input class="form-control validate-required" id="customerName"
                                        name="customerName" placeholder="Customer Name" value="" type="text">
                                    <small class="form-text text-danger d-none" id="customerNameHelp">Customer Name
                                         is required</small>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="customerContact" class="label-required">Customer Contact</label>
                                    <input class="form-control validate-required" id="customerContact"
                                        name="customerContact" placeholder="Customer Contact" value="" type="number" min="1">
                                    <small class="form-text text-danger d-none" id="customerNameHelp">Customer Contact
                                         is required</small>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                        
                              <div class="form-group col-md-6">
                              <label for="customerEmail" class="label-required">Email Address</label>
                                    <input class="form-control validate-required" id="customerEmail"
                                        name="customerEmail" placeholder="Email Address" value="" type="email">
                                    <small class="form-text text-danger d-none" id="customerEmailHelp">Email Address
                                         is required</small>
                                </div>
                            
                                <div class="col-md-6 form-group">
                                    <label for="startDate" class="label-required">Subscription Start Date</label>
                                    <input class="form-control validate-required" id="startDate"
                                        name="startDate" placeholder="Subscription Start Date" value="" type="text">
                                    <small class="form-text text-danger d-none" id="startDateHelp">Subscription Start Date
                                         is required</small>
                                </div>
                                
                            </div>
                            <div class="row justify-content-md-center">
                            
                               <div class="col-md-6 form-group">
                                    <label for="endDate" class="label-required">Subscription End Date</label>
                                    <input class="form-control validate-required" id="endDate"
                                        name="endDate" placeholder="Subscription end Date" value="" type="text">
                                    <small class="form-text text-danger d-none" id="endDateHelp">Subscription End Date
                                         is required</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="status" class="colored label-required">User Status</label>
                                    <!-- <input type="text" class="form-control" id="media" placeholder="Media Type"
                                                name="media"> -->
                                    <select name="status" id="status" class="form-control validate-required">

                                        <option value="Existing">Existing User</option>
                                        <option value="New">New User</option>

                                    </select>
                                    <small class="form-text text-danger d-none" id="amountTypeHelp">User Status is
                                        required</small>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                         
                         <div class="form-group col-md-12">
                         <label for="note" class="">Note</label>
                         <textarea class="form-control" id="note" rows="5"></textarea>

                               <small class="form-text text-danger d-none" id="noteHelp">Note
                                    is required</small>
                           </div>
                       
                          
                           
                    </div>
                            <hr>
                            <div class="row justify-content-md-center">
                                <button id="saveCustomer" class="btn btn-primary mr-10">Save</button>
                                <button id="cancelCustomer" class="btn btn-light">Cancel</button>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /Row -->
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
        $(document).on('click', '#saveCustomer', function() {
            saveCustomer();
        });
        // Cancel Function
        $(document).on('click', '#cancelCustomer', function() {
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
                            document.location.href = "{!! URL::to('admin/customer'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('admin/customer'); !!}";
            }
        });
    });

    function fetchById() {
        var token =  '{{ Session::get('access_token') }}';
        console.log("fetchbyid");
        var id = "{!! $id !!}";
    
        var url = '{{ url("/api/customers", "id") }}';
        url = url.replace('id', id);
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {},
            success: function(jsonData) {
                console.log(jsonData.data);
                

                $('#customerName').val(jsonData.data.customerName);
                $('#customerEmail').val(jsonData.data.customerEmail);
                $('#customerContact').val(jsonData.data.phone);
                $('#startDate').val(jsonData.data.subscriptionStartDate);
                $('#endDate').val(jsonData.data.subscriptionEndDate);
                $('#status').val(jsonData.data.status) ;
                $('#note').val(jsonData.data.note) ;
            }
        });
    }

    function saveCustomer() {
        var token =  '{{ Session::get('access_token') }}';
        var id = "{!! $id !!}";
        var url = '{{ url("/api/customers", "id") }}';
        url = url.replace('id', id);
        
    var customerName = $('#customerName').val();
    var customerEmail = $('#customerEmail').val();
    var customerPhone = $('#customerContact').val();
    var startDate = $('#startDate').val();
    var endDate = $('#endDate').val();
    var status = $('#status').val() ;
    var note = $('#note').val() ;

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {
                customerName : customerName,
                customerEmail :  customerEmail,
                customerPhone : customerPhone,
                startDate : startDate,
                endDate : endDate,
                status : status,
                note : note,
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
                            document.location.href = "{!! URL::to('admin/customers'); !!}";
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