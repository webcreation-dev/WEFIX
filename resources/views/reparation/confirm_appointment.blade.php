<!DOCTYPE html>
<html lang="en">
  @include('components.head')

  <body x-init="" cz-shortcut-listen="true" style="padding-top: 87px;">
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC998KW" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
    <main class="wrapper">
        @livewire('header-controller')
      <div class="text-center w-100">
        <div data-rdv-animation="">

          <img src="{{asset('images/téléchargement.png')}}" alt="" width="100">
        </div>
      </div>




      <h1 class="title-section text-center" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">
        <span class="text-shadow">{{ $quoteData['appointment'][0]['surname'] }}</span>, votre rendez-vous est confirmé !
      </h1>
      <section class="container mt-4">
        <div class="grid">
          <div class="g-col-lg-7 g-col-12">
            <p class="mt-3">
              <strong>{{ $quoteData['appointment'][0]['surname'] }}</strong>, nous vous attendons avec impatience le <strong>{{ $quoteData['schedule'][0]['day'] }} {{ $quoteData['schedule'][0]['date'] }} {{ date('Y') }}</strong> à <strong>{{ $quoteData['schedule'][0]['hour'] }}</strong>, dans la boutique <strong>{{ $quoteData['store'][0]['name'] }}</strong>, pour la réparation de votre <strong>{{ $quoteData['model']->name }}</strong> !
            </p>
            <alert class="mb-3" role="alert" data-other-pannes-alert="">
              <span>Votre téléphone ou tablette devra être <strong>dé-géolocalisé(e), sauvegardé(e) et la synchronisation de vos comptes désactivées</strong> ! </span>
            </alert>
            <div class="my-md-5 my-4">
              <div class="title-section fs-lg text-center" data-sal="slide-up" data-sal-delay="600" data-sal-duration="300">Ajouter le rendez-vous dans mon agenda&nbsp;:</div>
              <div class="d-flex flex-md-row flex-column justify-content-md-evenly mt-3">
                <a class="btn-market btn-apple" href="#" aria-label="Ajouter votre rendez-vous à Apple Calendar !">
                  <span class="btn-market-subtitle">Ajouter à</span>
                  <span class="btn-market-title">Apple Calendar</span>
                </a>
                <a class="btn-market btn-google-agenda mt-md-0 mt-3" href="#" aria-label="Ajouter votre rendez-vous à Google Agenda !" target="_blank" rel="noopener noreferrer">
                  <span class="btn-market-subtitle">Ajouter à</span>
                  <span class="btn-market-title">Google Agenda</span>
                </a>
                <a class="btn-market btn-outlook-calendar mt-md-0 mt-3" href="#" aria-label="Ajouter votre rendez-vous à Outlook Calendar !" target="_blank" rel="noopener noreferrer">
                  <span class="btn-market-subtitle">Ajouter à</span>
                  <span class="btn-market-title">Outlook Calendar</span>
                </a>
              </div>
            </div>
            <p class="mt-3">Un mail de confirmation vous a été envoyé, contenant toutes les informations nécessaires à votre venue. Un SMS de confirmation vous a également été envoyé. <br> Un peu de patience, la réception du mail peut parfois prendre quelques minutes. </p>
            <sl-button class="wf-button wf-button--primary wf-mt--3" href="/" aria-label="Retourner sur la page principale !" size="large" variant="default" data-optional="" data-valid="">
              Retourner à l'accueil
            </sl-button>
          </div>



          <div class="g-col-lg-5 g-col-12 ps-xl-5 mt-lg-0 mt-3">
            <div class="p-4 h-100 ms-auto border-start">
              <div class="widget px-lg-2 py-2 mb-3">
                <div class="title-section fs-lg fw-bold widget-title text-center">Détails de votre rendez-vous</div>
                <div class="d-flex justify-content-between align-items-center p-2 border-bottom">
                  <div>
                    <div class="widget-product-title title-section fs-md fw-bold">{{ $quoteData['appointment'][0]['name'] }} {{ $quoteData['appointment'][0]['surname'] }}</div>
                    <div class="widget-product-meta fs-14">{{ $quoteData['appointment'][0]['mail'] }}</div>
                  </div>
                  <i class="ci-user fs-22 text-primary"></i>
                </div>
                <div class="d-flex justify-content-between align-items-center p-2 border-bottom">
                  <div>
                    <div class="widget-product-title title-section fs-md fw-bold">{{ $quoteData['store'][0]['name'] }}</div>
                    <div class="widget-product-meta fs-14">{{ $quoteData['store'][0]['address'] }}</div>
                  </div>
                  <i class="ci-map fs-22 text-primary"></i>
                </div>
                <div class="d-flex justify-content-between align-items-center p-2 border-bottom">
                  <div>
                    <div class="widget-product-title title-section fs-md fw-bold">créneau à {{ $quoteData['schedule'][0]['hour'] }}</div>
                    <div class="widget-product-meta fs-14">{{ $quoteData['schedule'][0]['day'] }} {{ $quoteData['schedule'][0]['date'] }} {{ date('Y') }}</div>
                  </div>
                  <i class="ci-time fs-22 text-primary"></i>
                </div>

                <div class="d-flex align-items-center py-2 border-bottom">
                  <img src="{{asset('reparation/'. $quoteData['model']->image )}}" alt="" width="64">
                  <div class="ps-2">
                    <div class="widget-product-meta fs-14 mb-1">HTC</div>
                    <div class="widget-product-title title-section fs-lg fw-bold">{{$quoteData['model']->name}}</div>
                  </div>
                </div>

                @foreach ($failures as $failure)
                    <div class="d-flex justify-content-between align-items-center p-2 border-bottom">
                    <div class="d-flex align-items-center me-2">
                        <img class="rounded-1" src="{{asset('reparation/'. $failure->image)}}" srcset="https://intranet.wefix.net/WB/services/restauration.webp 1.5x" alt="Restauration effacement des données" width="35">
                        <div class="d-flex-flex-column ms-2">
                        <div>
                            <span class="widget-product-title title-section fw-medium fs-16 mb-0"> {{ $failure->name}} </span>
                            <span class="badge rounded-pill bg-green ms-2">-{{ $failure->reduction}}%</span>
                        </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <s class="text-grey fw-medium">{{ $failure->price}}€</s>
                        <div class="title-section fw-bold text-green fs-16">{{ $failure->reduction_price}}€</div>
                    </div>
                    </div>
                @endforeach


                <ul class="list-unstyled fs-sm pt-3 pb-2 border-bottom" role="list">
                  <li class="d-flex justify-content-between align-items-center">
                    <div class="widget-product-meta fs-md me-2">Sous-total :</div>
                    <div class="title-section fw-bold text-dark fs-lg">{{$quoteData['notDiscountPrice']}}€</div>
                  </li>
                  <li class="d-flex justify-content-between align-items-center pt-1">
                    <div class="widget-product-meta fs-md text-green me-2">Remises :</div>
                    <div class="title-section fw-bold text-green fs-lg">{{ intval(substr($quoteData['notDiscountPrice'], 0, -1)) - intval(substr($quoteData['discountPrice'], 0, -1))}}€</div>
                  </li>
                </ul>
                <div class="title-section text-center text-primary my-4">
                  <span class="fw-medium text-dark fs-md">Votre total:</span> {{$quoteData['discountPrice']}}
                </div>
                <p class="text-muted fs-sm mt-3">
                  <sup>*</sup>Réduction de 10% applicable sur la réparation la plus chère de la prestation réservée via une prise de rendez-vous sur le site <a class="wf-decoration--underline" href="#">wefix.net</a>. Sous réserve que la réparation soit effectuée dans le point de vente et a l’heure choisie lors de la prise de rendez-vous. WeFix se réserve le droit d’annuler le rendez-vous à tout moment. Offre non cumulable avec une autre offre.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-3 mb-5" id="prepare-reparation">
          <div class="col-md-7 col-12">
            <div class="card border-0 shadow mt-lg-4">
              <div class="card-body fs-lg mb-n2">
                <p>Réparer c'est prolonger la vie de tous vos appareils high-tech. Déjà <strong>200 tonnes</strong> de déchets électroniques ont été évitées grâce à celles et ceux qui comme vous, ont adopté le réflexe WeFix. </p>
                <p class="mt-2 text-center fw-bolder fs-18 text-primary">Vous en faites partie, merci beaucoup !</p>
              </div>
              <sl-avatar class="mx-auto mb-n4 wf-avatar wf-avatar--md" image="/images/reparation/yves.webp" label="Yves de WeFix" shape="circle">

              </sl-avatar>
            </div>
          </div>
        </div>
      </section>
      <section class="wf-container--default mt-5">
        <div class="wf-engagements wf-mt--5 wf-mb--3">
          <div class="wf-heading--md">Les <span>engagements</span> de WeFix </div>
          <div class="wf-paragraph--md">Chaque mois, c’est plus de <strong>30000 réparations</strong> qui sont assurées par les techniciens <strong>WeFix</strong> ! 👍 </div>
          <div class="wf-engagements-snap wf-mt--3">
            <div class="wf-engagements-grid">
              <sl-card class="wf-card">

                <sl-icon library="wefix" name="engagement-express" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg">
                      <lineargradient id="a" gradientTransform="matrix(.70710678 -.70710678 .70710678 .70710678 -99.13 259.34)" gradientUnits="userSpaceOnUse" x1="246.87" x2="282.4" y1="236.01" y2="264.49">
                        <stop offset="0" stop-color="#4d5868"></stop>
                        <stop offset="1" stop-color="#2f3a4d"></stop>
                      </lineargradient>
                      <lineargradient id="b" gradientTransform="matrix(.70710678 .70710678 -.70710678 .70710678 368.51 -290.47)" x1="476.27" x2="518.1" xlink:href="#" y1="294.87" y2="253.04"></lineargradient>
                      <lineargradient id="c" gradientUnits="userSpaceOnUse" x1="398.11" x2="398.11" y1="243.63" y2="160.11">
                        <stop offset="0" stop-color="#8f959f"></stop>
                        <stop offset=".2" stop-color="#737a87"></stop>
                        <stop offset=".56" stop-color="#454f60"></stop>
                        <stop offset=".84" stop-color="#283448"></stop>
                        <stop offset=".99" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <lineargradient id="d" gradientTransform="matrix(-.91390005 .40593927 -.40593927 -.91390005 894.81 612.25)" x1="363.97" x2="363.97" xlink:href="#" y1="595.73" y2="212.58"></lineargradient>
                      <lineargradient id="e" gradientUnits="userSpaceOnUse" x1="307.66" x2="490.86" y1="325.46" y2="519.76">
                        <stop offset=".09" stop-color="#ff8f33"></stop>
                        <stop offset="1" stop-color="#1d57c4"></stop>
                      </lineargradient>
                      <filter id="f" filterUnits="userSpaceOnUse">
                        <feoffset dx="1.83" dy="1.83"></feoffset>
                        <fegaussianblur result="blur" stdDeviation="10.34"></fegaussianblur>
                        <feflood flood-opacity=".36"></feflood>
                        <fecomposite in2="blur" operator="in"></fecomposite>
                        <fecomposite in="SourceGraphic"></fecomposite>
                      </filter>
                      <lineargradient id="g" gradientUnits="userSpaceOnUse" x1="118.1" x2="177.83" y1="345.54" y2="285.81">
                        <stop offset="0" stop-color="#1d57c4"></stop>
                        <stop offset=".37" stop-color="#ff750c"></stop>
                        <stop offset="1" stop-color="#ff942b"></stop>
                      </lineargradient>
                      <lineargradient id="h" x1="80.52" x2="155.21" xlink:href="#" y1="404.61" y2="329.92"></lineargradient>
                      <lineargradient id="i" x1="102.97" x2="162.69" xlink:href="#" y1="447.35" y2="387.62"></lineargradient>
                      <lineargradient id="j" x1="129.33" x2="176.76" xlink:href="#" y1="493.82" y2="446.4"></lineargradient>
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
                            <image height="247" transform="matrix(1.04 0 0 1.04 192.8 240.21)" width="1280" xlink:href="#"></image>
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

                <sl-icon library="wefix" name="engagement-garantie" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg">
                      <lineargradient id="a" gradientUnits="userSpaceOnUse" x1="208.33" x2="328.78" y1="593.33" y2="414.77">
                        <stop offset="0" stop-color="#444e5f"></stop>
                        <stop offset=".6" stop-color="#293549"></stop>
                        <stop offset="1" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <lineargradient id="b" x1="450.77" x2="413.61" xlink:href="#" y1="612.02" y2="401.28"></lineargradient>
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
                      <lineargradient id="e" gradientTransform="matrix(-.99679286 -.08002495 -.08002495 .99679286 753.75 15.95)" x1="297.57" x2="336.61" xlink:href="#" y1="467.94" y2="410.06"></lineargradient>
                      <filter id="f" filterUnits="userSpaceOnUse">
                        <feoffset dx="-3" dy="10"></feoffset>
                        <fegaussianblur result="blur-2" stdDeviation="9.25"></fegaussianblur>
                        <feflood flood-opacity=".46"></feflood>
                        <fecomposite in2="blur-2" operator="in"></fecomposite>
                        <fecomposite in="SourceGraphic"></fecomposite>
                      </filter>
                      <lineargradient id="g" gradientTransform="matrix(0 1 -1 0 514.27 60.68)" gradientUnits="userSpaceOnUse" x1="23.1" x2="418.46" y1="164.27" y2="164.27">
                        <stop offset="0" stop-color="#ff822b"></stop>
                        <stop offset="1" stop-color="#1d57c4"></stop>
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
                      <lineargradient id="f" gradientTransform="matrix(0 1 -1 0 840.05 -268.12)" x1="479.34" x2="528.8" xlink:href="#" y1="605.05" y2="605.05"></lineargradient>
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
                      <lineargradient id="i" x1="382.22" x2="405.5" xlink:href="#"></lineargradient>
                      <lineargradient id="j" gradientTransform="matrix(.86847764 -.05144497 .06031479 1.01821517 61.69 26.55)" gradientUnits="userSpaceOnUse" x1="198.38" x2="282.57" y1="197.2" y2="88.73">
                        <stop offset="0" stop-color="#444e5f"></stop>
                        <stop offset=".08" stop-color="#3d4859"></stop>
                        <stop offset=".36" stop-color="#2b374a"></stop>
                        <stop offset=".65" stop-color="#212e41"></stop>
                        <stop offset="1" stop-color="#1e2b3f"></stop>
                      </lineargradient>
                      <lineargradient id="k" gradientTransform="matrix(-.28211856 -.91761055 1.07054564 -.32913832 702.87 886.25)" x1="785.86" x2="849.65" xlink:href="#" y1="-99.47" y2="-40.65"></lineargradient>
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
    </main>

    @include('components.footer')
    @include('components.footer-scripts')

  </body>
</html>
