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
                                data-feather="book"></i></span></span>Manufacturer</h4>
            </div>
            <div class="d-flex">
                <div>
                    <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/manufacturer/create')}}">
                        <span class="mr-5">
                            <span class="feather-icon"><i data-feather="plus-square"></i></span>
                        </span>Add New Manufacturer</a>
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
                                <table id="manufacturerTbl" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Url</th>
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
                                            <th>Category</th>
                                            <th>Url</th>
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
        fetchManufacturer();
        // Delete Function
        $(document).on('click', '.delete-button', function() {
            deleteManufacturer($(this).attr('id'));
        }); 
    });

    function fetchManufacturer() {
        var token =  '{{ Session::get('access_token') }}';
        $("#manufacturerTbl").DataTable().destroy()
        $('#manufacturerTbl').DataTable({
            ajax: {
                url: "{{ url('/subcatman') }}",
                type: 'GET',
                dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                dataSrc: function(json) {
                    console.log(json);
                    return json;
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
                    "data": "manufacturerName"
                },
                { 
                    "data": "null",
                    "render": function(data, type, full, meta) {

                        var manufacturerImage = '{{URL::asset('manufacturer/images') }}' + '/' + full.manufacturerImage;
                        if (manufacturerImage != undefined) {

                            return '<div class="avatar">' +
                                '<img src="' + manufacturerImage +
                                '" alt="user" class="avatar-img rounded-circle">' +
                                '</div>';
                        } else {
                            return "";
                        }

                    }
                },
                {
                    "data" : "subName" 
                },
                // {
                //     "data": null,
                //     "render": function(data, type, full, meta) {
                //        switch(full.manufacturerCategoryId){
                //            case 1:
                //            return data = 'Notebooks';
                //            break;

                //            case 2:
                //            return data = 'Touch';
                //            break;

                //            case 3:
                //            return data = 'Antivirus';
                //            break;

                //            case 4:
                //            return data = 'Software';
                //            break;

                //            case 5:
                //            return data = 'Wired Printer';
                //            break;

                //            case 6:
                //            return data = 'Wireless Printer';
                //            break;

                //            case 7:
                //            return data = 'Pen Drives';
                //            break;

                //            case 8:
                //            return data = 'Memory Cards';
                //            break;
                           
                //            default:
                //            return data = 'Antivirus';
                //        }
                //     }


                // },

                {
                    "data": "manufacturerUrl"
                },

                



                {
                    "data": "null",
                    "render": function(data, type, full, meta) {
                        var url = '{{ url("/admin/manufacturer/edit", "id") }}';
                        url = url.replace('id', full.id);
                        return '<div class="d-flex">' +
                            '<a href="' + url + '" class="text-primary mr-15 fa fa-edit mt-1 "></a>' +
                            '<a href="javascript:void(0);" id="' + full.id +
                            '"class="text-danger delete-button mr-15"><i class="fa fa-trash"><i></a>' +
                            '</div>';
                    }
                },
            ]
        });
    }

    function deleteManufacturer(id) {
        var token =  '{{ Session::get('access_token') }}';
        console.log(id);
        var url = '{{ url("/api/manufacturer", "id") }}';
        url = url.replace('id', id);
        console.log(url);
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this manufacturer!",
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
                                        fetchManufacturer();
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