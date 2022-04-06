<div>
    <!-- Content -->
    <div class="content container-fluid">
     <!-- Page Header -->
     <div class="page-header">
       <div class="row align-items-center mb-3">
         <div class="col-sm mb-2 mb-sm-0">
           <h1 class="page-header-title">{{ __('Orders') }} <span class="badge bg-soft-dark text-dark ms-2"> {{ $ordersCount }} </span></h1>
         </div>
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
               <input id="datatableSearch" wire:model="search" type="search" class="form-control" placeholder="{{ __('Search orders') }}" aria-label="Search users">
             </div>
             <!-- End Search -->
           </form>
         </div>

       </div>
       <!-- End Header -->
       <div class="px-4 py-1">
           @if (session()->has('delivered'))
                <div class="alert alert-success">
                    {{ session('delivered') }}
                </div>
            @endif
       </div>
       <div class="px-4 py-1">
            @if (session()->has('OnTheWay'))
                <div class="alert alert-info">
                    {{ session('OnTheWay') }}
                </div>
            @endif
        </div>
        <div class="px-4 py-1">
            @if (session()->has('canceled'))
                 <div class="alert alert-danger">
                     {{ session('canceled') }}
                 </div>
             @endif
        </div>
        <div class="px-4 py-1">
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
               <th>{{ __('Customer name') }}</th>
               <th>{{ __('Phone') }}</th>
               <th>{{ __('Way') }}</th>
               <th>{{ __('Total') }}</th>
               <th>{{ __('Status') }}</th>
               <th>{{ __('Options') }}</th>
             </tr>
           </thead>

           <tbody>
            {{-- Start column --}}
            @foreach ($orders as $order )

             <tr>
                <td class="table-column-pe-0">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll1">
                    <label class="form-check-label" for="datatableCheckAll1"></label>
                    </div>
                </td>
                <td class="table-column-ps-0">
                    <div class="flex-shrink-0">
                        <h5 class="text-inherit mb-0"> {{ $order->name }}</h5>
                    </div>
                </td>
                <td class="table-column-ps-0">
                    <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0"> {{ $order->phone }}</h5>
                    </div>
                </td>
                <td class="table-column-ps-0">
                    <div class="flex-grow-1 ms-3">
                        @if ($order->pickup)
                            <i class="fas fa-car"></i>
                            <h5 class="text-inherit mb-0"></h5>
                        @else
                            <i class="bi bi-truck"></i>
                            <h5 class="text-inherit mb-0"></h5>
                        @endif
                    </div>
                </td>
                <td class="table-column-ps-0">
                    <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0"> {{ $order->total }} @lang('KWD')</h5>
                    </div>
                </td>
                <td class="table-column-ps-0">
                    <div class="flex-grow-1 ms-3">
                        @if ($order->status == App\Models\Order::Pending)
                            <button class="btn btn-primary btn-sm pe-none">
                                <i class="fa-solid fa-bars-progress"></i>
                                {{ App\Models\Order::StatusType()[App\Models\Order::Pending] }}
                            </button>
                        @elseif($order->status == App\Models\Order::OnWay)
                            <button class="btn btn-info btn-sm pe-none">
                                <i class="fa-solid fa-motorcycle"></i>
                                {{ App\Models\Order::StatusType()[App\Models\Order::OnWay] }}
                            </button>
                        @elseif($order->status == App\Models\Order::Delivered)
                            <button class="btn btn-success btn-sm pe-none">
                                <i class="bi bi-check"></i>
                                {{ App\Models\Order::StatusType()[App\Models\Order::Delivered] }}
                            </button>
                        @else
                            <button class="btn btn-danger btn-sm pe-none">
                                <i class="bi bi-x-circle-fill"></i>
                                {{ App\Models\Order::StatusType()[App\Models\Order::Canceled] }}
                            </button>
                        @endif
                    </div>
                </td>
               <td>
                 <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="{{ route('tenant.order.show',['id'=>$order->id]) }}">
                     <i class="bi-pencil-fill me-1"></i> {{ __('Show') }}
                   </a>
                   <div class="btn-group">
                        <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"  data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown1">
                            @if ($order->status == App\Models\Order::Pending)
                                @if (!$order->pickup)
                                <button wire:click="toOnTheWay({{ $order->id }})" class="d-block w-100 my-1 text-white btn btn-info btn-xs">
                                    <i class="fa-solid fa-motorcycle mx-2"></i>
                                    {{ App\Models\Order::StatusType()[App\Models\Order::OnWay] }}
                                </button>
                                @endif
                                <button wire:click="toDelivered({{ $order->id }})" class="d-block w-100 my-1 text-white btn btn-success btn-xs">
                                    <i class="bi-check mx-2"></i>
                                    {{ App\Models\Order::StatusType()[App\Models\Order::Delivered] }}
                                </button>
                            @elseif($order->status == App\Models\Order::OnWay)
                                <button wire:click="toDelivered({{ $order->id }})" class="d-block w-100 my-1 text-white btn btn-success btn-xs">
                                    <i class="bi-check mx-2"></i>
                                    {{ App\Models\Order::StatusType()[App\Models\Order::Delivered] }}
                                </button>
                            @endif
                            @if(!($order->status == App\Models\Order::Canceled))
                                <button wire:click="toCanceled({{ $order->id }})" class="d-block w-100 my-1 text-white btn btn-danger btn-xs">
                                    <i class="bi bi-x-circle-fill"></i>
                                    {{ App\Models\Order::StatusType()[App\Models\Order::Canceled] }}
                                </button>
                            @endif
                                <button wire:click="toDelete({{ $order->id }})" class="dropdown-item">
                                    <i class="bi-trash mx-2"></i> <span class="text-danger">{{ __('Delete') }}</span>
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
         {{ $orders->links() }}
       </div>
       <!-- End Table -->
       <!-- End Footer -->
     </div>
     <!-- End Card -->
   </div>
   <!-- End Content -->
</div>
