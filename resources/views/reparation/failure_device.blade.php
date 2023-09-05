
<!DOCTYPE html>
<!-- saved from url=(0058)https://Mayday Phone.net/reparation/smartphone/samsung/galaxy-s23 -->
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
            @isset($quoteData['family'])
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
              <div class="wf-step__item--text" aria-current="page">Famille</div>
            </a>
            @endisset
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
            <sl-avatar class="wf-avatar wf-avatar--md" image="{{asset('images/favicon.png')}}" label="Yves de Mayday Phone" shape="circle">

            </sl-avatar>
            <div class="wf-speech-bubble--text">
              <span>Sélectionnez la panne que vous rencontrez avec votre {{$model->name}} et bénéficiez d'une réparation en 1 heure, près de chez vous. <span class="text-primary" data-pannes-total-ten="">
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
        <div class="wf-engagements wf-mt--5 wf-mb--3">
          <div class="wf-heading--md">Les <span>engagements</span> de Mayday Phone </div>
          <div class="wf-paragraph--md">Chaque mois, c’est plus de <strong>30000 réparations</strong> qui sont assurées par les techniciens <strong>Mayday Phone</strong> ! 👍 </div>
          <div class="wf-engagements-snap wf-mt--3">
            <div class="wf-engagements-grid">
                <sl-card class="wf-card">

                    <sl-icon library="Mayday Phone" name="assurance-reparation" style="font-size: 8rem" aria-hidden="true">
                      <template shadowrootmode="open">
                        <!---->
                        <svg fill="none" height="297" viewBox="0 0 285 297" width="285" xmlns="http://www.w3.org/2000/svg')}}" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg')}}">
                          <pattern id="a" height="1" patternContentUnits="objectBoundingBox" width="1">
                            <image height="8" transform="scale(.125)" width="8" xlink:href="#"></image>
                          </pattern>
                          <filter id="b" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="104.634" width="106.746" x="64.5262" y="99.6494">
                            <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                            <fecolormatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></fecolormatrix>
                            <feoffset dx="1.68" dy="1.68"></feoffset>
                            <fegaussianblur stdDeviation="9.51"></fegaussianblur>
                            <fecolormatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.36 0"></fecolormatrix>
                            <feblend in2="BackgroundImageFix" mode="normal" result="effect1_dropShadow_2909_653"></feblend>
                            <feblend in="SourceGraphic" in2="effect1_dropShadow_2909_653" mode="normal" result="shape"></feblend>
                          </filter>
                          <lineargradient id="c">
                            <stop offset="0" stop-color="#cecece"></stop>
                            <stop offset=".02" stop-color="#383836"></stop>
                            <stop offset=".09" stop-color="#7e7e7d"></stop>
                            <stop offset=".15" stop-color="#b7b7b7"></stop>
                            <stop offset=".18" stop-color="#cecece"></stop>
                            <stop offset=".82" stop-color="#cecece"></stop>
                            <stop offset=".84" stop-color="#c6c6c6"></stop>
                            <stop offset=".87" stop-color="#b1b1b1"></stop>
                            <stop offset=".91" stop-color="#8f8f8e"></stop>
                            <stop offset=".95" stop-color="#60605e"></stop>
                            <stop offset=".98" stop-color="#363633"></stop>
                            <stop offset="1" stop-color="#cecece"></stop>
                          </lineargradient>
                          <lineargradient id="d" gradientUnits="userSpaceOnUse" x1="113.441" x2="113.441" xlink:href="#" y1="87.3714" y2="81.7552"></lineargradient>
                          <lineargradient id="e" gradientUnits="userSpaceOnUse" x1="113.409" x2="113.409" xlink:href="#" y1="105.122" y2="93.6647"></lineargradient>
                          <lineargradient id="f" gradientUnits="userSpaceOnUse" x1="113.409" x2="113.409" xlink:href="#" y1="120.694" y2="109.237"></lineargradient>
                          <lineargradient id="g" gradientUnits="userSpaceOnUse" x1="201.014" x2="201.014" y1="64.0896" y2="85.5726">
                            <stop offset="0" stop-color="#cecece"></stop>
                            <stop offset=".02" stop-color="#383836"></stop>
                            <stop offset=".05" stop-color="#7e7e7d"></stop>
                            <stop offset=".09" stop-color="#b7b7b7"></stop>
                            <stop offset=".1" stop-color="#cecece"></stop>
                            <stop offset=".88" stop-color="#cecece"></stop>
                            <stop offset=".89" stop-color="#c6c6c6"></stop>
                            <stop offset=".91" stop-color="#b1b1b1"></stop>
                            <stop offset=".93" stop-color="#8f8f8e"></stop>
                            <stop offset=".96" stop-color="#60605e"></stop>
                            <stop offset=".98" stop-color="#363633"></stop>
                            <stop offset="1" stop-color="#cecece"></stop>
                          </lineargradient>
                          <lineargradient id="h" gradientUnits="userSpaceOnUse" x1="114.771" x2="199.277" y1="138.202" y2="138.202">
                            <stop offset=".03" stop-color="#041a26"></stop>
                            <stop offset="1" stop-color="#0f2c3f"></stop>
                          </lineargradient>
                          <lineargradient id="i" gradientUnits="userSpaceOnUse" x1="186.357" x2="166.49" y1="62.3653" y2="96.0103">
                            <stop offset="0" stop-color="#fff" stop-opacity=".6"></stop>
                            <stop offset=".16" stop-color="#fff" stop-opacity=".67"></stop>
                            <stop offset=".73" stop-color="#fff" stop-opacity=".91"></stop>
                            <stop offset="1" stop-color="#fff"></stop>
                          </lineargradient>
                          <lineargradient id="j">
                            <stop offset="0" stop-color="#fff" stop-opacity="0"></stop>
                            <stop offset=".19" stop-color="#fff" stop-opacity=".07"></stop>
                            <stop offset=".56" stop-color="#fff" stop-opacity=".25"></stop>
                            <stop offset="1" stop-color="#fff" stop-opacity=".5"></stop>
                          </lineargradient>
                          <lineargradient id="k" gradientUnits="userSpaceOnUse" x1="202.052" x2="114.737" xlink:href="#" y1="28.0951" y2="179.181"></lineargradient>
                          <lineargradient id="l" gradientUnits="userSpaceOnUse" x1="201.055" x2="125.162" xlink:href="#" y1="89.6221" y2="220.947"></lineargradient>
                          <lineargradient id="m">
                            <stop offset=".16" stop-color="#f95900"></stop>
                            <stop offset=".48" stop-color="#fb6000"></stop>
                            <stop offset="1" stop-color="#ff6801"></stop>
                          </lineargradient>
                          <lineargradient id="n" gradientUnits="userSpaceOnUse" x1="142.481" x2="134.943" xlink:href="#" y1="97.3714" y2="110.523"></lineargradient>
                          <lineargradient id="o" gradientUnits="userSpaceOnUse" x1="65.9235" x2="79.4532" xlink:href="#" y1="118.962" y2="125.782"></lineargradient>
                          <lineargradient id="p" gradientUnits="userSpaceOnUse" x1="102.115" x2="105.115" y1="93.8777" y2="113.501">
                            <stop offset=".02" stop-color="#f95900"></stop>
                            <stop offset=".3" stop-color="#fb6909"></stop>
                            <stop offset=".7" stop-color="#fe7a13"></stop>
                            <stop offset="1" stop-color="#ff8017"></stop>
                          </lineargradient>
                          <lineargradient id="q" gradientUnits="userSpaceOnUse" x1="155.067" x2="73.6915" y1="175.656" y2="120.743">
                            <stop offset="0" stop-color="#ffa466"></stop>
                            <stop offset=".19" stop-color="#ffaf79"></stop>
                            <stop offset=".5" stop-color="#ffbf93"></stop>
                            <stop offset=".78" stop-color="#ffc9a4"></stop>
                            <stop offset="1" stop-color="#ffcdaa"></stop>
                          </lineargradient>
                          <lineargradient id="r">
                            <stop offset=".02" stop-color="#f95900"></stop>
                            <stop offset=".32" stop-color="#fb6a0a"></stop>
                            <stop offset=".7" stop-color="#fe7a13"></stop>
                            <stop offset="1" stop-color="#ff8017"></stop>
                          </lineargradient>
                          <lineargradient id="s" gradientUnits="userSpaceOnUse" x1="132.326" x2="89.1246" xlink:href="#" y1="172.381" y2="119.491"></lineargradient>
                          <lineargradient id="t" gradientUnits="userSpaceOnUse" x1="98.5272" x2="103.618" xlink:href="#" y1="83.1872" y2="111.183"></lineargradient>
                          <lineargradient id="u">
                            <stop offset="0" stop-color="#1d57c4"></stop>
                            <stop offset=".37" stop-color="#ff750c"></stop>
                            <stop offset="1" stop-color="#ff942b"></stop>
                          </lineargradient>
                          <lineargradient id="v" gradientUnits="userSpaceOnUse" x1="51.5617" x2="53.4991" xlink:href="#" y1="188.423" y2="169.315"></lineargradient>
                          <lineargradient id="w" gradientUnits="userSpaceOnUse" x1="54.852" x2="57.2789" xlink:href="#" y1="204.431" y2="180.519"></lineargradient>
                          <lineargradient id="x" gradientUnits="userSpaceOnUse" x1="66.4574" x2="68.3987" xlink:href="#" y1="209.357" y2="190.25"></lineargradient>
                          <lineargradient id="y" gradientUnits="userSpaceOnUse" x1="78.4204" x2="79.9589" xlink:href="#" y1="212.439" y2="197.281"></lineargradient>
                          <path d="m113.251 81.5029h.412v6.1258h-.412c-.179 0-.327-.1474-.327-.3272v-5.4739c0-.1798.148-.3272.327-.3272z" fill="#323230"></path>
                          <path d="m113.279 93.3449h.312v12.0421h-.312c-.137 0-.247-.11-.247-.248v-11.5468c0-.1374.11-.2473.247-.2473z" fill="#323230"></path>
                          <path d="m113.279 108.919h.312v12.035h-.312c-.137 0-.247-.11-.247-.247v-11.538c0-.137.11-.247.247-.247z" fill="#323230"></path>
                          <path d="m113.097 87.244v-5.3639c0-.1374.11-.2473.247-.2473h.314v5.8585h-.314c-.137 0-.247-.1099-.247-.2473z" fill="#efefef"></path>
                          <path d="m113.139 105.06v-11.3803c0-.1099.09-.1999.199-.1999h.255v11.7792h-.255c-.109 0-.199-.09-.199-.199z" fill="#efefef"></path>
                          <path d="m113.139 120.632v-11.395c0-.095.077-.173.172-.173h.282v11.767h-.255c-.109 0-.199-.09-.199-.199z" fill="#efefef"></path>
                          <path d="m113.663 81.7552h-.442v5.6162h.442z" fill="url(#d)"></path>
                          <path d="m113.389 93.6647h.204v11.4573h-.204c-.09 0-.162-.072-.162-.162v-11.1354c0-.09.072-.1624.162-.1624z" fill="url(#e)"></path>
                          <path d="m113.389 109.237h.204v11.457h-.204c-.09 0-.162-.072-.162-.162v-11.135c0-.09.072-.163.162-.163z" fill="url(#f)"></path>
                          <path d="m201.047 85.5751h-.3v-21.4855h.339c.11 0 .2.0899.2.1998v21.0484c0 .1324-.107.2373-.237.2373z" fill="url(#g)"></path>
                          <path d="m128.638 227.805c-4.58 0-8.393-1.392-11.027-4.028-2.633-2.636-4.023-6.45-4.023-11.037v-149.0751c0-4.542 1.355-8.3319 3.921-10.9602 2.623-2.6857 6.472-4.1047 11.127-4.1047h56.773c4.68 0 8.541 1.429 11.162 4.1297 2.543 2.6232 3.889 6.4032 3.889 10.9327v149.0776c0 4.584-1.391 8.401-4.024 11.037s-6.444 4.028-11.027 4.028h-56.773z" fill="#4d4d4d"></path>
                          <path d="m128.639 227.555c-4.513 0-8.264-1.367-10.85-3.955s-3.951-6.343-3.951-10.86v-149.0752c0-4.477 1.33-8.2069 3.851-10.7852 2.576-2.6357 6.362-4.0298 10.95-4.0298h56.773c4.612 0 8.409 1.4016 10.982 4.0548 2.499 2.5757 3.819 6.2957 3.819 10.7602v149.0752c0 4.517-1.365 8.274-3.951 10.86-2.586 2.588-6.337 3.955-10.85 3.955z" fill="#fff"></path>
                          <path d="m128.639 227.26c-4.433 0-8.115-1.337-10.643-3.867-2.528-2.531-3.864-6.214-3.864-10.653v-149.0751c0-4.3996 1.303-8.0571 3.767-10.5804 2.518-2.5783 6.232-3.9423 10.74-3.9423h56.773c4.53 0 8.256 1.3715 10.772 3.9673 2.444 2.5208 3.737 6.1708 3.737 10.5554v149.0751c0 4.437-1.336 8.122-3.864 10.653-2.528 2.53-6.207 3.867-10.643 3.867h-56.773z" fill="#8a8a8a"></path>
                          <path d="m128.639 226.62c-8.684 0-13.868-5.189-13.868-13.88v-149.0752c0-4.2271 1.24-7.7298 3.584-10.1306 2.396-2.4534 5.953-3.75 10.284-3.75h56.773c4.352 0 7.919 1.3041 10.313 3.7724 2.326 2.3984 3.554 5.8936 3.554 10.1082v149.0752c0 8.691-5.184 13.88-13.867 13.88z" fill="url(#h)"></path>
                          <path d="m185.41 49.9641h-56.773c-8.908 0-13.691 5.189-13.691 13.7033v149.0726c0 8.599 5.117 13.703 13.691 13.703h56.773c8.573 0 13.69-5.102 13.69-13.703v-149.0751c0-8.5143-4.782-13.7033-13.69-13.7033zm10.934 162.7759c0 7.057-3.883 10.945-10.934 10.945h-56.773c-7.051 0-10.935-3.888-10.935-10.945v-149.0751c0-3.5401.951-6.1983 2.753-8.0446 1.837-1.8762 4.565-2.8656 8.179-2.8656h11.284c.485 0 .876.3923.876.8769v.9494c0 2.4359 1.975 4.412 4.408 4.412h23.639c2.434 0 4.408-1.9761 4.408-4.412v-.9494c0-.4846.392-.8769.876-.8769h11.285c3.616 0 6.344.9869 8.179 2.8656 1.804 1.8438 2.753 4.5045 2.753 8.0446v149.0751z" fill="#000"></path>
                          <g stroke-miterlimit="10" stroke-width=".36">
                            <path d="m150.419 49.8342h13.208v.9069c0 .3947-.319.717-.716.717h-11.779c-.394 0-.716-.3198-.716-.717v-.9069z" stroke="#333"></path>
                            <path d="m162.704 51.0533h-11.362c-.24 0-.434-.1949-.434-.4347s.194-.4347.434-.4347h11.362c.239 0 .434.1949.434.4347s-.195.4347-.434.4347z" stroke="#262626"></path>
                            <path d="m162.704 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m162.095 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m161.486 50.1839-.612.8769" stroke="#262626"></path>
                            <path d="m160.874 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m160.265 50.1839-.612.8769" stroke="#262626"></path>
                            <path d="m159.654 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m159.045 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m158.436 50.1839-.612.8769" stroke="#262626"></path>
                            <path d="m157.824 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m157.215 50.1839-.611.8769" stroke="#262626"></path>
                            <path d="m156.604 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m155.995 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m155.386 50.1839-.612.8769" stroke="#262626"></path>
                            <path d="m154.774 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m154.165 50.1839-.612.8769" stroke="#262626"></path>
                            <path d="m153.554 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m152.945 50.1839-.612.8769" stroke="#262626"></path>
                            <path d="m152.333 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m151.724 50.1839-.609.8769" stroke="#262626"></path>
                            <path d="m151.118 50.1839.611.8769" stroke="#262626"></path>
                            <path d="m151.729 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m152.338 50.1839.611.8769" stroke="#262626"></path>
                            <path d="m152.949 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m153.559 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m154.167 50.1839.612.8769" stroke="#262626"></path>
                            <path d="m154.779 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m155.388 50.1839.612.8769" stroke="#262626"></path>
                            <path d="m156 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m156.608 50.1839.612.8769" stroke="#262626"></path>
                            <path d="m157.22 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m157.829 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m158.438 50.1839.612.8769" stroke="#262626"></path>
                            <path d="m159.049 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m159.659 50.1839.611.8769" stroke="#262626"></path>
                            <path d="m160.27 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m160.879 50.1839.609.8769" stroke="#262626"></path>
                            <path d="m161.488 50.1839.612.8769" stroke="#262626"></path>
                            <path d="m162.1 50.1839.609.8769" stroke="#262626"></path>
                          </g>
                          <path d="m147.728 54.5509c0 .802-.649 1.4516-1.45 1.4516s-1.45-.6496-1.45-1.4516c0-.8019.649-1.4515 1.45-1.4515s1.45.6496 1.45 1.4515z" fill="#050505"></path>
                          <path d="m145.299 53.5267h1.99676v1.99866h-1.99676z" fill="url(#a)"></path>
                          <g fill="#cfcfcf" opacity=".6">
                            <path d="m114.771 66.7103h-1.183v1.1117h1.183z"></path>
                            <path d="m200.198 199.538h-1.74v1.637h1.74z"></path>
                          </g>
                          <path d="m186.817 101.517s.312-3.5153 1.26-4.4902 4.433-1.3643 4.433-1.3643-3.419-.3653-4.372-1.3348c-.954-.9695-1.35-4.4878-1.35-4.4878s-.407 3.5183-1.355 4.4959c-.948.9749-4.338 1.3589-4.338 1.3589s3.479.3465 4.435 1.3187c.953.9695 1.289 4.5066 1.289 4.5066zm-17.407-3.7812s.969-10.9119 3.913-13.9387c2.946-3.0294 13.759-4.2326 13.759-4.2326s-10.613-1.1334-13.575-4.1467c-2.962-3.0134-4.191-13.9307-4.191-13.9307s-1.261 10.9227-4.207 13.9522c-2.946 3.0294-13.467 4.2192-13.467 4.2192s10.802 1.0769 13.761 4.0876c2.962 3.0133 4.005 13.9871 4.005 13.9871zm13.786-25.5758s.312-3.5155 1.26-4.4904 4.433-1.3644 4.433-1.3644-3.419-.3652-4.375-1.3374c-.953-.9696-1.35-4.4878-1.35-4.4878s-.407 3.5182-1.355 4.4958c-.948.9749-4.337 1.359-4.337 1.359s3.479.3464 4.432 1.316c.953.9695 1.289 4.5066 1.289 4.5066z" fill="url(#i)"></path>
                          <path d="m114 142.169 75.578-92.4891s12.207.4379 12.207 12.1761v34.1744l-87.785 109.6596z" fill="url(#k)" opacity=".3"></path>
                          <path d="m118.202 203.669 88.985-110.5051v15.4191l-88.985 108.344z" fill="url(#l)" opacity=".3"></path>
                          <path d="m138.742 109.5 4.768-8.337c.762-1.3318.301-3.0286-1.028-3.7904-1.329-.7617-3.024-.3-3.786 1.0313l-4.769 8.3381c-.761 1.331-.301 3.028 1.029 3.79 1.329.762 3.024.3 3.786-1.032z" fill="url(#n)"></path>
                          <path d="m78.2212 122.062-8.569-4.328c-1.3682-.692-3.0369-.142-3.7271 1.227-.6902 1.368-.1406 3.038 1.2277 3.73l8.5689 4.329c1.3683.691 3.0369.141 3.7271-1.227.6902-1.369.1406-3.039-1.2276-3.731z" fill="url(#o)"></path>
                          <path d="m106.922 90.5175-12.5768 3.4228 5.611 20.6577 12.5768-3.423z" fill="url(#p)"></path>
                          <path d="m116.12 198.356c27.093 0 49.057-21.984 49.057-49.103s-21.964-49.103-49.057-49.103c-27.0932 0-49.0565 21.984-49.0565 49.103s21.9633 49.103 49.0565 49.103z" fill="url(#q)"></path>
                          <g filter="url(#b)">
                            <path d="m104.151 117.167c-16.0933 5.823-25.2042 22.743-21.44 39.605 4.2434 19 23.658 30.727 42.425 25.61 17.308-4.719 28.063-21.254 24.878-38.548-.362-1.96-2.237-3.134-4.157-2.613l-27.511 7.485c-1.214.329-2.477-.393-2.808-1.609l-7.601-27.983c-.443-1.637-2.19-2.524-3.783-1.949z" fill="url(#s)"></path>
                          </g>
                          <path d="m106.063 77.9891-17.3118 4.7113c-2.7292.7427-4.3401 3.5593-3.5981 6.2911l.9634 3.5469c.7421 2.7318 3.556 4.3443 6.2852 3.6015l17.3123-4.7112c2.729-.7427 4.34-3.5594 3.598-6.2911l-.964-3.547c-.742-2.7318-3.556-4.3442-6.285-3.6015z" fill="url(#t)"></path>
                          <path d="m58.7737 170.576-15.6149 12.752c-1.0563.863-1.214 2.419-.3522 3.477l.0018.002c.8619 1.057 2.4169 1.215 3.4733.352l15.6149-12.751c1.0563-.863 1.214-2.42.3522-3.477l-.0018-.002c-.8619-1.058-2.4169-1.215-3.4733-.353z" fill="url(#v)"></path>
                          <path d="m64.9536 182.026-20.8998 17.067c-1.0563.863-1.214 2.419-.3521 3.477l.0017.002c.8619 1.057 2.4169 1.215 3.4733.352l20.8997-17.067c1.0564-.863 1.2141-2.419.3522-3.477l-.0018-.002c-.8618-1.057-2.4169-1.215-3.4732-.352z" fill="url(#w)"></path>
                          <path d="m73.6712 191.512-15.6149 12.752c-1.0564.863-1.2141 2.419-.3522 3.477l.0018.002c.8618 1.057 2.4169 1.215 3.4732.353l15.6149-12.752c1.0564-.863 1.2141-2.419.3522-3.477l-.0017-.002c-.8619-1.057-2.417-1.215-3.4733-.353z" fill="url(#x)"></path>
                          <path d="m83.2603 198.344-11.267 9.201c-1.0564.863-1.214 2.419-.3522 3.477l.0018.002c.8618 1.057 2.4169 1.215 3.4733.352l11.2669-9.201c1.0564-.863 1.2141-2.419.3522-3.476l-.0017-.003c-.8619-1.057-2.4169-1.215-3.4733-.352z" fill="url(#y)"></path>
                        </svg>
                      </template>
                    </sl-icon>
                    <div class="wf-heading--xs wf-mt--2">Réparation express</div>
                    <div class="wf-paragraph--sm wf-mt--1">avec ou sans rendez-vous.</div>
                </sl-card>
                <sl-card class="wf-card">

                    <sl-icon library="Mayday Phone" name="assurance-experts" style="font-size: 8rem" aria-hidden="true">
                      <template shadowrootmode="open">
                        <!---->
                        <svg fill="none" height="233" viewBox="0 0 219 233" width="219" xmlns="http://www.w3.org/2000/svg')}}" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg')}}">
                          <pattern id="a" height="1" patternContentUnits="objectBoundingBox" width="1">
                            <image height="7" transform="scale(.142857)" width="7" xlink:href="#"></image>
                          </pattern>
                          <lineargradient id="b">
                            <stop offset="0" stop-color="#d32800"></stop>
                            <stop offset="1" stop-color="#e23a00"></stop>
                          </lineargradient>
                          <lineargradient id="c" gradientUnits="userSpaceOnUse" x1="81.2518" x2="101.111" xlink:href="#" y1="184.533" y2="184.533"></lineargradient>
                          <lineargradient id="d">
                            <stop offset=".03" stop-color="#ff8294"></stop>
                            <stop offset="1" stop-color="#ff435e"></stop>
                          </lineargradient>
                          <lineargradient id="e" gradientUnits="userSpaceOnUse" x1="88.5635" x2="88.5635" xlink:href="#" y1="185.613" y2="87.8744"></lineargradient>
                          <lineargradient id="f" gradientUnits="userSpaceOnUse" x1="91.034" x2="91.034" y1="185.613" y2="163.259">
                            <stop offset="0" stop-color="#ff8294"></stop>
                            <stop offset="1" stop-color="#ff435e"></stop>
                          </lineargradient>
                          <lineargradient id="g" gradientUnits="userSpaceOnUse" x1="88.5401" x2="88.5401" y1="163.259" y2="87.8744">
                            <stop offset=".16" stop-color="#f95900"></stop>
                            <stop offset=".48" stop-color="#fb6000"></stop>
                            <stop offset="1" stop-color="#ff6801"></stop>
                          </lineargradient>
                          <lineargradient id="h" gradientUnits="userSpaceOnUse" x1="95.316" x2="95.316" y1="184.348" y2="91.9674">
                            <stop offset=".03" stop-color="#ff9a56"></stop>
                            <stop offset=".16" stop-color="#fe8f46"></stop>
                            <stop offset=".52" stop-color="#fd7520"></stop>
                            <stop offset=".82" stop-color="#fc6508"></stop>
                            <stop offset="1" stop-color="#fc6000"></stop>
                          </lineargradient>
                          <lineargradient id="i" gradientUnits="userSpaceOnUse" x1="65.2613" x2="83.5944" xlink:href="#" y1="177.972" y2="177.972"></lineargradient>
                          <lineargradient id="j">
                            <stop offset=".03" stop-color="#2f5472"></stop>
                            <stop offset="1" stop-color="#053256"></stop>
                          </lineargradient>
                          <lineargradient id="k" gradientUnits="userSpaceOnUse" x1="58.9346" x2="81.205" xlink:href="#" y1="185.813" y2="185.813"></lineargradient>
                          <lineargradient id="l" gradientUnits="userSpaceOnUse" x1="59.9666" x2="81.2286" y1="182.078" y2="182.078">
                            <stop offset=".48" stop-color="#97afbf"></stop>
                            <stop offset=".6" stop-color="#9cb2c1"></stop>
                            <stop offset=".75" stop-color="#aabdca"></stop>
                            <stop offset=".91" stop-color="#c3cfd8"></stop>
                            <stop offset="1" stop-color="#d5dde3"></stop>
                          </lineargradient>
                          <lineargradient id="m">
                            <stop offset=".03" stop-color="#2f5472"></stop>
                            <stop offset="1" stop-color="#053256" stop-opacity="0"></stop>
                          </lineargradient>
                          <lineargradient id="n" gradientUnits="userSpaceOnUse" x1="72.2792" x2="69.567" xlink:href="#" y1="174.287" y2="179.014"></lineargradient>
                          <lineargradient id="o" gradientUnits="userSpaceOnUse" x1="92.8025" x2="92.8025" xlink:href="#" y1="181.912" y2="186.139"></lineargradient>
                          <lineargradient id="p" gradientUnits="userSpaceOnUse" x1="91.9031" x2="91.9031" xlink:href="#" y1="43.7447" y2="93.5395"></lineargradient>
                          <lineargradient id="q" gradientUnits="userSpaceOnUse" x1="84.883" x2="80.9602" y1="88.87" y2="92.8158">
                            <stop offset=".03" stop-color="#cc8352"></stop>
                            <stop offset=".04" stop-color="#cf8757" stop-opacity=".96"></stop>
                            <stop offset=".14" stop-color="#dd9d70" stop-opacity=".79"></stop>
                            <stop offset=".24" stop-color="#eaae85" stop-opacity=".65"></stop>
                            <stop offset=".35" stop-color="#f3bc96" stop-opacity=".54"></stop>
                            <stop offset=".48" stop-color="#fac5a1" stop-opacity=".46"></stop>
                            <stop offset=".66" stop-color="#fdcba8" stop-opacity=".41"></stop>
                            <stop offset="1" stop-color="#ffcdaa" stop-opacity=".4"></stop>
                          </lineargradient>
                          <lineargradient id="r" gradientUnits="userSpaceOnUse" x1="81.8108" x2="77.8838" y1="93.1694" y2="97.1215">
                            <stop offset=".03" stop-color="#cc8352"></stop>
                            <stop offset=".05" stop-color="#d08959" stop-opacity=".95"></stop>
                            <stop offset=".13" stop-color="#de9e72" stop-opacity=".78"></stop>
                            <stop offset=".23" stop-color="#eaaf86" stop-opacity=".64"></stop>
                            <stop offset=".34" stop-color="#f3bc96" stop-opacity=".53"></stop>
                            <stop offset=".47" stop-color="#fac6a1" stop-opacity=".46"></stop>
                            <stop offset=".64" stop-color="#fdcba8" stop-opacity=".41"></stop>
                            <stop offset="1" stop-color="#ffcdaa" stop-opacity=".4"></stop>
                          </lineargradient>
                          <lineargradient id="s" gradientUnits="userSpaceOnUse" x1="67.1645" x2="71.9022" y1="84.3962" y2="87.1497">
                            <stop offset=".03" stop-color="#f2a16b"></stop>
                            <stop offset=".13" stop-color="#f5ad7c"></stop>
                            <stop offset=".28" stop-color="#f9bb90"></stop>
                            <stop offset=".45" stop-color="#fcc59f"></stop>
                            <stop offset=".66" stop-color="#fecba7"></stop>
                            <stop offset="1" stop-color="#ffcdaa"></stop>
                          </lineargradient>
                          <lineargradient id="t" gradientUnits="userSpaceOnUse" x1="93.0229" x2="93.0229" y1="194.361" y2="187.33">
                            <stop offset=".28" stop-color="#acbbc7"></stop>
                            <stop offset=".49" stop-color="#b1bfca"></stop>
                            <stop offset=".75" stop-color="#bfcbd4"></stop>
                            <stop offset="1" stop-color="#d5dde3"></stop>
                          </lineargradient>
                          <lineargradient id="u" gradientUnits="userSpaceOnUse" x1="93.0147" x2="93.0147" y1="192.77" y2="194.497">
                            <stop offset=".03" stop-color="#204056"></stop>
                            <stop offset="1" stop-color="#053256"></stop>
                          </lineargradient>
                          <lineargradient id="v">
                            <stop offset=".03" stop-color="#ffcdaa"></stop>
                            <stop offset=".31" stop-color="#ffd0b0"></stop>
                            <stop offset=".68" stop-color="#ffdac1"></stop>
                            <stop offset="1" stop-color="#ffe6d5"></stop>
                          </lineargradient>
                          <lineargradient id="w" gradientUnits="userSpaceOnUse" x1="97.2449" x2="97.2449" xlink:href="#" y1="34.5014" y2="48.1951"></lineargradient>
                          <lineargradient id="x">
                            <stop offset=".03" stop-color="#ffb380"></stop>
                            <stop offset=".45" stop-color="#ffbc8f"></stop>
                            <stop offset="1" stop-color="#ffcdaa"></stop>
                          </lineargradient>
                          <lineargradient id="y" gradientUnits="userSpaceOnUse" x1="97.2748" x2="97.2023" xlink:href="#" y1="34.6996" y2="41.3312"></lineargradient>
                          <lineargradient id="z" gradientUnits="userSpaceOnUse" x1="93.004" x2="105.265" xlink:href="#" y1="17.1209" y2="38.4919"></lineargradient>
                          <lineargradient id="A" gradientUnits="userSpaceOnUse" x1="90.8567" x2="90.8567" xlink:href="#" y1="23.4072" y2="37.0627"></lineargradient>
                          <lineargradient id="B" gradientUnits="userSpaceOnUse" x1="93.9652" x2="95.5726" xlink:href="#" y1="31.8677" y2="29.0635"></lineargradient>
                          <lineargradient id="C" gradientUnits="userSpaceOnUse" x1="106.607" x2="108.217" xlink:href="#" y1="32.1677" y2="29.3634"></lineargradient>
                          <lineargradient id="D" gradientUnits="userSpaceOnUse" x1="94.873" x2="100.296" xlink:href="#" y1="19.0009" y2="26.4905"></lineargradient>
                          <lineargradient id="E" gradientUnits="userSpaceOnUse" x1="86.0693" x2="92.8326" xlink:href="#" y1="23.8859" y2="23.8859"></lineargradient>
                          <lineargradient id="F" gradientUnits="userSpaceOnUse" x1="90.9165" x2="109.078" xlink:href="#" y1="18.6781" y2="18.6781"></lineargradient>
                          <lineargradient id="G" gradientUnits="userSpaceOnUse" x1="112.155" x2="95.2436" y1="121.508" y2="113.573">
                            <stop offset="0" stop-color="#ff6801" stop-opacity="0"></stop>
                            <stop offset=".3" stop-color="#f55800" stop-opacity=".34"></stop>
                            <stop offset=".64" stop-color="#ea4800" stop-opacity=".69"></stop>
                            <stop offset=".88" stop-color="#e43d00" stop-opacity=".91"></stop>
                            <stop offset="1" stop-color="#e23a00"></stop>
                          </lineargradient>
                          <lineargradient id="H" gradientUnits="userSpaceOnUse" x1="96.9989" x2="91.4197" y1="185.145" y2="175.418">
                            <stop offset="0" stop-color="#ff924a"></stop>
                            <stop offset=".19" stop-color="#f87e39"></stop>
                            <stop offset=".73" stop-color="#e84d10"></stop>
                            <stop offset="1" stop-color="#e23a00"></stop>
                          </lineargradient>
                          <lineargradient id="I">
                            <stop offset=".03" stop-color="#cc8352"></stop>
                            <stop offset=".05" stop-color="#cf8858" stop-opacity=".96"></stop>
                            <stop offset=".14" stop-color="#de9d71" stop-opacity=".79"></stop>
                            <stop offset=".24" stop-color="#eaae86" stop-opacity=".64"></stop>
                            <stop offset=".35" stop-color="#f3bc96" stop-opacity=".53"></stop>
                            <stop offset=".48" stop-color="#fac5a1" stop-opacity=".46"></stop>
                            <stop offset=".65" stop-color="#fdcba8" stop-opacity=".41"></stop>
                            <stop offset="1" stop-color="#ffcdaa" stop-opacity=".4"></stop>
                          </lineargradient>
                          <lineargradient id="J" gradientUnits="userSpaceOnUse" x1="83.714" x2="79.7934" xlink:href="#" y1="91.1931" y2="95.1409"></lineargradient>
                          <lineargradient id="K" gradientUnits="userSpaceOnUse" x1="97.8209" x2="97.913" y1="81.9816" y2="81.9816">
                            <stop offset=".03" stop-color="#053256"></stop>
                            <stop offset="1" stop-color="#093659"></stop>
                          </lineargradient>
                          <lineargradient id="L" gradientUnits="userSpaceOnUse" x1="87.8718" x2="92.2724" xlink:href="#" y1="67.7284" y2="70.2864"></lineargradient>
                          <lineargradient id="M" gradientUnits="userSpaceOnUse" x1="89.9252" x2="94.3449" xlink:href="#" y1="72.1044" y2="74.6731"></lineargradient>
                          <lineargradient id="N" gradientUnits="userSpaceOnUse" x1="88.2039" x2="92.7687" xlink:href="#" y1="69.9536" y2="72.6061"></lineargradient>
                          <lineargradient id="O">
                            <stop offset="0" stop-color="#cecece"></stop>
                            <stop offset=".02" stop-color="#383836"></stop>
                            <stop offset=".09" stop-color="#7e7e7d"></stop>
                            <stop offset=".15" stop-color="#b7b7b7"></stop>
                            <stop offset=".18" stop-color="#cecece"></stop>
                            <stop offset=".82" stop-color="#cecece"></stop>
                            <stop offset=".84" stop-color="#c6c6c6"></stop>
                            <stop offset=".87" stop-color="#b1b1b1"></stop>
                            <stop offset=".91" stop-color="#8f8f8e"></stop>
                            <stop offset=".95" stop-color="#60605e"></stop>
                            <stop offset=".98" stop-color="#363633"></stop>
                            <stop offset="1" stop-color="#cecece"></stop>
                          </lineargradient>
                          <lineargradient id="P" gradientUnits="userSpaceOnUse" x1="111.393" x2="111.393" xlink:href="#" y1="97.5815" y2="93.7182"></lineargradient>
                          <lineargradient id="Q" gradientUnits="userSpaceOnUse" x1="111.372" x2="111.372" xlink:href="#" y1="109.79" y2="101.911"></lineargradient>
                          <lineargradient id="R" gradientUnits="userSpaceOnUse" x1="111.372" x2="111.372" xlink:href="#" y1="120.499" y2="112.62"></lineargradient>
                          <lineargradient id="S" gradientUnits="userSpaceOnUse" x1="172.071" x2="172.071" y1="81.5689" y2="96.3455">
                            <stop offset="0" stop-color="#cecece"></stop>
                            <stop offset=".02" stop-color="#383836"></stop>
                            <stop offset=".05" stop-color="#7e7e7d"></stop>
                            <stop offset=".09" stop-color="#b7b7b7"></stop>
                            <stop offset=".1" stop-color="#cecece"></stop>
                            <stop offset=".88" stop-color="#cecece"></stop>
                            <stop offset=".89" stop-color="#c6c6c6"></stop>
                            <stop offset=".91" stop-color="#b1b1b1"></stop>
                            <stop offset=".93" stop-color="#8f8f8e"></stop>
                            <stop offset=".96" stop-color="#60605e"></stop>
                            <stop offset=".98" stop-color="#363633"></stop>
                            <stop offset="1" stop-color="#cecece"></stop>
                          </lineargradient>
                          <lineargradient id="T" gradientUnits="userSpaceOnUse" x1="112.314" x2="170.865" y1="132.542" y2="132.542">
                            <stop offset=".03" stop-color="#041a26"></stop>
                            <stop offset="1" stop-color="#0f2c3f"></stop>
                          </lineargradient>
                          <lineargradient id="U" gradientUnits="userSpaceOnUse" x1="115.642" x2="113.616" y1="70.4919" y2="58.9295">
                            <stop offset=".03" stop-color="#1f4667" stop-opacity=".7"></stop>
                            <stop offset=".32" stop-color="#204768" stop-opacity=".71"></stop>
                            <stop offset=".5" stop-color="#244d6e" stop-opacity=".73"></stop>
                            <stop offset=".64" stop-color="#2c5778" stop-opacity=".77"></stop>
                            <stop offset=".76" stop-color="#376487" stop-opacity=".82"></stop>
                            <stop offset=".87" stop-color="#457699" stop-opacity=".89"></stop>
                            <stop offset=".98" stop-color="#578caf" stop-opacity=".98"></stop>
                            <stop offset="1" stop-color="#5b91b5"></stop>
                          </lineargradient>
                          <lineargradient id="V" gradientUnits="userSpaceOnUse" x1="116.186" x2="118.411" y1="61.3421" y2="58.1462">
                            <stop offset=".03" stop-color="#053256"></stop>
                            <stop offset=".31" stop-color="#053256" stop-opacity=".85"></stop>
                            <stop offset=".82" stop-color="#083558" stop-opacity=".46"></stop>
                            <stop offset="1" stop-color="#093659" stop-opacity=".3"></stop>
                          </lineargradient>
                          <lineargradient id="W" gradientUnits="userSpaceOnUse" x1="87.2093" x2="88.893" y1="28.9468" y2="31.769">
                            <stop offset=".03" stop-color="#eda574"></stop>
                            <stop offset=".28" stop-color="#f2b185" stop-opacity=".68"></stop>
                            <stop offset=".54" stop-color="#f7bd94" stop-opacity=".39"></stop>
                            <stop offset=".75" stop-color="#fbc5a0" stop-opacity=".18"></stop>
                            <stop offset=".91" stop-color="#fecba7" stop-opacity=".05"></stop>
                            <stop offset="1" stop-color="#ffcdaa" stop-opacity="0"></stop>
                          </lineargradient>
                          <lineargradient id="X" gradientUnits="userSpaceOnUse" x1="113.098" x2="130.304" y1="95.4376" y2="72.5345">
                            <stop offset="0" stop-opacity="0"></stop>
                            <stop offset="1"></stop>
                          </lineargradient>
                          <lineargradient id="Y" gradientUnits="userSpaceOnUse" x1="160.762" x2="148.232" y1="83.926" y2="105.769">
                            <stop offset="0" stop-color="#fff" stop-opacity=".6"></stop>
                            <stop offset=".16" stop-color="#fff" stop-opacity=".67"></stop>
                            <stop offset=".73" stop-color="#fff" stop-opacity=".91"></stop>
                            <stop offset="1" stop-color="#fff"></stop>
                          </lineargradient>
                          <lineargradient id="Z">
                            <stop offset="0" stop-color="#fff" stop-opacity="0"></stop>
                            <stop offset=".19" stop-color="#fff" stop-opacity=".07"></stop>
                            <stop offset=".56" stop-color="#fff" stop-opacity=".25"></stop>
                            <stop offset="1" stop-color="#fff" stop-opacity=".5"></stop>
                          </lineargradient>
                          <lineargradient id="aa" gradientUnits="userSpaceOnUse" x1="165.646" x2="112.045" xlink:href="#" y1="75.1465" y2="168.578"></lineargradient>
                          <lineargradient id="ab" gradientUnits="userSpaceOnUse" x1="161.509" x2="114.918" xlink:href="#" y1="107.701" y2="188.913"></lineargradient>
                          <mask id="ac" height="8" maskUnits="userSpaceOnUse" width="8" x="83" y="54">
                            <path d="m90.4069 54.8813h-6.8639v6.8203h6.8639z" fill="#fff"></path>
                          </mask>
                          <mask id="ad" height="8" maskUnits="userSpaceOnUse" width="8" x="83" y="54">
                            <path d="m90.4069 54.8813h-6.8639v6.8203h6.8639z" fill="#fff"></path>
                          </mask>
                          <path clip-rule="evenodd" d="m101.109 183.114c-.008.078-.025.155-.051.227-.295.832-1.214 1.423-2.1067 1.851-.1735.085-.3469.162-.5139.234-.2034.087-.3982.166-.5738.238-.8949.377-1.8241.664-2.7747.86-1.0105.195-2.0296.338-3.0551.427-1.3981.122-2.8646.249-4.2606.113h-.0535l-.0706-.006-.0878-.007h-.0557c-.2055-.017-.4068-.038-.6059-.063l-.0514-.007h-.015c-.882-.102-1.7534-.276-2.6055-.523l-.2184-.068-.1177-.039-.0236-.006c-.0749-.023-.1499-.051-.2227-.077-.0727-.025-.1691-.063-.2483-.093l-.0193-.009c-.471-.176-.9142-.417-1.321-.712l-.0364-.028c-.229-.172-.426-.385-.5802-.628l-.0342-.057c-.0771-.14-.1306-.294-.1542-.453-.0085-.047-.0042-.096.0129-.138.015-.039.0428-.071.0771-.094.1049-.079.3168-.104.593-.094.4089.024.8179.069 1.2225.132l.0428.007c.1606.023.3319.049.5074.072l.4603.066c.2099.028.4282.057.6552.085l.1734.019c.2376.028.4817.051.7301.075.3511.029.7129.055 1.0854.068 1.3253.064 2.6527-.062 3.9437-.373.7365-.189 1.4473-.387 2.1174-.587.5289-.157 1.0363-.312 1.5223-.463l.1991-.062.1049-.034.1584-.049c.4282-.134.8436-.262 1.2354-.377.7728-.242 1.5629-.425 2.3614-.546.9335-.124 1.6845-.043 2.2455.368.095.066.176.146.244.236.039.051.071.108.097.168.015.034.026.068.034.104.022.079.032.162.028.243z" fill="url(#c)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m86.6174 186.864.3726-2.638 11.3278-2.314 1.458 9.671-13.8735.368z" fill="#778fa0" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m101.056 182.818c-.023-.064-.058-1.14-.096-1.196-.069-.095-.152.839-.244.771-.9766-.749-2.5288-.449-4.6077.189-.3939.121-.8071.255-1.2353.396l-.1584.051-.105.036-.1991.064c-.486.159-.9934.321-1.5222.489-.6701.21-1.3766.419-2.1174.617-1.7406.468-3.5048.459-5.0292.319-.2504-.023-.4924-.049-.73-.079l-.1734-.021c-.227-.028-.4454-.06-.6552-.089l-.4603-.069c-.1777-.025-.3468-.051-.5074-.076l-.0428-.006c-.4047-.069-.8114-.113-1.2204-.139-.2804-.01-.4838.017-.593.1-.0343.024-.0621.058-.0771.098-.0171.047-.0214.098-.0128.147.0235.166.0749.327.1541.474l.0343.06c.0449.072.092.144.1434.213.1392.185.0086.448-.2248.448-.1049 0-.2034-.057-.2505-.151-.0407-.076-.0728-.155-.0963-.238-.0086-.028-.0107-.055-.0107-.083v-36.392s0-.015 0-.024l-4.9393-59.7996c-.0128-.1595.1092-.2978.2719-.302l20.943-.7489c.152-.0064.2805.1107.2912.2617l3.3994 48.5968v.02c0 .691.088 41.644.08 46.067z" fill="url(#e)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m101.056 182.818c-.024-.064-.058-1.14-.096-1.196-.069-.095-.152.839-.245.77-.9758-.748-2.528-.448-4.6069.19-.3939.121-.8071.255-1.2353.395l-.1584.052-.105.036-.1991.064c-.486.159-.9934.321-1.5222.489-.6701.21-1.3766.419-2.1174.617-1.7406.468-3.5048.459-5.0292.319-.2505-.024-.4924-.049-.73-.079l-.1735-.021c-.2269-.028-.4453-.06-.6551-.089l-.4603-.069c-.1777-.025-.3468-.051-.5074-.076l-.0428-.007c-.4047-.068-.8115-.112-1.2204-.138-.2805-.01-.4838.017-.593.1-.0343.024-.0621.058-.0771.098-.0171.047-.0214.098-.0129.147.0236.166.075.327.1542.474l.0343.06c.0449.072.092.144.1434.213.1392.185.0086.448-.2248.448-.1049 0-.2034-.057-.2505-.151-.0407-.076-.0728-.155-.0963-.238-.0086-.028-.0107-.055-.0107-.083v-21.882" fill="url(#f)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m81.0124 163.259v-14.511s0-.014 0-.023l-4.9392-59.7997c-.0129-.1595.1092-.2978.2719-.3021l20.943-.7488c.152-.0064.2804.1106.2911.2617l3.3998 48.5969v.019c0 .285.015 7.382.032 15.947" fill="url(#g)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m117.798 156.013-34.1354 28.288s-.0685.127-.077-.036c-.0172-.53-.1435-1.049-.3704-1.528-.8971-1.861-3.2971-2.57-6.0161-3.582l-.2505-.094-.0964-.036-.1327-.051-.0214-.009c-.4818-.183-.9699-.38-1.4623-.597-.2591-.115-.516-.232-.7708-.356-.2547-.123-.5159-.259-.7707-.4-1.017-.546-1.959-1.219-2.8047-1.999-1.2803-1.209-2.4493-2.53-3.4919-3.947l-.1435-.193c-.0513-.066-.0984-.132-.1434-.194-.0257-.034-.0535-.068-.0771-.104l-.152-.208c-.2098-.29-.4346-.571-.6723-.839-.1926-.202-.3489-.315-.4838-.315l37.3904-29.044-9.2944-48.7995h21.9984l8.761 46.0255c1.293 6.792-1.321 13.736-6.783 18.021z" fill="url(#h)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m83.5556 184.722-.3575.3-7.2858-4.482-.2098-.128-.2098-.128-6.1253-3.769-2.4621-4.481-.1178-.208-.1177-.209-.972-1.767.0278-.022c.1349 0 .2912.111.4838.315.2377.268.4625.547.6723.838l.152.209c.0236.034.0514.066.0771.104.0471.064.0942.128.1434.194l.1435.193c1.0426 1.417 2.2116 2.738 3.4919 3.947.8457.782 1.7899 1.455 2.8047 1.999.2548.141.5117.275.7707.4.2591.126.5139.243.7708.355.4903.217.9805.42 1.4623.598l.0214.009.1327.051.0964.036.2505.094c2.719 1.012 5.119 1.721 6.0161 3.582.2269.479.3511 1 .3704 1.527.0085.147 0 .296-.0279.441z" fill="#fdc846" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m83.5559 184.722c-.4068 1.949-4.282 1.81-8.2064-.104-.4667-.226-.9313-.479-1.3938-.755-.0706-.043-.1413-.086-.2098-.132-.0685-.045-.1306-.079-.1948-.122h-.0086l-.0085-.006c-.6616-.421-1.2953-.885-1.8969-1.389-.0621-.053-.1263-.104-.1863-.16-.3575-.315-.7065-.64-1.0384-.983-.3318-.342-.6637-.721-.9677-1.108-1.655-2.093-2.8325-4.272-3.5069-6.071-.1135-.302-.2098-.596-.2976-.875v-.01c-.0257-.081-.0492-.16-.0685-.239-.0193-.078-.0492-.17-.0685-.253-.0343-.127-.0642-.251-.0899-.372-.0493-.234-.0878-.455-.1114-.662-.0856-.685-.0257-1.204.1799-1.493.0085-.015.0214-.028.0278-.04.0535-.075.137-.12.227-.126.1348 0 .2911.111.4838.315.2377.268.4625.547.6723.838l.152.209c.0235.034.0514.065.0771.104.0471.064.0942.127.1434.193l.1435.194c1.0426 1.417 2.2116 2.738 3.4919 3.946.8457.783 1.7898 1.455 2.8047 2 .2547.14.5116.274.7707.4.2591.125.5138.242.7708.355.4902.217.9805.419 1.4622.598l.0214.008.1328.051.0963.037.2505.093c2.7191 1.013 5.1191 1.721 6.0162 3.583.2269.478.3511 1 .3703 1.527.0065.149-.0064.298-.0364.445z" fill="url(#i)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m79.7386 188.679c-1.0213-1.445-2.5628-2.355-4.5838-2.713-.0579-.01-.1157-.023-.1735-.04-.2483-.072-.4817-.185-.6936-.334-.1756-.121-.3298-.272-.4539-.447-.137-.189-.2163-.415-.2291-.649-.0043-.091.0043-.18.0193-.27.0149-.078.0321-.161.0535-.244s.0449-.166.0706-.251c.2163-.709.6316-1.511 1.2161-2.345.227-.327.4774-.655.7472-.978.3918-.473.8093-.924 1.2503-1.353l-.0963-.036-.1327-.052-.0215-.008c-.4817-.183-.9698-.381-1.4622-.598-.2591-.115-.516-.232-.7708-.355s-.516-.26-.7707-.4c-1.017-.547-1.959-1.219-2.8047-2-1.2803-1.208-2.4493-2.529-3.4919-3.946l-.1435-.194c-.1541.113-.3104.23-.471.351-.3768.283-.7772.592-1.1882.913-.0129.009-.0257.019-.0386.03-1.0747.838-2.9973 2.38-5.0891 4.233-.0235.019-.0492.043-.0728.064-.3811.336-.7664.685-1.1582 1.047l-.1499.136 10.2959 15.878h11.694l.0065-.234c.0492-2.106-.4133-3.856-1.3617-5.209zm1.1176 5.199h-11.3301l-10.1139-15.598c.3318-.304.6658-.608 1.0062-.91l10.0091 14.759h10.3409c.0749.579.1028 1.164.0835 1.747h.0064z" fill="#fff" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m80.9266 194.28h-11.6169l-10.3751-16c.3404-.312.6851-.623 1.0319-.934l10.266 15.141h10.57l.3875.283c.077.593-.2462.91-.2655 1.51z" fill="url(#k)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m81.2286 192.77h-10.8033l-10.4565-15.421c.1263-.113.2526-.226.381-.337 1.7492-1.544 3.5412-3.016 5.0741-4.218l.1199-.094c.4004-.312.7836-.606 1.1412-.874l.0663-.051c.1799-.136.3533-.264.5203-.389 1.0898 1.48 2.3101 2.861 3.6482 4.122.8842.817 1.8691 1.519 2.931 2.092.2655.146.5331.287.805.417.2719.129.5353.253.805.372.5139.227 1.0234.438 1.5265.625l-.0321.032c-.0835.083-.167.168-.2483.251l-.0107.011c-.0878.091-.1777.185-.2634.279-.0878.093-.1691.182-.2526.276-.0086.009-.0171.017-.0236.028-.0749.083-.1477.166-.2205.251s-.1413.166-.2098.251l-.0428.049c-.0493.061-.1006.123-.1477.185-.1028.13-.2034.257-.2998.389-.0492.064-.0963.13-.1434.196s-.0942.13-.1392.196c-.5823.833-1.0362 1.674-1.2824 2.455-.0514.153-.0942.308-.1285.468-.0107.048-.0214.095-.03.142-.0235.13-.0321.262-.0214.394.0536.459.2912.878.6594 1.163.1777.147.3747.27.5824.366.1863.087.3811.151.5823.187 3.3913.598 5.2732 2.723 5.8278 5.689.0342.168.062.334.0835.504z" fill="url(#l)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m77.152 179.18-.0342.034c-.0857.085-.1692.17-.2548.258l-.0107.01c-.0899.094-.182.19-.2698.285-.0877.096-.1712.188-.2569.281-.0085.009-.0171.017-.0257.028-.0771.085-.1498.17-.2248.255-.0749.085-.1456.17-.2141.255l-.0428.051c-.0514.062-.1028.126-.152.19-.1049.132-.2077.264-.3062.395-.0492.066-.0984.132-.1455.198-.0472.066-.0964.132-.1414.198-3.1686-1.036-6.273-2.68-7.8659-5.314-.5138-.847-1.1454-2.153-1.7384-3.574.4089-.319.7985-.619 1.1646-.893l.0685-.051c.1842-.139.3619-.271.531-.396 1.1112 1.512 2.3594 2.921 3.7253 4.21.9035.834 1.9076 1.551 2.9931 2.134.2719.149.5459.293.8221.427s.5481.258.8221.379c.5224.23 1.0448.44 1.5587.636z" fill="url(#n)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m98.9685 185.218c-.1734.051-.349.098-.5267.144-3.7595.968-8.5874.926-11.3278.453-.167-.027-.3255-.059-.4753-.091l.1862-1.319c.1585 0 .3169.009.4839.009 1.1647.023 2.3272-.105 3.4598-.381.7365-.19 1.4473-.387 2.1174-.587.5288-.158 1.0363-.313 1.5223-.464l.1991-.062.1049-.034.1584-.049c.4282-.134.8435-.262 1.2353-.376.6509-.192 1.2482-.349 1.792-.456.197-.038.3854-.07.5674-.093l.4839 3.216z" fill="url(#o)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m51.1669 83.8027c.1049.0191.2076-.0362.2504-.1319.0429-.0957.0129-.2106-.0706-.2744-.6637-.5212-1.291-1.0871-1.8798-1.6913-.0878-.0914-.2355-.0936-.3254-.0064-.0921.0873-.0942.2341-.0064.3234.6016.6191 1.246 1.1977 1.9247 1.7338.03.0234.0664.0404.1049.0468z" fill="#202850" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m47.2534 79.6394c.0899.0128.1798-.0276.2291-.1063.0492-.0787.0471-.1745-.0064-.251-.4218-.6127-.8072-1.2488-1.154-1.9061-1.8434-3.4825-2.5264-7.4585-1.9462-11.3516.1992-1.3657.5481-2.706 1.0427-3.9951.045-.117-.0129-.2511-.1327-.2957-.1178-.0447-.2527.0127-.2976.1319-.5075 1.321-.865 2.6953-1.0684 4.0951-.593 3.9888.1049 8.0627 1.9933 11.6302.3554.6723.7514 1.3254 1.1839 1.9508.0364.051.0942.0872.1563.0957z" fill="#202850" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m46.1852 59.9763c.0963.0149.1905-.034.2355-.117.1605-.2999.3318-.5999.5117-.8871.0428-.0702.0449-.1574.0064-.2297-.0386-.0723-.1135-.117-.197-.1191-.0813 0-.1584.0404-.2012.1084-.1842.3-.3619.6063-.5267.9105-.0279.0532-.0343.1171-.0171.1745.0171.0574.0578.1064.1113.1361.0235.0128.0492.0213.0749.0256z" fill="#202850" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m44.5216 81.9987c.0621.0085.1264-.0085.1756-.0468.0471-.0383.0792-.0936.0856-.1532.0065-.0596-.0107-.1213-.0471-.1681-.2355-.2999-.4688-.6105-.6894-.9232-.0727-.1043-.2162-.1277-.3211-.0553-.1049.0723-.1285.2148-.0557.3191.2248.3191.4625.6382.7044.9445.0364.0468.0899.0766.1477.0851z" fill="#202850" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m72.7889 81.8136c-.0407.2787-.0985.5552-.1756.8254 0 .0106-.0021.0213-.0085.0298-.0215.0808-.0471.1595-.0728.2425-.2484.7765-.5653 1.5274-.9485 2.2465-.2976.5701-.623 1.1253-.9763 1.6636-.8242 1.2615-1.7235 2.3358-2.5584 3.1101-.1178.1064-.2313.2085-.3447.3-.1135.0915-.2141.1766-.3212.2574l-.0085.0064c-.2291.1787-.4711.3382-.7258.4765-.471.2532-.8821.3447-1.1904.2468-.06-.0192-.1199-.0447-.1734-.0787-.0728-.0489-.137-.1085-.1863-.1787-.3019-.4085-.2847-1.2062-.0086-2.221.0065-.0212.0129-.0446.0193-.0659v-.0064s0-.0106 0-.017c.0214-.0702.0428-.1425.0664-.2149.3554-1.1381 1.0148-2.506 1.9162-3.8824.9912-1.5168 2.0853-2.7613 3.0551-3.542l.0171-.0149c.0343-.0298.0707-.0575.1071-.083l.0385-.0298c.6873-.5233 1.3017-.8041 1.7513-.7679.1242.0085.2441.0468.349.1127.1242.0851.2227.2042.2805.3425.1392.2978.167.7276.0942 1.2424z" fill="#202850" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m133.337 58.7638-9.634-11.943c-1.567-1.9422-3.939-3.074-6.447-3.0761h-41.2068v.0042c-16.8174 1.7657-26.9099 11.6771-27.306 24.2476-.3832 12.3046 16.539 22.9009 16.539 22.9009l6.986-10.6793s-10.6727-7.0926-10.9061-11.4196c-.259-4.7547 4.3655-9.7816 14.6871-9.8305v27.0429c0 .8722-.0364 1.7529 0 2.6251.0706 1.6061.6787 1.3381 2.0767 1.2828 2.0639-.0808 10.8976 2.2975 13.2269 2.6422.8671.1297 1.7364.2467 2.6056.3531 6.2196.7531 12.5246.8722 18.7396.1149.889-.1085 1.792-.2383 2.591-.6382.798-.3978 1.488-1.1126 1.629-1.9891l-.06-.2787v-18.8568h11.155c1.269 0 2.511-.3765 3.567-1.0807 1.832-1.2253 3.068-3.157 3.399-5.329.334-2.1699-.263-4.3802-1.646-6.0927z" fill="url(#p)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m87.553 89.5125c-.122.3127-.3661.5637-.6765.6999-.3105.1489-.6659.1701-.9913.0617.6573.2531 1.2675.9211.9549 1.7274-.1221.3127-.3661.5658-.6766.6999-.2783.1233-.8285.0595-1.139-.0426-.0192-.0085-.0406-.017-.0599-.0255l-5.9905-2.3103 5.9905 2.3082.0621.0234c.6508.2701.957 1.0126.6851 1.6572-.2719.6467-1.0191.9509-1.6678.6807l-5.9905-2.3103v.0106l5.1748 1.9976c.5802.2234.8435.9339.5909 1.5849-.1156.3085-.3404.5637-.6338.7169-.2697.1468-.5909.1681-.8778.0617l-5.1747-1.9976-.0043.0128-6.333-2.4401c-.8649-.334-1.5607-.9934-1.9333-1.8359-.3746-.8424-.396-1.7997-.0599-2.657l2.1217-5.4333c.3361-.8594.9998-1.5508 1.8477-1.9231.8478-.3723 1.8112-.3936 2.674-.0596l.5952.2298v2.8145l6.7462 2.5422 4.0465 1.5593c.3168.1234.5695.3659.7043.6744.1349.3084.1413.6594.0172.9722z" fill="#ffcdaa" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m80.7145 88.0127c-.1134-.0447-.2419.0064-.2933.117s-1.6357 4.827-.8114 2.4337l5.4766 2.121c.7814.3021 1.6699-.1404 1.8541-.9531.0942-.4127.0171-.8616-.4368-1.2424" fill="url(#q)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m42.9671 79.7437c.0878.0128.1756-.0255.2248-.1.0493-.0744.0514-.168.0064-.2446-.152-.2574-.3018-.517-.4389-.7765-1.4858-2.7719-2.2458-5.8204-2.1966-8.8115.0214-1.287.1905-2.5698.5031-3.8186.03-.1234-.0449-.2468-.167-.2787-.1241-.0297-.2483.0447-.2804.166-.3212 1.2849-.4946 2.5996-.516 3.9228-.0514 3.0676.7258 6.1927 2.2502 9.0348.1413.2638.2933.5319.4496.7999.0364.0575.0984.0958.1648.1043z" fill="#202850" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m77.5973 92.278c-.1134-.0446-.2419.0064-.2933.117-.0514.1107-1.6357 4.827-.8114 2.4337l5.7035 2.1869c.7815.3021 1.5073-.1638 1.6893-.9743.0942-.4127.0364-.8339-.4197-1.2147" fill="url(#r)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m72.4912 82.2668-.9056 2.891-.5031 1.5977-1.2225 3.9058s-.7087-.2319-1.8092-.7297c-.9827-.4425-1.9397-.9403-2.8667-1.4913.3554-1.1381 1.0148-2.506 1.9162-3.8824.9912-1.5168 2.0853-2.7613 3.0551-3.542 1.321.7467 2.3337 1.2487 2.3337 1.2487z" fill="url(#s)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m116.345 71.7555h-12.525c-.128 0-.231-.1021-.231-.2298 0-.1276.103-.2297.231-.2297h12.525c.128 0 .231.1021.231.2297 0 .1277-.103.2298-.231.2298z" fill="#202850" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m103.554 65.8457c.208.5531.381 1.0935.523 1.6083.323 1.1977.458 2.2656.391 3.0123-.051.5701-.201 1.1488-.492 1.2594-.417.1553-1.036-.4616-1.657-1.2722-.544-.7403-1.006-1.538-1.375-2.3783-.156-.3468-.306-.7106-.449-1.0892-.681-1.804-.9978-3.4953-.9186-4.5611.0085-.285.077-.5659.2012-.8233.0664-.134.1777-.2425.3164-.2999.193-.0702.422-.0213.673.1319.302.1851.638.5191.98.9722.628.8254 1.276 2.0358 1.805 3.442z" fill="#202850" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m103.49 65.8457c.208.5532.381 1.0935.523 1.6083.323 1.1977.458 2.2656.391 3.0123-.635 0-1.434-.0127-1.926-.0127h-2.103c-4.5773-.0064-8.735 2.6443-10.6384 6.7798-.1263.2766-.4025.4595-.7086.4681-.3062.0085-.5909-.1575-.7344-.4276-.0728-.1383-.1434-.2787-.2141-.4213-.1006-.2084-.2012-.419-.3019-.6297-.2183-.4744-.4217-.9487-.6037-1.4168-.0921-.2297-.1777-.4573-.2569-.6828-.0792-.2277-.3447-.9722-.3833-1.0786-.0385-.1064-.0899-.2425-.1327-.3595s-.0728-.2128-.1092-.3149l-.1177-.3616c-.1114-.3532-.0964-.7361.0406-1.0807 1.6636-4.1569 6.1767-7.5308 11.861-8.352.4796-.0702.9592-.1191 1.4323-.1489.3554-.0234.704-.034 1.056-.0362.237 0 .644.0064 1.117.0213.627.819 1.276 2.0295 1.805 3.4357z" fill="#ffcdaa" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m100.45 193.767c0 .198-.011.396-.032.594h-14.7921c-.0214-.198-.0321-.394-.0321-.594 0-3.559 3.327-6.437 7.427-6.437 4.0999 0 7.4272 2.883 7.4272 6.437z" fill="url(#t)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m100.196 194.497h-14.3642c-.1349 0-.242-.387-.242-.864 0-.476.1092-.863.242-.863h14.3642c.134 0 .241.387.241.863 0 .477-.109.864-.241.864z" fill="url(#u)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m97.2449 48.1951c-2.3272 0-4.2327-1.8933-4.2327-4.2058v-.7531-4.527c0-2.3124 1.9055-4.2057 4.2327-4.2057s4.2331 1.8933 4.2331 4.2057v2.0912 3.1911c0 2.3124-1.9059 4.2057-4.2331 4.2057z" fill="url(#w)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m93.0122 43.3533s2.8668-4.1271 8.4548-2.021l.049-4.3887-8.5016-.1851v6.5948z" fill="url(#y)" fill-rule="evenodd"></path>
                          <path d="m110.23 28.766c0-6.2459-5.164-13.6087-11.4476-13.6087-6.2837 0-9.8805 6.146-9.8805 12.3897 0 6.2438 3.2028 11.6451 9.9491 12.5259 6.232.8126 11.379-5.0631 11.379-11.3069z" fill="url(#z)"></path>
                          <path clip-rule="evenodd" d="m89.2959 31.1848s.7087 3.6186 3.1194 5.8779c0 0-2.6569-6.5119-.5117-12.3791 1.8455-5.0461-2.6077 6.5033-2.6077 6.5033z" fill="url(#A)" fill-rule="evenodd"></path>
                          <path d="m102.092 31.0997c.591.2489 1.567-.0446 1.567-.836 0-.8807-1.182-.8361-1.182-.8361-.319-.4063-.498-2.3017-.498-2.3017" stroke="#053256" stroke-linecap="round" stroke-miterlimit="10"></path>
                          <path d="m95.8687 25.0665s1.4772-1.0381 2.9866-.6999" stroke="#053256" stroke-linecap="round" stroke-miterlimit="10"></path>
                          <path d="m105.681 24.1412s1.781.1234 2.567.9254" stroke="#053256" stroke-linecap="round" stroke-miterlimit="10"></path>
                          <path d="m98.095 27.9895c.4198 0 .7601-.3381.7601-.7552s-.3403-.7552-.7601-.7552-.76.3381-.76.7552.3402.7552.76.7552z" fill="#053256"></path>
                          <path d="m106.659 28.1554c.42 0 .76-.3381.76-.7552s-.34-.7552-.76-.7552-.76.3381-.76.7552.34.7552.76.7552z" fill="#053256"></path>
                          <path d="m94.7767 32.0825c.8962 0 1.6228-.7219 1.6228-1.6125s-.7266-1.6125-1.6228-1.6125c-.8963 0-1.6229.7219-1.6229 1.6125s.7266 1.6125 1.6229 1.6125z" fill="url(#B)" opacity=".2"></path>
                          <path d="m107.419 32.3825c.896 0 1.623-.7219 1.623-1.6125s-.727-1.6125-1.623-1.6125c-.897 0-1.623.7219-1.623 1.6125s.726 1.6125 1.623 1.6125z" fill="url(#C)" opacity=".2"></path>
                          <path d="m95.4531 33.661s4.0486 4.5504 9.2899.802" stroke="#053256" stroke-linecap="round" stroke-miterlimit="10"></path>
                          <path clip-rule="evenodd" d="m90.9164 28.7086c-1.079-.2404-.0706-4.042 5.483-6.5544 6.1446-2.7783 11.2766-.9764 11.2766-.9764s-6.444-5.6333-8.6325-4.2845c-2.3315 1.4381-12.1799 6.2884-10.2937 8.8604 1.8861 2.572 2.1666 2.9549 2.1666 2.9549z" fill="url(#D)" fill-rule="evenodd"></path>
                          <path d="m86.6045 28.2682s-2.7747-8.1903 4.3119-9.6348c0 0 4.6759-.9764-.5802 10.5219 0 0-1.2268-2.5124-3.7338-.8871z" fill="url(#E)"></path>
                          <path d="m90.9165 18.6334s.4089-3.5654 5.9519-3.5654c5.5426 0 5.5426 1.4445 7.9046.3616 2.342-1.0743 5.128 1.2211 4.076 5.7035-.017.0723-.242 1.0892-.278 1.153l-.323-.3808c-.533-.4-.593-.5701-1.283-1.0616-1.1-.7828-2.584-1.921-4.509-1.2636-2.845.9722-4.5599 1.8572-7.8699 1.0892-.1306-.0298-.289-.0808-.4089-.1425-.4753-.2468-.7408-.5234-1.3424.519" fill="url(#F)"></path>
                          <path d="m88.1908 32.9739c1.5052 0 2.7254-1.2125 2.7254-2.7081 0-1.4957-1.2202-2.7081-2.7254-2.7081s-2.7255 1.2124-2.7255 2.7081c0 1.4956 1.2203 2.7081 2.7255 2.7081z" fill="#ffcdaa"></path>
                          <path clip-rule="evenodd" d="m99.9834 124.946-.8906-19.576 18.3542-4.855-14.331 40.252z" fill="url(#G)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m83.5942 184.277 17.4488-14.376.015 12.919s-.327-1.615-4.6543-.396c-4.3269 1.219-5.6522 2.966-12.8095 1.855z" fill="url(#H)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m79.5456 90.3358c-.1135-.0447-.2419.0063-.2933.117-.0514.1106-1.6357 4.8269-.8115 2.4337l5.4766 2.1209c.7815.3021 1.67-.1404 1.8541-.953.0942-.4127.0171-.8616-.4367-1.2424" fill="url(#J)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m95.0505 71.7555s13.0385-.7829 13.4475 11.7429c0 0 1.773 6.5395-4.702 10.0411 0 0 8.262.1064 11.133-.9892s1.932-3.0804 1.932-3.7463v-17.5378l-12.572.0659s-.343.3298-1.97-.8764c0 0-4.3632-.3532-7.2707 1.3019z" fill="url(#K)" fill-rule="evenodd"></path>
                          <g mask="url(#ac)">
                            <g fill="#fff" mask="url(#ad)">
                              <path d="m83.5964 60.7273.9271.9212c.0706.0702.1863.0702.259 0l5.573-5.5375c.0706-.0702.0706-.1872 0-.2574l-.927-.9212c-.0728-.0702-.1863-.0702-.2591 0l-5.573 5.5375c-.0706.0702-.0706.1851 0 .2574z"></path>
                              <path d="m84.7825 54.9345c-.0727-.0702-.1862-.0702-.259 0l-.9271.9212c-.0706.0702-.0706.1851 0 .2574l1.867 1.855 1.1839-1.1764-1.8669-1.8572z"></path>
                              <path d="m90.3533 60.472-1.869-1.8571-1.184 1.1785 1.8691 1.8572c.0706.0702.1862.0702.259 0l.9271-.9211c.0706-.0702.0706-.1873 0-.2575"></path>
                            </g>
                          </g>
                          <path clip-rule="evenodd" d="m92.1431 64.6416s-4.7722 2.1338-6.044 6.682c0 0-.1477.6553.8414 2.4593 0 0 .7858-.7786 1.276-1.8657.4903-1.0892 2.5949-3.8654 5.3589-5.0503 2.764-1.185.5502-2.8167-1.4323-2.2274z" fill="url(#L)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m94.0573 69.3005s-4.935 2.3699-6.2067 6.9203c0 0 .2269 1.4955 1.2439 1.4806 0 0 .5481-.0383 1.0384-1.1253.4902-1.0893 2.5948-3.8654 5.3588-5.0504 2.764-1.1849.5502-2.8166-1.4323-2.2273z" fill="url(#M)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m92.5308 67.1519s-4.6331 1.4828-5.9048 6.0332c0 0 .4753 2.089 1.2567 2.9187 0 0 .2313-.5872.7215-1.6764.4903-1.0892 2.5949-3.8654 5.3589-5.0503s.5502-2.8166-1.4323-2.2273z" fill="url(#N)" fill-rule="evenodd"></path>
                          <path d="m111.314 93.5438h.231v4.2121h-.231c-.154 0-.28-.1255-.28-.2787v-3.6569c0-.1532.126-.2787.28-.2787z" fill="#323230"></path>
                          <path d="m111.323 101.689h.175v8.282h-.175c-.118 0-.212-.093-.212-.21v-7.861c0-.117.094-.211.212-.211z" fill="#323230"></path>
                          <path d="m111.323 112.401h.175v8.277h-.175c-.118 0-.212-.094-.212-.211v-7.854c0-.117.094-.21.212-.21z" fill="#323230"></path>
                          <path d="m111.151 97.4496v-3.608c0-.117.095-.2106.212-.2106h.176v4.0292h-.176c-.117 0-.212-.0936-.212-.2106z" fill="#efefef"></path>
                          <path d="m111.184 109.714v-7.761c0-.093.077-.17.171-.17h.143v8.103h-.143c-.094 0-.171-.077-.171-.17z" fill="#efefef"></path>
                          <path d="m111.184 120.425v-7.775c0-.081.066-.147.147-.147h.167v8.092h-.143c-.094 0-.171-.076-.171-.17z" fill="#efefef"></path>
                          <path d="m111.547 93.7182h-.306v3.8633h.306z" fill="url(#P)"></path>
                          <path d="m111.383 101.911h.115v7.879h-.115c-.077 0-.139-.061-.139-.138v-7.605c0-.077.062-.138.139-.138z" fill="url(#Q)"></path>
                          <path d="m111.383 112.62h.115v7.879h-.115c-.077 0-.139-.061-.139-.138v-7.605c0-.077.062-.138.139-.138z" fill="url(#R)"></path>
                          <path d="m172.052 96.3455h-.17v-14.7766h.202c.094 0 .171.0766.171.1702v14.4043c0 .1127-.092.2021-.203.2021z" fill="url(#S)"></path>
                          <path d="m121.923 194.169c-3.173 0-5.815-.957-7.639-2.769-1.824-1.813-2.788-4.438-2.788-7.591v-102.5337c0-3.125.94-5.731 2.717-7.5371 1.818-1.8466 4.483-2.823 7.71-2.823h39.334c3.243 0 5.917.9828 7.733 2.8421 1.762 1.804 2.693 4.4057 2.693 7.5202v102.5315c0 3.153-.963 5.778-2.787 7.591-1.825 1.812-4.467 2.769-7.639 2.769z" fill="#4d4d4d"></path>
                          <path d="m121.923 193.997c-3.128 0-5.727-.94-7.517-2.721-1.79-1.778-2.739-4.363-2.739-7.469v-102.5317c0-3.0782.923-5.6438 2.668-7.418 1.784-1.8125 4.408-2.772 7.588-2.772h39.334c3.196 0 5.827.9637 7.609 2.789 1.73 1.7721 2.646 4.3313 2.646 7.401v102.5317c0 3.108-.946 5.691-2.738 7.469-1.79 1.779-4.392 2.721-7.517 2.721z" fill="#fff"></path>
                          <path d="m121.922 193.795c-3.072 0-5.622-.921-7.373-2.661s-2.678-4.274-2.678-7.327v-102.5317c0-3.0251.903-5.5417 2.609-7.2755 1.745-1.7742 4.319-2.7102 7.442-2.7102h39.334c3.139 0 5.721.9424 7.464 2.7272 1.693 1.7338 2.588 4.2441 2.588 7.2607v102.5315c0 3.053-.925 5.587-2.678 7.327-1.751 1.74-4.301 2.661-7.374 2.661h-39.334z" fill="#8a8a8a"></path>
                          <path d="m121.923 193.355c-6.016 0-9.609-3.57-9.609-9.548v-102.5317c0-2.9081.858-5.3162 2.483-6.9692 1.66-1.687 4.124-2.5783 7.126-2.5783h39.334c3.016 0 5.487.8977 7.144 2.5932 1.612 1.6487 2.462 4.0547 2.462 6.9522v102.5318c0 5.978-3.592 9.548-9.609 9.548h-39.333z" fill="url(#T)"></path>
                          <path d="m161.256 71.8512h-39.334c-6.172 0-9.484 3.5676-9.484 9.4241v102.5317c0 5.914 3.545 9.424 9.484 9.424h39.334c5.939 0 9.485-3.51 9.485-9.424v-102.5317c0-5.8565-3.314-9.4241-9.485-9.4241zm7.575 111.9558c0 4.855-2.691 7.527-7.575 7.527h-39.334c-4.885 0-7.574-2.674-7.574-7.527v-102.5317c0-2.4336.657-4.2632 1.907-5.5332 1.272-1.2913 3.163-1.9699 5.667-1.9699h7.817c.334 0 .606.2702.606.602v.6531c0 1.6764 1.368 3.0358 3.055 3.0358h16.379c1.687 0 3.055-1.3594 3.055-3.0358v-.6531c0-.3318.272-.602.606-.602h7.816c2.505 0 4.396.6786 5.668 1.9699 1.25 1.2679 1.907 3.0974 1.907 5.5332z" fill="#000"></path>
                          <g stroke-miterlimit="10">
                            <path d="m137.014 71.7618h9.151v.5064c0 .3361-.274.6105-.615.6105h-7.923c-.339 0-.615-.2723-.615-.6105v-.5064z" stroke="#333" stroke-width=".29"></path>
                            <path d="m145.525 72.6h-7.873c-.167 0-.299-.134-.299-.2978 0-.166.134-.2979.299-.2979h7.873c.167 0 .299.1341.299.2979 0 .1659-.135.2978-.299.2978z" stroke="#262626" stroke-width=".29"></path>
                            <path d="m145.525 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m145.103 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m144.681 72.0023-.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m144.257 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m143.836 72.0023-.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m143.412 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m142.99 72.0023-.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m142.566 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m142.144 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m141.722 72.0023-.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m141.298 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m140.877 72.0023-.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m140.453 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m140.031 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m139.609 72.0023-.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m139.185 72.0023-.421.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m138.763 72.0023-.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m138.34 72.0023-.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m137.918 72.0023-.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m137.498 72.0023.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m137.92 72.0023.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m138.344 72.0023.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m138.766 72.0023.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m139.189 72.0023.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m139.611 72.0023.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m140.033 72.0023.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m140.457 72.0023.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m140.879 72.0023.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m141.303 72.0023.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m141.725 72.0023.421.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m142.146 72.0023.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m142.57 72.0023.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m142.992 72.0023.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m143.416 72.0023.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m143.837 72.0023.424.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m144.262 72.0023.421.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m144.683 72.0023.422.6041" stroke="#262626" stroke-width=".29"></path>
                            <path d="m145.105 72.0023.424.6041" stroke="#262626" stroke-width=".29"></path>
                          </g>
                          <path d="m135.147 75.0082c0 .5509-.449.9998-1.006.9998s-1.006-.4467-1.006-.9998c0-.5532.449-.9999 1.006-.9999s1.006.4467 1.006.9999z" fill="#050505"></path>
                          <path d="m133.42 74.2211h1.49868v1.48914h-1.49868z" fill="url(#a)"></path>
                          <g fill="#cfcfcf" opacity=".6">
                            <path d="m112.314 83.3687h-.82v.7658h.82z"></path>
                            <path d="m171.503 174.728h-1.205v1.125h1.205z"></path>
                          </g>
                          <path clip-rule="evenodd" d="m103.218 65.1692s-.89-3.3208-3.121-3.8696l22.279-.0362s6.699-.5467 6.562 6.9011l-24.454.6085s-.754-2.5699-1.268-3.6038z" fill="url(#U)" fill-rule="evenodd"></path>
                          <path clip-rule="evenodd" d="m114.994 55.7663 1.151 5.5481 5.231-.0659z" fill="url(#V)" fill-rule="evenodd"></path>
                          <path d="m87.3882 31.8529c.8339.369 1.8109-.0037 2.1822-.8323s-.0037-1.7994-.8377-2.1683c-.8339-.3689-1.8109.0037-2.1822.8323-.3712.8286.0038 1.7994.8377 2.1683z" fill="url(#W)"></path>
                          <path d="m87.3837 32.3336c.577 0 1.0448-.4648 1.0448-1.0382 0-.5733-.4678-1.0381-1.0448-1.0381-.5771 0-1.0448.4648-1.0448 1.0381 0 .5734.4677 1.0382 1.0448 1.0382z" fill="#ffcdaa"></path>
                          <path d="m130.168 72.4328-10.348.0848c-.587.0275-1.419.3559-1.983.6482-1.522.788-3.826 3.0228-4.568 7.6661-1.05 6.5773-.591 14.288-.591 14.288s8.336-9.4858 17.49-22.6892z" fill="url(#X)"></path>
                          <path d="m161.066 108.976s.206-2.249.831-2.872c.625-.624 2.918-.873 2.918-.873s-2.252-.234-2.879-.855c-.628-.621-.889-2.872-.889-2.872s-.267 2.253-.893 2.876c-.625.624-2.858.871-2.858.871s2.293.221 2.921.842c.627.621.849 2.883.849 2.883zm-11.462-2.419s.638-6.9801 2.577-8.9181c1.94-1.938 9.063-2.7081 9.063-2.7081s-6.99-.7255-8.941-2.6528c-1.95-1.9274-2.759-8.9115-2.759-8.9115s-.831 6.9883-2.771 8.9264c-1.939 1.938-8.87 2.6996-8.87 2.6996s7.115.6892 9.065 2.6166c1.951 1.9274 2.638 8.9499 2.638 8.9499zm9.08-16.3638s.205-2.2486.83-2.8741c.625-.6233 2.921-.8722 2.921-.8722s-2.253-.234-2.882-.8552c-.627-.6212-.889-2.8698-.889-2.8698s-.267 2.2508-.892 2.8762c-.626.6233-2.857.8701-2.857.8701s2.291.2212 2.921.8424c.627.6212.85 2.8847.85 2.8847z" fill="url(#Y)"></path>
                          <path d="m114.346 130.76 46.911-56.9878s7.574.2681 7.574 7.5032v21.0566l-54.485 67.567z" fill="url(#aa)" opacity=".3"></path>
                          <path d="m110.083 177.972 55.23-68.088v9.501l-55.23 66.754z" fill="url(#ab)" opacity=".3"></path>
                        </svg>
                      </template>
                    </sl-icon>
                    <div class="wf-heading--xs wf-mt--2">Experts Mayday Phone</div>
                    <div class="wf-paragraph--sm wf-mt--1">certifiés.</div>
                </sl-card>
            </div>
          </div>
        </div>
      </section>


    </main>
    @include('reparation.footer')
  </body>
</html>
