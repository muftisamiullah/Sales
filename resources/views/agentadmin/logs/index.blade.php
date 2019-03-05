@extends('agentadmin.layouts.sidebar')
@section('content')
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
    @include('agentadmin.includes.breadcrumb')
    <!-- /Breadcrumb -->
        <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header mb-10">
                <div>
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                                        data-feather="book"></i></span></span>Logs</h4>
                </div>
                <div class="d-flex">
                    <div>
                        <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('agentadmin/logs/create')}}">
                        <span class="mr-5">
                        <span class="feather-icon"><i data-feather="plus-square"></i></span>
                        </span>Add New Log</a>
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
                                    <table id="logsTbl" class="table table-hover w-100 pb-30">
                                        <thead>
                                        <tr>
                                            <!-- <th>ID</th> -->
                                            <th>Customer Email</th>
                                            <th>Agent Name</th>
                                            <th>Date</th>
                                            <!-- <th>Note</th> -->
                                            <th>Action</th>
                                    
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <!-- <th>ID</th> -->
                                          
                                            <th>Customer Email</th>
                                            <th>Agent Name</th>
                                            <th>Date</th>
                                            <!-- <th>Note</th> -->
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
                $(document).ready(function () {
                    // Fetch Categories
                    fetchLogs();
// Delete Function
                   
                });

                function fetchLogs() {
                    var token =  '{{ Session::get('agent_access_token') }}';
                    console.log(token);
                    $("#logsTbl").DataTable().destroy();
                    $('#logsTbl').DataTable({
                        ajax: {
                            url: "{{ url('/agentlogs') }}",
                            type: 'GET',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + token},
                            dataSrc: function (json) {
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
                        columns: [
                            // {"data": "id"},
                            {"data": "customerEmail"},
                            
                            { "data": "agentName" },
                               
                            { "data": "created_at" },
                           
                            // {"data": "note"},
                            {
                                "data": "null",
                                "render": function (data, type, full, meta) {
                                    var url = '{{ url("/agentadmin/logs/edit", "id") }}';
                                    url = url.replace('id', full.id);
                                    return '<div class="d-flex">' +
                            '<a href="' + url + '" class="text-primary">View</a>' +
                            '<a href="javascript:void(0);" id="' + full.id +
                            
                            '</div>';
                                }
                            },
                            
                            
                        ]
                    });
                }

                // function deleteCustomer(id) {
                //     var token =  '{{ Session::get('access_token') }}';
                //     var url = '{{ url("/api/customers", "id") }}';
                //     url = url.replace('id', id);
                //     swal({
                //         title: "Are you sure?",
                //         text: "Once deleted, you will not be able to recover this Coupon!",
                //         icon: "warning",
                //         buttons: true,
                //         dangerMode: true,  
                //     })
                //         .then((willDelete) => {
                //             console.log("hellosami");
                //             if (willDelete) {
                //                 $.ajax({
                //                     url: url,
                //                     type: 'POST',
                //                     dataType: 'JSON',
                //                     headers: {"Authorization": 'Bearer ' + token},
                //                     data: {
                //                         '_method': 'delete'
                //                     },
                //                     success: function (data) {
                //                         switch (data['result']) {
                //                             case 'success':
                //                                 console.log("hellosamisucces");
                //                                 _isDirty = false;
                //                                 swal({
                //                                     title: data['title'],
                //                                     text: data['message'],
                //                                     icon: data['result'],
                //                                     button: "OK",
                //                                     timer: 2000,
                //                                 }).then(function () {
                //                                     fetchCustomer();
                //                                 });
                //                                 break;
                //                             case 'error':
                //                                 console.log("hellosamierror");
                //                                 swal({
                //                                     title: data['title'],
                //                                     text: data['message'],
                //                                     icon: data['result'],
                //                                     button: "OK",
                //                                 });
                //                                 break;
                //                         }
                //                     },
                //                     error: function (xhr) {
                //                         console.log(xhr);
                //                     }
                //                 });
                //             }
                //         });
                // }
            </script>
    @stop
    <!-- Footer -->
        <div class="hk-footer-wrap container">
            @include('agentadmin.includes.footer')
        </div>
        <!-- /Footer -->
    </div>
@stop
