<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatepostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title'=>'required | min:5 | string',
            'skills'=> 'required| max:255',
            'description'=> 'required | max:255',
            'salary'=> 'required | numeric | min:1000',
            'category_id' => 'required',
            'deadline'=> 'required',
            'location'=> 'required | max:100',
            'emp_id' => 'required',
        ];
    }
}
