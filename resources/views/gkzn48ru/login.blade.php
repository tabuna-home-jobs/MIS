@extends('gkzn48ru/headerALT')


@section('headerTitle','Личный кабинет')




@section('content')







    <div class="overlay-none bg-login">
        <div class="container xsx-width">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="vc_col-sm-12 wpb_column vc_column_container vc_custom_1410196902010">
                    <div class="wpb_wrapper">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">


                            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="service">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-hospital-o fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-hospital-o fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe appointment-form clearfix widget-form-white-short"><h4>
                                                Войти в личный кабинет</h4>


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
                                                        <input type="text" name="phone" class="form-control input-lg"
                                                               placeholder="Ваш сотовый телефон" pattern="[0-9]{11}">
                                                    </div>

                                                    <div class="row form-group">

                                                        <label>Пароль</label>
                                                        <input type="text" name="password" class="form-control input-lg"
                                                               placeholder="Одноразовый пароль">

                                                        <p class="help-block">Если вы не знаете пароля, нажмите на
                                                            кнопку "получить пароль", на
                                                            указанный номер телефона придёт СМС сообщение с паролем</p>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <button type="submit"
                                                                    class="btn btn-lg btn-primary btn-block">Войти
                                                            </button>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <button type="submit"
                                                                    class="btn btn-lg btn-default btn-block">Получить
                                                                пароль
                                                            </button>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>













@endsection