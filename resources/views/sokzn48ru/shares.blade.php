@extends('sokzn48ru/headerPage')
@section('content')
    <div class="page-content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a> <span class="divider"></span></li>
                <li class="active">Акции и Новинки</li>
            </ul>
            <h1>Акции СОК</h1>
            <div class="page-text">
                <div class="row">
                    @foreach($Shares as $item)
                        <div class="col-md-4 item-row">
                            <div>
                                <div><img src="{{$item['avatar']}}" alt=""></div>
                                <h3>{{$item['name']}}</h3>
                                <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                <div class="seeall"><a href="/shares/{{$item['id']}}" class="btn btn-primary btn-success"><span class="glyphicon glyphicon-eye-open"></span> Подробнее</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection
<style>
    .seeall{
        margin:15px 0;
    }
</style>
<script>
    $(window).on('load',function(){
        var height = 0;
        $('.item-row').each(function(){
            var height_this = $(this).height();
            if(height_this > height){
                height = height_this
            }

        });


        $('.item-row').height(height);
    });

</script>