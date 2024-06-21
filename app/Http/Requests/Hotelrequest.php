<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Hotelrequest extends FormRequest
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
            'Hotels' => 'required|max:100',
            'Type' => 'required',
           
            'Region' => 'required|max:255',
            'Rating'=> 'required|max:100',
            'Popularity'=> 'required|max:100',
            'Opening_Hours'=> 'required|max:100',
            'Budget'=> 'required|max:100',
            'Facilities'=> 'required|max:100',


        ];
    }
}
