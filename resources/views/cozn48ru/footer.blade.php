
<!--end downhead-->
<div class="footer">
    <div class="downhead">
        <div class="buttons footer-buttons">
            <nav class="navbar navbar-default container footer-nav">
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
                            {!! Menu::getLi(6,'top','') !!}
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>


    <div class="container">
        <div class="footer1 col-sm-6">© ООО «Центр остеопатии» 2015 - {{date('Y')}}
            <div class="couns hidden-xs">
                <div class="count">
                    <!-- Yandex.Metrika informer -->
                    <a href="https://metrika.yandex.ru/stat/?id=37609410&amp;from=informer"
                       target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/37609410/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                           style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:37609410,lang:'ru'});return false}catch(e){}" /></a>
                    <!-- /Yandex.Metrika informer -->

                    <!-- Yandex.Metrika counter -->
                    <script type="text/javascript">
                        (function (d, w, c) {
                            (w[c] = w[c] || []).push(function() {
                                try {
                                    w.yaCounter37609410 = new Ya.Metrika({
                                        id:37609410,
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
                    <noscript><div><img src="https://mc.yandex.ru/watch/37609410" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
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
        <div class="octavian col-sm-5">
            Разработка, поддержка
            и продвижение сайта
        </div>
        <div class="octav col-sm-1">
            <a href="http://octavian48.ru/" target="_blank"><img src="/cozn48.ru/img/octavian.png" alt="Октавиан"></a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form id="otchet" action="/" method="get">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Отчёт об ошибке</h4>
                    </div>
                    <div class="modal-body obltext">
                        <textarea name="report_error"></textarea>
                        <input name="hid_report" id="report_url_page" type="hidden">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        <button id="sendotchet" type="button" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!--end footer-->
</body>
</html>
