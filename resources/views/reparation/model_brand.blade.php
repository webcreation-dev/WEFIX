<!DOCTYPE html>
<!-- saved from url=(0043)https://wefix.net/reparation/smartphone/htc -->
<html lang="en">
  @include('components.head')
  <body x-init="" style="" cz-shortcut-listen="true">
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC998KW" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
    <main class="wrapper">
        @include('components.header')
      <div class="wf-aside modal" tabindex="-1" id="navigation" role="dialog" x-data="{ reparation: false, protection: false }">
        <div class="wf-aside__wrap modal-dialog modal-dialog-scrollable modal-fullscreen" role="document">
          <div class="wf-aside__screen modal-content" x-show="!reparation &amp;&amp; !protection">
            <div class="wf-aside__screen-nav">
              <div class="wf-aside__screen-nav--title">Menu</div>
              <div class="wf-aside__screen-nav-close" data-bs-dismiss="modal" aria-label="Fermer le menu">
                <i class="ci-close"></i>
              </div>
            </div>
            <div class="wf-aside__screen-content modal-body">
              <a class="wf-aside__screen-content-card" href="#" @click="reparation = !reparation" x-show="!reparation">
                <div class="wf-aside__screen-content-card--title">
                  <span>Réparez</span> tous vos appareils !
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__screen-content-card" href="#" @click="protection = !protection" x-show="!protection">
                <div class="wf-aside__screen-content-card--title">
                  <span>Protégez</span> tous vos appareils !
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Découvrez les smartphones reconditionnés WeFix !">
                <div class="wf-aside__screen-content-card--title">Smartphones reconditionnés </div>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Client forfait(s) Bouygues Telecom ?">
                <div class="wf-aside__screen-content-card--title">Client forfait(s) Bouygues Telecom ? </div>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Abonné Darty Max Intégral ?">
                <div class="wf-aside__screen-content-card--title">Abonné Darty Max Intégral ? </div>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Les accessoires WeFix">
                <div class="wf-aside__screen-content-card--title">Les accessoires WeFix </div>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Transfert de données">
                <div class="wf-aside__screen-content-card--title">Transfert de données </div>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Changement de votre batterie">
                <div class="wf-aside__screen-content-card--title">Changement de votre batterie </div>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Changement écran iPhone">
                <div class="wf-aside__screen-content-card--title">Changement écran iPhone </div>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Prendre rendez-vous">
                <div class="wf-aside__screen-content-card--title">Réparation sur rendez-vous </div>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Nous contacter dés maintenant">
                <div class="wf-aside__screen-content-card--title">Nous contacter dés maintenant </div>
              </a>
              <a class="wf-aside__screen-content-card" href="#" aria-label="Effectuez une réclamation">
                <div class="wf-aside__screen-content-card--title">Effectuez une réclamation </div>
              </a>
            </div>
            <div class="wf-aside__screen-footer modal-footer">
              <a class="btn btn-lg cta-primary" href="#" aria-label="Prenez rendez-vous dés maintenant !">PRENDRE RENDEZ-VOUS </a>
            </div>
          </div>
          <div class="wf-aside__reparation modal-content" x-show="reparation" style="display: none;">
            <div class="wf-aside__reparation-nav">
              <div class="wf-aside__reparation-nav-return" @click="reparation = !reparation" x-show="reparation" style="display: none;">
                <i class="ci-arrow-left"></i>
              </div>
              <div class="wf-aside__reparation-nav-close" data-bs-dismiss="modal" aria-label="Fermer le menu réparation">
                <i class="ci-close"></i>
              </div>
            </div>
            <div class="wf-aside__reparation-content modal-body">
              <div class="wf-aside__reparation-content--title">Choisissez votre appareil ... </div>
              <a class="wf-aside__reparation-content-card" href="#" aria-label="Réparez votre smartphone !">
                <svg width="28px" height="28px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M8.5,3 C7.67157288,3 7,3.67157288 7,4.5 L7,19.5 C7,20.3284271 7.67157288,21 8.5,21 L15.5113578,21 C16.3397849,21 17.0113578,20.3284271 17.0113578,19.5 L17.0113578,4.5 C17.0113578,3.67157288 16.3397849,3 15.5113578,3 L15.4999997,3 C15.2238576,3 15,3.22385763 15,3.5 C15,4.32842712 14.3284271,5 13.5,5 L10.5,5 C9.67157288,5 9,4.32842712 9,3.5 C9,3.22385763 8.77614237,3 8.5,3 Z M9.91464715,3 C9.96992289,3.15638946 10,3.32468229 10,3.5 C10,3.77614237 10.2238576,4 10.5,4 L13.5,4 C13.7761424,4 14,3.77614237 14,3.5 C14,3.32468229 14.0300771,3.15638946 14.0853529,3 L9.91464715,3 Z M6,4.5 C6,3.11928813 7.11928813,2 8.5,2 L15.5113578,2 C16.8920696,2 18.0113578,3.11928813 18.0113578,4.5 L18.0113578,19.5 C18.0113578,20.8807119 16.8920696,22 15.5113578,22 L8.5,22 C7.11928813,22 6,20.8807119 6,19.5 L6,4.5 Z"></path>
                </svg>
                <div class="wf-aside__reparation-content-card-body">
                  <div class="wf-aside__reparation-content-card-body--title">Smartphones</div>
                  <div class="wf-aside__reparation-content-card-body--subtitle">Réparez votre <span>smartphone</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__reparation-content-card" href="#" aria-label="Réparez votre tablette !">
                <svg width="28px" height="28px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" fill-rule="nonzero" d="M5,4.5 L5,19.5 C5,20.3284271 5.67157288,21 6.5,21 L17.5113578,21 C18.3397849,21 19.0113578,20.3284271 19.0113578,19.5 L19.0113578,4.5 C19.0113578,3.67157288 18.3397849,3 17.5113578,3 L6.5,3 C5.67157288,3 5,3.67157288 5,4.5 Z M4,4.5 C4,3.11928813 5.11928813,2 6.5,2 L17.5113578,2 C18.8920696,2 20.0113578,3.11928813 20.0113578,4.5 L20.0113578,19.5 C20.0113578,20.8807119 18.8920696,22 17.5113578,22 L6.5,22 C5.11928813,22 4,20.8807119 4,19.5 L4,4.5 Z"></path>
                  <path fill="currentColor" d="M11,19 C11,18.448 11.448,18 12,18 C12.552,18 13,18.448 13,19 C13,19.552 12.552,20 12,20 C11.448,20 11,19.552 11,19 Z"></path>
                  <path fill="currentColor" fill-rule="nonzero" d="M10.5,5 C10.2238576,5 10,4.77614237 10,4.5 C10,4.22385763 10.2238576,4 10.5,4 L13.5,4 C13.7761424,4 14,4.22385763 14,4.5 C14,4.77614237 13.7761424,5 13.5,5 L10.5,5 Z"></path>
                </svg>
                <div class="wf-aside__reparation-content-card-body">
                  <div class="wf-aside__reparation-content-card-body--title">Tablettes</div>
                  <div class="wf-aside__reparation-content-card-body--subtitle">Réparez votre <span>tablette</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__reparation-content-card" href="#" aria-label="Réparez votre console de jeu Nintendo Switch !">
                <svg width="28px" height="28px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M13.5 8L14.5 8C14.7761424 8 15 8.22385763 15 8.5L15 9.5C15 9.77614237 14.7761424 10 14.5 10L13.5 10C13.2238576 10 13 9.77614237 13 9.5L13 8.5C13 8.22385763 13.2238576 8 13.5 8zM16.5 8L17.5 8C17.7761424 8 18 8.22385763 18 8.5L18 9.5C18 9.77614237 17.7761424 10 17.5 10L16.5 10C16.2238576 10 16 9.77614237 16 9.5L16 8.5C16 8.22385763 16.2238576 8 16.5 8zM14.5 11L15.5 11C15.7761424 11 16 11.2238576 16 11.5L16 12.5C16 12.7761424 15.7761424 13 15.5 13L14.5 13C14.2238576 13 14 12.7761424 14 12.5L14 11.5C14 11.2238576 14.2238576 11 14.5 11zM17.5 11L18.5 11C18.7761424 11 19 11.2238576 19 11.5L19 12.5C19 12.7761424 18.7761424 13 18.5 13L17.5 13C17.2238576 13 17 12.7761424 17 12.5L17 11.5C17 11.2238576 17.2238576 11 17.5 11z"></path>
                  <path fill="currentColor" fill-rule="nonzero" d="M12,7 C10.649064,7 9.8079887,6.82293152 8.98443077,6.45690577 C8.87868964,6.40990972 8.53493964,6.24787268 8.46359743,6.21616503 C8.11708872,6.06216116 7.86533602,6 7.5,6 C5.48842607,6 3,9.36669409 3,14.5 C3,16.9847067 3.40644417,17.9684375 4.08053547,18.0487836 C4.68069217,18.1203173 5.10652885,17.9217038 7.47252293,16.5919638 C8.80629064,15.8423575 9.69745371,15.4265247 10.6398833,15.1840632 C11.1101017,15.0630889 11.5618096,15 12,15 C12.4381904,15 12.8898983,15.0630889 13.3601167,15.1840632 C14.3025463,15.4265247 15.1937094,15.8423575 16.5274771,16.5919638 C18.8934711,17.9217038 19.3193078,18.1203173 19.9194645,18.0487836 C20.5935558,17.9684375 21,16.9847067 21,14.5 C21,9.36669409 18.5115739,6 16.5,6 C16.134664,6 15.8829113,6.06216116 15.5364026,6.21616503 C15.4650604,6.24787268 15.1213104,6.40990972 15.0155692,6.45690577 C14.1920113,6.82293152 13.350936,7 12,7 Z M12,6 C13.211564,6 13.9142387,5.85206848 14.6094308,5.54309423 C14.7016063,5.50212732 15.0453563,5.34009028 15.1302641,5.30235348 C15.5962554,5.09524625 15.9820027,5 16.5,5 C19.1406,5 22,8.86860003 22,14.5 C22,17.4394544 21.4053282,18.8787592 20.0378185,19.0417551 C19.1067466,19.1527312 18.7307433,18.9773603 16.0375326,17.4637175 C14.7749612,16.754125 13.9462042,16.3674119 13.1109577,16.1525258 C12.7184246,16.0515377 12.349421,16 12,16 C11.650579,16 11.2815754,16.0515377 10.8890423,16.1525258 C10.0537958,16.3674119 9.22503877,16.754125 7.96246739,17.4637175 C5.26925666,18.9773603 4.89325336,19.1527312 3.96218146,19.0417551 C2.59467185,18.8787592 2,17.4394544 2,14.5 C2,8.86860003 4.85940002,5 7.5,5 C8.01799731,5 8.40374461,5.09524625 8.8697359,5.30235348 C8.95464369,5.34009028 9.29839369,5.50212732 9.39056923,5.54309423 C10.0857613,5.85206848 10.788436,6 12,6 Z"></path>
                  <path fill="currentColor" fill-rule="nonzero" d="M7,8.5 C7,8.22385763 7.22385763,8 7.5,8 C7.77614237,8 8,8.22385763 8,8.5 L8,12.5 C8,12.7761424 7.77614237,13 7.5,13 C7.22385763,13 7,12.7761424 7,12.5 L7,8.5 Z"></path>
                  <path fill="currentColor" fill-rule="nonzero" d="M5.5,11 C5.22385763,11 5,10.7761424 5,10.5 C5,10.2238576 5.22385763,10 5.5,10 L9.5,10 C9.77614237,10 10,10.2238576 10,10.5 C10,10.7761424 9.77614237,11 9.5,11 L5.5,11 Z"></path>
                </svg>
                <div class="wf-aside__reparation-content-card-body">
                  <div class="wf-aside__reparation-content-card-body--title">Consoles de jeu</div>
                  <div class="wf-aside__reparation-content-card-body--subtitle">Réparez votre <span>console de jeu</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
            </div>
            <div class="wf-aside__screen-footer modal-footer">
              <a class="btn btn-lg cta-accent" href="#" aria-label="Effectuez votre devis dés maintenant !">EFFECTUEZ VOTRE DEVIS </a>
            </div>
          </div>
          <div class="wf-aside__screen modal-content" x-show="protection" style="display: none;">
            <div class="wf-aside__reparation-nav">
              <div class="wf-aside__reparation-nav-return" @click="protection = !protection" x-show="protection" style="display: none;">
                <i class="ci-arrow-left"></i>
              </div>
              <div class="wf-aside__reparation-nav-close" data-bs-dismiss="modal" aria-label="Fermer le menu protection">
                <i class="ci-close"></i>
              </div>
            </div>
            <div class="wf-aside__protection-content modal-body">
              <div class="wf-aside__protection-content--title">Protégez votre appareil ... </div>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection Apple">
                <img src="{{asset('reparation/apple(2).webp')}}" srcset="images/navbar/xforce/aside/apple.webp 1.5x" alt="Apple" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers <strong>Apple</strong>
                  </div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>Apple</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection Samsung">
                <img src="{{asset('reparation/samsung(3).webp')}}" srcset="images/navbar/xforce/aside/samsung.webp 1.5x" alt="Samsung" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers Samsung</div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>Samsung</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection Xiaomi">
                <img src="{{asset('reparation/xiaomi(1).webp')}}" srcset="images/navbar/xforce/aside/xiaomi.webp 1.5x" alt="Xiaomi" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers Xiaomi</div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>Xiaomi</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection Huawei">
                <img src="{{asset('reparation/huawei(3).webp')}}" srcset="images/navbar/xforce/aside/huawei.webp 1.5x" alt="Huawei" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers Huawei</div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>Huawei</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection OPPO">
                <img src="{{asset('reparation/oppo(2).webp')}}" srcset="images/navbar/xforce/aside/oppo.webp 1.5x" alt="OPPO" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers OPPO</div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>OPPO</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection Google">
                <img src="{{asset('reparation/google(1).webp')}}" srcset="images/navbar/xforce/aside/google.webp 1.5x" alt="Google" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers Google</div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>Google</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
            </div>
            <div class="wf-aside__screen-footer modal-footer">
              <a class="btn btn-lg cta-info" href="#" aria-label="Voir toutes nos marques à protéger !">VOIR TOUTES NOS MARQUES</a>
            </div>
          </div>
        </div>
      </div>
      <section class="container mt-3 mb-5" data-models="">
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
            <a class="wf-step__item wf-step__item--active" aria-label="Modèle">
              <div class="wf-step__item--dot">
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
                <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">
                  2
                </sl-button>
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
              </div>
              <div class="wf-step__item--text" aria-current="page">Modèle</div>
            </a>
            <a class="wf-step__item wf-step__item--hover" aria-label="Panne">
              <div class="wf-step__item--dot">
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
                <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">
                  3
                </sl-button>
                <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                  <template shadowrootmode="open">
                    <!---->
                  </template>
                </sl-divider>
              </div>
              <div class="wf-step__item--text" aria-current="page">Panne</div>
            </a>
            <a class="wf-step__item wf-step__item--hover" aria-label="Coordonnées">
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
        <div class="wf-heading--md wf-align--center sal-animate" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Quel est le modèle de votre smartphone HTC ? </div>
        <sl-input class="wf-input wf-width--input wf-mt--2 wf-mb--3" placeholder="Recherchez votre smartphone HTC ..." size="large" type="search" inputmode="text" data-grid-control="text-filter" data-path=".wf-name" data-skip="[^a-zA-Z0-9]+" clearable="true" autocorrect="false" autocomplete="true" form="" data-optional="" data-valid="" data-id="0">

          <sl-icon slot="prefix" library="heroicons" name="magnifying-glass" aria-hidden="true">
            <template shadowrootmode="open">
              <!---->
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
              </svg>
            </template>
          </sl-icon>
          <sl-icon slot="clear-icon" library="heroicons" name="trash" data-grid-control="reset-button" aria-hidden="true" data-id="1">
            <template shadowrootmode="open">
              <!---->
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
              </svg>
            </template>
          </sl-icon>
        </sl-input>
        <div class="wf-grid wf-grid--devices wf-mt--4 wf-mb--3 data-grid-html" data-grid="">
            @foreach ($model_brands as $model)
                <sl-card class="wf-card wf-card--model sal-animate" @click="location.href = &#39;/reparation/smartphone/htc/u12-plus&#39;" data-grid-item="" data-sal="slide-up" data-sal-delay="100" data-sal-duration="200">
                    <a href="{{ route('models.show', $model) }}">
                    <img src="{{asset('reparation/'. $model->image )}}" alt="">
                    <div class="wf-name wf-paragraph--xs wf-weight--bold wf-font--mts wf-align--center">{{$model->name}} </div>
                    </a>
                </sl-card>
            @endforeach
        </div>
        <div class="no-results-label wf-mb--3 dg-label-empty" data-sal="slide-down" data-sal-delay="200" data-sal-duration="200" data-grid-control="label" data-type="no-results" data-id="2">
          <sl-card class="wf-card wf-card-no-results">

            <sl-icon library="heroicons" name="x-circle" aria-hidden="true">
              <template shadowrootmode="open">
                <!---->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </template>
            </sl-icon>
            <div class="wf-paragraph--sm wf-font--mts wf-mt--3">Aucun résultat pour <strong>“ <strong id="hiddenTypedInput"></strong>” </strong>. </div>
            <div class="wf-paragraph--sm wf-font--mts wf-align--center wf-mt--1 wf-display--none">Si vous ne trouvez pas votre modèle, vous pouvez nous demander de l'ajouter à notre liste en cliquant ci-dessous.</div>
            <sl-button class="wf-button wf-button--primary wf-mt--3 wf-display--none" size="medium" data-models-dialog-open="" variant="default" data-optional="" data-valid="">

              </template>Vous ne trouvez pas votre modèle ?
            </sl-button>
          </sl-card>
        </div>
        <sl-dialog class="wf-dialog wf-dialog--alt" label="Vous ne trouvez pas votre modèle ?" data-models-dialog="">
          <template shadowrootmode="open">
            <!---->
            <div part="base" class=" dialog " hidden="">
              <div part="overlay" class="dialog__overlay" tabindex="-1"></div>
              <div part="panel" class="dialog__panel" role="dialog" aria-modal="true" tabindex="0" aria-hidden="true" aria-labelledby="title">
                <!--?lit$9675044564$-->
                <header part="header" class="dialog__header">
                  <h2 part="title" class="dialog__title" id="title">
                    <slot name="label">
                      <!--?lit$9675044564$-->Vous ne trouvez pas votre modèle ?
                    </slot>
                  </h2>
                  <div part="header-actions" class="dialog__header-actions">
                    <slot name="header-actions"></slot>
                    <sl-icon-button part="close-button" exportparts="base:close-button__base" class="dialog__close" name="x-lg" library="system" label="Close">
                      <template shadowrootmode="open">
                        <!---->
                        <button part="base" class=" icon-button " type="button" role="button" aria-disabled="false" aria-label="Close" tabindex="0">
                          <sl-icon class="icon-button__icon" aria-hidden="true" name="x-lg" library="system">
                            <template shadowrootmode="open">
                              <!---->
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" part="svg">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
                              </svg>
                            </template>
                          </sl-icon>
                        </button>
                      </template>
                    </sl-icon-button>
                  </div>
                </header>
                <slot part="body" class="dialog__body"></slot>
                <footer part="footer" class="dialog__footer">
                  <slot name="footer"></slot>
                </footer>
              </div>
            </div>
          </template>
          <div data-models-dialog-content="">
            <div class="wf-paragraph--md">Utilisez le formulaire ci-dessous pour nous demander de rajouter votre modèle à notre liste. </div>
            <form class="wf-form">
              <sl-input class="wf-input wf-mt--2" name="form_name" placeholder="Saisissez votre nom ..." size="large" type="text" inputmode="text" clearable="true" autocorrect="false" autocomplete="true" required="" form="" data-required="" data-invalid="">
                <template shadowrootmode="open">
                  <!---->
                  <div part="form-control" class=" form-control form-control--large ">
                    <label part="form-control-label" class="form-control__label" for="input" aria-hidden="true">
                      <slot name="label">
                        <!--?lit$9675044564$-->
                      </slot>
                    </label>
                    <div part="form-control-input" class="form-control-input">
                      <div part="base" class=" input input--large input--standard input--empty ">
                        <slot name="prefix" part="prefix" class="input__prefix"></slot>
                        <input part="input" id="input" class="input__control" aria-describedby="help-text" type="text" title="" name="form_name" required="" placeholder="Saisissez votre nom ..." autocomplete="true" autocorrect="false" spellcheck="true" inputmode="text">
                        <!--?lit$9675044564$-->
                        <!--?lit$9675044564$-->
                        <slot name="suffix" part="suffix" class="input__suffix"></slot>
                      </div>
                    </div>
                    <slot name="help-text" part="form-control-help-text" id="help-text" class="form-control__help-text" aria-hidden="true">
                      <!--?lit$9675044564$-->
                    </slot>
                  </div>
                </template>
                <sl-icon slot="prefix" library="heroicons" name="user-circle" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                  </template>
                </sl-icon>
              </sl-input>
              <sl-input class="wf-input wf-mt--2" name="form_surname" placeholder="Saisissez votre prénom ..." size="large" type="text" inputmode="text" clearable="true" autocorrect="false" autocomplete="true" required="" form="" data-required="" data-invalid="">
                <template shadowrootmode="open">
                  <!---->
                  <div part="form-control" class=" form-control form-control--large ">
                    <label part="form-control-label" class="form-control__label" for="input" aria-hidden="true">
                      <slot name="label">
                        <!--?lit$9675044564$-->
                      </slot>
                    </label>
                    <div part="form-control-input" class="form-control-input">
                      <div part="base" class=" input input--large input--standard input--empty ">
                        <slot name="prefix" part="prefix" class="input__prefix"></slot>
                        <input part="input" id="input" class="input__control" aria-describedby="help-text" type="text" title="" name="form_surname" required="" placeholder="Saisissez votre prénom ..." autocomplete="true" autocorrect="false" spellcheck="true" inputmode="text">
                        <!--?lit$9675044564$-->
                        <!--?lit$9675044564$-->
                        <slot name="suffix" part="suffix" class="input__suffix"></slot>
                      </div>
                    </div>
                    <slot name="help-text" part="form-control-help-text" id="help-text" class="form-control__help-text" aria-hidden="true">
                      <!--?lit$9675044564$-->
                    </slot>
                  </div>
                </template>
                <sl-icon slot="prefix" library="heroicons" name="user-circle" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                  </template>
                </sl-icon>
              </sl-input>
              <sl-input class="wf-input wf-mt--2" name="form_mail" placeholder="Saisissez votre adresse mail ..." size="large" type="email" inputmode="text" clearable="true" autocorrect="false" autocomplete="true" required="" form="" data-required="" data-invalid="">
                <template shadowrootmode="open">
                  <!---->
                  <div part="form-control" class=" form-control form-control--large ">
                    <label part="form-control-label" class="form-control__label" for="input" aria-hidden="true">
                      <slot name="label">
                        <!--?lit$9675044564$-->
                      </slot>
                    </label>
                    <div part="form-control-input" class="form-control-input">
                      <div part="base" class=" input input--large input--standard input--empty ">
                        <slot name="prefix" part="prefix" class="input__prefix"></slot>
                        <input part="input" id="input" class="input__control" aria-describedby="help-text" type="email" title="" name="form_mail" required="" placeholder="Saisissez votre adresse mail ..." autocomplete="true" autocorrect="false" spellcheck="true" inputmode="text">
                        <!--?lit$9675044564$-->
                        <!--?lit$9675044564$-->
                        <slot name="suffix" part="suffix" class="input__suffix"></slot>
                      </div>
                    </div>
                    <slot name="help-text" part="form-control-help-text" id="help-text" class="form-control__help-text" aria-hidden="true">
                      <!--?lit$9675044564$-->
                    </slot>
                  </div>
                </template>
                <sl-icon slot="prefix" library="heroicons" name="envelope" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                    </svg>
                  </template>
                </sl-icon>
              </sl-input>
              <sl-input class="wf-input wf-mt--2" name="form_brand" placeholder="Saisissez votre marque ..." value="HTC" size="large" type="text" readonly="" form="" data-optional="" data-valid="">
                <template shadowrootmode="open">
                  <!---->
                  <div part="form-control" class=" form-control form-control--large ">
                    <label part="form-control-label" class="form-control__label" for="input" aria-hidden="true">
                      <slot name="label">
                        <!--?lit$9675044564$-->
                      </slot>
                    </label>
                    <div part="form-control-input" class="form-control-input">
                      <div part="base" class=" input input--large input--standard ">
                        <slot name="prefix" part="prefix" class="input__prefix"></slot>
                        <input part="input" id="input" class="input__control" aria-describedby="help-text" type="text" title="" name="form_brand" readonly="" placeholder="Saisissez votre marque ..." spellcheck="true">
                        <!--?lit$9675044564$-->
                        <!--?lit$9675044564$-->
                        <slot name="suffix" part="suffix" class="input__suffix"></slot>
                      </div>
                    </div>
                    <slot name="help-text" part="form-control-help-text" id="help-text" class="form-control__help-text" aria-hidden="true">
                      <!--?lit$9675044564$-->
                    </slot>
                  </div>
                </template>
                <sl-icon slot="prefix" library="heroicons" name="device-phone-mobile" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                    </svg>
                  </template>
                </sl-icon>
              </sl-input>
              <sl-textarea class="wf-textarea wf-mt--2" placeholder="Saisissez le modèle à réparer ..." help-text="Votre demande sera traitée dans les plus brefs délais." size="medium" type="text" inputmode="text" autocorrect="true" autocomplete="false" required="" form="" data-required="" data-invalid="">
                <template shadowrootmode="open">
                  <!---->
                  <div part="form-control" class=" form-control form-control--medium form-control--has-help-text ">
                    <label part="form-control-label" class="form-control__label" for="input" aria-hidden="true">
                      <slot name="label">
                        <!--?lit$9675044564$-->
                      </slot>
                    </label>
                    <div part="form-control-input" class="form-control-input">
                      <div part="base" class=" textarea textarea--medium textarea--standard textarea--empty textarea--resize-vertical ">
                        <textarea part="textarea" id="input" class="textarea__control" aria-describedby="help-text" title="" name="" required="" placeholder="Saisissez le modèle à réparer ..." rows="4" autocorrect="true" spellcheck="true" inputmode="text"></textarea>
                      </div>
                    </div>
                    <slot name="help-text" part="form-control-help-text" id="help-text" class="form-control__help-text" aria-hidden="false">
                      <!--?lit$9675044564$-->Votre demande sera traitée dans les plus brefs délais.
                    </slot>
                  </div>
                </template>
              </sl-textarea>
              <sl-alert class="wf-slalert wf-slalert--max wf-slalert--danger wf-mt--2 wf-display--none" type="error" open="" variant="primary">
                <template shadowrootmode="open">
                  <!---->
                  <div part="base" role="alert" class=" alert alert--open alert--has-icon alert--primary " aria-hidden="false">
                    <slot name="icon" part="icon" class="alert__icon"></slot>
                    <slot part="message" class="alert__message" aria-live="polite"></slot>
                    <!--?lit$9675044564$-->
                  </div>
                </template>
                <sl-icon slot="icon" library="heroicons" name="exclamation-triangle" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"></path>
                    </svg>
                  </template>
                </sl-icon>
                <div class="wf-paragraph--sm wf-weight--semi-bold">Veuillez remplir tous les champs du formulaire. </div>
              </sl-alert>
              <div class="wf-align--right wf-mt--3">
                <sl-button class="wf-button wf-button--darker wf-me--2" type="reset" size="medium" data-models-dialog-close="" variant="default" data-optional="" data-valid="">
                  <template shadowrootmode="open">
                    <!---->
                    <button part="base" class=" button button--default button--medium button--standard button--has-label " type="reset" title="" name="" value="" role="button" aria-disabled="false" tabindex="0">
                      <slot name="prefix" part="prefix" class="button__prefix"></slot>
                      <slot part="label" class="button__label"></slot>
                      <slot name="suffix" part="suffix" class="button__suffix"></slot>
                      <!--?lit$9675044564$-->
                      <!--?lit$9675044564$-->
                    </button>
                  </template>Retour
                </sl-button>
                <sl-button class="wf-button wf-button--primary" type="submit" size="medium" variant="default" data-optional="" data-valid="">
                  <template shadowrootmode="open">
                    <!---->
                    <button part="base" class=" button button--default button--medium button--standard button--has-label " type="submit" title="" name="" value="" role="button" aria-disabled="false" tabindex="0">
                      <slot name="prefix" part="prefix" class="button__prefix"></slot>
                      <slot part="label" class="button__label"></slot>
                      <slot name="suffix" part="suffix" class="button__suffix"></slot>
                      <!--?lit$9675044564$-->
                      <!--?lit$9675044564$-->
                    </button>
                  </template>Envoyer
                </sl-button>
              </div>
            </form>
          </div>
          <div class="wf-align--center wf-display--none" data-sal="fade-in" data-models-dialog-confirm="">
            <dotlottie-player class="wf-lottie--submit" src="/assets/lottie/confirmation.lottie" autoplay="" loop="" background="transparent">
              <template shadowrootmode="open">
                <!---->
                <div id="animation-container" lang="en" role="img" class="main">
                  <div id="animation" class="animation" style="background:transparent;">
                    <!--?lit$574111723$-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 400" width="500" height="400" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                      <defs>
                        <clippath id="__lottie_element_2">
                          <rect width="500" height="400" x="0" y="0"></rect>
                        </clippath>
                      </defs>
                      <g clip-path="url(#__lottie_element_2)">
                        <g transform="matrix(0.9999962449073792,0,0,0.9999962449073792,158.17434692382812,200.61900329589844)" opacity="0.999991355557298" style="display: block;">
                          <path fill="rgb(72,179,75)" fill-opacity="1" d=" M91.83,-101.73 C147.63,-101.73 192.93,-56.42 192.93,-0.62 C192.93,55.18 147.63,100.49 91.83,100.49 C36.02,100.49 -9.28,55.18 -9.28,-0.62 C-9.28,-56.42 36.02,-101.73 91.83,-101.73z M91.83,-101.73 C147.63,-101.73 192.93,-56.42 192.93,-0.62 C192.93,55.18 147.63,100.49 91.83,100.49 C36.02,100.49 -9.28,55.18 -9.28,-0.62 C-9.28,-56.42 36.02,-101.73 91.83,-101.73z"></path>
                          <g opacity="1" transform="matrix(0.9334800243377686,0,0,0.9334800243377686,91.82599639892578,-0.6190000176429749)">
                            <path fill="rgb(72,179,75)" fill-opacity="1" d=" M0,-108.3125 C59.77766799926758,-108.3125 108.3125,-59.77766799926758 108.3125,0 C108.3125,59.77766799926758 59.77766799926758,108.3125 0,108.3125 C-59.77766799926758,108.3125 -108.3125,59.77766799926758 -108.3125,0 C-108.3125,-59.77766799926758 -59.77766799926758,-108.3125 0,-108.3125z"></path>
                          </g>
                          <g opacity="1" transform="matrix(0.9334800243377686,0,0,0.9334800243377686,91.82599639892578,-0.6190000176429749)">
                            <path fill="rgb(72,179,75)" fill-opacity="1" d=" M0,-108.3125 C59.77766799926758,-108.3125 108.3125,-59.77766799926758 108.3125,0 C108.3125,59.77766799926758 59.77766799926758,108.3125 0,108.3125 C-59.77766799926758,108.3125 -108.3125,59.77766799926758 -108.3125,0 C-108.3125,-59.77766799926758 -59.77766799926758,-108.3125 0,-108.3125z"></path>
                          </g>
                        </g>
                        <g transform="matrix(0.7930000424385071,0,0,0.7930000424385071,177.18197631835938,200.49085998535156)" opacity="1" style="display: block;">
                          <path fill="rgb(255,255,255)" fill-opacity="1" d=" M91.83,-101.73 C147.63,-101.73 192.93,-56.42 192.93,-0.62 C192.93,55.18 147.63,100.49 91.83,100.49 C36.02,100.49 -9.28,55.18 -9.28,-0.62 C-9.28,-56.42 36.02,-101.73 91.83,-101.73z"></path>
                          <g opacity="1" transform="matrix(0.9334800243377686,0,0,0.9334800243377686,91.82599639892578,-0.6190000176429749)">
                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-108.3125 C59.77766799926758,-108.3125 108.3125,-59.77766799926758 108.3125,0 C108.3125,59.77766799926758 59.77766799926758,108.3125 0,108.3125 C-59.77766799926758,108.3125 -108.3125,59.77766799926758 -108.3125,0 C-108.3125,-59.77766799926758 -59.77766799926758,-108.3125 0,-108.3125z"></path>
                          </g>
                        </g>
                        <g transform="matrix(1,0,0,1,-146,330)" opacity="1" style="display: block;">
                          <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="80" stroke="rgb(72,180,75)" stroke-opacity="1" stroke-width="16" d=" M359.5,-129.5 C359.5,-129.5 383.5,-105.5 383.5,-105.5 C383.5,-105.5 432.5,-154.5 432.5,-154.5"></path>
                          </g>
                        </g>
                        <g transform="matrix(0.1447400003671646,0,0,0.1447400003671646,78,82)" opacity="1" style="display: block;">
                          <g opacity="1" transform="matrix(0.8374136090278625,0.5465697646141052,-0.5465697646141052,0.8374136090278625,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(72,179,75)" stroke-opacity="1" stroke-width="70" d=" M-158.51100158691406,-214.125 C-101.44599914550781,-201.1540069580078 -87.85900115966797,-159.95799255371094 -2,-158 C62.84400177001953,-156.52099609375 115.15599822998047,-215.41600036621094 190,-220 C197.84100341796875,-220.47999572753906 205.33799743652344,-220.50999450683594 212.52999877929688,-220.15499877929688"></path>
                          </g>
                        </g>
                        <g transform="matrix(0.1447400003671646,0,0,0.1447400003671646,426,322)" opacity="1" style="display: block;">
                          <g opacity="1" transform="matrix(-0.8860175013542175,-0.46365174651145935,0.46365174651145935,-0.8860175013542175,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(87,185,255)" stroke-opacity="1" stroke-width="70" d="M0 0"></path>
                          </g>
                        </g>
                        <g transform="matrix(1.425195336341858,0,0,1.425195336341858,297.57415771484375,172.52734375)" opacity="0.42776452313863267" style="display: block;">
                          <g opacity="1" transform="matrix(0.06364999711513519,0,0,0.06364999711513519,-130.83999633789062,119.60900115966797)">
                            <path fill="rgb(22,116,219)" fill-opacity="1" d=" M0,-57.297000885009766 C31.622215270996094,-57.297000885009766 57.297000885009766,-31.622215270996094 57.297000885009766,0 C57.297000885009766,31.622215270996094 31.622215270996094,57.297000885009766 0,57.297000885009766 C-31.622215270996094,57.297000885009766 -57.297000885009766,31.622215270996094 -57.297000885009766,0 C-57.297000885009766,-31.622215270996094 -31.622215270996094,-57.297000885009766 0,-57.297000885009766z"></path>
                          </g>
                        </g>
                        <g transform="matrix(2.3624520301818848,0,0,2.3624520301818848,733.480712890625,-88.26004028320312)" opacity="0.8750669867557817" style="display: block;">
                          <g opacity="1" transform="matrix(0.06364999711513519,0,0,0.06364999711513519,-130.83999633789062,119.60900115966797)">
                            <path fill="rgb(229,78,64)" fill-opacity="1" d=" M0,-57.297000885009766 C31.622215270996094,-57.297000885009766 57.297000885009766,-31.622215270996094 57.297000885009766,0 C57.297000885009766,31.622215270996094 31.622215270996094,57.297000885009766 0,57.297000885009766 C-31.622215270996094,57.297000885009766 -57.297000885009766,31.622215270996094 -57.297000885009766,0 C-57.297000885009766,-31.622215270996094 -31.622215270996094,-57.297000885009766 0,-57.297000885009766z"></path>
                          </g>
                        </g>
                        <g transform="matrix(2.016301393508911,0,0,2.016301393508911,502.59320068359375,-179.1394500732422)" opacity="0.7343164065265633" style="display: block;">
                          <g opacity="1" transform="matrix(0.06364999711513519,0,0,0.06364999711513519,-130.83999633789062,119.60900115966797)">
                            <path fill="rgb(239,131,110)" fill-opacity="1" d=" M0,-57.297000885009766 C31.622215270996094,-57.297000885009766 57.297000885009766,-31.622215270996094 57.297000885009766,0 C57.297000885009766,31.622215270996094 31.622215270996094,57.297000885009766 0,57.297000885009766 C-31.622215270996094,57.297000885009766 -57.297000885009766,31.622215270996094 -57.297000885009766,0 C-57.297000885009766,-31.622215270996094 -31.622215270996094,-57.297000885009766 0,-57.297000885009766z"></path>
                          </g>
                        </g>
                        <g transform="matrix(1.897074580192566,0,0,1.897074580192566,515.7221069335938,120.65216064453125)" opacity="0.7322098683957131" style="display: block;">
                          <g opacity="1" transform="matrix(0.06364999711513519,0,0,0.06364999711513519,-130.83999633789062,119.60900115966797)">
                            <path fill="rgb(72,180,75)" fill-opacity="1" d=" M0,-57.297000885009766 C31.622215270996094,-57.297000885009766 57.297000885009766,-31.622215270996094 57.297000885009766,0 C57.297000885009766,31.622215270996094 31.622215270996094,57.297000885009766 0,57.297000885009766 C-31.622215270996094,57.297000885009766 -57.297000885009766,31.622215270996094 -57.297000885009766,0 C-57.297000885009766,-31.622215270996094 -31.622215270996094,-57.297000885009766 0,-57.297000885009766z"></path>
                          </g>
                        </g>
                        <g transform="matrix(-0.11818746477365494,0.15079273283481598,-0.15079273283481598,-0.11818746477365494,18.88701629638672,177.99256896972656)" opacity="0.3018081324396215" style="display: block;">
                          <g opacity="1" transform="matrix(1,0,0,0.9896299839019775,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(22,116,219)" stroke-opacity="1" stroke-width="31" d="M0 0"></path>
                          </g>
                          <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(22,116,219)" stroke-opacity="1" stroke-width="31" d="M0 0"></path>
                          </g>
                          <g opacity="1" transform="matrix(1.0169999599456787,0,0,1.0173399448394775,76.15599822998047,101.53900146484375)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(22,116,219)" stroke-opacity="1" stroke-width="31" d=" M-277,-277.5 C-277,-277.5 -331.5,-187.5 -331.5,-187.5 C-331.5,-187.5 -219.5,-187.5 -219.5,-187.5 C-219.5,-187.5 -277,-277.5 -277,-277.5z"></path>
                          </g>
                        </g>
                        <g transform="matrix(0.20999999344348907,0,0,0.20999999344348907,385,101)" opacity="1" style="display: block;">
                          <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <g opacity="1" transform="matrix(0.5,-0.8660253882408142,0.8660253882408142,0.5,-55.42562484741211,32)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(246,190,77)" stroke-opacity="1" stroke-width="24" d=" M-2,-32.51300048828125 C-2,-43.292999267578125 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(-0.5,-0.8660253882408142,0.8660253882408142,-0.5,-55.42562484741211,96)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(246,190,77)" stroke-opacity="1" stroke-width="24" d=" M-2,-32.51300048828125 C-2,-43.292999267578125 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(-1,0,0,-1,0,128)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(246,190,77)" stroke-opacity="1" stroke-width="24" d=" M-2,-32.51300048828125 C-2,-43.292999267578125 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(-0.5,0.8660253882408142,-0.8660253882408142,-0.5,55.42562484741211,96)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(246,190,77)" stroke-opacity="1" stroke-width="24" d=" M-2,-32.51300048828125 C-2,-43.292999267578125 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(0.5,0.8660253882408142,-0.8660253882408142,0.5,55.42562484741211,32)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(246,190,77)" stroke-opacity="1" stroke-width="24" d=" M-2,-32.51300048828125 C-2,-43.292999267578125 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(246,190,77)" stroke-opacity="1" stroke-width="24" d=" M-2,-32.51300048828125 C-2,-43.292999267578125 -2,-52 -2,-52"></path>
                            </g>
                          </g>
                        </g>
                        <g transform="matrix(0.20999999344348907,0,0,0.20999999344348907,91,249)" opacity="1" style="display: block;">
                          <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                            <g opacity="1" transform="matrix(0.5,-0.8660253882408142,0.8660253882408142,0.5,-55.42562484741211,32)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(72,180,75)" stroke-opacity="1" stroke-width="24" d=" M-2,-51.53300094604492 C-2,-51.8390007019043 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(-0.5,-0.8660253882408142,0.8660253882408142,-0.5,-55.42562484741211,96)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(72,180,75)" stroke-opacity="1" stroke-width="24" d=" M-2,-51.53300094604492 C-2,-51.8390007019043 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(-1,0,0,-1,0,128)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(72,180,75)" stroke-opacity="1" stroke-width="24" d=" M-2,-51.53300094604492 C-2,-51.8390007019043 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(-0.5,0.8660253882408142,-0.8660253882408142,-0.5,55.42562484741211,96)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(72,180,75)" stroke-opacity="1" stroke-width="24" d=" M-2,-51.53300094604492 C-2,-51.8390007019043 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(0.5,0.8660253882408142,-0.8660253882408142,0.5,55.42562484741211,32)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(72,180,75)" stroke-opacity="1" stroke-width="24" d=" M-2,-51.53300094604492 C-2,-51.8390007019043 -2,-52 -2,-52"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(72,180,75)" stroke-opacity="1" stroke-width="24" d=" M-2,-51.53300094604492 C-2,-51.8390007019043 -2,-52 -2,-52"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <!--?lit$574111723$-->
                </div>
              </template>
            </dotlottie-player>
            <div class="wf-heading--xs">Votre demande a bien été prise en compte !</div>
            <div class="wf-paragraph--sm wf-mt--1">Nous vous contacterons dès que votre modèle sera disponible.</div>
            <sl-button class="wf-button wf-button--primary wf-my--3" type="reset" size="medium" data-models-dialog-close="" variant="default" data-optional="" data-valid="">
              <template shadowrootmode="open">
                <!---->
                <button part="base" class=" button button--default button--medium button--standard button--has-label " type="reset" title="" name="" value="" role="button" aria-disabled="false" tabindex="0">
                  <slot name="prefix" part="prefix" class="button__prefix"></slot>
                  <slot part="label" class="button__label"></slot>
                  <slot name="suffix" part="suffix" class="button__suffix"></slot>
                  <!--?lit$9675044564$-->
                  <!--?lit$9675044564$-->
                </button>
              </template>D'accord
            </sl-button>
          </div>
          <div class="wf-align--center wf-display--none" data-sal="fade-in" data-models-dialog-error="">
            <dotlottie-player class="wf-lottie--submit" src="/assets/lottie/error.lottie" autoplay="" loop="" background="transparent">
              <template shadowrootmode="open">
                <!---->
                <div id="animation-container" lang="en" role="img" class="main">
                  <div id="animation" class="animation" style="background:transparent;">
                    <!--?lit$574111723$-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500" width="500" height="500" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                      <defs>
                        <clippath id="__lottie_element_40">
                          <rect width="500" height="500" x="0" y="0"></rect>
                        </clippath>
                      </defs>
                      <g clip-path="url(#__lottie_element_40)">
                        <g transform="matrix(1,0,0,1,127.57998657226562,100.53999328613281)" opacity="1" style="display: block;">
                          <g opacity="1" transform="matrix(1,0,0,1,130.82000732421875,130.82000732421875)">
                            <path fill="rgb(255,69,58)" fill-opacity="1" d=" M0,-130.57000732421875 C72.11100006103516,-130.57000732421875 130.57000732421875,-72.11199951171875 130.57000732421875,0 C130.57000732421875,72.11100006103516 72.11100006103516,130.57000732421875 0,130.57000732421875 C-72.11199951171875,130.57000732421875 -130.57000732421875,72.11100006103516 -130.57000732421875,0 C-130.57000732421875,-72.11199951171875 -72.11199951171875,-130.57000732421875 0,-130.57000732421875z"></path>
                          </g>
                        </g>
                        <g transform="matrix(1,0,0,1,112.39999389648438,85.36000061035156)" opacity="1" style="display: block;">
                          <g opacity="8.547221412413819e-8" transform="matrix(1.2000000476837158,0,0,1.2000000476837158,146,146)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(255,69,58)" stroke-opacity="1" stroke-width="3" d=" M0,-141 C77.87200164794922,-141 141,-77.87200164794922 141,0 C141,77.87200164794922 77.87200164794922,141 0,141 C-77.87200164794922,141 -141,77.87200164794922 -141,0 C-141,-77.87200164794922 -77.87200164794922,-141 0,-141z"></path>
                          </g>
                        </g>
                        <g transform="matrix(1,0,0,1,112.39999389648438,85.36000061035156)" opacity="1" style="display: block;">
                          <g opacity="0.178809303509137" transform="matrix(1.1457771062850952,0,0,1.1457771062850952,146,146)">
                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(255,69,58)" stroke-opacity="1" stroke-width="3" d=" M0,-141 C77.87200164794922,-141 141,-77.87200164794922 141,0 C141,77.87200164794922 77.87200164794922,141 0,141 C-77.87200164794922,141 -141,77.87200164794922 -141,0 C-141,-77.87200164794922 -77.87200164794922,-141 0,-141z"></path>
                          </g>
                        </g>
                        <g transform="matrix(0.9000002145767212,0,0,0.9000002145767212,243.4482879638672,156.03717041015625)" opacity="1" style="display: block;">
                          <g opacity="1" transform="matrix(1,0,0,1,16.613000869750977,60.249000549316406)">
                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,59.999000549316406 C0,59.999000549316406 0,59.999000549316406 0,59.999000549316406 C-8.133000373840332,59.999000549316406 -14.72700023651123,53.404998779296875 -14.72700023651123,45.270999908447266 C-14.72700023651123,45.270999908447266 -14.72700023651123,-45.270999908447266 -14.72700023651123,-45.270999908447266 C-14.72700023651123,-53.404998779296875 -8.133000373840332,-59.999000549316406 0,-59.999000549316406 C8.133999824523926,-59.999000549316406 14.72700023651123,-53.404998779296875 14.72700023651123,-45.270999908447266 C14.72700023651123,-45.270999908447266 14.72700023651123,45.270999908447266 14.72700023651123,45.270999908447266 C14.72700023651123,53.404998779296875 8.133999824523926,59.999000549316406 0,59.999000549316406z"></path>
                          </g>
                          <g opacity="1" transform="matrix(1,0,0,1,16.613000869750977,150.77099609375)">
                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,16.363000869750977 C0,16.363000869750977 0,16.363000869750977 0,16.363000869750977 C-9.036999702453613,16.363000869750977 -16.363000869750977,9.038000106811523 -16.363000869750977,0 C-16.363000869750977,-9.036999702453613 -9.036999702453613,-16.363000869750977 0,-16.363000869750977 C9.036999702453613,-16.363000869750977 16.363000869750977,-9.036999702453613 16.363000869750977,0 C16.363000869750977,9.038000106811523 9.036999702453613,16.363000869750977 0,16.363000869750977z"></path>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <!--?lit$574111723$-->
                </div>
              </template>
            </dotlottie-player>
            <div class="wf-heading--xs">Une erreur est survenue !</div>
            <div class="wf-paragraph--sm wf-mt--1">Veuillez réessayer ultérieurement.</div>
            <sl-button class="wf-button wf-button--primary wf-my--3" type="reset" size="medium" data-models-dialog-close="" variant="default" data-optional="" data-valid="">
              <template shadowrootmode="open">
                <!---->
                <button part="base" class=" button button--default button--medium button--standard button--has-label " type="reset" title="" name="" value="" role="button" aria-disabled="false" tabindex="0">
                  <slot name="prefix" part="prefix" class="button__prefix"></slot>
                  <slot part="label" class="button__label"></slot>
                  <slot name="suffix" part="suffix" class="button__suffix"></slot>
                  <!--?lit$9675044564$-->
                  <!--?lit$9675044564$-->
                </button>
              </template>D'accord
            </sl-button>
          </div>
        </sl-dialog>
      </section>
    </main>
    @include('components.footer')
    @include('components.footer-scripts')
  </body>
</html>
