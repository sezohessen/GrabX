<?php

namespace App\Http\Livewire;

use App\Models\Governorate as ModelsGovernorate;
use Livewire\Component;
use Livewire\WithPagination;

class Governorate extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'page' => ['except' => 1, 'as' => 'p'],
        'search' => ['except' => '', 'as' => 's'],
    ];
    // fix search on paginate
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $gover = ModelsGovernorate::orderBy('id','DESC')->where('name', 'LIKE', '%'. $this->search .'%')
        ->orWhere('name_ar','LIKE', '%'. $this->search .'%')->paginate(5)
        ->appends('search', $this->search);
        return view('livewire.governorate',[
            'governorates'          => $gover,
            'governorateCount'      => ModelsGovernorate::all()->count(),
        ]);
    }
}
