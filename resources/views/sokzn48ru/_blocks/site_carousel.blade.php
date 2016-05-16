<div class="slider-sites autoplay">
    @foreach($block->items as $key => $item)
        <div class="sites-slide">
            <a href="http://mother-baby.ru/" target="_blank" alt="{{ $item->name }}">
                <img src="{{ $item->avatar }}">
            </a>
        </div>
    @endforeach

</div>
<script type="text/javascript">
    jQuery(document).ready(function($){
    $('.autoplay').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    });
</script>



