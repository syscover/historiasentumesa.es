<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Se trata de un queso elaborado con leche de oveja de la raza Manchega, con una maduración mínima de 30 días, para quesos con peso igual o inferior a 1,5 Kg elaborados con leche pasteurizada, y de 60 días para el resto de formatos. Su pasta es firme y compacta, de color variable desde el blanco hasta el marfil amarillento, pudiendo presentar ojos pequeños desigualmente repartidos. Una delicia para los sentidos.</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/queso-manchego/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/queso-manchego/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="queso-manchego">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">La zona de producción está constituida por términos municipales de las provincias de Albacete, Ciudad Real, Cuenca y Toledo, que constituyen la comarca de La Mancha. La zona de elaboración y maduración del queso manchego coincide con esta zona, para que no haya ningún tipo de alteración en el proceso.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">Su sabor es ácido, fuerte y sabroso llegando a ser picante en quesos muy curados. Un gusto agradable y peculiar que le confiere la leche de oveja manchega. </p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/queso-manchego/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo queso-manchego');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.quesomanchego.es" class="hoverable-link-2" target="_blank">www.quesomanchego.es</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'prF4RGHB6Hc',
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