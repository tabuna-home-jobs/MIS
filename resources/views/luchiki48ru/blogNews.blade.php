@extends('luchiki48ru/header')

@section('title', $New['title'])
@section('description', $New['descript'])
@section('keywords', $New['tag'])
@section('avatar', $New['avatar'])

@section('content')
    <div class="page-content blog-content">
        <div class="container">
            <h1 class="blueText center">{{$New['name']}}</h1>
            <div class="page-text padding-top-35">
                {!! $New['content'] !!}
            </div>
        </div>
    </div>
@endsection
