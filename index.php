<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"  />
        <title>Historias en tu mesa</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=no">

        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <meta property="og:title" content='Historias en tu mesa'>
        <meta property="og:description" content='Un sello no es solo una etiqueta más, es la garantía de que tras cada producto con denominación de origen, hay una historia de esfuerzo, tradición y calidad. Una historia que llega a tu mesa cada vez que disfrutas de estos productos.'>
        <meta property="og:image" content="https://historiasentumesa.es/img/share.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://historiasentumesa.es" />

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@origenespana">
        <meta name="twitter:title" content="Historias en tu mesa">
        <meta name="twitter:description" content="Un sello no es solo una etiqueta más, es la garantía de que tras cada producto con denominación de origen, hay una historia de esfuerzo, tradición y calidad. Una historia que llega a tu mesa cada vez que disfrutas de estos productos.">
        <meta name="twitter:image" content="https://historiasentumesa.es/img/share.jpg">

        <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>"/>
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,500" rel="stylesheet">


        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106818186-1"></script>

        <script>
            var listaCookies = document.cookie.split(";")
            var micookie = "";

            for (i in listaCookies) {
                busca = listaCookies[i].search("cb-enabled");
                if (busca > -1) {micookie=listaCookies[i]}
            }

            var analytics = false;

            function activarGA(){
                /*window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments)};
                gtag('js', new Date());
                gtag('config', 'UA-106818186-1');*/
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-106818186-1', 'auto');
                ga('send', 'pageview');

                analytics = true;

            }
            if (micookie){
                activarGA();
            }

            function trackEvent(a, b, c, d, e){
                if(analytics){
                    ga(a, b, c, d, e);
                }
            }
        </script>
    </head>
    <body data-menu="close" data-status="" data-section="welcome">
        <div id="welcome">
            <div class="welcome__center">
                <div class="welcome__centered col s12 m8 l6 xl4 row-padding">
                    <a href="#" id="enter_link" onclick="javascript:trackEvent('send', 'event', 'Botón entrar', 'Acceder', 'Acceder web');">
                        <div class="welcome__first-txt">
                            <h1 class="welcome__title">
                                <span>Historias</span><br/>
                                <span>en tu mesa</span>
                            </h1>
                            <p class="welcome__txt">Un sello no es solo una etiqueta más, es la garantía de que tras cada producto con denominación de origen, hay una historia de esfuerzo, tradición y calidad. Una historia que llega a tu mesa cada vez que disfrutas de estos productos.</p>
                            <ul class="welcome__stamps-list list-inline">
                                <li class="dop">
                                    <img src="img/sello-denominacion.svg" alt="Denominación de origen protegida"/>
                                    <p class="desc font-black">DENOMINACIÓN <br/>DE ORIGEN PROTEGIDA <br/>(DOP)</p>
                                </li>
                                <li class="igp">
                                    <img src="img/sello-indicacion.svg" alt="Indicación de origen protegida"/>
                                    <p class="desc font-black">INDICACIÓN <br/>GEOGRÁFICA PROTEGIDA <br/>(IGP)</p>
                                </li>
                            </ul>
                        </div>
                        <div class="welcome__second-txt">
                            <h1>- entrar -</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div id="footer__welcome" class="footer">
                <div class="footer__inner_flex">
                    <div class="origen-logo-container">
                        <a href="http://www.origenespana.es/" target="_blank">
                            <img src="img/origen-logo.svg" alt="Origen España"/>
                        </a>
                    </div>
                    <div class="center">
                        <div class="eu-logo-container">
                            <img src="img/eu-logo.svg" alt="CAMPAÑA FINANCIADA CON AYUDA DE LA UNIÓN EUROPEA"/>
                        </div>
                        <div class="eu-logo-txt">
                            La Unión Europea respalda las campañas que promueven la calidad de los productos agrícolas.
                        </div>
                    </div>
                    <div class="enjoy-logo-container">
                        <img src="img/enjoy-logo.svg" alt="Enjoy it's from Europe"/>
                    </div>
                </div>
                <div class="footer__legal">
                    <ul>
                        <li>
                            <a target="_blank" href="mailto:info@historiasentumesa.es">CONTACTO</a>
                        </li>
                        <li>
                            <a target="_blank" href="docs/aviso-legal.pdf">Aviso legal</a>
                        </li>
                        <li>
                            <a target="_blank" href="docs/cookies.pdf">Política de cookies</a>
                        </li>
                        <li>
                            © 2019 Origen España
                        </li>
                    </ul>
                    <p>El contenido del presente sitio web representa únicamente la opinión de su autor y es responsabilidad exclusiva del mismo. La Comisión Europea no asume ninguna responsabilidad por el uso que pudiera hacerse de la información que contiene.</p>
                </div>
            </div>

        </div>
        <div class="swiper-bg-current" id="skrollr-body">
            <div class="swiper-bg-next"></div>
            <div class="swiper-container slider buscador-productor">
                <div class="swiper-wrapper">
                    <?php
                    $product_headers = glob('products/headers'.'/*.*');
                    $random_product_headers = $product_headers;
                    shuffle($random_product_headers);
                    //print_r($product_headers);
                    $product_count = count($random_product_headers);

                    for ($i = 0; $i <= count($random_product_headers); $i++) {
                        $product_slug = str_replace(array('products/headers/', '.php'), '', $random_product_headers[$i]);
                        include $random_product_headers[$i];
                    }

                    ?>
                </div>
            </div>


            <span class="map-link-fixed">
                <a href="#" class="map-link font-black lateral-link hoverable-link" onclick="javascript:trackEvent('send', 'event', 'Botón mapa lateral', 'Abrir', 'Mapa');">MAPA Y LISTADO</a>
            </span>

            <span class="video-link-fixed">
                <a href="#" class="video-link font-black lateral-link hoverable-link" onclick="javascript:trackEvent('send', 'event', 'Botón vídeo lateral', 'Abrir', 'Vídeo');">VÍDEOS</a>
            </span>

            <div id="product_content" class="">

            </div>
            <div class="to-top__container">
                <button class="go-to-top"></button>
            </div>
            <div id="footer__products" class="footer">
                <div class="footer__inner_flex">
                    <div class="origen-logo-container">
                        <a href="http://www.origenespana.es/" target="_blank">
                            <img src="img/origen-logo.svg" alt="Origen España"/>
                        </a>
                    </div>
                    <div class="center">
                        <div class="eu-logo-container">
                            <img src="img/eu-logo.svg" alt="CAMPAÑA FINANCIADA CON AYUDA DE LA UNIÓN EUROPEA"/>
                        </div>
                        <div class="do-sellos-container">
                            <div class="do-sellos-inner">
                                <div class="do-sello-denominacion">
                                    <img src="img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
                                </div>
                                <div class="do-sello-indicacion">
                                    <img src="img/sello-indicacion.svg" alt="Indicación de Origen Protegida"/>
                                </div>
                            </div>
                            <div class="eu-logo-txt">
                                <p>La Unión Europea respalda las campañas que promueven la calidad de los productos agrícolas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="enjoy-logo-container">
                        <img src="img/enjoy-logo.svg" alt="Enjoy it's from Europe"/>
                    </div>
                </div>
                <div class="footer__legal">
                    <ul>
                        <li>
                            <a target="_blank" href="mailto:info@historiasentumesa.es">CONTACTO</a>
                        </li>
                        <li>
                            <a target="_blank" href="docs/aviso-legal.pdf">Aviso legal</a>
                        </li>
                        <li>
                            <a target="_blank" href="docs/cookies.pdf">Política de cookies</a>
                        </li>
                        <li>
                            © 2017 Origen España
                        </li>
                    </ul>
                    <p>El contenido del presente sitio web representa únicamente la opinión de su autor y es responsabilidad exclusiva del mismo. La Comisión Europea no asume ninguna responsabilidad por el uso que pudiera hacerse de la información que contiene.</p>
                </div>
            </div>

        </div>
        <!--data-0="transform:translate(0px, 0px);" data-180="transform:translate(0px, -80px);"-->
        <header id="header" data-0="transform:translate(0px, 0px);" data-180="transform:translate(0px, -80px);">
            <div class="web_navigation">
                <a class="logo" href="index.php" data-0="opacity:1;" data-180="opacity:0;">
                    <img src="img/sello-denominacion.svg" alt="Denominación de origen protegida"/>
                    <img src="img/sello-indicacion.svg" alt="Indicación de origen protegida"/>
                </a>
            </div>
            <div class="swiper-container navigation">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 0; $i <= count($random_product_headers)-1; $i++) {
                        echo '<div class="swiper-slide"><div class="dot"></div></div>';
                    }
                    ?>
                </div>
            </div>
        </header>
        <div class="more-info-btn" data-0="opacity:1;" data-10p="opacity:0;" onclick="javascript:trackEvent('send', 'event', 'Botón avanzar scroll', 'Navegar', 'Información producto');"></div>
        <div class="arrow-prev" data-0="opacity:1;" data-25p="opacity:0;" onclick="javascript:trackEvent('send', 'event', 'Botón anterior', 'Navegar', 'Anterior producto');"></div>
        <div class="arrow-next" data-0="opacity:1;" data-25p="opacity:0;" onclick="javascript:trackEvent('send', 'event', 'Botón siguiente', 'Navegar', 'Siguiente producto');"></div>

        <div class="los-sellos__container" style="display: none;">
            <div class="los-sellos__title-container">
                <h1 class="los-sellos__title font-black">LOS SELLOS</h1>
            </div>
            <div class="los-sellos__columns">
                <div class="los-sellos__column los-sellos__column--dop">
                    <div class="los-sellos__img">
                        <img src="img/sello-denominacion.svg" alt="Denominación de Origen Protegida"/>
                    </div>
                    <div class="los-sellos__desc">
                        <h2 class="font-black">DENOMINACIÓN <br/> DE ORIGEN PROTEGIDA (DOP)</h2>
                        <p>Este sello identifica un producto originario de un lugar determinado y su relación con el área geográfica es esencial para la calidad o las características del producto. Además, todas las fases de producción se realizan en esa área concreta. </p>
                    </div>
                    <ul class="los-sellos__list font-black">
                        <li data-product="jabugo">
                            <a class="hoverable-link-2 closeAndGoTo" href="jabugo">DOP Jabugo</a>
                        </li>
                        <li data-product="los-pedroches">
                            <a class="hoverable-link-2 closeAndGoTo" href="los-pedroches">DOP Los Pedroches</a>
                        </li>
                        <li data-product="queso-de-mahon">
                            <a class="hoverable-link-2 closeAndGoTo" href="queso-de-mahon">DOP Queso Mahón-Menorca</a>
                        </li>
                        <li data-product="peras-de-rincon-de-soto">
                            <a class="hoverable-link-2 closeAndGoTo" href="peras-de-rincon-de-soto">DOP Peras de Rincón de Soto</a>
                        </li>
                        <li data-product="pimenton-de-la-vera">
                            <a class="hoverable-link-2 closeAndGoTo" href="pimenton-de-la-vera">DOP Pimentón de la vera</a>
                        </li>
                        <li data-product="priego-de-cordoba">
                            <a class="hoverable-link-2 closeAndGoTo" href="priego-de-cordoba">DOP Priego de Córdoba</a>
                        </li>
                        <li data-product="queso-cabrales">
                            <a class="hoverable-link-2 closeAndGoTo" href="queso-cabrales">DOP Queso Cabrales</a>
                        </li>
                        <li data-product="queso-manchego">
                            <a class="hoverable-link-2 closeAndGoTo" href="queso-manchego">DOP Queso Manchego</a>
                        </li>
                        <li data-product="aceite-de-magina">
                            <a class="hoverable-link-2 closeAndGoTo" href="aceite-de-magina">DOP Sierra Mágina</a>
                        </li>
                        <li data-product="torta-del-casar">
                            <a class="hoverable-link-2 closeAndGoTo" href="torta-del-casar">DOP Torta del Casar</a>
                        </li>
                        <li data-product="uva-vinalopo">
                            <a class="hoverable-link-2 closeAndGoTo" href="uva-vinalopo">DOP Uva de Mesa Embolsada del Vinalopó</a>
                        </li>
                        <li data-product="vinagre-de-jerez">
                            <a class="hoverable-link-2 closeAndGoTo" href="vinagre-de-jerez">DOP Vinagre de Jerez</a>
                        </li>
                    </ul>

                </div>
                <div class="los-sellos__column los-sellos__column--igp">
                    <div class="los-sellos__img">
                        <img src="img/sello-indicacion.svg" alt="Indicación Geográfica Protegida"/>
                    </div>
                    <div class="los-sellos__desc">
                        <h2 class="font-black">INDICACIÓN <br/>GEOGRÁFICA PROTEGIDA (IGP)</h2>
                        <p>Este sello identifica un producto originario de un lugar determinado y su relación con el área geográfica es esencial para una cualidad determinada, reputación u otras característica del producto. Al menos una fase de producción se realiza en esa área concreta.</p>
                    </div>
                    <ul class="los-sellos__list font-black">
                        <li data-product="carne-de-avila">
                            <a class="hoverable-link-2 closeAndGoTo" href="carne-de-avila">IGP Carne de Ávila </a>
                        </li>
                        <li data-product="citricos-valencianos">
                            <a class="hoverable-link-2 closeAndGoTo" href="citricos-valencianos">IGP Cítricos Valencianos </a>
                        </li>
                        <li data-product="turron-de-jijona">
                            <a class="hoverable-link-2 closeAndGoTo" href="turron-de-jijona">IGP Jijona y Turrón de Alicante</a>
                        </li>
                        <li data-product="platano-de-canarias">
                            <a class="hoverable-link-2 closeAndGoTo" href="platano-de-canarias">IGP Plátano de Canarias</a>
                        </li>
                        <li data-product="sobrasada-de-mallorca">
                            <a class="hoverable-link-2 closeAndGoTo" href="sobrasada-de-mallorca">IGP Sobrasada de Mallorca</a>
                        </li>
                        <li data-product="ternera-de-extremadura">
                            <a class="hoverable-link-2 closeAndGoTo" href="ternera-de-extremadura">IGP Ternera de Extremadura</a>
                        </li>
                        <li data-product="ternera-de-navarra">
                            <a class="hoverable-link-2 closeAndGoTo" href="ternera-de-navarra">IGP Ternera de Navarra</a>
                        </li>
                        <li data-product="ternera-gallega">
                            <a class="hoverable-link-2 closeAndGoTo" href="ternera-gallega">IGP Ternera Gallega </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer font-black">
                <h3>¿Quieres más información sobre estos sellos?</h3>
                <ul class="los-sellos__list font-black">
                    <li><a href="https://ec.europa.eu/info/food-farming-fisheries/food-safety-and-quality/certification/quality-labels" class="hoverable-link-2" target="_blank">-Política de Calidad Diferenciada UE-</a></li>
                    <li><a href="http://ec.europa.eu/agriculture/quality/door/list.html?locale=es" class="hoverable-link-2" target="_blank">-LISTADO de DOP/IGP de la UE-</a></li>
                    <li><a href="https://www.mapa.gob.es/es/alimentacion/temas/calidad-agroalimentaria/calidad-diferenciada/" class="hoverable-link-2" target="_blank">-Ministerio de Agricultura, Pesca y Alimentación-</a></li>
                </ul>
            </div>
        </div>









        <div class="videos__container" style="display: none;">
            <div class="videos__title-container">
                <h1 class="videos__title font-black">VÍDEOS</h1>
            </div>

            <div class="row videos">
                <p class="col s12 m6 l4 texto">Los productos que pueden presumir de tener el sello de Denominación de Origen no son como los demás. Ese sello es la demostración de que cada uno de ellos tiene una historia en la que la tradición, el origen y la calidad se mezclan para que cuando lleguen a tu mesa, la descubras al paladearlos.</p>
                <div class="col s12 m6 l8">
                    <a href="#" class="bt-video_lista" data-video="zoZNf0XXOJg"><div class="play_video_btn_lista"></div><img class="video-grande" src="/img/video_poster_desktop.jpg" width="100%" height="auto" /><br><p class="nombre">HISTORIAS EN TU MESA</p></a>
                </div>
            </div>

            <div class="row videos lista"></div>
            <div id="btn-volver-videos"><a class="volver-videos-btn hoverable-link-2" onclick="javascript:trackEvent('send', 'event', 'Botón volver', 'Navegar', 'Volver de vídeos');">VOLVER</a></div>
        </div>






        <div class="menu-content">
            <div class="inner">
                <div class="col col-padding s12 m10">
                    <ul>
                        <li>
                            <a class="hoverable-link-2" href="">INICIO</a>
                        </li>
                        <li>
                            <a class="hoverable-link-2 sellos-link" href="" onclick="javascript:trackEvent('send', 'event', 'Botón sellos menú', 'Navegar', 'Sección sellos');">LOS SELLOS</a>
                        </li>
                        <li>
                            <a class="hoverable-link-2 products-link" href="" onclick="javascript:trackEvent('send', 'event', 'Botón productos menú', 'Navegar', 'Productos');">PRODUCTOS</a>
                        </li>
                        <li>
                            <a class="hoverable-link-2 map-link" href="" onclick="javascript:trackEvent('send', 'event', 'Botón mapa menú', 'Navegar', 'Mapa');">MAPA Y LISTADO</a>
                        </li>
                        <li>
                            <a class="hoverable-link-2 video-link" href="" onclick="javascript:trackEvent('send', 'event', 'Botón vídeo menú', 'Navegar', 'Vídeo');">VÍDEOS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-toggle__content">
            <button class="menu-toggle" onclick="javascript:trackEvent('send', 'event', 'Botón menú', 'Abrir/cerrar', 'Menú');">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <div class="buscador">
            <form>
                <input type="search" class="search-field">
            </form>
            <ul class="buscador-resultados"></ul>
        </div>

        <div id="map_container" class="map_container" style="display: none;">
            <div class="map_content">
                <div class="map_zoomable">
                    <div class="map_img_content">
                        <div class="map_img_zoom">
                            <?php echo file_get_contents("img/map.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="aviso font-sans-light">Se señala en el mapa la zona donde se ubica la sede del órgano de gestión.</div>
            </div>
            <div class="map_list font-black">
                <div class="intro text font-sans-light">Algunas DOP e IGP agroalimentarias del panorama nacional son las siguientes:</div>
                <ul>
                    <li data-product="carne-de-avila">
                        <a class="hoverable-link-2 closeAndGoTo" href="#carne-de-avila" data-video="z0ztXnl_jT8" data-newvideo="64SL08WjD9w">IGP Carne de Ávila </a>
                    </li>
                    <li data-product="citricos-valencianos">
                        <a class="hoverable-link-2 closeAndGoTo" href="#citricos-valencianos" data-video="1YrWHkR05qg" data-newvideo="zMDF5zkoHP4">IGP Cítricos Valencianos </a>
                    </li>
                    <li data-product="jabugo">
                        <a class="hoverable-link-2 closeAndGoTo" href="#jabugo" data-video="tqfQx5Y8ImA" data-newvideo="YXlvoKkdnMo">DOP Jabugo</a>
                    </li>
                    <li data-product="turron-de-jijona">
                        <a class="hoverable-link-2 closeAndGoTo" href="#turron-de-jijona" data-video="gxjTLL-21Ck" data-newvideo="e9P-nzTPkwc">IGP Jijona y Turrón de Alicante</a>
                    </li>
                    <li data-product="los-pedroches">
                        <a class="hoverable-link-2 closeAndGoTo" href="#los-pedroches" data-video="dZ9NUrWQ0Xc" data-newvideo="pgmOEt0gFrs">DOP Los Pedroches</a>
                    </li>
                    <li data-product="queso-de-mahon">
                        <a class="hoverable-link-2 closeAndGoTo" href="#queso-de-mahon" data-video="W3SCJfRxiQ8" data-newvideo="SaAjdUqOKnE">DOP Queso Mahón-Menorca</a>
                    </li>
                    <li data-product="peras-de-rincon-de-soto">
                        <a class="hoverable-link-2 closeAndGoTo" href="#peras-de-rincon-de-soto" data-video="GcAwN6ZpqJ4" data-newvideo="5Y8l8j5XF-c">DOP Peras de Rincón de Soto</a>
                    </li>
                    <li data-product="pimenton-de-la-vera">
                        <a class="hoverable-link-2 closeAndGoTo" href="#pimenton-de-la-vera" data-video="bkI5K7R3Tgo" data-newvideo="5CI21qilUG8">DOP Pimentón de la Vera</a>
                    </li>
                    <li data-product="platano-de-canarias">
                        <a class="hoverable-link-2 closeAndGoTo" href="#platano-de-canarias" data-video="hezJ481orgQ" data-newvideo="Uq-AbqgSMqY">IGP Plátano de Canarias</a>
                    </li>
                    <li data-product="priego-de-cordoba">
                        <a class="hoverable-link-2 closeAndGoTo" href="#priego-de-cordoba" data-video="Crt-6vugZVE" data-newvideo="1cUbPYsKQkU">DOP Priego de Córdoba</a>
                    </li>
                    <li data-product="queso-cabrales">
                        <a class="hoverable-link-2 closeAndGoTo" href="#queso-cabrales" data-video="keWwTnTQwmU" data-newvideo="pxte5Uq5cow">DOP Queso Cabrales</a>
                    </li>
                    <li data-product="queso-manchego">
                        <a class="hoverable-link-2 closeAndGoTo" href="#queso-manchego" data-video="prF4RGHB6Hc" data-newvideo="A7kxJlIElRc">DOP Queso Manchego</a>
                    </li>
                    <li data-product="aceite-de-magina">
                        <a class="hoverable-link-2 closeAndGoTo" href="#aceite-de-magina" data-video="nOKYVe4I6Z8" data-newvideo="panMFAbvcVI">DOP Sierra Mágina</a>
                    </li>
                    <li data-product="sobrasada-de-mallorca">
                        <a class="hoverable-link-2 closeAndGoTo" href="#sobrasada-de-mallorca" data-video="wZu6jrfFiJY" data-newvideo="ndmQTf8VCvs">IGP Sobrasada de Mallorca</a>
                    </li>
                    <li data-product="ternera-de-extremadura">
                        <a class="hoverable-link-2 closeAndGoTo" href="#ternera-de-extremadura" data-video="wb268sJIZ-A" data-newvideo="0jMrBVcXJe0">IGP Ternera de Extremadura</a>
                    </li>
                    <li data-product="ternera-de-navarra">
                        <a class="hoverable-link-2 closeAndGoTo" href="#ternera-de-navarra" data-video="p6RwvgMAk9Q" data-newvideo="GWgVNpHuik4">IGP Ternera de Navarra</a>
                    </li>
                    <li data-product="ternera-gallega">
                        <a class="hoverable-link-2 closeAndGoTo" href="#ternera-gallega" data-video="YBvIrvkuH3U" data-newvideo="gMR9oAiRJTo">IGP Ternera Gallega</a>
                    </li>
                    <li data-product="torta-del-casar">
                        <a class="hoverable-link-2 closeAndGoTo" href="#torta-del-casar" data-video="iPgG_cjht0A" data-newvideo="9x2jn298k2U">DOP Torta del Casar</a>
                    </li>
                    <li data-product="uva-vinalopo">
                        <a class="hoverable-link-2 closeAndGoTo" href="#uva-vinalopo" data-video="BI6WePGt-8o" data-newvideo="7g2orb23GeY">DOP Uva de Mesa Embolsada del Vinalopó</a>
                    </li>
                    <li data-product="vinagre-de-jerez">
                        <a class="hoverable-link-2 closeAndGoTo" href="#vinagre-de-jerez" data-video="qkRi9pSQPCQ" data-newvideo="T-38y910Z2E">DOP Vinagre de Jerez</a>
                    </li>
                </ul>
                <div class="footer text font-sans-light"><a href="http://ec.europa.eu/agriculture/quality/door/list.html?locale=es" target="_blank">Más información</a> de productos con sellos DOP e IGP en Europa.</div>
            </div>
            <span class="close-map">
                <a href="#" id="close_map" class="font-black hoverable-link" onclick="javascript:trackEvent('send', 'event', 'Botón cerrar mapa', 'Navegar', 'Productos');">CERRAR MAPA</a>
            </span>

        </div>

        <div id="video_container" class="video_container" style="display: none;" data-status="stop">
            <div class="video_content">
                <div class="video_blind"></div>
                <div class="video_player">
                    <div id="spot"></div>
                </div>
            </div>

            <span class="close-video">
                <a href="#" id="close_video" class="font-black">
                    <img src="img/close-video.png" alt="Cerrar vídeo"/>
                </a>
            </span>

            <span class="changesubtitles-video">
                <a href="#" id="changesubtitles_video" class="font-black">
                    ENGLISH SUBTITLES VERSION
                </a>
            </span>
        </div>

        <div id="loading" style="position: fixed;top: 0;left: 0;bottom: 0;right: 0;z-index: 99999;background-color: rgba(255,255,255,1);display: flex;justify-content: center;align-items: center;">
            <div>
                <h1 class="welcome__title welcome__title-loading">
                    <span>Historias</span><br/>
                    <span>en tu mesa</span>
                </h1>
            </div>
        </div>

        <!--<script src="js/jquery-2.2.3.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="/js/jquery.cookiebar.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="node_modules/swiper/dist/js/swiper.jquery.js"></script>
        <script src="js/skrollr.min.js"></script>
        <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vfleR685o/www-widgetapi.js" async=""></script>
        <script src="https://www.youtube.com/iframe_api"></script>
        <script>

            var productsSlider;
            var navigation;
            var s = null;

            $(document).ready(function () {

                window.scrollTo(0, 0);

                if(window.innerHeight < 800 || window.innerWidth < 992){
                    $('#header').attr('data-180', 'transform:translate(0px, -45px)')
                }



                $('#enter_link').on('click', function (e) {
                    e.preventDefault();
                    trackEvent('send', 'event', 'Botón entrar', 'Acceder', 'Acceder web');
                    $('#cookie-bar .cb-enable').trigger('click');

                    $('.swiper-slide .title_content').each(function(){
                        $(this).css({
                            'min-height': $('.title', $(this)).height()
                        });
                    });

                    var title_difference = parseInt(($('.swiper-slide .inner').offset().top + parseInt($('.swiper-slide .inner').css('padding-top'))) - ($('.swiper-slide .title_content').offset().top));
                    var title_movement = 0;
                    s = skrollr.init({
                        render: function (data) {
                            title_movement = parseInt(data.curTop + title_difference);

                            if (data.curTop > title_difference && title_movement < 0) {
                                $('.title_content .title').css({
                                    'transform': 'translate(0px,' + title_movement + 'px)'
                                })
                            } else {
                                $('.title_content .title').css({
                                    'transform': 'translate(0px, '+0+'px)'
                                })
                            }

                        },
                        beforerender: function (data) {

                        },
                        forceHeight: false,
                        smoothScrolling: false,
                        smoothScrollingDuration: 1,
                        mobileCheck: function () {
                            return (/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera);
                            //return true;
                        },
                        scale: 3
                    });

                    $(window).trigger('resize');

                    $('#welcome').fadeOut(500, function () {
                        $('body').attr('data-section', 'products');
                    });
                });

                var backgroundCurrent = $('.swiper-bg-current'),
                    backgroundNext = $('.swiper-bg-next'),
                    sliderSpeed = 1000;

                navigation = new Swiper('.navigation', {
                    centeredSlides: true,
                    slideToClickedSlide: true,
                    speed: sliderSpeed,
                    runCallbacksOnInit: true,
                    loop: true,
                    loopedSlides: <?php echo count($product_headers) ?>,
                    slidesPerView: 'auto',
                    observer: true,
                    watchSlidesProgress: false,
                    touchRatio: 1,
                    onSliderMove: function (swiper, event) {
                        //Cuando se empieza a arrastrar
                        doParallax(swiper);
                    }
                });

                //initialize swiper when document ready
                productsSlider = new Swiper('.slider', {
                    loop: true,
                    loopedSlides: <?php echo count($product_headers) ?>,
                    slidesPerView: 1,
                    centeredSlides: true,
                    //spaceBetween: $(window).width() / 10,
                    speed: sliderSpeed,
                    effect: 'slide', //"slide", "fade", "cube", "coverflow" or "flip"
                    virtualTranslate: false,
                    parallax: false,
                    grabCursor: false,
                    uniqueNavElements: false,
                    nextButton: '.arrow-next',
                    prevButton: '.arrow-prev',
                    a11y: true,
                    prevSlideMessage: 'Ir al producto anterior',
                    nextSlideMessage: 'Ir al siguiente producto',
                    firstSlideMessage: 'Este es el primer producto',
                    lastSlideMessage: 'Este es el último producto',
                    paginationBulletMessage: 'Ir al producto {{index}}',
                    runCallbacksOnInit: true,
                    watchSlidesProgress: false,
                    hashnav: true,
                    hashnavWatchState: true,
                    replaceState: true,
                    observer: true,
                    touchRatio: 0.5,
                    onInit: function (swiper) {
                        var activeSlide = $('.swiper-wrapper > .swiper-slide:nth-child(' + (swiper.activeIndex + 1) + ')'),
                            activeSlideBg = activeSlide.attr('data-background-rgb');
                        backgroundCurrent.css('background', 'rgb(' + activeSlideBg + ')');
                        backgroundNext.css('opacity', 0);

                        navigation.slideTo(swiper.activeIndex, 1);

                        $('.swiper-slide-active').addClass($('.swiper-slide-active').attr('data-hash'));

                    },
                    onSlideChangeStart: function (swiper) {
                    },
                    onTransitionStart: function (swiper) {

                        var activeSlide = $('.swiper-wrapper > .swiper-slide:nth-child(' + (swiper.activeIndex + 1) + ')'),
                            activeSlideBg = activeSlide.attr('data-background-rgb');

                        setTimeout(function(){
                            if ($(window).scrollTop() > 1) {
                                if(s){
                                    s.animateTo(0, {
                                        duration: swiper.params.speed / 2,
                                        done: function () {
                                            backgroundNext.css('background', 'rgb(' + activeSlideBg + ')');
                                            backgroundNext.stop().animate({
                                                opacity: 1
                                            }, swiper.params.speed, function () {
                                                backgroundCurrent.css('background', 'rgb(' + activeSlideBg + ')');
                                                backgroundNext.css('opacity', 0);
                                            })
                                        }
                                    })
                                }
                            } else {
                                backgroundNext.css('background', 'rgb(' + activeSlideBg + ')');
                                backgroundNext.stop().animate({
                                    opacity: 1
                                }, swiper.params.speed, function () {
                                    backgroundCurrent.css('background', 'rgb(' + activeSlideBg + ')');
                                    backgroundNext.css('opacity', 0);
                                })
                            }

                        }, 1500);

                        loadProduct($('.swiper-wrapper > .swiper-slide:nth-child(' + (swiper.activeIndex + 1) + ')').attr('data-hash'));
                        doParallaxAnimation(swiper);

                    },
                    onTransitionEnd: function (swiper) {
                        //console.log('onTransitionEnd');
                        backgroundNext.css('opacity', 0);


                    },
                    onTouchStart: function (swiper, event) {
                        //Cuando se empieza a arrastrar
                    },
                    onTouchMove: function (swiper, event) {
                        //Siempre que se arrastra
                    },
                    onSliderMove: function (swiper, event) {

                        doParallax(swiper);
                    },
                    onSlideChangeEnd: function (swiper) {
                        //console.log('onSlideChangeEnd');
                    },
                    onSetTransition: function (swiper, transition) {
                        if (swiper.activeIndex != swiper.previousIndex) {
                            //console.log('onSetTransition');
                            var activeSlide = $('.swiper-wrapper > .swiper-slide:nth-child(' + (swiper.activeIndex + 1) + ')');
                        } else {
                            //console.log('no ha habido cambio');
                            var activeSlide = $('.swiper-wrapper > .swiper-slide:nth-child(' + (swiper.activeIndex - 1) + ')')
                        }
                        //console.log(activeSlide.attr('data-hash'));
                        //loadProduct(activeSlide.attr('data-hash'));
                    }
                });

                navigation.params.control = productsSlider;
                productsSlider.params.control = navigation;

                function doParallax(swiper) {

                    if ((/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera)) {

                    } else {
                        var el = $('.swiper-slide .parallax');
                        el.each(function (e) {
                            $(this).css({
                                'transform': 'translate(' + $(this).closest('.swiper-slide').offset().left * $(this).attr('data-parallax') + 'px, 0px)'
                            })
                        });
                    }
                }

                function doParallaxAnimation(swiper) {
                    //console.log('doParallaxAnimation')
                    if ((/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera)) {

                    } else {
                        $('.swiper-slide .parallax').each(function (e) {
                            $(this).css({
                                'text-indent': $(this).closest('.swiper-slide').offset().left * $(this).attr('data-parallax')
                            });
                            $(this).stop().animate({
                                textIndent: 0
                            }, {
                                step: function (now, fx) {
                                    $(this).css({
                                        'transform': 'translate(' + now + 'px, 0px)'
                                    })
                                },
                                duration: swiper.params.speed,
                                easing: 'swing'
                            }, 'swing')
                        });
                    }
                }


                function loadProduct(product_slug) {
                    //console.log(product_slug);
                    trackEvent('send', 'event', 'Cargar producto', 'producto', product_slug)
                    var minTime = false;
                    setInterval(function(){
                        minTime = true;
                    },600);
                    $('body').attr('data-status', 'loading');

                    $.ajax({
                        url: 'products/contents/' + product_slug + '.php',
                        cache: false,
                        success: function (html) {
                            $("#product_content").html(html);
                        },
                        complete: function () {

                            if(minTime == true){
                                $('body').attr('data-status', 'loaded');
                                $(window).trigger('resize');
                            }else {
                                var interval = setInterval(function () {
                                    if (minTime == true) {
                                        $('body').attr('data-status', 'loaded');
                                        $(window).trigger('resize');
                                        clearInterval(interval);
                                    }
                                }, 50);
                            }
                            setTimeout(function () {
                                if (s) {
                                    s.refresh()
                                }
                            }, 100);

                            $('#product_content .map-link').click(function (e) {
                                e.preventDefault();
                                showMap($(this).attr('data-map'));
                            });

                            $('.more-info-btn').on('click', function (e) {
                                e.preventDefault();
                                s.animateTo(($('.title_content').offset().top - $('.title_content').height()), {
                                    duration: 700
                                });
                            });
                        }
                    });
                }

                function showMap(point) {
                    $('body').attr('data-menu', 'close');
                    //$('body').attr('data-section', 'map');
                    if (point) {
                        $('.map_list a[href="' + point + '"]').trigger('mouseenter').addClass('hover');
                        $('#map_container').fadeIn(500, function (){
                            s.refresh();
                        });
                    } else {
                        $('#map_container').fadeIn(500, function(){
                            s.refresh();
                        });
                    }
                    setTimeout(function () {
                        s.animateTo(0, {
                            duration: 1
                        });
                    }, 300);

                    //var out_scroll = $('#map_container').height() - $('.map_content').height() - $('.map_list').height() - (parseInt($('.map_list').css('padding-top'))*2);
                    var out_scroll = window.innerHeight - $('#map_container').height();

                    if($('#map_container').height() > window.innerHeight){
                        $('.map_list').attr('data-0p', 'transform:translate(0px,0px)');
                        $('.map_list').attr('data'+out_scroll+'', 'transform:translate(0px,'+out_scroll+'px)');
                        s.refresh();
                    }

                }

                function closeMap() {
                    $('body').attr('data-section', 'products');
                    s.animateTo(0, {
                        duration: 1
                    });
                    setTimeout(function () {
                        $('.los-sellos__container').fadeOut(500);
                        $('#map_container').fadeOut(500, function(){
                            s.refresh();
                        });
                    }, 10);
                }

                function closeAndGoTo(slug) {
                    var index = $('.swiper-slide[data-hash="' + slug + '"]').index();
                    productsSlider.params.speed = 1;
                    navigation.params.speed = 1;
                    productsSlider.slideTo(index, 1);
                    navigation.slideTo(index, 1);
                    closeMap();
                    $('body').attr('data-section', 'products');
                    s.refresh();
                    setTimeout(function () {
                        productsSlider.params.speed = sliderSpeed;
                        navigation.params.speed = sliderSpeed;
                    }, 100);
                }

                $('.closeAndGoTo').on('click', function (e) {
                    e.preventDefault();
                    closeAndGoTo($(this).attr('href').replace('#', ''));
                });


                $('.map-link').on('click', function (e) {
                    e.preventDefault();
                    if ($(this).attr('data-map')) {
                        //console.log($(this).attr('data-map'))
                    }
                    showMap();
                });

                $('.sellos-link').on('click', function(e){
                    e.preventDefault();
                    cerrarTodo();
                    $('body').attr('data-menu', 'close');
                    $('.los-sellos__container').fadeIn(500, function(){
                        var out_scroll = window.innerHeight - $('.los-sellos__container').outerHeight();

                        if($('.los-sellos__container').outerHeight() > window.innerHeight){
                            $('.los-sellos__container').attr('data-0p', 'transform:translate(0px,0px)');
                            $('.los-sellos__container').attr('data'+out_scroll+'', 'transform:translate(0px,'+out_scroll+'px)');
                            s.refresh();
                        }
                    });
                });

                $('#close_map').on('click', function (e) {
                    e.preventDefault();
                    closeMap();
                });

                $('.map_pointer').on({
                    click: function () {
                        closeAndGoTo($(this).attr('data-product'));
                    },
                    mouseenter: function () {
                        //console.log($(this).attr('data-product'));
                        $('.map_list li a').removeClass('hover');
                        $('.map_pointer').removeClass('hover');
                        $('.map_list a[href="' + $(this).attr('data-product') + '"]').addClass('hover');
                    },
                    mouseleave: function () {
                        $('.map_pointer').removeClass('hover');
                        $('.map_list a').removeClass('hover');
                    }
                });

                $('.go-to-top').on('click', function (e) {
                    s.animateTo(0, 300)
                });


                var map_img = $('#map_img');
                var map_zoom = $('.map_img_zoom');
                var map_pointer_size = 11;
                var map_img_size = map_img.width();
                var map_aumented_scale = 1.5;
                $('.map_list li').hover(
                    function () {
                        //Enter hover
                        $('.map_list li a').removeClass('hover');
                        $('.map_pointer').removeClass('hover');
                        var map_pointer = $('.map_pointer[data-product="' + $(this).attr('data-product') + '"]');
                        map_pointer.addClass('hover');

                        //console.log(map_img.width());

                        /*
                         EFECTO ZOOM MAPA

                         var translateY = parseInt((map_img.height()/2) - ((map_pointer.offset().top + (map_pointer_size/2)) - map_img.offset().top));
                         var translateX = parseInt((map_img.width()/2) - ((map_pointer.offset().left + (map_pointer_size/2)) - map_img.offset().left));

                         map_img.css({
                         'transform': 'translate('+ translateX +'px, '+ translateY +'px)'
                         });

                         map_zoom.css({
                         'transform': 'scale(1.5)'
                         })*/

                    }, function () {
                        //Exit hover
                        $('.map_pointer').removeClass('hover');
                        $('.map_list li a').removeClass('hover');
                        var map_pointer = $('.map_pointer[data-product="' + $(this).attr('data-product') + '"]');
                        map_img.css({
                            'transform': 'translate(0px, 0px)'
                        })
                        map_zoom.css({
                            'transform': 'scale(1)'
                        })
                    }
                );

                $('body').on('click', '.products-link', function (e) {

                    e.preventDefault();
                    e.stopImmediatePropagation();

                    cerrarTodo();

                    $('body').attr('data-menu', 'close');
                });


                $('body').on('click', '.menu-toggle', function (e) {

                        e.preventDefault();
                        e.stopImmediatePropagation();

                        //console.log('click');
                        if ($('body').attr('data-menu') == 'close') {
                            $('body').attr('data-menu', 'open');
                            $('.los-sellos__container').fadeOut(500);
                        } else {
                            $('body').attr('data-menu', 'close');
                        }
                    }
                );


                /* --------------- V I D E O S --------------- */

                $('.video-link').on('click', function (e) {
                    e.preventDefault();
                    cerrarTodo();
                    $('#skrollr-body').fadeOut(500);
                    $('body').attr('data-menu', 'close');
                    $('.videos__container').fadeIn(500, function(){
                        var out_scroll = window.innerHeight - $('.videos__container').outerHeight();

                        if($('.videos__container').outerHeight() > window.innerHeight){
                            $('.videos__container').attr('data-0p', 'transform:translate(0px,0px)');
                            $('.videos__container').attr('data'+out_scroll+'', 'transform:translate(0px,'+out_scroll+'px)');
                            s.refresh();
                        }
                    });
                });

                $('.volver-videos-btn').click(function(){
                    cerrarTodo();
                });

                // Vídeos nuevos
                $('.map_list ul li').each(function(){
                    $('.videos__container .lista').append(
                        '<div class="col s12 m4">' +
                        '<a href="" class="bt-video_lista" data-video="' + $(this).find('a').attr('data-newvideo') + '">' +
                        '<div class="play_video_btn_lista"></div>' +
                        '<img src="/img/products/' + $(this).find('a').attr('href').replace('#', '') + '/maxresdefault.jpg" width="100%" height="auto" /><br>' +
                        '<p class="nombre">' + $(this).find('a').html() + '</p>' +
                        '</a>' +
                        '</div>'
                    );
                });

                // Vídeos anteriores
                $('.map_list ul li').each(function(){
                    $('.videos__container .lista').append(
                        '<div class="col s12 m4">' +
                            '<a href="" class="bt-video_lista" data-video="' + $(this).find('a').attr('data-video') + '">' +
                                '<div class="play_video_btn_lista"></div>' +
                                '<img src="/img/products/' + $(this).find('a').attr('href').replace('#', '') + '/video_poster.jpg" width="100%" height="auto" /><br>' +
                                '<p class="nombre">' + $(this).find('a').html() + '</p>' +
                            '</a>' +
                        '</div>'
                    );
                });

                var player = null;

                $('.bt-video_lista').click (function(e){
                    e.preventDefault();

                    if ($(this).attr('data-video') == "zoZNf0XXOJg") {
                        $('.changesubtitles-video').css('display', 'block');
                    }else{
                        $('.changesubtitles-video').css ('display', 'none');
                    }

                    if (player == null) {
                        player = new YT.Player('spot', {
                            videoId: $(this).attr('data-video'),
                            playerVars: {
                                'autoplay': 0,
                                'controls': 2,
                                'rel': 0,
                                'vq': 'hd720',
                                'html5': 1,
                                'autohide': 1,
                                'showinfo': 0,
                                'modestbranding': 1,
                                'playerVars': {rel: 0}
                            },
                            events: {
                                'onReady': onPlayerReady,
                                'onStateChange': onPlayerStateChange
                            }
                        });
                    }else{
                        player.loadVideoById($(this).attr('data-video'));
                    }

                    $('#video_container').fadeIn(500);
                });

                $('#close_video').on('click', function (e) {
                    e.preventDefault();
                    closeVideo(false);
                });

                $('#changesubtitles_video').on('click', function (e) {
                    $(this).parent().css('display','none');
                    e.preventDefault();
                    changesubtitles();
                });


                function onYouTubeIframeAPIReady() {
                }

                function closeVideo(arriba) {
                    player.pauseVideo();

                    setTimeout(function () {
                        $('#video_container').fadeOut(500);
                    }, 10);

                    if (arriba) {
                        s.animateTo(0, {
                            duration: 1
                        });
                    }
                }

                function changesubtitles(){
                    player.loadVideoById('nQvsX2Xu6mQ');
                    $('#video_container').attr('data-status', 'play');
                }

                function onPlayerReady(event) {
                    event.target.playVideo();
                }

                function onPlayerStateChange(event) {
                    if (event.data == YT.PlayerState.ENDED) {
                        closeVideo(false);
                    }
                }
            });

            $(window).on('load', function(){

                $.cookieBar({
                    message: 'Este sitio web utiliza cookies. Al continuar navegando, aceptas nuestra',
                    acceptButton: true,
                    acceptText: 'Acepto',
                    declineButton: false,
                    declineText: 'No acepto',
                    policyButton: true,
                    policyText: 'política de cookies.',
                    policyURL: '/docs/cookies.pdf',
                    autoEnable: false,
                    expireDays: 365,
                    forceShow: false,
                    effect: 'slide',
                    element: 'body',
                    append: false,
                    fixed: true,
                    zindex: '300000',
                    redirect: '',
                    domain: 'historiasentumesa.es'
                });

                var offsetTop = $('.welcome__title', '#loading').offset().top - $('.welcome__title', '#welcome').offset().top;
                $('.welcome__title-loading').css({
                    transform: 'translate(0px, -'+offsetTop+'px)'
                },10);
                setTimeout(function(){
                    $('#loading').fadeOut(1000);
                }, 100);
                $('.swiper-slide').each(function(){
                    $(this).addClass($(this).attr('data-hash'));
                });

                // BUSCADOR
                var datos_buscador = new Array();
                $('.buscador-productor .swiper-slide').each(function(){
                    datos_buscador.push(new Array($(this).attr('data-hash'), $(this).find('.title_content h2 .title_name').attr('data-producto').split(' '), $(this).find('.title_content h2 .title_name').html()));
                });

                $('.search-field').on('mousedown', function(e){
                    $('.buscador-resultados').css('display','block');
                    $('.search-field').addClass('activo');
                    $('.search-field').removeClass('inactivo');
                    $('.search-field').val('');
                });

                $('.buscador').on('focusout', function(e){
                    setTimeout (function(){
                        $('.buscador-resultados').css('display', 'none');
                        $('.search-field').addClass('inactivo');
                        $('.search-field').removeClass('activo');
                        trackEvent('send', 'event', 'Búsqueda', 'Buscar', $('.search-field').val());
                    }, 100);
                });

                $('.search-field').on('input',function(e){

                    var resultados = new Array();
                    $('.buscador-resultados').empty();
                    $('.buscador-resultados').css('display','block');
                    $('.search-field').addClass('activo');
                    $('.search-field').removeClass('inactivo');

                    if ($(this).val().length>=2){
                        for (i=0; i<datos_buscador.length; i++) {
                            for (j = 0; j < datos_buscador[i][1].length; j++) {
                                if ($(this).val().toLowerCase() == datos_buscador[i][1][j].toLowerCase().substring(0, $(this).val().length)) {
                                    if (resultados.indexOf(datos_buscador[i][0]) == -1) {
                                        resultados.push(datos_buscador[i][0]);
                                        $('.buscador-resultados').append('<li class="buscador-resultado"><a href="#" class="hoverable-link-2" data-id="' + datos_buscador[i][0] + '">' + datos_buscador[i][2] + '</a></li>');
                                    }
                                    break
                                }
                            }
                        }
                    }

                    $('.buscador-resultado a').click(function(e){
                        e.preventDefault();
                        window.location.hash = '#' + $(this).attr('data-id');
                        $('.buscador-resultados').css('display','none');
                        $('.search-field').addClass('inactivo');
                        $('.search-field').removeClass('activo');
                    });
                });

               /* $('#enter_link').trigger('click');
                $('.video-link').trigger('click');*/

            });

            function cerrarTodo(){
                s.animateTo(0, {duration: 1});
                $('#skrollr-body').fadeIn(500);
                $('.videos__container').fadeOut(500);
                $('.los-sellos__container').fadeOut(500);
                $('#map_container').fadeOut(500, function(){
                    s.refresh();
                });
            }

        </script>
    </body>
</html>