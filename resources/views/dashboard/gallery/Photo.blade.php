@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> {{ $Album->name or 'Новый Альбом' }}</h1>
    </div>
    <div class="wrapper-md">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Изображения</div>
                    <div class="panel-body">


                        <form class="col-md-4 col-xs-12" method="post" action="/dashboard/gallery/photo" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <div class="form-group text-center">

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                                                 style="line-height: 150px;">
                                            </div>

            <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                            class="fileinput-exists">Изменить</span><input type="file"
                                                                           name="url"
                                                                           value=""></span>
            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center">
                                    <input type="hidden" name="album" value="{{ $Album }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="btn-group btn-group-sm" role="group" >
                                        <button type="submit" class="btn btn-primary">Добавить</button>
                                    </div>

                                </div>
                            </div>
                            <h3>Добавте ссылку на видео с сервиса youtube</h3>
                            <div>
                                <textarea class="form-control" name="videourl" placeholder="Ссылка на видео с сервиса youtube"></textarea>
                            </div>

                        </form>



                        @foreach($AlbumPhoto as $photo)



    <div class="col-md-4 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">

                <div class="form-group text-center">


                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                             style="line-height: 150px;"><img width="200px" height="100px" src="{{$photo->url or ''}}">
                        </div>

                        <br>
                        <br>
                        <br>
                    </div>

                </div>
            </div>


            <div class="panel-footer text-center">
                <div class="btn-group btn-group-sm" role="group" >
                    <a href="/dashboard/gallery/deletephote/{{$photo->id}}" class="btn btn-danger">Удалить</a>
                </div>


        </div>
        </div>
        <h3>Отредактируйте ссылку на видео с сервиса youtube</h3>
        <div>
            <textarea class="form-control" name="videourl" placeholder="Ссылка на видео с сервиса youtube">{{$photo->videourl}}</textarea>
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






