<div>
    @section('css')
    <link rel="stylesheet" href="{{ global_asset('css/dashboard/setting.css') }}">
    @endsection
    <form wire:submit.prevent="save">
        <div class="d-grid gap-3 gap-lg-5">
          <!-- Card -->
          <div class="card">
            <!-- Profile Cover -->
            <div class="profile-cover">
              <div class="profile-cover-img-wrapper">
                @if ($Setting->bg_id)
                    @if ($bg)
                        <img id="profileCoverImg" class="profile-cover-img" src="{{ $bg->temporaryUrl() }}" alt="Uploaded image">
                    @else
                        <img id="profileCoverImg" class="profile-cover-img" src="{{ tenant_asset($Setting->background->name) }}" alt="Image Description">
                    @endif
                @elseif($bg)
                    <img id="profileCoverImg" class="profile-cover-img" src="{{ $bg->temporaryUrl() }}" alt="Uploaded image">
                @endif
                <!-- Custom File Cover -->
                <div class="profile-cover-content profile-cover-uploader p-3">
                  <input type="file" wire:model="bg" class="js-file-attach profile-cover-uploader-input" id="profileCoverUplaoder">
                  <label class="profile-cover-uploader-label btn btn-sm btn-white" for="profileCoverUplaoder">
                    <i class="bi-camera-fill"></i>
                    <span class="d-none d-sm-inline-block ms-1">Upload header</span>
                  </label>
                </div>

                <!-- End Custom File Cover -->
              </div>
            </div>
            <!-- End Profile Cover -->
            <!-- Avatar -->
            <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="editAvatarUploaderModal">
                @if ($Setting->logo_id)
                    @if ($logo)
                    <img id="editAvatarImgModal" class="avatar-img" src="{{ $logo->temporaryUrl() }}" alt="Image Description">
                    @else
                    <img id="editAvatarImgModal" class="avatar-img" src="{{ tenant_asset($Setting->logo->name) }}" alt="Image Description">
                    @endif
                @elseif($logo)
                    <img id="editAvatarImgModal" class="avatar-img" src="{{ $logo->temporaryUrl() }}" alt="Image Description">
                @endif
              <input type="file" wire:model="logo" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal" data-hs-file-attach-options='{
                          "textTarget": "#editAvatarImgModal",
                          "mode": "image",
                          "targetAttr": "src",
                          "allowTypes": [".png", ".jpeg", ".jpg"]
                       }'>

              <span class="avatar-uploader-trigger">
                <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
              </span>
            </label>
            <!-- End Avatar -->
            @error('bg') <span class="error">{{ $message }}</span> @enderror
            @error('logo') <span class="error">{{ $message }}</span> @enderror
          </div>
          {{-- Update message --}}
          <div>
            @if (session()->has('update'))
                <div class="alert alert-success">
                    {{ session('update') }}
                </div>
            @endif
        </div>
          <!-- Card -->
          <div class="card">
            <div class="card-header">
              <h2 class="card-title h4">@lang('website settings')</h2>
            </div>

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
                <!-- Form -->
                <div class="row mb-4">
                  <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">@lang('Company name') <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="__('Displayed on public ')"></i></label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" wire:model="Setting.company_name" class="form-control"  id="companyName" placeholder="@lang('Your company name')" aria-label="@lang('Your company name')" >
                    </div>
                    @error('Setting.company_name') <span class="error">{{ $message }}</span> @enderror
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="emailLabel" class="col-sm-3 col-form-label form-label"> @lang('Website description(EN)') </label>
                  <div class="col-sm-9">
                    <textarea class="js-input-mask form-control" wire:model.defer="Setting.desc" placeholder="@lang('Type your description in english')" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('Setting.desc') <span class="error">{{ $message }}</span> @enderror
                </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="phoneLabel" class="col-sm-3 col-form-label form-label">@lang('Website description(AR)')</label>

                  <div class="col-sm-9">
                    <textarea class="js-input-mask form-control" wire:model.defer="Setting.desc_ar" placeholder="@lang('Type your description in english')" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('Setting.desc_ar') <span class="error">{{ $message }}</span> @enderror
                  </div>
                </div>
                <!-- End Form -->

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">@lang('Save changes')</button>
                </div>
              <!-- End Form -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
    </form>
</div>
