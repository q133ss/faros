@extends('layouts.app')
@section('title', 'Агентство по управлению репутацией и восприятием брендов Faros.Media сотрудники, команда')
@section('content')
    <div class="fullHeightBigDarkBlock _bgBlack6 _first fullHeightBigDarkBlock_teamFirst">
        <h1 class="fullHeightBigDarkBlock__title fullHeightBigDarkBlock__title_team _colorWhite"><span
                class="_colorYellow">Faros.Media</span> - команда профессионалов в сфере управления восприятия
            бренда</h1>


        <p class="fullHeightBigDarkBlock__subtitle _colorWhite">Мы знаем как достичь эффективности при продвижении
            Ваших
            проектов.</p>

        <picture class="fullHeightBigDarkBlock__pic fullHeightBigDarkBlock__pic_team">
            <source type="image/webp" srcset="/images/min/team/teamBG.webp" media="(min-width: 769px)">
            <source type="image/webp" srcset="/images/min/team/teamBG_small.webp">
            <img srcset="../images/min/team/teamBG_small.png 320w, ../images/min/team/teamBG.png 768w" src="../images/min/team/teamBG.png">

        </picture>
    </div>

    <div class="team">
        <div class="team__item">
            <picture class="team__item__imgSecondWrap">
                <img class="team__item__imgSecondWrap__img" src="http://faros.media/upload/iblock/23b/l5zvhju4341c0mklxr5xjk3lp4xvdhip/%D0%A0%E2%80%98%D0%A0%C2%B5%D0%A0%C2%B7%20%D0%A0%D0%85%D0%A0%C2%B0%D0%A0%C2%B7%D0%A0%D0%86%D0%A0%C2%B0%D0%A0%D0%85%D0%A0%D1%91%D0%A1%D0%8F%20(284%D0%92%C2%A0%D0%93%E2%80%94%20226%D0%92%C2%A0%D0%A0%D1%97%D0%A0%D1%91%D0%A0%D1%94%D0%A1%D0%83.)-11.png">
            </picture>
            <picture class="team__item__pic">
                <img src="../upload/iblock/3c1/2uslay8qo2cbqcidhgu44k0g2gnkwull/IMG_7470.jpg">
            </picture>

            <div class="team__item__data">
                <div class="team__item__data__peop">
                    <a href="{{route('team.show', 'ekaterina-tulyankina')}}" class="team__item__data__peop__name">Екатерина Тулянкина</a>
                    <p class="team__item__data__peop__post">Основатель и руководитель агентства Faros.Media</p>
                </div>

                <p class="team__item__data__descr">Верить в себя, в свою команду и в качество того, что ты делаешь — вот в чем залог успеха. Мы не стремимся стать гигантами, выполняющими на конвейере проекты по репутационному менеджменту (ORM/SERM/PR).&nbsp; <br>
                    Наша задача — качественно улучшить показатели вашего бизнеса: обеспечить рост продаж, увеличить средний чек, сформировать лояльность потребителя. Мы помогаем корректировать и формировать восприятие, которое создает эмоциональную и рациональную привязку потребителя и продукта.&nbsp;<br></p>

                <div class="team__item__data__soc">
                    <a href="mailto:kt@faros.media" class="team__item__data__soc__link">
                        <img src="../images/min/team/mail.svg" class="team__item__data__soc__ico">
                    </a>
                </div>
            </div>

            <div class="grow-full"></div>
        </div>
        <div class="team__item">
            <picture class="team__item__pic">
                <img src="../upload/iblock/e90/l3h1aacnc828vrb8wvluvihla4u5fxia/IMG_3502.JPG">
            </picture>

            <div class="team__item__data">
                <div class="team__item__data__peop">
                    <a href="{{route('team.show', 'anna-timofeeva')}}" class="team__item__data__peop__name">Анна Тимофеева</a>
                    <p class="team__item__data__peop__post">Руководитель комплексных проектов</p>
                </div>

                <p class="team__item__data__descr">Когда работа – хорошо оплачиваемое хобби, то каждый шаг пропитан твоей любовью, энергией и только в этом случае ценен и имеет значение. Все остальное - пустая трата времени. Мне бы хотелось, чтобы у всех людей на свете была любимая работа, тогда бы все, что производится в мире, как товары, так и услуги, было бы наивысшего качества!<br />
                </p>

                <div class="team__item__data__soc">
                    <!--noindex--><a  href="https://instagram.com/anutacandy"  target="_blank"
                                      class="team__item__data__soc__link" rel="nofollow">
                        <img src="../images/min/team/insta.svg" class="team__item__data__soc__ico">
                    </a><!--/noindex-->
                    <a href="mailto:anna@faros.media" class="team__item__data__soc__link">
                        <img src="../images/min/team/mail.svg" class="team__item__data__soc__ico">
                    </a>
                </div>
            </div>

            <div class="grow-full"></div>
            <picture class="team__item__imgFirstWrap">
                <img class="team__item__imgFirstWrap__img" src="http://faros.media/upload/iblock/53c/ptoem6f7t5mva6ipevoeyp4j265nicx6/%D0%A0%E2%80%98%D0%A0%C2%B5%D0%A0%C2%B7%20%D0%A0%D0%85%D0%A0%C2%B0%D0%A0%C2%B7%D0%A0%D0%86%D0%A0%C2%B0%D0%A0%D0%85%D0%A0%D1%91%D0%A1%D0%8F%20(284%D0%92%C2%A0%D0%93%E2%80%94%20226%D0%92%C2%A0%D0%A0%D1%97%D0%A0%D1%91%D0%A0%D1%94%D0%A1%D0%83.)-6.png">
            </picture>
        </div>
        <div class="team__item">
            <picture class="team__item__pic">
                <img src="../upload/iblock/ba4/s7vczh3nh2bjkvrlnxy06fdukv5fg014/photo_2022-02-02&#32;16.25.39.jpeg">
            </picture>

            <div class="team__item__data">
                <div class="team__item__data__peop">
                    <p class="team__item__data__peop__name">Дмитрий Тедиков</p>
                    <p class="team__item__data__peop__post">менеджер проектов ORM/SERM</p>
                </div>

                <p class="team__item__data__descr">Девиз по жизни - &quot;мои мечты не работают, пока я не работаю&quot;. Так заработался, что даже не заметил, как уже второй год пошел в Faros.Media.<br />
                    <br />
                    Считаю себя простым человеком с низким культурным уровнем. Имею политологическое образование, в студенческие годы очень нравились темы политических технологий в киберпространстве, политическая компаративистика и психология. Сейчас в свободное время отдаю предпочтение зарубежной литературе 19-20 вв. Занимаюсь спортом: баскетболом, легкой атлетикой и бегом на дальние дистанции. Несмотря на спортивный образ жизни, активно увлекаюсь кальянной культурой в России и всем, что с ней связано.</p>

                <div class="team__item__data__soc">
                </div>
            </div>

            <div class="grow-full"></div>
        </div>
    </div>
@endsection
