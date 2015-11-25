@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> {{ $Album->name or 'Новый Альбом' }}</h1>
    </div>
    <div class="wrapper-md">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Видео</div>
                    <div class="panel-body">


                        <form class="col-md-4 col-xs-12" method="post" action="/dashboard/video/update">

                            <h3>Добавте ссылку на видео с сервиса youtube</h3>
                            <div>
                                <input type="hidden" name="album_id" value="{{$Album}}">
                                <input class="form-control" type="text" name="name" placeholder="Название видео">
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <textarea class="form-control" name="code" placeholder="Ссылка на видео с сервиса youtube"></textarea>
                            </div>

                            <div class="btn-group btn-group-sm" role="group" >
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>

                        </form>


                        <style>
                            .btn-group-sm {
                                display: block;
                            }
                            .btn-group-sm button {
                                font-size: 12px;
                                margin-right: 10px;
                            }
                            .form-control {
                                margin-bottom: 15px;
                            }
                        </style>

                        @foreach($AlbumPhoto as $photo)



                            <div class="col-md-4 col-xs-12">

                                <form  method="post" action="/dashboard/video/update">

                                    <h3>Редактировать ссылку на видео с сервиса youtube</h3>
                                    <div>
                                        <input type="hidden" name="id" value="{{$photo->id}}">
                                        <input type="hidden" name="album_id" value="{{$Album}}">
                                        <input class="form-control" type="text" name="name" value="{{$photo->name}}">
                                        <input name="_method" type="hidden" value="PUT">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <textarea class="form-control" name="code" >{{$photo->code}}</textarea>
                                    </div>

                                    <div class="btn-group btn-group-sm" role="group" >
                                        <button type="submit" class="btn btn-primary">Обновить</button>
                                </form>
                                        <form method="post" action="/dashboard/video/{{$photo->id}}">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input type="hidden" name="album_id" value="{{$Album}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                        </form>

                                    </div>



                            </div>




                        @endforeach





                    </div>
                </div>
            </div>

        </div>


        <div class="col-xs-12">{!! $AlbumPhoto->render() !!}</div>
    </div>


@endsection






