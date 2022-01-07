@extends('user.layouts.default')
@section('content')


  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block" style="    box-shadow: 0 3px 10px rgb(0 0 0 / 20%);    border-radius: 25px;">
                  <div class="mb-4">
                  <h3>Reset Password</h3>

                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif

                </div>



                <form method="POST" action="{{ route('password.email') }}" style="    margin: auto;text-align: center;">
                    @csrf



                  <div class="form-group last mb-4" style="margin-bottom: 22px;">
                    <label for="email" class=" col-form-label ">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>


                  <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>

                </form>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  @endsection
