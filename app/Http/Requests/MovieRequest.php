<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required|min:3',
            'director' => 'required',
            'year' => 'required|numeric',
            'plot' => 'required|min:5',
            'img' => 'required|image',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo e obbligatorio.',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri.',
            'director.required' => 'Il regista e obbligatorio.',
            'year.required' => 'L\'anno e obbligatorio.',
            'year.numeric' => 'L\'anno deve essere un numero valido.',
            'plot.required' => 'La trama e obbligatoria.',
            'plot.min' => 'La trama deve contenere almeno :min caratteri.',
            'img.required' => 'L\'immagine e obbligatoria.',
            'img.image' => 'Il file caricato deve essere un\'immagine valida.',
        ];
    }
}
