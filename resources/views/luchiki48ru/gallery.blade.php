@extends('luchiki48ru/header')
@section('content')
    <div class="page-content">
        <div class="container">
            <h1>Галерея</h1>
            <div class="page-text">
                <div class="row">
                    @foreach($photos as $item)
                        <div class="col-md-3 item-galery">
                            <div>
                                <a class="fancybox" rel="group" href="{{$item->url}}"><img src="{{$item->url}}" alt="" /></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection