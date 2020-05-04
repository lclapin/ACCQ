<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignaturesAppelRequest extends FormRequest
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
        //return ['nom' => 'required']; 
        //return ['courriel' => 'required|email|unique:signatures_manifeste'];
        //return ['telephone' => 'required'];
        //return ['municipalite' => 'required'];
        //return ['code_postal' => 'required'];
        return [''];
    }
}
