@extends('dashboard.layouts.app')

@section('content')
  <!-- ========== MAIN CONTENT ========== -->
    <!-- Content -->
{{-- {{ dd($errors) }} --}}
    <div class="container-fluid" style="margin: 0%;padding: 0">
        <div class="row">
            <div class="col-lg-7">
                @if(isset($setting->bg_id))
                <div class="background-img">
                    <img src="{{ tenant_asset($setting->background->name) }}" class="img-fluid" alt="background-image">
                </div>
                @else
                <div class="background-img">
                    <img src="{{ global_asset('img/static/background.jpg') }}" class="img-fluid" alt="background-image">
                </div>
                @endif
            </div>
          <!-- End Col -->

          <div class="col-lg-5 d-flex justify-content-center align-items-center min-vh-lg-100" style="padding: 10px; background: white">
            <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
              <!-- Form -->
                <div class="text-center">
                  <div class="mb-5">
                    <h1 class="display-5">Sign in to {{ tenant('company') }}</h1>
                  </div>
                </div>
                <form method="POST" action="{{ route('tenant.login') }}">
                @csrf
                <!-- Form -->
                <div class="mb-4">
                    <label class="form-label" for="signinSrEmail">{{ __('Email Address') }}</label>
                    <input id="email" type="email" placeholder="{{ __('Enter your email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label w-100" for="signupSrPassword" tabindex="0">
                    <span class="d-flex justify-content-between align-items-center">
                      <span>Password</span>
                      <a class="form-label-link mb-0" href="./authentication-reset-password-cover.html">Forgot Password?</a>
                    </span>
                  </label>

                  <div class="input-group input-group-merge" data-hs-validation-validate-class>
                    <input id="password" type="password" placeholder="{{ __('Enter your password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- End Form -->

                <!-- Form Check -->
                <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" value="" id="termsCheckbox">
                  <label class="form-check-label" for="termsCheckbox">
                    Remember me
                  </label>
                </div>
                <!-- End Form Check -->

                <div class="d-grid">
                  <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
                </div>
              </form>
              <!-- End Form -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->
  <!-- ========== END MAIN CONTENT ========== -->
@endsection
