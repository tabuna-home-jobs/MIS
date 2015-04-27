@extends('app')

@section('content')





    <section class="content-header">
        <h1>
            {{ $Comments->name or 'Комментарий' }}
        </h1>
    </section>




    <!-- Main content -->
    <section class="content">

        <div class='row'>
            <div class='col-md-12'>

                <div class='box'>
                    <div class='box-header'>
                        <h3 class='box-title'>Чтобы добавить страницу заполните форму <small>Это очень просто!</small></h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Свернуть"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Закрыть"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                    </div><!-- /.box-header -->
                    <div class='box-body pad controls'>



                        <form action="/dashboard/comments" method="post" class="row">

                            @if(isset($Comments->id))
                                <input type="hidden" name="id" value="{{$Comments->id}}">
                            @endif


                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control" type="text" maxlength="255" required name="fio" value="{{$Comments->fio or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Телефон</label>
                                    <input class="form-control" type="text" maxlength="255" required name="phone" value="{{$Comments->phone or ''}}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" maxlength="255" required name="email" value="{{$Comments->email or ''}}">
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status"  value="1"  @if($Comments->publish) checked @endif >
                                        Опубликован
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" value="0" @if(!$Comments->publish) checked @endif>
                                        Не опубликован
                                    </label>
                                </div>


                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Содержание</label>
                                    <textarea class="form-control textarea" name="content" rows="10">{{ $Comments->content or '' }}</textarea>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->


@endsection
