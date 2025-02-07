<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallRequest extends Model
{
    protected $guarded = [];
    protected $casts = [
        'service_type' => 'array',
        'problem' => 'array'
    ];
    const SERVICE_TYPE = [
        1 => "комплексный ORM",
        2 => "работа с Яндекс/Google-картами",
        3 => "комплексный SERM",
        4 => "PR",
        5 => "аналитика и стратегия",
        6 => "просто поработать с отзывами",
        7 => "корпоративное обучение репутационному менеджменту",
        8 => "ситуация на Otzovik, Irecommend и других сайтах",
    ];

    const PROBLEM = [
        1 => "репутационный кризис",
        2 => "проблемы HR-бренда",
        3 => "снижение выручки и уровня продаж",
        4 => "низкая узнаваемость",
        5 => "вывод нового продукта на рынок",
        6 => "корректировка восприятия и стереотипов"
    ];

    public function getService()
    {
        $selectedServices = array_intersect_key(self::SERVICE_TYPE, array_flip($this->service_type ?? []));
        return implode(', ', $selectedServices);
    }

    public function getProblem()
    {
        $selectedProblems = array_intersect_key(self::PROBLEM, array_flip($this->problem ?? []));
        return implode(', ', $selectedProblems);
    }
}
