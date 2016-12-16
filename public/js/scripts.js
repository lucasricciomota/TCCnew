var map, doValidation;
var centro = {lat: 0, lng: 0};

$('#carousel').carouFredSel({
    responsive: true,
    items: {
      visible: 1,
      width: 900,
      height: 500
    },
    scroll: {
      duration: 250,
      timeoutDuration: 2500,
      fx: 'uncover-fade'
    },
    pagination: '#pager'
});

function mudar(id_el, url_img){
    $(id_el).attr('src', url_img);
}

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });
    $('#tallModal').on('shown.bs.modal', function () {
        google.maps.event.trigger(map, "resize");
        map.setCenter(centro);
        map.setZoom(14);
    });
}

function mostrarModal(id){
    var museu = museus.find(function (v, i) {return v['idponto'] == id});

    var modal = $('#tallModal');

    console.log(museu);

    modal.find('#idnomemodal').html(museu.nome);
    modal.find('#idinfomodal').html(museu.descricao);
    modal.find('#modalImgPrincipal').attr('src', museu.fotos);
    modal.find('input[name=idponto]').val(museu.idponto);
    centro = {lat: parseFloat(museu.latitude), lng: parseFloat(museu.longitude)};

    modal.modal('show');
}


doValidation = function (params) {
    console.log(params);
};
