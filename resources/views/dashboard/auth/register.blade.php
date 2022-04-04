@extends('layouts.app')

@section('content')

{{-- {{ dd($errors) }} --}}
<div class="container-fluid px-3 sezo">
    <div class="row">
      <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
        <!-- Logo & Language -->
        <div class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
          <div class="d-none d-lg-flex justify-content-between">
            <!-- Select -->
            <div class="tom-select-custom tom-select-custom-end tom-select-custom-bg-transparent">
              <select class="js-select form-select form-select-sm form-select-borderless" data-hs-tom-select-options='{
                        "searchInDropdown": false,
                        "hideSearch": true,
                        "dropdownWidth": "12rem",
                        "placeholder": "Select language"
                      }'>
                <option label="empty"></option>
                <option value="language1" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>English (US)</span></span>'>English (US)</option>
                <option value="language2" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16"/><span>English (UK)</span></span>'>English (UK)</option>
                <option value="language3" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/><span>Deutsch</span></span>'>Deutsch</option>
                <option value="language4" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16"/><span>Dansk</span></span>'>Dansk</option>
                <option value="language5" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/><span>Español</span></span>'>Español</option>
                <option value="language6" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description" width="16"/><span>Nederlands</span></span>'>Nederlands</option>
                <option value="language7" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16"/><span>Italiano</span></span>'>Italiano</option>
                <option value="language8" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/><span>中文 (繁體)</span></span>'>中文 (繁體)</option>
              </select>
            </div>
            <!-- End Select -->
          </div>
        </div>
        <!-- End Logo & Language -->

        <div style="max-width: 23rem;">
          <div class="text-center mb-5">
            <img class="img-fluid" src="{{ asset('images/dashboard/svg/illustrations-light/oc-chatting.svg') }}" alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="dark">
          </div>

          <div class="mb-5">
            <h2 class="display-5">Build digital products with:</h2>
          </div>

          <!-- List Checked -->
          <ul class="list-checked list-checked-lg list-checked-primary list-py-2">
            <li class="list-checked-item">
              <span class="d-block fw-semi-bold mb-1">All-in-one tool</span>
              Build, run, and scale your apps - end to end
            </li>

            <li class="list-checked-item">
              <span class="d-block fw-semi-bold mb-1">Easily add &amp; manage your services</span>
              It brings together your tasks, projects, timelines, files and more
            </li>
          </ul>
          <!-- End List Checked -->

          <div class="row justify-content-between mt-5 gx-3">
            <div class="col">
              <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col">
              <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col">
              <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col">
              <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Logo">
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </div>
      <!-- End Col -->

      <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
        <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
          <!-- Form -->
          <form method="POST" action="{{ route('tenant.register') }}" class="js-validate needs-validation" >
            @csrf
            <div class="text-center">
              <div class="mb-5">
                <h1 class="display-5">Create your account</h1>
              </div>
            </div>
            {{-- Start Form --}}
                <div class="row mb-3">
                    <label style="text-align: left !important" for="company" class="col-md-4 col-form-label text-md-end">{{ __('Company Name') }}</label>
                    <div class="col-md-8">
                        <input placeholder="{{ __('Company Name') }}" id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required autocomplete="company" autofocus>
                        @error('company')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3" style="position: relative">
                    <label style="text-align: left !important" for="domain" class="col-md-4 col-form-label text-md-end">{{ __('Domain Name') }}</label>
                    <div class="col-md-8 slug-parent">
                        <input placeholder="{{ __('Domain Name') }}" id="domain"
                         type="text" class="form-control mr-2 ml-2 @error('domain') is-invalid @enderror" name="domain" value="{{ old('domain') }}" required autocomplete="domain" autofocus>
                        @error('domain')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    <div class="domain-slug"
                     style="
                     position: absolute;
                     top:1px;
                     right:13px;
                     background: #dbdbdb;
                     padding: 6px;
                     "
                     >
                     .{{ config('tenancy.central_domains')[0] }}</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label style="text-align: left !important" for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-8">
                        <input placeholder="{{ __('Name') }}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label style="text-align: left !important" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-8">
                        <input placeholder="{{ __('Email Address') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label style="text-align: left !important" for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <div class="col-md-8">
                        <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label style="text-align: left !important" for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                    <div class="col-md-8">
                        <input placeholder="{{ __('Confirm Password') }}" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            <!-- Form Check -->
            <div class="form-check mb-4">
              <input class="form-check-input" name="terms" type="checkbox" value="true" id="termsCheckbox" required>
              <label class="form-check-label" for="termsCheckbox">
                I accept the <a href="#">Terms and Conditions</a>
              </label>
              @error('terms')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <!-- End Form Check -->

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary btn-lg">Create an account</button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
@endsection
