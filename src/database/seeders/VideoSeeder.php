<?php

namespace Database\Seeders;

use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::createFromFormat('d.m.Y', '19.10.2021');
        Video::create([
            'title' => 'БИЗНЕС ИНСАЙТ: Елена Медведева. Управление восприятием: продажи по любви',
            'img' => '/upload/iblock/d12/qldczkjpkz2g01orkhbkhoy3a1plqtsz/webpc-passthru.webp',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/T1p70g-u7WY?si=48f9RkdEjXKb1lLb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
            'views_count' => 2421,
            'created_at' => $date,
            'slug' => 'biznes-insayt-elena-medvedeva-upravlenie-vospriyatiem-prodazhi-po-lyubvi'
        ]);

        Video::create([
            'img' => '/upload/iblock/37f/dtxedz65buozpt22soxw56m1k02wvkwk/webpc-passthru (1).webp',
            'title' => 'Лена Медведева: Карьерный путь в интернет-маркетинге',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/tqCXVFZ_Oro?si=03mYwbjj7LF9QJvV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
            'views_count' => 2433,
            'created_at' => $date,
            'slug' => 'lena-medvedeva-karernyy-put-v-internet-marketinge'
        ]);

        Video::create([
            'title' => 'Екатерина Тулянкина : Активации в соцсетях',
            'img' => '../upload/iblock/a84/ka14y8m33zt8stx312cq1e8qj9qklu0e/Screenshot_46.webp',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/ZleZZ6q4pSc?si=GJsgEymdCACb58jl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
            'views_count' => 2367,
            'created_at' => $date,
            'slug' => 'ekaterina-tulyankina-aktivatsii-v-sotssetyakh',
        ]);

        Video::create([
            'img' => '/upload/resize_cache/webp/iblock/64a/e5e26l5bt47r3pdh8bnk4d9yw3luqzz7/cover-01.webp',
            'title' => 'Екатерина Тулянкина с обучающей лекцией «обзоры методов продвижения в соцсетях»',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/cZRDFTwRnxI?si=uv286MsLjoMCsUsh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
            'views_count' => 2315,
            'created_at' => $date,
            'slug' => 'ekaterina-tulyankina-s-obuchayushchey-lektsiey-obzory-metodov-prodvizheniya-v-sotssetyakh'
        ]);

        Video::create([
            'img' => '/upload/resize_cache/webp/iblock/0f9/9e3g0sysnln96cw33ar4cwbbr3m5tw6j/cover-03.webp',
            'title' => 'Екатерина Тулянкина и Елена Кириленко в программе 3600 секунд на Mediametrics',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/YUSu1EqWdDY?si=qSdnqCtG_LbRol3o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
            'views_count' => 2274,
            'created_at' => $date,
            'slug' => 'ekaterina-tulyankina-i-elena-kirilenko-v-programme-3600-sekund-na-mediametrics'
        ]);

        Video::create([
            'img' => '/upload/resize_cache/webp/iblock/e82/j213984p5acaggc38q3842vggrca1c5e/cover-04.webp',
            'title' => '«Нейросети и отзывы», — Екатерина Тулянкина в программе «доброе утро» на первом канале',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/rmgIO5wTYWs?si=bvC1KseubdUf7KOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
            'views_count' => 2428,
            'created_at' => $date,
            'slug' => 'neyroseti-i-otzyvy-ekaterina-tulyankina-v-programme-dobroe-utro-na-pervom-kanale'
        ]);

        Video::create([
            'title' => 'SMM для букмекерских контор // Faros.media',
            'img' => '/upload/resize_cache/webp/iblock/1c3/aqiql18nrpkud1ez0e1odcrhsqlammk0/cover-02.webp',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/YUnm-n69Ghg?si=PmH3S4m0ZVSMHJ1_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
            'views_count' => 2243,
            'created_at' => $date,
            'slug' => 'smm-dlya-bukmekerskikh-kontor-faros-media'
        ]);

        Video::create([
            'title' => 'Екатерина Тулянкина для канала Москва24: отзывы и их сила',
            'img' => '/upload/resize_cache/webp/iblock/62b/rjqvjtrx4owvla6uroltam2kqckgj1rt/cover-05.webp',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/0d7l-605XDM?si=dCr8caE_zmOOIWcl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
            'views_count' => 2302,
            'created_at' => $date,
            'slug' => 'ekaterina-tulyankina-dlya-kanala-moskva24-otzyvy-i-ikh-sila'
        ]);
    }
}
