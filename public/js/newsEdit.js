$(document).ready(function () {
    var quill = new Quill('#news_content', {
        modules: {
            toolbar: [
                [{header: [1, 2, false]}],
                ['bold', 'italic', 'underline']
            ]
        },
        placeholder: 'Type hier het bericht',
        theme: 'snow'
    });

    var newsEditUrl = $('#newsEditUrl').val();
    var newsIndexUrl = $('#newsIndexUrl').val();

    $('#submit_news').click(function () {
        let content = quill.root.innerHTML;
        let title = $('#news_title').val();
        let publish = $('#publish').is(":checked");
        let visibleGka = $('#visible_gka').is(":checked");
        let visibleMadi = $('#visible_madi').is(":checked");

        $.ajax({
            type: "POST",
            url: newsEditUrl,
            data: {
                content: content,
                title: title,
                publish: publish,
                visibleGka: visibleGka,
                visibleMadi: visibleMadi
            },
            success: function (response) {
                if (response.success) {
                    window.location = newsIndexUrl;
                } else {
                    alert('U moet een titel opgeven');
                }
            }
        });
    });
});