@extends('luchiki48ru/header')

@section('content')

    <div class="page-content">
        <div class="container">
            <h1 class="blueText center">ОТЗЫВЫ О НАС</h1>
            <div class="page-text">

                <style>
                    .single-review>div:nth-child(1) {
                        overflow: hidden;
                    }
                    .single-review i {
                        display: block;
                        font-size: 4em;
                        text-align: center;
                    }
                </style>
                <div class="row">
                    @if(Session::has('good'))
                        <div class="alert alert-success">
                            {{ Session::get('good') }}
                        </div>
                    @endif
                    @foreach($Reviews as $item)
                    <div class="single-review col-md-6">
                        <div class="rev-img col-md-3 col-sm-3 hidden-xs"><i class="feature-icon fa fa-commenting"></i></div>
                        <div class="rev-text col-md-9 col-sm-9">
                            <p>{!! str_limit($item['content'],300,'...') !!}
                                </p>
                            <div class="text-right rev-name">
                               <strong>- {{$item['fio']}}</strong>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    <div class="reviews-form">
        <h2 class="blueBg center white feedHead">ОСТАВИТЬ ОТЗЫВ</h2>
        <div class="container">
            <div class="row">
                {!! $Reviews->render() !!}
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut enim ipsum. Sed malesuada convallis eros quis accumsan. Aliquam erat volutpat. Nam id bibendum libero. Vestibulum auctor in urna vitae pretium. Nam tempor sit amet quam nec ullamcorper. Ut quam nisi, tristique nec euismod ut, bibendum sit amet ligula. Sed semper, augue nec dignissim elementum, tortor est varius lacus, id ullamcorper lectus arcu vel ante. Aliquam erat volutpat. In magna libero, iaculis ac mollis a, blandit ut risus. Nam metus odio, bibendum vel interdum et, vehicula vel eros. In interdum sit amet dui eget pharetra. Nulla facilisi.

                In eget ante sed arcu viverra mattis sit amet vestibulum est. Nam porttitor bibendum ex vitae scelerisque. Phasellus fermentum ullamcorper justo eu accumsan. Vestibulum in metus non turpis iaculis rhoncus at ut metus. Quisque mattis tortor eget diam cursus, eu laoreet ante consequat. In mollis nisi eget felis varius tempus. Suspendisse gravida tincidunt nulla a blandit. Donec venenatis blandit eros. Sed suscipit neque vitae nibh vehicula semper. Aliquam eu vestibulum mauris, convallis pretium leo. Mauris tristique, leo ut ultricies egestas, dui risus tincidunt risus, sit amet dapibus mauris lectus ac neque. Cras vitae efficitur dolor. Ut ut odio ante.

            </div>

            <div class="col-md-6 col-sm-6">

                <form class="form-horizontal" role="form" action="/reviews" method="post">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="textinput" name="fio" type="text" max="255" placeholder="Имя" class="form-control input-md">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">

                            <div class="col-md-12">
                                <textarea class="form-control" id="textarea" name="content" placeholder="Комментарий"></textarea>
                            </div>
                        </div>

                        {{csrf_field()}}

                                <!-- Button -->
                        <div class="form-group">

                            <div class="col-md-12">
                                <button name="singlebutton" type="submit" class="btn btn-primary">ОТПРАВИТЬ</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>







@endsection
