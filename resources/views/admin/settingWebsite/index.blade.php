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
                                data-feather="book"></i></span></span>Site Settings</h4>
            </div>
            <div class="d-flex">
                <!-- <div>
                    
                </div> -->
            </div>
        </div>
        <!-- /Title -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row ">
                        <div class="col-sm">
                            <h4 class="text-center">Count Down</h4><br>
                            <div class="form-group row">
                                    <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                    <div class="col-10">
                                    <input class="form-control validate-required" id="dealsDate"
                                        name="dealsDate" placeholder="Hot Deals Counter" value="" type="text">
                                    </div>
                                    <!-- <div class="col-5">
                                    <label for="status" class="">Enable</label>
                                    <input class="" id="status"
                                        name="status" placeholder="status" value="1" type="checkbox">
                                    </div> -->
                                
                        <div class="col-6"></div>
                        <div class="col-6 mt-3">
                                        <div class="ml-4">
                                                <label for="status" class="">Enable</label>
                                                    
                                                <input class="" id="status" name="status" placeholder="status" value="0" type="checkbox">
                                         </div>

                        <div class="hk-pg-header">
                        <div class="d-flex">
                             <div>
                                <a class="hk-pg-title btn btn-primary btn-sm" href=javascript:void(0);" id="dateSet">
                                <span class="mr-5">
                                    <span class="feather-icon"><i data-feather="plus-square"></i></span>
                                </span>Add Timer</a>
                             </div>
                        </div>
                       </div>
                       
                            </div>
                        </div>
                    </div>
                </section>
             </div>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                        <div class="hk-pg-header mb-10 float-right">
                        <div class="d-flex">
                             <div>
                                <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/websettings/create/carousel')}}">
                                <span class="mr-5">
                                    <span class="feather-icon"><i data-feather="plus-square"></i></span>
                                </span>Add New Carousel</a>
                             </div>
                        </div>
                       </div>
                        <h3 class="text-center">Index Slider</h3>
                        <p class="text-center text-danger">Size of the image should be 1250 X 400 *</p>
                        
                            <div class="table-wrap">
                                <table id="sliderTbl" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Sub Title</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Sub Title</th>
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
                        <div class="hk-pg-header mb-10 float-right">
                        <div class="d-flex">
                             <div>
                                <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/websettings/create/subimage')}}">
                                <span class="mr-5">
                                    <span class="feather-icon"><i data-feather="plus-square"></i></span>
                                </span>Add New SubImage</a>
                             </div>
                        </div>
                       </div>
                        <h3 class="text-center">Sub-Image</h3>
                        <p class="text-center text-danger">Size of the image should be 1250 X 400 *</p>
                            <div class="table-wrap">
                                <table id="sliderTbl1" class="table table-hover w-100 pb-30">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Sub Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Sub Title</th>
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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- jQuery -->
    <!-- <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script> -->

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
    <script src="{{asset('dist/js/moment.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('dist/js/toggle-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('dist/js/init.js')}}"></script>
    <!-- Custom JavaScript -->
   
    <script type="text/javascript">



    //  var _carousel=[];
    // var _subImages=[];
    // my custom script
    $(document).ready(function() {
        // Fetch Products
        fetchTimer();

        $( "#dealsDate" ).datepicker({
            minDate: 0,
            dateFormat: 'yy-mm-dd'
        });

        console.log("hello");
        fetchCarousel();
        fetchSubImages();
    

         $(document).on('click', '#dateSet', function() {
            storeDate();
         });
       
        //  Delete Function
         $(document).on('click', '.delete-button', function() {
         deleteSlider($(this).attr('id'));
        });
        $(document).on('click', '.delete-buttonSub', function() {
         deleteSubImage($(this).attr('id'));
        });
    });

    function storeDate(){
        var token =  '{{ Session::get('access_token') }}';
        var dateSet = $('#dealsDate').val();
        var status = $('#status').prop('checked') ? 1 : 0 ;
        $.ajax({
        url: "{{ url('/countdown') }}",
        type: 'POST',
        dataType: 'JSON',
        headers: {
            "Authorization": 'Bearer ' + token
        },
        data: {
             dateSet: dateSet,
             status : status,
             '_method': 'PUT',
             '_token': "{{ csrf_token() }}",
              },
              success: function(data) {
                console.log(data);
                switch(data['result']){
                            case 'success':
                                         _isDirty = false;
                                         swal({
                                                    title: data['title'],
                                                text: data['message'],
                                                icon: data['result'],
                                                button: "OK",
                                                timer: 2000,
                                                }).then(function() {
                                                    // document.location.href="{!! URL::to('admin/logs'); !!}";  
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
    function fetchTimer() {
    var token = '{{ Session::get('access_token') }}';
    var url = '{{ url("/gettimer") }}';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'JSON',
        headers: {
            "Authorization": 'Bearer ' + token
        },
        data: {},
        success: function(jsonData) {
          console.log(jsonData);
            $('#dealsDate').val(jsonData[0].countDown);
            // $('input[name="status"]')[0].checked = true;
            if(jsonData[0].status===1){
        
                    $('#status').attr('checked', true);
                    }
                    else{
                        $('#status').attr('checked', false);
                    }
            

            
         
        }
		
    });
	//
}

    function fetchCarousel(){

        var token =  '{{ Session::get('access_token') }}';
        $("#sliderTbl").DataTable().destroy()
        $('#sliderTbl').DataTable({
            ajax: {
                url: "{{ url('/api/settings') }}",
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
                    "data": "slidersUrl"
                },
                {
                    "data": "slidersGroup"
                },
                {
                    "data": "null",
                    "render": function(data, type, full, meta) {

                        var sliderImage = '{{URL::asset('distweb/img/images/banners') }}' + '/' + full.slidersImage;
                        if (sliderImage != undefined) {

                            return '<div class="avatar">' +
                                '<img src="' + sliderImage +
                                '" alt="user" class="" height="100" width="200">' +
                                '</div>';
                        } else {
                            return "";
                        }

                    }
                },
                {
                    "data": "slidersTitle",
                },

                {
                    "data": "null",
                    "render": function(data, type, full, meta) {
                        var url = '{{ url("/admin/websettings/edit/carousel", "id") }}';
                        url = url.replace('id', full.id);
                        return '<div class="d-flex">' +
                            '<a href="' + url + '" class="text-primary mr-15 fa fa-edit mt-1 "></a>' +
                            '<a href="javascript:void(0);" id="' + full.id +
                             '"class="text-danger delete-button mr-15"><i class="fa fa-trash"><i></a>' +
                            '</div>'
                            ;
                    }
                },
                
            ]
        });
    }


    
    function fetchSubImages() {
        var token =  '{{ Session::get('access_token') }}';
        $("#sliderTbl1").DataTable().destroy()
        $('#sliderTbl1').DataTable({
            ajax: {
                url: "{{ url('/api/categoryimages') }}",
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
                    "data": "catImageUrl"
                },
                {
                    "data": "catImageGroup"
                },
                {
                    "data": "null",
                    "render": function(data, type, full, meta) {

                        var sliderImage = '{{URL::asset('distweb/img/images/banners') }}' + '/' + full.catImage;
                        if (sliderImage != undefined) {

                            return '<div class="avatar">' +
                                '<img src="' + sliderImage +
                                '" alt="user" class="" height="100" width="200">' +
                                '</div>';
                        } else {
                            return "";
                        }

                    }
                },
                {
                    "data": "catImageTitle",
                },

                {
                    "data": "null",
                    "render": function(data, type, full, meta) {
                        var url = '{{ url("/admin/websettings/edit/subimage", "id") }}';
                        url = url.replace('id', full.id);
                        return '<div class="d-flex">' +
                            '<a href="' + url + '" class="text-primary mr-15 fa fa-edit mt-1 "></a>' +
                            '<a href="javascript:void(0);" id="' + full.id +
                            '" class="text-danger delete-buttonSub mr-15"><i class="fa fa-trash"><i></a>' +
                            '</div>'
                            ;
                    }
                },
            ]
        });
    }

    function deleteSlider(id) {
        var token =  '{{ Session::get('access_token') }}';
        console.log(id);
        var url = '{{ url("/api/settings", "id") }}';
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
                    console.log("in delete");
                    $.ajax({
                        url: url,
                        type: 'POST',
                        headers: {"Authorization": 'Bearer ' + token},
                        dataType: 'JSON',
                        data: {
                            id:id,
                            '_method': 'delete',
                         
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
                                         fetchCarousel()
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

    //delete subImage

    function deleteSubImage(id) {
        var token =  '{{ Session::get('access_token') }}';
        console.log(id);
        var url = '{{ url("/api/categoryimages", "id") }}';
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
                    console.log("in delete");
                    $.ajax({
                        url: url,
                        type: 'POST',
                        headers: {"Authorization": 'Bearer ' + token},
                        dataType: 'JSON',
                        data: {
                            id:id,
                            '_method': 'delete',
                         
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
                                        fetchSubImages()
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