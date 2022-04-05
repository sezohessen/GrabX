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
    public $cash0;
    public $totalOrderPrice;
    public $totalOrder;


    public function render()
    {
        for ($i = 0; $i < 7; $i++) {
            $data[] = Order::whereBetween(
                'created_at',
                [Carbon::now()->subDay($i + 1), Carbon::now()->subDay($i)]
            )->get()->count();
        }
        for ($i = 0; $i < 7; $i++) {
            $cashe[] = Order::whereBetween(
                'created_at',
                [Carbon::now()->subDay($i + 1), Carbon::now()->subDay($i)]
            )->get()->sum('total');
        }
        $this->chartDateTime = ["Day 1","Day 2","Day 3","Day 4","Day 5","Day 6","Day 7"];
        $this->ordersTotalAmount = $data;
        $this->casheAmont = $cashe;
        $this->emitUp('refresh');
        if($this->casheAmont == 0)
        {
            return $this->cash0 = 'There is no recoreds';
        }
        $previousDateFrom   = Carbon::now()->subDays(14);
        $previousDateTo     = Carbon::now()->subDays(8);
        $dateFrom           = Carbon::now()->subDays(7);
        $dateTo             = Carbon::now();
        $this->totalOrderPrice    = Order::whereBetween('created_at', [$dateFrom, $dateTo])->sum('total');
        $this->totalOrder         = array_sum($data);

        // Revenue
        $productWeekly      = Order::whereBetween('created_at', [$dateFrom, $dateTo])->count();
        $productPrevWeekly  = Order::whereBetween('created_at', [$previousDateFrom, $previousDateTo])->count();
        $weekly             = Order::whereBetween('created_at', [$dateFrom, $dateTo])->sum('total');
        $previousWeekly     = Order::whereBetween('created_at', [$previousDateFrom,$previousDateTo])->sum('total');
        $percent_from       = abs($previousWeekly - $weekly);//Get Difference amount from previous and current amount of orders
        $previousWeekly     = !$previousWeekly ? 1 : $previousWeekly; // Avoid Division by zero problem
        $float              = $percent_from / max($previousWeekly,$weekly) * 100;
        $percent            = bcadd($float,'0',2);
        // end calculate percentage of order sales

        return view('livewire.sales-chart',compact('weekly','percent','previousWeekly','productWeekly'));
    }
}
