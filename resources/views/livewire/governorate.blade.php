
<div>
    <style>
        .my-wrapper {
            z-index: 99;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: fixed;
            background-color: rgba(50, 50, 50, 0.9);
        }
        .form-popup{
            z-index: 999;
            position: fixed;
            background-color: #f5f5f5;
            border: 1px solid #212121;
            border-radius: 2px;
            padding: 30px;
            border-radius: 10px;
            width: 700px;
            left: 50%;
            transform: translate(-50%, 0);
            top: 10%;
        }
        .popup-label{
            width: 100%;
            text-align: left !important;
        }
        .padding-top{
            padding-top: 5px;
        }
        .x-icon{
            color:red;
            cursor: pointer;
            font-size: 22px
        }
        .lvError{
            color: red;
            margin-top: 5px;
        }
        /* Model showing fix */
        [x-cloak] { display: none }
    </style>
    <!-- Content -->
    <div class="content container-fluid" style="position: relative">
     <!-- Page Header -->
     <div class="page-header">
       <div class="row align-items-center mb-3">
         <div class="col-sm mb-2 mb-sm-0">
           <h1 class="page-header-title">{{ __('Governorates') }} <span class="badge bg-soft-dark text-dark ms-2"> {{ $governorateCount }} </span></h1>
         </div>
         <!-- End Col -->

         {{-- Start add Modal  --}}
         <div x-cloak x-data="{ open: $wire.isOpen }"   class="col-sm-auto">
           <a  @click=" open = true " class="btn btn-primary" href="#">{{ __('Add Governorate') }}</a>
            <div x-show=open>
                <div class="my-wrapper" ></div>
                <div class="form-popup" @keyup.escape.window="open=false" @click.outside="open = false">
                    <div class="row">
                        <div class="col-md-11">
                            <h3>@lang('Add Governorate')</h3>
                        </div>
                            <div class="col-md-1">
                                <a style="color: red; font-size: 20px;cursor: pointer;" @click="open = false">
                                    <i class="bi bi-x-circle nav-icon"></i>
                                </a>
                            </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('Governorate in english') }}</label>
                            <input placeholder="{{ __('Governorate in english') }}"
                            type="text" class="form-control mr-2 ml-2 @error('governorate') is-invalid @enderror" wire:model="gover" value="{{ old('governorate') }}" required autocomplete="domain" autofocus>
                            @error('gover') <div class="lvError">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('Governorate in arabic') }}</label>
                            <input wire:model="gover_ar" placeholder="{{ __('Governorate in arabic') }}"
                            type="text" class="form-control mr-2 ml-2 @error('governorate_ar') is-invalid @enderror"  value="{{ old('governorate_ar') }}" required autocomplete="domain" autofocus>
                            @error('gover_ar') <div class="lvError">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    {{-- Save button --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-grid gap-2 pt-4">
                                <button wire:click="add()" x-on:company-added.window="open = false"
                                 type="submit" class="btn btn-primary btn-lg"> @lang('Save') </button>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
         </div>
         <!-- Start add Moda -->
       </div>
       <!-- End Row -->
     </div>



     <!-- End Page Header -->
     <!-- Card -->
     <div class="card">
       <!-- Header -->
       <div class="card-header card-header-content-md-between">
         <div class="mb-2 mb-md-0">
           <form>
             <!-- Search -->
             <div class="input-group input-group-merge input-group-flush">
               <div class="input-group-prepend input-group-text">
                 <i class="bi-search"></i>
               </div>
               <input id="datatableSearch" wire:model="search" type="search" class="form-control" placeholder="{{ __('Search Governorate') }}" aria-label="Search users">
             </div>
             <!-- End Search -->
           </form>
         </div>
       </div>
       <!-- End Header -->
       @if (session()->has('delete'))
        <div class="alert alert-danger">
            {{ session('delete') }}
            </div>
         @endif
        <div>
        @if (session()->has('add'))
            <div class="alert alert-success">
                {{ session('add') }}
            </div>
        @endif
        </div>
        <div>
        @if (session()->has('update'))
            <div class="alert alert-success">
                {{ session('update') }}
            </div>
        @endif
        </div>
       <!-- Table -->
       <div class="table-responsive datatable-custom" style="position: relative">
         <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
           <thead class="thead-light">
             <tr>
               <th scope="col" class="table-column-pe-0">
                 <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                   <label class="form-check-label">
                   </label>
                 </div>
               </th>
               <th>{{ __('Name') }}</th>
               <th>{{ __('Name arabic') }}</th>
               <th>{{ __('Options') }}</th>
             </tr>
           </thead>

           <tbody>
            {{-- Start column --}}
            @foreach ($governorates as $governorate )

             <tr>
               <td class="table-column-pe-0">
                 <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll1">
                   <label class="form-check-label" for="datatableCheckAll1"></label>
                 </div>
               </td>

               <td class="table-column-ps-0">
                <a class="d-flex align-items-center" href="#">
                    <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0"> {{ $governorate->name }}</h5>
                    </div>
                </a>
              </td>
              <td class="table-column-ps-0">
                <a class="d-flex align-items-center" href="#">
                    <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0"> {{ $governorate->name_ar }}</h5>
                    </div>
                </a>
              </td>
              <td>
                 <div class="btn-group" role="group">
                {{-- Start edit Modal  --}}
                    <div x-cloak x-data="{ open: $wire.isOpen }"   class="col-sm-auto">
                        <a wire:click="passEditData({{ $governorate->id }})"  @click=" open = true " class="btn btn-white btn-sm" href="#">{{ __('Edit') }}</a>
                        <div x-show=open>
                            <div class="my-wrapper" ></div>
                            <div class="form-popup" @keyup.escape.window="open=false" @click.outside="open = false">
                                <div class="row">
                                    <div class="col-md-11">
                                        <h3>@lang('Edit Governorate')</h3>
                                    </div>
                                        <div class="col-md-1">
                                            <a @click="open = false">
                                                <i class="bi bi-x-circle nav-icon x-icon"></i>
                                            </a>
                                        </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('Governorate in english') }}</label>
                                        <input placeholder="{{ __('Governorate in english') }}"
                                        type="text" class="form-control mr-2 ml-2 @error('governorate') is-invalid @enderror" wire:model="editGoverName" required autocomplete="domain" autofocus>
                                        @error('editGoverName') <div class="lvError">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('Governorate in arabic') }}</label>
                                        <input  placeholder="{{ __('Governorate in arabic') }}" wire:model="editGoverName_ar"
                                        type="text" class="form-control mr-2 ml-2 @error('governorate_ar') is-invalid @enderror"   required autocomplete="domain" autofocus>
                                        @error('editGoverName_ar') <div class="lvError">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                {{-- Save button --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-grid gap-2 pt-4">
                                            <button wire:click="update({{ $governorate->id }})" x-on:company-edit.window="open = false"
                                            type="submit" class="btn btn-primary btn-lg"> @lang('Update') </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end edit Modal -->
                   <div class="btn-group">
                     <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"  data-bs-toggle="dropdown" aria-expanded="false"></button>
                     <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown1">
                       <button wire:click="delete({{ $governorate->id }})" class="dropdown-item">
                         <i class="bi-trash dropdown-item-icon"></i> {{ __('Delete') }}
                       </button>
                     </div>
                   </div>

                 </div>
               </td>
             </tr>

             @endforeach
           </tbody>
         </table>
         {{ $governorates->links() }}
       </div>
       <!-- End Table -->
       <!-- End Footer -->
     </div>
     <!-- End Card -->
   </div>
   <!-- End Content -->
</div>
