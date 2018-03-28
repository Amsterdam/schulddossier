window.schuldhulp = window.schuldhulp || {};

window.schuldhulp.flashMessage = function (flashDom) {
    window.setTimeout(function () {
        flashDom.remove();
    }, 9000);
    flashDom.querySelector('a[href="#close-flash"]').addEventListener('click', (function (event) {
        flashDom.remove();
        event.preventDefault();
    }));
};

document.addEventListener('DOMContentLoaded', function(event) {
    var flashDoms = document.getElementsByClassName('flash-message');
    for (var i = 0; i < flashDoms.length; i ++) {
        new window.schuldhulp.flashMessage(flashDoms.item(i));
    }
});

window.schuldhulp.linkAsSubmit = function (linkDom) {
    linkDom.addEventListener('click', function (event) {
        event.preventDefault();
        var token = '';
        
        var formDom = document.createElement('form');
        formDom.setAttribute('action', linkDom.getAttribute('href'));
        formDom.setAttribute('method', 'post');
        if (linkDom.hasAttribute('data-token')) {
            var tokenDom = document.createElement('input');
            tokenDom.setAttribute('type', 'hidden');
            tokenDom.setAttribute('name', 'token');
            tokenDom.value = linkDom.getAttribute('data-token')
            formDom.appendChild(tokenDom);
        }
        document.getElementsByTagName('body')[0].appendChild(formDom);
        formDom.submit();
    });
};

document.addEventListener('DOMContentLoaded', function (event) {
    var linkDoms = document.getElementsByClassName('link-as-submit');
    for (var i = 0; i < linkDoms.length; i ++) {
        new window.schuldhulp.linkAsSubmit(linkDoms.item(i));
    }
});