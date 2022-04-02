<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'page' => ['except' => 1, 'as' => 'p'],
        'search' => ['except' => '', 'as' => 's'],
    ];
    private   $pagination       = 10;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function Delete($id)
    {
        ModelsCategory::find($id)->delete();
    }
    public function render()
    {
        $categories = ModelsCategory::where('name', 'LIKE', '%'. $this->search .'%')
        ->orWhere('name_ar','LIKE', '%'. $this->search .'%')
        ->orderBy('id','DESC')
        ->paginate($this->pagination)
        ->appends('search', $this->search);
        $count      = ModelsCategory::all()->count();
        return view('livewire.category',compact('categories','count'));
    }
}
