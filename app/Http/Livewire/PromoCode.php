<?php

namespace App\Http\Livewire;

use App\Models\PromoCode as ModelsPromoCode;
use Livewire\Component;
use Livewire\WithPagination;

class PromoCode extends Component
{

    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public $codeId;
    //Add
    public $addCode;
    public $addDiscount;
    public $addMaxPrice;
    public $addMaxCount;
    public $addUsable;
    //Edit
    public $editCode;
    public $editDiscount;
    public $editMaxPrice;
    public $editMaxCount;
    public $editUsable;
    public $editActive;

    protected $queryString = [
        'page' => ['except' => 1, 'as' => 'p'],
        'search' => ['except' => '', 'as' => 's'],
    ];
    private   $pagination       = 10;
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public $active;
    //Change active status
    public function changeActive($id)
    {
        $this->active = ModelsPromoCode::where('id',$id)->first();
        $this->active->update([
            'active' => !$this->active->active
        ]);
        session()->flash('change', __('availability has successfully been changed'));
    }


    protected $rules = [
        'addCode'         => 'required|min:1',
        'addDiscount'     => 'required|min:1',
        'addMaxPrice'     => 'required|min:1',
        'addMaxCount'     => 'required|min:1',
        'addUsable'       => 'required|min:1',
    ];
    // Add
    public function addPromo()
    {
        $validatedData                 = $this->validate();
        $newPromo                      = new ModelsPromoCode();
        $newPromo->code                = $this->addCode;
        $newPromo->discount            = $this->addDiscount;
        $newPromo->max_price_discount  = $this->addMaxPrice;
        $newPromo->max_count           = $this->addMaxCount;
        $newPromo->usable              = $this->addUsable;
        $newPromo->active              = 1;
        $newPromo->save();
        $this->reset();
        session()->flash('add', __('Promo code has successfully been added'));
    }

    public function edit($id)
    {
        $edit                = ModelsPromoCode::find($id);
        $this->codeId       = $edit->id;
        $this->editCode      = $edit->code;
        $this->editDiscount  = $edit->discount;
        $this->editMaxPrice  = $edit->max_price_discount;
        $this->editMaxCount  = $edit->max_count;
        $this->editUsable    = $edit->usable;
    }

    protected $updateRules = [
        'editCode'         => 'required|min:1',
        'editDiscount'     => 'required|min:1',
        'editMaxPrice'     => 'required|min:1',
        'editMaxCount'     => 'required|min:1',
        'editUsable'       => 'required|min:1',
    ];

    public function update($id)
    {
        $validatedData                     = $this->validate($this->updateRules);
        $updateRecord                      = ModelsPromoCode::find($id);
        $updateRecord->code                = $this->editCode;
        $updateRecord->discount            = $this->editDiscount;
        $updateRecord->max_price_discount  = $this->editMaxPrice;
        $updateRecord->max_count           = $this->editMaxCount;
        $updateRecord->usable              = $this->editUsable;
        $updateRecord->save();
        $this->reset();
        session()->flash('update', __('Promo code has successfully been updated'));
    }

    public function delete($id)
    {
        ModelsPromoCode::find($id)->delete();
        session()->flash('delete', __('Promo Code has successfully been deleted'));
    }

    public function render()
    {
        $codes         = ModelsPromoCode::where('discount', 'LIKE', '%'. $this->search .'%')
        ->orWhere('code','LIKE', '%'. $this->search .'%')
        ->orderBy('id','DESC')
        ->paginate($this->pagination)
        ->appends('search', $this->search);
        $count           = ModelsPromoCode::all()->count();
        return view('livewire.promo-code',compact('codes','count'));
    }
}
