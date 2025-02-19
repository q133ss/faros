@foreach($mainCases as $case)
    @if($case->type == 'default')
        <div class="miniBlock _bgDarkBlue scene "
             style="background-color: {{$case->bg_color}}"
        >
            <div class="miniBlock__layer">
                <span class="miniBlock__layer__pic parallax">
                        <img src="{{$case->list_img}}" alt="Faros Media" data-depth="0.6">
                </span>
            </div>

            <div class="miniBlock__wrap">
                <span class="miniBlock__wrap__pic">
                    @if($case->logo != null)
                        <img src="{{$case->logo}}" alt="Faros Media">
                    @endif
                </span>

                <a href="{{route('case.show', $case->slug)}}" style="color: {{$case->text_color}}!important;" class="miniBlock__wrap__tit _colorWhite"
                >{{$case->list_name}}</a>
                <div class="miniBlock__wrap__hashWrap">
                    @foreach($case->tags as $tag)
                        <a href="{{route('case.index')}}"
                           class="miniBlock__wrap__hashWrap__link _colorSky"
                           style="color: #b9b9b9"
                        >#{{$tag->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    @elseif($case->type == 'double')
        <div class="miniBlock _bgDarkBlue scene miniBlock_double"
             style="background-color: {{$case->bg_color}}"
        >
            <div class="miniBlock__layer">
                <span class="miniBlock__layer__pic parallax">
                        <img src="{{$case->list_img}}" alt="Faros Media" data-depth="0.6">
                </span>
            </div>

            <div class="miniBlock__wrap">
                <span class="miniBlock__wrap__pic">
                    @if($case->logo != null)
                        <img src="{{$case->logo}}" alt="Faros Media">
                    @endif
                </span>
                <a href="{{route('case.show', $case->slug)}}" style="color: {{$case->text_color}}!important;" class="miniBlock__wrap__tit _colorWhite"
                >{{$case->list_name}}</a>
                <div class="miniBlock__wrap__hashWrap">
                    @foreach($case->tags as $tag)
                        <a href="{{route('case.index')}}"
                           class="miniBlock__wrap__hashWrap__link _colorSky"
                           style="color: #7494b9"
                        >#{{$tag->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endforeach
