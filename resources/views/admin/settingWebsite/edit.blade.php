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
            @if ($title =='Website Settings')
                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span>
                </span>Carousel</h4>
             @endif  
             @if ($title =='Sub Image')
                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span>
                </span>Sub Image</h4>
             @endif  
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                @if ($title =='Website Settings')
                    <h5 class="hk-sec-title websiteSettings">Edit Carousel</h5>
                @endif
                @if ($title =='Sub Image')
                    <h5 class="hk-sec-title">Edit Sub Image</h5>
                @endif
                    <div class="row">
                        <div class="col-sm">
                            <div class="row justify-content-md-center">
                                <div class="form-group col-md-4">
                                    <label for="sliderTitle" class="colored label-required">Title</label>
                                    <input type="text" class="form-control validate-required" id="sliderTitle"
                                        placeholder="Slider Title" name="sliderTitle">
                                    <small class="form-text text-danger d-none" id="sliderNameHelp">Slider Name is
                                        required</small>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="carouselSubTitle" class="label-required">Sub Title</label>
                                    <input class="form-control validate-required" id="carouselSubTitle"
                                        name="carouselSubTitle" placeholder="Carousel SubTitle" value="" type="text">
                                    <small class="form-text text-danger d-none" id="carouselSubTitleHelp">Sub-Title
                                         is required</small>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">

                            <div class="form-group col-md-4">
                                   @if ($title =='Sub Image')
                                    <label for="category" class="colored label-required">Type</label>
                                    <!-- <input type="text" class="form-control" id="media" placeholder="Media Type"
                                                name="media"> -->
                                    <select name="category" id="category" class="form-control validate-required">
                                        <option  value="">Choose...</option>
                                      
                                    </select>
                                    <small class="form-text text-danger d-none" id="categoryHelp">Category is required</small>
                                    @endif
                                </div>
                              
                                <div class="form-group col-md-3">

                                    <div class="col-sm text-center">
                                        <div class="avatar avatar-xl" id="sliderImage">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-3 mt-2 px-0"><br>

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
                                                <input type="file" name="file" id="file" required>
                                            </span>
                                            <a href="#" class="btn btn-secondary fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </span>
                                    </div>
                                    <small class="form-text" id="fileHelp"></small>


                                </div>
                            </div>


                            <div class="row justify-content-md-center ">


                            </div>

                            <div class="row justify-content-md-center">
                               

                            </div>
                            <div class="row justify-content-md-center">
                                
                            </div>


                            <hr>
                            <div class="row justify-content-md-center">
                            @if ($title =='Website Settings')
                                <button id="saveSlide" class="btn btn-primary mr-10">Save</button>
                            @endif
                             @if ($title =='Sub Image')
                                <button id="saveSubImage" class="btn btn-primary mr-10">Save</button>
                                @endif
                                <button id="cancelSlide" class="btn btn-light">Cancel</button>
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
        fetchCategories();
        console.log("in redy");
        $(":input").change(function() {
            _isDirty = true;
        });
        // Fetch By Id

        $(document).on("keyup change keydown click",
            "input[type=text].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required",
            function() {
                var input = $(this).attr('id');
                $(this).removeClass("is-invalid").addClass("is-valid");
                $("small#" + input + 'Help').addClass('d-none');
                // $('.fileinput').removeClass("is-invalid-file").addClass("is-valid-file");

            });
        console.log("in ready1");
        if ( ($("h5").hasClass("websiteSettings")) ){
            fetchByIdCarousel();
        }
        else{
            fetchByIdSubImage();
        }
    
    
        // Save Function
        console.log("in ready2");

        $(document).on('click', '#saveSlide', function() {
            // alert('call save product');
            saveSlider();
        });
        $(document).on('click', '#saveSubImage', function() {
            // alert('call save product');
            saveSubImage();
        });
        // Cancel Function
        $(document).on('click', '#cancelSlide', function() {
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
                            document.location.href = "{!! URL::to('admin/websettings'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('admin/websettings'); !!}";
            }
        });
    });

    function fetchByIdCarousel() {
        var token = '{{ Session::get('access_token') }}';
        console.log("hello1");
        var id = "{!! $id !!}";
        console.log(id);
        var url = '{{ url("/api/settings", "id") }}';
        console.log(url);
        url = url.replace('id', id);

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            headers: {
                "Authorization": 'Bearer ' + token
            },
            data: {},
            success: function(jsonData) {
                console.log(jsonData.data);
               
                $('#sliderTitle').val(jsonData.data.slidersTitle);
                $('#carouselSubTitle').val(jsonData.data.slidersGroup);
                var slidersImage = '{{URL::asset('distweb/img/images/banners') }}' + '/' + jsonData.data.slidersImage;
            
                
                $('#sliderImage').html('<img src="' + slidersImage +
                    '" alt="" class="avatar-img rounded-circle">');


            }
        });
    }

    function fetchByIdSubImage() {
        var token = '{{ Session::get('access_token') }}';
        console.log("hello1");
        var id = "{!! $id !!}";
        console.log(id);
        var url = '{{ url("/api/categoryimages", "id") }}';
        console.log(url);
        url = url.replace('id', id);

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            headers: {
                "Authorization": 'Bearer ' + token
            },
            data: {},
            success: function(jsonData) {
                console.log(jsonData.data);
               
                $('#sliderTitle').val(jsonData.data.catImageTitle);
                $('#carouselSubTitle').val(jsonData.data.catImageGroup);
                $('#category').val(jsonData.data.status);
                var slidersImage = '{{URL::asset('distweb/img/images/banners') }}' + '/' + jsonData.data.catImage;
            
                
                $('#sliderImage').html('<img src="' + slidersImage +
                    '" alt="" class="avatar-img rounded-circle">');


            }
        });
    }

    function saveSlider() {
        var token = '{{ Session::get('access_token') }}';
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
        var url = '{{ url("/api/settings", "id") }}';
        url = url.replace('id', id);
        var sliderImage = $('#file').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', sliderImage);
        form_data.append('slidersTitle', $('#sliderTitle').val());
        form_data.append('carouselSubTitle', $('#carouselSubTitle').val());
        form_data.append('_method', 'PUT');
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
            headers: {
                "Authorization": 'Bearer ' + token
            },
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
                            document.location.href = "{!! URL::to('admin/websettings'); !!}";
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

    function saveSubImage() {
        var token = '{{ Session::get('access_token') }}';
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
        var url = '{{ url("/api/categoryimages", "id") }}';
        url = url.replace('id', id);
        var sliderImage = $('#file').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', sliderImage);
        form_data.append('slidersTitle', $('#sliderTitle').val());
        form_data.append('category', $('#category').val());
        form_data.append('carouselSubTitle', $('#carouselSubTitle').val());
        form_data.append('_method', 'PUT');
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
            headers: {
                "Authorization": 'Bearer ' + token
            },
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
                            document.location.href = "{!! URL::to('admin/websettings'); !!}";
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