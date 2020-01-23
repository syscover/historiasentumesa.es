<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Se trata de la única uva que crece protegida bajo un bolso de papel, que cuida y guarda con mimo todos los granos del racimo. Gracias a este peculiar sistema de cultivo, la uva vive “entre algodones”, lo que hace que tenga unas características organolépticas y gastronómicas excepcionales.</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/uva-vinalopo/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/uva-vinalopo/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="uva-vinalopo">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">El color de la uva y su fina piel son consecuencia de haber vivido dentro del bolso de papel, protegida de las agresiones de la lluvia, el sol o el viento. Esto, junto con el microclima característico, hacen de la Uva del Vinalopó un producto único.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">El proceso de envasado también viene determinado por el mimo y el cuidado de las manos expertas de los productores, así como por los numerosos y exhaustivos controles realizados para que todos los racimos cumplan con los criterios de selección que dicta el Pliego de Condiciones de la Denominación de Origen.</p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/uva-vinalopo/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo uva-vinalopo');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.uva-vinalopo.org/wp" class="hoverable-link-2" target="_blank">www.uva-vinalopo.org</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'BI6WePGt-8o',
        playerVars: {
            'autoplay': 0,
            'controls': 1,
            'rel': 0,
            'vq': 'hd720',
            'html5': 1,
            'autohide': 1,
            'showinfo': 0,
            'modestbranding': 1,
            'playerVars': {rel: 0}
        }
    });

    $('#play_video_btn_product').on('click', function (e) {
        e.preventDefault();
        playerProduct.playVideo();
        $('.video_poster_product').animate({opacity:0}, 500, function(){$('.video_poster_product').css('display','none')});
    });
</script>