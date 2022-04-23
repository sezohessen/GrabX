<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                  => 'required|min:4|max:24|string',
            'name_ar'               => 'required|min:4|max:24|string',
            'desc'                  => 'nullable|min:4|max:2042|string',
            'desc_ar'               => 'nullable|min:4|max:2042|string',
            'price'                 => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'qty'                   => 'nullable|integer',
            'availabe_qty'          => 'required|integer',
            'image'                 => 'required|image',
            'category_id'           => 'required|integer',
            'mainSelect'            => 'nullable',
            'secondSelctName'       => 'nullable|',
            'secondSelctPrice'      => 'nullable|',
            'MultiSelect'           => 'nullable|',
            'MultiSelectName'       => 'nullable|',
            'MultiSelectPrice'      => 'nullable|'
        ];
    }
}
