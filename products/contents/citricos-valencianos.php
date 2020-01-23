<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Los cítricos valencianos protegidos engloban a los frutos del naranjo, mandarino y limonero. Unos referentes tanto nacionales como internacionales de nuestra cultura y de la comunidad autónoma que los ve nacer.</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-indicacion.svg" alt="Indicación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/citricos-valencianos/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/citricos-valencianos/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="citricos-valencianos">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">La zona de producción está constituida por las poblaciones productivas de las provincias de Castellón, Valencia y Alicante, que son las que reúnen las características idóneas para crear estos sabrosos y exquisitos productos.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">Los métodos de cultivo tradicionales, perfectamente combinados con las nuevas tecnologías y los sistemas más avanzados, son los que confieren a estos productos de unas cualidades, tanto físicas como organolépticas, únicas.</p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/citricos-valencianos/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo citricos-valencianos');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://citricosvalencianos.com" class="hoverable-link-2" target="_blank">www.citricosvalencianos.com</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: '1YrWHkR05qg',
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