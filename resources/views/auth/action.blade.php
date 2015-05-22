@extends('appAutch')

@section('content')

    <body class="register-page">
    <div class="register-box">
        <div class="register-logo">
            <b>Управление</b> МИС</a>
        </div>

        <div class="register-box-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p class="login-box-msg">Активировать пользователя</p>

            <form action="/auth/action" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                           placeholder="Email"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password"
                           placeholder="Уникальный код подтверждения"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Активировать</button>
                    </div>
                    <!-- /.col -->
                </div>


            </form>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->


@endsection