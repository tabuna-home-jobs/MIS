<li>
    <a @if (count($category->children) == 0)href=" service?category={{$category->id}}" @endif>{{$category->name}}
        @if (count($category->children) > 0) <i class="fa fa-caret-down"></i> @endif
    </a>
    @if (count($category->children) > 0)
        <ul class="children-ul">
            @foreach($category->children as $category)
                @include('mother-babyru.category.category', $category)
            @endforeach
        </ul>
    @endif
</li>





