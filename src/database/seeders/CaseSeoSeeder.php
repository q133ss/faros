<?php

namespace Database\Seeders;

use App\Models\ClientCase;
use App\Models\Seo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaseSeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seoList = $this->readCsv('database/seeders/data/case_seo_data.csv');
        foreach ($seoList as $case) {
            $case = array_combine(
                array_map(fn($key) => trim($key, "\u{FEFF}"), array_keys($case)),
                $case
            );

            $slug = str_replace('/', '', str_replace('https://faros.media/case', '', $case['URL']));
            $clientCase = ClientCase::where('slug', $slug)->first();

            $data = [
                'seable_type' => ClientCase::class,
                'seable_id' => $clientCase->id,
                'meta_title' => $case['og:title'] ?? $case['og:title_1'] ?? null,
                'meta_description' => $case['meta:description'] ?? $case['meta_description'] ?? null,
                'meta_keywords' => $case['meta:keywords'] ?? $case['meta_keywords'] ?? null,
                'og_title' => $case['og:title'] ?? $case['og:title_1'] ?? null,
                'og_description' => $case['og:description'] ?? $case['og:description_1'] ?? null,
                'og_url' => $case['og:url'] ?? $case['og:url_1'] ?? null,
                'og_type' => $case['og:type'] ?? null,
                'og_site_name' => $case['og:site_name'] ?? null,
                'og_image' => $case['og:image'] ?? null,
                'og_image_type' => $case['og:image:type'] ?? null,
                'og_image_width' => $case['og:image:width'] ?? null,
                'og_image_height' => $case['og:image:height'] ?? null,
                'vk_image' => $case['vk:image'] ?? null,
            ];

            if($case['canonical']){
                $data['canonical'] = $case['canonical'];
            }

            Seo::create($data);
        }

        // Удаляем дубли!
        $this->command->info('Удаляю дубли!');

        $duplicates = Seo::where(function ($query) {
            $query->whereNull('canonical')
                ->orWhere('canonical', '');
        })->get();

        foreach ($duplicates as $duplicate) {
            // Проверяем, существует ли другая запись с тем же seable_id и canonical != null или canonical != ''
            if (Seo::where('seable_id', $duplicate->seable_id)
                ->where('seable_type', $duplicate->seable_type)
                ->where(function ($query) {
                    $query->whereNotNull('canonical')
                        ->where('canonical', '!=', '');
                })->exists()) {
                // Удаляем дубль с canonical = null или canonical = ''
                $duplicate->delete();
                $this->command->info("Deleted duplicate SEO record for seable_id: {$duplicate->seable_id}");
            }
        }

    }

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
}
