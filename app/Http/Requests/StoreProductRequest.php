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
            'name'          => 'required|min:4|max:24|string',
            'name_ar'       => 'required|min:4|max:24|string',
            'desc'          => 'required|min:4|max:2042|string',
            'desc_ar'       => 'required|min:4|max:2042|string',
            'price'         => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'qty'           => 'required|min:1|',
            'availabe_qty'  => 'required|min:1|',
            'active'        => 'required|boolean',
            'image'         => 'required|',
            'category_id'   => 'required|integer',
        ];
    }
}
