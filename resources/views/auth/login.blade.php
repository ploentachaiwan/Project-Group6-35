@extends('layouts.app')

@section('content')
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{asset('back_end/images/icons/favicon.ico')}} "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/bootstrap/css/bootstrap.min.css')}} "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}} "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/fonts/iconic/css/material-design-iconic-font.min.css')}} "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/animate/animate.css')}} "/>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/css-hamburgers/hamburgers.min.css')}} "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/animsition/css/animsition.min.css')}} "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/select2/select2.min.css')}} "/>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/daterangepicker/daterangepicker.css')}} "/>
<!--===============================================================================================--> 
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/css/util.css')}} "/>
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/css/main.css')}} "/>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="POST" action="{{route('login')}}">
                    @csrf
					<span class="login100-form-title p-b-70">
						เข้าสู่ระบบ
					</span>
					

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username" >
					<li style="color: white">username</li>
						<input class="input100" type="text" name="username" >
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<li style="color: white">password</li>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="btn btn-warning">
							เข้าสู่ระบบ
						</button>
					</div>

					

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

@endsection
