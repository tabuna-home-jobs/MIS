<ul id="main-menu" class="nav navbar-nav main-menu">
	@foreach($items as $item)


		<li class="menu-item menu-item-type-custom menu-item-object-custom {{$item['class']}}

		@if(isset($item['child']))
				menu-item-has-children dropdown drop-to-left
            @endif
				">
			<a href="{{$item['link']}}" class="animsition-link dropdown-toggle disabled " data-toggle="dropdown">
                <span>{{$item['label']}}</span>
				@if(isset($item['child']))
					<b class="caret"></b>
				@endif

			</a>

			@if(isset($item['child']))

			<ul class="dropdown-menu">
				@foreach($item['child'] as $child)
				<li class="menu-item menu-item-type-custom menu-item-object-custom drop-to-left">
					<a href="{{$child['link']}}" class="animsition-link ">{{$child['label']}}</a>
				</li>
				@endforeach
			</ul>
			@endif
		</li>
	@endforeach

</ul>
