@extends('medicalsystemtk/header')

@section('content')


    <div class="sub-page-content">

        <div class="container">


            <h2 class="light bordered text-center">Личный<span> кабинет</span></h2>

            <div class="row" style="margin-top:20px">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

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

                    <form action="{{ url('/auth/login') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset class="login-fieldset">

                            <div class="row form-group">
                                <label>Номер телефона</label>
                                <input type="text" name="phone" class="input-lg"
                                       placeholder="Ваш сотовый телефон" pattern="[0-9]{11}">
                            </div>

                            <div class="row form-group">

                                <label>Пароль</label>
                                <input type="text" name="password" class="input-lg"
                                       placeholder="Одноразовый пароль">

                                <p class="help-block">Если вы не знаете пароля, нажмите на кнопку "получить пароль", на
                                    указанный номер телефона придёт СМС сообщение с паролем</p>
                            </div>


                            <div class="row">
                                <hr class="colorgraph">
                            </div>


                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <button type="submit" class="btn btn-lg btn-success btn-block">Войти</button>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <button type="submit" class="btn btn-lg btn-default btn-block">Получить пароль
                                    </button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection