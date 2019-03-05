@extends('web.layouts.sidebar')
@section('content')


<div id="content">
		<div class="content-page">
			<div class="container">
				@include('web.includes.breadcrumbs')
				<!-- <div class="contact-map">
					<iframe src="https@www.google.com/maps/embed@pb=!1m18!1m12!1m3!1d151986.00533938778!2d-2.3636687929445515!3d53.472367954780005!2m3!1f0!2f0!3f0!3m2!1i103576D584C" width="1200" height="400" style="border:0" allowfullscreen></iframe>
				</div> -->
				<div class="about-banner banner-image">
					<img src="{{asset('distweb/img/images/photos/contact-banner.jpg')}}" alt="" />
				</div>
				<!-- End Map -->
				<div class="contact-info-page">
					<div class="list-contact-info">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info">
									<a class="contact-icon icon-address-card"><i class="fa fa-address-card"></i></a>
									<h2>4191 Naco Perrin Boulevard San Antonio, Texas 78217.</h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info">
									<a class="contact-icon icon-phone"><i class="fa fa-phone"></i></a>
									<h2>Toll Free:1-888-383-3362</h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info last-item">
									<a class="contact-icon icon-email" href="mailto:support@avs.com"><i class="fa fa-envelope"></i></a>
									<h2><a href="mailto:support@avs.com">support@avs.com</a></h2>
								</div>
							</div>
						</div>
					</div>
					<p class="desc">If the product quality does not meet the standards set in your contract, We will refund the covered amount of your payment.</p>
				</div>
				<div class="contact-form-page">
					<h2>contact from</h2>
					<div class="form-contact">
						<form>
							<div class="row">
								<div class="col-md-3 col-sm-4 col-xs-12">
								<small class="form-text text-danger" id="contactNameError"></small>
									<input type="text" name="name" id="contactName" value="" placeholder="Name *" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
									
								</div>
								<div class="col-md-3 col-sm-4 col-xs-12">
								<small class="form-text text-danger" id="contactEmailError"></small>
									<input type="text" name="email" id="contactEmail" value="" placeholder="Email *" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" required>
									
								</div>
								<div class="col-md-6 col-sm-4 col-xs-12">
									<input type="text" name="website" id="contactWebsite" value="" placeholder="Website" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
								<small class="form-text text-danger" id="contactMessageError"></small>
									<textarea name="message" cols="30" id="contactMessage" value="" rows="8" placeholder="Message *" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"></textarea>
									
									<input type="submit" value="Send" id="send" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Content -->


@section('page-script')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/libs/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('distweb/js/theme.js')}}"></script>
<script>
        $(document).on('click', '#send', function(event) {
            event.preventDefault();
            // contact(); called in validate.js
        });
        function contact() {
            var token =  '{{ Session::get('user_access_token') }}';
            var name = $('#contactName').val();
			var email = $('#contactEmail').val();
            var website = $('#contactWebsite').val();
            var message = $('#contactMessage').val();

            $.ajax({
            url: "{{ url('/api/contact') }}",
            type: 'POST',
            dataType: 'JSON',
            headers: {"Authorization": 'Bearer ' + token},
            data: {
				name:name,
                email: email,
				website:website,
				message:message,
            },
                success: function(data) {
                    console.log(data);
                    if(data.success)
                    {
                        showToast("Thank You for Contacting Us","We will contact you back shortly.", "success");
                    }else{
                        showToast("Something went wrong","", "error");
                    }
                }
            });
        }
    </script>
<script type="text/javascript" src="{{asset('distweb/js/toastr.min.js')}}"></script>
@stop

	<div>
        @include('web.includes.footer')
    </div>
    <a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

@stop