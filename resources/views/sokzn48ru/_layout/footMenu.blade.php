<ul id="footer-menu" class="footer-menu">
    @foreach($items as $item)
        <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1009 {{$item['class']}}">
            <a href="{{$item['link']}}">{{$item['label']}}</a>
        </li>
    @endforeach
</ul>
