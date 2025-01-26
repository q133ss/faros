<?php

namespace Database\Seeders;

use App\Models\CaseTag;
use App\Models\ClientCase;
use App\Models\Seo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use function Symfony\Component\String\b;

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

            $formattedImg = basename(rawurldecode($case['Image']));
            switch ($formattedImg){
                case 'Frame 6356735 (1).webp':
                    $formattedImg = 'Frame6356735.png';
                    break;
                case 'эльбрус дом.webp':
                    $formattedImg = 'эльбрус дом.png';
                    break;
                case 'medicine-capsules-3d-rendering-isolated_75891-1068-benzin-preview.png':
                    $formattedImg = 'medicine-capsules-3d-rendering-isolated_75891-1068-benzin-preview.webp';
                    break;
                case 'istockphoto-1325168727-612x612-benzin-preview.png':
                    $formattedImg = 'istockphoto-1325168727-612x612-benzin-preview.webp';
                    break;
                case '3d-hand-holding-a-dish-with-a-lid-serving-hot-dishes-isolated-3d-rendering_468651-61-benzin-preview.png':
                    $formattedImg = '3d-hand-holding-a-dish-with-a-lid-serving-hot-dishes-isolated-3d-rendering_468651-61-benzin-preview.webp';
                    break;
                case 'lego-benzin-preview.png':
                    $formattedImg = 'lego-benzin-preview.webp';
                    break;
            }

            $formattedLogo = basename(rawurldecode($case['Logo']));
            switch ($formattedLogo){
                case 'логотип getresponse.webp':
                    $formattedLogo = 'logo_getresponse.png';
                    break;
                case 'эльбрус лого.webp':
                    $formattedLogo = 'эльбрус лого.png';
                    break;
                case 'vilon.png':
                    $formattedLogo = 'vilon.webp';
                    break;
            }

            $color = $case['Background Color'];

            if($color != null) {
                if ($color[0] !== '#') {
                    $color = '#' . $color;
                }
            }

            $clientCaseData = [
                'list_name' => $case['Title'],
                'logo' => $case['Logo'] != '' ?'/images/case/'.$formattedLogo : null,
                'list_img' => '/images/case/'.$formattedImg,
                'slug' => $slug,
                'bg_color' => $color,
                'type' => $type
            ];

            #todo проверить контент у "Продвижение бренда детских колясок и товаров INGLESINA"
            # todo там половины фоток нету!

            // Найти соответствующую детальную информацию по полю 'slug'
            $caseDetail = $this->findCaseDetail($casesDetails, $slug);

            if ($caseDetail) {
                $clientCaseData['post_name'] = $caseDetail['Title'];
                $clientCaseData['img'] = '/images/case/'.basename($caseDetail['Image']);
                $clientCaseData['text'] = substr(str_replace('<div class="author1__partCont">', '',$caseDetail['Text']), 0, -6);
                $clientCaseData['created_at'] = Carbon::parse($caseDetail['Date']);

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

        ClientCase::where('id', '>=', 5)->increment('order');
        ClientCase::where('slug', 'smm-dlya-brenda-detskikh-tovarov-na-primere-podguznikov-libero')->update([
            'order' => 5,
            'bg_color' => '#fefffd',
            'text_color' => '#500b76'
        ]);

        // default === b9b9b9
        ClientCase::find(3)->update(['text_color' => '#6b2421']);
        ClientCase::find(4)->update(['text_color' => '#000000']);
        ClientCase::find(7)->update(['text_color' => '#fff']);
        ClientCase::find(7)->update(['text_color' => '#1a1a1a']);
        ClientCase::find(8)->update(['text_color' => '#fff']);
        ClientCase::find(9)->update(['text_color' => '#fff']);
        ClientCase::find(10)->update(['text_color' => '#fff']);
        ClientCase::find(12)->update(['text_color' => '#fff']);
        ClientCase::find(15)->update(['text_color' => '#afafaf']);
        ClientCase::find(16)->update(['text_color' => '#afafaf']);
        ClientCase::find(17)->update(['text_color' => '#afafaf']);
        ClientCase::find(18)->update(['text_color' => '#afafaf']);
        ClientCase::find(19)->update(['text_color' => '#afafaf']);
        ClientCase::find(20)->update(['text_color' => '#afafaf']);
        ClientCase::find(21)->update(['text_color' => '#afafaf']);
        ClientCase::find(22)->update(['text_color' => '#afafaf']);
        ClientCase::find(23)->update(['text_color' => '#afafaf']);
        ClientCase::find(24)->update(['text_color' => '#afafaf']);
        ClientCase::find(25)->update(['text_color' => '#ffffff']);
        ClientCase::find(25)->update(['text_color' => '#000000']);
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
