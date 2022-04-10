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
        // 'bg'                      => 'image|',
        // 'logo'                    => 'image|',
    ];

    public function mount()
    {
        $this->Setting = Setting::first();
    }


    public function save(Request $request)
    {
        $this->validate();
        $imageId = add_Image_tenant($this->bg,$this->Setting->bg_id,Setting::bg,true);
        dd($imageId);


        $this->Setting->update();
        session()->flash('update', __('Settings have been updated successfully'));
    }

    public function render()
    {

        return view('livewire.settings');
    }

}
