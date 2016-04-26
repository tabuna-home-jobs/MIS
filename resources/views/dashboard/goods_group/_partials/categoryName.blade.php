@if($parent->parent)
    @include('dashboard.goods._partials.categoryName',['parent'=>$parent->parent])
@endif

{{$parent->name}}  &nbsp;&nbsp;&gt;&nbsp;&nbsp;
