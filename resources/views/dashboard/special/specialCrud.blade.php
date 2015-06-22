@extends('app')

@section('content')

    <section class="content-header">
        <h1>
            {{ $Spec->fio or 'Новый специлист' }}
        </h1>


    </section>

    <!-- Main content -->
    <section class="content">

        <div class='row'>
            <div class='col-md-12'>

                <div class='box'>
                    <div class='box-header'>
                        <h3 class='box-title'>Чтобы добавить страницу заполните форму
                            <small>Это очень просто!</small>
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip"
                                    title="Свернуть"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip"
                                    title="Закрыть"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class='box-body pad'>


                        <form action="/dashboard/special" method="post" class="row" enctype="multipart/form-data">

                            @if(isset($Spec->id))
                                <input type="hidden" name="id" value="{{$Spec->id}}">
                            @endif


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>ФИО</label>
                                    <input class="form-control" type="text" maxlength="255" required name="fio"
                                           value="{{$Spec->fio or ''}}">
                                </div>

                                <div class="form-group">
                                    <label>Квалификация</label>
                                    <input class="form-control" type="text" maxlength="255" required name="subname"
                                           value="{{$Spec->subname or ''}}">
                                </div>

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
                                    <label>Рабочие дни</label>
                                    <select name="works[]" multiple class="form-control" size="7">
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

                            <div class="col-md-8">

                                <div class="form-group">
                                    <label>Специализация</label>
                                    <input class="form-control" type="text" maxlength="255" required name="special"
                                           value="{{$Spec->special or ''}}">
                                </div>

                                <div class="form-group">
                                    <label>Опыт работы</label>
                                    <input class="form-control" type="text" maxlength="255" required name="opyt"
                                           value="{{$Spec->opyt or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Образование</label>
                                    <input class="form-control" type="text" maxlength="255" required name="obrazovanie"
                                           value="{{$Spec->obrazovanie or ''}}">
                                </div>

                                <div class="form-group">
                                    <label>Содержание</label>
                                    <textarea class="form-control" name="about"
                                              rows="10">{!! $Spec->about or '' !!}</textarea>
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->

    </section><!-- /.content -->

@endsection
