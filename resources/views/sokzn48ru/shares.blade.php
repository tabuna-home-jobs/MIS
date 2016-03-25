@extends('sokzn48ru/header')
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
                                <div class="seeall"><a href="/shares/{{$item['id']}}" class="btn btn-primary btn-default"><span class="glyphicon glyphicon-eye-open"></span> Посмотреть</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection