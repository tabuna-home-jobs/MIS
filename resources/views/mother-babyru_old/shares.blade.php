@extends('mother-babyru/header')
@section('content')
    <div class="page-content">
        <div class="container">
            <h1>Акции центра Остеопатии</h1>
            <div class="page-text">
                <div class="row">
                    @foreach($Shares as $item)
                        <div class="col-md-4">
                            <div>
                                <h3>{{$item['name']}}</h3>
                                <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                <div class="seeall"><img src="/cozn48.ru/img/minibutton.png"><a href="/shares/{{$item['id']}}">Посмотреть акцию</a><br></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection