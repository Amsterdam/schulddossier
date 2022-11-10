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
        prevButton: null,
        fitButton: null
    },

    domBody: null,

    domHTML: null,

    currentPage: 0,
    
    currentPDFJS: null,
    
    accordion: null,
    
    documentLink: null,

    bodyViewerOpenClass: 'modal-container-open',
    
    showDocument: function (dom) {
        var self = this;
        self.documentLink = dom;

        if (self.dom.container === null) {
            self.init();
        }
        
        self.clear();
        self.dom.container.classList.add('open');
        self.dom.spinner.classList.add('visible');

        self.dom.header.innerHTML = '';
        
        // indien onderdeel van een accordion?
        if (window.schuldhulp._.matches(dom, '.accordion a') && window.schuldhulp._.matches(dom, '.accordion.no-header a') === false) {
            self.accordion = window.schuldhulp._.findParent(dom, '.accordion');
            var accordionTitle = self.accordion.querySelector('.accordion-header .naam').textContent;
            var documentTitle = dom.childNodes[0].textContent;
            self.dom.header.appendChild(document.createTextNode(accordionTitle + ': ' + documentTitle));
        } else {
            self.dom.header.appendChild(document.createTextNode(dom.childNodes[0].textContent));
            self.accordion = null;
        }
        
        PDFJS.getDocument(self.documentLink.datauristring || self.documentLink.getAttribute('href')).then(function (pdf) {
            self.currentPDFJS = pdf;
            self.showPage(1);
        }).catch(function(error){
            var counter = 3,
              interval,
              reloadMessage = document.createElement('span'),
              counterElem = document.createElement('span');
            counterElem.classList.add('error-counter');
            counterElem.textContent = counter;
            reloadMessage.classList.add('error');
            reloadMessage.textContent = 'Je moet even opnieuw inloggen.';
            self.dom.spinner.classList.remove('visible');
            self.dom.viewerContainer.appendChild(reloadMessage);
            self.dom.viewerContainer.appendChild(counterElem);
            interval = setInterval(function(){
                if (counter <= 0){
                    window.clearInterval(interval);
                    location.reload(true);
                }else {
                    counter -= 1;
                    counterElem.textContent = counter;
                }
            }, 1000);

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
            
            self.dom.viewerContainer.scrollTop = 0;
            
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

        self.domBody = window.document.getElementsByTagName('body')[0];
        self.domHTML = window.document.getElementsByTagName('html')[0];

        self.dom.container = document.createElement('div');
        self.dom.container.classList.add('quick-viewer');
        self.dom.container.classList.add('modal-container');
        
        self.dom.close = document.createElement('a');
        self.dom.close.href = '#';
        self.dom.close.addEventListener('click', function (event) {
            self.dom.container.parentNode.removeChild(self.dom.container);
            self.domHTML.classList.remove(self.bodyViewerOpenClass);
            self.dom.container = null;
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
        self.dom.spinner.src = '/images/ico_spinner.gif';
        self.dom.body.appendChild(self.dom.spinner);

        self.dom.prevButton = document.createElement('a');
        self.dom.prevButton.href = '#';
        self.dom.prevButton.title = 'Vorige pagina';
        self.dom.prevButton.classList.add('button');
        self.dom.prevButton.classList.add('prev');

        self.dom.prevButton.addEventListener('click', function (event) {
            event.preventDefault();
            self.prev();
        });
        self.dom.body.appendChild(self.dom.prevButton);

        self.dom.prevDocButton = document.createElement('a');
        self.dom.prevDocButtonIcon = document.createElement('span');
        self.dom.prevDocButtonIcon.classList.add('icon-file');
        self.dom.prevDocButtonIcon.dataset.extension = 'pdf';
        self.dom.prevDocButton.href = '#';
        self.dom.prevDocButton.title = 'Vorige document';
        self.dom.prevDocButton.classList.add('button');
        self.dom.prevDocButton.classList.add('prev');
        self.dom.prevDocButton.classList.add('prev-document');
        self.dom.prevDocButton.addEventListener('click', function (event) {
            event.preventDefault();
            self.prevDocument();
        });
        self.dom.prevDocButton.appendChild(self.dom.prevDocButtonIcon);
        self.dom.body.appendChild(self.dom.prevDocButton);

        self.dom.nextButton = document.createElement('a');
        self.dom.nextButton.href = '#';
        self.dom.nextButton.title = 'Volgende pagina';
        self.dom.nextButton.classList.add('button');
        self.dom.nextButton.classList.add('next');
        self.dom.nextButton.addEventListener('click', function (event) {
            event.preventDefault();
            self.next();
        });
        self.dom.body.appendChild(self.dom.nextButton);

        self.dom.nextDocButton = document.createElement('a');
        self.dom.nextDocButtonIcon = document.createElement('span');
        self.dom.nextDocButtonIcon.classList.add('icon-file');
        self.dom.nextDocButtonIcon.dataset.extension = 'pdf';
        self.dom.nextDocButton.href = '#';
        self.dom.nextDocButton.title = 'Volgende document';
        self.dom.nextDocButton.classList.add('button');
        self.dom.nextDocButton.classList.add('next');
        self.dom.nextDocButton.classList.add('next-document');
        self.dom.nextDocButton.addEventListener('click', function (event) {
            event.preventDefault();
            self.nextDocument();
        });
        self.dom.nextDocButton.appendChild(self.dom.nextDocButtonIcon);
        self.dom.body.appendChild(self.dom.nextDocButton);

        self.dom.fitButton = document.createElement('a');
        self.dom.fitButton.href = '#';
        self.dom.fitButton.classList.add('button');
        self.dom.fitButton.classList.add('toggle-fit-mode');
        
        self.dom.fitButton.addEventListener('click', function (event) {
            event.preventDefault();
            self.dom.window.classList[self.dom.window.classList.contains('fit-mode') ? 'remove' : 'add']('fit-mode');
            window.sessionStorage && window.sessionStorage.setItem('fitMode', self.dom.window.classList.contains('fit-mode'));
        });
        self.dom.body.appendChild(self.dom.fitButton);
        
        if (window.sessionStorage) {
          var fitMode = window.sessionStorage.getItem('fitMode');
          if (fitMode) {
            self.dom.window.classList.add('fit-mode');
          }
        }

        
        self.dom.pageCounter = document.createElement('div');
        self.dom.pageCounter.classList.add('page-counter');
        self.dom.body.appendChild(self.dom.pageCounter);

        self.domHTML.classList.add(self.bodyViewerOpenClass);
        self.domBody.appendChild(self.dom.container);
    },
    
    next: function () {
        var self = this;
        if (self.currentPage < self.currentPDFJS.numPages) {
            self.showPage(self.currentPage + 1);
        }
    },
    nextDocument: function () {
        var self = this;
        if (self.accordion !== null) {
            var container = window.schuldhulp._.findParent(self.accordion, '.accordion-container');
            var files = container.querySelectorAll('li .bestand-zoom');
            for (var i = 0; i < files.length; i ++) {
                if (i > 0 && files.item(i - 1) === self.documentLink) {
                    self.showDocument(files.item(i));
                    break;
                }
            }
        }
    },
    
    prev: function () {
        var self = this;
        if (self.currentPage > 1) {
            self.showPage(self.currentPage - 1);
        }
    },
    prevDocument: function () {
        var self = this;
        if (self.accordion !== null) {
            var container = window.schuldhulp._.findParent(self.accordion, '.accordion-container');
            var files = container.querySelectorAll('li .bestand-zoom');
            for (var i = 0; i < files.length; i ++) {
                if (i > 1 && files.item(i) === self.documentLink) {
                    self.showDocument(files.item(i - 1));
                    break;
                }
            }
        }
    }
};

document.addEventListener('click', function (event) {
    if (event.target.classList.contains('quick-viewer-file')) {
        event.preventDefault();
        window.schuldhulp.quickViewer.showDocument(event.target)
    }
});