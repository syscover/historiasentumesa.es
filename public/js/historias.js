
// JS para Historias en tu Mesa - Octavio Molano - Enero 2020

$('#video_product').before($('#video_product').clone().prop('id', 'video_product_new'));
var vpp = $('#video_product_new .video_poster_product');
vpp.css('background-image', vpp.css('background-image').replace('video_poster.jpg', 'maxresdefault.jpg'));
$('#video_product_new #spot-product').prop('id', 'spot-product_new');

var playerProduct = new YT.Player('spot-product', {
    width: '320',
    height: '240',
    videoId: videoId1,
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
var playerProductNew = new YT.Player('spot-product_new', {
    width: '320',
    height: '240',
    videoId: videoId2,
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

$('.play_video_btn').on('click', function (e) {
    e.preventDefault();
    var vp = $(this).parent().parent().parent();
    if (vp.prop('id') == 'video_product_new') {playerProductNew.playVideo();}
    else {playerProduct.playVideo();}
    vp.find('.video_poster_product').animate({opacity:0}, 500, function(){vp.find('.video_poster_product').css('display','none')});
});
