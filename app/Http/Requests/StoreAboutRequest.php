<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'         =>'required|min:3|max:150',
            'description'  =>'required|min:3|max:1000000000',
            'image1'       =>"required|mimes:webp,jpg,jpeg,png|max:2024",
            'image2'       =>"required|mimes:webp,jpg,jpeg,png|max:2024",
            'image3'       =>"required|mimes:webp,jpg,jpeg,png|max:2024",
            'image4'       =>"required|mimes:webp,jpg,jpeg,png|max:2024",
        ];
    }
}
