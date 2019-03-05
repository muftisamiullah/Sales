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
                </span>Category</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Edit Category</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 form-group">
                                    <label for="lastName">Name</label>
                                    <input class="form-control" id="categoryName" placeholder="Category Name" value=""
                                        type="text">
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-md-center">
                                <button id="saveCategory" class="btn btn-primary mr-10">Save</button>
                                <button id="cancelCategory" class="btn btn-light">Cancel</button>
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
        $(document).on('click', '#saveCategory', function() {
            saveCategory();
        });
        // Cancel Function
        $(document).on('click', '#cancelCategory', function() {
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
                            document.location.href = "{!! URL::to('admin/category'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('admin/category'); !!}";
            }
        });
    });

    function fetchById() {
        var token =  '{{ Session::get('access_token') }}';
        console.log("fetchbyid");
        var id = "{!! $id !!}";
        var url = '{{ url("/api/subcategory", "id") }}';
        url = url.replace('id', id);
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {},
            success: function(jsonData) {
                console.log(jsonData.data);
                $('#categoryName').val(jsonData.data.subName);
            }
        });
    }

    function saveCategory() {
        var token =  '{{ Session::get('access_token') }}';
        var id = "{!! $id !!}";
        var url = '{{ url("/api/subcategory", "id") }}';
        url = url.replace('id', id);
        var categoryName = $('#categoryName').val();
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {
                subName: categoryName,
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
                            document.location.href = "{!! URL::to('admin/category'); !!}";
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