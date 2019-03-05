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
                                data-feather="book"></i></span></span>Order</h4>
            </div>
            <!-- <div class="d-flex">
                <div>
                    <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/product/create')}}">
                        <span class="mr-5">
                            <span class="feather-icon"><i data-feather="plus-square"></i></span>
                        </span>Add New Product</a>
                </div>
            </div> -->
        </div>
        <!-- /Title -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                        <h3 class="text-center">New Orders</h3>
                            <div class="table-wrap">
                                <table id="orderTbl2" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> -->
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                         <!-- <th>ID</th> -->
                                         <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> -->
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
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
                        <h3 class="text-center">Wishlist</h3>
                            <div class="table-wrap">
                                <table id="orderTbl0" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                         <!-- <th>ID</th> -->
                                         <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> -->
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           <!-- <th>ID</th> -->
                                         <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> -->
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
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
        <!-- /Row2 -->


        <!-- Row 1-->
        
        <div class="row">
          <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                        <h3 class="text-center">In Cart Orders</h3>
                            <div class="table-wrap">
                                <table id="orderTbl1" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                         <!-- <th>ID</th> -->
                                         <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> -->
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           <!-- <th>ID</th> -->
                                         <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> -->
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
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
        <!-- /Row2 -->
        
        

        <!-- /Row 3 -->
        
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                        <h3 class="text-center">Shipped Orders</h3>
                            <div class="table-wrap">
                                <table id="orderTbl3" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                         <!-- <th>ID</th> -->
                                         <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> -->
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                         <!-- <th>ID</th> -->
                                         <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> -->
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
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



        <!-- /Row 3 -->
        
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                        <h3 class="text-center">Delivered Orders</h3>
                            <div class="table-wrap">
                                <table id="orderTbl4" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                            <!-- <th>ID</th> -->
                                         <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> --> 
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                             <!-- <th>ID</th> -->
                                         <th>Product Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <!-- <th>Order Date</th> -->
                                            <th>Name</th>
                                            <th>User Email</th>
                                            <th>Payment Status</th>
                                            <th>Address</th>
                                            <th>Order Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
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
    <script src="{{asset('dist/js/moment.js')}}"></script>

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
    var _wishlist=[];
    var _cartOrders =[];
    var _inprocessingOrders =[];
    var _shippedOrders =[];
    var _deliveredOrders =[];
    $(document).ready(function() {
        // Fetch Products
        $('#orderTbl2').DataTable({
            "lengthChange": false
});
        console.log("hello");
        fetchAllOrders();
       // fetchOrders1();
        //fetchOrders2();

        // Delete Function
        $(document).on('click', '.delete-button', function() {
            deleteOrder($(this).attr('id'));
        });
    });
    function fetchAllOrders(){
        var token =  '{{ Session::get('access_token') }}';
        $.ajax({
            url: "{{ url('/orderbyuser') }}",
            type: 'GET',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {},
            success: function(jsonData) {
                
            for(var i in jsonData){
                if(jsonData[i]['orderStatus']==0){
                    console.log(jsonData[i]['orderStatus']);
                    _cartOrders.push(jsonData[i]);
                    
                }else if(jsonData[i]['orderStatus']==1){
                    _inprocessingOrders.push(jsonData[i]);
                }
                else if(jsonData[i]['orderStatus']==2){
                    _shippedOrders.push(jsonData[i]);
                }
                else if(jsonData[i]['orderStatus']==3){
                    _deliveredOrders.push(jsonData[i]);
                }
                else if(jsonData[i]['orderStatus']==4){
                    _wishlist.push(jsonData[i]);
                }
            }
            fetchWishList(); 
            fetchCartOrders();
            fetchProcessingOrders();
            fetchShippedOrders();
            fetchDeliveredOrders();
            
            }
        });
    }
    function fetchWishList() {
      
      $("#orderTbl0").DataTable().destroy()
      $('#orderTbl0').DataTable({
          data:_wishlist,
          responsive: true,
          autoWidth: false,
          language: {
              search: "",
              searchPlaceholder: "Search"
          },
          sLengthMenu: "_MENU_items",
          columns: [
          //   {
          //       "data": "id"
          //   },
            {
                  "data": "orderShipName"
              },
             

              {
                  "data": "orderPhone"
              },
              {
                  "data": null,
                  "render": function(data, type, full, meta){
                      return full["currency"] + " " + full["orderTotalAmount"];
                  }
              },
              // {
              //     "data": "orderDate",
              //     render: function(data, type, row){
              //         return moment(data).format("MM-DD-YYYY");
                           
              //             }
              // },
              {
                  "data": "orderDeliverName"
              },
              {
                  "data": "email"
              },
              {
                  "data": "orderPaymentStatus"
              },
             
              {
                  "data": null,
                  "render": function(data, type, full, meta){
                         return full["orderShipAddress"] + ", " + full["orderShipAddress2"] + ", " + full["orderCity"]
                         + ", " + full["orderState"] + ", " + full["orderCountry"] + ", " + full["orderZip"];
              }
                  
              },
              {
                  "data": "orderType"
              },
              {
                  "data": "orderQuantity"
              },

              {
                  // "data": "orderStatus"
                  "render": function(data, type, full, meta) {
                      return data = 'In WishList'
                  }
              },
              
              {
                  "data": "null",
                  "render": function(data, type, full, meta) {
                      var url = '{{ url("/admin/order/edit", "id") }}';
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

    function fetchCartOrders() {
      
        $("#orderTbl1").DataTable().destroy()
        $('#orderTbl1').DataTable({
            data:_cartOrders,
            responsive: true,
            autoWidth: false,
            language: {
                search: "",
                searchPlaceholder: "Search"
            },
            sLengthMenu: "_MENU_items",
            columns: [
            //   {
            //       "data": "id"
            //   },
              {
                    "data": "orderShipName"
                },
               

                {
                    "data": "orderPhone"
                },
                {
                    
                  "data": null,
                  "render": function(data, type, full, meta){
                      return full["currency"] + " " + full["orderTotalAmount"];
                  }
                },
                // {
                //     "data": "orderDate",
                //     render: function(data, type, row){
                //         return moment(data).format("MM-DD-YYYY");
                             
                //             }
                // },
                {
                    "data": "orderDeliverName"
                },
                {
                    "data": "email"
                },
                {
                    "data": "orderPaymentStatus"
                },
               
                {
                    "data": null,
                    "render": function(data, type, full, meta){
                           return full["orderShipAddress"] + ", " + full["orderShipAddress2"] + ", " + full["orderCity"]
                           + ", " + full["orderState"] + ", " + full["orderCountry"] + ", " + full["orderZip"];
                }
                    
                },
                {
                    "data": "orderType"
                },
                {
                  "data": "orderQuantity"
              },

                {
                    // "data": "orderStatus"
                    "render": function(data, type, full, meta) {
                        return data = 'In Cart'
                    }
                },
                
                {
                    "data": "null",
                    "render": function(data, type, full, meta) {
                        var url = '{{ url("/admin/order/edit", "id") }}';
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

    function fetchProcessingOrders() {
      
      $("#orderTbl2").DataTable().destroy()
      $('#orderTbl2').DataTable({
          data:_inprocessingOrders,
          responsive: true,
          autoWidth: false,
          language: {
              search: "",
              searchPlaceholder: "Search"
          },
          sLengthMenu: "_MENU_items",
          columns: [
            //   {
            //       "data": "id"
            //   },
              {
                    "data": "orderShipName"
                },
               

                {
                    "data": "orderPhone"
                },
                {
                    
                  "data": null,
                  "render": function(data, type, full, meta){
                      return full["currency"] + " " + full["orderTotalAmount"];
                  }
                },
                // {
                //     "data": "orderDate",
                //     render: function(data, type, row){
                //         return moment(data).format("MM-DD-YYYY");
                             
                //             }
                // },
                {
                    "data": "orderDeliverName"
                },
                {
                    "data": "email"
                },
                {
                    "data": "orderPaymentStatus"
                },
               
                {
                    "data": null,
                    "render": function(data, type, full, meta){
                           return full["orderShipAddress"] + ", " + full["orderShipAddress2"] + ", " + full["orderCity"]
                           + ", " + full["orderState"] + ", " + full["orderCountry"] + ", " + full["orderZip"];
                }
                    
                },
                {
                    "data": "orderType"
                },
                {
                  "data": "orderQuantity"
              },
                

              {
                "render": function(data, type, full, meta) {
                        return data = 'Processing'
                    }
              },
              
              {
                  "data": "null",
                  "render": function(data, type, full, meta) {
                      var url = '{{ url("/admin/order/edit", "id") }}';
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

  function fetchShippedOrders() {
      
      $("#orderTbl3").DataTable().destroy()
      $('#orderTbl3').DataTable({
          data:_shippedOrders,
          responsive: true,
          autoWidth: false,
          language: {
              search: "",
              searchPlaceholder: "Search"
          },
          sLengthMenu: "_MENU_items",
          columns: [
            //   {
            //       "data": "id"
            //   },
              {
                    "data": "orderShipName"
                },
               

                {
                    "data": "orderPhone"
                },
                {
                    
                  "data": null,
                  "render": function(data, type, full, meta){
                      return full["currency"] + " " + full["orderTotalAmount"];
                  }
                },
                // {
                //     "data": "orderDate",
                //     render: function(data, type, row){
                //         return moment(data).format("MM-DD-YYYY");
                             
                //             }
                // },
                {
                    "data": "orderDeliverName"
                },
                {
                    "data": "email"
                },
                {
                    "data": "orderPaymentStatus"
                },
               
                {
                    "data": null,
                    "render": function(data, type, full, meta){
                           return full["orderShipAddress"] + ", " + full["orderShipAddress2"] + ", " + full["orderCity"]
                           + ", " + full["orderState"] + ", " + full["orderCountry"] + ", " + full["orderZip"];
                }
                    
                },
                {
                    "data": "orderType"
                },
                {
                  "data": "orderQuantity"
              },
              {
                "render": function(data, type, full, meta) {
                        return data = 'Shipped'
                    }
              },
              
              {
                  "data": "null",
                  "render": function(data, type, full, meta) {
                      var url = '{{ url("/admin/order/edit", "id") }}';
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


  function fetchDeliveredOrders() {
      
      $("#orderTbl4").DataTable().destroy()
      $('#orderTbl4').DataTable({
          data:_deliveredOrders,
          responsive: true,
          autoWidth: false,
          language: {
              search: "",
              searchPlaceholder: "Search"
          },
          sLengthMenu: "_MENU_items",
          columns: [
            //   {
            //       "data": "id"
            //   },
              {
                    "data": "orderShipName"
                },
               

                {
                    "data": "orderPhone"
                },
                {
                   
                  "data": null,
                  "render": function(data, type, full, meta){
                      return full["currency"] + " " + full["orderTotalAmount"];
                  }
                },
                // {
                //     "data": "orderDate",
                //     render: function(data, type, row){
                //         return moment(data).format("MM-DD-YYYY");
                             
                //             }
                // },
                {
                    "data": "orderDeliverName"
                },
                {
                    "data": "email"
                },
                {
                    "data": "orderPaymentStatus"
                },
               
                {
                    "data": null,
                    "render": function(data, type, full, meta){
                           return full["orderShipAddress"] + ", " + full["orderShipAddress2"] + ", " + full["orderCity"]
                           + ", " + full["orderState"] + ", " + full["orderCountry"] + ", " + full["orderZip"];
                }
                    
                },
                {
                    "data": "orderType"
                },
                {
                  "data": "orderQuantity"
              },


              {
                "render": function(data, type, full, meta) {
                        return data = 'Delivered'
                    }
              },
              
              {
                  "data": "null",
                  "render": function(data, type, full, meta) {
                      var url = '{{ url("/admin/order/edit", "id") }}';
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

    function deleteOrder(id) {
        var token =  '{{ Session::get('access_token') }}';
        console.log(id);
        var url = '{{ url("/api/order", "id") }}';
        url = url.replace('id', id);
        console.log(url);
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this order!",
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
                                        fetchOrders();
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





