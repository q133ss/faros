<?php

namespace App\Http\Requests\Admin\SmiController;

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
            'list_title' => 'required|string|max:255', // Название в списке
            'post_title' => 'required|string|max:255', // Название на детальной странице
            'text' => 'required|string',
            'source' => 'required|string|max:255',
            'logo' => 'nullable|image',
            'img' => 'nullable|image',
            'type' => 'required',
            'slug' => 'nullable|string',

            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'canonical' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:255',
            'og_url' => 'nullable|string|max:255',
            'og_type' => 'nullable|string|max:255',
            'og_site_name' => 'nullable|string|max:255',
            'og_image' => 'nullable|string|max:255',
            'og_image_type' => 'nullable|string|max:255',
            'og_image_width' => 'nullable|string|max:255',
            'og_image_height' => 'nullable|string|max:255',
            'vk_image' => 'nullable|string|max:255'
        ];
    }

    public function messages(): array
    {
        return [
            'list_title.required' => 'Поле "Название в списке" обязательно для заполнения.',
            'list_title.max' => 'Поле "Название в списке" не должно превышать :max символов.',
            'post_title.required' => 'Поле "Название на детальной странице" обязательно для заполнения.',
            'post_title.max' => 'Поле "Название на детальной странице" не должно превышать :max символов.',
            'text.required' => 'Поле "Текст" обязательно для заполнения.',
            'source.required' => 'Поле "Источник" обязательно для заполнения.',
            'source.max' => 'Поле "Источник" не должно превышать :max символов.',
            'logo.image' => 'Логотип должен быть изображением.',
            'img.image' => 'Изображение должно быть изображением.',
            'type.required' => 'Тип записи обязателен для выбора.',
            'slug.max' => 'Поле "Slug" не должно превышать :max символов.',

            'meta_title.max' => 'Meta Title не должен превышать 255 символов.',
            'meta_description.max' => 'Meta Description не должен превышать 255 символов.',
            'meta_keywords.max' => 'Meta Keywords не должны превышать 255 символов.',
            'canonical.max' => 'Canonical URL не должен превышать 255 символов.',
            'og_title.max' => 'OG Title не должен превышать 255 символов.',
            'og_description.max' => 'OG Description не должен превышать 255 символов.',
            'og_url.max' => 'OG URL не должен превышать 255 символов.',
            'og_type.max' => 'OG Type не должен превышать 255 символов.',
            'og_site_name.max' => 'OG Site Name не должен превышать 255 символов.',
            'og_image.max' => 'OG Image не должен превышать 255 символов.',
            'og_image_type.max' => 'OG Image Type не должен превышать 255 символов.',
            'og_image_width.max' => 'OG Image Width не должен превышать 255 символов.',
            'og_image_height.max' => 'OG Image Height не должен превышать 255 символов.',
            'vk_image.max' => 'VK Image не должен превышать 255 символов.'
        ];
    }
}
