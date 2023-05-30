<!DOCTYPE html>
<!-- saved from url=(0018)https://Mayday Phone.net/ -->
<html lang="en">
  @include('components.head')

  <body x-init="" cz-shortcut-listen="true">
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC998KW" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
    <main class="wrapper">
        @livewire('header-controller')

      <section class="wf-banner wf-banner--primary sal-animate" role="banner" data-sal="fade-in" data-sal-delay="400" data-sal-duration="400" data-sal-once="">
        <div class="wf-banner-carousel swiper swiper-initialized swiper-horizontal swiper-backface-hidden" id="banners">
          <div class="wf-banner-list swiper-wrapper" style="transform: translate3d(-1161px, 0px, 0px); transition-duration: 900ms;">

            <div class="wf-banner-list--item swiper-slide swiper-slide-active" tabindex="-1" style="width: 357px; margin-right: 30px;" data-swiper-slide-index="2">
                <a href="#" aria-label="-10% sur votre réparation en prenant rendez-vous !">
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

            <div class="wf-banner-list--item swiper-slide swiper-slide-next" tabindex="-1" style="width: 357px; margin-right: 30px;" data-swiper-slide-index="1">
              <a href="#" aria-label="Deezer vous offre 4 mois d&#39;abonnement pour tout achat chez Mayday Phone">

                  <picture>
                    <source type="image/webp" srcset="{{asset('reparation/banner-mobile4.webp 3840w')}}" media="(max-width: 767px)" width="750" height="750">
                    <img fetchpriority="high" src="{{asset('reparation/bannerdesktop4.webp')}}" srcset="{{asset('
                  reparation/bannerdesktop4.webp 260w,
                  reparation/bannerdesktop4.webp 828w,
                  reparation/bannerdesktop4.webp 1080w,
                  reparation/bannerdesktop4.webp 1200w,
                  reparation/bannerdesktop4.webp 1920w,
                  reparation/bannerdesktop4.webp 2048w,
                  reparation/bannerdesktop4.webp 3840w')}}" alt="-10% sur votre réparation en prenant rendez-vous !" width="3360" height="800" loading="lazy" sizes="100vw" oncontextmenu="return false">
                  </picture>
              </a>
            </div>

            <div class="wf-banner-list--item swiper-slide" tabindex="-1" style="width: 357px; margin-right: 30px;" data-swiper-slide-index="2">
              <a href="#" aria-label="Réparer votre smartphone !">
                <picture>
                    <source type="image/webp" srcset="{{asset('reparation/banner-mobile1.webp 3840w')}}" media="(max-width: 767px)" width="750" height="750">
                    <img fetchpriority="high" src="{{asset('reparation/bannerdesktop1.webp')}}" srcset="{{asset('
                  reparation/bannerdesktop1.webp 260w,
                  reparation/bannerdesktop1.webp 828w,
                  reparation/bannerdesktop1.webp 1080w,
                  reparation/bannerdesktop1.webp 1200w,
                  reparation/bannerdesktop1.webp 1920w,
                  reparation/bannerdesktop1.webp 2048w,
                  reparation/bannerdesktop1.webp 3840w')}}" alt="-10% sur votre réparation en prenant rendez-vous !" width="3360" height="800" loading="lazy" sizes="100vw" oncontextmenu="return false">
                  </picture>
              </a>
            </div>


            <div class="wf-banner-list--item swiper-slide swiper-slide-prev" tabindex="-1" style="width: 357px; margin-right: 30px;" data-swiper-slide-index="3">
              <a href="#" aria-label="Protégez vos appareils !">
                <picture>
                    <source type="image/webp" srcset="{{asset('reparation/banner-mobile2.webp 3840w')}}" media="(max-width: 767px)" width="750" height="750">
                    <img fetchpriority="high" src="{{asset('reparation/bannerdesktop2.webp')}}" srcset="{{asset('
                  reparation/bannerdesktop2.webp 260w,
                  reparation/bannerdesktop2.webp 828w,
                  reparation/bannerdesktop2.webp 1080w,
                  reparation/bannerdesktop2.webp 1200w,
                  reparation/bannerdesktop2.webp 1920w,
                  reparation/bannerdesktop2.webp 2048w,
                  reparation/bannerdesktop2.webp 3840w')}}" alt="-10% sur votre réparation en prenant rendez-vous !" width="3360" height="800" loading="lazy" sizes="100vw" oncontextmenu="return false">
                  </picture>
              </a>
            </div>


            <div class="wf-banner-list--item swiper-slide " tabindex="-1" style="width: 357px; margin-right: 30px;" data-swiper-slide-index="0">
              <a href="#" aria-label="-10% sur votre réparation en prenant rendez-vous !">
                <picture>
                    <source type="image/webp" srcset="{{asset('reparation/banner-mobile2.webp 3840w')}}" media="(max-width: 767px)" width="750" height="750">
                    <img fetchpriority="high" src="{{asset('reparation/bannerdesktop3.webp')}}" srcset="{{asset('
                  reparation/bannerdesktop3.webp 260w,
                  reparation/bannerdesktop3.webp 828w,
                  reparation/bannerdesktop3.webp 1080w,
                  reparation/bannerdesktop3.webp 1200w,
                  reparation/bannerdesktop3.webp 1920w,
                  reparation/bannerdesktop3.webp 2048w,
                  reparation/bannerdesktop3.webp 3840w')}}" alt="-10% sur votre réparation en prenant rendez-vous !" width="3360" height="800" loading="lazy" sizes="100vw" oncontextmenu="return false">
                  </picture>
              </a>
            </div>

          </div>
          <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal">
            <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
            <span class="swiper-pagination-bullet"></span>
            <span class="swiper-pagination-bullet"></span>
            <span class="swiper-pagination-bullet"></span>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </section>

      <section class="wf-container--default" role="main">
        <div class="wf-snap wf-snap-univers wf-mt--3">
          <div class="wf-heading--md sal-animate" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Découvrez <span>l'univers Mayday Phone</span> ! </div>
          <div class="wf-snap-univers-scrollable">
            <div class="wf-snap-univers-grid">
              <sl-card class="wf-card wf-card-univers-repair">
                <template shadowrootmode="open">
                  <!---->
                  <div part="base" class=" card ">
                    <slot name="image" part="image" class="card__image"></slot>
                    <slot name="header" part="header" class="card__header"></slot>
                    <slot name="footer" part="footer" class="card__footer"></slot>
                  </div>
                </template>
                <div class="wf-card-univers-repair--image">
                  <img decoding="async" fetchpriority="high" src="{{asset('layout/reparation.webp')}}" srcset="{{asset('images/reparation.webp')}}" alt="Réparez votre smartphone !" draggable="false" oncontextmenu="return false">
                </div>
                <div>
                  <div class="wf-heading--xs">Réparation</div>
                  <div class="wf-heading--xs wf-weight--normal">smartphones</div>
                  <sl-button class="wf-button wf-button--primary wf-mt--2" href="#" aria-label="Réparez votre smartphone !" size="medium" variant="default" data-optional="" data-valid="">
                    Réparer !
                  </sl-button>
                </div>
              </sl-card>
              <sl-card class="wf-card wf-card-univers-xforce">
                <template shadowrootmode="open">
                  <!---->
                  <div part="base" class=" card ">
                    <slot name="image" part="image" class="card__image"></slot>
                    <slot name="header" part="header" class="card__header"></slot>
                    <slot name="footer" part="footer" class="card__footer"></slot>
                  </div>
                </template>
                <div class="wf-card-univers-xforce--image">
                  <img decoding="async" fetchpriority="high" src="{{asset('layout/xforce.webp')}}" srcset="{{asset('images/xforce.webp')}}" alt="Protégez votre smartphone !" draggable="false" oncontextmenu="return false">
                </div>
                <div>
                  <div class="wf-heading--xs">Protections</div>
                  <div class="wf-heading--xs wf-weight--normal">XFORCE</div>
                  <sl-button class="wf-button wf-button--primary wf-mt--2" href="#" aria-label="Protégez votre smartphone !" size="medium" variant="default" data-optional="" data-valid="">
                    Protéger !
                  </sl-button>
                </div>
              </sl-card>
              <sl-card class="wf-card wf-card-univers-recos">
                <template shadowrootmode="open">
                  <!---->
                  <div part="base" class=" card ">
                    <slot name="image" part="image" class="card__image"></slot>
                    <slot name="header" part="header" class="card__header"></slot>
                    <slot name="footer" part="footer" class="card__footer"></slot>
                  </div>
                </template>
                <div class="wf-card-univers-recos--image">
                  <img decoding="async" fetchpriority="high" src="{{asset('layout/recos.webp')}}" srcset="{{asset('images/recos.webp')}}" alt="Découvrez les reconditionnés par Mayday Phone !" draggable="false" oncontextmenu="return false">
                </div>
                <div>
                  <div class="wf-heading--xs">Smartphones</div>
                  <div class="wf-heading--xs wf-weight--normal">reconditionnés</div>
                  <sl-button class="wf-button wf-button--primary wf-mt--2" href="#" aria-label="Découvrez les reconditionnés par Mayday Phone !" size="medium" variant="default" data-optional="" data-valid="">
                    Découvrir !
                  </sl-button>
                </div>
              </sl-card>
            </div>
          </div>
        </div>
      </section>
      <section class="wf-container--default wf-engagements-assurance wf-mt--5">
        <div class="wf-heading--md">Réparation express. <span>Garantie 1 an</span>
        </div>
        <div class="wf-paragraph--md">Nos experts réparent 98% des pannes en 1 heure en moyenne : écran, batterie, façade arrière, etc. </div>
        <div class="wf-engagements-assurance-snap wf-mt--3">
          <div class="wf-engagements-assurance-grid">
            <sl-card class="wf-card">

              <sl-icon library="Mayday Phone" name="assurance-fnac" style="font-size: 8rem" aria-hidden="true">
                <template shadowrootmode="open">
                  <!---->
                  <svg fill="none" height="117" viewBox="0 0 284 117" width="284" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg"><pattern id="a" height="1" patternContentUnits="objectBoundingBox" width="1"><image height="1421" transform="matrix(.00029053 0 0 .00070522 0 -.001055)" width="3442" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAADXIAAAWNCAYAAADytUwRAAAACXBIWXMAABcRAAAXEQHKJvM/AAAgAElEQVR4nOzbMQEAIADDMMC/56GiXyKhf++2AwAAAAAAAAAAAAAAAEDnaQsAAAAAAAAAAAAAAADQMnIBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAAAAAAAAAAAEDMyAUAAAAAAAAAAAAAAAAQM3IBAAAAAAAAAAAAAAAAxIxcAAAAAAAAAAAAAAAAADEjFwAAAAAA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AAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAAAAAAAAAAAAAQEzIBQAAAAAAAAAAAAAAABATcgEAAAAAAAAAAAAAAADEhFwAAAAAAAAAAAAAAAAAMSEXAAAAvNu3YwIAAACEQfZPbYp90AMAAAAAAAAAAACIiVwAAAAAAAAAAAAAAAAAMZELAAAAAAAAAAAAAAAAICZyAQAAAAAAAAAAAAAAAMRELgAAAAAAAAAAAAAAAICYyAUAAAAAAAAAAAAAAAAQE7kAAAAAAAAAAAAAAAAAYiIXAAAAAAAAAAAAAAAAQEzkAgAAAAAAAAAAAAAAAIiJXAAAAAAAAAAAAAAAAAAxkQsAAAAAAAAAAAAAAAAgJnIBAAAAAAAAAAAAAAAAxEQuAAAAAAAAAAAAAAAAgJjIBQAAAAAAAAAAAAAAABATuQAAAAAAAAAAAAAAAABiIhcAAAAAAAAAAAAAAABATOQCAAAAAAAAAAAAAAAAiIlcAAAAAAAAAAAAAAAAADGRCwAAAAAAAAAAAAAAACAmcgEAAAAAAAAAAAAAAADERC4AAAAAAAAAAAAAAACAmMgFAAAAAAAAAAAAAAAAEBO5AAAAAAAAAAAAAAAAAGIiFwAAAAAAAAAAAAAAAEBM5AIAAAAAAAAAAAAAAACIiVwAAAAAAAAAAAAAAAAAMZELAAAAAAAAAAAAAAAAICZyAQAAAAAAAAAAAAAAAMRELgAAAAAAAAAAAAAAAICYyAUAAAAAAAAAAAAAAAAQE7kAAAAAAAAAAAAAAAAAYiIXAAAAAAAAAAAAAAAAQEzkAgAAAAAAAAAAAAAAAIiJXAAAAAAAAAAAAAAAAAAxkQsAAAAAAAAAAAAAAAAgJnIBAAAAAAAAAAAAAAAAxEQuAAAAAAAAAAAAAAAAgJjIBQAAAAAAAAAAAAAAABATuQAAAAAAAAAAAAAAAABiIhcAAAAAAAAAAAAAAABATOQCAAAAAAAAAAAAAAAAiIlcAAAAAAAAAAAAAAAAADGRCwAAAAAAAAAAAAAAACAmcgEAAAAAAAAAAAAAAADERC4AAAAAAAAAAAAAAACAmMgFAAAAAAAAAAAAAAAAEBO5AAAAAAAAAAAAAAAAAGIiFwAAAAAAAAAAAAAAAEBM5AIAAAAAAAAAAAAAAACIiVwAAAAAAAAAAAAAAAAAMZELAAAAAAAAAAAAAAAAICZyAQAAAAAAAAAAAAAAAMRELgAAAAAAAAAAAAAAAICYyAUAAAAAAAAAAAAAAAAQE7kAAAAAAAAAAAAAAAAAYiIXAAAAAAAAAAAAAAAAQEzkAgAAAAAAAAAAAAAAAIiJXAAAAAAAAAAAAAAAAAAxkQsAAAAAAAAAAAAAAAAgJnIBAAAAAAAAAAAAAAAAxEQuAAAAAAAAAAAAAAAAgJjIBQAAAAAAAAAAAAAAABATuQAAAAAAAAAAAAAAAABiIhcAAAAAAAAAAAAAAABATOQCAAAAAAAAAAAAAAAAiIlcAAAAAAAAAAAAAAAAADGRCwAAAAAAAAAAAAAAACAmcgEAAAAAAAAAAAAAAADERC4AAAAAAAAAAAAAAACAmMgFAAAAAAAAAAAAAAAAEBO5AAAAAAAAAAAAAAAAAGIiFwAAAAAAAAAAAAAAAEBM5AIAAAAAAAAAAAAAAACIiVwAAAAAAAAAAAAAAAAAMZELAAAAAAAAAAAAAAAAICZyAQAAAAAAAAAAAAAAAMRELgAAAAAAAAAAAAAAAICYyAUAAAAAAAAAAAAAAAAQE7kAAAAAAAAAAAAAAAAAYiIXAAAAAAAAAAAAAAAAQEzkAgAAAAAAAAAAAAAAAIiJXAAAAAAAAAAAAAAAAAAxkQsAAAAAAAAAAAAAAAAgJnIBAAAAAAAAAAAAAAAAxEQuAAAAAAAAAAAAAAAAgJjIBQAAAAAAAAAAAAAAABATuQAAAAAAAAAAAAAAAABiIhcAAAAAAAAAAAAAAABATOQCAAAAAAAAAAAAAAAAiIlcAAAAAAAAAAAAAAAAADGRCwAAAAAAAAAAAAAAACAmcgEAAAAAAAAAAAAAAADERC4AAAAAAAAAAAAAAACAmMgFAAAAAAAAAAAAAAAAEBO5AAAAAAAAAAAAAAAAAGIiFwAAAAAAAAAAAAAAAEBM5AIAAAAAAAAAAAAAAACIiVwAAAAAAAAAAAAAAAAAMZELAAAAAAAAAAAAAAAAICZyAQAAAAAAAAAAAAAAAMRELgAAAAAAAAAAAAAAAICYyAUAAAAAAAAAAAAAAAAQE7kAAAAAAAAAAAAAAAAAYiIXAAAAAAAAAAAAAAAAQEzkAgAAAAAAAAAAAAAAAIiJXAAAAAAAAAAAAAAAAAAxkQsAAAAAAAAAAAAAAAAgJnIBAAAAAAAAAAAAAAAAxEQuAAAAAAAAAAAAAAAAgJjIBQAAAAAAAAAAAAAAABATuQAAAAAAAAAAAAAAAABiIhcAAAAAAAAAAAAAAABATOQCAAAAAAAAAAAAAAAAiIlcAAAAAAAAAAAAAAAAADGRCwAAAAAAAAAAAAAAACAmcgEAAAAAAAAAAAAAAADERC4AAAAAAAAAAAAAAACAmMgFAAAAAAAAAAAAAAAAEBO5AAAAAAAAAAAAAAAAAGIiFwAAAAAAAAAAAAAAAEBM5AIAAAAAAAAAAAAAAACIiVwAAAAAAAAAAAAAAAAAMZELAAAAAAAAAAAAAAAAICZyAQAAAAAAAAAAAAAAAMRELgAAAAAAAAAAAAAAAICYyAUAAAAAAAAAAAAAAAAQE7kAAAAAAAAAAAAAAAAAYiIXAAAAAAAAAAAAAAAAQEzkAgAAAAAAAAAAAAAAAIiJXAAAAAAAAAAAAAAAAAAxkQsAAAAAAAAAAAAAAAAgJnIBAAAAAAAAAAAAAAAAxEQuAAAAAAAAAAAAAAAAgJjIBQAAAAAAAAAAAAAAABATuQAAAAAAAAAAAAAAAABiIhcAAAAAAAAAAAAAAABATOQCAAAAAAAAAAAAAAAAiIlcAAAAAAAAAAAAAAAAADGRCwAAAAAAAAAAAAAAACAmcgEAAAAAAAAAAAAAAADERC4AAAAAAAAAAAAAAACAmMgFAAAAAAAAAAAAAAAAEBO5AAAAAAAAAAAAAAAAAGIiFwAAAAAAAAAAAAAAAEBM5AIAAAAAAAAAAAAAAACIiVwAAAAAAAAAAAAAAAAAMZELAAAAAAAAAAAAAAAAICZyAQAAAAAAAAAAAAAAAMRELgAAAAAAAAAAAAAAAICYyAUAAAAAAAAAAAAAAAAQE7kAAAAAAAAAAAAAAAAAYiIXAAAAAAAAAAAAAAAAQEzkAgAAAAAAAAAAAAAAAIiJXAAAAAAAAAAAAAAAAAAxkQsAAAAAAAAAAAAAAAAgJnIBAAAAAAAAAAAAAAAAxEQuAAAAAAAAAAAAAAAAgJjIBQAAAAAAAAAAAAAAABATuQAAAAAAAAAAAAAAAABiIhcAAAAAAAAAAAAAAABATOQCAAAAAAAAAAAAAAAAiIlcAAAAAAAAAAAAAAAAADGRCwAAAAA+ftGGAAABZ0lEQVQAAAAAAAAAACAmcgEAAAAAAAAAAAAAAADERC4AAAAAAAAAAAAAAACAmMgFAAAAAAAAAAAAAAAAEBO5AAAAAAAAAAAAAAAAAGIiFwAAAAAAAAAAAAAAAEBM5AIAAAAAAAAAAAAAAACIiVwAAAAAAAAAAAAAAAAAMZELAAAAAAAAAAAAAAAAICZyAQAAAAAAAAAAAAAAAMRELgAAAAAAAAAAAAAAAICYyAUAAAAAAAAAAAAAAAAQE7kAAAAAAAAAAAAAAAAAYiIXAAAAAAAAAAAAAAAAQEzkAgAAAAAAAAAAAAAAAIiJXAAAAAAAAAAAAAAAAAAxkQsAAAAAAAAAAAAAAAAgJnIBAAAAAAAAAAAAAAAAxEQuAAAAAAAAAAAAAAAAgJjIBQAAAAAAAAAAAAAAABATuQAAAAAAAAAAAAAAAABiIhcAAAAAAAAAAAAAAABATOQCAAAAAAAAAAAAAAAAKG07zL5QRwVug8IAAAAASUVORK5CYII="></image></pattern><path d="m0 0h284v117h-284z" fill="url(#a)"></path></svg>
                </template>
              </sl-icon>
              <div class="wf-heading--xs wf-mt--2">Une marque</div>
              <div class="wf-paragraph--sm wf-mt--1">du groupe Fnac Darty</div>
            </sl-card>
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
            <sl-card class="wf-card">

              <sl-icon library="Mayday Phone" name="assurance-boutiques" style="font-size: 8rem" aria-hidden="true">
                <template shadowrootmode="open">
                  <!---->
                  <svg width="207" height="217" viewBox="0 0 207 217" fill="none" xmlns="http://www.w3.org/2000/svg')}}" part="svg')}}">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M97.2116 146.337C97.2116 146.337 94.2064 146.969 88.1982 148.236C87.9311 148.293 87.6538 148.23 87.4373 148.065L83.052 144.721C82.9771 144.662 82.8922 144.618 82.8011 144.584L70.7806 140.26C70.3232 140.095 69.8153 140.309 69.6149 140.75L69.0868 141.91C68.9208 142.273 68.5424 142.49 68.1437 142.45L57.5782 141.374C57.473 141.364 57.3698 141.334 57.2726 141.29L47.8222 136.817C47.7615 136.789 47.7028 136.753 47.6502 136.712L43.0018 133.112C42.4979 132.721 42.5283 131.954 43.0625 131.605L45.5435 129.979C45.7742 129.828 45.926 129.584 45.9564 129.31L49.261 100.883C49.2812 100.716 49.2529 100.546 49.1841 100.391L46.5068 94.5324C46.2255 93.9179 46.6768 93.2208 47.3547 93.2208H48.3605C48.8745 93.2208 49.2934 92.8058 49.2934 92.2921V88.9174C49.2934 88.5648 49.093 88.2425 48.7753 88.0853L43.7566 85.6113C43.6474 85.5569 43.5502 85.4844 43.4713 85.3937L38.3737 79.6296C38.224 79.4604 38.141 79.2428 38.141 79.0172V75.5982C38.141 75.4511 38.1066 75.3081 38.0398 75.1771L36.6435 72.4472C36.4836 72.1369 36.1639 71.9395 35.8138 71.9395H34.8424C34.3284 71.9395 33.9095 71.5245 33.9095 71.0107V69.3385C33.9095 68.9335 33.6464 68.5769 33.2579 68.454L18.0359 63.657C17.8397 63.5946 17.6292 63.6006 17.4349 63.6691L14.5391 64.7188C14.104 64.8759 13.6203 64.6926 13.3997 64.2876L12.3879 62.418C12.3576 62.3636 12.3232 62.3112 12.2827 62.2629L10.8641 60.5765C10.4472 60.0809 10.6557 59.3214 11.2688 59.1058L13.6062 58.2838C14.2456 58.0582 14.4379 57.2503 13.9664 56.7647L12.141 54.8789C11.965 54.6976 11.7221 54.5949 11.4692 54.5949H10.9329C10.4189 54.5949 10 54.1798 10 53.6661V52.0322C10 51.6252 10.2671 51.2666 10.6577 51.1457L16.4008 49.3788C16.4899 49.3506 16.583 49.3365 16.676 49.3365H21.5996C21.7392 49.3365 21.8748 49.3063 22.0003 49.2458L25.9829 47.352C26.2621 47.219 26.592 47.2331 26.8591 47.3903L30.0322 49.2579C30.1212 49.3103 30.2002 49.3768 30.2669 49.4554L31.6086 51.0228C31.7867 51.2303 32.0457 51.3492 32.3169 51.3492H36.1497C36.3015 51.3492 36.4512 51.3129 36.5868 51.2404L39.8247 49.5279C40.0554 49.407 40.3265 49.3869 40.5714 49.4715L43.6049 50.5393C44.4123 50.8233 45.1428 49.9651 44.732 49.2176L43.702 47.348C43.6271 47.211 43.5867 47.0579 43.5867 46.9027V40.772C43.5867 40.6128 43.5442 40.4557 43.4652 40.3146L42.0466 37.8164C41.9961 37.7298 41.9617 37.6331 41.9434 37.5343L41.2938 34.1658C41.1643 33.4949 41.7836 32.9186 42.4473 33.0939L45.7843 33.9723C45.8612 33.9925 45.9422 34.0026 46.0231 34.0026H46.9338C47.3911 34.0026 47.7797 34.333 47.8545 34.7822L48.2289 37.073C48.2896 37.4417 48.5669 37.7398 48.9332 37.8265L57.1533 39.7807C57.3253 39.821 57.5054 39.813 57.6733 39.7566L62.7608 38.0159C63.2809 37.8386 63.5338 37.2503 63.3052 36.7526L62.3824 34.746C62.1881 34.3209 62.3399 33.8192 62.7365 33.5714L68.7529 29.8382C68.7893 29.816 68.8277 29.7938 68.8682 29.7777L76.3011 26.4998C76.5824 26.3769 76.7827 26.123 76.8394 25.8228L79.0209 14.2484C79.0735 13.9683 79.2536 13.7265 79.5066 13.5956L88.1921 9.10481C88.7547 8.81469 89.4387 9.15518 89.5419 9.77772L90.1996 13.7447C90.2562 14.0872 90.4991 14.3692 90.831 14.476L93.0934 15.2114C93.1865 15.2416 93.2836 15.2577 93.3828 15.2577H95.5016C95.9387 15.2577 96.3171 15.5599 96.4122 15.9871L97.0497 18.8761C97.1428 19.3012 97.5232 19.6055 97.9603 19.6055H100.704C100.854 19.6055 101.002 19.6417 101.135 19.7102L106.662 22.5751C106.901 22.698 107.073 22.9176 107.138 23.1775L108.032 26.8181C108.133 27.2331 108.508 27.5253 108.937 27.5253H111.262C111.472 27.5253 111.677 27.4548 111.843 27.3238L113.791 25.7826C114.403 25.299 115.303 25.7322 115.303 26.5099V29.4211C115.303 29.6709 115.404 29.9087 115.582 30.084L120.961 35.3262C121.135 35.4955 121.37 35.5901 121.613 35.5901H126.344C126.37 35.5901 126.397 35.5901 126.423 35.5942L131.63 36.0294C131.917 36.0535 132.178 36.2087 132.334 36.4504L134.785 40.2199C134.916 40.4214 135.121 40.5645 135.355 40.6189L142.236 42.2226C142.256 42.2266 142.278 42.2326 142.299 42.2387L150.529 44.7671C151.152 44.9585 151.389 45.71 150.99 46.2218L147.133 51.1779C147.044 51.2928 146.983 51.4257 146.955 51.5688L143.909 67.1002C143.869 67.3057 143.76 67.493 143.598 67.63L141.076 69.7636C140.831 69.9711 140.498 70.0376 140.19 69.9409L138.753 69.4876C138.191 69.3103 137.604 69.6911 137.543 70.2774L137.225 73.3457C137.197 73.6238 137.043 73.8756 136.806 74.0287L132.504 76.8211C132.241 76.9924 132.081 77.2845 132.081 77.5988V80.4133C132.081 80.6591 131.982 80.8969 131.808 81.0701L128.936 83.9209C128.76 84.0942 128.663 84.3319 128.663 84.5777V86.6126C128.663 86.81 128.601 87.0014 128.483 87.1606C127.917 87.9302 128.746 88.9497 129.62 88.5548L129.847 88.452C129.997 88.3835 130.126 88.2788 130.221 88.1438L131.802 85.9276C131.976 85.6818 132.259 85.5367 132.563 85.5367H134.321C134.72 85.5367 135.072 85.7886 135.202 86.1633L136.645 90.3358C136.681 90.4426 136.738 90.5413 136.808 90.6279L138.512 92.6688C138.786 92.9972 138.8 93.4686 138.547 93.8132L137.003 95.9004C136.815 96.1542 136.77 96.4867 136.883 96.7828L139.178 102.746C139.34 103.169 139.174 103.647 138.782 103.877L135.445 105.839C135.161 106.006 134.987 106.31 134.987 106.639V109.004C134.987 109.351 135.181 109.669 135.491 109.828L138.308 111.281C138.703 111.484 138.897 111.935 138.775 112.359L137.371 117.26C137.26 117.649 137.414 118.064 137.751 118.288L142.034 121.122C142.187 121.223 142.365 121.278 142.55 121.278H144.122C144.865 121.278 145.31 122.098 144.901 122.714C144.31 123.609 143.446 124.92 142.311 126.649C142.282 126.691 142.25 126.733 142.216 126.772L135.105 134.452C135.028 134.534 134.939 134.603 134.837 134.653L128.115 138.01C127.858 138.139 127.554 138.141 127.295 138.018L116.693 132.971C116.465 132.862 116.202 132.85 115.963 132.939L112.094 134.387C111.78 134.504 111.428 134.446 111.171 134.234L106.31 130.225C105.972 129.947 105.484 129.941 105.14 130.209L95.2527 137.935C95.028 138.111 94.8965 138.38 94.8965 138.665V142.267C94.8965 142.436 94.943 142.603 95.0321 142.748C96.4851 145.144 97.2116 146.343 97.2116 146.343V146.337Z" fill="url(#paint0_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M186.361 102.857C185.244 106.927 182.548 110.386 178.867 112.477C175.186 114.568 170.823 115.116 166.735 114.002C162.172 112.759 158.825 109.554 156.656 105.76C155.518 103.778 155.004 97.6891 155.004 97.6891L153.592 86.3805L157.35 74.9451L160.638 74.5462C161.545 74.4333 162.468 74.5824 163.291 74.9753H163.299C163.463 75.0539 163.623 75.1385 163.777 75.2332C164.348 75.5998 164.851 76.0612 165.262 76.6012C165.738 77.2015 166.011 78.2351 166.051 78.5252V78.5353C166.07 78.6662 166.084 78.7569 166.084 78.7569L166.644 83.3444L166.814 84.7406C166.889 85.3571 166.964 85.9736 167.041 86.5921C167.09 86.987 167.138 87.3818 167.187 87.7767L167.628 91.3951C167.735 92.2554 167.768 93.1721 167.954 94.0203L168.156 95.7086C168.342 97.2338 169.737 98.3177 171.268 98.1323C172.8 97.947 173.889 96.5588 173.703 95.0337L173.049 89.7209L172.572 85.8225L172.62 85.8164C172.685 86.2012 173.106 86.5236 173.776 86.7452C173.964 86.8097 174.156 86.8621 174.353 86.9044C175.223 87.1058 176.364 87.1844 177.637 87.124C177.955 87.1078 178.28 87.0857 178.612 87.0535L178.946 87.0172C179.754 86.9265 180.553 86.7794 181.338 86.58C181.415 86.5578 181.492 86.5397 181.567 86.5175C182.121 86.3685 182.664 86.1771 183.19 85.9474C183.323 85.8869 183.451 85.8245 183.57 85.762C184.4 85.3268 184.317 86.8359 184.262 86.3685C184.262 86.3584 185.035 88.1817 184.827 86.2597L185.355 87.0655L186.14 93.7584C186.14 93.7584 187.061 100.312 186.361 102.857Z" fill="url(#paint1_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M183.58 85.7681C183.461 85.8326 183.333 85.895 183.2 85.9534C182.674 86.1851 182.131 86.3745 181.577 86.5236C180.717 86.7553 179.841 86.9225 178.956 87.0232L178.622 87.0595C178.291 87.0917 177.965 87.1159 177.647 87.13C176.376 87.1905 175.235 87.1058 174.363 86.9104C174.168 86.8681 173.976 86.8157 173.786 86.7513C173.116 86.5236 172.695 86.2073 172.63 85.8225L173.626 85.7016L183.463 84.5089L184.821 84.3437V84.3759C184.882 84.8433 184.41 85.3309 183.58 85.7701V85.7681Z" fill="#A1D5D3"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M183.581 85.768C183.461 85.8325 183.334 85.895 183.2 85.9534C182.674 86.1851 182.132 86.3745 181.577 86.5235C180.717 86.7552 179.841 86.9225 178.956 87.0232L178.623 87.0595C178.291 87.0917 177.965 87.1159 177.647 87.13C176.376 87.1904 175.235 87.1058 174.363 86.9104C174.169 86.8681 173.976 86.8157 173.786 86.7512C173.116 86.5235 172.695 86.2072 172.631 85.8224V85.7922C172.598 85.5081 172.76 85.214 173.08 84.9319C173.201 84.8251 173.331 84.7264 173.468 84.6378C173.723 84.4766 173.988 84.3336 174.264 84.2107C175.328 83.7312 176.824 83.3383 178.503 83.1449C180.298 82.9354 181.939 82.9938 183.103 83.2597C183.267 83.296 183.419 83.3363 183.562 83.3806C184.299 83.6062 184.76 83.9387 184.829 84.3456V84.3779C184.882 84.8453 184.41 85.3329 183.581 85.7721V85.768Z" fill="#001858"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M65.1011 120.727C65.1011 120.727 58.767 136.345 56.5592 141.507C50.6987 155.217 45.7124 164.267 45.7124 164.267L56.5713 170.904L64.0872 171.909L79.8515 134.476L125.894 123.786L130.075 105.065L120.784 101.956L90.3158 109.03L74.588 112.683C70.3039 113.676 66.7686 116.674 65.1031 120.725L65.1011 120.727Z" fill="url(#paint2_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M98.9146 145.826C105.016 136.666 117.229 122.891 125.392 114.568C130.073 109.382 132.345 105.81 132.345 105.81C132.345 105.81 151.53 113.492 151.694 114.19C152.91 119.406 148.697 126.008 147.11 128.385C143.263 134.159 130.198 141.215 124.316 145.764C133.865 147.084 135.905 147.358 153.96 149.207L153.292 159.192L146.321 172.122C146.321 172.122 138.59 166.562 117.184 164.954C104.757 164.017 104.836 163.57 102.333 162.212C97.4697 158.997 95.6909 150.668 98.9166 145.826H98.9146Z" fill="url(#paint3_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M153.812 166.949C151.287 171.302 147.626 174.052 146.319 172.12C146.025 171.699 145.831 171.216 145.756 170.706C145.453 168.603 147.319 166.38 149.215 163.659C149.567 163.153 149.925 162.633 150.259 162.089C150.421 161.831 150.579 161.569 150.734 161.305C150.819 161.156 150.904 161.007 150.989 160.854C151.056 160.733 151.119 160.612 151.182 160.491C151.244 160.371 151.323 160.217 151.392 160.078C151.866 159.13 152.236 158.132 152.495 157.105C153.171 154.359 153.252 152.245 153.335 150.901C153.345 150.744 153.355 150.599 153.365 150.46C153.385 150.208 153.41 149.993 153.442 149.816C153.458 149.735 153.472 149.662 153.493 149.598C153.58 149.296 153.717 149.163 153.962 149.203L154.011 149.213C154.27 149.278 154.529 149.487 154.778 149.828C154.875 149.959 154.962 150.098 155.041 150.239C155.164 150.458 155.274 150.684 155.369 150.916C155.462 151.135 155.549 151.373 155.63 151.629C156.239 153.506 156.601 156.317 156.32 159.474C156.283 159.889 156.227 160.304 156.156 160.717C156.142 160.8 156.125 160.88 156.109 160.963C156.055 161.235 155.996 161.509 155.929 161.781C155.858 162.071 155.779 162.361 155.694 162.647C155.454 163.443 155.162 164.225 154.822 164.984C154.523 165.655 154.187 166.308 153.816 166.943L153.812 166.949Z" fill="#101B33"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M157.88 162.506C157.259 162.192 156.603 161.95 155.925 161.787C155.812 161.759 155.7 161.733 155.589 161.708L155.158 161.63H155.128L150.985 160.862C151.052 160.741 151.115 160.62 151.178 160.5C151.24 160.379 151.319 160.226 151.388 160.087C151.862 159.138 152.232 158.14 152.491 157.113C153.167 154.367 153.248 152.253 153.331 150.91C153.341 150.752 153.351 150.607 153.361 150.468L154.183 150.658L154.292 150.682L155.36 150.924L155.409 150.936H155.415L156.664 151.087C158.099 154.681 158.299 158.606 157.878 162.506H157.88Z" fill="url(#paint4_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M50.2091 169.171L50.2739 169.211C50.8769 169.576 51.5285 169.934 52.2267 170.275C52.9046 170.599 53.623 170.92 54.3839 171.214C56.5553 172.058 58.6417 172.568 60.3375 172.729C60.4367 172.739 60.5318 172.747 60.6269 172.755C61.3251 172.821 62.0293 172.801 62.7234 172.691C63.4358 172.56 63.9356 172.298 64.1602 171.907C64.314 171.639 63.9538 171.468 63.2678 171.288C62.8873 171.192 62.4077 171.093 61.8573 170.976L61.3494 170.867C59.5564 170.474 57.2009 169.866 55.1469 168.568C54.4548 168.131 53.8052 167.694 53.194 167.279C52.7832 166.997 52.3906 166.723 52.0142 166.457L51.6581 166.207C49.3228 164.569 47.6087 163.413 46.2185 163.747C44.5065 164.146 46.2853 166.789 50.2111 169.173L50.2091 169.171Z" fill="#101B33"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M53.1919 167.265L52.2307 170.269L51.5022 172.543L51.3645 172.956C51.0893 173.716 50.715 174.437 50.2495 175.1C54.0702 176.061 58.0021 176.416 61.7803 175.507L62.1061 174.296L62.5534 173.124L62.7213 172.688L63.2637 171.284C62.8832 171.188 62.4036 171.089 61.8532 170.972L61.3452 170.863C59.5523 170.47 57.1967 169.862 55.1427 168.564C54.4486 168.123 53.799 167.686 53.1899 167.265H53.1919Z" fill="url(#paint5_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M77.9332 104.297H77.917C77.5102 104.265 77.1075 104.201 76.7129 104.104C76.6299 104.086 76.5632 104.025 76.5389 103.945C76.5146 103.864 76.5348 103.776 76.5935 103.715C76.6522 103.655 76.7392 103.63 76.8222 103.653C77.1925 103.743 77.5689 103.806 77.9473 103.834C78.0708 103.844 78.1639 103.951 78.1598 104.074C78.1558 104.197 78.0566 104.295 77.9332 104.297Z" fill="#001858"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M75.2032 103.622C75.1749 103.622 75.1465 103.616 75.1202 103.606C73.048 102.829 70.6176 101.465 68.2782 99.7702C64.4252 96.9718 61.5111 93.7866 60.8676 91.655C60.8393 91.5744 60.8575 91.4858 60.9162 91.4233C60.9749 91.3609 61.0619 91.3347 61.1448 91.3548C61.2278 91.375 61.2926 91.4394 61.3148 91.522C61.924 93.5307 64.8319 96.6958 68.5555 99.3975C70.8604 101.07 73.2504 102.412 75.2862 103.177C75.3914 103.217 75.4521 103.326 75.4319 103.435C75.4116 103.546 75.3165 103.624 75.2032 103.626V103.622Z" fill="#001858"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M73.7586 106.272C73.7343 106.272 73.708 106.268 73.6837 106.26C71.4861 105.528 68.8533 104.094 66.267 102.22C64.6279 101.044 63.1 99.7219 61.6976 98.2734C61.6086 98.1807 61.6126 98.0336 61.7057 97.945C61.7988 97.8563 61.9465 97.8603 62.0356 97.953C63.4177 99.3814 64.9254 100.683 66.5423 101.843C69.0901 103.691 71.6783 105.103 73.8315 105.82C73.9387 105.859 74.0035 105.966 73.9853 106.078C73.9671 106.191 73.872 106.272 73.7566 106.274V106.27L73.7586 106.272Z" fill="#001858"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M174.591 86.6243C174.415 86.5296 174.247 86.4248 174.083 86.312C173.488 85.899 173.169 85.4678 173.235 85.0709C173.302 84.6741 173.709 84.392 174.362 84.1905C174.652 84.1039 174.945 84.0394 175.245 83.9991C176.402 83.8319 177.946 83.8641 179.616 84.1402C181.399 84.4343 182.959 84.942 184.003 85.5162C184.149 85.5968 184.284 85.6774 184.41 85.76C185.07 86.1911 185.424 86.6485 185.355 87.0655C185.28 87.5309 184.687 87.8714 183.77 88.0628" fill="#001858"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M60.9084 97.27C60.8396 97.27 60.7728 97.2398 60.7283 97.1854C60.4814 96.8832 60.2507 96.5931 60.0463 96.311C59.9755 96.2062 59.9998 96.0652 60.103 95.9907C60.2062 95.9161 60.3498 95.9383 60.4247 96.039C60.6271 96.315 60.8456 96.6011 61.0865 96.8892C61.1269 96.9376 61.1451 96.998 61.1391 97.0585C61.133 97.1189 61.1026 97.1773 61.0561 97.2156C61.0136 97.2499 60.961 97.27 60.9064 97.27H60.9084Z" fill="#001858"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M86.5156 95.0961C85.8619 96.6535 85.0646 97.9792 84.3078 98.8636C84.2309 98.9543 84.1519 99.0409 84.0751 99.1235C84.0589 99.1417 84.0406 99.1598 84.0245 99.1759C83.3749 99.8488 82.7718 100.165 82.3347 99.9838C81.9421 99.8206 81.7418 99.2767 81.7256 98.4929C81.7256 98.3519 81.7256 98.2068 81.7337 98.0517V98.0195C81.8005 96.8328 82.1971 95.2452 82.8932 93.5871C83.5449 92.0318 84.3381 90.7101 85.095 89.8257C85.2892 89.596 85.4997 89.3804 85.7264 89.183L85.785 89.1346C86.2788 88.7256 86.7281 88.5584 87.0721 88.7015C87.4181 88.8445 87.6286 89.318 87.6731 89.9989V90.0755C87.6832 90.2729 87.6812 90.4724 87.667 90.6698C87.5982 91.8545 87.2016 93.4401 86.5115 95.0961H86.5156Z" fill="#001858"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M87.586 90.5571C87.5941 90.3596 87.5921 90.1602 87.58 89.9627C87.5314 89.2415 87.3229 88.7479 86.9486 88.6008C86.5742 88.4537 86.1189 88.6552 85.6109 89.1085C85.3883 89.31 85.1819 89.5296 84.9917 89.7633C84.2531 90.6638 83.4841 91.9996 82.8628 93.567C82.197 95.2392 81.8307 96.8329 81.7882 98.0215C81.7822 98.1868 81.7822 98.3439 81.7882 98.493C81.8206 99.2787 82.0311 99.8167 82.4257 99.9718C82.8648 100.147 83.4638 99.8167 84.0993 99.1317" fill="#001858"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M63.7047 100.139C63.9536 100.381 64.2916 100.51 64.6396 100.498L71.0445 100.266V100.28L77.0204 100.27C78.4167 100.268 80.3594 99.2303 80.4707 97.8442L80.5456 87.1542C81.0333 87.4322 81.4866 87.7626 81.9014 88.1414C81.7234 87.8936 81.5149 87.6679 81.2802 87.4705C80.8491 87.1079 80.0761 86.85 79.4629 86.6948C78.9631 86.5659 74.7134 85.4679 72.7221 84.9259C71.9572 84.7204 71.1275 85.1516 70.9008 85.9937C70.8057 86.3503 70.8685 86.7331 71.0465 87.0575L71.0587 87.0776C71.253 87.4161 71.5747 87.6639 71.9531 87.7667L74.3006 88.4053C73.7259 88.6431 73.1835 88.8586 72.7323 89.0178C71.7326 89.3724 70.1258 89.5235 70.1258 89.5235L63.2413 89.7733C62.4278 89.8035 61.7903 90.4261 61.8187 91.1675C61.8349 91.5301 62.0048 91.8666 62.2861 92.0983C62.5755 92.3562 62.9519 92.4992 63.3425 92.4972C62.529 92.5274 61.6062 92.9868 61.6406 93.8994C61.6568 94.2621 61.8247 94.6005 62.106 94.8302C62.363 95.0478 62.9883 95.1707 63.3647 95.1768L63.4396 95.1727L70.8482 94.9007L63.4356 95.1687C63.4113 95.1687 63.385 95.1687 63.3587 95.1687C62.5836 95.2332 61.9846 95.8396 62.0109 96.5568C62.0271 96.9195 62.1951 97.2579 62.4764 97.4876C62.7718 97.7334 63.1482 97.8583 63.5307 97.8422L70.9433 97.5743L70.9474 97.5944L64.5445 97.82C64.1944 97.8382 63.8646 97.9933 63.6298 98.2532C63.3951 98.5131 63.2737 98.8556 63.2939 99.2042C63.306 99.5567 63.4538 99.8912 63.7088 100.137L63.7047 100.139Z" fill="url(#paint6_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M87.5818 90.557C87.5899 90.3596 87.5878 90.1601 87.5757 89.9627C87.2823 89.8458 87.0354 89.735 86.9241 89.6827C86.5942 89.5336 86.147 89.3341 85.6127 89.1105C83.5243 88.2341 79.3859 86.4249 76.6783 86.171C76.0935 86.1166 76.2796 86.6485 75.7798 86.7009L80.0173 98.9684C80.0355 98.9543 80.0538 98.9402 80.074 98.9261C80.0861 98.914 80.1003 98.904 80.1145 98.8939C80.5759 98.5635 81.1546 98.4486 81.7901 98.4909C82.3547 98.5373 82.9112 98.6642 83.4393 98.8677C83.4919 98.8878 83.7672 98.9987 84.099 99.1316" fill="url(#paint7_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M87.7983 89.9989C87.5049 89.8821 87.258 89.7713 87.1467 89.7189C86.8169 89.5698 86.3696 89.3704 85.8354 89.1467C83.747 88.2703 79.6086 86.4611 76.9009 86.2073C76.3161 86.1529 76.5023 86.6847 76.0024 86.7371L80.24 99.0047C80.2582 98.9906 80.2764 98.9765 80.2966 98.9624C80.3088 98.9503 80.3229 98.9402 80.3371 98.9301C80.7985 98.5997 81.3773 98.4849 82.0127 98.5272C82.5773 98.5735 83.1338 98.7005 83.662 98.9039C83.7146 98.9241 83.749 98.9926 84.0789 99.1235" fill="url(#paint8_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M128.255 66.1267C128.255 66.1267 117.49 99.5587 116.287 102.724C114.646 107.049 112.159 109.848 103.336 108.276C102.604 108.145 99.483 107.241 98.366 106.771L82.3184 99.9355L87.0335 88.7055L99.9141 94.0445C100.058 94.1049 100.58 94.2822 100.695 94.3225C103.963 95.5031 107.812 93.708 108.927 91.514C110.087 89.2434 117.991 69.9063 118.54 68.8707C121.424 63.425 128.253 66.1287 128.253 66.1287L128.255 66.1267Z" fill="url(#paint9_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M164.872 76.8469L158.827 86.9064C158.789 86.9708 158.76 87.0413 158.746 87.1139L157.034 95.4125L153.881 108.776C153.41 110.775 153.606 113.43 152.335 114.778C151.694 115.463 152.37 114.862 151.562 115.342C127.359 115.995 119.52 111.288 115.584 108.893L114.756 108.343L114.327 108.069C113.661 107.646 113.056 107.481 112.431 106.165C111.372 103.937 112.117 98.6279 112.042 99.1477C111.712 101.434 112.212 98.3358 112.135 98.6843C111.599 101.108 112.107 98.8072 112.135 98.6843L118.799 70.4341C119.578 67.132 122.478 64.9521 125.408 65.3772H125.421C125.455 65.3772 125.487 65.3853 125.522 65.3893C125.572 65.3953 125.623 65.4034 125.671 65.4135L154.847 72.2333C154.847 72.2333 156.749 72.6664 159.064 73.2084H159.072L159.602 73.3333C160.207 73.5106 162.909 74.113 164.783 76.041C164.991 76.2566 165.026 76.587 164.872 76.8429V76.8469Z" fill="url(#paint10_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M195.297 72.1729C195.358 72.5133 195.277 72.8659 195.07 73.1439L191.278 78.2875L191.288 78.2955L187.921 83.2094C187.134 84.3578 185.181 85.3752 183.967 84.6862L175.042 78.7408C175 79.2989 175.018 79.859 175.101 80.411C174.996 80.1249 174.925 79.8267 174.892 79.5225C174.834 78.9644 175.054 78.1827 175.269 77.5904C175.443 77.1048 176.918 72.9908 177.588 71.0446C177.847 70.2992 178.671 69.858 179.498 70.144C179.848 70.2649 180.132 70.5329 180.3 70.8613L180.31 70.8814C180.482 71.232 180.508 71.6349 180.381 72.0056L179.591 74.2984C180.111 73.9599 180.595 73.6335 180.982 73.3514C181.838 72.7269 182.866 71.4899 182.866 71.4899L186.941 65.9595C187.423 65.3067 188.299 65.1314 188.898 65.5707C189.19 65.7862 189.376 66.1166 189.408 66.4773C189.461 66.8621 189.366 67.2509 189.145 67.5713C189.627 66.9185 190.527 66.4168 191.268 66.9588C191.559 67.1744 191.745 67.5048 191.78 67.8654C191.816 68.1998 191.567 68.7841 191.361 69.0984L191.316 69.1588L186.927 75.1063L191.316 69.1528C191.331 69.1327 191.347 69.1105 191.359 69.0903C191.847 68.4879 192.688 68.3368 193.269 68.7619C193.563 68.9775 193.749 69.3079 193.781 69.6686C193.82 70.0493 193.712 70.4301 193.484 70.7364L189.094 76.6898L189.109 76.7039L192.895 71.5584C193.107 71.2783 193.421 71.095 193.769 71.0486C194.117 71.0003 194.469 71.095 194.749 71.3065C195.036 71.514 195.23 71.8243 195.291 72.1729H195.297Z" fill="url(#paint11_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M174.108 86.8923C173.938 86.7875 173.428 86.4349 173.428 86.1106C173.495 85.8023 173.541 85.5364 173.561 85.4155C173.622 85.0589 173.709 84.5794 173.822 84.0132C174.268 81.8011 175.091 77.3768 176.403 75.0035C176.686 74.4897 177.024 74.943 177.348 74.5623L185.159 84.944C185.137 84.9501 185.114 84.9581 185.092 84.9662C185.076 84.9702 185.06 84.9763 185.044 84.9823C184.509 85.1757 184.088 85.5887 183.767 86.1347C183.487 86.6263 183.615 86.862 183.487 87.4121C183.475 87.4665 183.475 87.5934 183.4 87.9399" fill="url(#paint12_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.2612 186.151C38.33 186.584 38.4312 187.013 38.5668 187.43L38.8137 188.198L54.7379 183.09L59.8678 181.444L60.655 179.424L38.2612 186.151Z" fill="url(#paint13_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.2046 185.683L38.2207 185.834C38.2349 185.941 38.2491 186.048 38.2653 186.153L60.653 179.428L60.8675 178.878L60.914 178.751L61.7822 176.43L62.2578 175.157C58.4108 175.705 54.5314 174.983 50.818 173.666C50.2656 174.306 49.6139 174.856 48.8895 175.294C48.8207 175.33 48.7539 175.374 48.6831 175.414C48.6143 175.455 48.5475 175.493 48.4746 175.529L48.2561 175.644C48.0861 175.717 47.912 175.783 47.736 175.838C47.5215 175.906 47.2199 176.003 46.8537 176.12L46.6108 176.198C46.5319 176.222 46.451 176.249 46.366 176.277C46.0887 176.365 45.7892 176.462 45.4695 176.563L43.9012 177.064C40.208 178.253 37.8383 181.835 38.2005 185.683H38.2046Z" fill="url(#paint14_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M173.426 170.893C173.824 170.706 174.209 170.486 174.573 170.239L175.241 169.785L165.815 156.025L162.777 151.593L160.608 151.411L173.426 170.891V170.893Z" fill="url(#paint15_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M172.991 171.079L173.13 171.02C173.229 170.976 173.327 170.934 173.424 170.887L160.61 151.413L160.021 151.365L159.885 151.355L157.404 151.182L156.042 151.087C157.659 154.607 158.062 158.515 157.842 162.432C158.615 162.778 159.329 163.244 159.956 163.814C160.011 163.87 160.074 163.921 160.13 163.975C160.189 164.029 160.244 164.084 160.3 164.142L160.472 164.32C160.592 164.461 160.703 164.608 160.806 164.761C160.932 164.946 161.112 165.206 161.328 165.522L161.472 165.732C161.518 165.8 161.567 165.869 161.616 165.943C161.78 166.183 161.958 166.441 162.146 166.719L163.073 168.073C165.262 171.264 169.384 172.513 172.989 171.077L172.991 171.079Z" fill="url(#paint16_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M74.1004 64.0677H72.4713C65.5646 64.791 60.6289 71.8263 63.7109 79.2807C64.7814 81.8757 66.5906 84.6197 68.1933 87.1945C69.9033 89.9426 71.6072 92.5899 73.1836 94.5986H73.3901C74.9645 92.5899 76.6704 89.9426 78.3804 87.1945C79.9811 84.6197 81.7903 81.8757 82.8608 79.2807C85.9428 71.8263 81.0071 64.791 74.1004 64.0677Z" fill="url(#paint17_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M73.2827 79.9919C70.1339 79.9919 67.582 77.4514 67.582 74.3165C67.582 71.1816 70.1339 68.639 73.2827 68.639C76.4315 68.639 78.9833 71.1796 78.9833 74.3165C78.9833 77.4534 76.4295 79.9919 73.2827 79.9919Z" fill="white"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M171.153 69.9304C170.876 71.1473 170.127 72.203 169.069 72.8679C168.01 73.5327 166.729 73.7523 165.507 73.4763L122.223 63.7211C119.679 63.1489 118.085 60.6306 118.661 58.1001C119.236 55.5676 121.766 53.98 124.307 54.5542L125.862 54.9048C126.422 55.0337 127.013 54.935 127.501 54.6287C127.988 54.3245 128.334 53.839 128.462 53.2789L128.658 52.4166C129.233 49.8841 131.763 48.2965 134.304 48.8707L135.272 49.0883C136.439 49.3522 137.601 48.6229 137.864 47.4604C138.908 45.3974 140.389 43.834 142.502 42.8467C144.57 41.8797 146.92 41.6802 149.148 42.1839L150.769 42.5486C152.62 42.9656 154.338 43.8742 155.656 45.2342C157.362 46.995 158.074 49.0782 158.432 52.0963C158.167 53.2587 158.9 54.4152 160.067 54.6771L161.035 54.8947C163.579 55.4669 165.173 57.9852 164.596 60.5157L164.4 61.378C164.135 62.5405 164.868 63.6969 166.035 63.9589L167.587 64.3094C168.81 64.5834 169.872 65.3309 170.54 66.3846C171.208 67.4383 171.43 68.7136 171.153 69.9304Z" fill="url(#paint18_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M140.488 73.8168C142.245 74.2963 144.078 73.2567 144.558 71.5059L144.716 70.9358L145.659 67.5108C146.14 65.762 145.096 63.9367 143.338 63.4592C141.581 62.9797 139.748 64.0193 139.268 65.7701L138.833 67.3516L138.169 69.7652C137.688 71.514 138.732 73.3393 140.49 73.8168H140.488Z" fill="url(#paint19_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M144.689 71.0265C144.689 71.0265 143.384 67.3154 138.728 67.7566L139.604 64.4263L146.061 66.036L144.689 71.0244V71.0265Z" fill="url(#paint20_linear_2909_874)"></path>
                    <path d="M135.76 53.277C137.768 47.5955 144.824 42.5366 150.531 44.5372C156.238 46.5358 157.527 53.2709 155.519 58.9544C153.512 64.6359 148.866 68.5303 142.457 67.1865C136.538 65.9434 133.751 58.9605 135.76 53.279V53.277Z" fill="url(#paint21_linear_2909_874)"></path>
                    <path d="M143.564 58.3964C142.948 58.4346 142.155 57.8564 142.408 57.1372C142.691 56.3373 143.75 56.7524 143.75 56.7524C144.169 56.4844 144.944 54.8162 144.944 54.8162" stroke="#053256" stroke-miterlimit="10" stroke-linecap="round"></path>
                    <path d="M151.155 54.8867C151.155 54.8867 150.147 53.4724 148.667 53.2991" stroke="#053256" stroke-miterlimit="10" stroke-linecap="round"></path>
                    <path d="M142.542 50.9238C142.542 50.9238 140.884 50.4685 139.913 50.95" stroke="#053256" stroke-miterlimit="10" stroke-linecap="round"></path>
                    <path d="M148.437 56.8793C148.841 56.8793 149.169 56.5528 149.169 56.15C149.169 55.7472 148.841 55.4207 148.437 55.4207C148.032 55.4207 147.704 55.7472 147.704 56.15C147.704 56.5528 148.032 56.8793 148.437 56.8793Z" fill="#053256"></path>
                    <path d="M140.605 54.3065C141.01 54.3065 141.338 53.98 141.338 53.5772C141.338 53.1744 141.01 52.8478 140.605 52.8478C140.201 52.8478 139.873 53.1744 139.873 53.5772C139.873 53.98 140.201 54.3065 140.605 54.3065Z" fill="#053256"></path>
                    <path opacity="0.2" d="M150.407 61.7065C151.27 61.7065 151.97 61.0102 151.97 60.1512C151.97 59.2922 151.27 58.5958 150.407 58.5958C149.545 58.5958 148.845 59.2922 148.845 60.1512C148.845 61.0102 149.545 61.7065 150.407 61.7065Z" fill="url(#paint22_linear_2909_874)"></path>
                    <path opacity="0.2" d="M138.458 57.8262C139.321 57.8262 140.02 57.1298 140.02 56.2708C140.02 55.4118 139.321 54.7155 138.458 54.7155C137.595 54.7155 136.896 55.4118 136.896 56.2708C136.896 57.1298 137.595 57.8262 138.458 57.8262Z" fill="url(#paint23_linear_2909_874)"></path>
                    <path d="M147.605 62.4318C147.605 62.4318 142.467 65.2826 138.911 60.2076" stroke="#053256" stroke-miterlimit="10" stroke-linecap="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M146.28 44.2893C146.28 44.2893 151.123 43.6829 150.372 47.2529C149.621 50.823 155.389 55.9444 157.141 54.9552C158.896 53.9659 154.956 39.589 146.28 44.2893Z" fill="url(#paint24_linear_2909_874)"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M148.399 44.382C148.399 44.382 145.61 43.9972 144.414 45.5646C142.824 47.6499 139.262 49.2072 138.495 48.1435C137.728 47.0797 144.55 39.2405 148.399 44.382Z" fill="url(#paint25_linear_2909_874)"></path>
                    <defs>
                      <lineargradient id="paint0_linear_2909_874" x1="58.843" y1="23.3629" x2="125.798" y2="139.848" gradientUnits="userSpaceOnUse">
                        <stop offset="0.06" stop-color="#E8DEFE"></stop>
                        <stop offset="0.39" stop-color="#E3D7FD"></stop>
                        <stop offset="0.82" stop-color="#D8C6FC"></stop>
                        <stop offset="1" stop-color="#D2BEFC"></stop>
                      </lineargradient>
                      <lineargradient id="paint1_linear_2909_874" x1="170.107" y1="114.566" x2="170.107" y2="74.5099" gradientUnits="userSpaceOnUse">
                        <stop offset="0.02" stop-color="#F95900"></stop>
                        <stop offset="0.05" stop-color="#F95A00"></stop>
                        <stop offset="0.65" stop-color="#FD7510"></stop>
                        <stop offset="1" stop-color="#FF8017"></stop>
                      </lineargradient>
                      <lineargradient id="paint2_linear_2909_874" x1="45.7124" y1="136.934" x2="130.073" y2="136.934" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#2F5472"></stop>
                        <stop offset="0.12" stop-color="#294F6E"></stop>
                        <stop offset="0.67" stop-color="#0E3A5C"></stop>
                        <stop offset="1" stop-color="#053256"></stop>
                      </lineargradient>
                      <lineargradient id="paint3_linear_2909_874" x1="97.2856" y1="138.966" x2="153.96" y2="138.966" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#2F5472"></stop>
                        <stop offset="0.34" stop-color="#254C6B"></stop>
                        <stop offset="0.85" stop-color="#0D385B"></stop>
                        <stop offset="1" stop-color="#053256"></stop>
                      </lineargradient>
                      <lineargradient id="paint4_linear_2909_874" x1="150.987" y1="156.488" x2="158.074" y2="156.488" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#FFCDAA"></stop>
                        <stop offset="0.31" stop-color="#FFD0B0"></stop>
                        <stop offset="0.68" stop-color="#FFDAC1"></stop>
                        <stop offset="1" stop-color="#FFE6D5"></stop>
                      </lineargradient>
                      <lineargradient id="paint5_linear_2909_874" x1="50.2515" y1="171.651" x2="63.2677" y2="171.651" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#FFCDAA"></stop>
                        <stop offset="0.31" stop-color="#FFD0B0"></stop>
                        <stop offset="0.68" stop-color="#FFDAC1"></stop>
                        <stop offset="1" stop-color="#FFE6D5"></stop>
                      </lineargradient>
                      <lineargradient id="paint6_linear_2909_874" x1="67.9755" y1="101.95" x2="74.8451" y2="84.768" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#FFCDAA"></stop>
                        <stop offset="0.31" stop-color="#FFD0B0"></stop>
                        <stop offset="0.68" stop-color="#FFDAC1"></stop>
                        <stop offset="1" stop-color="#FFE6D5"></stop>
                      </lineargradient>
                      <lineargradient id="paint7_linear_2909_874" x1="86.0591" y1="97.4496" x2="76.8636" y2="85.678" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFCDAA"></stop>
                        <stop offset="0.29" stop-color="#FFD0B0"></stop>
                        <stop offset="0.67" stop-color="#FFDAC1"></stop>
                        <stop offset="1" stop-color="#FFE6D5"></stop>
                      </lineargradient>
                      <lineargradient id="paint8_linear_2909_874" x1="85.6009" y1="95.0823" x2="74.3231" y2="90.5331" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#DD996B"></stop>
                        <stop offset="0.03" stop-color="#E09F74" stop-opacity="0.91"></stop>
                        <stop offset="0.12" stop-color="#E7B08A" stop-opacity="0.7"></stop>
                        <stop offset="0.22" stop-color="#EDBE9E" stop-opacity="0.51"></stop>
                        <stop offset="0.32" stop-color="#F2CAAF" stop-opacity="0.35"></stop>
                        <stop offset="0.42" stop-color="#F7D4BD" stop-opacity="0.22"></stop>
                        <stop offset="0.54" stop-color="#FADCC7" stop-opacity="0.12"></stop>
                        <stop offset="0.66" stop-color="#FDE1CF" stop-opacity="0.05"></stop>
                        <stop offset="0.8" stop-color="#FEE5D3" stop-opacity="0.01"></stop>
                        <stop offset="1" stop-color="#FFE6D5" stop-opacity="0"></stop>
                      </lineargradient>
                      <lineargradient id="paint9_linear_2909_874" x1="105.287" y1="65.4558" x2="105.287" y2="108.72" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF6801"></stop>
                        <stop offset="0.31" stop-color="#F95E00"></stop>
                        <stop offset="0.81" stop-color="#E84500"></stop>
                        <stop offset="1" stop-color="#E23A00"></stop>
                      </lineargradient>
                      <lineargradient id="paint10_linear_2909_874" x1="138.412" y1="115.404" x2="138.412" y2="65.3289" gradientUnits="userSpaceOnUse">
                        <stop offset="0.02" stop-color="#F95900"></stop>
                        <stop offset="0.32" stop-color="#FB6A0A"></stop>
                        <stop offset="0.7" stop-color="#FE7A13"></stop>
                        <stop offset="1" stop-color="#FF8017"></stop>
                      </lineargradient>
                      <lineargradient id="paint11_linear_2909_874" x1="194.379" y1="76.7727" x2="176.236" y2="72.7961" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#FFCDAA"></stop>
                        <stop offset="0.31" stop-color="#FFD0B0"></stop>
                        <stop offset="0.68" stop-color="#FFDAC1"></stop>
                        <stop offset="1" stop-color="#FFE6D5"></stop>
                      </lineargradient>
                      <lineargradient id="paint12_linear_2909_874" x1="180.371" y1="88.8406" x2="175.953" y2="74.9219" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFCDAA"></stop>
                        <stop offset="0.29" stop-color="#FFD0B0"></stop>
                        <stop offset="0.67" stop-color="#FFDAC1"></stop>
                        <stop offset="1" stop-color="#FFE6D5"></stop>
                      </lineargradient>
                      <lineargradient id="paint13_linear_2909_874" x1="50.9926" y1="185.997" x2="48.3084" y2="180.844" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#171C3A"></stop>
                        <stop offset="0.37" stop-color="#141F3E"></stop>
                        <stop offset="0.78" stop-color="#0B294B"></stop>
                        <stop offset="1" stop-color="#053256"></stop>
                      </lineargradient>
                      <lineargradient id="paint14_linear_2909_874" x1="38.0445" y1="185.522" x2="61.3722" y2="173.262" gradientUnits="userSpaceOnUse">
                        <stop offset="0.48" stop-color="#97AFBF"></stop>
                        <stop offset="0.6" stop-color="#9CB2C1"></stop>
                        <stop offset="0.75" stop-color="#AABDCA"></stop>
                        <stop offset="0.91" stop-color="#C3CFD8"></stop>
                        <stop offset="1" stop-color="#D5DDE3"></stop>
                      </lineargradient>
                      <lineargradient id="paint15_linear_2909_874" x1="169.804" y1="158.831" x2="165.632" y2="162.886" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#171C3A"></stop>
                        <stop offset="0.37" stop-color="#141F3E"></stop>
                        <stop offset="0.78" stop-color="#0B294B"></stop>
                        <stop offset="1" stop-color="#053256"></stop>
                      </lineargradient>
                      <lineargradient id="paint16_linear_2909_874" x1="173.011" y1="171.329" x2="154.751" y2="152.377" gradientUnits="userSpaceOnUse">
                        <stop offset="0.48" stop-color="#97AFBF"></stop>
                        <stop offset="0.6" stop-color="#9CB2C1"></stop>
                        <stop offset="0.75" stop-color="#AABDCA"></stop>
                        <stop offset="0.91" stop-color="#C3CFD8"></stop>
                        <stop offset="1" stop-color="#D5DDE3"></stop>
                      </lineargradient>
                      <lineargradient id="paint17_linear_2909_874" x1="62.7739" y1="79.3331" x2="83.7957" y2="79.3331" gradientUnits="userSpaceOnUse">
                        <stop offset="0.02" stop-color="#F95900"></stop>
                        <stop offset="0.32" stop-color="#FB6A0A"></stop>
                        <stop offset="0.7" stop-color="#FE7A13"></stop>
                        <stop offset="1" stop-color="#FF8017"></stop>
                      </lineargradient>
                      <lineargradient id="paint18_linear_2909_874" x1="144.906" y1="73.5932" x2="144.906" y2="41.9139" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#171C3A"></stop>
                        <stop offset="0.37" stop-color="#141F3E"></stop>
                        <stop offset="0.78" stop-color="#0B294B"></stop>
                        <stop offset="1" stop-color="#053256"></stop>
                      </lineargradient>
                      <lineargradient id="paint19_linear_2909_874" x1="143.316" y1="63.6472" x2="140.491" y2="74.0128" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#FFCDAA"></stop>
                        <stop offset="0.31" stop-color="#FFD0B0"></stop>
                        <stop offset="0.68" stop-color="#FFDAC1"></stop>
                        <stop offset="1" stop-color="#FFE6D5"></stop>
                      </lineargradient>
                      <lineargradient id="paint20_linear_2909_874" x1="142.924" y1="64.8731" x2="141.611" y2="69.9085" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#FFB380"></stop>
                        <stop offset="0.45" stop-color="#FFBC8F"></stop>
                        <stop offset="1" stop-color="#FFCDAA"></stop>
                      </lineargradient>
                      <lineargradient id="paint21_linear_2909_874" x1="147.973" y1="66.9355" x2="143.799" y2="44.5564" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#FFCDAA"></stop>
                        <stop offset="0.31" stop-color="#FFD0B0"></stop>
                        <stop offset="0.68" stop-color="#FFDAC1"></stop>
                        <stop offset="1" stop-color="#FFE6D5"></stop>
                      </lineargradient>
                      <lineargradient id="paint22_linear_2909_874" x1="150.715" y1="61.5444" x2="150.145" y2="58.4844" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#FF8294"></stop>
                        <stop offset="1" stop-color="#FF435E"></stop>
                      </lineargradient>
                      <lineargradient id="paint23_linear_2909_874" x1="138.767" y1="57.6631" x2="138.197" y2="54.6031" gradientUnits="userSpaceOnUse">
                        <stop offset="0.03" stop-color="#FF8294"></stop>
                        <stop offset="1" stop-color="#FF435E"></stop>
                      </lineargradient>
                      <lineargradient id="paint24_linear_2909_874" x1="151.914" y1="55.0801" x2="151.914" y2="43.3484" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#171C3A"></stop>
                        <stop offset="0.37" stop-color="#141F3E"></stop>
                        <stop offset="0.78" stop-color="#0B294B"></stop>
                        <stop offset="1" stop-color="#053256"></stop>
                      </lineargradient>
                      <lineargradient id="paint25_linear_2909_874" x1="138.434" y1="45.5707" x2="148.399" y2="45.5707" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#171C3A"></stop>
                        <stop offset="0.37" stop-color="#141F3E"></stop>
                        <stop offset="0.78" stop-color="#0B294B"></stop>
                        <stop offset="1" stop-color="#053256"></stop>
                      </lineargradient>
                    </defs>
                  </svg>
                </template>
              </sl-icon>
              <div class="wf-heading--xs wf-mt--2">150 boutiques</div>
              <div class="wf-paragraph--sm wf-mt--1">à votre service.</div>
            </sl-card>
          </div>
        </div>
      </section>
      <section class="wf-container--default grid-partenaires-homepage mt-5">
        <div class="title-section" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Profitez de <span class="text-primary">-30% de remise</span> sur vos réparations </div>
        <div class="grid">
          <a href="#" aria-label="Remises client Bouygues Telecom">
            <div>
              <div class="title-subsection">Client Bouygues Telecom ?</div>
              <div class="description">Vous avez un forfait Bouygues Telecom <sup class="fw-bolder">*</sup> ? </div>
              <div class="action wf-mt--3">
                <sl-button class="wf-button wf-button--primary" size="medium" href="#" aria-label="Remise client Bouygues Telecom !" variant="default" data-optional="" data-valid="">
                  Consultez nos offres
                </sl-button>
              </div>
            </div>
            <div>
              <img src="{{asset('layout/bouygues.webp')}}" srcset="{{asset('images/bouygues.webp')}}" alt="Remises chez Bouygues Telecom !">
            </div>
          </a>
          <a href="#" aria-label="Remises Darty Max Intégral">
            <div>
              <div class="title-subsection">Abonné Darty Max Intégral ?</div>
              <div class="description">Vous avez un abonnement Darty Max Intégral ?</div>
              <div class="action wf-mt--3">
                <sl-button class="wf-button wf-button--primary" size="medium" href="#" aria-label="Remise client Darty Max Intégral !" variant="default" data-optional="" data-valid="">
                  Consultez nos offres
                </sl-button>
              </div>
            </div>
            <div>
              <img src="{{asset('layout/darty.webp')}}" srcset="{{asset('/images/darty.webp')}}" alt="Remises Darty Max Intégral !">
            </div>
          </a>
        </div>
        <div class="wf-banner wf-banner--offers wf-my--5" data-sal="fade-in" data-sal-delay="400" data-sal-duration="400" data-sal-once="">
          <div class="wf-heading--md wf-align--center" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Nos <span>offres</span> du moment </div>
          <div class="wf-paragraph--md wf-align--center" data-sal="slide-up" data-sal-delay="600" data-sal-duration="500">Découvrez nos offres du moment, valables dans votre boutique Mayday Phone ! </div>
          <div class="wf-banner-carousel swiper wf-mt--3 swiper-initialized swiper-horizontal swiper-backface-hidden" id="promotions">
            <div class="wf-banner-list swiper-wrapper" style="transform: translate3d(-774px, 0px, 0px); transition-duration: 0ms;">

              <div class="wf-banner-list--item swiper-slide swiper-slide-next" tabindex="-1" style="width: 357px; margin-right: 30px;" data-swiper-slide-index="0">
                <a href="#" aria-label="Découvrez nos offres du moment !">

                  <picture>
                    <source type="image/webp" srcset="{{asset('images/banner-mobile-offers.webp 3840w')}}" media="(max-width: 767px)" width="750" height="750">
                    <img fetchpriority="high" src="{{asset('images/banner-desktop (1).webp')}}" srcset="{{asset('
                images/banner-desktop (1).webp 260w,
                images/banner-desktop (1).webp 828w,
                images/banner-desktop (1).webp 1080w,
                images/banner-desktop (1).webp 1200w,
                images/banner-desktop (1).webp 1920w,
                images/banner-desktop (1).webp 2048w,
                images/banner-desktop (1).webp 3840w
                ')}}" alt="Découvrez nos offres du moment !" width="3360" height="800" loading="lazy" sizes="100vw" oncontextmenu="return false">
                  </picture>

                </a>
              </div>
              <div class="wf-banner-list--item swiper-slide swiper-slide-prev" tabindex="-1" style="width: 357px; margin-right: 30px;" data-swiper-slide-index="1">
                <a href="#" aria-label="Découvrez nos offres du moment !">
                  <picture>
                    <source type="image/webp" srcset="{{asset('images/banner-mobile-offers.webp 3840w')}}" media="(max-width: 767px)" width="750" height="750">
                    <img fetchpriority="high" src="{{asset('images/banner-desktop (1).webp')}}" srcset="{{asset('
                images/banner-desktop (1).webp 260w,
                images/banner-desktop (1).webp 828w,
                images/banner-desktop (1).webp 1080w,
                images/banner-desktop (1).webp 1200w,
                images/banner-desktop (1).webp 1920w,
                images/banner-desktop (1).webp 2048w,
                images/banner-desktop (1).webp 3840w
                ')}}" alt="Découvrez nos offres du moment !" width="3360" height="800" loading="lazy" sizes="100vw" oncontextmenu="return false">
                  </picture>
                </a>
              </div>
              <div class="wf-banner-list--item swiper-slide " tabindex="-1" style="width: 357px; margin-right: 30px;" data-swiper-slide-index="2">
                <a href="#" aria-label="Découvrez nos offres du moment !">
                    <picture>
                        <source type="image/webp" srcset="{{asset('images/banner-mobile-offers.webp 3840w')}}" media="(max-width: 767px)" width="750" height="750">
                        <img fetchpriority="high" src="{{asset('images/banner-desktop (1).webp')}}" srcset="{{asset('
                    images/banner-desktop (1).webp 260w,
                    images/banner-desktop (1).webp 828w,
                    images/banner-desktop (1).webp 1080w,
                    images/banner-desktop (1).webp 1200w,
                    images/banner-desktop (1).webp 1920w,
                    images/banner-desktop (1).webp 2048w,
                    images/banner-desktop (1).webp 3840w
                    ')}}" alt="Découvrez nos offres du moment !" width="3360" height="800" loading="lazy" sizes="100vw" oncontextmenu="return false">
                      </picture>
                </a>
              </div>
            </div>
            <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal">
              <span class="swiper-pagination-bullet"></span>
              <span class="swiper-pagination-bullet"></span>
              <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>
      <section class="wf-container--default page-home-messages wf-mt--5">
        <div>
          <div>
            <img src="{{asset('images/recrutement.svg')}}" srcset="{{asset('images/recrutement.svg')}}" alt="Postulez simplement sur notre site carrières Mayday Phone">
          </div>
          <div>
            <div class="title-section" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Postulez simplement sur notre site carrières Mayday Phone.</div>
            <p class="mt-3">
              <strong>Rejoindre l'aventure Mayday Phone</strong> c'est participer à l'essor d'une belle PME Française qui se donne les moyens de ses ambitions !
            </p>
            <p>
              <strong>Nous n'attendons qu'une chose :</strong> continuer à grandir et performer grâce à l'efficacité, l'implication et le sens de service inné de nos collaborateurs !
            </p>
            <sl-button class="wf-button wf-button--primary wf-mt--3" href="#" aria-label="Postulez simplement sur notre site carrières Mayday Phone" size="large" variant="default" data-optional="" data-valid="">
              Consultez nos offres !
            </sl-button>
          </div>
        </div>
        <div>
          <div>
            <img src="{{asset('images/leader.svg')}}" srcset="{{asset('images/leader.svg 1.5x')}}" alt="Le leader de la réparation express à votre service !">
          </div>
          <div>
            <div class="title-section" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">Le leader de la réparation express à votre service !</div>
            <p class="mt-3">Réparer, accessoiriser ou encore protéger votre smartphone des tracas du quotidien : <strong>c’est la mission Mayday Phone</strong>. </p>
            <p>Avec plus de <strong>150 boutiques</strong> en France et en Belgique à votre service, il y a forcément un <strong>eXpert</strong> près de chez vous, pour vous conseiller et vous aider. </p>
            <sl-button class="wf-button wf-button--primary wf-mt--3" href="#" aria-label="Le leader de la réparation express à votre service !" size="large" variant="default" data-optional="" data-valid="">
             Voir nos boutiques !
            </sl-button>
          </div>
        </div>
      </section>
      <section class="page-home-presse">
        <div class="wf-container--default">
          <div class="title-section" data-sal="slide-up" data-sal-delay="400" data-sal-duration="300">On parle de nous !</div>
          <div class="tns-carousel">
            <div class="tns-outer" id="tns1-ow">
              <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">10 to 12</span> of 4 </div>
              <div id="tns1-mw" class="tns-ovh">
                <div class="tns-inner" id="tns1-iw">
                  <div class="tns-carousel-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" data-carousel-options="{&quot;nav&quot;:true,&quot;controls&quot;:false,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:6000,&quot;loop&quot;:true,&quot;responsive&quot;:{&quot;0&quot;:{&quot;items&quot;:1,&quot;gutter&quot;:5},&quot;375&quot;:{&quot;items&quot;:1,&quot;gutter&quot;:10,&quot;edgePadding&quot;:20},&quot;490&quot;:{&quot;items&quot;:1.2,&quot;gutter&quot;:15,&quot;edgePadding&quot;:20},&quot;604&quot;:{&quot;items&quot;:2,&quot;gutter&quot;:15,&quot;edgePadding&quot;:50},&quot;768&quot;:{&quot;items&quot;:2,&quot;gutter&quot;:20,&quot;edgePadding&quot;:50},&quot;992&quot;:{&quot;items&quot;:2,&quot;gutter&quot;:20,&quot;edgePadding&quot;:70},&quot;1200&quot;:{&quot;items&quot;:3,&quot;gutter&quot;:15,&quot;loop&quot;:false,&quot;edgePadding&quot;:70},&quot;1400&quot;:{&quot;items&quot;:4,&quot;gutter&quot;:15,&quot;edgePadding&quot;:0}}}" id="tns1" style="transform: translate3d(-55.5556%, 0px, 0px);">
                    <div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                      <div class="card">
                        <div class="img">
                          <img src="{{asset('images/bfm.webp')}}" srcset="{{asset('images/bfm.webp')}}" alt="BFM">
                        </div>
                        <div class="content">
                          <div class="date">
                            <div>BFM</div>
                            <div>le 23/05/2019</div>
                          </div>
                          <div class="title">Smartphones: Où faut-il aller pour les faire réparer ?</div>
                          <a href="#" target="_blank" rel="noreferrer noopener">Lire l'article <i class="ci-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                      <div class="card">
                        <div class="img">
                          <img src="{{asset('images/lsa.webp')}}" srcset="{{asset('images/lsa.webp')}}" alt="LSA">
                        </div>
                        <div class="content">
                          <div class="date">
                            <div>LSA</div>
                            <div>le 21/02/2019</div>
                          </div>
                          <div class="title">Le mariage entre Fnac &amp; Darty et Mayday Phone prend corps.</div>
                          <a href="#" target="_blank" rel="noreferrer noopener">Lire l'article <i class="ci-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                      <div class="card">
                        <div class="img">
                          <img src="{{asset('images/lefigaro.webp')}}" srcset="{{asset('images/lefigaro.webp')}}" alt="Le Figaro">
                        </div>
                        <div class="content">
                          <div class="date">
                            <div>Le Figaro</div>
                            <div>le 20/09/2018</div>
                          </div>
                          <div class="title">Fnac Darty s'offre les boutiques de réparation de mobiles Mayday Phone.</div>
                          <a href="#" target="_blank" rel="noreferrer noopener">Lire l'article <i class="ci-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                      <div class="card">
                        <div class="img">
                          <img src="{{asset('images/franceinfo.webp')}}" srcset="{{asset('images/franceinfo.webp')}}" alt="franceinfo">
                        </div>
                        <div class="content">
                          <div class="date">
                            <div>franceinfo</div>
                            <div>le 12/11/2019</div>
                          </div>
                          <div class="title">Consommation : les grandes enseignes misent sur l'occasion.</div>
                          <a href="#" target="_blank" rel="noreferrer noopener">Lire l'article <i class="ci-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <section class="wf-container--default mb-5">
        <div class="wf-engagements wf-mt--5 wf-mb--3">
          <div class="wf-heading--md">Les <span>engagements</span> de Mayday Phone </div>
          <div class="wf-paragraph--md">Chaque mois, c’est plus de <strong>30000 réparations</strong> qui sont assurées par les techniciens <strong>Mayday Phone</strong> ! 👍 </div>
          <div class="wf-engagements-snap wf-mt--3">
            <div class="wf-engagements-grid">
              <sl-card class="wf-card">

                <sl-icon library="Mayday Phone" name="engagement-express" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg')}}" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg')}}">
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

                <sl-icon library="Mayday Phone" name="engagement-fnac" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 1652.06 681.77" xmlns="http://www.w3.org/2000/svg')}}" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg')}}">
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

                <sl-icon library="Mayday Phone" name="engagement-garantie" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg')}}" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg')}}">
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

                <sl-icon library="Mayday Phone" name="engagement-techniciens" style="font-size: 8rem" aria-hidden="true">
                  <template shadowrootmode="open">
                    <!---->
                    <svg viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg')}}" xmlns:xlink="http://www.w3.org/1999/xlink" part="svg')}}">
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
      <section class="wf-container--default mt-5 mb-3">
        <p class="text-muted fs-sm">
          <sup>*</sup>Engagement <strong>12</strong> ou <strong>24 mois</strong>.
        </p>
        <p class="text-muted fs-sm">
          <sup>*</sup>Offre valable du 25 avril au 16 mai 2023 dans les points de vente Mayday Phone participants sous réserve de stock disponible. 25% de réduction sur les deux produits lors de l’achat simultané d’une coque de protection Magsafe et d’une protection d’écran XFORCE Antibactérien ou Mat. Offre non cumulable avec d’autres promotions en cours.
        </p>
        <p class="text-muted fs-sm">
          <sup>*</sup>Offre valable du 25 avril au 16 mai 2023 dans les points de vente Mayday Phone participants sous réserve de stock disponible. Le tour de cou à 4,90€ lors de l’achat simultané d’une coque de protection Magsafe, Soft, Impact ou Flex et d’un tour de cou universel. Offre non cumulable avec d’autres promotions en cours.
        </p>
      </section>
    </main>

    @include('components.footer')
    @include('components.footer-scripts')
  </body>
</html>

