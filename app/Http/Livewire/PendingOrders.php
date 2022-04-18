<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class PendingOrders extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public    $search      = '';
    public    $page        = 1;
    private   $pagination  = 10;

    protected $queryString = [
        'page' => ['except' => 1, 'as' => 'p'],
        'search' => ['except' => '', 'as' => 's'],
    ];
    // fix search on paginate
    public function updatingSearch()
    {
        $this->resetPage();
    }


    // Change active status in product Homepage
    public $order;
    public function toDelivered($id)
    {
        $this->order = Order::where('id',$id)->first();
        $this->order->update([
            'status' => Order::Delivered
        ]);
        session()->flash('delivered', __('Order has been delivered Successfully'));
    }
    public function toOnTheWay($id)
    {
        $this->order = Order::where('id',$id)->first();
        $this->order->update([
            'status' => Order::OnWay
        ]);
        session()->flash('OnTheWay', __('Order is on the way to reach'));
    }
    public function toCanceled($id)
    {
        $this->order = Order::where('id',$id)->first();
        $this->order->update([
            'status' => Order::Canceled
        ]);
        session()->flash('canceled', __('Order has been canceled Successfully'));
    }


    public function toDelete($id)
    {
        Order::find($id)->delete();
        session()->flash('delete', __('Order has been deleted'));
    }

    public function render()
    {
        $orders     = Order::query()
        ->whereIn('status', [Order::Pending,Order::OnWay])
        ->where(function($query) {
               $query->orWhere('id', $this->search)
                    ->orWhere('name', 'LIKE', '%'. $this->search .'%')
                    ->orWhere('phone', 'LIKE', '%'. $this->search .'%');
        })
        ->orderBy('id','DESC')
        ->paginate($this->pagination)
        ->appends('search', $this->search);
        $ordersCount    = Order::whereIn('status',  [Order::Pending,Order::OnWay])
        ->get()
        ->count();
        return view('livewire.pending-orders',compact('orders','ordersCount'));
    }
}
