<!DOCTYPE html>
<!-- saved from url=(0018)https://wefix.net/ -->
<html lang="en">
  @include('components.head')

  <body x-init="" cz-shortcut-listen="true">
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
                <img src="{{asset('reparation/apple(2).webp')}}" srcset="{{asset('images/navbar/xforce/aside/apple.webp 1.5x')}}" alt="Apple" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers <strong>Apple</strong>
                  </div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>Apple</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection Samsung">
                <img src="{{asset('reparation/samsung(3).webp')}}" srcset="{{asset('images/navbar/xforce/aside/samsung.webp 1.5x')}}" alt="Samsung" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers Samsung</div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>Samsung</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection Xiaomi">
                <img src="{{asset('reparation/xiaomi(1).webp')}}" srcset="{{asset('images/navbar/xforce/aside/xiaomi.webp 1.5x')}}" alt="Xiaomi" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers Xiaomi</div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>Xiaomi</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection Huawei">
                <img src="{{asset('reparation/huawei(3).webp')}}" srcset="{{asset('images/navbar/xforce/aside/huawei.webp 1.5x')}}" alt="Huawei" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers Huawei</div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>Huawei</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection OPPO">
                <img src="{{asset('reparation/oppo(2).webp')}}" srcset="{{asset('images/navbar/xforce/aside/oppo.webp 1.5x')}}" alt="OPPO" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
                <div class="wf-aside__protection-content-card-body">
                  <div class="wf-aside__protection-content-card-body--title">Univers OPPO</div>
                  <div class="wf-aside__protection-content-card-body--subtitle">Protégez vos appareils <span>OPPO</span>
                  </div>
                </div>
                <i class="ci-arrow-right"></i>
              </a>
              <a class="wf-aside__protection-content-card" href="#" aria-label="Protection Google">
                <img src="{{asset('reparation/google(1).webp')}}" srcset="{{asset('images/navbar/xforce/aside/google.webp 1.5x')}}" alt="Google" width="100%" height="100%" loading="lazy" draggable="false" oncontextmenu="return false">
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
      <div class="none" id="spin-data" data-category="Réparer"></div>

      <section class="wf-banner wf-banner--primary sal-animate" role="banner" data-sal="fade-in" data-sal-delay="400" data-sal-duration="400" data-sal-once="">
        <div class="wf-banner-carousel">
          <div class="wf-banner-list">
            <div class="wf-banner-list--item" tabindex="-1">
              <a href="#" aria-label="Effectuez votre réparation en ligne !">
                <picture>
                  <source type="image/webp" srcset="{{asset('reparation/banner-mobile.webp 3840w')}}" media="(max-width: 767px)" width="750" height="750">
                  <img fetchpriority="high" src="{{asset('reparation/bannerdesktop.webp')}}" srcset="{{asset('
                reparation/bannerdesktop 260w,
                reparation/bannerdesktop.webp 828w,
                reparation/bannerdesktop.webp 1080w,
                reparation/bannerdesktop.webp 1200w,
                reparation/bannerdesktop.webp 1920w,
                reparation/bannerdesktop.webp 2048w,
                reparation/bannerdesktop.webp 3840w')}}" alt="-10% sur votre réparation en prenant rendez-vous !" width="3360" height="800" loading="lazy" sizes="100vw" oncontextmenu="return false">
                </picture>
              </a>
            </div>
          </div>
        </div>
      </section>


      <section class="mt-md-5 mt-4">
        <div class="container">
          <div class="wf-speech-bubble">
            <sl-avatar class="wf-avatar wf-avatar--md" image="/images/reparation/yves.webp" label="Yves de WeFix" shape="circle">

            </sl-avatar>
            <div class="wf-speech-bubble--text">Quel type d'appareil souhaitez-vous réparer aujourd'hui ?</div>
          </div>
          <div class="row justify-content-center gx-2 mt-md-5 mt-4">

            @foreach ($typedevices as $typedevice)
                <a class="col-lg-4 col-md-6 col-12" href="{{ route('typedevices.show', $typedevice) }}" aria-label="Réparez votre smartphone !">
                    <div class="animated-icon btn cta-primary d-flex align-items-center justify-content-between w-100 py-3">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('images/'. $typedevice->image )}}" alt="">
                        <span class="ms-2">{{$typedevice->name}}</span>
                    </div>
                    <i class="ci-arrow-right fw-bold me-2"></i>
                    </div>
                </a>
            @endforeach

          </div>
          <div class="mt-5">
            <div class="title-section" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Votre réparation en express. Avec une garantie de 1 an <sup>**</sup>. </div>
            <p class="mt-3">Exigez le meilleur pour votre smartphone, votre tablette ou votre console de jeu en nous confiant sa réparation dans une des nombreuses boutiques de notre réseau. Récupérez votre appareil comme neuf après seulement <strong>1 heure</strong>. </p>
            <div class="alert alert-info d-flex" role="alert">
              <div class="alert-icon">
                <i class="ci-idea" data-sal="slide-up" data-sal-delay="300" data-sal-duration="300"></i>
              </div>
              <div>La durée de la réparation peut être <strong>différente</strong> en fonction du modèle et la panne choisie ! </div>
            </div>
            <p class="mt-3 mb-1">Tous les composants que nous utilisons pour redonner souffle à votre appareil sont rigoureusement testés avant et après la réparation.</p>
            <p>Nous offrons <strong>1 an</strong> de garantie pour toutes les réparations. </p>
            <div class="alert alert-info d-flex" role="alert">
              <div class="alert-icon">
                <i class="ci-idea sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-duration="300"></i>
              </div>
              <div>Nous garantissons nos réparations <strong>1 an</strong> à compter de la restitution de votre appareil après la prestation de nos experts. </div>
            </div>
          </div>
          <div class="my-5">
            <div class="text-center my-4">
              <h1 class="title-section sal-animate" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Nous réparons votre smartphone ! </h1>
            </div>
            <div class="grid" style="--wf-gap: 16px" data-grid="">
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="APPLE">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/APPLE.jpg')}}" alt="APPLE">
                    <div class="name d-none">APPLE</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="SAMSUNG">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/SAMSUNG.jpg')}}" alt="SAMSUNG">
                    <div class="name d-none">SAMSUNG</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="HUAWEI">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/HUAWEI.jpg')}}" alt="HUAWEI">
                    <div class="name d-none">HUAWEI</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="HONOR">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/HONOR.jpg')}}" alt="HONOR">
                    <div class="name d-none">HONOR</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="XIAOMI">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/XIAOMI.jpg')}}" alt="XIAOMI">
                    <div class="name d-none">XIAOMI</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="ALCATEL">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/ALCATEL.jpg')}}" alt="ALCATEL">
                    <div class="name d-none">ALCATEL</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="ASUS">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/ASUS.jpg')}}" alt="ASUS">
                    <div class="name d-none">ASUS</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="BLACKBERRY">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/BLACKBERRY.jpg')}}" alt="BLACKBERRY">
                    <div class="name d-none">BLACKBERRY</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="CROSSCALL">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/CROSSCALL.jpg')}}" alt="CROSSCALL">
                    <div class="name d-none">CROSSCALL</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="GOOGLE">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/GOOGLE.jpg')}}" alt="GOOGLE">
                    <div class="name d-none">GOOGLE</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="HTC">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/HTC.jpg')}}" alt="HTC">
                    <div class="name d-none">HTC</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6 sal-animate" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="LEECO">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/LEECO.jpg')}}" alt="LEECO">
                    <div class="name d-none">LEECO</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="LG">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/LG.jpg')}}" alt="LG">
                    <div class="name d-none">LG</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="MEIZU">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/MEIZU.jpg')}}" alt="MEIZU">
                    <div class="name d-none">MEIZU</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="MOTOROLA">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/MOTOROLA.jpg')}}" alt="MOTOROLA">
                    <div class="name d-none">MOTOROLA</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="NOKIA">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/NOKIA.jpg')}}" alt="NOKIA">
                    <div class="name d-none">NOKIA</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="ONEPLUS">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/ONEPLUS.jpg')}}" alt="ONEPLUS">
                    <div class="name d-none">ONEPLUS</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="OPPO">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/OPPO.jpg')}}" alt="OPPO">
                    <div class="name d-none">OPPO</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="SONY">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/SONY.jpg')}}" alt="SONY">
                    <div class="name d-none">SONY</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="UMIDIGI">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/UMIDIGI.jpg')}}" alt="UMIDIGI">
                    <div class="name d-none">UMIDIGI</div>
                  </div>
                </a>
              </div>
              <div class="g-col-lg-2 g-col-md-3 g-col-sm-4 g-col-6" data-grid-item="" data-sal="slide-up" data-sal-delay="200" data-sal-duration="200">
                <a class="card product-card pb-0 border rounded-3" href="#" aria-label="WIKO">
                  <div class="card-body">
                    <img class="p-md-3 p-1" src="{{asset('reparation/WIKO.jpg')}}" alt="WIKO">
                    <div class="name d-none">WIKO</div>
                  </div>
                </a>
              </div>
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
      <section class="container mt-5 mb-3">
        <p class="text-muted fs-sm">
          <sup>*</sup>Réduction de 10% applicable sur la réparation la plus chère de la prestation réservée via une prise de rendez-vous sur le site <a class="wf-decoration--underline" href="#">wefix.net</a>. Sous réserve que la réparation soit effectuée dans le point de vente et à l’heure choisie lors de la prise de rendez-vous. WeFix se réserve le droit d’annuler le rendez-vous à tout moment. Offre non cumulable avec une autre offre.
        </p>
        <p class="text-muted fs-sm mt-1">
          <sup>**</sup>La garantie est de <strong>3 mois</strong> pour le changement de batterie.
        </p>
      </section>
    </main>

    @include('components.footer')
    @include('components.footer-scripts')
  </body>
</html>
