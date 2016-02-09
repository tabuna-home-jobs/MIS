@extends('luchiki48ru/ALTheader')
@section('content')


<div id="wrapper-content">
	<section class="page-title-wrapper">
		<div class="container clearfix">
			<div class="cupid-heading"><h2>{{$album->name}}</h2>
			</div>
		</div>
		<div class="wrrr"></div>
	</section>
	<main role="main" class="site-content">
		<div class="page type-page status-publish hentry">
			<div class="entry-content">
				<div class="container">
					<div class="vc_row wpb_row vc_row-fluid bg-content-box cupid-margin-top-35 bg-while">
						<div class="about-us-padding wpb_column vc_column_container vc_col-sm-12">
							<div class="wpb_wrapper">


								<div class="cupid-gallery">


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
