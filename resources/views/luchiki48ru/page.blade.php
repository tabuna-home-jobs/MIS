@extends('luchiki48ru/header')
@section('content')
<div class="page-content">
    <div class="container">
        <h1>{{$Page['name']}}</h1>
        <div class="page-text">
            {!! $Page['content'] !!}
        </div>
    </div>

</div>
@endsection