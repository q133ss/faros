<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Создание SEO');

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
            'meta_title' => 'Агентство по управлению репутацией и восприятием брендов Faros.Media услуги',
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
            'meta_title' => 'Кейсы по управлению репутацией от агентства Faros.Media',
            'meta_description' => 'Примеры кейсов и реализованных проектов по ORM и SERM',
            'meta_keywords' => 'кейсы по управлению репутацией',
            'canonical' => 'https://faros.media/case/',
            'og_title' => 'Кейсы по управлению репутацией от агентства Faros.Media',
            'og_description' => 'Примеры кейсов и реализованных проектов по ORM и SERM',
            'og_url' => 'https://faros.media/case/',
            'og_type' => 'website',
            'og_site_name' => 'FAROS',
        ]);

        Seo::create([
            'seable_type' => 'App\Models\Page',
            'seable_id' => route('team.index'),
            'meta_title' => 'Агентство по управлению репутацией и восприятием брендов Faros.Media сотрудники, команда',
            'meta_description' => 'Команда репутационного агентства Faros.Media - сотрудники на защите репутации и имиджа',
            'meta_keywords' => 'менеджеры по управлению репутацией, модераторы',
            'canonical' => 'https://faros.media',
            'og_title' => 'Агентство по управлению репутацией и восприятием брендов Faros.Media сотрудники, команда',
            'og_description' => 'Команда репутационного агентства Faros.Media - сотрудники на защите репутации и имиджа',
            'og_url' => 'https://faros.media',
            'og_type' => 'website',
            'og_site_name' => 'FAROS',
        ]);

        Seo::create([
            'seable_type' => 'App\Models\Page',
            'seable_id' => route('articles.index'),
            'meta_title' => 'Материалы по маркетингу, digital, ORM и SERM от агентства с именем',
            'meta_description' => 'Статьи, материалы, лайфхаки, гайды и инструкции по маркетингу и управлению репутацией от агентства Faros.Media',
            'meta_keywords' => 'менеджеры по управлению репутацией, модераторы',
            'canonical' => 'https://faros.media',
            'og_title' => 'Материалы по маркетингу, digital, ORM и SERM от агентства с именем',
            'og_description' => 'Статьи, материалы, лайфхаки, гайды и инструкции по маркетингу и управлению репутацией от агентства Faros.Media',
            'og_url' => 'https://faros.media',
            'og_type' => 'website',
            'og_site_name' => 'FAROS',
        ]);

        Seo::create([
            'seable_type' => 'App\Models\Page',
            'seable_id' => route('video.index'),
            'meta_title' => 'Агентство Faros.Media - управление репутацией и восприятием с 2016 года | Видео',
            'meta_description' => 'Мы в эфире',
            'meta_keywords' => 'Мы в эфире',
            'canonical' => 'https://faros.media',
            'og_title' => 'Видео',
            'og_description' => 'Мы в эфире',
            'og_url' => 'https://faros.media',
            'og_type' => 'website',
            'og_site_name' => 'FAROS',
        ]);

        Seo::create([
            'seable_type' => 'App\Models\Page',
            'seable_id' => route('smi.index'),
            'meta_title' => 'Агентство Faros.Media - управление репутацией и восприятием с 2016 года | СМИ',
            'meta_description' => 'СМИ',
            'meta_keywords' => 'СМИ',
            'canonical' => 'https://faros.media',
            'og_title' => 'СМИ',
            'og_description' => 'СМИ',
            'og_url' => 'https://faros.media',
            'og_type' => 'website',
            'og_site_name' => 'FAROS',
        ]);

        Seo::create([
            'seable_type' => 'App\Models\Page',
            'seable_id' => route('pay.index'),
            'meta_title' => 'Агентство Faros.Media - управление репутацией и восприятием с 2016 года | Оплата',
            'meta_description' => 'Оплата',
            'meta_keywords' => 'Оплата',
            'canonical' => 'https://faros.media/pay',
            'og_title' => 'Оплата',
            'og_description' => 'Оплата',
            'og_url' => 'https://faros.media/pay',
            'og_type' => 'website',
            'og_site_name' => 'FAROS',
        ]);
    }
}
