<li>

    @if(count($category->children) > 0)
        <i class = "fa fa-plus-square"></i>
    @endif
    <a href="{{$category->slug}}">{{$category->name}}</a>
    @if(count($category->children) > 0)
        <ul class="sub-menu-catalog">
            @foreach($category->children as $category)
                @include('zdorovie48ru.category.category', $category)
            @endforeach
        </ul>
    @endif
</li>