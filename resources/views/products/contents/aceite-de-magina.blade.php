<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>{{ $article->headerTxt }}</p>
    </div>
    <div class="sellos-container">
        <img src="{{ asset('img/sello-denominacion.svg') }}" alt="Denominación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="{{ asset('img/products/aceite-de-magina/content-mobile.jpg') }}" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="{{ asset('img/products/aceite-de-magina/content.jpg') }}" alt="" class="content-img"/>
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
                    <a href="#" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo aceite-de-magina');"></a>
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
    var videoId1 = 'nOKYVe4I6Z8';
    var videoId2 = 'panMFAbvcVI';
</script>
<script src="js/historias.js"></script>
