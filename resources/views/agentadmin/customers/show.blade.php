@extends('agentadmin.layouts.sidebar')
@section('content')
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    @include('agentadmin.includes.breadcrumb')
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
                    <h5 class="hk-sec-title">Add Customers</h5>
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

    </div>
    <!-- /Container -->
    @section('page-script')
    <!-- jQuery -->
    <!-- <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
   
    

    var _isDirty = false;
    $(document).ready(function() {
        $( "#endDate" ).datepicker({
            minDate: 0,
            dateFormat: 'yy-mm-dd'
        });

        $( "#startDate" ).datepicker({
        
            dateFormat: 'yy-mm-dd'
        });

        $(":input").change(function() {
            _isDirty = true;

        });
        /*Start Remove Validation Message On change Click */
        $(document).on("keyup change keydown",
            "input[type=text].validate-required,input[type=email].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required",
            function() {
                var input = $(this).attr('id');
                $(this).removeClass("is-invalid").addClass("is-valid");
                $("small#" + input + 'Help').addClass('d-none');
                $('.fileinput').removeClass("is-invalid-file").addClass("is-valid-file");

            });
        /*End Remove Validation Message On change Click */

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
                            document.location.href = "{!! URL::to('agentadmin/customers'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('agentadmin/customers'); !!}";
            }
        });
    });

    function saveCustomer() {
        var token =  '{{ Session::get('agent_access_token') }}';
        var isValid = true;
        $("input[type=text].validate-required,input[type=email].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required")
            .each(function() {
                var input = $(this).attr('id');
                var inputType = $(this).attr('type');
                var inputvalue = $("#" + input).val().trim();
                if (inputvalue == "") {
                    $(this).addClass("is-invalid");
                    $("small#" + input + 'Help').removeClass('d-none');
                    isValid = false;
                }
                if (inputvalue == "" && inputType != undefined && inputType == 'file') {
                    $('.fileinput').addClass("is-invalid-file");
                    $("small#" + input + 'Help').removeClass('d-none');
                    isValid = false;
                }
            });

        if (isValid == false) {
            return false;
        }
     

    var customerName = $('#customerName').val();
    var customerEmail = $('#customerEmail').val();
    var customerPhone = $('#customerContact').val();
    var startDate = $('#startDate').val();
    var endDate = $('#endDate').val();
    var status = $('#status').val() ;
    var note = $('#note').val();
    $.ajax({
            url: "{{ url('/api/customers') }}",
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
                '_token': "{{ csrf_token() }}",

            
            },
            success: function (data) {
                console.log(data);
                switch(data['result']){
                            case 'success':
                                         _isDirty = false;
                                         swal({
                                                    title: data['title'],
                                                text: data['message'],
                                                icon: data['result'],
                                                button: "OK",
                                                timer: 2000,
                                                }).then(function() {
                                                    document.location.href="{!! URL::to('agentadmin/customers'); !!}";  
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
        @include('agentadmin.includes.footer')
    </div>
    <!-- /Footer -->
</div>
@stop