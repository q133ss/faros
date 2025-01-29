<?php

namespace Database\Seeders;

use App\Models\Author;
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
    private string $EkaterinaID;
    private string $AnnaID;

    public function __construct()
    {
        $this->EkaterinaID = Author::where('slug', 'ekaterina-tulyankina')->pluck('id')->first();
        $this->AnnaID = Author::where('slug', 'anna-timofeeva')->pluck('id')->first();
    }

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
            if ($case['Title'] == 'SMM-прокачка мирового бренда подгузников в соцсетях') {
                $type = 'double';
            } else {
                $type = 'default';
            }

            $formattedImg = basename(rawurldecode($case['Image']));
            switch ($formattedImg) {
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
            switch ($formattedLogo) {
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

            if ($color != null) {
                if ($color[0] !== '#') {
                    $color = '#' . $color;
                }
            }

            $clientCaseData = [
                'list_name' => $case['Title'],
                'logo' => $case['Logo'] != '' ? '/images/case/' . $formattedLogo : null,
                'list_img' => '/images/case/' . $formattedImg,
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
                $clientCaseData['img'] = '/images/case/' . basename($caseDetail['Image']);
                $clientCaseData['text'] = substr(str_replace('<div class="author1__partCont">', '', $caseDetail['Text']), 0, -6);
                $clientCaseData['created_at'] = Carbon::parse($caseDetail['Date']);

                $clientCase = ClientCase::create($clientCaseData);

                # Добавляем теги
                foreach (explode(', ', $case['Tags']) as $unformattedTag) {
                    $tag = CaseTag::where('name', str_replace('#', '', $unformattedTag))->first();
                    if ($tag) {
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
        ClientCase::find(3)->update([
            'text_color' => '#6b2421'
        ]);
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


        // Author comments
        ClientCase::find(3)->update($this->authorComment('lena', 'Нам было интересно вжиться в роль мамы и ребенка, который бы тыкал пальчиком на яркую упаковку на полке. Считаем, что и нейминг, и визуал получились на 100%!'));
        ClientCase::find(27)->update($this->authorComment('anna', 'Детские товары - особое направление репутационного и smm-маркетинга. Ведь необходимо не только привлечь аудиторию, но и сформировать у нее ощущение безопасности, заботы и качества для ребенка '));
        ClientCase::find(5)->update($this->authorComment('anna', 'Проект "Дизайн карьеры" действительно уникальный и очень интересный: ребята работают в поле несформированного спроса и являются евангелистами в области профориентации подростков. Сложность нашей работы была в необходимости объединить интересы нескольких социальных групп в одном наименовании.'));
        ClientCase::find(6)->update($this->authorComment('katya', 'Особенностью этого проекта стоит считать то, что мы оказывали консультационные услуги - разрабатывали механику, корректировали стратегию, давали рекомендации по присутствию в соцсетях, оформлению и продвижению, контролировали работу сотрудника клиента, а не реализовывали все сами.'));
        ClientCase::find(8)->update($this->authorComment('katya', 'Почему мы разобрали эту ситуацию? - потому что рынок smm агентств (несмотря на то, что уже не слишком новый) полон дилетантов ввиду отсутствия единых стандартов оценки работы и результата. И нам часто задают вопрос: "Вас там всего 10 человек сидит, а стоимость у вас не самая низкая". Разбор, который мы представили, частичный отвечает на вопрос, из чего формируется стоимость.'));

        ClientCase::find(9)->update($this->authorComment('anna', 'Нам очень хотелось помочь владельцам музыкальной школы, так как мы видели, как они стараются и радеют за свое дело. Но мы понимали, что какой-то классический подход с абонентской платой не принесет им немедленного эффекта.'));
        ClientCase::find(10)->update($this->authorComment('masha', 'Графичность и четкость линий логотипа, который в итоге получился, подчеркивают серьезность и фундаментальность компании, а также дают отсылку к чертежам, которые являются основой основ любого дизайн-проекта помещения.'));
        ClientCase::find(11)->update($this->authorComment('katya', 'Отказать клиенту со стороны - можно, но отказать своим партнерам - недопустимо! Конечно, можно было бы сделать лучший результат, если бы было больше времени, но я довольна тем, что получилось. Стоимость участника обошлась в 415 рублей.'));
        ClientCase::find(15)->update($this->authorComment('lena', 'Маркетинг аптек и фармпрепаратов - специфичное направление, которое еще и ограничено законодательными нормами, в том числе поэтому крайне важно, насколько креативно и творчески вы подходите к оформлению контента.'));
        ClientCase::find(16)->update($this->authorComment('lena', 'Кейс по МГТС также интересен тем, что нам пришлось разворачивать полноценную виртуальную машину. То есть, это уже нечто новое - на стыке коммуникаций и IT. Жаль, что нельзя раскрыть все детали решения.'));
        ClientCase::find(18)->update($this->authorComment('lena', 'Это был действительно сложный проект по ребрендингу и полной маркетинговой упаковке компании и ее продуктов. Успех любого кейса - обратная связь от клиента, четко сформулированные пожелания. Здесь, к сожалению, этого не хватило.'));
        ClientCase::find(19)->update($this->authorComment('lena', 'Когда компания вкладывается в действительно качественный контент, аудитория обязательно благодарит ее своей активностью и лояльностью.'));
        ClientCase::find(20)->update($this->authorComment('anna', 'Это был непростой опыт smm-продвижения для диет и похудательных препаратов. Ведь идейный вдхновитель и основатель этого продукта - авторитетная медиа-личность с уверенным характером и четким видением всех процессов. Мы были рады оправдать ожидания.'));
        ClientCase::find(22)->update($this->authorComment('katya', 'В тот момент, когда на форумах стали появляться явные адепты других управляющих компаний, которые стремились к организации смены УК, нашими агентами были проведены расследования, доказывающие аффилированность агитаторов.'));
    }
    private function authorComment(string $author, string $comment): array
    {
        switch ($author){
            case 'lena':
                return [
                    'author_img' => '/images/case/lena.webp',
                    'author_name' => 'Лена Медведева',
                    'author_post' => 'Руководитель отдела имиджевых коммуникаций',
                    'author_quote' => $comment
                ];
            case 'anna':
                return [
                    'author_img' => '/images/case/IMG_3502.webp',
                    'author_name' => 'Анна Тимофеева',
                    'author_post' => 'Руководитель отдела имиджевых коммуникаций',
                    'author_id' => $this->AnnaID,
                    'author_quote' => $comment
                ];
            case 'katya':
                return [
                    'author_img' => '/images/case/IMG_7470.webp',
                    'author_name' => 'Екатерина Тулянкина',
                    'author_post' => 'основатель и руководитель агентства Faros.Media',
                    'author_id' => $this->EkaterinaID
                ];
            case 'masha':
                return [
                    'author_img' => '/images/case/webpc-passthru (3).webp',
                    'author_name' => 'Мария Логвинова',
                    'author_post' => 'дизайнер агентства Faros.Media',
                    'author_id' => $this->EkaterinaID
                ];
            default:
                return [];
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
