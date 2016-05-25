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


    @if(Sentry::check())
            <li class="{{Active::path('/auth/*')}}">
                <a href="/auth/logout">
                   Выйти
                </a>
            </li>
        @else
        <li class="{{Active::path('/auth/*')}}">
            <a href="/auth/login">
                Личный кабинет
            </a>
        </li>
    @endif



    <li class="dropdown">
        <a id="drop-search" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
           aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-search"></i>
            <span class="caret"></span>
        </a>
        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop-search">

                <li class="sub-li">

                    <form class="navbar-form navbar-form-sm pull-right nav-search w-md"  role="search" action="/search" method="post">
                        {!! csrf_field() !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Поиск по ..." required>
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                              </span>
                        </div>
                    </form>
                </li>

        </ul>
    </li>


</ul>
