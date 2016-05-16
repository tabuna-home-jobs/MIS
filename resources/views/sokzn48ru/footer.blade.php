    <!--Футер-->
    <footer>
        <!--Нижнеее меню-->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-inner">
                    <div class="footer-logo">
                        <a href="/" title="Home Page">
                            <img src="/sokzn48.ru/img/sok_c.png" alt="Home Page">
                        </a>
                    </div>
                    <div class="footer-menu-container">
                        {!!Menu::getMenuByLayout('9','Нижнее меню','','footMenu')!!}
                    </div>
                </div>
            </div>
        </div>
        <!--Нижнеее меню-->

        <!--Копирайт-->
        <div class="footer-copyright">
            <div class="footer-copyright-inner">
                <div class="foot_socs">

                    <div class="f_soc">
                        <!-- Put this script tag to the place, where the Share button will be -->
                        <script type="text/javascript"><!--
                            document.write(VK.Share.button(false,{type: "custom", text: "<img src=\"http://vk.com/images/share_32.png\" width=\"30\" height=\"30\" />"}));
                            --></script>
                    </div>

                    <div class="f_soc">
                        <div id="ok_shareWidget"></div>
                        <script>
                            !function (d, id, did, st) {
                                var js = d.createElement("script");
                                js.src = "https://connect.ok.ru/connect.js";
                                js.onload = js.onreadystatechange = function () {
                                    if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                                        if (!this.executed) {
                                            this.executed = true;
                                            setTimeout(function () {
                                                OK.CONNECT.insertShareWidget(id,did,st);
                                            }, 0);
                                        }
                                    }};
                                d.documentElement.appendChild(js);
                            }(document,"ok_shareWidget",document.URL,"{width:30,height:35,st:'rounded',sz:30,nt:1,nc:1}");
                        </script>
                    </div>

                    <div class="f_soc">
                        <a onClick='window.open ("http://www.facebook.com/sharer.php?u={{Request::url()}}","mywindow","menubar=1,resizable=1,width=650,height=550");' class="face_foot"></a>
                    </div>


                </div>
                <p>© Семейный оздоровительный комплекс «СОК»  2015 - {{date('Y')}}</p>
                <p><small>Разработка, поддержка и продвижение сайтов <a href="http://octavian48.ru" target="_blank">Октавиан</a></small></p>
            </div>
        </div>
        <!--Копирайт-->
    </footer>
    <!--Футер-->
</body>
</html>
