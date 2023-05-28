<!DOCTYPE html>

<html lang="en">
@include('reparation.head')

<body x-init="" cz-shortcut-listen="true">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC998KW" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>
    <main class="wrapper">
        @livewire('quote-model-controller', ['model' => $model])

        <section class="container-fluid mt-3 mb-md-5 px-lg-4">
            <div class="container">
                <div class="wf-step sal-animate" aria-label="stepper" role="navigation" data-sal="fade-in" data-sal-delay="200" data-sal-duration="200" data-sal-once="data-sal-once">
                  <sl-resize-observer>
                    <template shadowrootmode="open">
                      <!---->
                      <slot></slot>
                    </template>
                    <a class="wf-step__item" href="#" aria-label="Marques">
                      <div class="wf-step__item--dot">
                        <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                          <template shadowrootmode="open">
                            <!---->
                          </template>
                        </sl-divider>
                        <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">

                          <sl-icon library="heroicons" name="check" label="Marques" role="img" aria-label="Marques">
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
                      <div class="wf-step__item--text" aria-current="page">Marques</div>
                    </a>
                    <a class="wf-step__item" href="#" aria-label="Modèles">
                      <div class="wf-step__item--dot">
                        <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                          <template shadowrootmode="open">
                            <!---->
                          </template>
                        </sl-divider>
                        <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">

                          <sl-icon library="heroicons" name="check" label="Modèles" role="img" aria-label="Modèles">
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
                      <div class="wf-step__item--text" aria-current="page">Modèles</div>
                    </a>
                    <a class="wf-step__item" href="#" aria-label="Pannes">
                      <div class="wf-step__item--dot">
                        <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                          <template shadowrootmode="open">
                            <!---->
                          </template>
                        </sl-divider>
                        <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">

                          <sl-icon library="heroicons" name="check" label="Pannes" role="img" aria-label="Pannes">
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
                      <div class="wf-step__item--text" aria-current="page">Pannes</div>
                    </a>
                    <a class="wf-step__item" href="#" aria-label="Boutiques">
                      <div class="wf-step__item--dot">
                        <sl-divider class="wf-divider" role="separator" aria-orientation="horizontal">
                          <template shadowrootmode="open">
                            <!---->
                          </template>
                        </sl-divider>
                        <sl-button class="wf-button" variant="default" circle="" size="medium" data-optional="" data-valid="">

                          <sl-icon library="heroicons" name="check" label="Boutiques" role="img" aria-label="Boutiques">
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
                      <div class="wf-step__item--text" aria-current="page">Boutiques</div>
                    </a>
                    <a class="wf-step__item wf-step__item--active" aria-label="Réservation">
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
                      <div class="wf-step__item--text" aria-current="page">Réservation</div>
                    </a>
                  </sl-resize-observer>
                </div>
              </div>
            <h1 class="title-section text-center mt-3 sal-animate" data-sal="slide-up" data-sal-delay="400"
                data-sal-duration="300">Prenez rendez-vous dès maintenant <span class="d-none d-md-block"></span>
                <strong class="text-green">et bénéficiez de -10% <sup>*</sup> sur votre devis ! </strong>
            </h1>
            <div class="grid mt-md-3" style="--wf-gap: 16px">

                <div class="g-col-xl-12 g-col-12">
                    <div class="d-none d-lg-block">
                        <div data-calendar-animation="" class="none">
                          <div>
                            <div class="spinner-border" role="status">
                              <span class="visually-hidden">Chargement du calendrier ...</span>
                            </div>
                            <div class="title-section">Chargement du calendrier ...</div>
                          </div>
                        </div>
                        <div class="bg-light shadow-lg rounded-3 px-4 py-3 mt-3 mb-5" data-calendar-body="">
                          <div class="d-flex justify-content-between">
                            <div>
                              <button class="btn btn-outline-dark rounded-pill btn-icon disabled" type="button" data-calendar-prev="">
                                <i class="ci-arrow-left fw-bold"></i>
                              </button>
                            </div>
                            <div data-calendar="" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                              <div aria-labelledby="" class="fc-view-harness fc-view-harness-passive">
                                <div class="fc-dayGridWeek-view fc-view fc-daygrid">
                                  <table role="grid" class="fc-scrollgrid ">
                                    <thead role="rowgroup">
                                      <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-header  fc-scrollgrid-section-sticky">
                                        <th role="presentation">
                                          <div class="fc-scroller-harness">
                                            <div class="fc-scroller" style="overflow: visible;">
                                              <table role="presentation" class="fc-col-header " style="width: 100%;">
                                                <colgroup></colgroup>
                                                <thead role="presentation">
                                                  <tr role="row">


                                                    @foreach ($nextDays as $day)
                                                        @php
                                                            $day = explode(" ", $day);
                                                            $times = \App\Models\Repair\StoreDevice::timeSlots($day[0], $store);
                                                        @endphp
                                                        <th role="columnheader"  class="fc-col-header-cell fc-day fc-day-sun fc-day-past">
                                                        <div class="fc-scrollgrid-sync-inner">
                                                            <div class="d-flex flex-column align-items-center mts">
                                                            <span class="fs-14 fw-bolder ">{{$day[0]}}</span>
                                                            <span class="fs-15 fw-light ">{{$day[count($day) - 2] . " " . $day[count($day) - 1]}}</span>
                                                            </div>
                                                            <a title="Go to 21 mai 2023" data-navlink="" tabindex="0" class="fc-col-header-cell-cushion" style="display: none;">dim. 21/05</a>
                                                        </div>
                                                        <br> <br>

                                                        @foreach ( $times as  $time)
                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                <div class="fc-daygrid-day-events">
                                                                    <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                    <a href="{{ route('stores.show', ['store' => $store, 'day' => $day[0], 'date' => $day[count($day) - 2] . " " . $day[count($day) - 1],  'hour' => $time ]) }}" tabindex="0" class="fc-event fc-event-start fc-event-end fc-event-future fc-daygrid-event fc-daygrid-block-event fc-h-event border-0">
                                                                        <div class="fc-event-main">
                                                                        <div style="color: white !important;" class="fc-daygrid-event--title">{{$time}}</div>
                                                                        </div>
                                                                    </a>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-daygrid-day-bg"></div>
                                                            </div>
                                                        @endforeach


                                                        </th>
                                                    @endforeach

                                                  </tr>
                                                </thead>
                                              </table>
                                            </div>
                                          </div>
                                        </th>
                                      </tr>
                                    </thead>

                                  </table>
                                </div>
                              </div>
                            </div>
                            <div>
                              <button class="btn btn-outline-dark rounded-pill btn-icon" type="button" data-calendar-next="">
                                <i class="ci-arrow-right fw-bold"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                    </div>
                    @livewire('schedule-mobile-format-controller', ['model' => $model, 'nextDays'=> $nextDays, 'store'=> $store])
                </div>
            </div>
            <div class="mt-md-1 mt-0 mb-md-0 mb-3 text-muted fs-13"><sup>*</sup>Réduction de 10% applicable sur la
                réparation la plus chère de la prestation réservée via une prise de rendez-vous sur le site <a
                    class="wf-decoration--underline" href="#">wefix.net</a>. Sous réserve que la
                réparation soit effectuée dans le point de vente et a l’heure choisie lors de la prise de rendez-vous.
                WeFix se réserve le droit d’annuler le rendez-vous à tout moment. Offre non cumulable avec une autre
                offre. </div>
        </section>
    </main>

    @include('components.footer')
    @include('components.footer-scripts')
    <div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;">
      <div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;">
        <button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button>
        <ul class="swal2-progress-steps" style="display: none;"></ul>
        <div class="swal2-icon" style="display: none;"></div>
        <img class="swal2-image" style="display: none;">
        <h2 class="swal2-title" id="swal2-title" style="display: none;"></h2>
        <div class="swal2-html-container" id="swal2-html-container" style="display: block;">
          <div>
            <div class="text-center">
              <div class="title-section fs-lg-26 fs-24"> Réservez ce créneau </div>
              <div class="mts fs-lg-18 fs-16 mt-1"> le <span class="fw-bold text-primary">vendredi 26 mai 2023</span> à <span class="fw-bold text-primary">10:40</span>
              </div>
            </div>
            <p class="fs-17 mt-3 text-start"> Si vous changez d'avis sur le jour et l'heure de votre rendez-vous, vous pourrez modifier votre créneau <strong>ultérieurement</strong>, selon vos disponibilités ! </p>
            <div class="d-flex justify-content-between mt-4">
              <sl-button class="wf-button wf-button--dark" @click="Swal.closeModal(); return false;" size="medium" variant="default" data-optional="" data-valid="">
                <template shadowrootmode="open">
                  <!---->
                  <button part="base" class=" button button--default button--medium button--standard button--has-label " type="button" title="" name="" value="" role="button" aria-disabled="false" tabindex="0">
                    <slot name="prefix" part="prefix" class="button__prefix"></slot>
                    <slot part="label" class="button__label"></slot>
                    <slot name="suffix" part="suffix" class="button__suffix"></slot>
                    <!--?lit$8632527873$-->
                    <!--?lit$8632527873$-->
                  </button>
                </template> Annuler
              </sl-button>
              <sl-button class="wf-button wf-button--primary" id="continueConversionRDV" @click="confirmerRendezVous(&#39;10:40&#39;, &#39;11:00&#39;, &#39;Fri May 26 2023 10:40:00 GMT+0100 (heure normale d’Afrique de l’Ouest)&#39;)" size="medium" data-submit-rdv="" variant="default" data-optional="" data-valid="">
                <template shadowrootmode="open">
                  <!---->
                  <button part="base" class=" button button--default button--medium button--standard button--has-label " type="button" title="" name="" value="" role="button" aria-disabled="false" tabindex="0">
                    <slot name="prefix" part="prefix" class="button__prefix"></slot>
                    <slot part="label" class="button__label"></slot>
                    <slot name="suffix" part="suffix" class="button__suffix"></slot>
                    <!--?lit$8632527873$-->
                    <!--?lit$8632527873$-->
                  </button>
                </template> CONFIRMER
              </sl-button>
            </div>
            <div class="text-danger fs-sm mt-2 text-start d-none" data-error-submit-rdv=""> Vous avez déjà pris rendez-vous, ou ce créneau est malheureusement déjà pris. Veuillez réessayer. </div>
            <hr class="my-3">
            <div class="fs-sm fw-medium text-info text-start">
              <i class="ci-announcement me-1"></i> Ce créneau vous est indiqué à titre indicatif. Certaines réparations peuvent nécessiter un temps d'intervention plus long.
            </div>
          </div>
        </div>
        <input class="swal2-input" style="display: none;">
        <input type="file" class="swal2-file" style="display: none;">
        <div class="swal2-range" style="display: none;">
          <input type="range">
          <output></output>
        </div>
        <select class="swal2-select" style="display: none;"></select>
        <div class="swal2-radio" style="display: none;"></div>
        <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;">
          <input type="checkbox">
          <span class="swal2-label"></span>
        </label>
        <textarea class="swal2-textarea" style="display: none;"></textarea>
        <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
        <div class="swal2-actions" style="display: none;">
          <div class="swal2-loader"></div>
          <button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: none;">OK</button>
          <button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none;">No</button>
          <button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none;">Cancel</button>
        </div>
        <div class="swal2-footer" style="display: none;"></div>
        <div class="swal2-timer-progress-bar-container">
          <div class="swal2-timer-progress-bar" style="display: none;"></div>
        </div>
      </div>
    </div>

</body>

</html>
