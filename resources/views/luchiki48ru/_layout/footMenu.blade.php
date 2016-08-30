<ul id="footer-menu" class="footer-menu">
    @foreach($items as $item)
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1009 {{$item['class']}}">
            @if(!$item['active'] )
                <a href="{{$item['link']}}">{{$item['label']}}</a>
            @else
                <a class='dissable'>{{$item['label']}}</a>
            @endif
        </li>
    @endforeach
</ul>
