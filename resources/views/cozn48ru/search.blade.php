@extends('cozn48ru/header')
@section('content')

    <div class="page-content">
        <div class="container">
            <h1>Результаты поиска
                @if($query)
                    по запросу: {{$query}}
                @endif
            </h1>
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li>Поиск</li>
            </ul>
            <div class="page-text">
                @if($search)
                <ul class="list-group list-group-alt list-group-lg no-borders pull-in m-b-none">

                    @foreach($search as $key =>$value)


                        @foreach($value as $text)


                            <li class="list-group-item">
                                @if(isset($text->avatar))
                                    <a href="/{{$text->SlugName . '/' . $text->id}}" class="pull-left thumb-md m-r">
                                        <img src="{{$text->avatar}}" alt="{{$text->title}}">
                                    </a>
                                @endif

                                <div class="clearfix">
                                    <a href="/{{$text->SlugName . '/' . $text->id}}" class="h4 text-primary m-b-sm block">{{$text->name}}</a>

                                    <div>
                                        {{str_limit(strip_tags($text->content), 300, '...')}}
                                    </div>
                                </div>
                            </li>


                        @endforeach


                    @endforeach





                </ul>
              @else
                Ничего не найдено
               @endif

            </div>
        </div>

    </div>



@endsection
