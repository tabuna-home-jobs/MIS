@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">  Новая категория</h1>
    </div>
    <div class="wrapper-md">
        <form class="row" role="form" action="{{URL::route('dashboard.encyclopediaCategory.update',$EncyCategory->id)}}" method="post">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">

                                    <textarea class="textarea textareaedit" name="content" rows="30">{{$EncyCategory->descript}}
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
                                <input class="form-control" type="text" maxlength="255" required name="title" value="{{$EncyCategory->title}}">
                            </div>
                            <div class="form-group">
                                <label>Имя</label>
                                <input class="form-control" type="text" maxlength="255" required name="name" value="{{$EncyCategory->name}}">
                            </div>



                            <div class="form-group">
                                <label>Теги</label>
                                <input ui-jq="tagsinput" ui-options="" class="form-control w-md" data-role="tagsinput" type="text" maxlength="255"
                                       required name="tag" value="{{$EncyCategory->tag or ''}}">
                            </div>


                            <div class="form-group">
                                <label>Описание</label>
                                <textarea class="form-control" maxlength="255" rows="7" required name="descript">{{$EncyCategory->descript}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Категория</label>
                                <select name="category"  ui-jq="chosen" required class="form-control">
                                    <option value="0">Главная категория</option>
                                    @foreach($allCategory as $category)

                                        <option value="{{$category->id}}" @if($category->id == $EncyCategory->encycategory_id) selected @endif>{{$category->name}}</option>
                                    @endforeach

                                </select>
                            </div>



                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary">Отправить</button>

                    </div>
                </div>
        </form>
    </div>

@endsection
