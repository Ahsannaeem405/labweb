@extends('user.layouts.default')
@section('content')

  <div class="content">
    <div class="container">
	<div class="row justify-content-center">
          <img src="https://apps.familyrehab.us/img/logo_white_320x146.png" alt="Image" class="img-fluid" style="width:20%; margin-bottom:1rem;">
        </div>
      <div class="row justify-content-center">
        
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
				<div>
				
				</div>
              <div class="form-block" style="    box-shadow: 0 3px 10px rgb(0 0 0 / 20%);  border-radius: 25px;">
                  <div class="mb-4">
                  <h3>Sign In</h3>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                  <div class="form-group first" style="margin-bottom: 22px;">
                    <label for="username">Email</label>
                    {{-- <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email"> --}}

                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                  </div>
                  <div class="form-group last mb-4" style="margin-bottom: 22px;">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="d-flex mb-5 align-items-center">
                    <input class="form-check-input"  checked="checked" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember" style="    position: relative;top: 0.2rem;color: #888;">
                        {{ __('Remember Me') }}
                    </label>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link ml-auto forgot-pass" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                    {{-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> --}}
                  </div>

                  <button type="submit" class="btn btn-pill text-white btn-block btn-primary" style="background-color:#ea7c3a; border-color:#ea7c3a;">
                    {{ __('Login') }}
                </button>


                  {{-- <span class="d-block text-center my-4 text-muted"> or sign in with</span>

                  <div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span>
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span>
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span>
                    </a>
                  </div> --}}
                </form>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
@endsection
