<!DOCTYPE html>
<html lang="en">
<head>
	<title>ChigGh</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('contact/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('contact/vendor/bootstrap/css/bootstrap.min.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('contact/vendor/animate/animate.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('contact/vendor/css-hamburgers/hamburgers.min.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('contact/vendor/animsition/css/animsition.min.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('contact/vendor/select2/select2.min.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('contact/vendor/daterangepicker/daterangepicker.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('contact/css/util.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('contact/css/main.css')}}"/>
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form"  method="POST" action="{{ route('regis') }}">
                        @csrf
				<span class="contact100-form-title">
					Please Enter Your Details
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Please enter your 10 digit phone number">
					<span class="label-input100">Your Phone Number</span>
					<input class="input100" type="text" name="phone" placeholder="Enter your phone number">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Location is required">
					<span class="label-input100">Your Location</span>
					<input class="input100" type="text" name="location" placeholder="Enter your location">
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('contact/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contact/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contact/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('contact/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contact/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('contact/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('contact/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contact/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contact/js/main.js')}}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
