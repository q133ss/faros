<?php

namespace App\Http\Requests\Admin\ServiceController;

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
            'name' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'short_description' => 'nullable|string|max:255',
            'bg_color' => 'string|max:255',
            'img' => 'nullable|image',
            'section_one_percent' => 'nullable|string|max:255',
            'section_one_percent_description' => 'nullable|string|max:255',
            'section_one_title' => 'nullable|string|max:255',
            'section_one_text' => 'nullable|string|max:255',
            'advantages' => 'nullable|array',
            'section_two_percent' => 'nullable|string|max:255',
            'section_two_percent_description' => 'nullable|string|max:255',
            'section_two_title' => 'nullable|string|max:255',
            'section_two_text' => 'nullable|string|max:255',
            'how_it_works' => 'nullable|array',
            'why_choose_us' => 'nullable|array',

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
            'slug' => [
                'nullable' => 'Поле "Slug" может быть пустым.',
                'string' => 'Поле "Slug" должно быть строкой.',
                'max' => 'Поле "Slug" не может превышать :max символов.',
            ],
            'name' => [
                'nullable' => 'Поле "Имя" может быть пустым.',
                'string' => 'Поле "Имя" должно быть строкой.',
                'max' => 'Поле "Имя" не может превышать :max символов.',
            ],
            'subtitle' => [
                'nullable' => 'Поле "Подзаголовок" может быть пустым.',
                'string' => 'Поле "Подзаголовок" должно быть строкой.',
                'max' => 'Поле "Подзаголовок" не может превышать :max символов.',
            ],
            'short_description' => [
                'nullable' => 'Поле "Краткое описание" может быть пустым.',
                'string' => 'Поле "Краткое описание" должно быть строкой.',
                'max' => 'Поле "Краткое описание" не может превышать :max символов.',
            ],
            'bg_color' => [
                'string' => 'Поле "Цвет фона" должно быть строкой.',
                'max' => 'Поле "Цвет фона" не может превышать :max символов.',
            ],
            'img' => [
                'required' => 'Выберите "Изображение".',
                'image' => 'Поле "Изображение" должно быть изображением.',
            ],
            'section_one_percent' => [
                'nullable' => 'Поле "Процент первого раздела" может быть пустым.',
                'string' => 'Поле "Процент первого раздела" должно быть строкой.',
                'max' => 'Поле "Процент первого раздела" не может превышать :max символов.',
            ],
            'section_one_percent_description' => [
                'nullable' => 'Поле "Описание процента первого раздела" может быть пустым.',
                'string' => 'Поле "Описание процента первого раздела" должно быть строкой.',
                'max' => 'Поле "Описание процента первого раздела" не может превышать :max символов.',
            ],
            'section_one_title' => [
                'nullable' => 'Поле "Заголовок первого раздела" может быть пустым.',
                'string' => 'Поле "Заголовок первого раздела" должно быть строкой.',
                'max' => 'Поле "Заголовок первого раздела" не может превышать :max символов.',
            ],
            'section_one_text' => [
                'nullable' => 'Поле "Текст первого раздела" может быть пустым.',
                'string' => 'Поле "Текст первого раздела" должно быть строкой.',
                'max' => 'Поле "Текст первого раздела" не может превышать :max символов.',
            ],
            'advantages' => [
                'nullable' => 'Поле "Преимущества" может быть пустым.',
                'array' => 'Поле "Преимущества" должно быть массивом.',
            ],
            'section_two_percent' => [
                'nullable' => 'Поле "Процент второго раздела" может быть пустым.',
                'string' => 'Поле "Процент второго раздела" должно быть строкой.',
                'max' => 'Поле "Процент второго раздела" не может превышать :max символов.',
            ],
            'section_two_percent_description' => [
                'nullable' => 'Поле "Описание процента второго раздела" может быть пустым.',
                'string' => 'Поле "Описание процента второго раздела" должно быть строкой.',
                'max' => 'Поле "Описание процента второго раздела" не может превышать :max символов.',
            ],
            'section_two_title' => [
                'nullable' => 'Поле "Заголовок второго раздела" может быть пустым.',
                'string' => 'Поле "Заголовок второго раздела" должно быть строкой.',
                'max' => 'Поле "Заголовок второго раздела" не может превышать :max символов.',
            ],
            'section_two_text' => [
                'nullable' => 'Поле "Текст второго раздела" может быть пустым.',
                'string' => 'Поле "Текст второго раздела" должно быть строкой.',
                'max' => 'Поле "Текст второго раздела" не может превышать :max символов.',
            ],
            'how_it_works' => [
                'nullable' => 'Поле "Как это работает" может быть пустым.',
                'array' => 'Поле "Как это работает" должно быть массивом.',
            ],
            'why_choose_us' => [
                'nullable' => 'Поле "Почему выбирают нас" может быть пустым.',
                'array' => 'Поле "Почему выбирают нас" должно быть массивом.',
            ]
        ];
    }
}
