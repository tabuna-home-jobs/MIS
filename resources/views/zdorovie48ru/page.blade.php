@extends('newzdorovie48ru/header')


@section('title', $Page['title'])
@section('description', $Page['descript'])
@section('keywords', $Page['tag'])
@section('avatar', $Page['avatar'])



@section('content')





        <!-- Страница -->
<section class="container-fluid">
    <div class="row">


        <div class="container">


            <div class="app-content-body ">


                <div class="page-header">
                    <h1 class="font-thin m-b">{{$Page['name']}}</h1>
                </div>

                <div class="panel">
                <div class="wrapper-md">
                    <div class="row">
                        <div class="col-sm-12 wrapper-lg">

                            @if(!empty($Page['avatar']))
                                <div class="blog-thumbnail">
                                    <img src="{{$Page['avatar']}}">
                                </div>
                            @endif
                            <div class="blog-post">
                                    {!! $Page['content'] !!}
                            </div>



                        </div>
                    </div>
                </div>
                    </div>


            </div>


        </div>
    </div>
</section>
<!-- Страница -->















@endsection
