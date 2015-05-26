<div class="colourfull-row"></div>
<footer id="footer" class="light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <h4><span>Medicom</span></h4>
                    <ul class="footer-nav list-unstyled clearfix">
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Home</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Doctors</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>About US</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Departments</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Services</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Blog</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Why US</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Medical Care</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Specilaties</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Timetable</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Events</a></li>
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i>Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h4><span>Мы в контакте</span></h4>
                    <div class="newsletter clearfix">

                        <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
                        <!-- VK Widget -->
                        <div id="vk_groups"></div>
                        <script type="text/javascript">
                            VK.Widgets.Group("vk_groups", {mode: 0, width: "auto", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 20003922);
                        </script>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h4><span>Latest Tweets</span></h4>
                    <div class="twitter-widget">
                        <div class="tweet">
                            <i class="fa fa-twitter"></i>
                            <p><a href="#">@Rotography</a> Please kindly use our Support Forum: <a href="#.">pixelatic.co.uk.</a>
                                <span>about a month ago</span>
                            </p>
                        </div>
                    </div>
                    <div class="tweet">
                        <i class="fa fa-twitter"></i>
                        <p><a href="#">@Rotography</a> Please kindly use our Support Forum: <a href="#.">pixelatic.co.uk.</a>
                            <span>about a month ago</span>
                        </p>
                    </div>
                    <div class="tweet">
                        <i class="fa fa-twitter"></i>
                        <p><a href="#">@Rotography</a> Please kindly use our Support Forum: <a href="#.">pixelatic.co.uk.</a>
                            <span>about a month ago</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
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
    <p class="copyright text-center">Copyright &copy; 2014 Medicom. All right reserved.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-2"><a href="#."><img src="/site1.ru/images/footer-logo.png" alt="" title="Medicom Logo"></a></div>
            <div class="col-md-10">
                <p class="footer-bottom-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
            </div>
        </div>
    </div>
</footer>
</div><!--end #wrapper-->





<script src="/site1.ru/js/jquery-revolution.js"></script>
<script src="/site1.ru/js/bootstrap.min.js"></script>
<script src="/site1.ru/js/jquery.anythingslider.js"></script>
<script src="/site1.ru/js/jquery.stellar.js"></script>
<script src="/site1.ru/js/jquery-ui-1.10.3.custom.js"></script>
<script src="/site1.ru/js/jquery.uniform.js"></script>
<!--Nimble-->
<script type="text/javascript" src="/site1.ru/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="/site1.ru/js/jquery.prettyPhoto.js"></script>
<!--jCarousel library-->
<script type="text/javascript" src="/site1.ru/js/jquery.jcarousel.min.js"></script>







<script>
    //Portfolio
    var $container = $('.portfolio');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
        }
    });

    $('nav.primary ul a').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
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



</script>






</body>
</html>