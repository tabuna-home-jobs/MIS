@extends('app')

@section('content')

    <section class="content-header">
        <h1>
           Отзыв:  {{ $Reviews->fio }}
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class='row'>
            <div class='col-md-12'>

                <div class='box'>

                    <div class='box-body pad'>


                        <form action="/dashboard/reviews" method="post">


                            <div class="form-group">
                                <label for="fio">ФИО</label>
                                <input type="text" class="form-control" name="fio" id="fio" value="{{ $Reviews->fio or '' }}">
                            </div>

                            <div class="form-group">
                                <label for="content">Содержание</label>
                                <textarea class="form-control" name="content" id="content">{{ $Reviews->content or '' }}</textarea>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="status"  value="1"  @if($Reviews->publish) checked @endif >
                                   Опубликован
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" value="0" @if(!$Reviews->publish) checked @endif>
                                    Не опубликован
                                </label>
                            </div>

                                <input type="hidden" name="id" value="{{ $Reviews->id }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Отправить</button>
                        </form>

                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->

@endsection
