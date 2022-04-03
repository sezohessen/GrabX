<?php

namespace App\Http\Livewire;

use App\Models\City as ModelsCity;
use App\Models\Governorate;
use Livewire\Component;
use Livewire\WithPagination;

class City extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public $addCity;
    public $addCity_ar;
    public $addGover;

    protected $queryString = [
        'page' => ['except' => 1, 'as' => 'p'],
        'search' => ['except' => '', 'as' => 's'],
    ];
    private   $pagination       = 10;
    public function updatingSearch()
    {
        $this->resetPage();
    }



    protected $rules = [
        'addCity'     => 'required|min:2',
        'addCity_ar'  => 'required|min:2',
        'addGover'    => 'required',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    // Add
    public function add()
    {
        $validatedData            = $this->validate();
        $newCity                  = new ModelsCity();
        $newCity->name            = $this->addCity;
        $newCity->name_ar         = $this->addCity_ar;
        $newCity->governorate_id  = $this->addGover;
        $newCity->save();
        // $this->dispatchBrowserEvent('CloseModal');
        $this->emit('CloseModal');
        $this->reset();
        session()->flash('add', __('City has successfully been added'));
    }

    public function delete($id)
    {
        ModelsCity::find($id)->delete();
        session()->flash('delete', __('City has successfully been deleted'));
    }
    public function render()
    {
        $cities         = ModelsCity::where('name', 'LIKE', '%'. $this->search .'%')
        ->orWhere('name_ar','LIKE', '%'. $this->search .'%')
        ->orderBy('id','DESC')
        ->paginate($this->pagination)
        ->appends('search', $this->search);
        $count          = ModelsCity::all()->count();
        $governorates    = Governorate::all();
        return view('livewire.city',compact('count','cities','governorates'));
    }
}
