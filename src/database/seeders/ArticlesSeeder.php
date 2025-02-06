<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use App\Models\Author;
use App\Models\CaseTag;
use App\Models\Seo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            "Аудитория",
            "блогеры",
            "Контент-маркетинг",
            "Маркетинг",
            "эффективность",
            "smm",
            "конкуренты",
            "web-сайт",
            "дизайн",
            "прототип",
            "инфографика",
            "KPI",
            "рассылки",
            "аналитика",
            "соцсети",
            "контент-маркетинг",
            "личный бренд",
            "Instagram",
            "маркетинговые исследования",
            "анализ спроса и восприятия",
            "отзыв",
            "маркет-плейс",
            "инструкция для потребителей",
            "квизы",
            "quiz-маркетинг",
            "опросы",
            "коммуникации",
            "сервис",
            "вконтакте",
            "рейтинг",
            "культура отмены",
            "поведение потребителя",
            "как удалить негатив",
            "обратная связь",
            "Репутация",
            "NPS",
            "баланс",
            "Бизнес",
            "деловая репутация",
            "микроэкономика",
            "финансовая отчетность",
            "психология восприятия",
            "маркетинговые приемы",
            "влияние на потребителя",
            "лайфхаки для бизнеса",
            "лидеры мнений",
            "работа с блогерами",
            "доверие клиентов",
            "лояльность потребителей",
            "конверсия",
            "FarosMedia",
            "управление репутацией",
            "Сайт",
            "tripadvisor",
            "smm-щик",
            "digital",
            "digital профессии",
            "Маркетинг влияния",
            "Бренд-менеджмент",
            "instastories",
            "Статистика",
            "чат-бот",
            "обзор",
            "b2b",
            "стратегия",
            "стимулирование сбыта",
            "Сегментация ЦА",
            "Образование",
            "tone of voice бренда",
            "Вимм-Билль-Данн",
            "Stories",
            "GoogleAnalytics",
            "YandexMetrika",
            "Веб-аналитика",
            "Контекстная реклама",
            "Показатель отказов",
            "Facebook",
            "shadowban",
            "Зарубежный опыт",
            "Персонализация сайта",
            "Скорость загрузки",
            "CPC",
            "GoogleAdwords",
            "YandexDirect",
            "КМС",
            "РСЯ",
            "Telegram",
            "Таргетированная реклама",
            "персонализация",
            "SEO",
            "лайки",
            "реклама",
            "лендинг",
            "лучшие подрядчики по ORM",
            "рейтинг агентств по репутации",
            "таргетинг",
            "вовлеченность",
            "HR-бренд",
            "Отзывы сотрудников#стратегия",
            "необычные аксессуары",
            "продвижение интернет-магазина",
            "гайды в соцсетях",
            "бизнес-идеи",
            "алгоритмы соцсетей",
            "для smm-щика",
            "нивелирование негатива",
            "регламенты"
        ];

        foreach ($tags as $tag){
            ArticleTag::create(['name' => $tag]);
        }

        // Импорт данных
        $artList = $this->readCsv('database/seeders/data/detailed_articles_data.csv');
        foreach ($artList as $case) {
            $case = array_combine(
                array_map(fn($key) => trim($key, "\u{FEFF}"), array_keys($case)),
                $case
            );

            // Создаем запись в таблице client_cases
            $replaceSlug = str_replace('https://faros.media/articles', '', $case['link']);
            $slug = str_replace('/', '', $replaceSlug);
            $authorSlug = str_replace('/', '', str_replace('https://faros.media/authors/', '', $case['author_link']));



            $full_list_img = $case['list_img'];
            $relative_list_img = str_replace('https://faros.media', '', $full_list_img);
            $decoded_list_img = urldecode($relative_list_img);

            $full_url = $case['img_url'];
            $relative_url = str_replace('https://faros.media', '', $full_url);
            $decoded_url = urldecode($relative_url);

            $content_list = $case['content_list'];
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML(mb_convert_encoding($content_list, 'HTML-ENTITIES', 'UTF-8'));
            libxml_clear_errors();
            $xpath = new \DOMXPath($dom);
            $a_elements = $xpath->query('//ul/li/a');
            $content_list_arr = [];
            foreach ($a_elements as $a) {
                $content_list_arr[] = [
                    'text' => trim($a->textContent), // Текст заголовка
                    'href' => $a->getAttribute('href'), // Значение атрибута href
                    'id' => $a->getAttribute('id') // Значение атрибута id
                ];
            }

            $data = [
                'list_name' => $case['list_name'],
                'slug' => $slug,
                'content_list' => json_encode($content_list_arr),
                'author_id' => $this->getAuthorBySlug($authorSlug),
                'post_name' => $case['post_title'],
                'created_at' => Carbon::parse($case['date']),
                'pre_title' => $case['preheader'],
                'content' => $case['article_text'],
                'views' => $case['views'],
                'list_img' => $decoded_list_img,
                'img' => $decoded_url
            ];

            // category
            if($case['category'] != null){
                $category = ArticleCategory::firstOrCreate(['name' => $case['category']]);
                $data['category_id'] = $category->id;
            }

            try{
                $article = Article::create($data);
            }catch (\Exception $exception){
                dd($exception);//dd($case['list_name']);
            }

            # Добавляем теги
            if(!empty($case['tags'])) {
                foreach (explode('|', $case['tags']) as $unformattedTag) {
                    $tag = CaseTag::where('name', str_replace('#', '', $unformattedTag))->first();
                    if ($tag) {
                        DB::table('articles_tag')->insert([
                            'article_id' => $article->id,
                            'tag_id' => $tag->id
                        ]);
                    }
                }
            }

            # Создаем SEO
            Seo::create([
                'seable_type' => Article::class,
                'seable_id' => $article->id,
                'meta_title' => $case['og_title'],
                'meta_description' => $case['meta_description'],
                'meta_keywords' => $case['meta_keywords'],
                'canonical' => $case['canonical'],
                'og_title' => $case['og_title'],
                'og_description' => $case['og_description'],
                'og_url' => $case['og_url'],
                'og_type' => $case['og_type'],
                'og_site_name' => $case["og_site_name"],
                'og_image' => $case['og_image'],
                'og_image_type' => $case["og_image_type"],
                'og_image_width' => $case["og_image_width"],
                'og_image_height' => $case["og_image_height"],
                'vk_image' => $case['vk_image'],
            ]);
        }

    }

    /**
     * Чтение данных из CSV файла.
     */
    private function readCsv($filePath)
    {
        if (!file_exists($filePath)) {
            throw new \Exception("File not found: $filePath");
        }

        $handle = fopen($filePath, 'r');
        if ($handle === false) {
            throw new \Exception("Failed to open file: $filePath");
        }

        $header = fgetcsv($handle);
        if ($header === false) {
            fclose($handle);
            return [];
        }

        $result = [];
        while (($row = fgetcsv($handle)) !== false) {
            // Пропускаем строки, где количество элементов не совпадает с заголовком
            if (count($row) !== count($header)) {
                continue;
            }
            $result[] = array_combine($header, $row);
        }

        fclose($handle);

        return $result;
    }

    private function getAuthorBySlug(string $slug) {
        $author = Author::where('slug', $slug);
        if($author->exists()){
            return $author->pluck('id')->first();
        }
        return null;
    }
}
