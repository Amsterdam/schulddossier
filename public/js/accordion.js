window.schuldhulp = window.schuldhulp || {};


document.addEventListener('click', function (event) {
    var matches = function(el, selector) {
        return (el.matches || el.matchesSelector || el.msMatchesSelector || el.mozMatchesSelector || el.webkitMatchesSelector || el.oMatchesSelector).call(el, selector);
    };
    
    var goUp = function (elm, find) {
        if (matches(elm, find)) {
            return elm;
        }
        if (elm.parentNode === null) {
            return null;
        }
        return goUp(elm.parentNode, find);
    }
    
    if (matches(event.target, '.accordion .accordion-header a')) {
        event.preventDefault();
        var accordionDom = goUp(event.target, '.accordion');
        var accordionContainer = goUp(event.target, '.accordion-container');
        var isOpen = matches(accordionDom, '.open');
        if (isOpen === true) {
            accordionDom.classList.remove('open');
        } else {
            accordionDom.classList.add('open');
        }
    }
});
