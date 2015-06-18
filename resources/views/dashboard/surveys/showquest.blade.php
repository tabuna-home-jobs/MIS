@extends('app')

@section('content')





    <section class="content-header">
        <h1>
            {{ $quests->quest }}
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
                    <div class='box-body pad controls'>


                        <form action="/dashboard/goods" method="post" class="row" enctype="multipart/form-data">


                            <div id="GoodsAttr" class="text-center col-md-6">


                                <label>Атрибуты</label>

                                @if(isset($quests->answer))
                                    @forelse(unserialize($quests->answer) as $key => $attr)

                                        @if($key % 2 == 0)
                                            <div class="entry input-group ">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="glyphicon btn-remove glyphicon-minus"></span>
                                                        </div>
                                                        <input type="text" placeholder="Название" value="{{ $attr }}"
                                                               name="fieldsAttr[]" pattern="^[а-яА-ЯёЁa-zA-Z0-9\s]+$"
                                                               class="form-control">
                                                    </div>
                                                    <!-- /.input group -->

                                                </div>
                                                @else

                                                    <div class="form-group col-md-6">
                                                        <input type="text" placeholder="Значение" value="{{ $attr }}"
                                                               name="fieldsAttr[]" pattern="^[а-яА-ЯёЁa-zA-Z0-9\s]+$"
                                                               class="form-control">
                                                    </div>

                                            </div>
                                        @endif

                                    @empty

                                        <div class="entry input-group ">
                                            <div class="form-group ">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-plus btn-add"></span>
                                                    </div>
                                                    <input class="form-control" name="fieldsAttr[]" type="text"
                                                           placeholder="Название"/>
                                                </div>
                                                <!-- /.input group -->

                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" name="fieldsAttr[]" type="text"
                                                       placeholder="Значение"/>
                                            </div>
                                        </div>

                                    @endforelse
                                @else
                                    <div class="entry input-group">
                                        <div class="form-group col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-plus btn-add"></span>
                                                </div>
                                                <input class="form-control" name="fieldsAttr[]" type="text"
                                                       placeholder="Название"/>
                                            </div>
                                            <!-- /.input group -->

                                        </div>

                                        <div class="form-group col-md-6">
                                            <input class="form-control" name="fieldsAttr[]" type="text"
                                                   placeholder="Значение"/>
                                        </div>
                                    </div>

                                @endif
                            </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Вопрос</label>
                            <input type="text" class="form-control" name="quest" placeholder="Введите вопрос"
                                   value="{{$quests->quest}}" maxlength="255">
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Тип</label>
                                <select class="form-control" name="type">
                                    <option value="one">Один вариант</option>
                                    <option value="more">Несколько вариантов</option>
                                </select>
                            </div>
                        </div>


                        <input type="hidden" name="id" value="{{$quests->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-default">Отправить</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->


@endsection
