 
</div> <!--  close continaer of index-->



<div class="BackgroundFooterLink">
    <div class="row-fluid">
        <div class="container">
            <div class="span4">
                <h3>Ubicación:</h3>
                Calle Las Lausonias #291 <br>
                San Juan de Lurigancho<br>
                Lima-Perú<br>
            </div>
            <div class="span4">
                <h3>Citas:</h3>
                375-1819 <br>
                Telf.: 94566-4565<br>
                (511) 99-419*1119<br>
            </div>
            <div class="span4">
                Aceptamos todas las tarjetas de crédito:<br><br>
                <img src="/images/tarjetas-1.jpg"/>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="row-fluid">
        <div class="span12">
            <div class="footer">
                <div class="span2 hidden-phone">
                </div>
                <div class="span8">
                    <div class="center" style="font-size:13px;">
                        Copyright © 2014 - ODONTOLOGICO CMO SAC. <br/>
                        <!--Calle Los Eucaliptos  #162 La Molina (511)  123-1236     C. 999-30-8227-->
                        info@odontologicocmo.com
                    </div>
                </div>
                <!--                <div class="span2" style="margin-top:10px;">
                                    <div class="creaweb pull-right" style="margin-right:10px;">
                                        <a href="http://creaweb.pe" target="_blank"><img src="/images/creaweb.png" alt="creaweb.pe"/></a>
                                    </div>
                                </div>-->

            </div>

        </div>
    </div>

</footer>








<style type="text/css" media="all">

    #intro {
        width: 580px;
        margin: 0 auto;
    }
    .wrapper {
        background-color: white;
        width: 480px;
        margin: 40px auto;
        padding: 50px;
        box-shadow: 0 0 5px #999;
    }
    .list_carousel {
        /*background-image: url("/images/back-content.png");*/
        margin: 0 0 30px 60px;
        width: 360px;
    }
    .list_carousel ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: block;
    }
    .list_carousel li {
        font-size: 40px;
        color: #999;
        text-align: center;
        /*background-color: #ffffff;*/
        /*border: 1px solid #ccc;*/
        width: 50px;
        /*height: 50px;*/
        padding: 10;
        margin: 6px;
        display: block;
        float: left;
    }
    .list_carousel.responsive {
        width: auto;
        margin-left: 0;
    }
    .clearfix {
        float: none;
        clear: both;
    }
    .prev {
        float: left;
        margin-left: 10px;
    }
    .next {
        float: right;
        margin-right: 10px;
    }
    .pager {
        float: left;
        width: 300px;
        text-align: center;
    }
    .pager a {
        margin: 0 5px;
        text-decoration: none;
    }
    .pager a.selected {
        text-decoration: underline;
    }
    .timer {
        background-color: #999;
        height: 6px;
        width: 0px;
    }
</style>





<!-- include jQuery + carouFredSel plugin -->
                <!--<script type="text/javascript" language="javascript" src="/lib/carouFredSel-6.2.1/jquery-1.8.2.min.js"></script>-->
<script type="text/javascript" language="javascript" src="/lib/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1-packed.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" language="javascript" src="/lib/carouFredSel-6.2.1/helper-plugins/jquery.mousewheel.min.js"></script>
<script type="text/javascript" language="javascript" src="/lib/carouFredSel-6.2.1/helper-plugins/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" language="javascript" src="/lib/carouFredSel-6.2.1/helper-plugins/jquery.transit.min.js"></script>
<script type="text/javascript" language="javascript" src="/lib/carouFredSel-6.2.1/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>

<script type="text/javascript" language="javascript">
    jQuery.noConflict()
    jQuery(function() {

        //	Basic carousel, no options
        jQuery('#foo0').carouFredSel();

        //	Basic carousel + timer, using CSS-transitions
        jQuery('#foo1').carouFredSel({
            auto: {
                pauseOnHover: 'resume',
                progress: '#timer1'
            }
        }, {
            transition: true
        });

        //	Scrolled by user interaction
        jQuery('#foo2').carouFredSel({
            auto: false,
            prev: '#prev2',
            next: '#next2',
            pagination: "#pager2",
            mousewheel: true,
            swipe: {
                onMouse: true,
                onTouch: true
            }
        });

        //	Variable number of visible items with variable sizes
        jQuery('#foo3').carouFredSel({
            width: 360,
            height: 'auto',
            prev: '#prev3',
            next: '#next3',
            auto: false
        });

        //	Responsive layout, resizing the items
        jQuery('#foo4').carouFredSel({
            responsive: true,
            width: '100%',
            scroll: 2,
            prev: '#prev2',
            next: '#next2',
            items: {
                width: 200,
//                	height: '30%',	//	optionally resize item-height
                visible: {
                    min: 2,
                    max: 5
                }
            },
            mousewheel: true,
            swipe: {
                onMouse: true,
                onTouch: true
            }
        });

        //	Fuild layout, centering the items
        jQuery('#foo5').carouFredSel({
            width: '100%',
            scroll: 2
        });

    });
</script>