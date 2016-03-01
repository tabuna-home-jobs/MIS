<div class="colourfull-row"></div>
<footer id="footer" class="light">
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h4><span>Информация</span></h4>
                    <ul class="footer-nav list-unstyled clearfix">
                        {!!Menu::getLI('2','footer', '<i class="fa fa-long-arrow-right"></i>')!!}
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h4><span>Мы в контакте</span></h4>
                    <div class="newsletter clearfix">

                        <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
                        <!-- VK Widget -->
                        <div id="vk_groups"></div>
                        <script type="text/javascript">
                            VK.Widgets.Group("vk_groups", {
                                mode: 0,
                                width: "auto",
                                color1: 'fafafa',
                                color2: '2B587A',
                                color3: '5B7FA6'
                            }, 55184919);
                        </script>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h4><span>Мы на Facebook</span></h4>

                    <div class="newsletter clearfix">

                        <div class="fb-page" data-href="https://www.facebook.com/zdorovie48/" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/zdorovie48/"><a href="https://www.facebook.com/zdorovie48/">Здоровье нации</a></blockquote></div></div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h4><span>Мы находимся</span></h4>
                    <div class="contact-widget">
                        <i class="fa fa-home"></i><p>г.Липецк, ул.Октябрьская, д.61</p>
                        <i class="fa fa-envelope"></i><p>mother-baby@mail.ru</p>
                        <i class="fa fa-mobile"></i><p class="phone-number">(4742) 227-887</p>
                        <i class="fa fa-clock-o"></i><p class="phone-number"> Будние дни: 8:00-21:00<br>
                            Суббота: 8:00-18:00<br>
                            Запись на прием  ежедневно с 8:00 до 21:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="copyright text-center">&copy; ООО "Здоровье Нации" <br>
        <small>Использование информации только с письменного разрешения.</small>
    </p>
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-md-2"><a href="/"><img src="/site1.ru/images/footer-logo.png" alt="" title="Здоровье Нации"></a></div>
            <div class="col-md-10">
                <p class="footer-bottom-text">Есть вещи, которые нельзя купить. Это наши главные жизненные ценности:
                    профессионализм, качество, гуманность, сплоченность.
                    С нами вы будете уверены в своём здоровье и в здоровье ваших близких. А что может быть дороже для
                    человека?<br>
                    Вы доверяете нам здоровье своих детей. Здоровье нации – наша цель.</p>
            </div>
        </div>
    </div>
</footer>
</div>


<script src="/site1.ru/js/jquery-revolution.js"></script>
<script src="/site1.ru/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/site1.ru/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<link rel="stylesheet" href="/site1.ru/js/fancy/jquery.fancybox.css">
<script src="/site1.ru/js/fancy/jquery.fancybox.pack.js"></script>

<script>

    var $optionSets = $('nav.primary ul'),
            $optionLinks = $optionSets.find('a');

    $optionLinks.click(function () {
        var $this = $(this);
        // don't proceed if already selected
        if ($this.hasClass('selected')) {
            return false;
        }
        var $optionSet = $this.parents('nav.primary ul');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
    });



    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });


</script>



<!-- Counters -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37436650-15', 'auto');
  ga('send', 'pageview');

</script>


<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t18.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,80))+";"+Math.random()+
"' alt='' title='LiveInternet: ???????? ????? ?????????? ?? 24"+
" ????, ??????????? ?? 24 ???? ? ?? ???????' "+
"border='0' width='0' height='0'><\/a>")
//--></script><!--/LiveInternet-->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter24562619 = new Ya.Metrika({
                    id:24562619,
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
<noscript><div><img src="https://mc.yandex.ru/watch/24562619" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
