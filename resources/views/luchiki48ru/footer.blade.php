
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
        <div class="footer1 col-sm-6">© ООО «Центр остеопатии» 2015</div>
        <div class="octavian col-sm-5">
            Разработка, поддержка
            и продвижение сайта
        </div>
        <div class="octav col-sm-1">
            <a href="#"><img src="/cozn48.ru/img/octavian.png"></a>
        </div>
    </div>
    <div class="error">
        <a href="#" data-toggle="modal" data-target="#myModal">сообщить об ошибке</a>
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