<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePresentacionRequest extends FormRequest
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
            //Aca se pone las reglas de validación de acuerdo a la base de daots
            'nombre' => 'required|max:60|unique:caracteristicas,nombre',
            'descripcion' => 'nullable|max:255'
        ];
        //si no se cumplen estas reglas no se ejecutara el controller de marca.store
    }
}
