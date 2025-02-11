<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public const PERMISSIONS = [
        'show_orders' => 'Просмотр заявок',
        'show_services' => 'Просмотр услуг',
        'show_cases' => 'Просмотр кейсов',
        'show_teams' => 'Просмотр команды',
        'show_articles' => 'Просмотр статей',
        'show_videos' => 'Просмотр видео',
        'show_smi' => 'Просмотр СМИ',
        'show_seo' => 'Просмотр SEO',
        'show_roles' => 'Просмотр ролей',

        'edit_meta_title' => 'Редактировать мета-тег title',
        'edit_meta_description' => 'Редактировать мета-тег description',
        'edit_meta_keywords' => 'Редактировать мета-тег keywords',
        'edit_canonical' => 'Редактировать canonical',
        'edit_og_title' => 'Редактировать og:title',
        'edit_og_description' => 'Редактировать og:description',
        'edit_og_url' => 'Редактировать og:url',
        'edit_og_type' => 'Редактировать og:type',
        'edit_og_site_name' => 'Редактировать og:site_name',
        'edit_og_image' => 'Редактировать og:image',
        'edit_og_image_type' => 'Редактировать og:image:type',
        'edit_og_image_width' => 'Редактировать og:image:width',
        'edit_og_image_height' => 'Редактировать og:image:height',
        'edit_vk_image' => 'Редактировать vk:image'
    ];

    public function permissions(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(RolePermission::class);
    }
}
