    <!--Футер-->
    <footer>
        <!--Нижнеее меню-->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-inner">
                    <div class="footer-logo">
                        <a href="/" title="Home Page">
                            <img src="/sokzn48.ru/img/logo_white.png" alt="Home Page">
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
                <p>© Семейный оздоровительный комплекс «СОК»  2015 - {{date('Y')}}</p>
                <p><small>Разработка, поддержка и продвижение сайтов <a href="http://octavian48.ru" target="_blank">Октавиан</a></small></p>
            </div>
        </div>
        <!--Копирайт-->
    </footer>
    <!--Футер-->
</body>
</html>
