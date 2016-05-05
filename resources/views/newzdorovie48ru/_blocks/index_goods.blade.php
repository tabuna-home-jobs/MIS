<div class="row m-b-xxl">
    <h1 class="text-center m-t-xxl  m-b-xxl">Услуги</h1>

    <div class="container text-center">
        <div class="w-full">
            @foreach($block->items as $key => $item)
                <div class="col-md-4 padder-v col-sm-6">
                    <a href="{{ $item->link }}" class="block"> <p class="h3 m-b-md"><span class="text-muted-dm b-b-success">{{ $item->name }}</span></p>
                        <i class="fa {{ $item->descript }} fa-8x text-primary" aria-hidden="true"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>