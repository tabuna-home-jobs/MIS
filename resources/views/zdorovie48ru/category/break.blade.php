@if(isset($Good->getParent()->first()->slug))
    <li><a href="/service/{{$Good->getParent()->first()->slug}}">{{$Good->getParent()->first()->name}}</a></li>
@else
    <li><a href="/service/{{$Good->getParent()->first()->id}}">{{$Good->getParent()->first()->name}}</a></li>
@endif
{{--dd($Good,'<br>',$Good->getParent()->first(),'<br>',$Good->getParent()->getParent()->first())--}}
{{--
    ;(

@if(!is_null($Good->getParent()->getParent()->first()))

      @include('zdorovie48ru.category.break',['Good' => $Good->getParent()->first()])
    @endif
--}}
