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
                    <strong>Ошибка!</strong> Проверьте вводимые данные.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p class="login-box-msg">Добро пожаловать</p>
            <form action="/auth/repeat" method="post">

                <div class="form-group has-feedback">
                    <label for="email" class="control-label">Email</label>
                    <input class="form-control" size="100" value="{{ old('email')  }}" name="email" type="email">
                </div>
                <div class="row">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Отправить</button>
                </div>


            </form>



        </div><!-- /.form-box -->
    </div><!-- /.register-box -->



    @endsection