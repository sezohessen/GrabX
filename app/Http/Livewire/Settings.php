<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public Setting $Setting;
    public $bg;
    public $logo;

    protected $rules = [
        'Setting.company_name'    => 'min:2|max:20',
        'Setting.desc'            => 'min:10|max:244',
        'Setting.desc_ar'         => 'min:10|max:244',
        'bg'                      => 'nullable|image',
        'logo'                    => 'nullable|image',
    ];

    public function mount()
    {
        $this->Setting = Setting::first();
    }


    public function save()
    {

            $this->validate();
        $bool1 = 1;
        $bool2 = 1;
        if(!$this->Setting->bg_id)$bool1        = 0;
        if(!$this->Setting->logo_id)$bool2      = 0;
        if($this->bg)$this->Setting->bg_id      = add_Image_tenant($this->bg,$this->Setting->bg_id,Setting::bg,$bool1);
        if($this->logo)$this->Setting->logo_id  = add_Image_tenant($this->logo,$this->Setting->logo_id,Setting::logo,$bool2);

        $this->Setting->update();

        session()->flash('update', __('Settings have been updated successfully'));
    }

    public function render()
    {

        return view('livewire.settings');
    }

}
