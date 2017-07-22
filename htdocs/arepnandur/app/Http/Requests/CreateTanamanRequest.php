<?php

namespace arepnandur\Http\Requests;

use arepnandur\Http\Requests\Request;

class CreateTanamanRequest extends Request
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
            'kpmj' => 'required|numeric',
            'kpmb' => 'required|numeric',
            'hpmb' => 'required|numeric',
            'hpmj' => 'required|numeric',
            'kpu' => 'required|numeric',
            'kpk' => 'required|numeric',
            'kps' => 'required|numeric',
            'kph' => 'required|numeric',
            'hbibit' => 'required|numeric',
            'hjual' => 'required|numeric',
        ];
    }
}
