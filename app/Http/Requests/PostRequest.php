<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
           'title'          => 'required|max:100',
           'category_id'    => 'required|exists:categories,id',
           'image'          => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
           'content'        => 'required|string'
        ];
    }
}
