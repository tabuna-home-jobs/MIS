@extends('app')

@section('content')

    <section class="content-header">
        <h1>
           {{ $Album->name or 'Новый Альбом' }}
        </h1>



    </section>

    <!-- Main content -->
    <section class="content">

        <div class='row'>
            <div class='col-md-12'>

                <div class='box'>

                    <div class='box-body pad'>



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
            </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->

@endsection
