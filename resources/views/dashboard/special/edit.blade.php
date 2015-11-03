@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Новый специалист</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" role="form" action="{{URL::route('dashboard.special.update',$Spec->id)}}" method="post" enctype="multipart/form-data">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">


                        <div class="form-group">
                            <label>Порядок</label>
                            <input class="form-control" type="text" maxlength="255" required name="fio"
                                   value="{{$Spec->fio or old('fio')}}">
                        </div>

                        <div class="form-group">
                            <label>ФИО</label>
                            <input class="form-control" type="text" maxlength="255" required name="fio"
                                   value="{{$Spec->fio or old('fio')}}">
                        </div>

                        <div class="form-group">
                            <label>Категория</label>
                            <select class="form-control" name="cats">
                                @foreach($cats as $item)
                                    <option {{$Spec->cats == $item['id']?'selected':''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Квалификация</label>
                            <input class="form-control" type="text" maxlength="255" required name="subname"
                                   value="{{$Spec->subname or old('subname')}}">
                        </div>


                        <div class="form-group">
                            <label>Специализация</label>

                            <textarea class="form-control" rows="5" name="special" required>{{$Spec->special or old('special')}}</textarea>



                        </div>

                        <div class="form-group">
                            <label>Должность</label>
                            <input class="form-control" type="text" maxlength="255" required name="opyt"
                                   value="{{$Spec->opyt or old('opyt')}}">
                        </div>
                        <div class="form-group">
                            <label>Образование</label>
                            <input class="form-control" type="text" maxlength="255" required name="obrazovanie"
                                   value="{{$Spec->obrazovanie or old('obrazovanie')}}">
                        </div>



                        <div class="form-group">
                            <label>Рабочие дни</label>
                            <select name="works[]" multiple class="form-control w-md"  ui-jq="chosen"  size="7">
                                <option @if(isset($Spec->works) && strpos($Spec->works,"Понедельник")) selected
                                        @endif value="Понедельник">
                                    Понедельник
                                </option>
                                <option @if(isset($Spec->works) && strpos($Spec->works,"Вторник")) selected
                                        @endif value="Вторник">
                                    Вторник
                                </option>
                                <option @if(isset($Spec->works) && strpos($Spec->works,"Среда")) selected
                                        @endif value="Среда">
                                    Среда
                                </option>
                                <option @if(isset($Spec->works) && strpos($Spec->works,"Четверг")) selected
                                        @endif value="Четверг">
                                    Четверг
                                </option>
                                <option @if(isset($Spec->works) && strpos($Spec->works,"Пятница")) selected
                                        @endif value="Пятница">
                                    Пятница
                                </option>
                                <option @if(isset($Spec->works) && strpos($Spec->works,"Суббота")) selected
                                        @endif value="Суббота">
                                    Суббота
                                </option>
                                <option @if(isset($Spec->works) && strpos($Spec->works,"Воскресенье")) selected
                                        @endif value="Воскресенье">
                                    Воскресенье
                                </option>
                            </select>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Общая информация</div>
                    <div class="panel-body">



                        <div class="form-group">
                            <label>Миниатюра</label>

                            <div class="form-group text-center">

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div data-trigger="fileinput" class="fileinput-preview thumbnail"
                                         style="line-height: 150px;"><img src="{{$Spec->avatar or ''}}">
                                    </div>

                                    <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                                                            class="fileinput-exists">Изменить</span><input type="file"
                                                                                                           name="avatar"
                                                                                                           value="{{$Spec->avatar or ''}}"></span>
                                        <a href="#" class="btn btn-default fileinput-exists"
                                           data-dismiss="fileinput">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label>Умения</label>
                                    <textarea class="form-control" name="about"
                                              rows="5">{!! $Spec->about or '' !!}</textarea>
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
