<ul class="nav navbar-nav">


    @foreach($items as $item)



        @if(isset($item['child']))

            <li role="presentation" class="dropdown">
                <a id="drop-{{$item['id']}}" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    {{$item['label']}}
                    <span class="caret"></span>
                </a>
                <ul id="menu1" class="dropdown-menu" aria-labelledby="drop-{{$item['id']}}">
                    @foreach($item['child'] as $child)
                        <li class="sub-li"><a href="{{$child['link']}}">{{$child['label']}}</a></li>
                    @endforeach
                </ul>
            </li>

        @else
            <li class="
			@if(substr($item['link'], 0,1) == '/')
            {{ Active::path(substr($item['link'],1))}}
            @else
            {{Active::path($item['link'])}}
            @endif
                    "><a href="{{$item['link']}}" class="{{$item['class']}}">{{$item['label']}}</a></li>
        @endif



    @endforeach


</ul>
