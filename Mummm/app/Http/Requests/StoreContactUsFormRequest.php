<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactUsFormRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
   
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
        
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'email.email'=>'Email is invalid',
            'phone.required'=>'Phone is required',
            'message.required'=>'Message is required',
        ];
    }
}
