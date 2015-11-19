<tr>
    <td>
        {{$category->id}}
    </td>
    <td>
        <img src="{{$category->avatar}}" alt="">
    </td>
    <td>
        {{$category->category()->first()->name or ''}}
    </td>
    <td>
        @if ($category->parent)
            @include('dashboard.category._partials.categoryName',['parent'=>$category->parent])
        @endif
        {{$category->name}}
    </td>
    <td class="pull-right">
        <a href="/dashboard/goods/add/{{ $category->id }}" class="btn btn-primary"><span class="fa fa-edit"></span>
        </a>

        <a href="/dashboard/goods/destroy/{{ $category->id }}" class="btn btn-danger"><span
                    class="fa fa-trash-o"></span></a>
    </td>
</tr>





@if (count($category->children) > 0)
    @foreach($category->children as $category)
        @include('dashboard.goods._partials.category', $category)
    @endforeach
@endif