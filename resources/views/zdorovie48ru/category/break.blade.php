

@if(!is_null($NewGood = $Good->getParent()->first()))
    @include('newzdorovie48ru.category.break',[
        'Good'=> $NewGood,
    ])
@endif

@if(isset($Good->slug))
    <li><a href="/service/{{$Good->slug}}">{{$Good->name}}</a></li>
@else
    <li><a href="/service/{{$Good->id}}">{{$Good->name}}</a></li>
@endif








{{--dd($Good,'<br>',$Good->getParent()->first(),'<br>',$Good->getParent()->getParent()->first())--}}
{{--
    ;(

@if(!is_null($Good->getParent()->getParent()->first()))

      @include('newzdorovie48ru.category.break',['Good' => $Good->getParent()->first()])
    @endif
--}}
