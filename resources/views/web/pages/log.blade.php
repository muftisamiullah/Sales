@extends('web.layouts.sidebar')
@section('content')


<div class="jumbotron text-center">
  <h1 class="display-3 alert alert-success">Thank You!</h1>
  <p class="lead alert alert-success"><strong>For Shopping with Us.</strong> You Have been Successfully Logged Out</p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-warning" href="{!! URL::to('/'); !!}" role="button">Continue Shopping</a>
  </p>
</div>


@section('page-script')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<!-- <script type="text/javascript" src="{{ asset('distweb/js/libs/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/jquery.actual.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('distweb/js/libs/theme-script1.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('js/validate.js') }}"></script>

@stop

<div>
    @include('web.includes.footer')
</div>
<a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

@stop

