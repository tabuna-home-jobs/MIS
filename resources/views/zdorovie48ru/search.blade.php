@extends('newzdorovie48ru/header')
@section('content')





        <!-- Страница -->
<section class="container-fluid">
    <div class="row">


        <div class="container">


            <div class="app-content-body ">


                <div class="page-header">
                    <h1 class="font-thin m-b">Результаты поиска
                        @if($query)
                                              по запросу: {{$query}}
                        @endif</h1>
                </div>

                <div class="panel">
                    <div class="wrapper-md">
                        <div class="row">
                            <div class="col-sm-12 wrapper-lg">

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
                </div>


            </div>


        </div>
    </div>
</section>
<!-- Страница -->




@endsection
