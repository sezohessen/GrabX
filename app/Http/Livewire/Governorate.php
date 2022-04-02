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
    public $newGovernorate;

    public $gover;
    public $gover_ar;
    public $isOpen = false;




    protected $queryString = [
        'page' => ['except' => 1, 'as' => 'p'],
        'search' => ['except' => '', 'as' => 's'],
    ];
    // fix search on paginate
    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $rules = [
        'gover'     => 'required|min:4',
        'gover_ar'  => 'required|min:4',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function addGovernorate()
    {
        $this->newGovernorate = new ModelsGovernorate();
        $validatedData = $this->validate();
        $this->newGovernorate->name     = $this->gover;
        $this->newGovernorate->name_ar  = $this->gover_ar;
        $this->newGovernorate->save();
        $this->dispatchBrowserEvent('company-added');
        $this->reset();

    }

    public function render()
    {
        $gover = ModelsGovernorate::where('name', 'LIKE', '%'. $this->search .'%')
        ->orWhere('name_ar','LIKE', '%'. $this->search .'%')->orderBy('id','desc')->paginate(10)
        ->appends('search', $this->search);
        return view('livewire.governorate',[
            'governorates'          => $gover,
            'governorateCount'      => ModelsGovernorate::all()->count(),
        ]);
    }
}
