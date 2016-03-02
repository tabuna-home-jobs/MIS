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
        <div class="footer-block-1 col-md-3 hidden-xs">
            {!!Menu::getMenuByLayout('7','bottom','','footMenu')!!}
        </div>
        <div class="footer-block-2 col-md-3">
            <div class="phone-footer">
                <img src="/luchiki48.ru/img/phone.png">
                +7 (4742) 77 03 97
            </div>
            <div class="adr-footer">
                <img src="/luchiki48.ru/img/adr.png">
                г. Липецк, ул. Неделина, 15-а
            </div>
            <div class="mail-footer">
                <img src="/luchiki48.ru/img/mail.png">
                <a href="">info@luchiki.ru</a>
            </div>
            <img src="/luchiki48.ru/img/minobr.png">
        </div>
        <div class="footer-block-3 col-md-3">
            <!--<script type="text/javascript" src="//vk.com/js/api/openapi.js?117"></script>-->
            <!-- VK Widget -->
            <!--<div id="vk_groups"></div>-->
            <!--<script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 0, width: "260", height: "260", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 20003922);
            </script>-->
        </div>
        <div class="footer-block-4 col-md-3">
            <h5>Студия раннего развития детей «Лучики»</h5>
            <p>Фундаментальные отрасли психологии имеют
                общее значение в изучении психических
                явлений. Это базис, который объединяет все
                отрасли психологии, а также служит основой их
                развития. Фундаментальные отрасли, как
                правило, называют термином «общая
                психология». Основными понятиями, которые
                рассматривает общая психология, являются:
                познавательные процессы (ощущения,
                восприятия, внимание, представления, память</p>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".fancybox").fancybox();
    });
</script>
</body>
</html>
