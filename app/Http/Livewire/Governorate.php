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

    public $editGoverName;
    public $editGoverName_ar;

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
        'gover'     => 'required|min:2',
        'gover_ar'  => 'required|min:2',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function add()
    {
        $this->newGovernorate = new ModelsGovernorate();
        $validatedData = $this->validate();
        $this->newGovernorate->name     = $this->gover;
        $this->newGovernorate->name_ar  = $this->gover_ar;
        $this->newGovernorate->save();
        $this->dispatchBrowserEvent('company-added');
        $this->reset();
        session()->flash('add', __('Governorate has successfully been added'));

    }

    public function passEditData($id){

        $editGover = ModelsGovernorate::where('id',$id)->first();
        $this->editGoverName    = $editGover->name;
        $this->editGoverName_ar = $editGover->name_ar;


    }


    protected $updateRules = [
        'editGoverName'     => 'required|min:2',
        'editGoverName_ar'  => 'required|min:2',
    ];
    public function update($id)
    {
        $validatedData = $this->validate($this->updateRules);
        $updateRecord           =  ModelsGovernorate::find($id);
        $updateRecord->update([
        'name'     => $this->editGoverName,
        'name_ar'  => $this->editGoverName_ar,
        ]);
        $this->dispatchBrowserEvent('company-edit');
        $this->reset();
        session()->flash('update', __('Governorate has successfully been updated'));
    }


    public function delete($id)
    {
        ModelsGovernorate::find($id)->delete();
        session()->flash('delete', __('Governorate has successfully been deleted'));
    }


    public function render()
    {
        $gover = ModelsGovernorate::where('name', 'LIKE', '%'. $this->search .'%')
        ->orWhere('name_ar','LIKE', '%'. $this->search .'%')->orderBy('id','desc')->paginate(10)
        ->orWhere('name_ar','LIKE', '%'. $this->search .'%')
        ->orderBy('id','DESC')
        ->paginate(10)
        ->appends('search', $this->search);
        return view('livewire.governorate',[
            'governorates'          => $gover,
            'governorateCount'      => ModelsGovernorate::all()->count(),
        ]);
    }
}
