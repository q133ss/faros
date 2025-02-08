<div class="articlesVidget">
    <p class="articlesVidget__tit">Популярные статьи </p>
    <div class="articlesVidget__body">
        @foreach(\App\Models\Article::take(7)->get() as $post)
        <div class="articlesVidget__body__item">
            <picture class="articlesVidget__body__item__pic">
                <img src="{{$post->list_img}}">
            </picture>

            <div class="articlesVidget__body__item__data">
                <a href="{{route('articles.show', $post->slug)}}"
                   class="articlesVidget__body__item__data__tit">{{$post->list_name}}</a>
                <a href="{{route('articles.index')}}?category={{$post->category?->id}}"
                   class="articlesVidget__body__item__data__link">{{$post->category?->name}}</a>
            </div>
        </div>
        @endforeach
    </div>
    <a href="{{route('articles.index')}}" class="arrow-link vidgets__arrow-link">
        <span class="arrow-link__text">Все статьи</span>
        <img src="/images/min/icons/yellowarrow.svg" alt="" class="arrow-link__arrow">
    </a>
</div>
