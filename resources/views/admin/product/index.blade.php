@extends('admin.layouts.sidebar')
@section('content')
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    @include('admin.includes.breadcrumb')
    <!-- /Breadcrumb -->
    <!-- Container -->
    <div class="container">

        <!-- Title -->
        <div class="hk-pg-header mb-10">
            <div>
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                                data-feather="book"></i></span></span>Product</h4>
            </div>
            <div class="d-flex">
                <div>
                    <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/product/create')}}">
                        <span class="mr-5">
                            <span class="feather-icon"><i data-feather="plus-square"></i></span>
                        </span>Add New Product</a>
                </div>
            </div>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <table id="productTbl" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Weight</th>
                                            <th>Location</th>
                                            <th>Tag</th>
                                            <th>Stocks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Weight</th>
                                            <th>Location</th>
                                            <th>Tag</th>
                                            <th>Stocks</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
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

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Data Table JavaScript -->
    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <!-- <script src="{{asset('dist/js/dataTables-data.js')}}"></script> -->

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('dist/js/feather.min.js')}}"></script>
    <!-- Fancy Dropdown JS -->
    <script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>
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
    $(document).ready(function() {
        // Fetch Products
        console.log("hello");
        fetchProducts();
        // Delete Function
        $(document).on('click', '.delete-button', function() {
            deleteProduct($(this).attr('id'));
        });
    });

    function fetchProducts() {
        var token =  '{{ Session::get('access_token') }}';
        $("#productTbl").DataTable().destroy()
        $('#productTbl').DataTable({
            ajax: {
                url: "{{ url('/api/product') }}",
                type: 'GET',
                dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                dataSrc: function(json) {
                    console.log(json);
                    return json.data;
                }
            },
            responsive: true,
            autoWidth: false,
            language: {
                search: "",
                searchPlaceholder: "Search"
            },
            sLengthMenu: "_MENU_items",
            columns: [{
                    "data": "id"
                },
                {
                    "data": "productName"
                },
                {
                    "data": "null",
                    "render": function(data, type, full, meta) {

                        var productImage = '{{URL::asset('distweb/img/images/products') }}' + '/' + full.productImage;
                        if (productImage != undefined) {

                            return '<div class="avatar">' +
                                '<img src="' + productImage +
                                '" alt="user" class="avatar-img rounded-circle">' +
                                '</div>';
                        } else {
                            return "";
                        }

                    }
                },

                {
                    "data": null,
                    "render": function(data, type, full, meta) {

                        return full.productCurrency+' '+full.productPrice
                    }
                },
                {
                    "data": "productWeight"
                },
                {
                    "data": "productLocation"
                },
                {
                    "data": null,
                    "render": function(data, type, full, meta) {
                       switch(full.tags){
                           case 1:
                           return data = 'Featured';
                           break;

                           case 2:
                           return data = 'Hot Deals';
                           break;

                           case 3:
                           return data = 'Best Seller';
                           break;

                           case 4:
                           return data = 'Banner One First';
                           break;

                           case 5:
                           return data = 'Banner One Second';
                           break;
                           
                           case 6:
                           return data = 'Banner Two First';
                           break;

                           case 7:
                           return data = 'Banner Two Second';
                           break;

                           default:
                           return data = 'Default';
                       }
                    }


                },
                {
                    "data": "productStock"
                },
                {
                    "data": "null",
                    "render": function(data, type, full, meta) {
                        var url = '{{ url("/admin/product/edit", "id") }}';
                        url = url.replace('id', full.id);
                        return '<div class="d-flex">' +
                            '<a href="' + url + '" class="text-primary mr-15 fa fa-edit mt-1 "></a>' +
                            '<a href="javascript:void(0);" id="' + full.id +
                            '" class="text-danger delete-button mr-15"><i class="fa fa-trash"><i></a>' +
                            '</div>';
                    }
                },
            ]
        });
    }

    function deleteProduct(id) {
        var token =  '{{ Session::get('access_token') }}';
        console.log(id);
        var url = '{{ url("/api/product", "id") }}';
        url = url.replace('id', id);
        console.log(url);
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this product!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                console.log("hellosami");
                if (willDelete) {
                    console.log("in dele");
                    $.ajax({
                        url: url,
                        type: 'POST',
                        headers: {"Authorization": 'Bearer ' + token},
                        dataType: 'JSON',
                        data: {
                            '_method': 'delete'
                        },
                        success: function(data) {
                            switch (data['result']) {
                                case 'success':
                                    console.log("hellosamisucces");
                                    _isDirty = false;
                                    swal({
                                        title: data['title'],
                                        text: data['message'],
                                        icon: data['result'],
                                        button: "OK",
                                        timer: 2000,
                                    }).then(function() {
                                        fetchProducts();
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
                        },
                        error: function(xhr) {
                            console.log(xhr);
                        }
                    });
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