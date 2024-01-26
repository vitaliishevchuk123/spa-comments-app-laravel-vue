<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['nullable', 'integer'],
            'parent_id' => ['nullable', 'integer'],
            'text' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
