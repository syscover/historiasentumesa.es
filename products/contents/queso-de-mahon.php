<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Con sabor ligeramente ácido y salado; sus aromas evocan al campo menorquín y al mar que lo rodea, más intensos y complejos cuanto más curados.</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/queso-de-mahon/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/queso-de-mahon/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="queso-de-mahon">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">Exclusivo de Menorca, reserva de la biosfera. Su situación en el Mediterráneo, su reducida superficie, la escasa orografía frente al viento de tramontana que saliniza los pastos, un clima benigno, con  mucho sol, el abundante rocío, una pluviosidad y humedad elevadas, son factores determinantes.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">Se elabora siguiendo una tradición ancestral, con la leche de vacas alimentadas con forrajes de la Isla; de forma artesanal, la cuajada se envuelve en el fogasser y se ata con el lligam, antes del prensado. En las cavas de maduración la corteza se voltea y se unta con aceite de oliva y pimentón.</p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/queso-de-mahon/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo queso-de-mahon');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.quesomahonmenorca.com" class="hoverable-link-2" target="_blank">www.quesomahonmenorca.com</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'W3SCJfRxiQ8',
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