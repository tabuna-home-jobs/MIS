<tr>
    <td>
        {{$subGood->id}}
    </td>
    <td>
        <img style="width: 100px;" src="{{$subGood->avatar}}" alt="">
    </td>
    <td>
        {{$subGood->getParent()->first()->name or ''}}
    </td>
    <td>
        {{--
        @if ($category->parent_good)
            @include('dashboard.category._partials.categoryName',['parent'=>$category->parent])
        @endif--}}
        {{$subGood->name}}
    </td>
    <td class="pull-right">
        <a href="/dashboard/subgoods/add/{{ $subGood->id }}" class="btn btn-primary"><span class="fa fa-edit"></span>
        </a>

        <a href="/dashboard/subgoods/destroy/{{ $subGood->id }}" class="btn btn-danger"><span
                    class="fa fa-trash-o"></span></a>
    </td>
</tr>

