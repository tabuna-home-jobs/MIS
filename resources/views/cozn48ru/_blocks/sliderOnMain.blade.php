<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($block->items as $key => $item)
             <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" class="{{ ($key == 0) ? 'active' : '' }}"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($block->items as $key => $item)
        <div class="item {{ ($key == 0) ? 'active' : '' }}">
            <img alt="{{ $item->name }}" src="{{ $item->avatar }}">

            <div class="carousel-caption text-black">
                {!! $item->text !!}
            </div>
        </div>
        @endforeach
    </div>

    <!-- Controls -->

</div>

