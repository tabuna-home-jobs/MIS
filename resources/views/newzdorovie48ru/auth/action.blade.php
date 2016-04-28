@extends('newzdorovie48ru/header')

@section('content')


    <div class="container">

        <div class="col-md-6">
            <div class="page-header">
                <h1 class="font-thin m-b">Активировать пользователя</h1>
            </div>


            <div class="container w-xxl w-auto-xs">
                <div class="panel b shadow-box">
                    <div class="wrapper-lg">
                        <div class="row">

                            <form action="/auth/action" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control  rounded"
                                           required
                                           data-mask="+ 9-999-999-99-99" name="phone" value="{{ old('phone') }}"
                                           placeholder="Телефон"/>
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control rounded" name="password"
                                           placeholder="Уникальный код подтверждения"/>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">

                                        <button type="submit" class="btn btn-lg btn-primary btn-void-primary btn-block">
                                            Активировать
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>








        <div class="col-md-6">
            <div class="page-header">
                <h1 class="font-thin m-b">Получить SMS</h1>
            </div>


            <div class="container w-xxl w-auto-xs">
                <div class="panel b shadow-box">
                    <div class="wrapper-lg">
                        <div class="row">

                            <form action="/auth/repeat" method="post">

                                <div class="form-group has-feedback">
                                    <label for="email" class="control-label">Телефон</label>
                                    <input class="form-control rounded" size="100" value="{{ old('phone')  }}" data-mask="+ 9-999-999-99-99" name="phone" type="text">
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-lg btn-primary btn-void-primary btn-block">Отправить</button>
                                </div>
                                    </div>


                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection