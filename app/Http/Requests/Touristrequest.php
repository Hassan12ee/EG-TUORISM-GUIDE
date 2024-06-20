<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Touristrequest extends FormRequest
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
            'name' => 'required|max:100',
            'photo' => 'required',
            'small_details' => 'required|max:255',
            'ID'=> 'required|max:100',
            'Place'=> 'required|max:100',
            'Food'=> 'required|max:100',
            'imgpath'=> 'required|max:100',
            'Region'=> 'required|max:100',
            'Rating'=> 'required|max:100',
            'Popularity'=> 'required|max:100',
            'Average_Cost'=> 'required|max:100',
            'Opening_Hours'=> 'required|max:100',
            'Price_Range'=> 'required|max:100',
            'Ambiance'=> 'required|max:100',

        ];
    }
}
