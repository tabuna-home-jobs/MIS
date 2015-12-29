<div class="footer">
    <div class="container">
        <div class="be-careful col-md-12">
            Имеются противопоказания, необходима консультация специалистов
        </div>
        <div class="share col-md-12">
        <div class="col-md-5">Подлелиться с друзьями с социальных сетях</div>
        <div class=" col-md-7 ya-share2" data-services="vkontakte,facebook,odnoklassniki" data-counter=""></div>
        </div>
    </div>
    <div class="footer-menu container">
        <nav class="navbar navbar-default footer-menu-nav">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        {!! Menu::getLi(10,'topmain','') !!}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div class="container">
        <div class="left-footer col-md-4">
            <p>Принимаем к оплате:</p>
            <img src="/stomzn48.ru/img/visa.png">
        </div>
        <div class="center-footer col-md-4"><img src="/stomzn48.ru/img/logo.png"></div>
        <div class="right-footer col-md-4">
            <div class="col-md-7">Присоединяйтесь к нам в соцсетях:</div>
            <div class="col-md-5 social-links">
                <a href="http://vk.com/zdorovie_nacii48" alt="Мы вконтакте" title="Мы вконтакте"></a>
                <a href="http://www.odnoklassniki.ru/group52174602436776" alt="Мы в одноклассниках" title="Мы в одноклассниках"></a>
                <a href="https://www.facebook.com/groups/zdorovie48/ " alt="Мы на фейсбуке" title="Мы на фейсбуке"></a>
            </div>
        </div>
        <div class="copyrights col-md-12">
            <div class="copy-firm col-md-7">
                © 2015, г.Липецк, Стоматология<br>
                Представленная на сайте информация носит исключительно ознакомительный характер
            </div>
            <div class="copy-octavian col-md-5">
                <p>Разработка, поддержка и продвижение сайтов<a href="http://octavian48.ru/"><img src="/stomzn48.ru/img/octavian.png"></a><p>
                    <a href="#openModal">Сообщить об ошибке</a>
            </div>
        </div>
    </div>
</div>
</div>

<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2>Сообщение об ошибке</h2>
        <form action="/" method="post" id="err-form">
            <input type="hidden" name="modal2" id="modal2" value="false" />
            <input type = "hidden" name="page" id="page" value="">
          <textarea name="error-req" type="text" placeholder="Опишите ошибку:" required></textarea>
          <button>Отправить</button>
        </form>
    </div>
</div>

</body>
</html>