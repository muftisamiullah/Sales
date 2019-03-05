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
                    </span>Sub Category</h4>
                </div>
<!-- /Title -->

<!-- Row -->
<div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Add Sub Category</h5>
                            <div class="row">
                                <div class="col-sm">
                                        <div class="row justify-content-md-center">
                                            <div class="col-md-6 form-group">
                                                <label for="category" class="colored label-required">Category</label>
                                            <select name="category" id="category" class="form-control validate-required">
                                            <option  value="">Choose...</option>
                                      
                                            </select>
                                            <small class="form-text text-danger d-none" id="categoryHelp">Category is required</small>
                                                <!-- <label for="tags" class="colored">Tags</label>
                                   
                                            <select name="tags" id="tags" class="form-control">
                                                <option  value="">Choose...</option>
                                                <option  value="1">Laptops</option>
                                                <option  value="2">Softwares</option>
                                                <option  value="3">Printers</option>
                                                <option  value="4">Accessories</option>
                                            </select> -->
                                                <label for="lastName">Sub Category Name</label>
                                                <input class="form-control" id="categoryName" placeholder="Category Name" value="" type="text">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-md-center">
                                        <button id="saveCategory" class="btn btn-primary mr-10">Save</button>
                                        <button id="cancelCategory" class="btn btn-light">Cancel</button>
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
<script type="text/javascript">
    // my custom script
    var _isDirty = false;
    $(document).ready(function() {
        fetchCategories();
        $(":input").change(function(){
                                  _isDirty = true;

                                });
        // Save Function
        $(document).on('click','#saveCategory',function(){
            saveCategory();
        });
        // Cancel Function
        $(document).on('click','#cancelCategory',function(){
            if(_isDirty){
                swal({
                    title: "",
                    text: "Do you want to Close without saving the changes?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        document.location.href="{!! URL::to('admin/category'); !!}";
                    } else {
                    }
                });
            }else{
                document.location.href="{!! URL::to('admin/category'); !!}";  
            }
});
});
function saveCategory(){
    var token =  '{{ Session::get('access_token') }}';
    console.log("jejke");
    var categoryName = $('#categoryName').val();
    var catid = $('#category').val();
    $.ajax({
            url: "{{ url('/api/subcategory') }}",
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: 
            {
                subName:categoryName,
                catId:catid,
            },
            success: function (data) {
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
                                                    document.location.href="{!! URL::to('admin/category'); !!}";  
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
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            success: function(jsonData) {
                console.log(jsonData.data);
                for(var info in jsonData.data) {
                    
                    $('#category').append('<option value="'+jsonData.data[info]['id']+'">'+jsonData.data[info]['name']+'</option>')

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