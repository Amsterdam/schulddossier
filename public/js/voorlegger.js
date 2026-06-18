$(document).ready(function () {
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