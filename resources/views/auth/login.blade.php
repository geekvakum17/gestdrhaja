@extends('auth.layouts.main')
@section('content')


<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
           
		<div class="card">
			<div class="row align-items-center text-center">

				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/auth/aej.png" alt="" class="img-fluid mb-4">
						<h3>Bienvenu dans</h3>
						<h3>GESDRHAJA </h3><br>
						<h4 class="mb-3 f-w-400">Identifiez-vous</h4>
						<form method="POST" action="{{ route('session.login') }}">
							@csrf

							<div class="form-group mb-3">
								<label class="floating-label" for="Email">Adresse e-mail</label>
								<input type="text" class=" form-control @error('email') is-invalid @enderror" name="email" id="Email" value="{{ old('email') }}" placeholder="" required autocomplete="email" autofocus>
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" class="form-control @error('password') is-invalid @enderror" id="Password" name="password" required autocomplete="current-password">
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<button type="submit" class="btn btn-primary"> S'identifier </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
<!-- [ auth-signup ] end -->

