{{--
<li>

    @if(count($category->children) > 0)
        <i class = "fa fa-plus-square"></i>
    @endif
    <a href="/service/{{$category->slug}}">{{$category->name}}</a>
    @if(count($category->children) > 0)
        <ul class="sub-menu-catalog">
            @foreach($category->children as $category)
                @include('newzdorovie48ru.category.category', $category)
            @endforeach
        </ul>
    @endif
</li>
--}}

@if(count($category->children) > 0)


    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$category->name}} <b class="caret"></b></a>
        <ul class="dropdown-menu navmenu-nav  dropdown-submenu" role="menu">
            @foreach($category->children as $category)
                @include('newzdorovie48ru.category.category', $category)
            @endforeach
        </ul>
    </li>



@else
    <li><a href="/service/{{$category->slug}}">{{$category->name}}</a></li>
@endif
