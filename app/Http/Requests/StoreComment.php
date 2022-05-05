<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComment extends FormRequest
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
        'comment' => 'required'
        ];
    }

    public function attributes(){
        return [
            'comment' => 'comentario'
        ];
    }

    public function messages(){
        return [
            'comment.required' => 'Debe ingresar un comentario'
        ];
    }
}
