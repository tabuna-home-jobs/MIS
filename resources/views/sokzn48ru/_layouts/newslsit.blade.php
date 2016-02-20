<!-- Блок "Последнии новости" для правой колонки -->

<h5 class="font-bold">Последние новости</h5>
<div>
	@foreach($LastNews as $new)
		<div>
			<a class="pull-left thumb thumb-wrapper m-r" href="/blog/{{$new->id}}">
				<img src="{{$new->avatar}}">
			</a>
			<div class="clear">
				<a href="/blog/{{$new->id}}" class="font-semibold text-ellipsis">{{$new->name}}</a>
				<p><small>{{str_limit(strip_tags($new->content), 50, '...')}}</small></p>
				<div class="text-xs block m-t-xs">

					{{$new->created_at->diffForHumans()}}
				</div>
			</div>
		</div>
		<div class="line"></div>
	@endforeach

</div>
