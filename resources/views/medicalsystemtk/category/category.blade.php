<li>
    @if(count($category->children) > 0)
        <i class = "fa fa-plus-square"></i>
    @endif
    <a href = "{{$category->id}}">{{$category->name}}</a>
    @if(count($category->children) > 0)
        <ul class="sub-menu-catalog">
            @foreach($category->children as $category)
                @include('medicalsystemtk.category.category', $category)
            @endforeach
        </ul>
    @endif
</li>