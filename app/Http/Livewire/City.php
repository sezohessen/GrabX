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

    public $editCity;
    public $editCity_ar;
    public $editGover;

    public $cityId;

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
    // Add
    public function add()
    {
        $validatedData            = $this->validate();
        $newCity                  = new ModelsCity();
        $newCity->name            = $this->addCity;
        $newCity->name_ar         = $this->addCity_ar;
        $newCity->governorate_id  = $this->addGover;
        $newCity->save();
        $this->reset();

        session()->flash('add', __('City has successfully been added'));
    }

    public function edit($id)
    {
        $edit =ModelsCity::find($id);
        $this->cityId       = $edit->id;
        $this->editCity     = $edit->name;
        $this->editCity_ar  = $edit->name_ar;
        $this->editGover    = $edit->governorate_id;

    }

    protected $updateRules = [
        'editCity'     => 'required|min:2',
        'editCity_ar'  => 'required|min:2',
        'editGover'    => 'required|',
    ];
    public function update($id)
    {
        $validatedData                = $this->validate($this->updateRules);
        $updateRecord                 = ModelsCity::find($id);
        $updateRecord->name           = $this->editCity ;
        $updateRecord->name_ar        = $this->editCity_ar;
        $updateRecord->governorate_id = $this->editGover;
        $updateRecord->save();
        $this->reset();
        session()->flash('update', __('City has successfully been updated'));
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
