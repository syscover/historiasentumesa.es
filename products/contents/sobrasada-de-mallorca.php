<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Se trata de un embutido crudo curado, elaborado con carnes seleccionadas de cerdo (magro y tocino) picadas, adicionadas de pimentón, sal y especias, amasadas, embutidas y curadas hasta obtener esta delicatesen para el paladar. </p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-indicacion.svg" alt="Indicación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/sobrasada-de-mallorca/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/sobrasada-de-mallorca/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="sobrasada-de-mallorca">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">Al finalizar el proceso de curación tienen forma cilíndrica irregular, determinada por la morfología de la tripa. La superficie del embutido es de color rojo oscuro, lisa o ligeramente rugosa, con ausencia de enmohecimiento o enmohecimiento blanquecino. La pasta es blanda, inelástica, adherente, cohesionada, untuosa, poco fibrosa y de aspecto rojo marmóreo.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">La zona de elaboración y curación de la sobrasada coincide con la totalidad de la Isla de Mallorca, una tierra con unas características ambientales idóneas para generar un producto con un sabor y aroma característico, con clara influencia de la presencia de pimentón.</p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/sobrasada-de-mallorca/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo sobrasada-de-mallorca');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.sobrasadademallorca.org" class="hoverable-link-2" target="_blank">www.sobrasadademallorca.org</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'wZu6jrfFiJY',
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