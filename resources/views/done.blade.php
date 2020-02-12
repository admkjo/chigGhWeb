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
            <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="al-cta-box text-center">
                                <a href="{{ url('/') }}" class="btn btn-primary btn-lg py-2 px-5 mt-4 font-weight-bold">Home </a>
                            </div>
                        </div>

                    </div>
                </div>
		<div class="wrap-contact100">
			<form class="contact100-form validate-form"  method="POST" action="{{ route('regis') }}">
                        @csrf
                    <h2>CONGRATULATIONS!!!</h2>
                    <h4 style="text-align:justify">
                        Your registration was successul.
                        please save this number <strong>"0246 166 473"</strong> and send a message through
                        whatsapp to receive your registration code.
                    </h4>

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
