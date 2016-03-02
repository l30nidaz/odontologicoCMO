<link rel='stylesheet' id='camera-css'  href='lib/Camera-master/css/camera.css' type='text/css' media='all'> 
<style>
    body {
        margin: 0;
        padding: 0;
    }
    a {
        color: #09f;
    }
    a:hover {
        text-decoration: none;
    }
    #back_to_camera {
        clear: both;
        display: block;
        height: 80px;
        line-height: 40px;
        padding: 20px;
    }
    .fluid_container {
        margin: 0 auto;
        max-width: 1000px;
        width: 90%;
    }
</style>

<script type='text/javascript' src='lib/Camera-master/scripts/jquery.min.js'></script>
<script type='text/javascript' src='lib/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='lib/Camera-master/scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='lib/Camera-master/scripts/camera.min.js'></script> 

<script>
    jQuery(function() {

//			jQuery('#camera_wrap_1').camera({
//				thumbnails: true
//			});

        jQuery('#camera_wrap_2').camera({
            height: '400px',
            loader: 'bar',
            pagination: false,
            thumbnails: true
        });
    });
</script>

<div class="slider">
    <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
        <div data-thumb="lib/Camera-master/images/slides/thumbs/bridge.jpg" data-src="images/slider/slider1.jpg">
            <div class="camera_caption fadeFromBottom">
                Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
            </div>
        </div>
        <div data-thumb="lib/Camera-master/images/slides/thumbs/leaf.jpg" data-src="lib/Camera-master/images/slides/leaf.jpg">
            <div class="camera_caption fadeFromBottom">
                It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
            </div>
        </div>
        <div data-thumb="lib/Camera-master/images/slides/thumbs/road.jpg" data-src="lib/Camera-master/images/slides/road.jpg">
            <div class="camera_caption fadeFromBottom">
                <em>It's completely free</em> (even if a donation is appreciated)
            </div>
        </div>
        <div data-thumb="lib/Camera-master/images/slides/thumbs/sea.jpg" data-src="lib/Camera-master/images/slides/sea.jpg">
            <div class="camera_caption fadeFromBottom">
                Camera slideshow provides many options <em>to customize your project</em> as more as possible
            </div>
        </div>
        <div data-thumb="lib/Camera-master/images/slides/thumbs/shelter.jpg" data-src="lib/Camera-master/images/slides/shelter.jpg">
            <div class="camera_caption fadeFromBottom">
                It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
            </div>
        </div>
        <div data-thumb="lib/Camera-master/images/slides/thumbs/tree.jpg" data-src="lib/Camera-master/images/slides/tree.jpg">
            <div class="camera_caption fadeFromBottom">
                Different color skins and layouts available, <em>fullscreen ready too</em>
            </div>
        </div>
    </div><!-- #camera_wrap_2 -->
</div>