@foreach($articles as $post)
    <div class="newsMiniBlock _bgWhite allarticles__newsMiniBlock " >

        <picture class="newsMiniBlock__pic">
            <a href="{{route('articles.show', $post->slug)}}">
                <img src="{{$post->list_img}}" title="Faros Media" alt="Faros media">
            </a>
        </picture>


        <div class="newsMiniBlock__cont">
            <div class="newsMiniBlock__cont__links">
                @if($post->category)
                    <div class="newsMiniBlock__cont__links">
                        <li class="horizMenu__menu__item" data-order="0">
                            <a href="?category={{$post->category?->id}}"
                               class="horizMenu__menu__item__link"
                               data-id="8">{{$post->category?->name}}</a>
                        </li>
                    </div>
                @endif
            </div>

            <p class="newsMiniBlock__cont__tit _colorBlack"><a
                    href="{{route('articles.show', $post->slug)}}">{{$post->list_name}}</a></p>
            <div class="grow-full"></div>

            <a href="{{route('team.show', $post->author?->slug)}}"
               class="newsMiniBlock__cont__name _colorBlue">{{$post->author?->name}}</a>
        </div>
    </div>
@endforeach
