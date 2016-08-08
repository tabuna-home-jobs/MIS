<style>


    .service_item {
        display: block;
        position: relative;
        height: 300px;
        padding: 25px;
        border: 1px solid #fafafa;
    }

    .service_item:hover {
        /* animation: fadeInFromNone 1s ease; */
        -webkit-animation-name: fadeBorder;
        -moz-animation-name: fadeBorder;
        -o-animation-name: fadeBorder;
        animation-name: fadeBorder;
        /* Задержка перед началом */
        -webkit-animation-delay: 600ms;
        -moz-animation-delay: 600ms;
        -o-animation-delay: 600ms;
        animation-delay: 600ms;
        /* Продолжительность анимации */
        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        -o-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    .service_item:hover i {
        max-height: 0;
    }

    .service_item:hover .h3 span {
        border-bottom: 2px solid #40b559;
    }

    .service_item:hover .service-item-nav {
        max-height: 350px;
        visibility: visible;

    }

    .service_item:not(hover) .service-item-nav {
        transition: 600ms ease;
        opacity: 1;
    }

    .service-item-nav {
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.5s linear;
        position: absolute;
        overflow: hidden;
        max-height: 0;
        padding: 14px 19px 0;
        transition: max-height 300ms ease-in;
        text-align: left;
        width: 100%;
        left: 0;
        right: 0;
        margin-top: 15px;
    }

    .service_item i {
        max-height: 350px;
        overflow: hidden;
        transition: 1s ease;
    }

    .service-item-nav li {
        width: 50%;
        float: left;
        opacity: 0;
        padding: 5px 15px;
    }

    .service-item-nav li a {
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .service_item:hover .service-item-nav li {
        /* animation: fadeInFromNone 1s ease; */
        -webkit-animation-name: fadeInFromNone;
        -moz-animation-name: fadeInFromNone;
        -o-animation-name: fadeInFromNone;
        animation-name: fadeInFromNone;
        /* Задержка перед началом */
        -webkit-animation-delay: 600ms;
        -moz-animation-delay: 600ms;
        -o-animation-delay: 600ms;
        animation-delay: 600ms;
        /* Продолжительность анимации */
        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        -o-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    @keyframes fadeBorder {
        100% {
            border: 1px solid rgba(0, 0, 0, .05);
            box-shadow: 0 2px 2px rgba(0, 0, 0, .05), 0 1px 0 rgba(0, 0, 0, .05);
        }
    }

    @-webkit-keyframes fadeInFromNone {
        0% {
            display: none;
            opacity: 0;
        }

        50% {
            display: block;
            opacity: 0.5;
        }

        60% {
            display: block;
            opacity: 0.6;
        }

        70% {
            display: block;
            opacity: 0.7;
        }

        80% {
            display: block;
            opacity: 0.8;
        }

        90% {
            display: block;
            opacity: 0.9;
        }

        100% {
            display: block;
            opacity: 1;
        }
    }

    @-moz-keyframes fadeInFromNone {
        0% {
            display: none;
            opacity: 0;
        }

        50% {
            display: block;
            opacity: 0.5;
        }

        60% {
            display: block;
            opacity: 0.6;
        }

        70% {
            display: block;
            opacity: 0.7;
        }

        80% {
            display: block;
            opacity: 0.8;
        }

        90% {
            display: block;
            opacity: 0.9;
        }

        100% {
            display: block;
            opacity: 1;
        }
    }

    @-o-keyframes fadeInFromNone {
        0% {
            display: none;
            opacity: 0;
        }

        50% {
            display: block;
            opacity: 0.5;
        }

        60% {
            display: block;
            opacity: 0.6;
        }

        70% {
            display: block;
            opacity: 0.7;
        }

        80% {
            display: block;
            opacity: 0.8;
        }

        90% {
            display: block;
            opacity: 0.9;
        }

        100% {
            display: block;
            opacity: 1;
        }
    }

    @keyframes fadeInFromNone {
        0% {
            display: none;
            opacity: 0;
        }

        50% {
            display: block;
            opacity: 0.5;
        }

        60% {
            display: block;
            opacity: 0.6;
        }

        70% {
            display: block;
            opacity: 0.7;
        }

        80% {
            display: block;
            opacity: 0.8;
        }

        90% {
            display: block;
            opacity: 0.9;
        }

        100% {
            display: block;
            opacity: 1;
        }
    }


</style>


<div class="row m-b-xxl">
    <h1 class="text-center m-t-xxl  m-b-xxl">Услуги</h1>

    <div class="container text-center">
        <div class="w-full">
            @foreach($block->items as $key => $item)
                <div class="col-md-4 padder-v col-sm-6 service_item">
                    <a href="{{ $item->link }}" class="block">
                        <i class="fa {{ $item->descript }} fa-8x text-primary m-b-md" aria-hidden="true"></i>
                        <p class="h3 "><span class="text-muted-dm b-b-success">{{ $item->name }}</span></p>

                    </a>

                    {{ Block::make('index_goods_col'.($key+1), 'newzdorovie48ru/_blocks/index_goods_col', 3) }}
                </div>
            @endforeach
        </div>
    </div>
</div>
