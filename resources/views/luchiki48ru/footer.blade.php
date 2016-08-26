<div class="footer">
    <div class="container">
        <nav class="navbar navbar-default menu2">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        {!! Menu::getLi(7,'topmain','') !!}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="footer-block-1 col-md-3 hidden-xs col-sm-6">
            {!!Menu::getMenuByLayout('7','bottom','','footMenu')!!}
        </div>
        <div class="footer-block-2 col-md-3 col-sm-6">
            <div class="phone-footer">
                <img src="/luchiki48.ru/img/phone.png" alt="Телефон">
                +7 (4742) 77 03 97
            </div>
            <div class="adr-footer">
                <img src="/luchiki48.ru/img/adr.png" alt="Адрес">
                г. Липецк, ул. Неделина, 15-а
            </div>
            <div class="mail-footer">
                <img src="/luchiki48.ru/img/mail.png" alt="email">
                <a href="">info@luchiki.ru</a>
            </div>
            <div class="counts">
                <div class="count">
                    <!-- Yandex.Metrika informer -->
                    <a href="https://metrika.yandex.ru/stat/?id=37608630&amp;from=informer"
                       target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/37608630/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                           style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:37608630,lang:'ru'});return false}catch(e){}" /></a>
                    <!-- /Yandex.Metrika informer -->

                    <!-- Yandex.Metrika counter -->
                    <script type="text/javascript">
                        (function (d, w, c) {
                            (w[c] = w[c] || []).push(function() {
                                try {
                                    w.yaCounter37608630 = new Ya.Metrika({
                                        id:37608630,
                                        clickmap:true,
                                        trackLinks:true,
                                        accurateTrackBounce:true,
                                        webvisor:true
                                    });
                                } catch(e) { }
                            });

                            var n = d.getElementsByTagName("script")[0],
                                    s = d.createElement("script"),
                                    f = function () { n.parentNode.insertBefore(s, n); };
                            s.type = "text/javascript";
                            s.async = true;
                            s.src = "https://mc.yandex.ru/metrika/watch.js";

                            if (w.opera == "[object Opera]") {
                                d.addEventListener("DOMContentLoaded", f, false);
                            } else { f(); }
                        })(document, window, "yandex_metrika_callbacks");
                    </script>
                    <noscript><div><img src="https://mc.yandex.ru/watch/37608630" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                    <!-- /Yandex.Metrika counter -->
                </div>
                <div class="count">
                    <!--LiveInternet counter--><script type="text/javascript"><!--
                        document.write("<a href='//www.liveinternet.ru/click' "+
                                "target=_blank><img src='//counter.yadro.ru/hit?t14.6;r"+
                                escape(document.referrer)+((typeof(screen)=="undefined")?"":
                                ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                                        screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                                ";"+Math.random()+
                                "' alt='' title='LiveInternet: показано число просмотров за 24"+
                                " часа, посетителей за 24 часа и за сегодня' "+
                                "border='0' width='88' height='31'><\/a>")
                        //--></script><!--/LiveInternet-->
                </div>
            </div>

        </div>
        <div class="footer-block-3 col-md-3 ">

            {{--
            <!--<script type="text/javascript" src="//vk.com/js/api/openapi.js?117"></script>-->
            <!-- VK Widget -->
            <!--<div id="vk_groups"></div>-->
            <!--<script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 0, width: "260", height: "260", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 20003922);
            </script>-->
            --}}


        </div>
        <div class="footer-block-4 col-md-3 col-sm-12">
            <h5>© Студия раннего развития детей «Лучики». Развивающие занятия. <br> 2015 - {{date('Y')}}</h5>
            <br>
            <img src="/luchiki48.ru/img/minobr.png" class="img-responsive" alt="Министерство образования и науки Российской Федераци">
            <br>

        </div>
    </div>
</div>

</body>
</html>
