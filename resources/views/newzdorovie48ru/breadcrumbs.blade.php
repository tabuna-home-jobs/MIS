@foreach($crumbs as $crumb)
    <li><a href="{{$crumb['slug']}}">{{$crumb['name']}}</a></li>
@endforeach