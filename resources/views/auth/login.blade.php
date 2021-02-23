@extends('layouts.app')
@section('content')
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="assets/images/auth/auth-logo.png" alt="" class="img-fluid">
				<h1 class="text-white my-4">Welcome Back!</h1>
				<h4 class="text-white font-weight-normal">Signin to your account and get explore the Able pro Dashboard Template.<br/>Do not forget to play with live customizer</h4>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				<img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h3 class="mb-4 f-w-400">Signin</h3>
				<div class="form-group mb-3">
					<label class="floating-label" for="Email">Email address</label>
					<input type="text" class="form-control" id="Email" placeholder="">
				</div>
				<div class="form-group mb-4">
					<label class="floating-label" for="Password">Password</label>
					<input type="password" class="form-control" id="Password" placeholder="">
				</div>
				<div class="custom-control custom-checkbox text-left mb-4 mt-2">
					<input type="checkbox" class="custom-control-input" id="customCheck1">
					<label class="custom-control-label" for="customCheck1">Save credentials.</label>
				</div>
				<button class="btn btn-block btn-primary mb-4">Signin</button>
				<div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<button class="btn text-white bg-facebook mb-2 mr-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
					<button class="btn text-white bg-googleplus mb-2 mr-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
					<button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
					<p class="mb-2 mt-4 text-muted">Forgot password? <a href="auth-reset-password-img-side.html" class="f-w-400">Reset</a></p>
					<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup-img-side.html" class="f-w-400">Signup</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
