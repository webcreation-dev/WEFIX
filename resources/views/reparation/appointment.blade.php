<!DOCTYPE html>
<!-- saved from url=(0041)https://wefix.net/reparation/devis/client -->
<html lang="en">
    @include('components.head')

  <body x-init="" cz-shortcut-listen="true">
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC998KW" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
    <main class="wrapper">
        @livewire('quote-model-controller', ['model' => $model])
      <section class="container my-3">
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
            <a class="wf-step__item wf-step__item--active" aria-label="Coordonnées">
              <div class="wf-step__item--dot">
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
                <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">
                  4
                </sl-button>
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
              </div>
              <div class="wf-step__item--text" aria-current="page">Coordonnées</div>
            </a>
            <a class="wf-step__item wf-step__item--hover" aria-label="Boutiques">
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
        <h1 class="title-section text-center my-4 sal-animate" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Complétez le formulaire pour prendre rendez-vous </h1>
        <div class="wf-speech-bubble">
          <sl-avatar class="wf-avatar wf-avatar--md" image="/images/reparation/yves.webp" label="Yves de Mayday Phone" shape="circle">
          </sl-avatar>
          <div class="wf-speech-bubble--text">À l’étape suivante, vous pourrez choisir la boutique la plus proche de chez vous, afin de prendre rendez-vous et de <strong>profiter de -10% de remise sur votre réparation <sup>*</sup>
            </strong>. </div>
        </div>
        @livewire('appointment-controller')

        <p class="text-muted fs-sm mt-5">
          <sup>*</sup>Réduction de 10% applicable sur la réparation la plus chère de la prestation réservée via une prise de rendez-vous sur le site <a class="wf-decoration--underline" href="#">wefix.net</a>. Sous réserve que la réparation soit effectuée dans le point de vente et a l’heure choisie lors de la prise de rendez-vous. Mayday Phone se réserve le droit d’annuler le rendez-vous à tout moment. Offre non cumulable avec une autre offre.
        </p>
      </section>
    </main>

    @include('components.footer')
    @include('components.footer-scripts')
  </body>
</html>
