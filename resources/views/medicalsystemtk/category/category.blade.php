<div class="panel panel-sidebar">

    @if ( $category->parent)
        <div class="panel-heading">
            <h4 class="panel-title">
                @if(count($category->children) > 0)
                    <i style="cursor: pointer" class="fa fa-plus-square plus-service" data-toggle="collapse" data-parent="#accordion3" href="#{{$category->id}}"></i>
                @endif
                @if(count($category->children) == 0)
                    <i style="opacity: 0" class="fa fa-circle-o" data-toggle="collapse" data-parent="#accordion3" href="#{{$category->id}}"></i>
                @endif
                <a href="/service/{{$category->id}}" >
                    {{$category->name}}
                </a>

            </h4>
        </div>
    @endif

    @if (! $category->parent)

            <div class="panel-heading">
                <h4 class="panel-title">
                    @if(count($category->children) > 0)
                        <i style="cursor: pointer" class="fa fa-plus-square plus-service" data-toggle="collapse" data-parent="#accordion3" href="#{{$category->id}}"></i>
                    @endif
                        @if(count($category->children) == 0)
                            <i style="opacity: 0" class="fa fa-circle-o" data-toggle="collapse" data-parent="#accordion3" href="#{{$category->id}}"></i>
                        @endif
                    <a href="/service/{{$category->id}}" >
                        {{$category->name}}
                    </a>

                </h4>
            </div>

    @endif


    @if(count($category->children) > 0)

                <div id="{{$category->id}}" class="panel-collapse collapse">
                    @foreach($category->children as $category)
                    <div class="panel-body">
                        <a href="/service/{{$category->id}}"><i class="fa fa-angle-right"></i> {{$category->name}}</a>
                    </div>
                        @if(count($category->children) > 0)
                            @foreach($category->children as $category)
                                @include('medicalsystemtk.category.category', $category)
                            @endforeach
                        @endif
                    @endforeach
                </div>

    @endif
</div>






