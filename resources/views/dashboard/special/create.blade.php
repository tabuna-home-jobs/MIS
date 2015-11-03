@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Новый специалист</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" role="form" action="{{URL::route('dashboard.special.index')}}" method="post" enctype="multipart/form-data">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>ФИО</label>
                            <input class="form-control" type="text" maxlength="255" required name="fio"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label>Категория</label>
                            <select class="form-control" name="cats">
                                @foreach($cats as $item)
                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Квалификация</label>
                            <input class="form-control" type="text" maxlength="255" required name="subname"
                                   value="">
                        </div>


                        <div class="form-group">
                            <label>Специализация</label>

                            <textarea class="form-control" rows="5" name="special">

                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Должность</label>
                            <input class="form-control" type="text" maxlength="255" required name="opyt"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label>Образование</label>
                            <input class="form-control" type="text" maxlength="255" required name="obrazovanie"
                                   value="">
                        </div>



                        <div class="form-group">
                            <label>Рабочие дни</label>
                            <select name="works[]" multiple class="form-control w-md"  ui-jq="chosen"  size="7">
                                <option  value="Понедельник">
                                    Понедельник
                                </option>
                                <option  value="Вторник">
                                    Вторник
                                </option>
                                <option  value="Среда">
                                    Среда
                                </option>
                                <option  value="Четверг">
                                    Четверг
                                </option>
                                <option  value="Пятница">
                                    Пятница
                                </option>
                                <option  value="Суббота">
                                    Суббота
                                </option>
                                <option  value="Воскресенье">
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
                                         style="line-height: 150px;"><img src="">
                                    </div>

                                    <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Выбрать изображение</span><span
                                                            class="fileinput-exists">Изменить</span><input type="file"
                                                                                                           name="avatar"
                                                                                                           value=""></span>
                                        <a href="#" class="btn btn-default fileinput-exists"
                                           data-dismiss="fileinput">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label>Умения</label>
                                    <textarea class="form-control" name="about"
                                              rows="5"></textarea>
                        </div>


                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary">Отправить</button>


                    </div>
                </div>
                </div>
        </form>
    </div>

@endsection
