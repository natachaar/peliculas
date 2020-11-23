
function showModal() {
    $('body').loadingModal({text: 'Procesando...'});
    $('body').loadingModal('animation', 'circle').loadingModal('backgroundColor', 'gray');
}

function hideModal() {
    $('body').loadingModal('destroy');
}

function login() {
    if ($('#formadd').valid()) {
        showModal();
        $.ajax({
            url: $('#formadd').attr('action'),
            type: "POST",
            data: $('#formadd').serialize(),
            datatype: 'json'
        }).done(function (response) {
            hideModal();
            var obj = JSON.parse(response);
            if (obj.success == 1) {
                let base_url = $('#base-url').attr('href');
                window.location.href = base_url;
            } else {
                $('#error').parent().removeClass('hidden');
                $('#error').html(obj.msj);
            }
        }).fail(function () {
            console.log('Error...');
        });
    }
}

function registro() {
    if ($('#formadd').valid()) {
        let base_url = $('#base-url').attr('href');
        showModal();
        $.ajax({
            url: $('#formadd').attr('action'),
            type: "POST",
            data: $('#formadd').serialize(),
            datatype: 'json'
        }).done(function (response) {
            hideModal();
            var obj = JSON.parse(response);
            if (obj.success == 1) {
                window.location.href = base_url + 'registro/success';
            } else {
                $('#error').parent().removeClass('hidden');
                $('#error').html(obj.msj);
            }
        }).fail(function () {
            console.log('Error...');
        });
    }
}