<?php

namespace App\Http\Requests\ListOfictation;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'title'=>'string',
            'status'=>'',
            'description' => '',
            'date_of_start' => '',
            'date_of_end'=>'',
        ];
    }
}
