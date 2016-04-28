@extends('app')

@section('content')
            <div class="bg-light lter b-b wrapper-md">
                <h1 class="m-n font-thin h3">Новый блок</h1>
            </div>
            <div class="wrapper-md">
                <form class="row" role="form" action="{{URL::route('dashboard.block.index')}}" method="post">
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-heading font-bold">Содержание</div>
                            <div class="panel-body">
                                <textarea class="textarea textareaedit form-control" name="cont" rows="30">
                                    {!! old('cont') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading font-bold">Общая информация</div>
                            <div class="panel-body">

                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control" type="text" maxlength="255" name="title" value="{{ old('title') }}">
                                </div>

                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control" type="text" maxlength="255" required name="name" value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label>Идентификатор</label>
                                    <input class="form-control" type="text" maxlength="255" required name="slug" value="{{ old('slug') }}">
                                </div>

                                <div class="form-group">
                                    <label>Описание</label>

                                    <textarea class="form-control" rows="7"  maxlength="255" name="descript">{{ old('descript') }}</textarea>
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-primary" value="Отправить"></input>
                            </div>
                        </div>
                    </form>
                </div>

@endsection
