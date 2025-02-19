@foreach($articles as $article)
    <div class="newsMiniBlock _bgWhite material-item">
        <picture class="newsMiniBlock__pic">
            <a href="{{route('articles.show', $article->slug)}}">
                <img src="{{$article->list_img}}" title="Faros Media" alt="Faros Media">
            </a>
        </picture>

        <div class="newsMiniBlock__cont">
            <div class="newsMiniBlock__cont__links">
            </div>

            <p class="newsMiniBlock__cont__tit _colorBlack"><a
                    href="{{route('articles.show', $article->slug)}}">{{$article->list_name}}</a></p>
            <div class="grow-full"></div>
            <a href="{{route('team.show', $article->author?->slug)}}"
               class="newsMiniBlock__cont__name _colorBlue">{{$article->author?->name}}</a>
        </div>
    </div>
@endforeach
