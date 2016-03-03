<li><a href="/service/{{$Good->getParent()->first()->slug}}">{{$Good->getParent()->first()->name}}</a></li>

    @if(!is_null($Good->getParent()->first()->getParent()->fisrt()))
        @include('zdorovie48ru.category.break',$Good->getParent()->first()->getParent()->fisrt())
    @endif
