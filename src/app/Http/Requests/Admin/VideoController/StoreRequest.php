<?php

namespace App\Http\Requests\Admin\VideoController;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'slug' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'iframe' => 'required|string',
            'img' => 'nullable|image'
        ];
    }

    public function messages(): array
    {
        return [
            'slug.string' => 'Slug должен быть строкой',
            'slug.max' => 'Slug не должен превышать 255 символов',
            'title.required' => 'Укажите заголовок',
            'title.string' => 'Заголовок должен быть строкой',
            'title.max' => 'Заголовок не должен превышать 255 символов',
            'iframe.required' => 'Укажите iframe',
            'iframe.string' => 'iframe должен быть строкой',
            'iframe.max' => 'iframe не должен превышать 255 символов',
            'img.image' => 'Неверный тип изображения'
        ];
    }
}
