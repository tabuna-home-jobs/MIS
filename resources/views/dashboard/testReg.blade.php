@extends('app')

@section('content')

    <section class="content-header">
        <h1>
            Новая страница
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
                            <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                    </div><!-- /.box-header -->
                    <div class='box-body pad'>
                        <form action="/auth/reg" method="post">
                            <div class="form-group">
                                <label>Имя</label>
                                <input class="form-control" type="text" maxlength="255"  equired name="name">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" maxlength="255" required name="email">
                            </div>

                            <div class="form-group">
                                <label>Пароль</label>
                                <input class="form-control" type="text" maxlength="255" required name="password">
                            </div>

                            <div class="form-group">
                                <label>Подтверждение пароля</label>
                                <input class="form-control" type="text" maxlength="255" required name="password2">
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit"  class="btn btn-default">Отправить</button>



                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->

@endsection
