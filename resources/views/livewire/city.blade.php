<div>
    {{-- style --}}
    <style>
        .fade:not(.show) {
            opacity: 1;
        }
        .modal-dialog{
            margin-top: 120px;
        }

        .lvError{
            color: red;
            margin-top: 5px;
        }
    </style>
    <!-- Content -->
    <div class="content container-fluid">
     <!-- Page Header -->
     <div class="page-header">
       <div class="row align-items-center mb-3">
         <div class="col-sm mb-2 mb-sm-0">
           <h1 class="page-header-title">{{ __('Cities') }} <span class="badge bg-soft-dark text-dark ms-2"> {{ $count }} </span></h1>
         </div>
         <!-- End Col -->
         <div class="col-sm-auto">
           <a class="btn btn-primary" data-toggle="modal" data-target="#modalForm" href="#">{{ __('Add city') }}</a>
         </div>
           <!-- Add Modal -->
        <div wire:ignore.self class="modal fade" id="modalForm" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
            <div class="modal-dialog"   role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <div class="col-md-10">
                                <h5 class="modal-title" id="exampleModalLabel"> @lang('Add city') </h5>
                            </div>
                            <div class="col-md-1">
                                <a style="color: red; font-size: 20px;cursor: pointer;" data-dismiss="modal" aria-label="Close">
                                    <i class="bi bi-x-circle nav-icon"></i>
                                </a>
                            </div>
                    </div>
                    <div class="container modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label style="width: 100%"  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('Governorate') }}</label>
                        </div>
                        <div class="col-md-6">
                        <!-- Select box-->
                            <select  wire:model="addGover" id="select-beast" data-live-search="true"  aria-label="Default select example" placeholder="{{ __('Select category') }}" required>
                                @foreach ($governorates as $governorate )
                                    <option value="{{ $governorate->id }}"> {{ LangDetail($governorate->name, $governorate->name_ar) }} </option>
                                @endforeach
                            </select>
                             @error('addGover') <div class="lvError">{{ $message }}</div> @enderror
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <label style="width: 100%"  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('City(EN)') }}</label>
                        </div>
                        <div class="col-md-6">
                            <input placeholder="{{ __('City(EN)') }}"
                            type="text" class="form-control mr-2 ml-2 @error('governorate') is-invalid @enderror" wire:model="addCity" required ="domain" autofocus>
                            @error('addCity') <div class="lvError">{{ $message }}</div> @enderror
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <label style="width: 100%"  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('City(AR)') }}</label>
                        </div>
                        <div class="col-md-6">
                            <input wire:model="addCity_ar" placeholder="{{ __('City(AR)') }}"
                            type="text" class="form-control mr-2 ml-2 @error('governorate_ar') is-invalid @enderror"  required ="domain" autofocus>
                            @error('addCity_ar') <div class="lvError">{{ $message }}</div> @enderror
                        </div>

                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                    <button wire:click="add()"  type="button" class="btn btn-primary">@lang('Add city')</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Add modal --}}
                <!-- Add Modal -->
            <div wire:ignore.self class="modal fade" id="updateModel" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
            <div class="modal-dialog"   role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <div class="col-md-10">
                                <h5 class="modal-title" id="exampleModalLabel"> @lang('Edit city') </h5>
                            </div>
                            <div class="col-md-1">
                                <a style="color: red; font-size: 20px;cursor: pointer;" data-dismiss="modal" aria-label="Close">
                                    <i class="bi bi-x-circle nav-icon"></i>
                                </a>
                            </div>
                    </div>
                    <div class="container modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label style="width: 100%"  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('Governorate') }}</label>
                        </div>
                        <div class="col-md-6">
                        <!-- Select box-->
                            <select  wire:model="editGover" id="select-beast" data-live-search="true"  aria-label="Default select example" placeholder="{{ __('Select category') }}" required>
                                @foreach ($governorates as $governorate )
                                    <option value="{{ $governorate->id }}"> {{ LangDetail($governorate->name, $governorate->name_ar) }} </option>
                                @endforeach
                            </select>
                                @error('addGover') <div class="lvError">{{ $message }}</div> @enderror
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <label style="width: 100%"  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('City(EN)') }}</label>
                        </div>
                        <div class="col-md-6">
                            <input placeholder="{{ __('City(EN)') }}"
                            type="text" class="form-control mr-2 ml-2 @error('governorate') is-invalid @enderror" wire:model="editCity" required ="domain" autofocus>
                            @error('addCity') <div class="lvError">{{ $message }}</div> @enderror
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <label style="width: 100%"  for="Governorate" class="col-md-4 col-form-label text-md-end popup-label">{{ __('City(AR)') }}</label>
                        </div>
                        <div class="col-md-6">
                            <input wire:model="editCity_ar" placeholder="{{ __('City(AR)') }}"
                            type="text" class="form-control mr-2 ml-2 @error('governorate_ar') is-invalid @enderror"  required ="domain" autofocus>
                            @error('addCity_ar') <div class="lvError">{{ $message }}</div> @enderror
                        </div>

                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                    <button wire:click="update({{ $cityId }})"  type="button" class="btn btn-primary">@lang('Edit city')</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Add modal --}}
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
               <input id="datatableSearch" wire:model="search" type="search" class="form-control" placeholder="{{ __('Search category') }}" aria-label="@lang('Search')">
             </div>
             <!-- End Search -->
           </form>
         </div>
       </div>
       <!-- End Header -->
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
            <div>
                @if (session()->has('delete'))
                    <div class="alert alert-danger">
                        {{ session('delete') }}
                    </div>
                @endif
            </div>
       <!-- Table -->
       <div class="table-responsive datatable-custom">
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
               <th>{{ __('Name(ENG)') }}</th>
               <th>{{ __('Name(AR)') }}</th>
               <th>{{ __('Governorate') }}</th>
               <th>{{ __('Options') }}</th>
               <th></th>
               <th></th>
             </tr>
           </thead>

           <tbody>
            {{-- Start column --}}
            @foreach ($cities as $city )

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
                            <h5 class="text-inherit mb-0"> {{ $city->name }}</h5>
                        </div>
                    </a>
                </td>
                <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="#">
                        <div class="flex-grow-1 ms-3">
                            <h5 class="text-inherit mb-0"> {{ $city->name_ar }}</h5>
                        </div>
                    </a>
                </td>
                <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="#">
                        <div class="flex-grow-1 ms-3">
                            <h5 class="text-inherit mb-0"> {{ langDetail($city->governorate->name,$city->governorate->name_ar) }}</h5>
                        </div>
                    </a>
                </td>
               <td>
                 <div class="btn-group" role="group">
                   <a data-target="#updateModel" wire:click="edit({{ $city->id }})" data-toggle="modal" href="#" class="btn btn-white btn-sm">
                     <i class="bi-pencil-fill me-1"></i> {{ __('Edit') }}
                   </a>
                   <div class="btn-group">
                     <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"  data-bs-toggle="dropdown" aria-expanded="false"></button>
                     <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown1">
                       <button wire:click="delete({{ $city->id }})" class="dropdown-item">
                         <i class="bi-trash dropdown-item-icon"></i> {{ __('Delete') }}
                       </button>
                     </div>
                   </div>
                {{-- </form> --}}
                   <!-- End Delete Group -->
                 </div>
               </td>
             </tr>

             @endforeach
           </tbody>
         </table>
         {{ $cities->links() }}
       </div>
       <!-- End Table -->
       <!-- End Footer -->
     </div>
     <!-- End Card -->
   </div>
   @section('js')
    <script>
         window.livewire.on('userStore', () => {
            $('#modalForm').modal('hide');
        });
    </script>
   @endsection
   <!-- End Content -->
</div>
