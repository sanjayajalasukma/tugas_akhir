<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Pendaftaran KP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<span class="login100-form-logo">
					<img src="{{ asset('assets/img/logo.png') }}" alt="">
				</span>

				<span class="login100-form-title p-b-34 p-t-27">
					SISTEM PENDAFTARAN KP
				</span>
				<form class="login100-form" action="{{ route('login') }}" method="POST">
					@csrf

					<div class="wrap-input100 validate-input" data-validate = "masukan nrk">
                        <i class="fa fa-user-circle login-icon"></i>
						<input class="input100 @error('nrk') is-invalid @enderror" type="text" name="nrk" placeholder="NRK">
						@error('nrk')
							<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="masukan password">
                        <i class="fa fa-lock login-icon"></i>
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
						@error('password')
							<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> --}}

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>
	
    <script src="{{ asset('js/all.min.js') }}"></script>

</body>
</html>