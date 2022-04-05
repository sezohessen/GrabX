<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    // Add $
    public $addCategory;
    public $addCategory_ar;

    public $CategoryId;
    public $editCategory;
    public $editCategory_ar;


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
        'addCategory'     => 'required|min:2',
        'addCategory_ar'  => 'required|min:2',
    ];
    // Add
    public function add()
    {
        $validatedData                = $this->validate();
        $newCategory                  = new ModelCategory();
        $newCategory->name            = $this->addCategory;
        $newCategory->name_ar         = $this->addCategory_ar;
        $newCategory->save();
        $this->reset();
        session()->flash('add', __('Category has successfully been added'));
    }


    public function edit($id)
    {
        $edit =ModelCategory::find($id);
        $this->editCategory            = $edit->name;
        $this->editCategory_ar         = $edit->name_ar;
        $this->CategoryId              = $edit->id;
    }

    protected $updateRules = [
        'editCategory'     => 'required|min:2',
        'editCategory_ar'  => 'required|min:2',
    ];
    public function update($id)
    {
        $validatedData                = $this->validate($this->updateRules);
        $updateRecord                 = ModelCategory::find($id);
        $updateRecord->name           = $this->editCategory ;
        $updateRecord->name_ar        = $this->editCategory_ar;
        $updateRecord->save();
        $this->reset();
        session()->flash('update', __('Category has successfully been updated'));
    }

    public function Delete($id)
    {
        ModelCategory::find($id)->delete();
        session()->flash('delete', __('Category has successfully been deleted'));
    }
    public function render()
    {
        $categories = ModelCategory::where('name', 'LIKE', '%'. $this->search .'%')
        ->orWhere('name_ar','LIKE', '%'. $this->search .'%')
        ->orderBy('id','DESC')
        ->paginate($this->pagination)
        ->appends('search', $this->search);
        $count      = ModelCategory::all()->count();
        return view('livewire.category',compact('categories','count'));
    }
}
