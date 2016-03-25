@extends('sokzn48ru.app')


@section('content')



	<section class="well page-bg well-lg blog-bg text-white m-b-none">
		<div class="container text-center text-middle">
			<div class="lead">
				<h1>
					{{$album->name}}
				</h1>
			</div>
		</div>
	</section>



	<section class="container">


		<div class="wrapper-md">
			<div class="row">
				<div class="col-sm-9">
					<div class="blog-post">
						<div class="panel">
							<div class="wrapper-lg">
								<div  class="gallery-wrapper gallery-infinite-scroll">

									@forelse($videos as $video)
										<div class="col-xs-6">
											<div class="entry-thumbnail title">
												<h4>{{$video->name}}</h4>
												{!!$video->code!!}
											</div>
										</div>
									@empty
										<p>Нет видео</p>
									@endforelse

									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					@if(isset($LastNews))
						@include('sokzn48ru._layouts.newslsit',['listnews' => $LastNews])
					@endif
				</div>
			</div>
		</div>



	</section>




@endsection

