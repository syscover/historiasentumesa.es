<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Este producto tan valorado y suculento, posee una corteza blanda, delgada, untuosa, de color gris con zonas amarillo-rojizas. La pasta es de consistencia untuosa, aunque con diferente grado de cohesión, según el mayor o menor tiempo de maduración del queso en cueva.</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/queso-cabrales/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/queso-cabrales/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="queso-cabrales">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">La zona de producción de leche y elaboración de queso Cabrales está constituida por los pueblos de Arangas, Arenas, Asiego, Berodia, Bulnes, Camarmeña, Canales, Carreña, El Escobar, Inguanzo, La Molina, La Salce, Ortiguero, Pandiello, Puertas, Poo, Sotres y Tielve del municipio de Cabrales y los pueblos de Oceño, Cáraves y Rozagás del municipio de Peñamellera Alta.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">Tanto la leche de los animales como el queso elaborado están determinadas por un exhaustivo control y unas técnicas que garantizan la extraordinaria calidad de este producto.</p>
            </div>
        </div>

        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/queso-cabrales/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo queso-cabrales');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.quesocabrales.org" class="hoverable-link-2" target="_blank">www.quesocabrales.org</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'keWwTnTQwmU',
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