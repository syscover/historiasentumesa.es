<div class="product_content__txt">
    <div class="col s10 m8 xl8 xxl7 product_content__intro-txt">
        <p>En cada loncha, saboreas un trocito de la tierra que lo ve nacer. Un sueño para el paladar que te llevará a sus dehesas, a su clima cálido, al saber hacer tradicional de sus gentes...</p>
    </div>
    <div class="sellos-container">
        <img src="../../img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
    </div>
    <div class="content-img_container">
        <img data-bottom-top="transform: translate(0, -30vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/los-pedroches/content-mobile.jpg" alt="" class="content-img-mobile"/>
        <img data-bottom-top="transform:translate(0vw, -39vw)" data-top-bottom="transform:translate(0vw, 0vw)" src="../../img/products/los-pedroches/content.jpg" alt="" class="content-img"/>
    </div>
    <div class="after-img-txt col m10 l8 xl8 xxl8">
        <div class="map-link-container col col-padding">
            <a href="" class="font-black hoverable-link map-link" data-map="los-pedroches">MAPA</a>
            <span class="icon-map"></span>
        </div>
        <div class="row">
            <div class="col col-padding s12 m6">
                <p class="font-sans-light">Encinas, a cuyos pies aparece año tras año un tupido manto de hierba, planicies o colinas poco elevadas, serena belleza. El escenario ideal para el cerdo ibérico. En libertad, aprovechando las bellotas que, año tras año, generosamente les brinda la dehesa montanera.</p>
            </div>
            <div class="col col-padding s12 m6">
                <p class="font-sans">Recién cortado, preferiblemente a cuchillo, en lonchas lo más finas posibles, con la proporción adecuada entre magro y grasa, a temperatura ambiente, nunca frío... y sobre todo en el ambiente y la compañía ideal para disfrutarlo.</p>
            </div>
        </div>


        <div id="video_product">
            <div class="video_content_product">
                <div class="video_poster_product" style="background-image: url('/img/products/los-pedroches/video_poster.jpg');">
                    <a href="#" id="play_video_btn_product" class="play_video_btn" onclick="javascript:trackEvent('send', 'event', 'Botón play vídeo', 'Reproducir', 'Vídeo los-pedroches');"></a>
                </div>
                <div class="video_player_products">
                    <div id="spot-product"></div>
                </div>
            </div>
        </div>


        <div class="link-txt font-black">
            <a href="http://www.jamondolospedroches.es/web" class="hoverable-link-2" target="_blank">www.jamondolospedroches.es</a>
        </div>
    </div>
</div>

<script>

    var playerProduct = new YT.Player('spot-product', {
        width: '320',
        height: '240',
        videoId: 'dZ9NUrWQ0Xc',
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