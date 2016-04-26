@extends('newzdorovie48ru/header')

@section('content')



    <div class="container">


        <div class="col-md-6">

            <div class="page-header">
                <h1 class="font-thin m-b">Личный кабинет</h1>
            </div>


            <div class="panel">
                <div class="wrapper-md">
                    <div class="row">

                        <form action="/auth/login" method="post" name="form" class="container w-xxl w-auto-xs">
                                <div class="wrapper-md">

                                    <p class="lead text-center">Вход для клиентов</p>

                                    <div class="form-group">
                                        <label class="label text-dark">Номер телефона</label>
                                        <input type="text" placeholder="Телефон" name="phone" class="form-control  rounded" required
                                               data-mask="+ 9-999-999-99-99">
                                    </div>

                                    <div class="form-group">
                                        <label class="label text-dark">Секретный пароль</label>
                                        <input type="password" name="password" placeholder="Пароль" class="form-control rounded" required>
                                    </div>

                                    {!! csrf_field() !!}

                                    <button type="submit" class="btn btn-lg btn-primary btn-void-primary btn-block">Войти
                                    </button>
                                </div>
                            <div class="text-center m-t m-b"><a>Забыли пароль?</a></div>
                        </form>

                        </div>
                    </div>
                </div>

        </div>


        <div class="col-md-6">
            <div class="page-header">
                <h1 class="font-thin m-b">Регистрация</h1>
            </div>




            <div class="panel">
                <div class="wrapper-md">
                    <div class="row">

                        <div class="stepwizard hide">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Шаг 1</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Шаг 2</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p>Шаг 3</p>
                                </div>
                            </div>
                        </div>
                        <form action="/auth/register" method="post" role="form">
                            <div class="row setup-content" id="step-1">
                                <div class="col-xs-12">
                                    <div class="container w-xxl w-auto-xs">


                                        <p class="lead text-center">Зарегистрируйся сейчас <span class="text-success">Бесплатно</span></p>
                                        <ul class="list-unstyled" style="line-height: 2">
                                            <li><span class="fa fa-check text-success"></span> Смотри историю посещений</li>
                                            <li><span class="fa fa-check text-success"></span> Узнавай результаты анализов</li>
                                            <li><span class="fa fa-check text-success"></span> Сохраняй свои записи</li>
                                            <li><span class="fa fa-check text-success"></span> Получай новости</li>
                                            <li><span class="fa fa-check text-success"></span> Обращаяся за вопросами</li>
                                        </ul>

                                        <div class="line line-dashed"></div>
                                        <p class="text-center">
                                            <small>Не имеете аккаунта?</small>
                                        </p>
                                        <p class="text-center">
                                        <button class="btn btn-lg btn-default nextBtn btn-rounded" type="button">Создать аккаунт</button>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Заполните личные сведения</h3>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Фамилия</label>
                                            <input maxlength="200" type="text" name="last_name" required="required" class="form-control rounded" placeholder="Введите фамилию" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Имя</label>
                                            <input maxlength="200" type="text" name="first_name" required="required" class="form-control rounded" placeholder="Введите имя" />
                                        </div>
                                        <div class="line line-dashed b-b line-md"></div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Отчество</label>
                                            <input maxlength="200" type="text"  name="middle_name" required="required" class="form-control rounded" placeholder="Введите отчество" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Телефон</label>
                                            <input maxlength="200" type="text"  name="phone" required="required" class="form-control rounded" placeholder="Введите номер телефона" />
                                        </div>
                                        <div class="line line-dashed b-b line-md"></div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Email</label>
                                            <input maxlength="200" type="text"  name="email" required="required" class="form-control rounded" placeholder="Введите электронный адрес" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Дата рожения</label>
                                            <input maxlength="200" type="text"  name="birth" required="required" class="form-control rounded" placeholder="Выберите дату рождения" />
                                        </div>


                                        <div class="line line-dashed b-b line-md"></div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Пароль</label>
                                            <input maxlength="200" type="password"  name="password" required="required" class="form-control rounded" placeholder="Введите электронный адрес" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Подтверждение пароля</label>
                                            <input maxlength="200" type="password"  name="password_confirmation" required="required" class="form-control rounded" placeholder="Выберите дату рождения" />
                                        </div>

                                        {!! csrf_field() !!}


                                        <p class="text-center">
                                            <button class="btn btn-default nextBtn btn-rounded" type="button">Создать аккаунт</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Step 3</h3>
                                        <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                                    </div>
                                </div>
                            </div>
                        </form>












            </div></div></div>

        </div>



    </div>



@endsection