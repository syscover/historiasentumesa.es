<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Es una carne fresca de terneros nacidos y criados en Galicia, que proceden de razas autóctonas y sus cruces, y que superaron un riguroso programa de control integral.</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-indicacion.svg" alt="Indicación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/ternera-gallega/content-mobile.jpg" alt="" class="content-img-mobile"/>º
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/ternera-gallega/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="ternera-gallega">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">Galicia siempre se ha distinguido por la producción de carne de vacuno de calidad. Las condiciones orográficas y climáticas hacen de esta tierra una de las mejores zonas de Europa para el desarrollo de la especie bovina.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">Las razas y aptitudes del ganado, así como los sistemas de explotación tradicionales y los cultivos, han dado lugar a un modo común y peculiar de entender la producción de carne de calidad.</p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/ternera-gallega/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo ternera-gallega');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.terneragallega.com" class="hoverable-link-2" target="_blank">www.terneragallega.com</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'YBvIrvkuH3U',
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