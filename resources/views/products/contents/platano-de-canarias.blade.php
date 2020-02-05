<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>{{ $article->headerTxt }}</p>
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
                {!! $article->leftText !!}
            </div>
            <div class="col col-padding s12 m6">
                {!! $article->rightText !!}
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/platano-de-canarias/video_poster.jpg');">
                    <a href="#" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo platano-de-canarias');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="{{ $article->link }}" class="hoverable-link-2" target="_blank">{{ $article->textLink }}</a>
        </div>
    </div>
</div>

<script>
    var videoId1 = '{{ $article->video1 }}';
    var videoId2 = '{{ $article->video2 }}';
</script>
<script src="js/historias.js"></script>
