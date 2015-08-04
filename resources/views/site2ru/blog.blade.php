@extends('site2ru/headerALT')

@section('content')


        <!-- ================================ -->
<!-- ========== Begin Blog Style ========== -->
<!-- ================================ -->
<div class="blogMasonry">

    <div class="col-xs-12">
        <div class="heading_e"><h3>Новости группы компании</h3>

            <p>Тут можно тоже что то написать для превлечения внимания</p><h4><img
                        src="/site2.ru/wp-content/themes/medic-final/assets/img/heading.png" alt="heading"></h4>
        </div>
    </div>


    <div class="container xsx-width">
        <div class="row alternate-divs">


            <!-- ===== Begin Blog blocks ===== -->

            <!-- ===== Begin Thumbnails ===== -->

            @foreach($News as $key => $value)


                <div class="col-md-4">


                    <div class="elements_news_c">
                        <div class="thumbnail news_c">
                            <img width="400" height="266"
                                 src="{{$value['avatar']}}"
                                 class="attachment-blog_masonery wp-post-image" alt="Dental checkup"/></div>
                        <div class="caption_news_c news_1">
                            <div class="icon">
                                <div class="icon-1">
                                    <i class="fa fa-phone fa-lg"></i>
                                </div>
                                <div class="icon-2">
                                    <!-- ===== You can change the icon just below ===== -->
                                    <i class="fa fa-pencil fa-lg"></i>
                                </div>
                            </div>
                            <h4><a href="/blog/{{$value['id']}}">{{$value['name']}}</a></h4>

                            <p> {{str_limit((strip_tags($value['content'])), $limit = 130, $end = '...')}}</p>

                        </div>
                    </div>

                </div>
                @endforeach


                        <!-- ===== End Thumbnails ===== -->



                <!-- ===== End Blog blocks ===== -->
        </div>
        <!-- ===== Begin Pagination ===== -->
        <div class="row text-center">
            <!-- ========== START PAGINATION ========== -->
            {!! $News->render() !!}
                    <!-- ========== END PAGINATION ========== -->
        </div>
        <!-- ===== End Pagination ===== -->
    </div>
</div>
<!-- ================================ -->
<!-- ========== End Blog Style ========== -->


@endsection