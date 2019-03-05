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
                                        data-feather="book"></i></span></span>Category</h4>
                </div>
                <div class="d-flex">
                    <div>
                        <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/category/createsub')}}">
                        <span class="mr-5">
                        <span class="feather-icon"><i data-feather="plus-square"></i></span>
                        </span>Add New Sub Category</a>
                    </div>
                    <!-- <div>
                        <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/category/create')}}">
                        <span class="mr-5">
                        <span class="feather-icon"><i data-feather="plus-square"></i></span>
                        </span>Add New Category</a>
                    </div> -->
                </div>
                <!-- <div class="d-flex"> -->
                    
                <!-- </div> -->
            </div>

            <!-- /Title -->
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <div class="row">
                            <div class="col-sm">
                                <h3 class="text-center">Laptops</h3>
                                <div class="table-wrap">
                                    <table id="categoryTbl1" class="table table-hover w-100 pb-30">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
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

            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <div class="row">
                            <div class="col-sm">
                                <h3 class="text-center">Softwares</h3>
                                <div class="table-wrap">
                                    <table id="categoryTbl2" class="table table-hover w-100 pb-30">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
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

            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <div class="row">
                            <div class="col-sm">
                                <h3 class="text-center">Printers</h3>
                                <div class="table-wrap">
                                    <table id="categoryTbl3" class="table table-hover w-100 pb-30">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
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

            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <div class="row">
                            <div class="col-sm">
                                <h3 class="text-center">Accesories</h3>
                                <div class="table-wrap">
                                    <table id="categoryTbl4" class="table table-hover w-100 pb-30">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
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
                var _lap=[];
                var _software=[];
                var _printer=[];
                var _access=[];
                // my custom script
                $(document).ready(function () {
                    // Fetch Categories
                    // fetchAllCategories();
                    fetchCategories();
// Delete Function
                    $(document).on('click', '.delete-button', function () {
                        deleteCategory($(this).attr('id'));
                    });
                });

                // function fetchAllCategories(){
                // var token =  '{{ Session::get('access_token') }}';
                // $.ajax({
                //     url: "{{ url('/subcat') }}",
                //     type: 'GET',
                //     dataType: 'JSON',
                //     headers: {"Authorization": 'Bearer ' + token},
                //     data: {},
                //     success: function(jsonData) {
                //         console.log(jsonData);
                //         switch(jsonData)
                //         {
                //         case jsonData.laptops:
                //         console.log(jsonData.laptops);
                //         break;
                        
                //         default:
                //         console.log(jsonData);
                //         }
                //     // for(var i in jsonData){
                        // if(jsonData=="laptops"){
                        // console.log(jsonData.laptops);
                        // _lap.push(jsonData.laptops);
                        // console.log(_lap);
                        // }
                        // else if(jsonData.softwares=="softwares"){
                        // console.log(jsonData.softwares);
                        // _.push(jsonData.laptops);
                        // console.log(_lap);
                        // }
                        // else if(jsonData.printers){
                        // console.log(jsonData.printers);
                        // // _lap.push(jsonData.laptops);
                        // // console.log(_lap);
                        // }
                        // else if(jsonData.accesories){
                        // console.log(jsonData.accesories);
                        // _lap.push(jsonData.laptops);
                        // console.log(_lap);
                        // }
                // }
                // fetchWishList(); 
                // fetchCartOrders();
                // fetchProcessingOrders();
                // fetchShippedOrders();
                // fetchDeliveredOrders();
        //         }
        //     });
        // }

                function fetchCategories() {
                    var token =  '{{ Session::get('access_token') }}';
                    console.log(token);
                    $("#categoryTbl1").DataTable().destroy();
                    $('#categoryTbl1').DataTable({
                        ajax: {
                            url: "{{ url('/subcat') }}",
                            type: 'GET',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + token},
                            dataSrc: function (json) {
                                 return json.laptops;
                            }
                        },   
                        responsive: true,
                        autoWidth: false,
                        language: {
                            search: "",
                            searchPlaceholder: "Search"
                        },
                        sLengthMenu: "_MENU_items",
                        columns: [
                            {"data": "id"},
                            {"data": "name"},
                             {"data": "subName"},
                            {
                                "data": "null",
                                "render": function (data, type, full, meta) {
                                    var url = '{{ url("/admin/category/edit", "id") }}';
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

                    $("#categoryTbl2").DataTable().destroy();
                    $('#categoryTbl2').DataTable({
                        ajax: {
                            url: "{{ url('/subcat') }}",
                            type: 'GET',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + token},
                            dataSrc: function (json) {
                                 return json.softwares;
                            }
                        },   
                        responsive: true,
                        autoWidth: false,
                        language: {
                            search: "",
                            searchPlaceholder: "Search"
                        },
                        sLengthMenu: "_MENU_items",
                        columns: [
                            {"data": "id"},
                            {"data": "name"},
                             {"data": "subName"},
                            {
                                "data": "null",
                                "render": function (data, type, full, meta) {
                                    var url = '{{ url("/admin/category/edit", "id") }}';
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

                    $("#categoryTbl3").DataTable().destroy();
                    $('#categoryTbl3').DataTable({
                        ajax: {
                            url: "{{ url('/subcat') }}",
                            type: 'GET',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + token},
                            dataSrc: function (json) {
                                 return json.printers;
                            }
                        },   
                        responsive: true,
                        autoWidth: false,
                        language: {
                            search: "",
                            searchPlaceholder: "Search"
                        },
                        sLengthMenu: "_MENU_items",
                        columns: [
                            {"data": "id"},
                            {"data": "name"},
                             {"data": "subName"},
                            {
                                "data": "null",
                                "render": function (data, type, full, meta) {
                                    var url = '{{ url("/admin/category/edit", "id") }}';
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

                    $("#categoryTbl4").DataTable().destroy();
                    $('#categoryTbl4').DataTable({
                        ajax: {
                            url: "{{ url('/subcat') }}",
                            type: 'GET',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + token},
                            dataSrc: function (json) {
                                 return json.accessories;
                            }
                        },   
                        responsive: true,
                        autoWidth: false,
                        language: {
                            search: "",
                            searchPlaceholder: "Search"
                        },
                        sLengthMenu: "_MENU_items",
                        columns: [
                            {"data": "id"},
                            {"data": "name"},
                             {"data": "subName"},
                            {
                                "data": "null",
                                "render": function (data, type, full, meta) {
                                    var url = '{{ url("/admin/category/edit", "id") }}';
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

                //     function fetchCategories() {
                //     var token =  '{{ Session::get('access_token') }}';
                //     console.log(token);
                //         ajax: {
                //             url: "{{ url('/subcat') }}",
                //             type: 'GET',
                //             dataType: 'JSON',
                //             headers: {"Authorization": 'Bearer ' + token},
                //             dataSrc: function (json) {
                //                  return json;
                //             }
                //             $("#categoryTbl1").DataTable().destroy()
                //         $('#categoryTbl1').DataTable({
                //         data:jsonData.laptops,
                //         responsive: true,
                //         autoWidth: false,
                //         language: {
                //         search: "",
                //         searchPlaceholder: "Search"
                //         },
                //         sLengthMenu: "_MENU_items",
                //         columns: [
                //         {"data": "id"},
                //         {"data": "name"},
                //         {"data": "subName"},
                //         ]
                //     });
                //         },
                        
                // }

                function deleteCategory(id) {
                    var token =  '{{ Session::get('access_token') }}';
                    var url = '{{ url("/api/subcategory", "id") }}';
                    url = url.replace('id', id);
                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this category!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            console.log("hellosami");
                            if (willDelete) {
                                $.ajax({
                                    url: url,
                                    type: 'POST',
                                    dataType: 'JSON',
                                    headers: {"Authorization": 'Bearer ' + token},
                                    data: {
                                        '_method': 'delete'
                                    },
                                    success: function (data) {
                                        switch (data['result']) {
                                            case 'success':
                                                // console.log("hellosamisucces");
                                                _isDirty = false;
                                                swal({
                                                    title: data['title'],
                                                    text: data['message'],
                                                    icon: data['result'],
                                                    button: "OK",
                                                    timer: 2000,
                                                }).then(function () {
                                                    fetchCategories();
                                                });
                                                break;
                                            case 'error':
                                                // console.log("hellosamierror");
                                                swal({
                                                    title: data['title'],
                                                    text: data['message'],
                                                    icon: data['result'],
                                                    button: "OK",
                                                });
                                                break;
                                        }
                                    },
                                    error: function (xhr) {
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
