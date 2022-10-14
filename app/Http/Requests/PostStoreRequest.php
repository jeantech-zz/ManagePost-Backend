<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'creator' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'photo' => ['required'],
        ];
    }
}
