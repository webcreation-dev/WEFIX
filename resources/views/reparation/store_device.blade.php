<!DOCTYPE html>
<!-- saved from url=(0044)https://wefix.net/reparation/devis/boutiques -->
<html lang="en">
    @include('components.head')

  <body x-init="" cz-shortcut-listen="true">
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC998KW" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
    <main class="wrapper">

      @livewire('quote-model-controller', ['model' => $model])

      <section class="container mt-2">
        <div class="wf-step sal-animate" aria-label="stepper" role="navigation" data-sal="fade-in" data-sal-delay="200" data-sal-duration="200" data-sal-once="data-sal-once">
          <sl-resize-observer>
            <template shadowrootmode="open">
              <!---->
              <slot></slot>
            </template>
            <a class="wf-step__item" href="#" aria-label="Marque">
              <div class="wf-step__item--dot">
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
                <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">

                  <sl-icon library="heroicons" name="check" label="Marque" role="img" aria-label="Marque">
                    <template shadowrootmode="open">
                      <!---->
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                    </template>
                  </sl-icon>
                </sl-button>
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
              </div>
              <div class="wf-step__item--text" aria-current="page">Marque</div>
            </a>
            <a class="wf-step__item" href="#" aria-label="Modèle">
              <div class="wf-step__item--dot">
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
                <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">

                  <sl-icon library="heroicons" name="check" label="Modèle" role="img" aria-label="Modèle">
                    <template shadowrootmode="open">
                      <!---->
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                    </template>
                  </sl-icon>
                </sl-button>
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
              </div>
              <div class="wf-step__item--text" aria-current="page">Modèle</div>
            </a>
            <a class="wf-step__item" href="#" aria-label="Panne">
              <div class="wf-step__item--dot">
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
                <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">

                  <sl-icon library="heroicons" name="check" label="Panne" role="img" aria-label="Panne">
                    <template shadowrootmode="open">
                      <!---->
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                    </template>
                  </sl-icon>
                </sl-button>
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
              </div>
              <div class="wf-step__item--text" aria-current="page">Panne</div>
            </a>
            <a class="wf-step__item" href="#" aria-label="Coordonnées">
              <div class="wf-step__item--dot">
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
                <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">

                  <sl-icon library="heroicons" name="check" label="Coordonnées" role="img" aria-label="Coordonnées">
                    <template shadowrootmode="open">
                      <!---->
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                    </template>
                  </sl-icon>
                </sl-button>
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
              </div>
              <div class="wf-step__item--text" aria-current="page">Coordonnées</div>
            </a>
            <a class="wf-step__item wf-step__item--active" aria-label="Boutiques">
              <div class="wf-step__item--dot">
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
                <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">
                  5
                </sl-button>
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
              </div>
              <div class="wf-step__item--text" aria-current="page">Boutiques</div>
            </a>
            <a class="wf-step__item wf-step__item--hover" aria-label="Réservation">
              <div class="wf-step__item--dot">
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
                <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">
                  6
                </sl-button>
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
              </div>
              <div class="wf-step__item--text" aria-current="page">Réservation</div>
            </a>
          </sl-resize-observer>
        </div>
        <h1 class="title-section text-center my-4" data-sal="fade-in" data-sal-delay="400" data-sal-duration="300">Choisissez votre boutique !</h1>
        <div class="mt-4">
          <div class="wf-speech-bubble">
            <sl-avatar class="wf-avatar wf-avatar--md" image="/images/reparation/yves.webp')}}" label="Yves de Mayday Phone" shape="circle">
            </sl-avatar>
            <div class="wf-speech-bubble--text">Prenez rendez-vous dans une de nos boutiques afin de réserver votre pièce pour votre réparation.</div>
          </div>
        </div>
      </section>
      <section class="container-fluid mt-4 mb-5">
        <div class="d-block d-lg-none">
          <button class="btn cta-primary w-100 py-3 mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="[data-corner-aside-map]">
            <i class="ci-map me-2"></i>Voir les boutiques sur la carte </button>
          <aside class="offcanvas offcanvas-expand w-100" data-corner-aside-map="">
            <div class="offcanvas-body p-0">
              <div class="h-100 rounded-0" data-corner-map="">
                <div style="height: 100%; width: 100%;">
                  <div style="overflow: hidden;"></div>
                </div>
              </div>
            </div>
            <button class="btn btn-dark rounded-0 d-flex flex-row align-items-center justify-content-center offcanvas-footer" type="button" data-bs-dismiss="offcanvas" role="tab">
              <div class="title-section fs-lg text-light">FERMER LA FENÊTRE</div>
            </button>
          </aside>
        </div>


            @livewire('store-controller', ['stores' => $stores])


      </section>
    </main>

    @include('components.footer')
    @include('components.footer-scripts')
  </body>
</html>
