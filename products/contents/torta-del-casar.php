<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Es un queso elaborado a base de leche cruda de oveja, cuajo vegetal natural procedente de la flor del cardo Cynara Cardunculus, y sal, y que se presenta rodeado por una exclusiva etiqueta rojo y oro que garantiza origen y calidad.</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/torta-del-casar/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/torta-del-casar/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="torta-del-casar">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">El territorio tradicional de producción está situado en la provincia de Cáceres, englobando las comarcas de Llanos de Cáceres, Sierra de Fuentes y Montánchez, y caracterizado por ser una planicie semiesteparia de pastizales naturales y encinares adehesados. Una zona singular para un queso único.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">De textura cremosa y fundente al paladar, aromas lácticos y vegetales, y sabor ligeramente amargo debido al uso del cuajo vegetal, resulta un placer tan sencillo como sorprendente.</p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/torta-del-casar/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo torta-del-casar');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.tortadelcasar.eu" class="hoverable-link-2" target="_blank">www.tortadelcasar.eu</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'iPgG_cjht0A',
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