<?php

namespace App\Http\Requests\Admin\PostController;

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
            'list_name' => 'required|string|max:255', // Название в списке
            'author_id' => 'required|exists:authors,id',
            'post_name' => 'required|string|max:255', // Название на детальной странице
            'pre_title' => 'required|string', // Подзаголовок
            'content' => 'required|string', // Содержание статьи
            'list_img' => 'nullable|image', // Изображение в списке
            'img' => 'nullable|image', // Изображение на детальной странице
            'category_id' => 'required|exists:article_categories,id',
            'tags' => 'nullable|array',


        ];
    }

    public function messages(): array
    {
        return [
            'slug.max' => 'Slug не должен превышать :max символов.',
            'list_name.required' => 'Поле "Название в списке" обязательно для заполнения.',
            'list_name.max' => 'Поле "Название в списке" не должно превышать :max символов.',
            'author_id.required' => 'Автор обязателен для выбора.',
            'author_id.exists' => 'Указанного автора не существует.',
            'post_name.required' => 'Поле "Название на детальной странице" обязательно для заполнения.',
            'post_name.max' => 'Поле "Название на детальной странице" не должно превышать :max символов.',
            'pre_title.required' => 'Поле "Подзаголовок" обязательно для заполнения.',
            'content.required' => 'Поле "Содержание статьи" обязательно для заполнения.',
            'list_img.required' => 'Изображение в списке обязательно для загрузки.',
            'list_img.image' => 'Загружаемый файл для изображения в списке должен быть изображением.',
            'img.required' => 'Изображение на детальной странице обязательно для загрузки.',
            'img.image' => 'Загружаемый файл для изображения на детальной странице должен быть изображением.',
            'category_id.required' => 'Категория обязательна для выбора.',
            'category_id.exists' => 'Указанной категории не существует.',
            'tags.array' => 'Теги должны быть массивом',

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
