window.schuldhulp = window.schuldhulp || {};

document.addEventListener('click', function (event) {
    if (window.schuldhulp._.matches(event.target, '.accordion .accordion-header a, .accordion .accordion-header a *')) {
        event.preventDefault();
        var accordionDom = window.schuldhulp._.findParent(event.target, '.accordion');
        var accordionContainer = window.schuldhulp._.findParent(event.target, '.accordion-container');
        var isOpen = window.schuldhulp._.matches(accordionDom, '.open');
        if (isOpen === true) {
            accordionDom.classList.remove('open');
        } else {
            accordionDom.classList.add('open');
        }
    }
});
