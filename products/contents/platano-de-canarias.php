<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>El Plátano de Canarias es una de las frutas más representativas de nuestros país.  Con cualidades únicas entre las que destaca su sabor dulce y apariencia exterior con motitas, constituye un alimento completo y saludable para pequeños y mayores. Ninguna otra banana del mundo cuenta con sello de calidad europeo, lo que nos refleja su carácter realmente único.</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-indicacion.svg" alt="Indicación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/platano-de-canarias/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/platano-de-canarias/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="platano-de-canarias">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">El Archipiélago de las Islas Canarias está constituido por una compleja orografía de origen volcánico y clima templado gracias a los vientos alisios. Estas temperaturas suaves alimentan en un clima subtropical una fruta que encuentra así un desarrollo mucho más lento pero que le permite adquirir propiedades diferentes a las bananas de otros países.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">Cualquier momento del día y lugar son apropiados para su consumo en fresco, el más habitual en los más de 16 millones de hogares que lo consumen durante el año en España.</p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/platano-de-canarias/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo platano-de-canarias');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.platanodecanarias.net" class="hoverable-link-2" target="_blank">www.platanodecanarias.net</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'hezJ481orgQ',
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