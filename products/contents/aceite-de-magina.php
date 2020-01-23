<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>Se trata de un aceite virgen extra de variedad picual, procedente de olivar de sierra, con un intenso aroma afrutado que recuerda a la hierba fresca recién cortada y a la tomatera, muy equilibrado en su sabor, con un toque amargo y picante.</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/aceite-de-magina/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/aceite-de-magina/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="aceite-de-magina">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">La zona de Sierra Mágina abarca 15 municipios de la provincia de Jaén, con olivar tradicional de montaña, siendo su cultivo la principal actividad de este territorio, donde además se sitúan las almazaras que  extraen y embotellan estos aceites vírgenes extra con las máximas garantías de origen y calidad.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">Se trata de un aceite extraordinario como resultado del esmero de los propios olivareros en la recolección, y del máximo cuidado de las almazaras en su extracción a baja temperatura. Y todos los procesos tienen un control de calidad garantizado por el Consejo Regulador.</p>
            </div>
        </div>



        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/aceite-de-magina/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo aceite-de-magina');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>



        <div class="link-txt font-black">
            <a href="http://www.sierramagina.org" class="hoverable-link-2" target="_blank">www.sierramagina.org</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'nOKYVe4I6Z8',
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