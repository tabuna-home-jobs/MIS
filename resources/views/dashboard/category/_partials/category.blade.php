<tr>
    <td>
        @if ($category->parent)
            @include('dashboard.category._partials.categoryName',['parent'=>$category->parent])
        @endif
        {{$category->name}}</td>
    <td class="pull-right">
        <a href="/dashboard/category/add/{{ $category->id }}" class="btn btn-primary"><span class="fa fa-edit"></span>
        </a>
        <a href="/dashboard/goods/category/{{ $category->id }}" class="btn btn-info"><span
                    class="glyphicon glyphicon-list-alt"></span> </a>
        <a href="/dashboard/category/destroy/{{ $category->id }}" class="btn btn-danger"><span
                    class="fa fa-trash-o"></span></a>
    </td>
</tr>





@if (count($category->children) > 0)
    @foreach($category->children as $category)
        @include('dashboard.category._partials.category', $category)
    @endforeach
@endif