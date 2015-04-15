@extends('app')

@section('content')

    <section class="content-header">
        <h1>
            Новый пользователь
            <small>Добавить новую страницу</small>
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
                    <div class='box-body pad'>
                        <form action="/dashboard/user" method="post">

                            @if(isset($User->id))
                                <input type="hidden" name="id" value="{{$User->id}}">
                            @endif

                            <div class="form-group">
                                <label>ФИО</label>
                                <input class="form-control" type="text" maxlength="255" required name="name" value="{{$User->name}}">
                            </div>
                            <div class="form-group">
                                <label>Пароль, <small>пароль зашифрован, посмотреть или изменить можно только через востановление, если вы хотите создать пользователя его пароль будет 123456</small></label>
                                <input class="form-control" disabled type="text" maxlength="255" required name="title" value="{{$User->password}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" maxlength="255" required name="email" value="{{$User->email}}">
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-default">Отправить</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->

@endsection
