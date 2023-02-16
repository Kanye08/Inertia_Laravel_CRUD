<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateBookRequest extends FormRequest
{

    public function authorize()
    {
        return Auth::hasUser();
    }


    public function rules()
    {
        return [];
    }
}