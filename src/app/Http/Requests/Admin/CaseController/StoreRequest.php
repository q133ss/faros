<?php

namespace App\Http\Requests\Admin\CaseController;

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
            'slug' => 'nullable|string|max:255|unique:client_cases,slug',
            'list_name' => 'required|string|max:255',
            'post_name' => 'required|string|max:255',
            'type' =>      'required|in:default,bgYellow,double',
            'author_id' => 'required|exists:authors,id',
            'bg_color' => 'required|string|max:255',
            'text_color' => 'required|string|max:255',
            'logo' => 'nullable|image',
            'list_img' => 'nullable|image',
            'img' => 'nullable|image',
            'text' => 'required|string',

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
            'slug.max' => 'Slug не должен превышать 255 символов.',
            'slug.unique' => 'Slug должен быть уникальным',
            'list_name.required' => 'Поле "Название в списке" обязательно для заполнения.',
            'list_name.max' => 'Название в списке не должно превышать 255 символов.',
            'post_name.required' => 'Поле "Название на детальной странице" обязательно для заполнения.',
            'post_name.max' => 'Название на детальной странице не должно превышать 255 символов.',
            'type.required' => 'Тип кейса обязателен для выбора.',
            'type.in' => 'Выбранный тип кейса недопустим.',
            'author_id.required' => 'Автор кейса обязателен для выбора.',
            'author_id.exists' => 'Указанного автора не существует.',
            'bg_color.required' => 'Цвет фона обязателен для указания.',
            'bg_color.max' => 'Цвет фона не должен превышать 255 символов.',
            'text_color.required' => 'Цвет текста обязателен для указания.',
            'text_color.max' => 'Цвет текста не должен превышать 255 символов.',
            'logo.image' => 'Логотип должен быть изображением.',
            'logo.mimes' => 'Логотип должен быть в формате JPEG, PNG, JPG, GIF или SVG.',
            'logo.max' => 'Размер логотипа не должен превышать 2 MB.',
            'list_img.required' => 'Изображение в списке обязательно для загрузки.',
            'list_img.image' => 'Изображение в списке должно быть изображением.',
            'list_img.mimes' => 'Изображение в списке должно быть в формате JPEG, PNG, JPG, GIF или SVG.',
            'list_img.max' => 'Размер изображения в списке не должен превышать 2 MB.',
            'img.image' => 'Изображение на детальной странице должно быть изображением.',
            'img.mimes' => 'Изображение на детальной странице должно быть в формате JPEG, PNG, JPG, GIF или SVG.',
            'img.max' => 'Размер изображения на детальной странице не должен превышать 2 MB.',
            'text.required' => 'Введите текст',
            'text.string' => 'Текст должен быть строкой',
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
