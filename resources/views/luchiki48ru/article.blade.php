@extends('luchiki48ru/header')

@section('title', $Article['title'])
@section('description', $Article['descript'])
@section('keywords', $Article['tag'])
@section('avatar', $Article['avatar'])

@section('content')
    <div class="page-content">
        <div class="container">
            <h1 class="blueText center">{{$Article['name']}}</h1>
            <div class="page-text padding-top-35">
                {!! $Article['content'] !!}
            </div>
        </div>
    </div>
@endsection
