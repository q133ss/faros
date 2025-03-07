@if(!isset($post))
@php
$currentUrl = url()->current();
$seo = \App\Models\Seo::where('seable_id', $currentUrl)->first();
@endphp
@if($seo)
    <title>{{$seo->meta_title}}</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="{{$seo->meta_keywords}}" />
    <meta name="description" content="{{$seo->meta_description}}" />
    <link rel="canonical" href="{{$seo->canonical}}" />
    <meta property="og:type" content="{{$seo->og_type}}" />
    <meta property="og:site_name" content="{{$seo->og_site_name}}" />

    <meta property="og:url" content="{{$seo->og_url}}" />
    <meta property="og:title" content="{{$seo->og_title}}" />
    <meta property="og:description" content="{{$seo->og_description}}" />

    <meta property="og:image" content="{{$seo->og_image}}" />
    <meta property="og:image:type" content="{{$seo->og_image_type}}" />
    <meta property="og:image:width" content="{{$seo->og_image_width}}" />
    <meta property="og:image:height" content="{{$seo->og_image_height}}" />
    <meta property="vk:image" content="{{$seo->vk_image}}" />
@else
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Faros, Работа с репутацией, формирование и корректировка восприятия и стереотипов" />
    <meta name="description" content="Комплекс услуг по мониторингу, анализу и формированию деловой репутации компаний и персон. Репутационный менеджмент на высоком уровне качества" />
    <link rel="canonical" href="https://faros.media/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="FAROS" />
    <meta property="og:url" content="https://faros.media" />
    <meta property="og:title" content="Агентство Faros.Media - управление репутацией и восприятием с 2016 года" />
    <meta property="og:description" content="Комплекс услуг по мониторингу, анализу и формированию деловой репутации компаний и персон. Репутационный менеджмент на высоком уровне качества" />
    <!-- dev2fun module opengraph -->
    <meta property="og:title" content="Агентство Faros.Media - управление репутацией и восприятием с 2016 года"/>
    <meta property="og:description" content="Работа с репутацией, формирование и корректировка восприятия и стереотипов"/>
    <meta property="og:url" content="https://faros.media/"/>
    <meta property="og:type" content="website"/>
    <!-- /dev2fun module opengraph -->
@endif
@else
    <title>{{$post->seo?->meta_title}}</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="{{$post->seo?->meta_keywords}}" />
    <meta name="description" content="{{$post->seo?->meta_description}}" />
    <link rel="canonical" href="{{$post->seo?->canonical}}" />
    <meta property="og:type" content="{{$post->seo?->og_type}}" />
    <meta property="og:site_name" content="{{$post->seo?->og_site_name}}" />

    <meta property="og:url" content="{{$post->seo?->og_url}}" />
    <meta property="og:title" content="{{$post->seo?->og_title}}" />
    <meta property="og:description" content="{{$post->seo?->og_description}}" />

    <meta property="og:image" content="{{$post->seo?->og_image}}" />
    <meta property="og:image:type" content="{{$post->seo?->og_image_type}}" />
    <meta property="og:image:width" content="{{$post->seo?->og_image_width}}" />
    <meta property="og:image:height" content="{{$post->seo?->og_image_height}}" />
    <meta property="vk:image" content="{{$post->seo?->vk_image}}" />
@endif
<link rel="preconnect" href="//api-maps.yandex.ru">
<link rel="dns-prefetch" href="//api-maps.yandex.ru">
<meta property="og:description" content="">

<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Функция для динамической загрузки скрипта
        function loadScript(src, callback) {
            const script = document.createElement('script');
            script.src = src;
            script.async = true;

            if (callback) {
                script.onload = callback;
            }

            document.body.appendChild(script);
        }

        // Отложенная загрузка через 3 секунды
        setTimeout(() => {
            // Загрузка Yandex.Metrika
            loadScript("https://mc.yandex.ru/metrika/tag.js", function () {
                window.ym = window.ym || function () {
                    (window.ym.a = window.ym.a || []).push(arguments);
                };
                window.ym.l = 1 * new Date();

                ym(47553889, "init", {
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    trackHash: true
                });
            });

            // Загрузка Google Analytics
            loadScript("https://www.googletagmanager.com/gtag/js?id=UA-89493693-1", function () {
                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }
                gtag('js', new Date());
                gtag('config', 'UA-89493693-1');
            });
            // zverushki
            window.Zverushki=window.Zverushki||{};window.Zverushki.Microm={"Breadcrumb":true,"Business":true,"Product":"Disabled","Article":false,"version":"2.2.1","format":{"json-ld":"Disabled","microdata":true},"execute":{"time":0,"scheme":{"Breadcrumb":null,"Business":null,"Article":null}}};
        }, 3000); // Задержка в 3 секунды
    });
</script>
