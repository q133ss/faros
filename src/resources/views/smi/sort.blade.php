@foreach($smi as $post)
    <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
        <a href="{{route('smi.show', $post->slug)}}">
            <picture class="newsMiniBlock__pic">
                <img src="{{$post->img}}" data-depth="0.6">
            </picture>
        </a>

        <div class="newsMiniBlock__cont">
            <p class="newsMiniBlock__cont__tit _colorBlack"><a
                    href="{{route('smi.show', $post->slug)}}">{!! $post->list_title !!}</a></p>
            <div class="grow-full"></div>
            @if($post->logo != '')
                <!--noindex--><a target="_blank" href="{{$post->source}}"  class="newsMiniBlock__cont__logo" rel="nofollow">
                    <picture class="newsMiniBlock__cont__logo__pic">
                        <img src="{{$post->logo}}" data-depth="0.6">
                    </picture>
                </a><!--/noindex-->
            @endif
        </div>
    </div>
@endforeach
