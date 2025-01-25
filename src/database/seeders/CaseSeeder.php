<?php

namespace Database\Seeders;

use App\Models\CaseTag;
use App\Models\ClientCase;
use App\Models\Seo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            "ORM",
            "Банк",
            "Нивелирование негатива",
            "Репутация",
            "Управление восприятием",
            "Бренд-менеджмент",
            "Нейминг",
            "деревянное строительство",
            "Кейсы по smm",
            "KPI",
            "Instagram",
            "лояльность к бренду",
            "Маркетинг",
            "Образование",
            "SMM",
            "Конкурсные механики",
            "Маркетинг-консалтинг",
            "Продвижение бренда",
            "Формирование спроса",
            "Языковая школа",
            "Корм для животных",
            "Лидогенерация",
            "Реклама в соцсетях",
            "ТГБ",
            "Девелопер",
            "Деревянное строительство",
            "Недвижимость",
            "Музыкальная школа",
            "кейсы по интерьерной тематике",
            "разработка фирменного стиля",
            "кейсы по образованию",
            "EDTECH",
            "аудит",
            "трафик из соцсетей",
            "дизайн в соцсетях",
            "маркетинг для фармы",
            "оформление постов",
            "продвижение аптек",
            "телеком",
            "репутация оператора",
            "b2b",
            "фарм маркетинг",
            "репутация бадов",
            "продвижение продуктов для похудения",
            "анализ спроса и восприятия",
            "Застройщик",
            "Недвижимость",
            "Управляющая компания",
            "управление репутацией банка",
            "продвижение бадов"
        ];

        foreach ($tags as $tag) {
            CaseTag::create([
                "name" => $tag
            ]);
        }


        // Парсим!

        // Чтение данных из CSV файлов
        $casesList = $this->readCsv('database/seeders/data/cases_list.csv');
        $casesDetails = $this->readDetails('database/seeders/data/cases_details.json');

        foreach ($casesList as $case) {
            $case = array_combine(
                array_map(fn($key) => trim($key, "\u{FEFF}"), array_keys($case)),
                $case
            );
            // Создаем запись в таблице client_cases
            $slug = str_replace('/', '', str_replace('/case/', '', $case['Link']));
            if($case['Title'] == 'SMM-прокачка мирового бренда подгузников в соцсетях'){
                $type = 'double';
            }else{
                $type = 'default';
            }

            $clientCaseData = [
                'list_name' => $case['Title'],
                'logo' => $case['Logo'],
                'list_img' => rawurldecode($case['Image']),
                'slug' => $slug,
                'bg_color' => $case['Background Color'],
                'type' => $type
            ];

            #todo проверить контент у "Продвижение бренда детских колясок и товаров INGLESINA"
            # todo там половины фоток нету!

            // Найти соответствующую детальную информацию по полю 'slug'
            $caseDetail = $this->findCaseDetail($casesDetails, $slug);

            if ($caseDetail) {
                $clientCaseData['post_name'] = $caseDetail['Title'];
                $clientCaseData['img'] = $caseDetail['Image'];
                $clientCaseData['text'] = substr(str_replace('<div class="author1__partCont">', '',$caseDetail['Text']), 0, -6);

                $clientCase = ClientCase::create($clientCaseData);

                # Добавляем теги
                foreach (explode(', ', $case['Tags']) as $unformattedTag) {
                    $tag = CaseTag::where('name', str_replace('#', '', $unformattedTag))->first();
                    if($tag){
                        DB::table('case_tag')->insert([
                            'case_id' => $clientCase->id,
                            'tag_id' => $tag->id
                        ]);
                    }
                }
                // Создаем запись в таблице seos

                Seo::create([
                    'seable_type' => ClientCase::class,
                    'seable_id' => $clientCase->id,
                    'meta_title' => $caseDetail["SEO"]['og:title'],
                    'meta_description' => $caseDetail["SEO"]['description'],
                    'meta_keywords' => $caseDetail["SEO"]['keywords'],
                    'canonical' => $caseDetail["SEO"]['canonical'],
                    'og_title' => $caseDetail["SEO"]['og:title'],
                    'og_description' => $caseDetail["SEO"]['og:description'],
                    'og_url' => $caseDetail["SEO"]['og:url'],
                    'og_type' => $caseDetail["SEO"]['og:type'],
                    'og_site_name' => $caseDetail["SEO"]["og:site_name"],
                    'og_image' => $caseDetail["SEO"]['og:image'],
                    'og_image_type' => $caseDetail["SEO"]["og:image:type"],
                    'og_image_width' => $caseDetail["SEO"]["og:image:width"],
                    'og_image_height' => $caseDetail["SEO"]["og:image:height"],
                    'vk_image' => $caseDetail["SEO"]['vk:image'],
                ]);
            }
        }
    }

    /**
     * Чтение данных из CSV файла.
     */
    private function readCsv($filePath)
    {
        $csvData = array_map('str_getcsv', file($filePath));
        $header = array_shift($csvData);
        return array_filter(array_map(function($row) use ($header) {
            // Пропускаем строки, где количество элементов не совпадает с заголовком
            if (count($row) !== count($header)) {
                return null;
            }
            return array_combine($header, $row);
        }, $csvData));
    }

    private function readDetails($filePath)
    {
        // Чтение содержимого JSON файла
        $jsonData = file_get_contents($filePath);

        // Декодирование JSON данных в массив
        $data = json_decode($jsonData, true);

        // Проверка на наличие ошибок при декодировании JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            dd(json_last_error_msg());
        }

        return $data;
    }

    /**
     * Найти детальную информацию по полю 'slug'.
     */
    private function findCaseDetail($casesDetails, $slug)
    {
        $normalizeSlug = 'https://faros.media/case/'.$slug.'/';
        foreach ($casesDetails as $detail) {
            if ($detail['Link'] === $normalizeSlug) {
                return $detail;
            }
        }
        return null;
    }
}
