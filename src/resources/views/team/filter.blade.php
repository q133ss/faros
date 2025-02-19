@foreach($articles as $post)
    <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item material-tag-6">
        <picture class="newsMiniBlock__pic">
            <a href="{{route('articles.show', $post->slug)}}">
                <img src="{{$post->list_img}}" alt="Faros Media">
            </a>
        </picture>

        <div class="newsMiniBlock__cont">
            @if($post->category)
                <div class="newsMiniBlock__cont__links">
                    <a href="{{route('articles.index')}}?category={{$post->category_id}}" class="newsMiniBlock__cont__links__part">{{$post->category?->name}}</a>
                </div>
            @endif

            <p class="newsMiniBlock__cont__tit _colorBlack">
                <a href="{{route('articles.show', $post->slug)}}">{{$post->list_name}}</a>
            </p>

            <div class="grow-full"></div>

            <a href="{{route('team.show', $post->author?->slug)}}" class="newsMiniBlock__cont__name _colorBlue">{{$post->author?->name}}</a>
        </div>
    </div>
@endforeach
