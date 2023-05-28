
<!DOCTYPE html>
<!-- saved from url=(0058)https://wefix.net/reparation/smartphone/samsung/galaxy-s23 -->
<html lang="en">
  @include('reparation.head')
  <body x-init="" cz-shortcut-listen="true">
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC998KW" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
    <main class="wrapper">
        @livewire('quote-model-controller', ['model' => $model])


      <div class="none" id="spin-data" data-product="samsung-galaxy-s23"></div>
      <section class="container mt-3">
        <div class="wf-step sal-animate" aria-label="stepper" role="navigation" data-sal="fade-in" data-sal-delay="200" data-sal-duration="200" data-sal-once="data-sal-once">
          <sl-resize-observer>
            <template shadowrootmode="open">
              <!---->
              <slot></slot>
            </template>
            <a class="wf-step__item" href="https://wefix.net/reparation/smartphone" aria-label="Marque">
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
            <a class="wf-step__item" href="https://wefix.net/reparation/smartphone/samsung" aria-label="Modèle">
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
            <a class="wf-step__item wf-step__item--active" aria-label="Panne">
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
        <h1 class="title-section text-center my-4 sal-animate" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Que voulez-vous réparer sur votre {{$model->name}} ?</h1>
        <div class="mt-4">
          <div class="wf-speech-bubble">
            <sl-avatar class="wf-avatar wf-avatar--md" image="/images/reparation/yves.webp" label="Yves de WeFix" shape="circle">

            </sl-avatar>
            <div class="wf-speech-bubble--text">
              <span>Sélectionnez la panne que vous rencontrez avec votre {{$model->name}} et bénéficiez d'une réparation en 1 heure, près de chez vous. <span class="text-primary" data-pannes-total-ten="">En ce moment profitez de -10% sur votre réparation en prenant rendez-vous en ligne ! <sup>*</sup>
                </span>
              </span>
            </div>
          </div>
        </div>
        <div class="grid mt-4" style="--wf-gap: 16px">
          <div class="g-col-md-5 d-none d-md-block text-center">
            <img class="sticky" src="{{asset('reparation/'. $model->image )}}" alt="GALAXY S23">
          </div>
          @livewire('failure-controller', ['model' => $model])
        </div>
      </section>


      <section class="wf-container--default wf-mt--5">
        <div class="title-section" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Votre réparation <strong>GALAXY S23</strong> en express. </div>
        <div class="title-section" data-sal="slide-up" data-sal-delay="500" data-sal-duration="300">Avec une garantie de <strong>1 an</strong> ! <sup>**</sup>
        </div>
        <p class="mt-3">Exigez le meilleur pour votre GALAXY S23, en nous confiant sa réparation dans une des nombreuses boutiques de notre réseau. Récupérez-le comme neuf après seulement <strong>1 heure</strong>. Tous les composants que nous utilisons pour redonner souffle à votre appareil sont rigoureusement testés avant et après la réparation. Nous offrons <strong>1 an</strong> de garantie pour toutes les réparations. </p>
        <div class="wf-engagements wf-mt--5 wf-mb--3">
          <div class="wf-heading--md">Les <span>engagements</span> de WeFix </div>
          <div class="wf-paragraph--md">Chaque mois, c’est plus de <strong>30000 réparations</strong> qui sont assurées par les techniciens <strong>WeFix</strong> ! 👍 </div>
          <div class="wf-engagements-snap wf-mt--3">
            <div class="wf-engagements-grid">
              <sl-card class="wf-card">
                <template shadowrootmode="open">
                  <!---->
                  <div part="base" class=" card ">
                    <slot name="image" part="image" class="card__image"></slot>
                    <slot name="header" part="header" class="card__header"></slot>
                    <slot part="body" class="card__body"></slot>
                    <slot name="footer" part="footer" class="card__footer"></slot>
                  </div>
                </template>
                <sl-icon library="wefix" name="engagement-express" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg">
                      <lineargradient id="a" gradientTransform="matrix(.70710678 -.70710678 .70710678 .70710678 -99.13 259.34)" gradientUnits="userSpaceOnUse" x1="246.87" x2="282.4" y1="236.01" y2="264.49">
                        <stop offset="0" stop-color="#4d5868"></stop>
                        <stop offset="1" stop-color="#2f3a4d"></stop>
                      </lineargradient>
                      <lineargradient id="b" gradientTransform="matrix(.70710678 .70710678 -.70710678 .70710678 368.51 -290.47)" x1="476.27" x2="518.1" xlink:href="#a" y1="294.87" y2="253.04"></lineargradient>
                      <lineargradient id="c" gradientUnits="userSpaceOnUse" x1="398.11" x2="398.11" y1="243.63" y2="160.11">
                        <stop offset="0" stop-color="#8f959f"></stop>
                        <stop offset=".2" stop-color="#737a87"></stop>
                        <stop offset=".56" stop-color="#454f60"></stop>
                        <stop offset=".84" stop-color="#283448"></stop>
                        <stop offset=".99" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <lineargradient id="d" gradientTransform="matrix(-.91390005 .40593927 -.40593927 -.91390005 894.81 612.25)" x1="363.97" x2="363.97" xlink:href="#a" y1="595.73" y2="212.58"></lineargradient>
                      <lineargradient id="e" gradientUnits="userSpaceOnUse" x1="307.66" x2="490.86" y1="325.46" y2="519.76">
                        <stop offset=".09" stop-color="#ff8f33"></stop>
                        <stop offset="1" stop-color="#ff6900"></stop>
                      </lineargradient>
                      <filter id="f" filterUnits="userSpaceOnUse">
                        <feoffset dx="1.83" dy="1.83"></feoffset>
                        <fegaussianblur result="blur" stdDeviation="10.34"></fegaussianblur>
                        <feflood flood-opacity=".36"></feflood>
                        <fecomposite in2="blur" operator="in"></fecomposite>
                        <fecomposite in="SourceGraphic"></fecomposite>
                      </filter>
                      <lineargradient id="g" gradientUnits="userSpaceOnUse" x1="118.1" x2="177.83" y1="345.54" y2="285.81">
                        <stop offset="0" stop-color="#ff6900"></stop>
                        <stop offset=".37" stop-color="#ff750c"></stop>
                        <stop offset="1" stop-color="#ff942b"></stop>
                      </lineargradient>
                      <lineargradient id="h" x1="80.52" x2="155.21" xlink:href="#g" y1="404.61" y2="329.92"></lineargradient>
                      <lineargradient id="i" x1="102.97" x2="162.69" xlink:href="#g" y1="447.35" y2="387.62"></lineargradient>
                      <lineargradient id="j" x1="129.33" x2="176.76" xlink:href="#g" y1="493.82" y2="446.4"></lineargradient>
                      <lineargradient id="k" gradientUnits="userSpaceOnUse" x1="362.39" x2="433.82" y1="103.52" y2="174.95">
                        <stop offset="0" stop-color="#3b4451"></stop>
                        <stop offset=".83" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <rect fill="url(#a)" height="21.67" rx="10.48" transform="matrix(.70710678 .70710678 -.70710678 .70710678 253.47 -113.28)" width="59.16" x="233.9" y="238.49"></rect>
                      <rect fill="url(#b)" height="21.67" rx="10.48" transform="matrix(-.70710678 .70710678 -.70710678 -.70710678 1078.72 62.8)" width="59.16" x="496.78" y="243.98"></rect>
                      <path d="m372.65 160.11h50.9v83.52h-50.9z" fill="url(#c)"></path>
                      <circle cx="398.11" cy="390.66" fill="url(#d)" r="191.57"></circle>
                      <path d="m385.84 257.6c-66.6 5.43-118.26 59.8-121.33 127.14-3.46 75.88 57.7 139.92 133.66 139.88 70.05-.03 127.51-51.27 133.2-119.63.65-7.75-5.22-14.1-13-14.1h-111.34c-4.91 0-8.93-4.02-8.93-8.93v-113.14c0-6.61-5.67-11.75-12.27-11.21z" fill="url(#e)" filter="url(#f)"></path>
                      <rect fill="url(#g)" height="21.67" rx="10.48" width="110.06" x="92.93" y="304.84"></rect>
                      <rect fill="url(#h)" height="21.67" rx="10.48" width="139.98" x="47.88" y="356.44"></rect>
                      <rect fill="url(#i)" height="21.67" rx="10.48" width="110.06" x="77.8" y="406.65"></rect>
                      <rect fill="url(#j)" height="21.67" rx="10.48" width="85.45" x="110.32" y="459.27"></rect>
                      <rect fill="url(#k)" height="54.34" rx="18.38" width="110.06" x="343.08" y="112.07"></rect>
                    </svg>
                  </template>
                </sl-icon>
                <div class="wf-heading--xs wf-mt--2">Réparation en 1 heure</div>
                <div class="wf-paragraph--md wf-mt--2">98% des pannes sont réparées en <span>1 heure</span> ou moins. </div>
              </sl-card>
              <sl-card class="wf-card">
                <template shadowrootmode="open">
                  <!---->
                  <div part="base" class=" card ">
                    <slot name="image" part="image" class="card__image"></slot>
                    <slot name="header" part="header" class="card__header"></slot>
                    <slot part="body" class="card__body"></slot>
                    <slot name="footer" part="footer" class="card__footer"></slot>
                  </div>
                </template>
                <sl-icon library="wefix" name="engagement-fnac" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 1652.06 681.77" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg">
                      <clippath id="a">
                        <path d="m192.8 240.21h1334.69v257.55h-1334.69z"></path>
                      </clippath>
                      <clippath id="b">
                        <path d="m192.8 240.21h1334.69v257.55h-1334.69z"></path>
                      </clippath>
                      <clippath id="c">
                        <path d="m192.8 240.21h1334.69v257.55h-1334.69z"></path>
                      </clippath>
                      <g clip-path="url(#a)">
                        <g clip-path="url(#b)">
                          <g clip-path="url(#c)">
                            <image height="247" transform="matrix(1.04 0 0 1.04 192.8 240.21)" width="1280" xlink:href="data:image/png;base64,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"></image>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </template>
                </sl-icon>
                <div class="wf-heading--xs wf-mt--2">Fnac &amp; Darty</div>
                <div class="wf-paragraph--md wf-mt--2">marque du groupe <br> depuis <span>2018</span>. </div>
              </sl-card>
              <sl-card class="wf-card">
                <template shadowrootmode="open">
                  <!---->
                  <div part="base" class=" card ">
                    <slot name="image" part="image" class="card__image"></slot>
                    <slot name="header" part="header" class="card__header"></slot>
                    <slot part="body" class="card__body"></slot>
                    <slot name="footer" part="footer" class="card__footer"></slot>
                  </div>
                </template>
                <sl-icon library="wefix" name="engagement-garantie" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg">
                      <lineargradient id="a" gradientUnits="userSpaceOnUse" x1="208.33" x2="328.78" y1="593.33" y2="414.77">
                        <stop offset="0" stop-color="#444e5f"></stop>
                        <stop offset=".6" stop-color="#293549"></stop>
                        <stop offset="1" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <lineargradient id="b" x1="450.77" x2="413.61" xlink:href="#a" y1="612.02" y2="401.28"></lineargradient>
                      <lineargradient id="c" gradientTransform="matrix(.99679286 -.08002495 .08002495 .99679286 -34.43 15.95)" gradientUnits="userSpaceOnUse" x1="277.14" x2="316.18" y1="467.31" y2="409.43">
                        <stop offset="0" stop-color="#ffcdaa"></stop>
                        <stop offset=".11" stop-color="#ffcaa5"></stop>
                        <stop offset=".24" stop-color="#ffc197"></stop>
                        <stop offset=".39" stop-color="#ffb37f"></stop>
                        <stop offset=".53" stop-color="#ffa05e"></stop>
                        <stop offset=".68" stop-color="#ff8835"></stop>
                        <stop offset=".72" stop-color="#ff822b"></stop>
                      </lineargradient>
                      <filter id="d" filterUnits="userSpaceOnUse">
                        <feoffset dx="-3" dy="10"></feoffset>
                        <fegaussianblur result="blur" stdDeviation="9.25"></fegaussianblur>
                        <feflood flood-opacity=".46"></feflood>
                        <fecomposite in2="blur" operator="in"></fecomposite>
                        <fecomposite in="SourceGraphic"></fecomposite>
                      </filter>
                      <lineargradient id="e" gradientTransform="matrix(-.99679286 -.08002495 -.08002495 .99679286 753.75 15.95)" x1="297.57" x2="336.61" xlink:href="#c" y1="467.94" y2="410.06"></lineargradient>
                      <filter id="f" filterUnits="userSpaceOnUse">
                        <feoffset dx="-3" dy="10"></feoffset>
                        <fegaussianblur result="blur-2" stdDeviation="9.25"></fegaussianblur>
                        <feflood flood-opacity=".46"></feflood>
                        <fecomposite in2="blur-2" operator="in"></fecomposite>
                        <fecomposite in="SourceGraphic"></fecomposite>
                      </filter>
                      <lineargradient id="g" gradientTransform="matrix(0 1 -1 0 514.27 60.68)" gradientUnits="userSpaceOnUse" x1="23.1" x2="418.46" y1="164.27" y2="164.27">
                        <stop offset="0" stop-color="#ff822b"></stop>
                        <stop offset="1" stop-color="#ff6900"></stop>
                      </lineargradient>
                      <lineargradient id="h" gradientTransform="matrix(.43082613 .90243495 -.90243495 .43082613 391.23 -39.21)" gradientUnits="userSpaceOnUse" x1="156.05" x2="392.69" y1="176.79" y2="176.79">
                        <stop offset="0" stop-color="#ffe6d4"></stop>
                        <stop offset="1" stop-color="#ffd5b8"></stop>
                      </lineargradient>
                      <filter id="i" filterUnits="userSpaceOnUse">
                        <feoffset dx="0" dy="0"></feoffset>
                        <fegaussianblur result="blur-3" stdDeviation="14"></fegaussianblur>
                        <feflood flood-color="#aa3d00"></feflood>
                        <fecomposite in2="blur-3" operator="in"></fecomposite>
                        <fecomposite in="SourceGraphic"></fecomposite>
                      </filter>
                      <lineargradient id="j" gradientUnits="userSpaceOnUse" x1="270.33" x2="429.49" y1="284.55" y2="284.55">
                        <stop offset="0" stop-color="#fc6600"></stop>
                        <stop offset=".61" stop-color="#fd7618"></stop>
                        <stop offset="1" stop-color="#ff822b"></stop>
                      </lineargradient>
                      <path d="m333.6 446.23-40.35-9.53c-2.8.56-8.73-13.08-11.53-13.08-9.52 0 .93.86-3.55-7.54l-30.15-6.87-17.86 34.1-54.32 115.92c-3.92 8.96 3.36 18.48 12.88 16.8l39.2-7.28c5.04-1.12 10.08 1.12 12.88 6.16l19.6 35.28c4.48 8.4 17.36 7.84 21.28-.56l54.32-115.36c-.56-.56 29.12-54.79 28.56-55.36z" fill="url(#a)"></path>
                      <path d="m469.84 443.31-21.96-48.07-16.25 3.1c-4.48 8.4-4.98 13.97-14.5 13.97-2.8 0-2.7 19.18-5.5 18.62l-73.82 13.63 9.4 15.69c-.56.56 17.91 32.9 17.35 32.9l54.32 115.36c4.48 8.96 16.8 9.52 21.28.56l19.04-35.28c2.8-4.48 7.84-6.72 12.88-6.16l39.2 7.28c9.52 1.68 17.36-7.84 12.88-16.8z" fill="url(#b)"></path>
                      <path d="m243.77 423.81 13.25 3.1 22.84 33 33.58-12.81 25.29 21.56 24.36-41.98-111.74-33.5z" fill="url(#c)" filter="url(#d)"></path>
                      <path d="m455.13 422.8-13.24 3.1-22.84 33-33.59-12.81-25.29 21.56-24.36-41.98 111.75-33.5z" fill="url(#e)" filter="url(#f)"></path>
                      <path d="m346.08 477.47c2.24 2.24 5.6 2.24 7.84 0l27.44-23.52c1.68-1.68 3.92-1.68 6.16-1.12l34.16 11.2c2.8 1.12 6.16-.56 7.28-2.8l16.24-31.92c1.12-1.68 2.8-3.36 5.04-3.36l35.84-2.8c2.8 0 5.6-2.8 5.6-5.6l2.8-36.39c0-2.24 1.68-3.92 3.36-5.04l31.92-16.24c2.8-1.12 3.92-4.48 2.8-7.28l-11.2-34.16c-.56-2.24 0-4.48 1.12-6.16l23.52-27.44c2.24-2.24 2.24-5.6 0-7.84l-23.52-26.88c-1.68-1.68-1.68-3.92-1.12-6.16l11.2-34.16c1.12-2.8-.56-6.16-2.8-7.28l-31.92-16.24c-1.68-1.12-3.36-2.8-3.36-5.04l-2.8-35.84c0-2.8-2.8-5.6-5.6-5.6l-35.84-2.8c-2.24 0-3.92-1.68-5.04-3.36l-16.24-31.92c-1.12-2.8-4.48-3.92-7.28-2.8l-34.16 11.2c-2.24.56-4.48 0-6.16-1.12l-27.44-23.52c-2.24-2.24-5.6-2.24-7.84 0l-27.44 23.52c-1.68 1.68-3.92 1.68-6.16 1.12l-34.16-11.2c-2.8-1.12-6.16.56-7.28 2.8l-16.24 31.92c-1.12 1.68-2.8 3.36-5.04 3.36l-35.84 2.8c-2.8 0-5.6 2.8-5.6 5.6l-2.8 35.84c0 2.24-1.68 3.92-3.36 5.04l-31.92 16.24c-2.8 1.12-3.92 4.48-2.8 7.28l11.2 34.16c.56 2.24 0 4.48-1.12 6.16l-23.52 27.44c-2.24 2.24-2.24 5.6 0 7.84l23.52 27.44c1.68 1.68 1.68 3.92 1.12 6.16l-11.2 34.16c-1.12 2.8.56 6.16 2.8 7.28l31.92 16.24c1.68 1.12 3.36 2.8 3.36 5.04l2.8 35.84c0 2.8 2.8 5.6 5.6 5.6l35.84 2.8c2.24 0 3.92 1.68 5.04 3.36l16.24 31.92c1.12 2.8 4.48 3.92 7.28 2.8l34.16-11.2c2.24-.56 4.48 0 6.16 1.12z" fill="url(#g)"></path>
                      <circle cx="349.91" cy="284.55" fill="url(#h)" filter="url(#i)" r="118.32"></circle>
                      <path d="m339.23 278.37 55.48-55.48c1.29-1.29 3.39-1.29 4.68 0l29.13 29.13c1.29 1.29 1.29 3.39 0 4.68l-89.5 89.5c-1.29 1.29-3.39 1.29-4.68 0l-63.03-63.03c-1.29-1.29-1.29-3.39 0-4.68l29.73-29.73c1.3-1.3 3.42-1.29 4.71.03l28.79 29.54c1.29 1.32 3.4 1.33 4.71.03z" fill="url(#j)"></path>
                    </svg>
                  </template>
                </sl-icon>
                <div class="wf-heading--xs wf-mt--2">Garantie réparation de 1 an</div>
                <div class="wf-paragraph--md wf-mt--2">hors sur les batteries qui sont garanties <span>3 mois</span>. </div>
              </sl-card>
              <sl-card class="wf-card">
                <template shadowrootmode="open">
                  <!---->
                  <div part="base" class=" card ">
                    <slot name="image" part="image" class="card__image"></slot>
                    <slot name="header" part="header" class="card__header"></slot>
                    <slot part="body" class="card__body"></slot>
                    <slot name="footer" part="footer" class="card__footer"></slot>
                  </div>
                </template>
                <sl-icon library="wefix" name="engagement-techniciens" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg">
                      <lineargradient id="a" gradientUnits="userSpaceOnUse" x1="174.81" x2="537.5" y1="422.8" y2="627.83">
                        <stop offset="0" stop-color="#444e5f"></stop>
                        <stop offset=".6" stop-color="#293549"></stop>
                        <stop offset="1" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <lineargradient id="b" gradientUnits="userSpaceOnUse" x1="350.65" x2="350.65" y1="282.5" y2="415.25">
                        <stop offset="0" stop-color="#ff9b55"></stop>
                        <stop offset="1" stop-color="#ffb480"></stop>
                      </lineargradient>
                      <filter id="c" filterUnits="userSpaceOnUse">
                        <feoffset dx="2.94" dy="2.94"></feoffset>
                        <fegaussianblur result="blur" stdDeviation="7.34"></fegaussianblur>
                        <feflood flood-opacity=".17"></feflood>
                        <fecomposite in2="blur" operator="in"></fecomposite>
                        <fecomposite in="SourceGraphic"></fecomposite>
                      </filter>
                      <lineargradient id="d" gradientTransform="matrix(-.70710678 -.70710678 .70710678 -.70710678 411.59 720.48)" gradientUnits="userSpaceOnUse" x1="306.24" x2="492.84" y1="219.14" y2="405.74">
                        <stop offset="0" stop-color="#444e5f"></stop>
                        <stop offset=".11" stop-color="#394456"></stop>
                        <stop offset=".35" stop-color="#2a3649"></stop>
                        <stop offset=".62" stop-color="#202d41"></stop>
                        <stop offset="1" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <lineargradient id="e" gradientTransform="matrix(0 1 -1 0 1048.86 -476.93)" gradientUnits="userSpaceOnUse" x1="688.15" x2="737.61" y1="585.5" y2="585.5">
                        <stop offset="0" stop-color="#ffcdaa"></stop>
                        <stop offset="1" stop-color="#ffb480"></stop>
                      </lineargradient>
                      <lineargradient id="f" gradientTransform="matrix(0 1 -1 0 840.05 -268.12)" x1="479.34" x2="528.8" xlink:href="#e" y1="605.05" y2="605.05"></lineargradient>
                      <lineargradient id="g" gradientTransform="matrix(-.21200711 -.97726812 .97726812 -.21200711 520.23 991.42)" gradientUnits="userSpaceOnUse" x1="658.58" x2="889.88" y1="-5.5" y2="-5.5">
                        <stop offset="0" stop-color="#ffc6a0"></stop>
                        <stop offset=".27" stop-color="#ffc8a4"></stop>
                        <stop offset=".56" stop-color="#ffd0b1"></stop>
                        <stop offset=".85" stop-color="#ffddc6"></stop>
                        <stop offset="1" stop-color="#ffe6d4"></stop>
                      </lineargradient>
                      <lineargradient id="h" gradientUnits="userSpaceOnUse" x1="294.5" x2="317.78" y1="224.8" y2="224.8">
                        <stop offset="0" stop-color="#444e5f"></stop>
                        <stop offset="0" stop-color="#434d5e"></stop>
                        <stop offset=".12" stop-color="#323d50"></stop>
                        <stop offset=".26" stop-color="#263246"></stop>
                        <stop offset=".46" stop-color="#1f2c40"></stop>
                        <stop offset="1" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <lineargradient id="i" x1="382.22" x2="405.5" xlink:href="#h"></lineargradient>
                      <lineargradient id="j" gradientTransform="matrix(.86847764 -.05144497 .06031479 1.01821517 61.69 26.55)" gradientUnits="userSpaceOnUse" x1="198.38" x2="282.57" y1="197.2" y2="88.73">
                        <stop offset="0" stop-color="#444e5f"></stop>
                        <stop offset=".08" stop-color="#3d4859"></stop>
                        <stop offset=".36" stop-color="#2b374a"></stop>
                        <stop offset=".65" stop-color="#212e41"></stop>
                        <stop offset="1" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <lineargradient id="k" gradientTransform="matrix(-.28211856 -.91761055 1.07054564 -.32913832 702.87 886.25)" x1="785.86" x2="849.65" xlink:href="#j" y1="-99.47" y2="-40.65"></lineargradient>
                      <lineargradient id="l" gradientUnits="userSpaceOnUse" x1="334.54" x2="364.76" y1="243.38" y2="273.6">
                        <stop offset="0" stop-color="#ffdac0"></stop>
                        <stop offset=".19" stop-color="#ffd5b7"></stop>
                        <stop offset=".48" stop-color="#ffc8a1"></stop>
                        <stop offset=".82" stop-color="#ffb480"></stop>
                      </lineargradient>
                      <filter id="m" filterUnits="userSpaceOnUse">
                        <feoffset dx="1.09" dy="2.19"></feoffset>
                        <fegaussianblur result="blur-2" stdDeviation="2.19"></fegaussianblur>
                        <feflood flood-color="#c64200" flood-opacity=".24"></feflood>
                        <fecomposite in2="blur-2" operator="in"></fecomposite>
                        <fecomposite in="SourceGraphic"></fecomposite>
                      </filter>
                      <clippath id="n">
                        <path d="m391.2 462.63h98.36v98.37h-98.36z"></path>
                      </clippath>
                      <clippath id="o">
                        <path d="m391.2 462.63h98.36v98.37h-98.36z"></path>
                      </clippath>
                      <path d="m313.74 363.24h72.52c93.25 0 168.96 75.71 168.96 168.96v70.71c0 6.62-5.38 12-12 12h-386.44c-6.62 0-12-5.38-12-12v-70.71c0-93.25 75.71-168.96 168.96-168.96z" fill="url(#a)"></path>
                      <path d="m310.1 282.5h81.1v95.67c0 20.46-16.61 37.08-37.08 37.08h-6.94c-20.46 0-37.08-16.61-37.08-37.08z" fill="url(#b)" filter="url(#c)"></path>
                      <circle cx="350" cy="217.03" fill="url(#d)" r="131.94"></circle>
                      <circle cx="463.36" cy="235.95" fill="url(#e)" r="24.73"></circle>
                      <circle cx="235" cy="235.95" fill="url(#f)" r="24.73"></circle>
                      <circle cx="350.74" cy="235.95" fill="url(#g)" r="115.65"></circle>
                      <circle cx="306.14" cy="224.8" fill="url(#h)" r="11.64"></circle>
                      <circle cx="393.86" cy="224.8" fill="url(#i)" r="11.64"></circle>
                      <path d="m237.42 210.98s85.63-38.23 88.9-94.52c.14-2.44-1.72-3.28-1.72-3.28s-76.71-18.81-87.19 97.79" fill="url(#j)"></path>
                      <path d="m467.19 199.6s-39.4-132.25-142.58-86.41c-.99.44-1.49 1.54-1.17 2.57 4.38 13.98 32.63 112.11 139.93 95.47" fill="url(#k)"></path>
                      <path d="m344.52 233.4 23.34 23.34c6.12 6.12 1.78 16.58-6.87 16.58h-16.47" fill="url(#l)"></path>
                      <path d="m327.48 296.7h46.53c1.63 0 2.96 1.33 2.96 2.96v2.52c0 13.23-10.74 23.98-23.98 23.98h-4.49c-13.23 0-23.98-10.74-23.98-23.98v-2.52c0-1.63 1.33-2.96 2.96-2.96z" fill="#fff" filter="url(#m)"></path>
                      <g clip-path="url(#n)">
                        <g clip-path="url(#o)" fill="#fff">
                          <path d="m391.97 546.95 13.27 13.27c1.02 1.02 2.68 1.02 3.71 0l79.85-79.85c1.02-1.03 1.02-2.69 0-3.7l-13.27-13.28c-1.03-1.02-2.68-1.02-3.71 0l-79.85 79.85c-1.02 1.02-1.02 2.68 0 3.71"></path>
                          <path d="m408.95 463.39c-1.03-1.02-2.68-1.02-3.71 0l-13.27 13.28c-1.02 1.01-1.02 2.68 0 3.7l26.77 26.77 16.98-16.98-26.76-26.78z"></path>
                          <path d="m488.79 543.25-26.79-26.79-16.98 16.99 26.78 26.78c1.02 1.02 2.68 1.02 3.71 0l13.27-13.27c1.02-1.02 1.02-2.69 0-3.71"></path>
                        </g>
                      </g>
                    </svg>
                  </template>
                </sl-icon>
                <div class="wf-heading--xs wf-mt--2">Techniciens certifiés</div>
                <div class="wf-paragraph--md wf-mt--2">formés dans notre <span>propre</span> centre de formation. </div>
              </sl-card>
            </div>
          </div>
        </div>
      </section>

      <section class="container my-3">
        <p class="text-muted fs-sm" id="mentionLegalRemise">
          <sup>**</sup>Offre de <strong>-20%</strong> sur la seconde réparation, soit la réparation <u>la moins chère</u>, valable suite à une première réparation sur le même appareil effectuée et facturée au même moment. <br>
          <strong>Offre non cumulable</strong>. Le temps de réparation est à titre indicatif, certaines réparations peuvent excéder une heure, voir plus de temps.
        </p>
        <p class="text-muted fs-sm mt-2">
          <sup>***</sup>Engagement <strong>12</strong> ou <strong>24 mois</strong>.
        </p>
      </section>
    </main>
    @include('reparation.footer')
  </body>
</html>
