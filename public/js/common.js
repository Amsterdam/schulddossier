
window.schuldhulp = window.schuldhulp || {};

window.schuldhulp._ = window.schuldhulp._ || {};

window.schuldhulp._.matches = function(el, selector) {
    return (el.matches || el.matchesSelector || el.msMatchesSelector || el.mozMatchesSelector || el.webkitMatchesSelector || el.oMatchesSelector).call(el, selector);
};

window.schuldhulp._.findParent = function(elm, find) {
    if (window.schuldhulp._.matches(elm, find)) {
        return elm;
    }
    if (elm.parentNode === null) {
        return null;
    }
    return window.schuldhulp._.findParent(elm.parentNode, find);
};

window.schuldhulp._.datePicker = function (elm) {
    rome(elm, {
        'inputFormat': 'DD-MM-YYYY',
        'time': false,
        'moment': {
            'locale': 'nl'
        }
    });  
};

//moment.locale('nl');