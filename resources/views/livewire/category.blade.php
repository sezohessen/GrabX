<div>
    <!-- Content -->
    <div class="content container-fluid">
     <!-- Page Header -->
     <div class="page-header">
       <div class="row align-items-center mb-3">
         <div class="col-sm mb-2 mb-sm-0">
           <h1 class="page-header-title">{{ __('Categories') }} <span class="badge bg-soft-dark text-dark ms-2"> {{ $count }} </span></h1>
         </div>
         <!-- End Col -->

         <div class="col-sm-auto">
           <a class="btn btn-primary" href="{{ route('tenant.Category.create') }}">{{ __('Add category') }}</a>
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
               <input id="datatableSearch" wire:model="search" type="search" class="form-control" placeholder="{{ __('Search category') }}" aria-label="@lang('Search')">
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
               <th>{{ __('Name(ENG)') }}</th>
               <th>{{ __('Name(AR)') }}</th>
               <th>{{ __('Options') }}</th>
               <th></th>
               <th></th>
             </tr>
           </thead>

           <tbody>
            {{-- Start column --}}
            @foreach ($categories as $category )

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
                            <h5 class="text-inherit mb-0"> {{ $category->name }}</h5>
                        </div>
                    </a>
                </td>
                <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="#">
                        <div class="flex-grow-1 ms-3">
                            <h5 class="text-inherit mb-0"> {{ $category->name_ar }}</h5>
                        </div>
                    </a>
                </td>
               <td>
                 <div class="btn-group" role="group">
                   <a class="btn btn-white btn-sm" href="{{ route('tenant.Category.edit',['Category'=>$category->id]) }}">
                     <i class="bi-pencil-fill me-1"></i> {{ __('Edit') }}
                   </a>
                   <div class="btn-group">
                     <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"  data-bs-toggle="dropdown" aria-expanded="false"></button>
                     <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown1">
                       <button wire:click="Delete({{ $category->id }})" class="dropdown-item">
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
         {{ $categories->links() }}
       </div>
       <!-- End Table -->
       <!-- End Footer -->
     </div>
     <!-- End Card -->
   </div>
   <!-- End Content -->
</div>
