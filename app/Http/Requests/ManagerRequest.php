<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //認証"true"にする
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
           'user.name' => 'required',
           'user.number' => 'required|numeric',
           'user.email'=>'required|email',
           'user.major'=>'required',
          
          
        ];
        
    }
}
