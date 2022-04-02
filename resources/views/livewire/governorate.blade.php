<div>
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
         <div x-data="{ open: true }" class="col-sm-auto">
           <a  @click="open = true" class="btn btn-primary" href="#">{{ __('Add Governorate') }}</a>
            <div x-show=open>
                <div class="my-wrapper"
                 style="
                    z-index: 99;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    left: 0;
                    position: fixed;
                    background-color: rgba(50, 50, 50, 0.9);
                 " ></div>
                <div
                style="
                    z-index: 999;
                    position: absolute;
                    background-color: #f5f5f5;
                    border: 1px solid #212121;
                    border-radius: 2px;
                    padding: 30px;
                    border-radius: 10px;
                    width: 400px;
                    left: 50%;
                    top: 10%;
                    margin-left: -150px;
                  ">
                    <div class="row">
                        <div class="col-md-9">
                            <h3>@lang('Add Governorate')</h3>
                        </div>
                        <div class="col-md-3">
                            <i class="bi bi-x-circle nav-icon" style="color:red;cursor: pointer; font-size: 17px"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label  for="domain" class="col-md-4 col-form-label text-md-end">{{ __('Domain Name') }}</label>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
         </div>
         <!-- End Col -->
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
                   <a class="btn btn-white btn-sm" href="{{ route('tenant.Product.edit',['Product'=>$governorate->id]) }}">
                     <i class="bi-pencil-fill me-1"></i> {{ __('Edit') }}
                   </a>

                   <div class="btn-group">
                     <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"  data-bs-toggle="dropdown" aria-expanded="false"></button>
                     <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown1">
                       <button wire:click="deleteProduct({{ $governorate->id }})" class="dropdown-item">
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
