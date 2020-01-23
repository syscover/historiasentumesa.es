<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Estos aceites de oliva vírgenes extra ofrecen un amplio abanico de posibilidades. Son aceites muy frutados con matices verdes y recuerdos a frutas y hortalizas frescas que presentan una gran complejidad y armonía. </p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/priego-de-cordoba/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/priego-de-cordoba/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="priego-de-cordoba">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">El caprichoso y espectacular paisaje de  olivos centenarios y milenarios que pueblan las pendientes montañosas del Parque Natural y Geoparque de las Sierras Subbéticas, unas fértiles tierras y el esfuerzo y pasión que durante siglos han mostrado agricultores y elaboradores, nos dan unos aceites únicos y singulares.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">Todos los controles se realizan para garantizar el origen y la máxima calidad de este producto. Las variedades utilizadas para la obtención de este zumo excepcional de aceituna son Picuda, Hojiblanca y Picual. Una recolección efectuada solo en el momento óptimo. Ni antes ni después.</p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/priego-de-cordoba/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo priego-de-cordoba');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.priegodecordoba.org" class="hoverable-link-2" target="_blank">www.priegodecordoba.org</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'Crt-6vugZVE',
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