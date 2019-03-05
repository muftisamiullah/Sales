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
                </span>Log Details</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
         <!-- Row -->
         <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">View Log</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 form-group">
                                    <label for="agentName" class="label-required">Agent Name</label>
                                    <input class="form-control validate-required" id="agentName"
                                        name="agentName" placeholder="Agent Name" value="" type="text" readonly>
                                    <small class="form-text text-danger d-none" id="agentNameHelp">Agent Name
                                         is required</small>
                                </div>
                                <div class="form-group col-md-6">
                              <label for="customerEmail" class="label-required">Customer Email</label>
                                    <input class="form-control validate-required" id="customerEmail"
                                        name="customerEmail" placeholder="Email Address" value="" type="email" readonly>
                                    <small class="form-text text-danger d-none" id="customerEmailHelp">Email Address
                                         is required</small>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                         
                              <div class="form-group col-md-12">
                              <label for="note" class="label-required">Note</label>
                              <textarea class="form-control validate-required" id="note" rows="5" readonly></textarea>

                                    <small class="form-text text-danger d-none" id="noteHelp">Note
                                         is required</small>
                                </div>
                            
                               
                                
                            </div>
                            
                            <hr>
                            <div class="row justify-content-md-center">
                                <!-- <button id="saveLogs" class="btn btn-primary mr-10">Save</button> -->
                                <button id="cancelLogs" class="btn btn-light">Back</button>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

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
            // saveCustomer();
        });
        // Cancel Function
        $(document).on('click', '#cancelLogs', function() {
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
                            document.location.href = "{!! URL::to('admin/logs'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('admin/logs'); !!}";
            }
        });
    });

    function fetchById() {
        var token =  '{{ Session::get('access_token') }}';
        console.log("fetchbyid");
        var id = "{!! $id !!}";
    
        var url = '{{ url("/logs", "id") }}';
        url = url.replace('id', id);
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {},
            success: function(jsonData) {
                console.log(jsonData);
                

                $('#agentName').val(jsonData.agentName);
                $('#customerEmail').val(jsonData.customerEmail);
                $('#note').val(jsonData.note);
               
               
            }
        });
    }

    // function saveCustomer() {
    //     var token =  '{{ Session::get('access_token') }}';
    //     var id = "{!! $id !!}";
    //     var url = '{{ url("/api/customers", "id") }}';
    //     url = url.replace('id', id);
        
    // var customerName = $('#customerName').val();
    // var customerEmail = $('#customerEmail').val();
    // var customerPhone = $('#customerContact').val();
    // var startDate = $('#startDate').val();
    // var endDate = $('#endDate').val();
    // var status = $('#status').val() ;
    // var note = $('#note').val() ;

    //     $.ajax({
    //         url: url,
    //         type: 'POST',
    //         dataType: 'JSON',
    //         headers: {"Authorization": 'Bearer ' + token},
    //         data: {
    //             customerName : customerName,
    //             customerEmail :  customerEmail,
    //             customerPhone : customerPhone,
    //             startDate : startDate,
    //             endDate : endDate,
    //             status : status,
    //             note : note,
    //             '_method': 'PUT'
    //         },
    //         success: function(data) {
    //             console.log(data);
    //             switch (data['result']) {
    //                 case 'success':
    //                     _isDirty = false;
    //                     swal({
    //                         title: data['title'],
    //                         text: data['message'],
    //                         icon: data['result'],
    //                         button: "OK",
    //                         timer: 2000,
    //                     }).then(function() {
    //                         document.location.href = "{!! URL::to('admin/customers'); !!}";
    //                     });
    //                     break;
    //                 case 'error':
    //                     swal({
    //                         title: data['title'],
    //                         text: data['message'],
    //                         icon: data['result'],
    //                         button: "OK",
    //                     });
    //                     break;
    //             }
    //         }
    //     });
    // }
    </script>
    @stop
    <!-- Footer -->
    <div class="hk-footer-wrap container">
        @include('admin.includes.footer')
    </div>
    <!-- /Footer -->
</div>
@stop