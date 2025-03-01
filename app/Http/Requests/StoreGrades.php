<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGrades extends FormRequest
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
             'Name' => 'required'
        ];
    }
    /**
 * Get the error messages for the defined validation rules.
 *
 */
public function messages()
{
    return [
        'Name.required' => trans('validation.required'),
    ];
}
}
