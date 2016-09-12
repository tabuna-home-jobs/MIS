<!--footer-->
<div class="footer ">
    <div class="container">
        <nav class="navbar navbar-default menu2">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">О центре</a></li>
                        <li><a href="#">Лицензии</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Отзывы</a></li>
                        <li><a href="#">Запись</a></li>
                        <li><a href="#">ON-LINE</a></li>
                        <li><a href="#">Специалисты</a></li>
                        <li><a href="#">Наши услуги</a></li>
                        <li><a href="#">Цены</a></li>
                        <li><a href="#">Вопрос-ответ</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div class="footer-left col-md-7">
            <div class="footer-left-top">
                <span>+7 (4742) 227-887</span>
                г. Липецк, ул. Советская, д. 66; ул. Фрунзе, д.14
                <a href="">mother-baby@mail.ru</a>
            </div>
            <div class="footer-left-middle">
                <span>Принимаем к оплате:</span>
                <img src="/mother-baby.ru/img/cards.png">
            </div>
            <div class="footer-left-bottom">
                <span>
                © 2004-2015, г.Липецк, Медицинский центр «Центр Детского Здоровья» Все права защищены.
                Копирование материалов разрешается только с письменного разрешения «Центр Детского Здоровья»
                Представленная на сайте информация носит исключительно ознакомительный характер 
                </span>
            </div>
        </div>
        <div class="footer-left col-md-5">
            <div class="social-footer col-md-6">
                <a href=""><img src="/mother-baby.ru/img/vk.png"></a>
                <a href=""><img src="/mother-baby.ru/img/ok.png"></a>
                <a href=""><img src="/mother-baby.ru/img/fb.png"></a>
            </div>
            <div class="clock-footer col-md-2">
                <img src="/mother-baby.ru/img/clock.png">
            </div>
            <div class="schedule-footer col-md-4">
                <span>
                Пн-Пт: 8:00-21:00
                Сб: 8:00-18:00
                Вс: 10:00-16:00 (в режиме записи)
                </span>
            </div>
            <div class="octavian col-md-12">
                <span>
                Создание и продвижение сайта
                Креативное Агентство Октавиан
                </span>
            </div>
        </div>
    </div>
</div>
<!--end footer-->

<script type="text/javascript" src="/mother-baby.ru/js/jquery.js"></script>
<script type="text/javascript" src="/mother-baby.ru/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/mother-baby.ru/js/slick.min.js"></script>

<script>

    //Добавление страницы в закладки
    function addFavorite(a) {
        var title = document.title;
        var url = document.location;
        try {
            // Internet Explorer
            window.external.AddFavorite(url, title);
        }
        catch (e) {
            try {
                // Mozilla
                window.sidebar.addPanel(title, url, "");
            }
            catch (e) {
                // Opera
                if (typeof(opera)=="object" || window.sidebar) {
                    a.rel="sidebar";
                    a.title=title;
                    a.url=url;
                    a.href=url;
                    return true;
                }
                else {
                    // Unknown
                    alert('Нажмите Ctrl-D чтобы добавить страницу в закладки');
                }
            }
        }
        return false;
    }

</script>

<script type="text/javascript">
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1006,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
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
</script>

<script type="text/javascript">
    $('.center').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1006,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script >

<script type="text/javascript">

    //vue.js controller
        var Main = new Vue({
            el: '#vueMain',
            data: {
                isActive: [
                    true,
                    false,
                    false
                ],
                isNext: [
                    true,
                    false,
                    false
                ],
                items: {
                    'spec': [],
                    'fio':[],
                    'dateVal':[

                    ],
                    'dateView':[

                    ]
                },

                place:'',
                'spec':'',
                fio:'',
                csrf:''
            },
            methods: {
                'requestSpec':function(who){

                    var url='';
                    var index = '';
                    var index_json = '';
                    var date = '';

                    switch (who) {
                        case 'spec':
                            url = '/appointment/special/'+this.place;
                            index = "spec";
                            index_json = 'specialization';
                                    break
                        case 'fio':
                            url = '/appointment/fio/'+this.place+'/'+this.spec;
                            index = "fio";
                            index_json = 'name';
                                    break

                        case 'date':
                            url = '/appointment/time/'+this.place+'/'+this.spec+'/'+this.fio;
                            index = "dateView";
                            index_json = 'beginning';

                                    break
                    }


                    var its = this;
                    $.ajax({
                        type: "POST",
                        url: url,
                        beforeSend: function(request) {
                            request.setRequestHeader('X-CSRF-Token', its.csrf);
                        },
                        success: function(msg){

                            its.items[index].splice(0,its.items[index].length);
                            date = '';
                            for(var i = 0; msg.length > i; i++)
                            {
                                if(msg[i].beginning){
                                    var beginning = new Date(msg[i].beginning * 1000).toLocaleString();
                                    var end = new Date(msg[i].end * 1000).toLocaleString();

                                    date = 'с '+beginning+' | по '+ end;
                                    its.items.dateVal.push(msg[i][index_json]);
                                    msg[i][index_json] = date;
                                }


                                its.items[index].push(msg[i][index_json]);

                            }



                        }
                    });
                },
                next: function(who) {
                    this.isNext.splice(who,1,true);
                    this.changeActive(who);
                },
                changeActive:function(who){
                    if(this.isNext[who]){
                        this.isActive.splice(0,2+1,false,false,false);
                        this.isActive.splice(who,1,true);
                    }

                }
            }
        });

</script>

</body>
</html>