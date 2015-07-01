@extends('app')

@section('content')

    <section class="content-header">
        <h1>
            Новая категория
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



                        <form action="/dashboard/encyclopediaCategory/{{$EncyCategory->id}}" method="post" class="row" enctype="multipart/form-data">


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control" type="text" maxlength="255" required name="title" value="{{$EncyCategory->title}}">
                                </div>
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control" type="text" maxlength="255" required name="name" value="{{$EncyCategory->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Теги</label>
                                    <input class="form-control form-tag" data-role="tagsinput" type="text"
                                           maxlength="255" required name="tag" value="{{$EncyCategory->tag}}">
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <textarea class="form-control" maxlength="255" rows="7" required name="descript">{{$EncyCategory->descript}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Категория</label>
                                    <select name="category" required class="form-control">
                                        <option value="0">Главная категория</option>
                                        @foreach($allCategory as $category)

                                            <option value="{{$category->id}}" @if($category->id == $EncyCategory->encycategory_id) selected @endif>{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <input type="hidden" name="id" value="{{$EncyCategory->id}}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Содержание</label>
                                    <textarea class="textarea textareaedit" name="content" rows="30">{{$EncyCategory->descript}}
                                    </textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->

@endsection
