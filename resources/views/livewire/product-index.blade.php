<div>
    <!-- Content -->

    <div class="content container-fluid">
     <!-- Page Header -->
     <div class="page-header">
       <div class="row align-items-center mb-3">
         <div class="col-sm mb-2 mb-sm-0">
           <h1 class="page-header-title">{{ __('Products') }} <span class="badge bg-soft-dark text-dark ms-2"> {{ $productsCount }} </span></h1>
         </div>
         <!-- End Col -->

         <div class="col-sm-auto">
           <a class="btn btn-primary" href="{{ route('tenant.Product.create') }}">{{ __('Add product') }}</a>
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
               <input id="datatableSearch" wire:model="search" type="search" class="form-control" placeholder="{{ __('Search products') }}" aria-label="Search users">
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
               <th>{{ __('Product') }}</th>
               <th>{{ __('Product name') }}</th>
               <th>{{ __('Availability') }}</th>
               <th>{{ __('Available quantity') }}</th>
               <th>{{ __('Price') }}</th>
               <th>{{ __('Quantity') }}</th>
               <th>{{ __('Options') }}</th>
               <th></th>
               <th></th>
             </tr>
           </thead>

           <tbody>
            {{-- Start column --}}
            @foreach ($products as $product )

             <tr>
               <td class="table-column-pe-0">
                 <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll1">
                   <label class="form-check-label" for="datatableCheckAll1"></label>
                 </div>
               </td>
               <td class="table-column-ps-0">
                 <a class="d-flex align-items-center" href="#">
                   <div class="flex-shrink-0">
                     <img class="avatar avatar-lg" src="{{ find_image($product->image ,  App\Models\Product::base ) }}" alt="Image Description">
                   </div>
                 </a>
               </td>
               <td class="table-column-ps-0">
                <a class="d-flex align-items-center" href="#">
                    <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0"> {{ LangDetail($product->name, $product->name_ar) }}</h5>
                    </div>
                </a>
              </td>
               <td>
                 <div class="form-check form-switch">
                   <input wire:click="changeActive({{ $product->id }})" class="form-check-input" type="checkbox" id="stocksCheckbox1" {{ ($product->active == 1) ? 'checked' : '' }} >
                   <label class="form-check-label" for="stocksCheckbox1"></label>
                 </div>
               </td>
               <td> {{ $product->availabe_qty }}</td>
               <td> {{ $product->price }} {{ __('KWD') }}</td>
               <td>{{  $product->qty }}</td>
               <td>
                 <div class="btn-group" role="group">
                   <a class="btn btn-white btn-sm" href="{{ route('tenant.Product.edit',['Product'=>$product->id]) }}">
                     <i class="bi-pencil-fill me-1"></i> {{ __('Edit') }}
                   </a>

                   <!-- Button Group -->
                   <div class="btn-group">
                     <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="productsEditDropdown1" data-bs-toggle="dropdown" aria-expanded="false"></button>
                     <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown1">
                       <a class="dropdown-item" href="#">
                         <i class="bi-trash dropdown-item-icon"></i> {{ __('Delete') }}
                       </a>
                     </div>
                   </div>
                   <!-- End Button Group -->
                 </div>
               </td>
             </tr>

             @endforeach
           </tbody>
         </table>
         {{ $products->links() }}
       </div>
       <!-- End Table -->
       <!-- End Footer -->
     </div>
     <!-- End Card -->
   </div>
   <!-- End Content -->
</div>
