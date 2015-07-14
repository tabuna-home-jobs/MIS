<div class="colourfull-row"></div>
<footer id="footer" class="light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h4><span>Иформация</span></h4>
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
                            }, 20003922);
                        </script>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h4><span>Мы на Facebook</span></h4>
                    <div class="newsletter clearfix">

                        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h4><span>Мы находимся</span></h4>
                    <div class="contact-widget">
                        <i class="fa fa-home"></i><p>г.Липецк, ул.Октябрьская, д.61</p>
                        <i class="fa fa-envelope"></i><p>octavian48@yandex.ru</p>
                        <i class="fa fa-mobile"></i><p class="phone-number">(4742) 227-887, 227-8881</p>
                        <i class="fa fa-clock-o"></i><p class="phone-number"> Понедельник-пятница: 8:00-21:00<br>
                            Суббота: 8:00-18:00<br>
                            Воскресенье: 10:00-16:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="copyright text-center">&copy; ООО "Здоровье Нации" <br>
        <small>Использование информации только с письменного разрешения.</small>
    </p>
    <div class="container">
        <div class="row">
            <div class="col-md-2"><a href="/"><img src="/site1.ru/images/footer-logo.png" alt="" title="Medicom Logo"></a></div>
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
<!--<script src="/site1.ru/js/jquery.anythingslider.js"></script>-->
<!--<script src="/site1.ru/js/jquery.stellar.js"></script>-->
<!--<script src="/site1.ru/js/jquery-ui-1.10.3.custom.js"></script>-->
<!--<script src="/site1.ru/js/jquery.uniform.js"></script>-->
<!--Nimble-->
<script type="text/javascript" src="/site1.ru/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="/site1.ru/js/jquery.prettyPhoto.js"></script>
<!--jCarousel library-->
<!--<script type="text/javascript" src="/site1.ru/js/jquery.jcarousel.min.js"></script>-->







<script>
    //Portfolio
    var $container = $('.portfolio');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('nav.primary ul a').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });

    var $optionSets = $('nav.primary ul'),
            $optionLinks = $optionSets.find('a');

    $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
            return false;
        }
        var $optionSet = $this.parents('nav.primary ul');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
    });

    //preetyphotoeffect
    jQuery(document).ready(function(){
        jQuery('a[data-gal]').each(function() {
            jQuery(this).attr('rel', jQuery(this).data('gal'));
        });
        jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});

        //on click show content
        jQuery('.link-more').click(function(e) {
            jQuery('.content-sec').slideDown(1000);
        });
        //on click hide content
        jQuery('.cross').click(function(e) {
            jQuery('.content-sec').slideUp(1000);
        });

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






</body>
</html>