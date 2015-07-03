@extends('app')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"> {{ $Album->name or 'Новый Альбом' }}</h1>
    </div>
    <div class="wrapper-md">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Содержание</div>
                    <div class="panel-body">


                        <form action="/dashboard/gallery" method="post" class="row">

                            @if(isset($Album->id))
                                <input type="hidden" name="id" value="{{$Album->id}}">
                            @endif


                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control" type="text" maxlength="255" required name="name" value="{{$Album->name or ''}}">
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>




                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

