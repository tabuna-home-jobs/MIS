<!-- Наши достоинства -->
<div class="row">
    <div class="paralax-3  parallax-main text-center v-center" data-type="background" data-speed="10">
        <div class="container padder-v text-white">
            <h1 class="text-center  m-b-xxl">Наши достоинства</h1>

            @foreach($block->items as $key => $item)
                <div class="col-sm-3 col-xs-6 @if($key > 1) hidden-xs @endif">
                    <p class="h3 m-b-xl inline b b-white rounded wrapper-xl">
                        <i class="fa w-1x fa {{ $item->descript }} fa-2x" aria-hidden="true"></i>
                    </p>

                    <div class="m-b-xl">
                        <p class="h4 m-t-none l-h-1x">{{ $item->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
