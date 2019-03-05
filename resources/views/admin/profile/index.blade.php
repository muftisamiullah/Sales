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
												<div class="text-white text-capitalize display-6 mb-5 font-weight-400 "> &nbsp; @if ($name=session()->get('username_admin') ){{$name}}@endif</div>
												<!-- <div class="font-14 text-white"><span class="mr-5"><span class="font-weight-500 pr-5">124</span><span class="mr-5">Followers</span></span><span><span class="font-weight-500 pr-5">45</span><span>Following</span></span></div> -->
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="button-list">
											<!-- <a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded"><span class="btn-text">Message</span><span class="icon-label"><i class="icon ion-md-mail"></i> </span></a> -->
											<a href="#" class="btn btn-icon btn-icon-circle btn-indigo btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
											<a href="#" class="btn btn-icon btn-icon-circle btn-sky btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
											<a href="#" class="btn btn-icon btn-icon-circle btn-purple btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-instagram"></i></span></a>
										</div>
									</div>
								</div>
							</div>

<!-- navbar -->
<!-- form to edit details -->'
<br><br>
<div class="page-content">
            <div class="row text-center">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <!-- <div class="box-authentication"> -->
                    <!-- <form method="post" id="signup" action="/"> -->
                    <!-- @csrf -->
                    <!-- <h3>My Profile</h3> -->
                    <!-- <p>Please enter your email address to create an account.</p> -->
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input placeholder="First Name" type="text" name="fname" class="form-control" id="fname">
                            <small class="form-text text-danger" id="fnameerror"></small>

                        </div>
                        <div class="col-md-6 form-group">
                            <input id="lname" placeholder="Last Name" type="text" name="lname" class="form-control">
                            <small class="form-text text-danger" id="lnameerror"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <input id="email1" placeholder="Email" type="text" name="email" class="form-control"
                                readonly>
                            <small class="form-text text-danger" id="email1Nameerror"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <input id="phone" placeholder="Phone" type="text" name="phone" class="form-control">
                            <small class="form-text text-danger" id="phoneError"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input id="passwordRegistration" type="password" name="password" placeholder="Password"
                                class="form-control">
                            <small class="form-text text-danger" id="passwordRegistrationNameerror"></small>

                        </div>
                        <div class="col-md-6 form-group">
                            <input id="passwordRegistration1" type="password" name="password1"
                                placeholder="Confirm Password" class="form-control">
                            <small class="form-text text-danger" id="passwordRegistration1Nameerror"></small>

                        </div>
                    </div>
                    <!-- <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input  placeholder="City" type="text" name="city"
                                    class="form-control" id="city">
                            </div>
                            <div class="col-md-6 form-group">
                                <input id="state" placeholder="State" type="text" name="state" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input  placeholder="Zip" type="text" name="zip"
                                    class="form-control" id="city">
                            </div>
                            <div class="col-md-6 form-group">
                                <input id="country" placeholder="Country" type="text" name="country" class="form-control">
                            </div>
                        </div> -->
                    <!-- <button class="button" id="saveAdmin" class="btn btn-danger btn-rounded" type="submit"><i class="fa fa-user"></i> Update</button> -->
                    <button type="button" id="saveAdmin" class="btn btn-danger btn-rounded"><i class="fa fa-user pr-2"></i>Update</button>
                    <!-- </div> -->
                    <!-- </form> -->
                </div>
            </div>


    @section('page-script')

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
    <script type="text/javascript" src="{{ asset('js/validate.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{asset('dist/js/init.js')}}"></script>
<script type="text/javascript">
// my custom script
$(document).ready(function() {

    fetchAdmin();
    //  $(document).on('click', '#saveAdmin', function() {
    //  saveAdmin();      // ***************function call in validate.js****************
    // });

});

function fetchAdmin() {
    var token = '{{ Session::get('access_token') }}';
    var url = '{{ url("/adminprofile") }}';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'JSON',
        headers: {
            "Authorization": 'Bearer ' + token
        },
        data: {},
        success: function(jsonData) {
            data = jsonData.data;
            console.log(jsonData);
            $('#fname').val(data.firstName);
            $('#lname').val(data.lastName);
            $('#email1').val(data.email);
            $('#phone').val(data.phone);
        }
    });
}

function saveAdmin() {
    var token = '{{ Session::get('access_token') }}';
    var url = '{{ url("/updateaccount") }}';
    // console.log(url);
    firstName = $('#fname').val();
    lastName = $('#lname').val();
    email = $('#email1').val();
    phone = $('#phone').val();
    password = $('#passwordRegistration').val();
    // console.log("ejjj");
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        headers: {
            "Authorization": 'Bearer ' + token
        },
        data: {
            firstName: firstName,
            lastName: lastName,
            email: email,
            phone: phone,
            password: password,
            '_method': 'PUT',
            '_token': "{{ csrf_token() }}",
        },
        success: function(jsonData) {
            // console.log(jsonData);
        
            switch (jsonData['result']) {
                    case 'success':
                    
                        _isDirty = false;
                        swal({
                            title: jsonData['title'],
                            text: jsonData['message'],
                            icon: jsonData['result'],
                            button: "OK",
                            timer: 2000,
                        }).then(function() {
                             document.location.href = "{!! URL::to('/admin'); !!}";
                        });
                        break;
                    case 'error':
                        swal({
                            title: jsonData['title'],
                            text: jsonData['message'],
                            icon: jsonData['result'],
                            button: "OK",
                        });
                        break;
                }
        },
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