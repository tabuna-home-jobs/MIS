@if($parent->parent)
    @include('mother-babyru.category.categoryName',['parent'=>$parent->parent])
@endif

{{$parent->name}}  &nbsp;&nbsp;&gt;&nbsp;&nbsp;
