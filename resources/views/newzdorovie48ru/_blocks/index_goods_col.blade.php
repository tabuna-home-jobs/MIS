@if(count($block->items)>1)
    <ul class="service-item-nav">
        @foreach($block->items as $key => $item)
            <li >
                <a href="{{ $item->link }}" >
                    {{ $item->name }}

                </a>
            </li>

    @endforeach
    </ul>
@endif
