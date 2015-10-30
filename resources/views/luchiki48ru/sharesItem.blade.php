@extends('cozn48ru/header')
@section('content')
    <div class="page-content">
        <div class="container">
            <h1>{{$Shares['name']}}</h1>
            <div class="page-text">
                {!! $Shares['content'] !!}
            </div>
        </div>

    </div>
@endsection