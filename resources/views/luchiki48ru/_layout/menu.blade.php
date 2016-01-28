<ul id="main-menu" class="nav navbar-nav main-menu">
	@foreach($items as $item)


		<li class="menu-item menu-item-type-custom menu-item-object-custom {{$item['class']}}">
			<a href="{{$item['link']}}" class="animsition-link dropdown-toggle disabled " data-toggle="dropdown">
                <span>{{$item['label']}}</span>
			</a>
		</li>
	@endforeach

</ul>
