
@extends('appAutch')

@section('content')


    <body class="login-page">
    <div class="login-box">

        <div class="login-box-body">


            <table class="table">
                <caption class="text-center">Выберите веб-сайт</caption>
                <tbody>
                @foreach(Sites::get() as $site)
                <tr>
                    <th>{{$site->name}}</th>
                    <td><a href="/dashboard/sites/select/{{$site->id}}">Войти</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>



        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->


@endsection
