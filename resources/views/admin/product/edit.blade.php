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
                </span>Product</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Edit Product</h5>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row justify-content-md-center">
                                <div class="form-group col-md-4">
                                    <label for="productName" class="colored label-required">Product Name</label>
                                    <input type="text" class="form-control validate-required" id="productName"
                                        placeholder="Product Name" name="productName">
                                    <small class="form-text text-danger d-none" id="productNameHelp">Product Name is
                                        required</small>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="price" class="colored label-required">Price</label>
                                    <input type="number" class="form-control validate-required" id="price"
                                        placeholder="Price" name="price">
                                        <small class="form-text text-danger d-none" id="priceHelp">Price is
                                        required</small>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="weight" class="colored label-required">Weight</label>
                                    <input type="text" class="form-control validate-required" id="weight"
                                        placeholder="Weight" name="weight">
                                        <small class="form-text text-danger d-none" id="weightHelp">Weight Name is
                                        required</small>                              
                                          </div>
                            </div>


                            <div class="row justify-content-md-center ">
                           
                                <div class="form-group col-md-2">
                                    <label for="category" class="colored label-required">Product Category</label>
                                    <!-- <input type="text" class="form-control" id="media" placeholder="Media Type"
                                                name="media"> -->
                                    <select name="category" id="category" class="form-control validate-required">
                                        <option value="">Choose...</option>

                                    </select>
                                    <small class="form-text text-danger d-none" id="categoryHelp">Category is
                                        required</small>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="subcategory" class="colored label-required">Product Sub Category</label>
                                    <!-- <input type="text" class="form-control" id="media" placeholder="Media Type"
                                                name="media"> -->
                                    <select name="subcategory" id="subcategory" class="form-control validate-required">
                                        <option value="">Choose...</option>

                                    </select>
                                    <small class="form-text text-danger d-none" id="categoryHelp">Sub Category is
                                        required</small>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="tags" class="colored">Tags</label>
                                   
                                    <select name="tags" id="tags" class="form-control">
                                        <option  value="">Choose...</option>
                                        <option  value="0">Default</option>
                                        <option  value="1">Featured</option>
                                        <option  value="2">Hot Deals</option>
                                        <option  value="3">Best Seller</option>
                                        <option  value="4">Banner One First</option>
                                        <option  value="5">Banner One Second</option>
                                        <option  value="6">Banner Two First</option>
                                        <option  value="7">Banner Two Second</option>
                                    </select>
                                    <!-- <small class="form-text text-danger d-none" id="categoryHelp">Category is required</small> -->
                                </div>


                                <div class="form-group col-md-2">
                                     
                                <div class="col-sm text-center">
                                    <div class="avatar avatar-xl" id="productImage">
                                    </div>
                                </div>
                                </div>

                                <div class="form-group col-md-3 px-0">
                                    <label for="mainimg" class="colored">Main Image</label>

                                    <div class="fileinput fileinput-new input-group" id="mainimg" data-provides="fileinput">
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
                                                    >
                                            </span>
                                            <a href="#" class="btn btn-secondary fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </span>
                                    </div>
                                    <small class="form-text" id="fileHelp"></small>


                                </div>
                            </div>

                            <div class="row justify-content-md-center">

                                <div class="form-group col-md-3 mr-3 px-0">
                                    <label for="imgone" class="colored">Slider First</label>
                                    <div class="fileinput fileinput-new input-group" id="imgone" data-provides="fileinput">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span></div>
                                        <span class="input-group-append">
                                            <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select
                                                    file</span><span class="fileinput-exists">Change</span>
                                                <input type="file" name="file1" id="file1" required
                                                    >
                                            </span>
                                            <a href="#" class="btn btn-secondary fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </span>
                                    </div>
                                    <small class="form-text" id="fileHelp"></small>
                                </div>

                                <div class="form-group col-md-3 mr-3 px-0">
                                    <label for="imgtwo" class="colored">Slider Second</label>
                                    <div class="fileinput fileinput-new input-group" id="imgtwo" data-provides="fileinput">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span></div>
                                        <span class="input-group-append">
                                            <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select
                                                    file</span><span class="fileinput-exists">Change</span>
                                                <input type="file" name="file2" id="file2" required
                                                    >
                                            </span>
                                            <a href="#" class="btn btn-secondary fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </span>
                                    </div>
                                    <small class="form-text" id="fileHelp"></small>
                                </div>

                                <div class="form-group col-md-3 px-0">
                                    <label for="imgthree" class="colored">Slider Third</label>
                                    <div class="fileinput fileinput-new input-group" id="imgthree" data-provides="fileinput">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span></div>
                                        <span class="input-group-append">
                                            <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select
                                                    file</span><span class="fileinput-exists">Change</span>
                                                <input type="file" name="file3" id="file3" required
                                                    >
                                            </span>
                                            <a href="#" class="btn btn-secondary fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </span>
                                    </div>
                                    <small class="form-text" id="fileHelp"></small>
                                </div>
                            </div>
                           
                            <div class="row justify-content-md-center">
                                <div class="form-group col-md-3">
                                    <label for="stock" class="colored label-required">Stock</label>
                                    <input type="number" id="stock" class="form-control validate-required"
                                        placeholder="Stock Available" name="stock">
                                        <small class="form-text text-danger d-none" id="stockHelp">Stock is
                                        required</small>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="location" class="colored label-required">Location</label>
                                    <input type="text" id="location" class="form-control  validate-required"
                                        placeholder="Product location" name="location">
                                        <small class="form-text text-danger d-none" id="locationHelp">Location is
                                        required</small>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="prePrice" class="colored">Pre-Price</label>
                                    <input type="number" id="prePrice" class="form-control"
                                        placeholder="Previous Price" name="prePrice">
                                        <!-- <small class="form-text text-danger d-none" id="prePriceHelp">Previous Price is
                                        required</small> -->
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="brand" class="colored label-required">Product Brand</label>
                                    <!-- <input type="text" class="form-control" id="media" placeholder="Media Type"
                                                name="media"> -->
                                    <select name="brand" id="brand" class="form-control validate-required">
                                        <option value="">Choose...</option>

                                    </select>
                                    <small class="form-text text-danger d-none" id="brandHelp">Brand is
                                        required</small>
                                </div>

                            </div>
                            <div class="row justify-content-md-center">
                                <div class="form-group col-md-6">
                                    <label for="description" class="colored label-required">Full Description</label>
                                    <textarea class="form-control validate-required" id="description" rows="3"
                                        placeholder="Description" name="description"></textarea>
                                        <small class="form-text text-danger d-none" id="descriptionHelp">Description is
                                        required</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cartDescription" class="colored label-required">Cart Description</label>
                                    <textarea class="form-control validate-required" id="cartDescription" rows="3"
                                        placeholder="Cart Description" name="cartDescription"></textarea>
                                        <small class="form-text text-danger d-none" id="CartDescriptionHelp"> Description is
                                        required</small>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">
                                <div class="form-group col-md-6">
                                    <label for="addinfo" class="colored label-required">Additional Information</label>
                                    <textarea class="form-control validate-required" id="addInfo" rows="3"
                                        placeholder="Additional Information" name="addinfo"></textarea>
                                        <small class="form-text text-danger d-none" id="addinfoHelp">Additional Information is
                                        required</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="techSpecs" class="colored label-required">Technical Specifications</label>
                                    <textarea class="form-control validate-required" id="techSpecs" rows="3"
                                        placeholder="Tech Specifications" name="techspecs"></textarea>
                                        <small class="form-text text-danger d-none" id="techspecsHelp"> Tech Specs is required</small>
                                </div>
                            </div>


                            <hr>
                            <div class="row justify-content-md-center">
                                <button id="saveProduct" class="btn btn-primary mr-10">Save</button>
                                <button id="cancelProduct" class="btn btn-light">Cancel</button>
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
        // fetchSubCategories();
        fetchBrand();
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

        $(document).on('click', '#saveProduct', function() {
            // alert('call save product');
            saveProduct();
        });
        // Cancel Function
        $(document).on('click', '#cancelProduct', function() {
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
                            document.location.href = "{!! URL::to('admin/product'); !!}";
                        } else {}
                    });
            } else {
                document.location.href = "{!! URL::to('admin/product'); !!}";
            }
        });
    });

    function fetchById() {
        var token =  '{{ Session::get('access_token') }}';
        var id = "{!! $id !!}";
        var url = '{{ url("/api/product", "id") }}';
        console.log(url);
        url = url.replace('id', id);
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {},
            success: function(jsonData) {
                // console.log(jsonData.data);
                $('#productName').val(jsonData.data.productName);
                $('#price').val(jsonData.data.productPrice);
                $('#weight').val(jsonData.data.productWeight);
                $('#category').val(jsonData.data.productCategoryId);
                $('#category').trigger('change'); 
                $('#subcategory').val(jsonData.data.productSubCategoryId);
                $('#tags').val(jsonData.data.tags);
                $('#stock').val(jsonData.data.productStock);
                $('#location').val(jsonData.data.productLocation);
                $('#description').val(jsonData.data.productLongDesc);
                $('#brand').val(jsonData.data.productManufacturerId);
                $('#cartDescription').val(jsonData.data.productCartDesc);
                $('#addInfo').val(jsonData.data.productAddInfo);
                $('#techSpecs').val(jsonData.data.productTechSpecs);
                $('#prePrice').val(jsonData.data.productSku);
                $('#currency').val(jsonData.data.productCurrency);
                 //change sku to pre price
                // $('#category').val(jsonData.data.productCategoryId);
                var productImage = '{{URL::asset('distweb/img/images/products') }}'+ '/'+jsonData.data.productImage;
                // $("#my_image").attr("src","public_path('/product/images')"."jsonData.data[0].productImage");
                // $("#my_image").attr("src",{{ URL::to('/assets/product/images/jsonData.data[0].productImage') }};
                //   $("#my_image").html('<img src=" '{{ URL::asset('product/images') }}' + jsonData.data[0].productImage + '" alt="" class="responsive-img" style="height: 132px; width: 132px;">');

                $('#productImage').html('<img src="'+productImage+'" alt="" class="avatar-img rounded-circle">');


            }
        });
    }

    function saveProduct() {
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
        var url = '{{ url("/api/product", "id") }}';
        url = url.replace('id', id);
        var productImage = $('#file').prop('files')[0];
        var productImageOne = $('#file1').prop('files')[0];
        var productImageTwo = $('#file2').prop('files')[0];
        var productImageThree = $('#file3').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', productImage);
        form_data.append('file1',productImageOne);
        form_data.append('file2',productImageTwo);
        form_data.append('file3',productImageThree);
        form_data.append('category', $('#category').val());
        form_data.append('subcategory', $('#subcategory').val());
        form_data.append('tags', $('#tags').val());
        form_data.append('productName', $('#productName').val());
        form_data.append('price', $('#price').val());
        form_data.append('weight', $('#weight').val());
        form_data.append('location', $('#location').val());
        form_data.append('description', $('#description').val());
        form_data.append('stock', $('#stock').val());
        form_data.append('cartDescription', $('#cartDescription').val());
        form_data.append('addInfo',$('#addInfo').val());
        form_data.append('techSpecs',$('#techSpecs').val());
        form_data.append('prePrice', $('#prePrice').val());
        form_data.append('productCurrency', $('#currency').val());
        form_data.append('productManufacturerId', $('#brand').val());
        form_data.append('_method','PUT');
        $.ajax({
            url: url,
             cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        headers: {"Authorization": 'Bearer ' + token},
        data: form_data,
       
            success: function(data) {
                // console.log(data);
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
                            document.location.href = "{!! URL::to('admin/product'); !!}";
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
                // console.log(jsonData.data);
                for (var info in jsonData.data) {

                    $('#category').append('<option value="' + jsonData.data[info]['id'] + '">' + jsonData
                        .data[info]['name'] + '</option>')

                }

            }
        });
    }

     $('#category').change(function(){
            $.ajax({
        type: "GET",
        url: "{{ url('/catpro') }}",
        async:false,
        data: {option: $(this).val()  },
        success: function (data) {
            var model = $('#subcategory');
            model.empty();
            $.each(data, function(index, element) {
                // debugger;
                model.append("<option value='"+element.id+"'>" + element.subName + "</option>");
            });
        }
    });
    });
        
    function fetchBrand() {
        var token =  '{{ Session::get('access_token') }}';
        $.ajax({
            url: "{{ url('/api/manufacturer') }}",
            type: 'GET',
            headers: {"Authorization": 'Bearer ' + token},
            dataType: 'JSON',
            success: function(jsonData) {
                console.log(jsonData.data);
                for (var info in jsonData.data) {

                    $('#brand').append('<option value="' + jsonData.data[info]['id'] + '">' + jsonData
                        .data[info]['manufacturerName'] + '</option>')

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