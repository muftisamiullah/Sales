@extends('admin.layouts.sidebar')
@section('content')
<div class="hk-pg-wrapper">
<!-- Breadcrumb -->
@include('admin.includes.breadcrumb')
            <!-- /Breadcrumb -->

            <div class="container profile-cover-content py-50 mt-6 bg-dark">
								<div class="hk-row"> 
									<div class="col-lg-6">
										<div class="media align-items-center">
											<div class="media-img-wrap  d-flex">
												<div class="avatar">
													<img src="{{asset('dist/img/avatar11.jpg')}}" alt="user" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body">
												<div class="text-white text-capitalize display-6 mb-5 font-weight-400 ">Cecilia Rios</div>
												<div class="font-14 text-white"><span class="mr-5"><span class="font-weight-500 pr-5">124</span><span class="mr-5">Followers</span></span><span><span class="font-weight-500 pr-5">45</span><span>Following</span></span></div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="button-list">
											<a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded"><span class="btn-text">Message</span><span class="icon-label"><i class="icon ion-md-mail"></i> </span></a>
											<a href="#" class="btn btn-icon btn-icon-circle btn-indigo btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
											<a href="#" class="btn btn-icon btn-icon-circle btn-sky btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
											<a href="#" class="btn btn-icon btn-icon-circle btn-purple btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-instagram"></i></span></a>
										</div>
									</div>
								</div>
							</div>

<!-- navbar -->


<div class="container">
								<ul class="nav nav-light nav-tabs" role="tablist">
									<li class="nav-item">
										<a href="#" class="d-flex h-60p align-items-center nav-link active">ADMIN</a>
									</li>
									<li class="nav-item">
										<a href="#" class="d-flex h-60p align-items-center nav-link">Edit</a>
									</li>
									<li class="nav-item">
										<a href="#" class="d-flex h-60p align-items-center nav-link">Password</a>
									</li>
									
								</ul>
							</div>



         <!-- Container -->
         <div class="container">

<!-- Title -->
<!-- <div class="hk-pg-header mb-10">
					<div>
						<h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="book"></i></span></span>Users</h4>
                    </div>
					<div class="d-flex">
                    <div>
						<a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/user/create')}}">
                        <span class="mr-5">
                        <span class="feather-icon"><i data-feather="plus-square"></i></span>
                        </span>Add New User</a>
                    </div>
                    </div>
                </div> -->
<!-- /Title -->

<!-- Row -->
<div class="row">
    <div class="col-xl-12">
        <section class="hk-sec-wrapper">
            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <table id="userTbl" class="table table-hover w-100 pb-30">
                            <thead>
                                <tr>
                                <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
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
        console.log("hello");
        // Fetch Users
        fetchUsers();
// Delete Function
$(document).on('click','.delete-button',function(){
    deleteUser($(this).attr('id'));
        });
});
function fetchUsers(){
    var token =  '{{ Session::get('access_token') }}';
    $("#userTbl").DataTable().destroy()
    $('#userTbl').DataTable({
                        ajax:{
                            url: "{{ url('/api/showadmin') }}",
                            type: 'GET',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + token},
                            dataSrc: function ( json ) {
                                
                               console.log(json.data);
                                return json.data;
                            }
                            },
                            responsive: true,
		                    autoWidth: false,
		language: { search: "",
		searchPlaceholder: "Search"},
    	sLengthMenu: "_MENU_items",
columns: [
{ "data": "id" },
{ "data": "firstName"},
{ "data": "lastName" },
{ "data": "email" },
{ "data": "phone" },
{ "data": "null", 
"render": function ( data, type, full, meta ) { 
    var url = '{{ url("/admin/user/edit", "id") }}';
    url = url.replace('id', full.id);
    return '<div class="d-flex">'+
                '<a href="'+url+'" class="text-primary mr-15">Edit</a>'+
                '<a href="javascript:void(0);" id="'+full.id+'" class="text-primary delete-button mr-15">Delete</a>'+
            '</div>';
}
},
]
});
}
function deleteUser(id) {
    var token =  '{{ Session::get('access_token') }}';
    var url = '{{ url("/api/user", "id") }}';
    url = url.replace('id', id);
    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this user!",
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
                    '_method':'delete'
                },
                // console.log("in jjjwilldelete");
                success: function (data) {
                    switch(data['result']){
                            case 'success':
                                        console.log("hellosamia");
                                         _isDirty = false;
                                         swal({
                                                    title: data['title'],
                                                text: data['message'],
                                                icon: data['result'],
                                                button: "OK",
                                                timer: 2000,
                                                }).then(function() {
                                                    fetchUsers();
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