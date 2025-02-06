@if(!isset($post))
@php
$currentUrl = url()->current();
$seo = \App\Models\Seo::where('seable_id', $currentUrl)->first();
@endphp
@if($seo)
    <title>{{$seo->meta_title}}</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="4 способа увеличить количество лидов из социальных сетей на сайте" />
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
    <meta name="keywords" content="4 способа увеличить количество лидов из социальных сетей на сайте" />
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

<script type="text/javascript">var _ba = _ba || []; _ba.push(["aid", "d4e4e5a0a85d485b74c9e5539d376e8e"]); _ba.push(["host", "faros.media"]); (function() {var ba = document.createElement("script"); ba.type = "text/javascript"; ba.async = true;ba.src = (document.location.protocol == "https:" ? "https://" : "http://") + "bitrix.info/ba.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ba, s);})();</script>


<link rel="preconnect" href="http://api-maps.yandex.ru/">
<link rel="dns-prefetch" href="http://api-maps.yandex.ru/">
<meta property="og:description" content="">

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(47553889, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        trackHash:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47553889" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-89493693-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-89493693-1');
</script>

<!-- Zverushki\Microm --><script data-skip-moving="true">window.Zverushki=window.Zverushki||{};window.Zverushki.Microm={"Breadcrumb":true,"Business":true,"Product":"Disabled","Article":false,"version":"2.2.1","format":{"json-ld":"Disabled","microdata":true},"execute":{"time":0,"scheme":{"Breadcrumb":null,"Business":null,"Article":null}}};</script><!-- end Zverushki\Microm -->
