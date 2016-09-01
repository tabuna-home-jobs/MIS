
<div class="row m-b-xxl">
    <h1 class="text-center m-t-xxl  m-b-xxl">Медицинские услуги</h1>

    <div class="container text-center">
        <div class="w-full">
            @foreach($block->items as $key => $item)
                <div class="col-md-4 padder-v col-sm-6 service_item">
                    <a href="{{ $item->link }}" class="block">
                        <i class="fa {{ $item->descript }} fa-8x text-primary m-b-md" aria-hidden="true"></i>
                        <p class="h3 "><span class="text-muted-dm b-b-success">{{ $item->name }}</span></p>

                    </a>

                    {{ Block::make('index_goods_col'.($key+1), 'newzdorovie48ru/_blocks/index_goods_col', 50) }}
                </div>
            @endforeach
        </div>
    </div>
</div>
