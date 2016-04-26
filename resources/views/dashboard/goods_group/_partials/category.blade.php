<tr>
    <td>
        {{$category->id}}
    </td>
    <td>
        <img style="width: 100px;" src="{{$category->avatar}}" alt="">
    </td>
    <td>
        {{$category->category()->first()->name or ''}}
    </td>
    <td>
        {{$category->name}}
    </td>
    <td class="pull-right">
        <a href="/dashboard/goods_group/add/{{ $category->id }}" class="btn btn-primary"><span class="fa fa-edit"></span>
        </a>

        <a href="/dashboard/goods_group/destroy/{{ $category->id }}" class="btn btn-danger"><span
                    class="fa fa-trash-o"></span></a>
    </td>
</tr>

