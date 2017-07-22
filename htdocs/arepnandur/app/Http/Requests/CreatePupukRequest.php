<?php

namespace arepnandur\Http\Requests;

use arepnandur\Http\Requests\Request;

class CreatePupukRequest extends Request
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
            'nama' => 'required',
            'slug' => 'required|unique:pupuks',
            'harga' => 'required|numeric',
            'jenis' => 'required',
            'dsingkat' => 'required',
            'dpanjang' => 'required',
        ];
    }
}
