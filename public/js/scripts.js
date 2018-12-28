!function (w, d) {

  var handlers = {

    'status-changer': function(e){
      console.log('status-changer');
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

      if(toggleClass){
        e && e.preventDefault();
        console.log(body.classList.contains(toggleClass));
        body.classList[(body.classList.contains(toggleClass)) ? 'remove' : 'add'](toggleClass);
      }else {

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
        if (elm.value === '' || elm.value === null) {
          elm.value = prototype.parentNode.getAttribute('data-default-document-naam') + ' ' + (counter + 1 + files.parentNode.querySelectorAll('.bestanden .bestand').length);
          elm.focus();
        }
      });

      prototype.querySelector('input[type="file"]').addEventListener('change', function (event) {
        console.log(event)
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
      console.log(input);
      console.log(container);
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
      self.open = function(){
        viewer.showDocument(self, 1);
      }
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
    'bestand-viewer': function () {
      var self = this,
        container = _closest(this, '.dossier__voorlegger__body'),
        viewerContainer = self.querySelector('.viewer-container'),
        header = self.querySelector('.document__viewer__header'),
        title = self.querySelector('.document__viewer__header__title'),
        counter = self.querySelector('.document__viewer__header__counter'),
        btnNext = self.querySelector('.next'),
        btnPrev = self.querySelector('.prev'),
        btnZoom = self.querySelector('.zoom'),
        statusElem = self.querySelector('.status'),
        documents = container.querySelectorAll('[data-handler="bestand"]'),
        currentDocElem,
        currentPDFJS,
        currentPage,
        loadingTask,
        loadTimeout,
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
        _zoom = function(e){
          e && e.preventDefault();
          self.classList[self.classList.contains('fit-mode') ? 'remove' : 'add']('fit-mode');

          window.sessionStorage && window.sessionStorage.setItem('fitMode', self.classList.contains('fit-mode'));

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
                  viewerContainer.style.backgroundSize ='contain';
                  viewerContainer.style.backgroundImage = 'url(' + canvasDom.toDataURL("image/jpeg") + ')';
                  canvasDom.setAttribute('style', 'width: ' + viewport.width + 'px; height: ' + viewport.height + 'px;');
                  self.classList.remove('loading');
              });
          });

        };
      //this.showPage = _showPage;
      this.showDocument = _showDocument;
      this.reset = _reset;


      btnNext.addEventListener('click', _nextPage);
      btnPrev.addEventListener('click', _prevPage);
      btnZoom.addEventListener('click', _zoom);

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

        var files = e.dataTransfer.files;
        var zone = (e && e.target) && _closest(e.target, '.dossier__item');
        var form = (e && e.target) && _closest(e.target, 'form');
        var changer = (e && e.target) && _closest(e.target, '[data-changer]');


        if (!files || !files.length) return;

        if (zone) location.hash = zone.getAttribute('id');
        // if (zone) zone.classList.add('active');

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
        resultContainerClick = function (e) {
          var itemElem = _closest(e.target, '.search-result-item'),
            innerItemElem = itemElem.querySelector('.search-result-item-static'),
            itemElemClone = innerItemElem.cloneNode(true);
          container.resultCard.innerHTML = '';
          container.resultInput.value = parseInt(itemElem.dataset.id);
          container.resultCard.appendChild(itemElemClone);
          helpers.trigger(container.resultInput, 'change');
          cleanupResultContainer();
          e.preventDefault();
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
              <span>'+ data.postcode +' ' + data.plaats + '</span>\
            </span>\
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

      container.resultContainer.addEventListener('click', resultContainerClick);
      container.input.addEventListener('focus', inputFocus);
      container.input.addEventListener('blur', inputBlur);
      container.input.addEventListener('keyup', inputKeyup);

    }
  };

  var submitters = {

    'save': function (e) {
      console.log('save')
      var
        form = this,
        formChangedClass = this.dataset.formChangedSelector || 'form-changed',
        submitButton = form.querySelector('button[type="submit"]');

      submitButton.setAttribute('disabled', 'disabled');

      e && e.preventDefault();
      if (form.request) form.request.abort();

      form.classList.add('in-progress');

      var data = new FormData(form);


      var url = form.action + '?v' + (new Date()).getTime();

      if (form.method.toLowerCase() == 'get') {
        url += '&' + _serialize(form);
        data = {};
      };

      var els = form.querySelectorAll('.file-pdf-pages');

      for (var i = 0; i < els.length; i++) {
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
        for (var i = 0; i < form.files.length; i++) {
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
      console.log('status-changer');
      var self = this,
        val = self.dataset.id,
        container = _closest(self, '.dossier__item'),
        statusRadio = container.querySelector('.status-' + self.dataset.type + ' input[type="radio"][value="'+ val +'"]'),
        nvtCheckbox = container.querySelector('.nvt > .form-row input[type="checkbox"]');


      console.log(statusRadio);
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
        formChangedClass = this.dataset.formChangedSelector || 'form-changed';


      d.classList.add(formChangedClass);

      if (!form.changed) {
        form.changed = true;
        w.onbeforeunload = function () {
          if (d.querySelectorAll('.' + formChangedClass).length) {
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

              zone.classList.add('active');

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
    'nvt-toggle': function (e) {
      console.log('toggle');
      console.log(e.target);
      console.log(e.target.checked);
      var nvtElements = document.querySelectorAll('.voorlegger-header.nvt'),
        addOrRemove = (e.target.checked) ? 'add' : 'remove';

      for (var i = 0; i < nvtElements.length; i++){
        console.log(nvtElements[i]);
        _closest(nvtElements[i], '.dossier__item').classList[e.target.checked ? 'add' : 'remove']('hide');
      }
      console.log(nvtElements);
    },
    'nvt': function (e) {
      console.log(e);
      var
        form = (e && e.target) && _closest(e.target, 'form'),
        input = this.querySelector('input');

      form && changers[form.dataset.changer].call(form, e);

      var header = _closest(this, '.voorlegger-header');
      var container = _closest(this, '.dossier__item');
      // if (!header) return;
      console.log('nvt');
      // header.classList[input.checked ? 'add' : 'remove']('nvt');
      container.classList[input.checked ? 'add' : 'remove']('nvt');

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
  var mouseovers = {
    'overflow-hidden-fix': function (e) {
        //console.log(e);
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
            location.hash = qs[n].getAttribute('id');
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
    },
    'change': function (e) {
      // changers['change'] && changers['change'].call(this, e);
    },
    // 'select': function (e) {
    //   var
    //     container = this;
    //
    //   if (!container.select) {
    //     container.form = _closest(container, 'form');
    //     container.select = container.querySelector('select');
    //     container.clone = container.select.cloneNode(true);
    //     container.options = container.clone.querySelectorAll('option');
    //     container.input = container.querySelector('input');
    //   }
    //
    //
    //   if (e.keyCode == 38 || e.keyCode == 40) {
    //     var index = Math.min(container.select.options.length - 1, Math.max(0, container.select.selectedIndex + (e.keyCode == 38 ? -1 : +1)));
    //     container.select.options[index].selected = true;
    //     e.preventDefault();
    //   } else {
    //
    //     container.select.innerHTML = '';
    //     var val = container.input.value.trim();
    //
    //     if (val.length === 0) {
    //       container.select.innerHTML = container.clone.innerHTML;
    //     } else {
    //       var reg = new RegExp((val.length === 1 ? '^' : '') + val, 'i');
    //       for (var i = 0; i < container.options.length; i++) {
    //         if (container.options[i].value != '') {
    //           var string = container.options[i].textContent;
    //           for (var k = 0; k < container.options[i].attributes.length; k++) {
    //             if (/^data-/.test(container.options[i].attributes[k].nodeName)) {
    //               string += ' ' + container.options[i].attributes[k].nodeValue;
    //             }
    //           }
    //
    //           if (string.match(reg)) {
    //             container.select.appendChild(container.options[i].cloneNode(true));
    //           }
    //         }
    //       }
    //
    //       var option = document.createElement('option');
    //       option.value = '';
    //       container.select.appendChild(option);
    //
    //     }
    //   }
    //
    //   helpers.trigger(container.select, 'change');
    // }

  };

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
        activate = el.getAttribute('id') === hash,
        viewer = el.querySelector('.document__viewer'),
        doc = el.querySelector('[data-handler="bestand"]'),
        containers = d.querySelectorAll(this.dataset.containers || '.dossier__item'),

        _deactivate = function(el){
          el.classList['remove']('active');
          viewer.reset();
        },
        _activate = function(el){
          el.classList['add']('active');
          doc && viewer.showDocument(doc, 1);

        };

      if (activate){
        _activate(el);
        el.scrollIntoView({ behavior: 'smooth', block: 'start'});
      }else {
        _deactivate(el);
      }


    }
  };

  var callbackers = {
    'schulditem-nieuw': function () {
      var el = document.getElementById('nieuwe-schuld-toevoegen-trigger');
      console.log(el);
      console.log(d.querySelector('#schuldItem-nieuw .errors'));
      if (el && d.querySelector('#schuldItem-nieuw .errors')) {
        handlers.toggle.call(el);
        _scrollTo(document.getElementById('schuldItem-nieuw'));
      } else {
        w.scrollTo(0, 0);
      }
    },
  };
  
  
  d.addEventListener('click',function(t){var k,e,a=t&&t.target;if(a=_closest(a,'[data-handler]')){var r=a.getAttribute('data-handler').split(/\s+/);if('A'==a.tagName&&(t.metaKey||t.shiftKey||t.ctrlKey||t.altKey))return;for(e=0;e<r.length;e++){k=r[e].split(/[\(\)]/);handlers[k[0]]&&handlers[k[0]].call(a,t,k[1])}}});
  var l = { 
    submit: 'submitter', 
    change: 'changer',
    keyup: 'keyupper'
  }
  for (var i in l){
    l.hasOwnProperty(i) && d.addEventListener(i,function(t){var s=t.type,o=eval(l[s]+'s'),k,e,f=t&&t.target;if(f=_closest(f,'[data-'+l[s]+']')){var r=f.getAttribute('data-'+l[s]).split(/\s+/);for(e=0;e<r.length;e++){k=r[e].split(/[\(\)]/);o&&o[k[0]]&&o[k[0]].call(f,t,k[1])}}});
  }

  d.addEventListener('keyup', function (e) {
    for (var i in keyuppers){
      if (keyuppers.hasOwnProperty(i)) {
        var els = document.querySelectorAll('[data-keyupper="' + i + '"]');
        for (var j = 0; j < els.length; j++){
          keyuppers[i].call(els[j], e)
        }
      }
    }
  });

  
  var scrollers=[];w.addEventListener('scroll',function(){requestAnimationFrame(function(){for(var l=0;l<scrollers.length;l++)scrollers[l].el&&scrollers[l].fn.call(scrollers[l].el)})},!1);
  
  var _scrollTo=function(n,o){var e,i=window.pageYOffset,t=window.pageYOffset+n.getBoundingClientRect().top,r=(document.body.scrollHeight-t<window.innerHeight?document.body.scrollHeight-window.innerHeight:t)-i,w=function(n){return n<.5?4*n*n*n:(n-1)*(2*n-2)*(2*n-2)+1},o=o||1e3;r&&window.requestAnimationFrame(function n(t){e||(e=t);var d=t-e,a=Math.min(d/o,1);a=w(a),window.scrollTo(0,i+r*a),d<o&&window.requestAnimationFrame(n)})};

  var _decorate = function(){var k,i,j,decoratorString,el,els=d.querySelectorAll('[data-decorator]');for(i=0;i<els.length;i++){for(decoratorString=(el=els[i]).getAttribute('data-decorator').split(/\s+/),j=0;j<decoratorString.length;j++){k=decoratorString[j].split(/[\(\)]/);decorators[k[0]]&&decorators[k[0]].call(el,k[1]);el.removeAttribute('data-decorator')}}};

  var _closest=function(e,t){var ms='MatchesSelector',c;['matches','webkit'+ms,'moz'+ms,'ms'+ms,'o'+ms].some(function(e){return'function'==typeof document.body[e]&&(c=e,!0)});var r=e;try{for(;e;){if(r&&r[c](t))return r;e=r=e.parentElement}}catch(e){}return null};
  
  function _serialize(form){if(!form||form.nodeName!=="FORM"){return }var i,j,q=[];for(i=form.elements.length-1;i>=0;i=i-1){if(form.elements[i].name===""){continue}switch(form.elements[i].nodeName){case"INPUT":switch(form.elements[i].type){case"text":case"hidden":case"password":case"button":case"reset":case"submit":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"checkbox":case"radio":if(form.elements[i].checked){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value))}break;case"file":break}break;case"TEXTAREA":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"SELECT":switch(form.elements[i].type){case"select-one":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"select-multiple":for(j=form.elements[i].options.length-1;j>=0;j=j-1){if(form.elements[i].options[j].selected){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].options[j].value))}}break}break;case"BUTTON":switch(form.elements[i].type){case"reset":case"submit":case"button":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break}break}}return q.join("&")};

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
  var _checkHash = function (e) {
    var h = w.location.hash.substr(1);
    if (h){
      var hashEls = document.querySelectorAll('[data-hashevent]');
      for (var i = 0; i < hashEls.length; i++){
        hashEls[i].hashEvent(h);
      }
    }
  }
  w.addEventListener('hashchange', _checkHash);

  _decorate();
  _setHashEvents();
  _checkHash();



  // if (w.location.hash) {
  //
  //   var
  //     el = document.querySelector('.document ' + w.location.hash),
  //     trigger = document.querySelector('[data-handler*="toggle"][href^="' + w.location.hash + '"]');
  //
  //
  //   if (el) {
  //
  //     if (trigger) {
  //
  //       var tabs = _closest(trigger, '.tabs');
  //
  //       if (tabs) {
  //         var els = tabs.querySelectorAll('.active');
  //         for (var i = 0; i < els.length; i++) {
  //           els[i].classList.remove('active');
  //         }
  //
  //       }
  //
  //       trigger.classList.add('active');
  //       el.classList.add('active');
  //
  //     }
  //
  //     setTimeout(function () {
  //       w.scrollTo(0, 0);
  //       setTimeout(function () {
  //         _scrollTo(el);
  //       }, 800);
  //     }, 1);
  //   }
  // }


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