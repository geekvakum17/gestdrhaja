@extends('auth.layouts.main')
@section('content')
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="assets/images/auth/aej.png" alt="" class="img-fluid">
				<h1 class="text-white my-4">Bienvenue dans le logiciel de gestion des congés </h1>
				<h4 class="text-white font-weight-normal">Connectez-vous à votre compte .</h4>
			</div>
		</div>
		<div class="auth-side-form">
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class=" auth-content">
					<img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
					<h3 class="mb-4 f-w-400">S'identifier</h3>
					<div class="form-group mb-3">
						<label class="floating-label" for="Email">Adresse e-mail</label>
						<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="Email" value="{{ old('email') }}" placeholder="" required autocomplete="email" autofocus>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="form-group mb-4">
						<label class="floating-label" for="Password">Mot de passe</label>
						<input type="password" class="form-control @error('password') is-invalid @enderror" id="Password" name="password" required autocomplete="current-password">

						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<!-- <div class="custom-control custom-checkbox text-left mb-4 mt-2">
						<input type="checkbox" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label" for="customCheck1">Enregistrer les identifiants.</label>
					</div> -->
					<button class="btn btn-block btn-primary mb-4">  S'identifier </button>
					
					<!-- <div class="text-center">
						<p class="mb-0 text-muted">Vous n’avez pas de compte? <a href="auth-signup-img-side.html" class="f-w-400">S'inscrire</a></p>
					</div> -->
				</div>
		</div>
	</div>
</div>
@stop