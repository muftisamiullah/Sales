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
                </span>Agent</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Edit Agent</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 form-group">
                                    <label for="agentName" class="label-required">Agent Name</label>
                                    <input class="form-control validate-required" id="agentName"
                                        name="agentName" placeholder="Agent Name" value="" type="text">
                                    <small class="form-text text-danger d-none" id="agentNameHelp">Agent Name
                                         is required</small>
                                </div>
                                <div class="form-group col-md-6">
                              <label for="agentEmail" class="label-required">Agent Email</label>
                                    <input class="form-control validate-required" id="agentEmail"
                                        name="agentEmail" placeholder="Email Address" value="" type="email">
                                    <small class="form-text text-danger d-none" id="agentEmailHelp">Email Address
                                         is required</small>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">
                                <div class="col-md-6 form-group">
                                    <label for="agentContact" class="label-required">Agent Contact</label>
                                    <input class="form-control validate-required" id="agentContact"
                                        name="agentContact" placeholder="Agent Contact" value="" type="number">
                                    <small class="form-text text-danger d-none" id="agentNameHelp">Agent Contact
                                         is required</small>
                                </div>
                                <div class="form-group col-md-6">
                              <label for="agentMac" class="label-required">Agent I.p Address</label>
                                    <input class="form-control validate-required" id="agentMac"
                                        name="agentMac" placeholder="Mac Address" value="" type="text">
                                    <small class="form-text text-danger d-none" id="agentEmailHelp">Mac Address
                                         is required</small>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">
                         
                            <div class="col-md-12 form-group">
                            <label for="agentPassword" class="label-required">Password</label>
                                <input id="agentPassword" type="password" name="password" placeholder="Password"
                                    class="form-control validate-required">
                                    <small class="form-text text-muted" id="agentPasswordHelp">
                                    Minimum eight characters, at least one letter, one number and one special character*</small>
                            </div>
                            <div class="col-md-12 form-group">
                            <label for="agentConfirmPassword" class="label-required">Confirm Password</label>
                                <input id="agentConfirmPassword" type="password" name="password1" placeholder="Confirm Password"
                                    class="form-control validate-required">
                                    <small class="form-text text-danger" id="agentConfirmPasswordHelp"></small>
                            </div>
                            
                               
                                
                            </div>
                            
                            <hr>
                            <div class="row justify-content-md-center">
                                <button id="saveAgent" class="btn btn-primary mr-10">Save</button>
                                <button id="cancelAgent" class="btn btn-light">Cancel</button>
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
        $(document).on('click', '#saveAgent', function() {
            saveAgent();
        });
        // Cancel Function
        $(document).on('click', '#cancelAgent', function() {
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
                            document.location.href = "{!! URL::to('admin/agents'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('admin/agents'); !!}";
            }
        });
    });

    function fetchById() {
        var token =  '{{ Session::get('access_token') }}';
        console.log("fetchbyid");
        var id = "{!! $id !!}";
        var url = '{{ url("/api/agents", "id") }}';
        url = url.replace('id', id);
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {},
            success: function(jsonData) {
                console.log(jsonData.data);
                $('#agentName').val(jsonData.data.firstName);
                $('#agentEmail').val(jsonData.data.email);
                $('#agentContact').val(jsonData.data.phone);
                $('#agentMac').val(jsonData.data.ip);
                $('#agentPassword').val(jsonData.data.passwordHint);
                $('#agentConfirmPassword').val(jsonData.data.passwordHint);

            }
        });
    }

    function saveAgent() {
        var token =  '{{ Session::get('access_token') }}';
        var id = "{!! $id !!}";
        var url = '{{ url("/api/agents", "id") }}';
        url = url.replace('id', id);
    var agentName = $('#agentName').val();
    var agentEmail = $('#agentEmail').val();
    var agentContact= $('#agentContact').val();
    var agentMac= $('#agentMac').val();
    var agentPassword= $('#agentPassword').val();
    var agentConfirmPassword= $('#agentConfirmPassword').val();
    if(agentPassword == agentConfirmPassword){

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {
                agentName : agentName,
                agentEmail :  agentEmail,
                agentContact : agentContact,
                agentMac : agentMac,
                agentPassword : agentPassword, 
                agentConfirmPassword : agentConfirmPassword,
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
                            document.location.href = "{!! URL::to('admin/agents'); !!}";
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
         }//if close
   else{
    swal({
                                title: 'Password Mismatch' ,
                                 icon: "warning",
                                type: "warning",
                                button: "OK",
                                });
   }
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