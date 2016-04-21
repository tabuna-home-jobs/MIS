@extends('sokzn48ru/ALTheader')

@section('title', $album['name'])
@section('description', $album['descript'])
@section('keywords', $album['tag'])
@section('avatar', $album['avatar'])

@section('content')


<div id="wrapper-content">
	<section class="page-title-wrapper">
		<div class="container clearfix">
			<div class="luchiki-heading"><h2>{{$album->name}}</h2>
			</div>
		</div>
		<div class="wrrr"></div>
	</section>
	<main role="main" class="site-content">
		<div class="page type-page status-publish hentry">
			<div class="entry-content">
				<div class="container">
					<div class="vc_row wpb_row vc_row-fluid bg-content-box luchiki-margin-top-35 bg-while">
						<div class="about-us-padding wpb_column vc_column_container vc_col-sm-12">
							<ul class="breadcrumb">
								<li><a href="/">Главная</a></li>

								<li><a href="/gallery/">Галерея</a></li>
								<li>{{$album->name}}</li>
							</ul>
							<div class="wpb_wrapper">


								<div class="luchiki-gallery">


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



									</div>


								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

@endsection
