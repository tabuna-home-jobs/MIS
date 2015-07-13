@extends('app')

@section('content')




    <!-- Main content -->
    <section class="content">


        <div class="wrapper-md">

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold"> {{ $quests->quest }}</div>
                    <div class="panel-body">


        <div class='row'>
            <div class='col-md-12'>

                <div class='box'>

                    <div class='box-body pad controls'>


                        <form action="/dashboard/surveys/update" method="post" class="row" enctype="multipart/form-data">


                            <div id="GoodsAttr" class="text-center col-md-4">


                                <label>Варианты ответа</label>


                                @if(isset($quests->answer))
                                    @forelse(unserialize($quests->answer) as $key => $attr)

                                        <div class="entry input-group">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon btn-remove glyphicon-minus"></span>
                                                    </div>
                                                    <input type="text" placeholder="Название" value="{{ $attr }}" name="fieldsAttr[]" pattern="^[а-яА-ЯёЁa-zA-Z0-9\s]+$" class="form-control">
                                                </div><!-- /.input group -->

                                            </div>
                                        </div>


                                    @empty

                                        <div class="entry input-group">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-plus btn-add"></span>
                                                    </div>
                                                    <input class="form-control" name="fieldsAttr[]" type="text" placeholder="Название" />
                                                </div><!-- /.input group -->

                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" name="fieldsAttr[]" type="text" placeholder="Значение" />
                                            </div>
                                        </div>

                                    @endforelse
                                @else
                                    <div class="entry input-group">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-plus btn-add"></span>
                                                </div>
                                                <input class="form-control" name="fieldsAttr[]" type="text" placeholder="Название" />
                                            </div><!-- /.input group -->

                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" name="fieldsAttr[]" type="text" placeholder="Значение" />
                                        </div>
                                    </div>

                                @endif
                            </div>



























                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Вопрос</label>
                            <input type="text" class="form-control" name="quest" placeholder="Введите вопрос"
                                   value="{{$quests->quest}}" maxlength="255">
                        </div>


                            <div class="form-group">
                                <label>Тип</label>
                                <select class="form-control" name="type">
                                    <option value="one" @if($quests->type == 'one') selected @endif >Один вариант</option>
                                    <option value="more" @if($quests->type == 'more') selected @endif>Несколько вариантов</option>
                                </select>
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

                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.content -->


@endsection
