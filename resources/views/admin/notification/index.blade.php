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
                                data-feather="book"></i></span></span>Notifications</h4>
            </div>
            <!-- <div class="d-flex">
                <div>
                    <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/notification/create')}}">
                        <span class="mr-5">
                            <span class="feather-icon"><i data-feather="plus-square"></i></span>
                        </span>Add New Notification</a>
                </div>
            </div> -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                        <h3 class="text-center">Newsletter Subscriptions</h3>
                            <div class="table-wrap">
                                <table id="notificationTbl" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
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
         <!-- Row -->
         <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                        <h3 class="text-center">Callback Requests</h3>
                            <div class="table-wrap">
                                <table id="notificationTbl1" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Phone</th>
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

         <!-- Row -->
         <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                        <h3 class="text-center">Contact Us / Feedback</h3>
                            <div class="table-wrap">
                                <table id="notificationTbl2" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Website</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Website</th>
                                            <th>Message</th>
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
     var _newsletters=[];
     var _callbacks=[];
    // my custom script
    $(document).ready(function() {
        // Fetch Products
        fetchNotification();
       

        // Delete Function
        $(document).on('click', '.delete-button', function() {
            deleteNotification($(this).attr('id'));
        }); 
        $(document).on('click', '.delete-button2', function() {
            deleteNotification($(this).attr('id'));
        }); 
        $(document).on('click', '.delete-button3', function() {
            deleteContact($(this).attr('id'));
        }); 
    });

    function fetchNotification() {
        console.log("infetch");
        var token =  '{{ Session::get('access_token') }}';
        $.ajax({
            url: "{{ url('/api/notification') }}",
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {},
                success: function(json) {
                    _callbacks=[];
                    _newsletters=[];
                     console.log("in success");
                     console.log(json);
                    for(var i in json.data){
                        if(json.data[i]['email']==""){
                            _callbacks.push(json.data[i]);
                        }else if(json.data[i]['phone']==""){
                            _newsletters.push(json.data[i]);
                        }
                    }
                    console.log(_callbacks);
                    console.log(_newsletters);
                    fetchNewsletter();
                    fetchCallback();
                    fetchContact();
                }
            });  
    }

    function fetchNewsletter() {
        $("#notificationTbl").DataTable().destroy()
        $('#notificationTbl').DataTable({
            data:_newsletters,
            responsive: true,
            autoWidth: false,
            language: {
                search: "",
                searchPlaceholder: "Search"
            },
            sLengthMenu: "_MENU_items",
            columns: [
                {
                    "data": "id"
                },
                {
                    "data": "email"
                },
                {
                    "data": "null",
                    "render": function(data, type, full, meta) {
                        var url = '{{ url("/admin/order/edit", "id") }}';
                        url = url.replace('id', full.id);
                        return '<div class="d-flex">' +
                            // '<a href="' + url + '" class="text-primary mr-15 fa fa-edit mt-1 "></a>' +
                            '<a href="javascript:void(0);" id="' + full.id +
                            '" class="text-danger delete-button mr-15"><i class="fa fa-trash"><i></a>' +
                            '</div>';}
                },
            ]
        });
    }


    function fetchCallback() {
        $("#notificationTbl1").DataTable().destroy()
        $('#notificationTbl1').DataTable({
            data:_callbacks,
            responsive: true,
            autoWidth: false,
            language: {
                search: "",
                searchPlaceholder: "Search"
            },
            sLengthMenu: "_MENU_items",
            columns: [
                {
                    "data": "id"
                },
                {
                    "data": "phone"
                },
                {
                    "data": "null",
                    "render": function(data, type, full, meta) {
                        var url = '{{ url("/admin/order/edit", "id") }}';
                        url = url.replace('id', full.id);
                        return '<div class="d-flex">' +
                            // '<a href="' + url + '" class="text-primary mr-15 fa fa-edit mt-1 "></a>' +
                            '<a href="javascript:void(0);" id="' + full.id +
                            '" class="text-danger delete-button2 mr-15"><i class="fa fa-trash"><i></a>' +
                            '</div>';}
                },
            ]
        });
    }

    function fetchContact() {
        var token =  '{{ Session::get('access_token') }}';
        $("#notificationTbl2").DataTable().destroy()
        $('#notificationTbl2').DataTable({
        ajax: {
            url: "{{ url('/api/getContact') }}",
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
                dataSrc: function(json) {
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
                        "data": "name"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "website"
                    },
                    {
                        "data": "message"
                    },
                    {
                        "data": "null",
                        "render": function(data, type, full, meta) {
                            var url = '{{ url("/admin/manufacturer/edit", "id") }}';
                            url = url.replace('id', full.id);
                            return '<div class="d-flex">' +
                                // '<a href="' + url + '" class="text-primary mr-15 fa fa-edit mt-1 "></a>' +
                                '<a href="javascript:void(0);" id="' + full.id +
                                '" class="text-danger delete-button3 mr-15"><i class="fa fa-trash"><i></a>' +
                                '</div>';
                        }
                    },]
            });
    }

    function deleteNotification(id) {
        var token =  '{{ Session::get('access_token') }}';
        var url = '{{ url("/api/notification", "id") }}';
        url = url.replace('id', id);
        console.log(url);
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this Subscriber!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
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
                                    _isDirty = false;
                                    swal({
                                        title: data['title'],
                                        text: data['message'],
                                        icon: data['result'],
                                        button: "OK",
                                        timer: 2000,
                                    }).then(function() {
                                        fetchNotification();
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

    function deleteContact(id) {
        var token =  '{{ Session::get('access_token') }}';
        var url = '{{ url("/api/removeContact", "id") }}';
        url = url.replace('id', id);
        console.log(url);
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this Subscriber!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        headers: {"Authorization": 'Bearer ' + token},
                        dataType: 'JSON',
                        data: {
                            id:id,
                            '_method': 'delete'
                        },
                        success: function(data) {
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
                                        fetchNotification();
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