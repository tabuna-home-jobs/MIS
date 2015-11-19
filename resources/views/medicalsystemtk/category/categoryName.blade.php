@if($parent->parent)
    @include('medicalsystemtk.category.categoryName',['parent'=>$parent->parent])
@endif

{{$parent->name}}  &nbsp;&nbsp;&gt;&nbsp;&nbsp;
