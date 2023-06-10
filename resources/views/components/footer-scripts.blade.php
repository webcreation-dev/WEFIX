<script>
    var cornersTotal = 150
  </script>
  <script src="{{asset('layout/app.bundle.min.js.téléchargement')}}"></script>
  <div class="site-search" hidden="">
    <div class="site-search__overlay"></div>
    <div id="site-search-panel" class="site-search__panel" role="combobox" aria-expanded="false" aria-owns="site-search-results" aria-activedescendant="">
      <header class="site-search__header">
        <sl-input class="site-search__input" type="search" placeholder="Rechercher sur le site ..." aria-autocomplete="list" aria-controls="site-search-results" size="large" clearable="" form="" data-optional="" data-valid="">
          <template shadowrootmode="open">
            <!---->
            <div part="form-control" class=" form-control form-control--large ">
              <label part="form-control-label" class="form-control__label" for="input" aria-hidden="true">
                <slot name="label">
                  <!--?lit$468085831$-->
                </slot>
              </label>
              <div part="form-control-input" class="form-control-input">
                <div part="base" class=" input input--large input--standard input--empty ">
                  <slot name="prefix" part="prefix" class="input__prefix"></slot>
                  <input part="input" id="input" class="input__control" aria-describedby="help-text" type="search" title="" name="" placeholder="Rechercher sur le site ..." spellcheck="true">
                  <!--?lit$468085831$-->
                  <!--?lit$468085831$-->
                  <slot name="suffix" part="suffix" class="input__suffix"></slot>
                </div>
              </div>
              <slot name="help-text" part="form-control-help-text" id="help-text" class="form-control__help-text" aria-hidden="true">
                <!--?lit$468085831$-->
              </slot>
            </div>
          </template>
          <sl-icon slot="prefix" library="heroicons" name="magnifying-glass" aria-hidden="true">
            <template shadowrootmode="open">
              <!---->
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
              </svg>
            </template>
          </sl-icon>
        </sl-input>
      </header>
      <div class="site-search__body">
        <ul id="site-search-results" class="site-search__results" role="listbox" aria-labelledby="site-search-panel"></ul>
        <div class="site-search__empty">
          <sl-icon library="heroicons" name="x-circle" aria-hidden="true">
            <template shadowrootmode="open">
              <!---->
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </template>
          </sl-icon>
          <div class="wf-paragraph--sm wf-weight--semi-bold wf-font--mts wf-mt--1"> Aucun résultat trouvé. </div>
        </div>
      </div>
      <footer class="site-search__footer site-search__footer-message wf-display--none">
        <small> Nous avons trouvé <span class="wf-weight--semi-bold wf-color--primary">
            <span class="site-search__footer-length">12</span> résultats </span> pour vous ! </small>
      </footer>
      <footer class="site-search__footer">
        <small>
          <kbd>↑</kbd>
          <kbd>↓</kbd> naviguer </small>
        <small>
          <kbd>↲</kbd> choisir </small>
        <small>
          <kbd>esc</kbd> fermer </small>
      </footer>
    </div>
  </div>
  <script src="{{asset('layout/home.bundle.min.js.téléchargement')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });

    </script>

  @livewireScripts

