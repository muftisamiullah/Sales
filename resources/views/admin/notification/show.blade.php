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
                </span>Manufacturer</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Add Manufacturer</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 form-group">
                                    <label for="manufacturerName" class="label-required">Name</label>
                                    <input class="form-control validate-required" id="manufacturerName"
                                        name="manufacturerName" placeholder="Manufacturer Name" value="" type="text">
                                    <small class="form-text text-danger d-none" id="manufacturerNameHelp">Manufacturer
                                        Name is required</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="category" class="colored label-required">Category</label>
                                    <!-- <input type="text" class="form-control" id="media" placeholder="Media Type"
                                                name="media"> -->
                                    <select name="category" id="category" class="form-control validate-required">
                                        <option value="">Choose...</option>

                                    </select>
                                    <small class="form-text text-danger d-none" id="categoryHelp">Category is
                                        required</small>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 form-group">
                                    <label for="manufacturerUrl" class="label-required">Manufacturer URL</label>
                                    <input class="form-control validate-required" id="manufacturerUrl"
                                        name="manufacturerUrl" placeholder="Manufacturer URL" value="" type="text">
                                    <small class="form-text text-danger d-none" id="manufacturerUrlHelp">Manufacturer
                                        URL is required</small>
                                </div>
                        
                            
                                <div class="form-group col-md-6 pt-2"><br>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span></div>
                                        <span class="input-group-append">
                                            <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select
                                                    file</span><span class="fileinput-exists">Change</span>
                                                <input type="file" name="file" id="file" required
                                                    class="validate-required">
                                            </span>
                                            <a href="#" class="btn btn-secondary fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </span>
                                    </div>
                                    <small class="form-text text-danger d-none" id="fileHelp">Image is required</small>


                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-md-center">
                                <button id="saveManufacturer" class="btn btn-primary mr-10">Save</button>
                                <button id="cancelManufacturer" class="btn btn-light">Cancel</button>
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
        fetchCategories();
        $(":input").change(function() {
            _isDirty = true;

        });
        /*Start Remove Validation Message On change Click */
        $(document).on("keyup change keydown",
            "input[type=text].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required",
            function() {
                var input = $(this).attr('id');
                $(this).removeClass("is-invalid").addClass("is-valid");
                $("small#" + input + 'Help').addClass('d-none');
                $('.fileinput').removeClass("is-invalid-file").addClass("is-valid-file");

            });
        /*End Remove Validation Message On change Click */

        // Save Function
        $(document).on('click', '#saveManufacturer', function() {
            saveManufacturer();
        });
        // Cancel Function
        $(document).on('click', '#cancelManufacturer', function() {
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
                            document.location.href = "{!! URL::to('admin/manufacturer'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('admin/manufacturer'); !!}";
            }
        });
    });

    function saveManufacturer() {
        var token =  '{{ Session::get('access_token') }}';
        var isValid = true;
        $("input[type=text].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required")
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
        var manufacturerName = $('#manufacturerName').val();
        var manufacturerUrl = $('#manufacturerUrl').val();

        var manufacturerImage = $('#file').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', manufacturerImage);
        form_data.append('manufacturerName', $('#manufacturerName').val());
        form_data.append('manufacturerUrl', $('#manufacturerUrl').val());
        form_data.append('manufacturerCategoryId', $('#category').val());


        $.ajax({
            url: "{{ url('/api/manufacturer') }}",
            cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        headers: {"Authorization": 'Bearer ' + token},
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
                            document.location.href = "{!! URL::to('admin/manufacturer'); !!}";
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
    function fetchCategories() {
        var token =  '{{ Session::get('access_token') }}';
        $.ajax({
            url: "{{ url('/api/category') }}",
            type: 'GET',
            headers: {"Authorization": 'Bearer ' + token},
            dataType: 'JSON',
            success: function(jsonData) {
                console.log(jsonData.data);
                for (var info in jsonData.data) {

                    $('#category').append('<option value="' + jsonData.data[info]['id'] + '">' + jsonData
                        .data[info]['name'] + '</option>')

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