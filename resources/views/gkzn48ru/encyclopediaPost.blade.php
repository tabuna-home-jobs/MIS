
@extends('gkzn48ru/headerALT')


@section('title', $post->title)
@section('description', $post->descript)
@section('keywords', $post->tag)



@section('headerTitle',$post->name)




@section('content')





    <div class="all_departaments">
        <div class="container xsx-width">
            <div class="row">
                <!-- ===== Begin Triggers List ===== -->
                <aside class="col-md-3 allD">



                    <div id="text-6" class="widget widget-widget_text">
                        <div class="textwidget">
                            <div class="widget widget-form-white-short">
                                <div class="forM">

                                    <form method="get" action="/encypost">
                                        <input type="text" class="form-control"  required name="search" placeholder="Поиск...">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>


                    <ul>


                        @foreach($MainElementMenu as $mainElement)
                            <li>
                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse{{$mainElement->id}}">
                                    <i class="fa fa-angle-right"></i> {{$mainElement->name}}
                                </a>
                            </li>

                            <div id="collapse{{$mainElement->id}}" class="panel-collapse collapse">

                                @foreach($mainElement->subCategory()->get() as $subMenu)

                                    <p class="text-center">
                                        <a href="/medencyclopedia/{{$subMenu->id}}">{{$subMenu->name}}</a>
                                    </p>
                                @endforeach


                            </div>
                        @endforeach



                    </ul>

                    <div class="sidebar-widget clearfix">
                        <h2 class="bordered light">Алфавитный указатель</h2>
                        <ul class="archives">
                            @foreach($Index as $bukva)
                                <li><a href="/encypost?index={{$bukva->name}}"><i class="fa fa-long-arrow-right"></i>{{$bukva->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>




                </aside>
                <!-- ===== End Triggers List ===== -->

                <!-- ===== Begin All Sections ===== -->
                <div class="col-md-9">
                    <div class="all_dp_elements">
                        <div class="caption_all_dp">
                            <h3>{{$post->name}}</h3>


                                <img src="{{ $post->avatar }}" alt="{{$post->name}}">
                                <div class="col-xs-12">
                                        <div data-example-id="togglable-tabs" class="bs-example bs-example-tabs">
                                            <ul role="tablist" class="nav nav-tabs nav-justified nav-pills" id="myTabs">
                                                <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="opisanie-tab" href="#opisanie">Описание</a></li>
                                                <li role="presentation" class=""><a aria-controls="history" data-toggle="tab" id="history-tab" role="tab" href="#history" aria-expanded="false">История</a></li>
                                                <li role="presentation" class=""><a aria-controls="lechenie" data-toggle="tab" id="lechenie-tab" role="tab" href="#lechenie" aria-expanded="false">Лечение</a></li>
                                                <li role="presentation" class=""><a aria-controls="diagnostica" data-toggle="tab" id="diagnostica-tab" role="tab" href="#diagnostica" aria-expanded="false">Диагностика</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div aria-labelledby="opisanie-tab" id="opisanie" class="tab-pane fade active in" role="tabpanel">
                                                    {!! $post->opisanie !!}
                                                </div>
                                                <div aria-labelledby="history-tab" id="history" class="tab-pane fade" role="tabpanel">
                                                    {!! $post->history !!}
                                                </div>

                                                <div aria-labelledby="lechenie-tab" id="lechenie" class="tab-pane fade" role="tabpanel">
                                                    {!! $post->lechenie !!}
                                                </div>

                                                <div aria-labelledby="diagnostica-tab" id="diagnostica" class="tab-pane fade" role="tabpanel">
                                                    {!! $post->diagnostica !!}
                                                </div>

                                            </div>
                                        </div>





                                    <div class="row">

                                            <ul class="social-rounded pull-right">
                                                <li><a href="http://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com/share?url={{Request::url()}}" target="_blank"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://plus.google.com/share?url={{Request::url()}}" target="_blank"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                <li><a href="http://vkontakte.ru/share.php?url={{Request::url()}}" target="_blank"><i
                                                                class="fa fa-vk"></i></a></li>
                                                <li><a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl={{Request::url()}}"
                                                       target="_blank"><i class="fa fa-odnoklassniki"></i></a></li>
                                            </ul>
                                    </div>

                                    <small class="pull-right">Опубликованно: {{$post->created_at->diffForHumans()}}</small>












                                    </div>
                                </div>



                        </div>


                    </div>


                </div>
                <!-- ===== End All Sections ===== -->
            </div>
        </div>
    </div>




















@endsection



