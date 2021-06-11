
@extends('auth.layouts.main')
@section('content')

              <div class="brand-logo">
                <img src="{{asset('assets/images/aej.png')}}" alt="logo">
              </div>
              <h3>GESDRHAJA</h3>
              <h4 class="font-weight-light">Identifiez-vous</h4>
              <form class="pt-3" method="POST" action="{{ route('session.login') }} ">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" @error('email') is-invalid @enderror" name="email" id="Email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Adresse e-mail">
                              @error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" @error('password') is-invalid @enderror" id="Password" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn"> S'identifier </button>
                </div>

              </form>


  <!-- container-scroller -->
  @stop
