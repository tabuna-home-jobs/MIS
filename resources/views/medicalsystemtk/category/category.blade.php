<li>
    <a href=" service?category={{$category->id}}">{{$category->name}}
        @if (count($category->children) > 0) <i class="fa fa-caret-down"></i> @endif
    </a>
    @if (count($category->children) > 0)
        <ul class="children-ul">
            @foreach($category->children as $category)
                @include('medicalsystemtk.category.category', $category)
            @endforeach
        </ul>
    @endif
</li>





