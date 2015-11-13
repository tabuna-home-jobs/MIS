@extends('medicalsystemtk/header')

@section('content')



    <div class="container">
        <nav class="primary clearfix">
                    <ul>
                        <li><a href="#" class="selected" data-filter="*">Все</a></li>
                    @foreach($albums as $album)
                      <li><a href="#" data-filter=".{{$album->name}}">{{$album->name}}</a></li>
                    @endforeach

                    </ul>
                  </nav>
                  
        <section class="main">
                    <div class="portfolio">



                        @foreach($photos as $photo)

                      <article class="entry {{$photo->getAlbum()->first()->name}}">
                      <div class="gallery-thumb">
                      	<span class="overlay"></span>
                            <a href="{{$photo->url}}" data-rel="prettyPhoto" class="link-preety"></a>
                       	<img src="{{$photo->url}}" alt="" height="200px">
                        </div>
                          <p></p>
                      </article>
                        @endforeach

                    </div>
                  </section>
    </div>








@endsection