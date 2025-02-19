@extends('layouts.app')
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
            <img srcset="../images/min/team/teamBG_small.png 320w, ../images/min/team/teamBG.png 768w" alt="Faros Media" src="../images/min/team/teamBG.png">

        </picture>
    </div>

    <div class="team">
        @foreach($teams as $team)
            @php $counter++; @endphp
        <div class="team__item">
            @if($counter == 1)
            <picture class="team__item__imgSecondWrap">
                <img class="team__item__imgSecondWrap__img" src="/upload/iblock/pencil.png" alt="Faros Media">
            </picture>
            @endif
            <picture class="team__item__pic">
                <img src="{{$team->img}}" alt="Faros Media">
            </picture>

            <div class="team__item__data">
                <div class="team__item__data__peop">
                    @if($team->has_detail == true)
                    <a href="{{route('team.show', $team->slug)}}" class="team__item__data__peop__name">{{$team->name}}</a>
                    @else
                    <p class="team__item__data__peop__name">{{$team->name}}</p>
                    @endif
                    <p class="team__item__data__peop__post">{{$team->list_post}}</p>
                </div>

                <p class="team__item__data__descr">{!! $team->list_text !!}</p>

                <div class="team__item__data__soc">
                    @if($team->instagram)
                        <!--noindex--><a  href="{{$team->instagram}}"  target="_blank"
                                          class="team__item__data__soc__link" rel="nofollow">
                            <img src="../images/min/team/insta.svg" alt="Faros Media" class="team__item__data__soc__ico">
                        </a><!--/noindex-->
                    @endif
                    @if($team->email)
                    <a href="mailto:{{$team->email}}" class="team__item__data__soc__link">
                        <img src="../images/min/team/mail.svg" alt="Faros Media" class="team__item__data__soc__ico">
                    </a>
                    @endif
                </div>
            </div>

            <div class="grow-full"></div>
            @if($counter == 2)
                <picture class="team__item__imgFirstWrap">
                    <img class="team__item__imgFirstWrap__img" src="/upload/iblock/star.webp" alt="Faros Media">
                </picture>
            @endif
        </div>
        @endforeach
    </div>
@endsection
