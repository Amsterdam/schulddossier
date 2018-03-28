window.schuldhulp = window.schuldhulp || {};

window.schuldhulp.quickViewer = {
    dom: {
        container: null,
        close: null,
        window: null,
        header: null,
        body: null,
        viewerContainer: null,
        viewer: null,
        spinner: null,
        pageCounter: null,
        nextButton: null,
        prevButton: null
    },
    currentPage: 0,
    currentPDFJS: null,
    
    showDocument: function (dom) {
        var self = this;
        var url = dom.getAttribute('href');

        if (this.dom.container === null) {
            this.init();
        }
        
        self.clear();
        self.dom.container.classList.add('open');
        self.dom.spinner.classList.add('visible');

        this.dom.header.innerHTML = '';
        this.dom.header.appendChild(document.createTextNode(dom.childNodes[0].nodeValue));

        PDFJS.getDocument(url).then(function (pdf) {
            self.currentPDFJS = pdf;
            self.showPage(1);
        });
    },
    
    showPage: function (num) {
        var self = this;
        
        self.clear();
        
        self.currentPage = num;
        
        this.currentPDFJS.getPage(num).then(function (page) {
            var canvasDom = document.createElement('canvas');
            var context = canvasDom.getContext('2d');
            var viewport = page.getViewport(2.0);
            
            canvasDom.height = viewport.height;
            canvasDom.width = viewport.width;
            
            self.dom.viewerContainer.appendChild(canvasDom);
            
            self.dom.pageCounter.innerHTML = '';
            self.dom.pageCounter.appendChild(document.createTextNode(num + ' / ' + self.currentPDFJS.numPages ));
            
            page.render({canvasContext: context, viewport: viewport }).then(function () {
                self.dom.spinner.classList.remove('visible');
            });
        });
    },
    
    clear: function () {
        var self = this;
        
        var canvasElements = self.dom.viewerContainer.querySelectorAll('canvas');
        for (var i = 0; i < canvasElements.length; i ++) {
            canvasElements.item(i).parentNode.removeChild(canvasElements.item(i));
        }
    },
    
    init: function () {
        var self = this;
        
        self.dom.container = document.createElement('div');
        self.dom.container.classList.add('quick-viewer', 'modal-container');
        
        self.dom.close = document.createElement('a');
        self.dom.close.addEventListener('click', function (event) {
            self.dom.container.classList.remove('open');
            event.preventDefault();
        });
        self.dom.container.appendChild(self.dom.close);

        self.dom.window = document.createElement('div');
        self.dom.window.classList.add('modal-window');
        self.dom.container.appendChild(self.dom.window);

        self.dom.header = document.createElement('div');
        self.dom.header.classList.add('modal-header');
        self.dom.window.appendChild(self.dom.header);
        
        self.dom.body = document.createElement('div');
        self.dom.body.classList.add('modal-body');
        self.dom.window.appendChild(self.dom.body);
        
        self.dom.viewerContainer = document.createElement('div');
        self.dom.viewerContainer.classList.add('viewer-container');
        self.dom.body.appendChild(self.dom.viewerContainer);

        self.dom.spinner = document.createElement('img');
        self.dom.spinner.src = '/pix/spinner.gif';
        self.dom.body.appendChild(self.dom.spinner);
        
        self.dom.prevButton = document.createElement('a');
        self.dom.prevButton.href = '#';
        self.dom.prevButton.classList.add('button', 'nav', 'prev');
        self.dom.prevButton.addEventListener('click', function (event) {
            event.preventDefault();
            if (self.currentPage > 1) {
                self.showPage(self.currentPage - 1);
            }
        });
        self.dom.body.appendChild(self.dom.prevButton);
        
        self.dom.nextButton = document.createElement('a');
        self.dom.nextButton.href = '#';
        self.dom.nextButton.classList.add('button', 'nav', 'next');
        self.dom.nextButton.addEventListener('click', function (event) {
            event.preventDefault();
            if (self.currentPage < self.currentPDFJS.numPages) {
                self.showPage(self.currentPage + 1);
            }
        });
        self.dom.body.appendChild(self.dom.nextButton);
        
        self.dom.pageCounter = document.createElement('div');
        self.dom.pageCounter.classList.add('page-counter');
        self.dom.body.appendChild(self.dom.pageCounter);
        
        window.document.getElementsByTagName('body')[0].appendChild(self.dom.container);
    },
    remove: function () {},
    next: function () {},
    prev: function () {}
};

document.addEventListener('click', function (event) {
    if (event.target.classList.contains('quick-viewer-file')) {
        event.preventDefault();
        window.schuldhulp.quickViewer.showDocument(event.target)
    }
});