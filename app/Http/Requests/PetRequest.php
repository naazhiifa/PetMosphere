<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
        $rule_Product_unique = Rule::unique('petshop', 'Product');
        if($this->method() !== 'POST'){
            $rule_Product_unique->ignore($this->route()->parameter('id'));
        }

        return [
            'Product' => ['required', $rule_Product_unique],
            'Price' => ['required'],
            'Description' => ['required']
        ];
    }
    public function messages(){
        return[
            'required' => ':attribute fill in this column',
            
        ];
    }
}
