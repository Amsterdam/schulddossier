$(document).ready(function () {
    $('#send_to_allegro').click(function () {
        $.ajax({
            url: $('#allegro_validate_url').val(),
            cache: false
        }).done(function (value) {
            if (!value.valid) {
                alert(value.message);
                return;
            }
            if (confirm('Wilt u het dossier exporteren naar Allegro?')) {
                $.ajax({
                    url: $('#allegro_send_url').val(),
                    cache: false,
                    method: "POST"
                }).done(function (value) {
                    if (value.send) {
                        location.reload();
                        return;
                    }
                    alert(value.message);
                });
            }
        });
    });

    if ($('#connection_error').length) {
        setInterval(function () {
            let element = $('#connection_error');

            $.ajax({
                method: "GET",
                url: "/ping",
                success: function (data) {
                    element.addClass('hidden');
                },
                error: function () {
                    element.removeClass('hidden');
                }
            });
        }, 60000);
    }
});