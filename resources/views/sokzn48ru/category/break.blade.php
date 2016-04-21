

@if(!is_null($NewGood = $Good->getParent()->first()))
    @include('sokzn48ru.category.break',[
        'Good'=> $NewGood,
    ])
@endif

    <li><a href="/service/{{$Good->id}}">{{$Good->name}}</a></li>

