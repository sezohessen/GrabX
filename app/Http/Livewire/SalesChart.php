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
        $this->emitUp('refresh');
        if($this->casheAmont == 0)
        {
            return $this->cash0 = 'There is no recoreds';
        }
        $this->totalOrderPrice    = Order::all()->sum('total');
        $this->totalOrder         = array_sum($data);

        // Revenue
        $dateFrom           = Carbon::now()->subDays(7);
        $dateTo             = Carbon::now();
        $weekly             = Order::whereBetween('created_at', [$dateFrom, $dateTo])->sum('total');
        $previousDateFrom   = Carbon::now()->subDays(14);
        $previousDateTo     = Carbon::now()->subDays(8);
        $previousWeekly     = Order::whereBetween('created_at', [$previousDateFrom,$previousDateTo])->sum('total');
        if($previousWeekly < $weekly){
            if($previousWeekly > 0){
                $percent_from = $weekly - $previousWeekly;
                $float  = $percent_from / $previousWeekly * 100; //increase percent
                $percent = bcadd($float,'0',2);
            }else{
                $percent = 100; //increase percent
            }
        }else{
            $percent_from = $previousWeekly - $weekly;
            $float = $percent_from / $previousWeekly * 100; //decrease percent
            $percent = bcadd($float,'0',2);
        }

        // end calculate percentage of order sales

        return view('livewire.sales-chart',compact('percent','previousWeekly'));
    }
}
