<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class SalesChart extends Component
{
    public $casheAmont;
    public $ordersTotalAmount;
    public $chartDateTime = [];


    public function today()
    {
        $todaysCash                 = Order::whereBetween('created_at',[Carbon::yesterday(),Carbon::now()])->get()->sum('total');
        $todaysOrder[]              = Order::whereBetween('created_at',[Carbon::yesterday(),Carbon::now()])->get();

        $this->chartDateTime        = ["Day 1","Day 2","Day 3","Day 4","Day 5","Day 6","Day 17"];
        $this->ordersTotalAmount    = $todaysOrder;
        $this->casheAmont           = $todaysCash;

    }

    public function render()
    {

        for ($i = 0; $i < 7; $i++) {
            $data[] = Order::whereBetween(
                'created_at',
                [Carbon::now()->subWeek($i + 1), Carbon::now()->subWeek($i)]
            )->get()->count();
        }
        for ($i = 0; $i < 7; $i++) {
            $cashe[] = Order::whereBetween(
                'created_at',
                [Carbon::now()->subWeek($i + 1), Carbon::now()->subWeek($i)]
            )->get()->sum('total');
        }

        $this->chartDateTime = ["Day 1","Day 2","Day 3","Day 4","Day 5","Day 6","Day 7"];
        $this->ordersTotalAmount = $data;
        $this->casheAmont = $cashe;



        return view('livewire.sales-chart');
    }
}
