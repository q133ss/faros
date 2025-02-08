<?php

namespace App\Http\Requests\Admin\TeamController;

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
            'img' => 'nullable|image',
            'name' => 'required|string|max:255',
            'list_post' => 'required|string|max:255',
            'page_post' => 'nullable|string|max:255',
            'list_text' => 'nullable|string',
            'rating' => 'required|string|max:255',
            'post_count' => 'nullable|string|max:255',
            'smi_count' => 'nullable|string|max:255',
            'from_author' => 'nullable|string',
            'education' => 'nullable|string',
            'additional_educational' => 'nullable|string',
            'email' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'has_detail' => 'nullable|string',
            'list_show' => 'nullable|string',

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
            'img.required' => 'Изображение обязательно для загрузки.',
            'img.image' => 'Загружаемый файл должен быть изображением.',
            'name.required' => 'Поле "Имя" обязательно для заполнения.',
            'name.max' => 'Поле "Имя" не должно превышать :max символов.',
            'list_post.max' => 'Поле "Должность в списке" не должно превышать :max символов.',
            'rating.required' => 'Поле "Рейтинг" обязательно для заполнения.',
            'rating.max' => 'Поле "Рейтинг" не должно превышать :max символов.',
            'slug.required' => 'Поле "Slug" обязательно для заполнения.',
            'slug.max' => 'Поле "Slug" не должно превышать :max символов.',
            'page_post.max' => 'Поле "Должность на детальной странице" не должно превышать :max символов.',
            'list_text.max' => 'Поле "Текст на странице Команда" не должно превышать :max символов.',
            'post_count.max' => 'Поле "Количество постов" не должно превышать :max символов.',
            'smi_count.max' => 'Поле "Количество СМИ" не должно превышать :max символов.',
            'from_author.max' => 'Поле "От автора" не должно превышать :max символов.',
            'education.max' => 'Поле "Образование" не должно превышать :max символов.',
            'additional_educational.max' => 'Поле "Дополнительное образование" не должно превышать :max символов.',
            'email.max' => 'Поле "Email" не должно превышать :max символов.',
            'instagram.max' => 'Поле "Instagram" не должно превышать :max символов.',

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
