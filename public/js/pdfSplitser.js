window.schuldhulp = window.schuldhulp || {};

window.schuldhulp.pdfSplitterClass = function (dom) {
    var blob = null;
    var pagesContainer = dom.querySelector('.pages');

    var clearPages = function () {
        var pages = pagesContainer.querySelectorAll('.page');
        for (var i = 0; i < pages.length; i ++) {
            pagesContainer.removeChild(pages[i]);
        }
    };

    var loadPages = function () {
        PDFJS.getDocument(blob).then(function (pdf) {
            for (var i = 1; i <= pdf.numPages; i += 1) {
                pdf.getPage(i).then(function (pdfPage) { createThumbnail(pdfPage); });
            }
        });
    };

    var createThumbnail = function (pdfPage) {
        var scale = 3;
        
        var thumbnailContainer = document.createElement('div');
        thumbnailContainer.classList.add('page');
        thumbnailContainer.setAttribute('data-page-index', pdfPage.pageIndex);
        pagesContainer.appendChild(thumbnailContainer);

        var canvas = document.createElement('canvas');
        canvas.classList.add('upload-as-pdf');
        var context = canvas.getContext('2d');
        var viewport = pdfPage.getViewport(scale);
        canvas.width = viewport.width;
        canvas.height = viewport.height;
        
        var renderContext = {canvasContext: context, viewport: viewport};
        pdfPage.render(renderContext);

        thumbnailContainer.appendChild(canvas);
    };

    dom.querySelector('[name="file"]').addEventListener('change', function (event) {
        blob = window.URL.createObjectURL(this.files[0]);
        clearPages();
        loadPages(blob);
    });
    
    var drake = new dragula({
        'copy': true,
        //'accepts': ''
    });
    drake.containers.push(pagesContainer);
    
    drake.on('cloned', function (clone, original, type) {
        var cloneCanvas = clone.querySelector('canvas');
        var originalCanvas = original.querySelector('canvas');
        var context = cloneCanvas.getContext('2d');
        cloneCanvas.width = originalCanvas.width;
        cloneCanvas.height = originalCanvas.height;
        context.drawImage(originalCanvas, 0, 0);
        clone.classList.remove('dragged');
    });
    
    drake.on('drop', function (el, target, source, sibling) {
        if (target !== null) {
            var pageIndex = el.getAttribute('data-page-index');
            source.querySelector('[data-page-index="' + pageIndex + '"]').classList.add('dragged');
        }
        if (target !== null) {
            if (target.parentNode.classList.contains('file-container')) {
                var event = new Event('filled');
                target.parentNode.dispatchEvent(event);
                if (target.parentNode.querySelector('input[type="file"]')) {
                    target.parentNode.removeChild(target.parentNode.querySelector('.file-selector'));
                }
            }
        }
        document.querySelector('body').classList.remove('pdf-splitter-page-drag')
    });
    
    drake.on('drag', function (el, soruce) {
        document.querySelector('body').classList.add('pdf-splitter-page-drag')
    });
    
    return {
        'dragula': drake
    };
};

document.addEventListener('DOMContentLoaded', function (event) {
    window.schuldhulp.pdfSplitter = new window.schuldhulp.pdfSplitterClass(document.querySelector('.pdf-splitter'));
});
