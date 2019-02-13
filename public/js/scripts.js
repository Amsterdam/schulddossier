!function (w, d) {

  var handlers = {
      'accordion': function (e) {
          e && e.preventDefault();
          var self = this,
            container = _closest(self, self.dataset.container),
            transition = 'max-height 0.5s cubic-bezier(0.900, 0.000, 0.100, 1.000)',
            stateClass = this.dataset.stateClass || 'accordion-active',
            active = container.classList.contains(stateClass);

          container.body = container.querySelector('.accordion__body');
          container.body.style.transition = 'none';
          container.body.style.maxHeight = 200000 + 'px';
          var h = container.body.offsetHeight;
          if (active){
            container.body.style.maxHeight = h + 'px';
          }else {
            container.body.style.maxHeight = '0';
          }
          container.classList[active ? 'remove' : 'add'](stateClass);
          window.clearTimeout(container.timeout);
          container.timeout = setTimeout(function() {
            container.body.style.transition = transition;
            if (active){
              container.body.style.maxHeight = '0';
            }else {
              container.body.style.maxHeight = h + 'px';
            }
           }, 10);
          helpers.trigger(self, 'change');
      },
    'status-changer': function(e){
      var self = this,
        val = self.dataset.id,
        t = self.dataset.type,
        form = (e && e.target) && _closest(e.target, 'form'),
        container = _closest(self, '.dossier__item'),
        statusRadio = container.querySelector('.status-' + self.dataset.type + ' input[type="radio"][value="'+ val +'"]'),
        nvtCheckbox = container.querySelector('.nvt-input .form-row input[type="checkbox"]');

      e && e.preventDefault();

      if (val === '-1'){
        if (nvtCheckbox) {
          nvtCheckbox.checked = true;
        }
        container.classList.add('status-nvt');
      }else {
        container.classList.remove('status-nvt');
        for (var i = 0; i < 5; i++){
          container.classList.remove('status-' + t + '-' + i);
        }
        container.classList.add('status-' + t + '-' + val);
        if (nvtCheckbox){
          nvtCheckbox.checked = false;
        }
        statusRadio.checked = true;
      }
      form && changers[form.dataset.changer].call(form, e);
    },
    'global-toggle': function(e){
      var self = this,
        toggleClass = self.dataset.toggleClass,
        body = d.querySelector('body');


      console.log(e.target);
      console.log(self);
      if(toggleClass){
        e && e.preventDefault();
        body.classList[(body.classList.contains(toggleClass)) ? 'remove' : 'add'](toggleClass);
      }
    },
    'toggle': function (e) {
      var el = document.getElementById(this.hash.substr(1));
      if (el) {
        e && e.preventDefault();
        var
          wasActive = this.hash == w.location.hash || el.classList.contains('active'),
          addRemove = wasActive ? 'remove' : 'add',
          tabs = _closest(this, '.tabs');

        if (tabs && !wasActive) {
          var els = tabs.querySelectorAll('.active');
          for (var i = 0; i < els.length; i++) {
            els[i].classList.remove('active');
          }

        }

        var els = d.querySelectorAll('[href="' + this.hash + '"]');

        for (var i = 0; i < els.length; i++) {
          els[i].classList[addRemove]('active');
        }

        el.classList[addRemove]('active');

        var url = document.location.href.split('#')[0];
        if (history.replaceState) {
          w.location.hash = '_';
          history.replaceState({id: url}, d.title, wasActive ? url : url + this.hash);
        }

      }
    },
    'activate': function (e) {
      // var el = document.getElementById(this.hash.substr(1)),
      //   containers = document.querySelectorAll(this.dataset.containers || '.dossier__item');
      // if (el) {
      //   e && e.preventDefault();
      //   var
      //     wasActive = this.hash == w.location.hash || el.classList.contains('active'),
      //     addRemove = wasActive ? 'remove' : 'add';
      //
      //   for (var i = 0; i < containers.length; i++){
      //     containers[i].classList.remove('active');
      //   }
      //
      //   var els = d.querySelectorAll('[href="' + this.hash + '"]');
      //
      //   for (var i = 0; i < els.length; i++) {
      //     els[i].classList[addRemove]('active');
      //   }
      //
      //   el.classList[addRemove]('active');
      //
      //   var url = document.location.href.split('#')[0];
      //   if (history.replaceState) {
      //     w.location.hash = '_';
      //     history.replaceState({id: url}, d.title, wasActive ? url : url + this.hash);
      //   }
      //
      // }
    },

    'scroll': function (e) {
      var target = document.getElementById(this.hash.substr(1));
      if (!target) return;
      e.preventDefault();
      _scrollTo(target);
    },

    'add-file': function (e) {
      e && e.preventDefault();

      var
        files = _closest(this, '.files-container'),
        counter = files.dataset.counter || -1,
        prototype = files.querySelector('.prototype').cloneNode(true);

      counter++;

      prototype.classList.remove('prototype');
      prototype.setAttribute('data-name', prototype.getAttribute('data-name').replace('__name__', 'n' + counter));
      prototype.querySelector('input[type="text"]').setAttribute('name', prototype.querySelector('input[type="text"]').getAttribute('name').replace('__name__', 'n' + counter));
      prototype.querySelector('input[type="file"]').setAttribute('name', prototype.querySelector('input[type="file"]').getAttribute('name').replace('__name__', 'n' + counter));

      prototype.classList.add('active');

      files.insertBefore(prototype, this);

      prototype.addEventListener('filled', function (event) {
        var elm = prototype.querySelector('input[type="text"]');
        if ((elm.value === '' || elm.value === null) && (prototype.parentNode.getAttribute('data-default-document-naam'))) {
          elm.value = (prototype.parentNode.getAttribute('data-default-document-naam')) + ' ' + (counter + 1 + files.parentNode.querySelectorAll('.bestanden .bestand').length);
          elm.focus();
        }
      });

      prototype.querySelector('input[type="file"]').addEventListener('change', function (event) {
        if (event.target.value) {
          if (prototype.querySelector('.drop-area')) {
            prototype.removeChild(prototype.querySelector('.drop-area'));
          }
          prototype.classList.add('files-only');
          var button = prototype.querySelector('.file');
          if (button) {
            button.textContent = event.target.value.replace('/', '\\').split('\\').pop();
          }

          // var event = new Event('filled');
          // prototype.dispatchEvent(event);

          helpers.trigger(prototype, 'filled')
        }
      });

      prototype.querySelector('input[type="text"]').addEventListener('keydown', function (e) {
        if (e && e.keyCode == 13) {
          e.preventDefault();
        }
      });

      files.dataset.counter = counter;

      return prototype;
    },

    'remove-file': function (e) {
      e && e.preventDefault();

      var
        container = _closest(this, '.file-container'),
        files = _closest(this, '.files-container'),
        counter = files.dataset.counter || -1;

      counter--;

      files.dataset.counter = counter;

      files.removeChild(container);
    },

    'prepare-pdf': function (e) {
      e && e.preventDefault();

      var
        container = this.parentNode,
        input = container.querySelector('.bestand-naam input');
      if (container.classList.contains('file-pdf-pages')) {

        var pages = container.querySelectorAll('.page canvas');
        if (pages.length > 0) {
          var pdf = new jsPDF('portrait', 'mm', 'a4');
          for (var j = 0; j < pages.length; j++) {
            if (j > 0) {
              pdf.addPage();
            }

            var img = pages[j].toDataURL("image/jpeg");
            pdf.addImage(img, 'JPEG', 0, 0, 210, 297);

          }
          if (input) this.innerHTML = input.value;

          this.datauristring = helpers.convertDataURI(pdf.output('datauristring'));
        }
      }
    },
    'bestand': function (e) {
      e && e.preventDefault();
      var self = this,
        container = _closest(self, '.dossier__item'),
        viewer = container.querySelector('.document__viewer');
      viewer.showDocument(self, 1);
    },

    'clear': function (e) {
      var pdfsplitter = document.getElementById('pdfsplitter');

      if (!pdfsplitter) return;
      w.sessionStorage && w.sessionStorage.removeItem('pdfsplitterFile');

      var pages = pdfsplitter.querySelector('.pages');
      if (pages) pages.innerHTML = '';

    },

    'reset': function (e) {
      e && e.preventDefault();
      var form = _closest(this, 'form'),
        formChangedClass = this.dataset.formChangedSelector || 'form-changed';
      form && form.reset();

      var keyuppers = form.querySelectorAll('[data-keyupper]');
      for (var i = 0; i < keyuppers.length; i++) {
        helpers.trigger(keyuppers[i], 'keyup');
      }

      var changers = form.querySelectorAll('[data-changer]');
      for (var i = 0; i < changers.length; i++) {
        helpers.trigger(changers[i], 'keyup');
      }

      helpers.trigger(form, 'change');

      d.classList.remove(formChangedClass);

    },

    'focus': function (e) {
      e && e.preventDefault();
      var el = document.getElementById(this.hash.substr(1));
      if (!el) return;

      var input = el.querySelectorAll('input, textarea');
      if (input.length) {
        input[0].focus();
      }

    }
  };

  var decorators = {
    'lazy-load-document-thumb': function () {
      var self = this,
        bgUrl = self.dataset.backgroundImage;
      if (!isIE11){
        self.style.backgroundImage = 'url(' + bgUrl + ')';
      }
    },
    'img-cover-batch': function(){
        var self = this,
          fitType = 'cover',
          imgElements = self.querySelectorAll('img');
        if (!('remove' in Element.prototype)) {
            Element.prototype.remove = function () {
                if (this.parentNode) {
                    this.parentNode.removeChild(this);
                }
            };
        }
        for (var i = 0; i < imgElements.length; i++){
          var img = imgElements[i],
            parent = img.parentNode;
          parent.style.backgroundImage = 'url("' + img.getAttribute('src') + '")';
          parent.style.backgroundSize = fitType;
          parent.style.backgroundPosition = 'center center';
          parent.style.backgroundRepeat = 'no-repeat';
          parent.style.display = 'block';
          parent.removeChild(img);
        }
    },
    'release-notes': function(){
      var storageKey = 'release-notes-seen',
        allNotSeenClass = 'release-notes-not-seen',
        notseenClass = 'release-note-not-seen',
        notes = document.querySelectorAll('.release-note'),
        _checkSeenAll = function(){
          var allDone = _getStorage()['all'];
          document.body.classList[!allDone ? 'add' : 'remove'](allNotSeenClass);
        },
        _getStorage = function(){
          if (window.localStorage) {
            return JSON.parse(window.localStorage.getItem(storageKey) || '{}');
          }
        },
        _addNote = function(note, noteId){
          if (window.localStorage){
            var releaseNotesSeen = _getStorage();
            releaseNotesSeen[noteId] = true;
            if (Object.keys(releaseNotesSeen).length >= notes.length){
              releaseNotesSeen['all'] = true;
            }
            window.localStorage.setItem('release-notes-seen', JSON.stringify(releaseNotesSeen));
          }else {
            console.error('Je browser ondersteunt geen localstorage!');
          }
          note && note.classList.remove(notseenClass);
          _checkSeenAll();
        },
        _hasNote = function(noteId){
          if (window.localStorage){
            var releaseNotesSeen = JSON.parse(window.localStorage.getItem(storageKey) || '{}');
            return releaseNotesSeen[noteId];
          }
          return false;
        },
        _onChange = function(e){
          var self = this;
          if (_closest(e.target, '.accordion').classList.contains(self.dataset.listenClass)){
            helpers.ajax({
              'type': 'get',
              'url': self.dataset.url
            });
            window.clearTimeout(self.rnTimeout);
            self.rnTimeout = setTimeout(function(){
              _addNote(self, self.dataset.releaseNoteId);
            }, 4000);
          }else {
            window.clearTimeout(self.rnTimeout);
          }
        };
      for (var i = 0; i < notes.length; i++){
        notes[i].classList[_hasNote(notes[i].dataset.releaseNoteId) ? 'remove' : 'add'](notseenClass);
        notes[i].addEventListener('change', _onChange);
      }
      _checkSeenAll();
    },
    'track-changes': function () {
      var self = this,
        form = _closest(self, 'form'),
        q = 'input[type="text"], input[type="checkbox"], input[type="file"], input[type="radio"]:checked, textarea',
        formElements = self.querySelectorAll(q),
        eventElem = self.querySelectorAll('input, textarea'),
        radio = self.querySelector('input[type="radio"][name="voorlegger_form[alimentatie][alimentatieOntvangenMadi]"]:checked'),
        _formChange = function(e){
          console.log(e);
          console.log(self.dataset.initialData);
          console.log(_getData());
          console.log(self.dataset.initialData === _getData());
        },
        _getData = function(){
          // console.log(self.querySelector('input[type="radio"][name="voorlegger_form[alimentatie][alimentatieOntvangenMadi]"]:checked').value);
          formElements = self.querySelectorAll(q);
          return [].map.call(formElements, function( input ) {
              // console.log(input.type);
              if (input.type === 'radio'){
                // console.log(input.value);
                // console.log(input.name);

                // console.log(input.parentNode.querySelector('input[name="' + input.getAttribute('name') + '"]:checked').value);
              }else {
              }
                return input.value;
          }).join( '|' );
        };
      for(var i = 0; i < eventElem.length; i++){
        console.log(eventElem[i]);
        eventElem[i].addEventListener('change', _formChange)
      }
      console.log(radio.value);
      self.dataset.initialData = _getData();
      self.addEventListener('change', _formChange);

    },
    'accordion': function(){
      var self = this;


    },
    'bestand-viewer': function () {
      var self = this,
        container = _closest(this, '.dossier__voorlegger__body'),
        viewerContainer = self.querySelector('.viewer-container'),
        viewerWrapper = self.querySelector('.document__viewer__wrapper'),
        header = self.querySelector('.document__viewer__header'),
        title = self.querySelector('.document__viewer__header__title'),
        counter = self.querySelector('.document__viewer__header__counter'),
        btnNext = self.querySelector('.next'),
        btnPrev = self.querySelector('.prev'),
        statusElem = self.querySelector('.status'),
        documents = container.querySelectorAll('[data-handler="bestand"]'),
        currentDocElem,
        currentPDFJS,
        currentPage,
        currentPageScale,
        currentPageTranslate = 'translate(0, 0)',
        dragOffset = {'x': 0, 'y': 0},
        currentX = 0,
        currentY = 0,
        loadingTask,
        loadTimeout,
        maxScale = 2,
        canvas,
        _clear = function () {
            var canvasElements = viewerContainer.querySelectorAll('canvas');
            for (var i = 0; i < canvasElements.length; i ++) {
                canvasElements.item(i).parentNode.removeChild(canvasElements.item(i));
            }
            viewerContainer.style.backgroundImage = '';
        },
        _deselectDocument = function(){
          this.classList.remove('selected');
        },
        _selectDocument = function(pageNum){
          this.classList.add('selected');
        },
        _reset = function(){
          _clear();
          window.clearTimeout(loadTimeout);
          if (loadingTask){
            loadingTask.destroy();
            loadingTask = null;
          }
        },
        _nextPage = function(e) {
          e && e.preventDefault();
          if (currentPage < currentPDFJS.numPages) {
              _showPage(currentPage + 1);
          }
        },
        _prevPage = function(e) {
          e && e.preventDefault();
          if (currentPage > 1) {
              _showPage(currentPage - 1);
          }
        },
        _zoom = function(){
          self.classList[self.classList.contains('fit-mode') ? 'remove' : 'add']('fit-mode');
          _setZoom();
        },
        _showDocument = function(docElem, pageNum){
          currentDocElem = docElem
          var extension = currentDocElem.querySelector('[data-extension]').dataset.extension;
          self.classList.add('loading');
          self.classList.remove('disabled');
          for(var i = 0; i < documents.length; i++){
            documents[i].deselect();
          }
          docElem.select(pageNum);
          title.textContent = '';
          counter.textContent = '';
          _reset();
          if (extension !== 'pdf') {
            self.classList.remove('loading');
            self.classList.add('disabled');
            statusElem.innerHTML = '<span>Het <strong>'+extension+'</strong> bestand kan hier niet worden getoond.</span><br><span>Download het bestand om deze weer te geven.</span>';
            return;
          };

          statusElem.innerHTML = '<span>Het document</span><br><strong>'+ docElem.textContent + '</strong><br><span>wordt geladen</span>';

          loadTimeout = setTimeout(function(){
            loadingTask = PDFJS.getDocument(docElem.datauristring || docElem.getAttribute('href'));
            loadingTask.promise.then(function (pdf) {
                currentPDFJS = pdf;
                title.textContent = docElem.textContent;
                counter.textContent = ' (' + pageNum + ' / ' + currentPDFJS.numPages + ')';

                _showPage(pageNum);
            }).catch(function(error){
              console.log(error);
            });
          }, 200)

        },
        _viewerMouseDown = function(e) {
          canvas.style.transition = 'transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1)';
          if (e.target === canvas) {
            if (!self.classList.contains('fit-mode')) {
              dragOffset = {'x': e.clientX - currentX, 'y': e.clientY - currentY};
              window.addEventListener('mousemove', _viewerMouseMove, true);
            }
          }
          window.addEventListener('mouseup', _viewerMouseUp, true);
        },
        _viewerMouseUp = function(e){
          window.removeEventListener('mouseup', _viewerMouseUp, true);
          window.removeEventListener('mousemove', _viewerMouseMove, true);
          if (e.target === canvas) {
            if (self.classList.contains('dragging')) {

              self.classList.remove('dragging');
            }else {

            if (self.classList.contains('fit-mode')) {
              currentX = 0;
              currentY = 0;
              var rect = e.target.getBoundingClientRect(),
                w = rect.width,
                h = rect.height,
                x = (e.clientX - rect.left),
                y = (e.clientY - rect.top);

              canvas.style.transformOrigin = ((x / w) * 100) + '% ' + ((y / h) * 100) + '% 0';
            }
            _zoom();
            }
          }

        },
        _viewerMouseMove = function(e){
          self.classList.add('dragging');
          canvas.style.transition = 'none';
          currentX = (e.clientX - dragOffset.x);
          currentY = (e.clientY - dragOffset.y);
          currentPageTranslate = 'translate('+(currentX / maxScale)+'px, '+(currentY / maxScale)+'px)';
          _setZoom();
        },
        _currentCanvasAspect = function(){
          var c = viewerContainer.querySelector('canvas');
          return c.width / c.height;
        },
        _currentViewerAspect = function(){
          return viewerContainer.offsetWidth / viewerContainer.offsetHeight;
        },
        _setZoom = function () {

          var c = viewerContainer.querySelector('canvas');

          if(canvas) {
            if (!self.classList.contains('fit-mode')) {
              currentPageScale = 'scale('+maxScale+')';
            } else {
              currentPageTranslate = 'translate(0, 0)';
              currentPageScale = 'scale(1)';
              if (_currentCanvasAspect() > _currentViewerAspect()){
                c.style.height = 'auto';
                c.style.width = '100%';
              }else {
                c.style.width = 'auto';
                c.style.height = '100%';
              }
            }
            c.style.transform = currentPageScale + ' ' + currentPageTranslate;
          }
        },
        _showPage = function(num){

          _clear();

          currentPage = num;

          currentPDFJS.getPage(num)
            .then(function (page) {
              var canvasDom = document.createElement('canvas');
              var context = canvasDom.getContext('2d');
              var viewport = page.getViewport(2.0);

              canvasDom.height = viewport.height;

              canvasDom.width = viewport.width;


              viewerContainer.appendChild(canvasDom);

              counter.textContent = ' (' + num + ' / ' + currentPDFJS.numPages + ')';

              viewerContainer.scrollTop = 0;

              page.render({canvasContext: context, viewport: viewport }).then(function () {
                  canvas = viewerContainer.querySelector('canvas');
                  self.classList.add('fit-mode');
                  _setZoom();
                  self.classList.remove('loading');
              });
          });

        };
      this.showDocument = _showDocument;
      this.reset = _reset;


      btnNext.addEventListener('click', _nextPage);
      btnPrev.addEventListener('click', _prevPage);
      viewerContainer.addEventListener('mousedown', _viewerMouseDown, false);
      //window.addEventListener('mouseup', _viewerMouseUp, false);

      self.addEventListener('height-change', function(e){
      })

      for (var i = 0; i < documents.length; i++){
        documents[i].select = _selectDocument;
        documents[i].deselect = _deselectDocument;
      }

      if (window.sessionStorage) {
        var fitMode = window.sessionStorage.getItem('fitMode');
        if (fitMode === 'true') {
          self.classList.add('fit-mode');
        }
      }

    },
    'droppable': function () {
      var
        container = this;
      var currentZone;

      var _reset = function (e) {
        e.preventDefault();
        e.stopPropagation();
      }
      var _over = function (e) {
        var zone = (e && e.target) && _closest(e.target, '.dossier__item');
        var fileContainer = (e && e.target) && _closest(e.target, '.file-container');
        var splitter = (e && e.target) && _closest(e.target, '.pdf-splitter');
        var dropOver = document.querySelectorAll('.drop-over');


        if(splitter){
          splitter.classList.add('drop-over');
          window.clearTimeout(splitter.dropOverTO);
          splitter.dropOverTO = setTimeout(function () {
            splitter.classList.remove('drop-over');
          }, 2000);
        }else {
          d.querySelector('.pdf-splitter').classList.remove('drop-over');
        }
        if (fileContainer) {
          var els = d.querySelectorAll('.file-container.drop-over');
          for (var i = 0; i < els.length; i++) {
            els[i].classList.remove('drop-over');
          }
          fileContainer.classList.add('drop-over');
        }

        if (!zone) return;
        if (currentZone != zone) {
          if (currentZone) currentZone.classList.remove('drop-over');
          currentZone = zone;
          zone.classList.add('drop-over');
        }
      };
      var _out = function (e) {
      };
      var _drop = function (e) {
        if (currentZone) {
          currentZone.classList.remove('drop-over');
          currentZone = false;
        }

        var els = d.querySelectorAll('.drop-over');
        for (var i = 0; i < els.length; i++) {
          els[i].classList.remove('drop-over');
        }

        if (d.classList.contains('sort-mode')) return;
        console.log('drop');

        var files = e.dataTransfer.files;
        var zone = (e && e.target) && _closest(e.target, '.dossier__item');
        var form = (e && e.target) && _closest(e.target, 'form');
        var changer = (e && e.target) && _closest(e.target, '[data-changer]');
        var splitter = (e && e.target) && _closest(e.target, '.pdf-splitter'),
          body = d.querySelector('body');

        if(splitter){
          body.classList.add('splitter-active');
        }

        if (!files || !files.length) return;

        if (zone) location.hash = 'id_' + zone.getAttribute('id');

        if (form) {
          // create new file zone
          for (var i = 0; i < files.length; i++) {
            var addButton = zone.querySelector('.files-container .add.bestand');
            if (addButton) {
              var
                file = handlers['add-file'].call(addButton),
                input = file.querySelector('[type="file"]'),
                button = file.querySelector('.file'),
                icon = file.querySelector('[data-extension]');

              button.textContent = files[i].name.replace('/', '\\').split('\\').pop();
              // icon.dataset.extension = files[i].type.split('/').pop();

              // var event = new Event('filled');
              // file.dispatchEvent(event);

              helpers.trigger(file, 'filled')

              form.files = form.files || [];
              form.files.push({
                'name': input.name,
                'file': files[i]
              });
              input.parentNode.removeChild(input);

              file.classList.add('has-file');

            }

          }
        }

        changer && changers[changer.dataset.changer].call(changer, e);

      };

      if (!w.dropReset) {
        w.addEventListener('drop', _reset);
        w.addEventListener('dragover', _reset);
        w.dropReset = true;
      }

      var events = 'dragenter dropstart'.split(' ');
      for (var i = 0; i < events.length; i++) {
        this.addEventListener(events[i], _over);
      }

      var events = 'dragleave dropend  drop'.split(' ');
      for (var i = 0; i < events.length; i++) {
        this.addEventListener(events[i], _out);
      }

      this.addEventListener('drop', _drop);

    },

    'restore-splitter': function () {

      if (!w.sessionStorage) return;

      var el = document.getElementById('pdfsplitter');

      if (!el) {
        w.sessionStorage.removeItem('pdfsplitterFile');
      } else {
        setTimeout(function () {
          el.classList.add('animatable');
        }, 500);
        var blob = w.sessionStorage.getItem('pdfsplitterFile');

        if (!blob) return;

        el.blob = blob;

        helpers.trigger(el, 'change');

      }
    },

    'rome': function () {
      if (typeof rome != 'function' || this.tagName != 'INPUT') return;
      var datepicker = rome(this, {
        'inputFormat': 'DD-MM-YYYY',
        'time': false,
        'max': this.getAttribute('data-max'),
        'moment': {
          'locale': 'nl'
        }
      });
      datepicker.on('data', function () {
        if (!this.associated) return;
        var changer = _closest(this.associated, '[data-changer]');
        changer && changers[changer.dataset.changer].call(changer);
      });

    },
    'select-condition': function () {
      if (this.tagName !== 'SELECT') return;
      if (!this.dataset.field) return;
      var that = this,
        field = this.dataset.field,
        otherSelect = document.getElementById(field),
        _onChangeOtherSelect = function (e) {
          that.removeEventListener('change', _onChange);
          otherSelect.removeEventListener('change', _onChangeOtherSelect);
        },
        _onChange = function (e) {
          var otherSelect = document.getElementById(field),
            qs = 'optgroup[label="' + this.options[this.selectedIndex].text + '"]';

          if (otherSelect.querySelector(qs)) {
            otherSelect.value = otherSelect.querySelector(qs).querySelector('option').value;
          }
        };

      this.addEventListener('change', _onChange);
      otherSelect.addEventListener('change', _onChangeOtherSelect);
    },
    'save-overview-state': function() {
      var label = this.dataset.label || 'Terug naar overzicht',
        qs = window.location.search,
        context = this.dataset.context || 'dossier';
        w.sessionStorage && w.sessionStorage.setItem('overview-state-' + context, JSON.stringify({ "qs": qs, "label": label }));
    },
    'get-overview-state': function() {
      var context = this.dataset.context || 'dossier',
        stored = w.sessionStorage && JSON.parse(w.sessionStorage.getItem('overview-state-' + context));
      if (!stored) return;
      this.setAttribute('href', this.getAttribute('href') + stored.qs);
      this.querySelector('span').textContent = stored.label;
    },
    'schuldeiser-autocomplete': function(){
      var
        container = this,
        q = '',
        blurTimeout,
        searchTimeout,
        required = (container.dataset['required'] === 'true'),
        resultContainerClick = function (e) {
          var itemElem = _closest(e.target, '.search-result-item'),
            innerItemElem = itemElem.querySelector('.search-result-item-static'),
            itemElemClone = innerItemElem.cloneNode(true);
          container.resultCard.innerHTML = '';
          container.resultInput.value = parseInt(itemElem.dataset.id);
          container.resultCard.appendChild(itemElemClone);
          if (container.querySelector('.errors')){
            container.querySelector('.errors').style.display = 'none';
          }
          cleanupResultContainer();
          e.preventDefault();
        },
        containerClick = function(e){
          if (_closest(e.target, '.search-result-item__close') && _closest(e.target, '.search-result-item__close').classList.contains('search-result-item__close')){
            container.resultCard.innerHTML = '';
            container.resultInput.value = '';
            if (container.querySelector('.errors')){
              container.querySelector('.errors').style.display = 'none';
            }
            helpers.trigger(container.resultInput, 'change');
          }
        },
        inputFocus = function(e){
          search();
        },
        cleanupResultContainer = function(){
            container.resultContainer.classList.remove('show');
            container.resultContainer.classList.remove('no-results');
            container.resultContainer.innerHTML = '';
        },
        inputBlur = function (e) {
          window.clearTimeout(blurTimeout);
          blurTimeout = setTimeout(function(){
            cleanupResultContainer();
          }, 200);
          e.preventDefault();
        },
        search = function(){
            if (q !== '') {
              window.clearTimeout(searchTimeout);
              searchTimeout = setTimeout(function () {
                container.resultContainer.classList.add('loading');
                helpers.ajax({
                  type: 'get',
                  url: '/app/schuldeiser/?q=' + q,
                  data: {},
                  headers: [['X-Requested-With', 'XMLHttpRequest']],
                  callback: function (data, t) {
                    container.resultContainer.classList.remove('loading');
                    if (helpers.isJson(data)) {
                      render(JSON.parse(data));
                      container.resultContainer.classList.add('show');
                    } else {
                      cleanupResultContainer();
                      container.resultContainer.classList.add('error');
                      var counter = 3,
                        interval,
                        reloadMessage = document.createElement('span'),
                        counterElem = document.createElement('span');
                      counterElem.classList.add('error-counter');
                      counterElem.textContent = counter;
                      reloadMessage.classList.add('error');
                      reloadMessage.textContent = 'Je moet even opnieuw inloggen.';
                      container.resultContainer.appendChild(reloadMessage);
                      container.resultContainer.appendChild(counterElem);
                      interval = setInterval(function(){
                          if (counter <= 0){
                              window.clearInterval(interval);
                              location.reload(true);
                          }else {
                              counter -= 1;
                              counterElem.textContent = counter;
                          }
                      }, 1000);
                    }
                  },
                  error: function (e) {
                    console.error(error);
                  }
                });
              }, 400);
            } else {
              cleanupResultContainer();
            }
        },
        render = function (data) {
            cleanupResultContainer();
            if (data.length > 0) {
              container.resultContainer.innerHTML = '';
              var all = document.createElement('ul');
              all.classList.add('search-result-item-list');
              for (var i = 0; i < data.length; i++) {
                var el = template(data[i]);
                all.appendChild(el);
              }
              container.resultContainer.appendChild(all);
            } else {
              container.resultContainer.classList.add('no-results');
            }
        },
        inputKeyup = function (e) {
          if (e.keyCode === 38 || e.keyCode === 40) {
            e.preventDefault();
          } else {
            q = container.input.value.trim();
            search();
          }
        },
        highlightQ = function(str){

          var _q = (q.split(' ').length > 0) ? q.split(' ') : [q];
          for (i = 0; i < _q.length; i++){
            _q[i] = _q[i].trim();
          }
          for (var i = 0; i < _q.length; i++) {
            if (q !== '') {

              var qq = _q[i].replace(/[-[\]{}()*+?.,\\^$|#\s]/g, '\\$&'),
                r = RegExp(qq + '(?![^<]*>|[^<>]*</)', 'gi'),
                match,
                l = _q[i].length;
              while (match = r.exec(str)) {
                var m = str.substr(match.index, l);
                str = str.substr(0, match.index) + '<mark>' + m + '</mark>' + str.substr(match.index + l);
              }
            }
          }
          return str;
        },
        template = function(data){
          var div = document.createElement('div'),
            s = '<li class="search-result-item" data-id="' + data.id + '">\
            <span class="search-result-item-static">\
              <span>'+ data.bedrijfsnaam+'</span>\
              <span class="small">Allegro code: '+ data.allegroCode+'</span>\
              <span>'+ data.rekening+'</span>\
              <span>'+ data.straat+' ';
          if (data.huisnummerToevoeging) {
            s += data.huisnummerToevoeging + ' ';
          }
          s += data.huisnummer + '</span>\
              <span>'+ data.postcode +' ' + data.plaats + '</span>'
          s += (!required) ? '<a href="javascript:void(0);" class="search-result-item__close"></a>' : '';
          s += '</span>\
            <a class="search-result-item-selectable" href="javascript:void(0);">\
            <span>'+ highlightQ(data.bedrijfsnaam)+'</span>\
            <span class="small">Allegro code: '+ highlightQ(data.allegroCode)+'</span>\
            <span>'+ highlightQ(data.rekening)+'</span>\
            <span>'+ highlightQ(data.straat)+' ';
          if (data.huisnummerToevoeging) {
            s += highlightQ(data.huisnummerToevoeging) + ' ';
          }
          s += highlightQ(data.huisnummer) + '</span>\
            <span>'+ highlightQ(data.postcode) +' ' + highlightQ(data.plaats) + '</span>\
            </a>\
            </li>';
          div.innerHTML = s;
          return div.firstChild;
        };

      container.form = _closest(container, 'form');
      container.resultInput = container.querySelector('input[type="hidden"]');
      container.resultCard = container.querySelector('.result-container');
      container.resultContainer = container.querySelector('.search-result-container');
      container.input = container.querySelector('input');

      container.addEventListener('click', containerClick);
      container.resultContainer.addEventListener('click', resultContainerClick);
      container.input.addEventListener('focus', inputFocus);
      container.input.addEventListener('blur', inputBlur);
      container.input.addEventListener('keyup', inputKeyup);

    }
  };

  var submitters = {

    'save': function (e) {
      var
        form = this,
        formChangedClass = this.dataset.formChangedSelector || 'form-changed',
        submitButton = form.querySelector('button[type="submit"]'),
        i;

      submitButton.setAttribute('disabled', 'disabled');

      e && e.preventDefault();
      if (form.request) form.request.abort();

      form.classList.add('in-progress');

      // fix: new schuld new document name
      var bestandInputList = form.querySelectorAll('#nieuwe-schuld-toevoegen .file-container.active .bestand-naam input'),
        defaultDocumentNaam = form.querySelector('[data-default-document-naam]').dataset.defaultDocumentNaam,
        newDocCounter = 1;
      for(i = 0; i < bestandInputList.length; i++){
        if (bestandInputList[i].value.trim() === ''){
          bestandInputList[i].value = defaultDocumentNaam + ' ' + newDocCounter;
          newDocCounter++;
        }
      }

      var data = new FormData(form);


      var url = form.action + '?v' + (new Date()).getTime();

      if (form.method.toLowerCase() == 'get') {
        url += '&' + _serialize(form);
        data = {};
      };

      var els = form.querySelectorAll('.file-pdf-pages');

      for (i = 0; i < els.length; i++) {
        var pages = els[i].querySelectorAll('.page canvas');
        if (pages.length > 0) {
          var pdf = new jsPDF('portrait', 'mm', 'a4');
          for (var j = 0; j < pages.length; j++) {
            if (j > 0) {
              pdf.addPage();
            }

            var img = pages[j].toDataURL("image/jpeg");
            pdf.addImage(img, 'JPEG', 0, 0, 210, 297);

          }
          data.append(els[i].dataset.name, pdf.output('blob'), 'document.pdf');
        }

      }
      if (form.files) {
        for (i = 0; i < form.files.length; i++) {
          data.append(form.files[i].name, form.files[i].file);
        }
      }
      form.files = [];

      var _process = function (data, selector) {
        submitButton.removeAttribute("disabled");
        var div = document.createElement('div');
        div.innerHTML = data;

        var
          result = div.querySelectorAll(selector),
          target = d.querySelectorAll(selector);

        if (result && target) {
          for (var i = 0; i < target.length; i++) {
            target[i].innerHTML = result[i].innerHTML;

            // IE11 placeholder bug FIX
            var els = target[i].querySelectorAll('[placeholder]');
            for (var l = 0; l < els.length; l++) {
              if (els[l].getAttribute('placeholder') == els[l].value) els[l].value = '';
            }


          }
        }
        _addScrollHandlers();
        _decorate();
        _setHashEvents();
        _checkHash();

        form.classList.remove('in-progress');
        d.classList.remove(formChangedClass);

      };
      form.request = helpers.ajax({
        type: form.method,
        url: url,
        data: data,
        callback: function (data) {
          _process(data, form.dataset.resultSelector || 'body');
          //w.location.hash = '_';

          if (form.dataset.submitterCallback && typeof callbackers[form.dataset.submitterCallback] == 'function') {
            callbackers[form.dataset.submitterCallback].call(form);
          }

        },
        error: function () {
          form.classList.remove('in-progress');
          form.classList.add('ajax-error');
        }
      });

    },

    'zeker-weten': function (e) {
      if (!confirm(this.dataset.copy ? this.dataset.copy : 'Weet je het zeker?')) {
        e.preventDefault();
      }
    }

  };

  var changers = {
    'status-changer': function(e){
      var self = this,
        val = self.dataset.id,
        container = _closest(self, '.dossier__item'),
        statusRadio = container.querySelector('.status-' + self.dataset.type + ' input[type="radio"][value="'+ val +'"]'),
        nvtCheckbox = container.querySelector('.nvt > .form-row input[type="checkbox"]');

      e && e.preventDefault();
      if (val === -1){
        nvtCheckbox.checked = true;
      }else {
        nvtCheckbox.checked = false;
        statusRadio.checked = true;
      }
    },
    'change': function () {
      var
        form = this,
        formChangedClass = this.dataset.formChangedSelector || 'form-changed',
        defaultDocumentNaam = form.querySelector('#nieuwe-schuld-toevoegen .result-container .search-result-item-static span');

      d.classList.add(formChangedClass);

      if (defaultDocumentNaam){
        form.querySelector('#nieuwe-schuld-toevoegen [data-default-document-naam]').dataset.defaultDocumentNaam = defaultDocumentNaam.textContent;
      }

      if (form.changed === undefined) {
        form.changed = true;
        w.onbeforeunload = function () {
          if (document.querySelectorAll('.' + formChangedClass).length) {
            return 'Je hebt nog niet opgeslagen wijzigingen. Deze zullen verloren gaan als je niet eerst je wijzigingen opslaat';
          }
        }
      }

    },

    'pdfsplitter': function (e) {
      var
        container = this,
        pages = container.querySelector('.pages'),
        file = (e && e.dataTransfer && e.dataTransfer.files[0]) || this.querySelector('[name="file"]').files[0];


      container.classList.add('active');

      if (this.blob) {
        blob = helpers.convertDataURI(this.blob);
        this.blob = false;
      } else if (file) {
        blob = window.URL.createObjectURL(file);

        if (!this.fileReader) {
          this.fileReader = new FileReader();
          this.fileReader.addEventListener('load', function (e) {
            w.sessionStorage && w.sessionStorage.setItem('pdfsplitterFile', e.target.result);
          });
        }

        this.fileReader.readAsDataURL(file);

      } else {
        return;
      }

      var _clear = function () {
        var els = pages.querySelectorAll('.page');
        for (var i = 0; i < els.length; i++) {
          els[i].parentNode.removeChild(els[i]);
        }
      };

      var _load = function () {

        PDFJS.getDocument(blob).then(function (pdf) {
          for (var i = 1; i <= pdf.numPages; i += 1) {
            pdf.getPage(i).then(function (pdfPage) {
              _thumb(pdfPage);
            });
          }
        });
      };

      var _thumb = function (pdfPage) {
        var scale = 3;

        var thumb = document.createElement('div');
        thumb.classList.add('page');
        thumb.setAttribute('data-page-index', pdfPage.pageIndex);
        pages.appendChild(thumb);

        var canvas = document.createElement('canvas');
        canvas.classList.add('upload-as-pdf');
        var context = canvas.getContext('2d');
        var viewport = pdfPage.getViewport(scale);
        canvas.width = viewport.width;
        canvas.height = viewport.height;

        var renderContext = {canvasContext: context, viewport: viewport};
        pdfPage.render(renderContext);

        thumb.appendChild(canvas);

      };


      _clear();
      _load();

      if (!container.sortable && Sortable) {
        container.sortable = Sortable.create(pages, {
          filter: '.page-delete',
          animation: 150,
          sort: false,
          scroll: true,
          scrollSensitivity: 30,
          scrollSpeed: 10,
          onStart: function () {
            d.classList.add('sort-mode');
          },
          onEnd: function (e) {

            var
              zone = _closest(e.originalEvent.target, '.dossier__item'),
              changer = _closest(e.originalEvent.target, '[data-changer]'),
              file = _closest(e.originalEvent.target, '.file-container.active:not(.has-file)'),
              dropZone = false;

            if (zone) {

              if (zone.classList.contains('pdf-splitter')) {
                return;
              }

              location.hash = 'id_' + zone.getAttribute('id');

              var lastFile = file ? [file] : zone.querySelectorAll('.file-container.active:not(.has-file) .drop-area')

              if (!lastFile.length) {
                var addButton = zone.querySelector('.files-container .add.bestand');
                lastFile = handlers['add-file'].call(addButton);

              } else {
                lastFile = lastFile[(lastFile.length - 1)];
                lastFile = _closest(lastFile, '.file-container');
              }

              var label = lastFile.querySelector('label');
              if (label) label.parentNode.removeChild(label);

              var icon = lastFile.querySelector('[data-extension]');
              if (icon) icon.dataset.extension = 'pdf';

              lastFile.classList.add('file-pdf-pages');

              // var event = new Event('filled');
              // lastFile.dispatchEvent(event);

              helpers.trigger(lastFile, 'filled');


              dropZone = lastFile.querySelector('.drop-area');

              e.item.classList.add('dragged');

              var original = e.item.querySelector('canvas');

              var canvas = document.createElement('canvas');
              var context = canvas.getContext('2d');
              canvas.width = original.width;
              canvas.height = original.height;
              context.drawImage(original, 0, 0);
              var page = document.createElement('div');
              page.classList.add('page');
              page.appendChild(canvas);

              dropZone.appendChild(page);

              changer && changers[changer.dataset.changer].call(changer, e.originalEvent);

              if (!dropZone.sortable) {
                dropZone.sortable = Sortable.create(dropZone, {
                  group: 'files',
                  onEnd: function (e) {
                    var zone = _closest(e.originalEvent.target, '.drop-area');
                    if (!zone) {
                      e.item.parentNode.removeChild(e.item);
                    }
                  }
                });
              }

            }

            d.classList.remove('sort-mode');
          }


        });
      }


    },

    'address': function () {
      var
        select = this.querySelector('select'),
        fields = ['bedrijfsnaam', 'rekening', 'allegro-code', 'straat', 'huisnummer', 'postcode', 'plaats', 'opmerkingen'],
        template = '<strong>__bedrijfsnaam__ (__allegro-code__)</strong><br>__rekening__<br>__straat__ __huisnummer__<br>__postcode__ __plaats__<br>__opmerkingen__',
        widget = _closest(select, '.label-widget'),
        helper = widget.querySelector('.address-helper'),
        form = _closest(this, 'form');

      if (!helper) {
        helper = document.createElement('em');
        helper.classList.add('address-helper');
        widget.appendChild(helper);
      }

      helper.innerHTML = '';

      var selected = select.options[select.selectedIndex];

      if (selected && selected.value != '') {
        for (var i = 0; i < fields.length; i++) {
          var v = selected.getAttribute('data-' + fields[i]);
          if (!v) v = '';
          template = template.replace('__' + fields[i] + '__', v);
        }

        template = template.replace('()', '');

        helper.innerHTML = template;

      }

      helpers.trigger(form, 'change');


    },
    'status': function (e) {
      var
        active = _closest(this, '.accordion.active'),
        form = (e && e.target) && _closest(e.target, 'form');

      if (active) {
        active.classList.remove('active');
        var trigger = active.querySelector('.accordion-header .naam a');
        trigger.classList.remove('active');
        var url = document.location.href.split('#')[0];
        if (history.replaceState) {
          w.location.hash = '_';
          history.replaceState({id: url}, d.title, url);
        }
      }

      form && changers[form.dataset.changer].call(form, e);

    },
    'nvt-input': function (e) {
      var
        form = (e && e.target) && _closest(e.target, 'form'),
        input = this.querySelector('input');

      form && changers[form.dataset.changer].call(form, e);

      var container = _closest(this, '.dossier__item');
      if (!container) return;

      container.classList[input.checked ? 'add' : 'remove']('nvt');

    }
  };
  var sizeChanges = {
    'width': function (data) {
      if (data.w !== this.prevWidth && this.prevWidth){
        this.dispatchEvent(new CustomEvent('height-change', { bubbles: true, detail: data }));
      }
      this.prevWidth = data.w;
    },
    'height': function (data) {
      if (data.h !== this.prevHeight || !this.prevHeight){
        this.dispatchEvent(new CustomEvent('height-change', { bubbles: true, detail: data }));
      }
      this.prevHeight = data.h;
    }
  };
  var keyuppers = {
    'vertical-list-nav': function(e){
      if (e.keyCode === 38 || e.keyCode === 40) {
        var cls = this.dataset.activeClass || 'active',
          direction = (e.keyCode === 38) ? -1 : 1,
          qs = this.querySelectorAll(':scope > .dossier__item'),
          all = Array.prototype.slice.call(qs),
          selected = this.querySelector(':scope > .dossier__item.active'),
          index = Array.prototype.indexOf.call(qs, selected),
          n = index + direction;

        if (n > -1 && n < qs.length) {
          if (typeof qs[n].hashEvent === 'function'){
            location.hash = 'id_' + qs[n].getAttribute('id');
          }else {
            for (var i = 0; i < all.length; i++) {
              all[i].classList.remove(cls);
            }
            qs[n].classList.add(cls)
          }
        }
      }
    },
    'section-document-nav': function(e){
      var self = this;
      e && e.preventDefault();
      if ((e.keyCode === 37 || e.keyCode === 39) && self.classList.contains('active')) {
        var documents = self.querySelectorAll('[data-handler="bestand"]'),
          viewer = self.querySelector('.document__viewer'),
          direction = (e.keyCode === 37) ? -1 : 1,
          selectedDoc = self.querySelector('[data-handler="bestand"].selected') || documents[0];
        if (self.classList.contains('active') && documents.length > 0){
          var index = 0;
          for (var i = 0; i < documents.length; i++){
            if (documents[i] === selectedDoc){
              index = i;
            }
          }
          index = ((index + direction) < 0) ? 0 : ((index + direction) >= documents.length) ? documents.length - 1 : index + direction;
          if (documents[index] !== selectedDoc){
            viewer.showDocument(documents[index], 1);
          }
        }
      }
    }
  };
  var scrollerElements = {
    'sticky-section': function () {
      var self = this;
      var activeSection = document.querySelector('.dossier__item.active');
      var top = document.querySelector('.dossier__item__dummy__top');
      var bottom = document.querySelector('.dossier__item__dummy__bottom');
      if (activeSection){
        bottom.classList[(activeSection.dataset.offsetBottom > (self.scrollTop + self.offsetHeight)) ? 'add' : 'remove']('show');
        top.classList[(activeSection.dataset.offsetTop < self.scrollTop) ? 'add' : 'remove']('show');
      }
    }
  }
  var helpers = {
    'ajax': function (options) {
      var request = new XMLHttpRequest(),
        headers = options.headers || [],
        i;
      request.open(options.type, options.url, true);
      for (i = 0; i < headers.length; i++){
        request.setRequestHeader(headers[i][0], headers[i][1]);
      }
      request.onreadystatechange = function () {
        if (request.readyState == 4) {
          if (request.status >= 200 && request.status < 400) {
            if (options.callback && typeof (options.callback) == 'function') {
              options.callback.call(request, request.responseText);
            }
          } else {
            if (options.error && typeof (options.error) == 'function') {
              options.error.call(request, request.responseText);
            }
          }
          _decorate();
        }
      };

      request.send(options.data);

      return request;
    },
    'isJson': function(str){
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    },
    'trigger': function (el, eventType) {
      var e = document.createEvent('MouseEvents');
      e.initMouseEvent(eventType, true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
      el.dispatchEvent(e);
    },

    'convertDataURI': function (dataURI) {
      var
        marker = ';base64,',
        base64Index = dataURI.indexOf(marker) + marker.length,
        base64 = dataURI.substring(base64Index),
        raw = w.atob(base64),
        rawLength = raw.length,
        array = new Uint8Array(new ArrayBuffer(rawLength));

      for (var i = 0; i < rawLength; i++) {
        array[i] = raw.charCodeAt(i);
      }

      return array;
    }


  };
  var hashEvents = {
    'activate-section': function(hash){
      var el = this,
        activate = el.getAttribute('id') === hash.substr(3),
        viewer = el.querySelector('.document__viewer'),
        scrollParent = _closest(el, '.dossier__scroll-content'),
        scrollContainer = _closest(el, '.dossier__scroll-container'),
        doc = el.querySelector('[data-handler="bestand"]'),
        dummyElements = document.querySelectorAll('.dossier__item__dummy'),
        timeout,
        breadcrumb = document.querySelector('.nav-internal--breadcrumb__section'),
        containers = d.querySelectorAll(this.dataset.containers || '.dossier__item'),

        _deactivate = function(el){
          el.classList['remove']('active');
          viewer.reset();
        },
        _activate = function(el){
          el.classList['add']('active');
          el.dataset.offsetTop = el.getBoundingClientRect().top - scrollParent.getBoundingClientRect().top;
          el.dataset.offsetBottom = el.getBoundingClientRect().bottom - scrollParent.getBoundingClientRect().top;
          for (var i = 0; i < dummyElements.length; i++) {
            while (dummyElements[i].firstChild) {
              dummyElements[i].removeChild(dummyElements[i].firstChild);
            }
            dummyElements[i].appendChild(el.querySelector('.dossier__voorlegger__header').cloneNode(true));
          }
          doc && viewer.showDocument(doc, 1);
          scrollContainer.fn.call(scrollContainer, scrollContainer);
          var outsideTop = !(el.dataset.offsetBottom < (scrollContainer.scrollTop + scrollContainer.offsetHeight)),
            outsideBottom = !(el.dataset.offsetTop > scrollContainer.scrollTop);

          if (outsideTop || outsideBottom){
            el.scrollIntoView(!outsideTop);
          }















          if (breadcrumb) {
            window.clearTimeout(timeout);
            timeout = setTimeout(function(){
              breadcrumb.classList.remove('hide');
              breadcrumb.querySelector('span').textContent = el.querySelector('.dossier__voorlegger__header h3').textContent;
            }, 600);
          }
        };
      if (activate){
        _activate(el);
      }else {
        breadcrumb.classList.add('hide');
        for (var i = 0; i < dummyElements.length; i++) {
          dummyElements[i].classList.remove('show');
        }
        _deactivate(el);
      }
    }
  };

  var callbackers = {
    'schulditem-nieuw': function () {
      var el = document.getElementById('nieuwe-schuld-toevoegen-trigger');
      if (el && d.querySelector('#schuldItem-nieuw .errors')) {
        handlers.toggle.call(el);
        _scrollTo(document.getElementById('schuldItem-nieuw'));
      } else {
        w.scrollTo(0, 0);
      }
    },
  };
  window.addEventListener("keydown", function(e) {
      // space and arrow keys
    var body = document.querySelector('body')
    if(document.querySelector('body').classList.contains('voorlegger') && e.target === body) {
      if ([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
        e.preventDefault();
      }
    }
  }, false);

  
  d.addEventListener('click',function(t){var k,e,a=t&&t.target;if(a=_closest(a,'[data-handler]')){var r=a.getAttribute('data-handler').split(/\s+/);if('A'==a.tagName&&(t.metaKey||t.shiftKey||t.ctrlKey||t.altKey))return;for(e=0;e<r.length;e++){k=r[e].split(/[\(\)]/);handlers[k[0]]&&handlers[k[0]].call(a,t,k[1])}}});
  var l = { 
    submit: 'submitter', 
    change: 'changer'
  }
  for (var i in l){
    l.hasOwnProperty(i) && d.addEventListener(i,function(t){var s=t.type,o=eval(l[s]+'s'),k,e,f=t&&t.target;if(f=_closest(f,'[data-'+l[s]+']')){var r=f.getAttribute('data-'+l[s]).split(/\s+/);for(e=0;e<r.length;e++){k=r[e].split(/[\(\)]/);o&&o[k[0]]&&o[k[0]].call(f,t,k[1])}}});
  }

  d.addEventListener('keyup', function (e) {
    if (e.target.type === 'textarea' || e.target.type === 'text' || e.target.type === 'number' || e.target.type === 'email'){
    }else {
      for (var i in keyuppers){
        if (keyuppers.hasOwnProperty(i)) {
          var els = document.querySelectorAll('[data-keyupper="' + i + '"]');
          for (var j = 0; j < els.length; j++){
            keyuppers[i].call(els[j], e)
          }
        }
      }
    }
  });

  
  var scrollers=[];w.addEventListener('scroll',function(){requestAnimationFrame(function(){for(var l=0;l<scrollers.length;l++)scrollers[l].el&&scrollers[l].fn.call(scrollers[l].el)})},!1);
  
  var _scrollTo=function(n,o){var e,i=window.pageYOffset,t=window.pageYOffset+n.getBoundingClientRect().top,r=(document.body.scrollHeight-t<window.innerHeight?document.body.scrollHeight-window.innerHeight:t)-i,w=function(n){return n<.5?4*n*n*n:(n-1)*(2*n-2)*(2*n-2)+1},o=o||1e3;r&&window.requestAnimationFrame(function n(t){e||(e=t);var d=t-e,a=Math.min(d/o,1);a=w(a),window.scrollTo(0,i+r*a),d<o&&window.requestAnimationFrame(n)})};

  var _decorate = function(){var k,i,j,decoratorString,el,els=d.querySelectorAll('[data-decorator]');for(i=0;i<els.length;i++){for(decoratorString=(el=els[i]).getAttribute('data-decorator').split(/\s+/),j=0;j<decoratorString.length;j++){k=decoratorString[j].split(/[\(\)]/);decorators[k[0]]&&decorators[k[0]].call(el,k[1]);el.removeAttribute('data-decorator')}}};

  var _closest=function(e,t){var ms='MatchesSelector',c;['matches','webkit'+ms,'moz'+ms,'ms'+ms,'o'+ms].some(function(e){return'function'==typeof document.body[e]&&(c=e,!0)});var r=e;try{for(;e;){if(r&&r[c](t))return r;e=r=e.parentElement}}catch(e){}return null};

  var _isInt=function(value){return !isNaN(value) && (function(x) { return (x | 0) === x; })(parseFloat(value));};

  function _serialize(form){if(!form||form.nodeName!=="FORM"){return }var i,j,q=[];for(i=form.elements.length-1;i>=0;i=i-1){if(form.elements[i].name===""){continue}switch(form.elements[i].nodeName){case"INPUT":switch(form.elements[i].type){case"text":case"hidden":case"password":case"button":case"reset":case"submit":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"checkbox":case"radio":if(form.elements[i].checked){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value))}break;case"file":break}break;case"TEXTAREA":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"SELECT":switch(form.elements[i].type){case"select-one":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"select-multiple":for(j=form.elements[i].options.length-1;j>=0;j=j-1){if(form.elements[i].options[j].selected){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].options[j].value))}}break}break;case"BUTTON":switch(form.elements[i].type){case"reset":case"submit":case"button":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break}break}}return q.join("&")};

  var _byteCount = function (s) {return encodeURI(s).split(/%..|./).length - 1;};
  var _getScrollbarWidth = function() {
    // Create a temporary div container and append it into the body
    var container = document.createElement('div');
    // Append the container in the body
    document.body.appendChild(container);
    // Force scrollbar on the container
    container.style.overflow = 'scroll';

    // Add ad fake div inside the container
    var inner = document.createElement('div');
    container.appendChild(inner);

    // Calculate the width based on the container width minus its child width
    var width = container.offsetWidth - inner.offsetWidth;
    // Remove the container from the body
    document.body.removeChild(container);

    return width;
  };

  var _setHashEvents = function(){
    for (var i in hashEvents){
      var els = document.querySelectorAll('[data-hashevent="' + i + '"]');
      for (var j = 0; j < els.length; j++){
        if (hashEvents.hasOwnProperty(i) && els[j]){
          els[j].hashEvent = hashEvents[i];
        }
      }

    }
  };
  (function () {
    var prevHeight = window.innerHeight,
      prevWidth = window.innerWidth,
      interval = 100,
      timer = 0,
      _onResize = function(e){
        timer = 0;
        _checkSize = function () {
          if (timer >= interval) {
            var w = window.innerWidth,
              h = window.innerHeight;
            if (w !== prevWidth || h !== prevHeight) {
              for (var k in sizeChanges) {
                if (sizeChanges.hasOwnProperty(k)) {
                  var els = document.querySelectorAll('[data-size-change="' + k + '"]');
                  for (var i = 0; i < els.length; i++) {
                    sizeChanges[k].call(els[i], {'w': w, 'h': h});
                  }
                }
              }
            }
            prevWidth = w;
            prevHeight = h;
          } else {
            requestAnimationFrame(_checkSize);
            timer++;
          }
        };
        _checkSize();
      };
    w.addEventListener('resize', _onResize);
  }());
  var _checkHash = function (e) {
    var h = w.location.hash.substr(1);
    if (h){
      var hashEls = document.querySelectorAll('[data-hashevent]');
      for (var i = 0; i < hashEls.length; i++){
        hashEls[i].hashEvent(h);
      }
    }
  };
  var _addScrollHandlers = function(){
    for (var k in scrollerElements) {
      if (scrollerElements.hasOwnProperty(k)) {
        var els = document.querySelectorAll('[data-scroller="' + k + '"]');
          for (var i = 0; i < els.length; i++) {
            els[i].fn = scrollerElements[k];
            els[i].addEventListener('scroll', function(e){
              requestAnimationFrame(function(){
                e.target.fn.call(e.target);
              })
            });
          }
      }
    }
  };

  w.addEventListener('hashchange', _checkHash);
  //w.addEventListener('resize', _checkSize);


  var scrollbarWidth = _getScrollbarWidth();
  var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
  document.documentElement.style.setProperty('--scrollbar', scrollbarWidth+'px');
  document.documentElement.classList[isIE11 ? 'add' : 'remove']('ie11');

  _addScrollHandlers();
  _decorate();
  _setHashEvents();
  _checkHash();


}(window, document.documentElement);

(function(doc, proto) {
  try { // check if browser supports :scope natively
    doc.querySelector(':scope body');
  } catch (err) { // polyfill native methods if it doesn't
    ['querySelector', 'querySelectorAll'].forEach(function(method) {
      var nativ = proto[method];
      proto[method] = function(selectors) {
        if (/(^|,)\s*:scope/.test(selectors)) { // only if selectors contains :scope
          var id = this.id; // remember current element id
          this.id = 'ID_' + Date.now(); // assign new unique id
          selectors = selectors.replace(/((^|,)\s*):scope/g, '$1#' + this.id); // replace :scope with #ID
          var result = doc[method](selectors);
          this.id = id; // restore previous id
          return result;
        } else {
          return nativ.call(this, selectors); // use native code for other selectors
        }
      }
    });
  }
})(window.document, Element.prototype);
function getElementIndex(node) {
    var index = 0;
    while ( (node = node.previousElementSibling) ) {
        index++;
    }
    return index;
}