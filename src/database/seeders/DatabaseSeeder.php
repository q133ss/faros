<?php

namespace Database\Seeders;

use App\Models\Seo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Seo::create([
            'seable_type' => 'App\Models\Page',
            'seable_id' => route('index'),
            'meta_title' => 'Агентство Faros.Media - управление репутацией и восприятием с 2016 года',
            'meta_description' => 'Комплекс услуг по мониторингу, анализу и формированию деловой репутации компаний и персон. Репутационный менеджмент на высоком уровне качества',
            'meta_keywords' => 'Faros,Работа с репутацией',
            'canonical' => 'https://faros.media/',
            'og_title' => 'Агентство Faros.Media - управление репутацией и восприятием с 2016 года',
            'og_description' => 'Работа с репутацией, формирование и корректировка восприятия и стереотипов',
            'og_url' => 'https://faros.media',
            'og_type' => 'website',
            'og_site_name' => 'FAROS',
        ]);

        Seo::create([
            'seable_type' => 'App\Models\Page',
            'seable_id' => route('service.index'),
            'meta_title' => 'Агентство Faros.Media - управление репутацией и восприятием с 2016 года',
            'meta_description' => 'Сервисы',
            'meta_keywords' => 'Сервисы',
            'canonical' => 'https://faros.media/service/',
            'og_title' => 'Услуги',
            'og_description' => 'Сервисы',
            'og_url' => 'https://faros.media/service/',
            'og_type' => 'website',
            'og_site_name' => 'FAROS',
        ]);

        Seo::create([
            'seable_type' => 'App\Models\Page',
            'seable_id' => route('case.index'),
            'meta_title' => 'Агентство Faros.Media - управление репутацией и восприятием с 2016 года',
            'meta_description' => 'Примеры кейсов и реализованных проектов по ORM и SERM',
            'meta_keywords' => 'кейсы по управлению репутацией',
            'canonical' => 'https://faros.media/case/',
            'og_title' => 'Кейсы по управлению репутацией от агентства Faros.Media',
            'og_description' => 'Примеры кейсов и реализованных проектов по ORM и SERM',
            'og_url' => 'https://faros.media/case/',
            'og_type' => 'website',
            'og_site_name' => 'FAROS',
        ]);
    }
}
