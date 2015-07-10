@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Новая страница</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" role="form" action="{{URL::route('dashboard.encyclopedia.update',$post->id)}}" method="post" enctype="multipart/form-data">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">

                        <div data-example-id="togglable-tabs" class="bs-example bs-example-tabs">
                            <ul role="tablist" class="nav nav-tabs" id="myTabs">
                                <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="opisanie-tab" href="#opisanie">Описание</a></li>
                                <li role="presentation" class=""><a aria-controls="history" data-toggle="tab" id="history-tab" role="tab" href="#history" aria-expanded="false">История</a></li>
                                <li role="presentation" class=""><a aria-controls="lechenie" data-toggle="tab" id="lechenie-tab" role="tab" href="#lechenie" aria-expanded="false">Лечение</a></li>
                                <li role="presentation" class=""><a aria-controls="diagnostica" data-toggle="tab" id="diagnostica-tab" role="tab" href="#diagnostica" aria-expanded="false">Диагностика</a></li>
                            </ul>
                            <div class="tab-content" id="encyPost" style="min-height: 600px">
                                <div aria-labelledby="opisanie-tab" id="opisanie" class="tab-pane fade active in" role="tabpanel">
                                    <textarea class="textarea textareaedit form-control" name="opisanie" rows="30">{!! $post->opisanie !!}</textarea>
                                </div>
                                <div aria-labelledby="history-tab" id="history" class="tab-pane fade" role="tabpanel">
                                    <textarea class="textarea textareaedit form-control" name="history" rows="30">{!! $post->history !!}</textarea>
                                </div>

                                <div aria-labelledby="lechenie-tab" id="lechenie" class="tab-pane fade" role="tabpanel">
                                    <textarea class="textarea textareaedit form-control" name="lechenie" rows="30">{!! $post->lechenie !!}</textarea>
                                </div>

                                <div aria-labelledby="diagnostica-tab" id="diagnostica" class="tab-pane fade" role="tabpanel">
                                    <textarea class="textarea textareaedit form-control" name="diagnostica" rows="30">{!! $post->diagnostica !!}</textarea>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Общая информация</div>
                    <div class="panel-body">


                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control" type="text" maxlength="255" required  value="{{$post->title}}" name="title">
                        </div>
                        <div class="form-group">
                            <label>Имя</label>
                            <input class="form-control" type="text" maxlength="255" required value="{{$post->name}}" name="name">
                        </div>



                        <div class="form-group">
                            <label>Миниатюра</label>

                            <div class="form-group text-center">

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                                         style="line-height: 150px;"><img src="{{$post->avatar or ''}}">
                                    </div>

                                    <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                                                            class="fileinput-exists">Изменить</span><input type="file"
                                                                                                           name="avatar"></span>
                                        <a href="#" class="btn btn-default fileinput-exists"
                                           data-dismiss="fileinput">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label>Теги</label>
                            <input ui-jq="tagsinput" ui-options="" class="form-control w-md" data-role="tagsinput" type="text" maxlength="255"
                                   required name="tag" value="{{$post->tag}}">
                        </div>


                        <div class="form-group">
                            <label>Раздел</label>
                            <select class="form-control w-md" ui-jq="chosen" required name="encycategory_id">
                                <option disabled>Выберите раздел</option>

                                @foreach($category as $key => $cat)
                                    <option value="{{$key}}" @if($post->encycategory_id == $key) selected @endif>{{$cat}}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <label>Специализация</label>
                            <select class="form-control w-md" ui-jq="chosen" required name="specdoctor">
                                <option disabled>Выберите специализацию</option>

                                @foreach($specdoctor as $key => $doctor)
                                    <option value="{{$key}}" @if($post->specdoctor == $key) selected @endif>{{$doctor}}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <label class="control-label">Кто может заболеть</label>
                            <select ui-jq="chosen" name="pol[]" multiple class="w-md">
                                <option @if(boolval(strpos($post->pol,'children'))) selected @endif value="children">Дети</option>
                                <option @if(boolval(strpos($post->pol,'girl'))) selected @endif value="girl">Девочки</option>
                                <option @if(boolval(strpos($post->pol,'man'))) selected @endif value="man">Мальчики</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Описание</label>
                            <textarea class="form-control" rows="7" maxlength="255" required name="descript">{{$post->descript}}</textarea>
                        </div>

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary">Отправить</button>


                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
