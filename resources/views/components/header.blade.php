<header class="navbar-sticky bg-light navbar-stuck">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <div class="order-3">
          <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#navigation" aria-label="Ouvrir le menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          {{-- <button class="navbar-toggler" type="button" data-search-open="">
            <sl-icon library="heroicons" name="magnifying-glass" style="display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;" aria-hidden="true">
              <template shadowrootmode="open">
                <!---->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                </svg>
              </template>
            </sl-icon>
          </button> --}}
        </div>
        <a class="navbar-brand order-2 order-lg-1" href="#" aria-label="Retourner à l&#39;accueil">
          <svg width="175px" height="36px" viewBox="0 0 185 36" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" transform="translate(.172843 .52)">
              <path fill="#1d57c4" d="m113.707157 34.85h-55.64c-1.5717335-.005486-2.844514-1.2782665-2.85-2.85v-29.15c.005486-1.57173354 1.2782665-2.84451397 2.85-2.85h55.64c1.571734.00548603 2.844514 1.27826646 2.85 2.85v29.15c-.005486 1.5717335-1.278266 2.844514-2.85 2.85"></path>
              <path fill="#000" d="m21.957157 30.56c-.2575635-.0078475-.4802394-.1819395-.55-.43l-4.34-17.43h-.07l-4.27 17.43c-.0638413.2519741-.2900667.4288412-.55.43h-5c-.25706698 0-.48235079-.1719939-.55-.42l-6.61-25.1c-.04296343-.17271917-.00424681-.35560167.10502387-.49609255.10927068-.14049087.27699579-.22303345.45497613-.22392979h4.57c.26659641-.00232443.49920529.18043968.56.44002234l4.05 17.42h.07l4.45-17.43c.0638413-.25197411.2900667-.42884122.55-.43002234h4.52c.2599333.00118112.4861587.17804823.55.43002234l4.38 17.65h.07l4.2-17.64c.0599425-.25594316.2871412-.43770217.55-.44002234h4.47c.1776734 0 .3451985.08281744.4530534.22400933s.1437028.32460211.0969466.49601301l-6.75 25.1c-.0676492.2480061-.292933.42-.55.42z"></path>
              <path fill="#000" d="m39.897157 26c.9280497.8181537 2.1460062 1.2289438 3.38 1.14.9668443.0265955 1.9178316-.2496103 2.72-.79.5303198-.3314943.9674081-.792674 1.27-1.34.0971967-.2181628.3220612-.3506723.56-.33h3.4c.1880225-.0020626.3649655.0887362.4729299.2426855s.1330582.3512399.0670701.5273145c-.5711531 1.6696483-1.6607912 3.1131559-3.11 4.12-1.6550578 1.014414-3.569586 1.5251865-5.51 1.47-1.3836204.0211877-2.7584613-.2232284-4.05-.72-1.1361523-.4355374-2.1609838-1.1187584-3-2-.8528713-.9101066-1.5097713-1.9856527-1.93-3.16-.459698-1.2830832-.6898789-2.6370887-.68-4-.0169298-1.3652211.2204476-2.7216633.7-4 .8820989-2.3841051 2.7093888-4.2982365 5.05-5.29 1.2645104-.5345708 2.6274012-.7969273 4-.77 1.4610108-.0341176 2.908671.2849165 4.22.93 1.1819802.5958536 2.2090707 1.4586097 3 2.52.783885 1.0809179 1.3509946 2.3034296 1.67 3.6.302697 1.205572.4339879 2.4477865.39 3.69-.0107726.301442-.2583656.5401924-.56.54h-12.74c-.1595262-.0009186-.311872.0662436-.418802.1846304-.1069301.1183868-.158293.2767593-.141198.4353696.0364996 1.1319851.4762691 2.2136762 1.24 3.05m5.9-10c-.7624504-.726919-1.8005079-1.0911497-2.85-1-.7166214-.0243875-1.4289897.1194561-2.08.42-.5066743.2347275-.9568744.5757881-1.32 1-.3175091.3899238-.5553437.8384119-.7 1.32-.059648.1899674-.1064208.3837401-.14.58-.0333736.1664243.0105366.3390039.119391.4692404s.2709038.2040729.440609.2007596h7.12c.1745639.0024305.3402748-.0766895.4481346-.2139657.1078598-.1372761.1455275-.3170015.1018654-.4860343-.1754689-.855225-.5564301-1.6549004-1.11-2.33"></path>
              <g fill="#fff" transform="translate(59.147066 4.32)">
                <path d="m18.4500911.57v3.71c0 .31480231-.2551977.57-.57.57h-11.54000005c-.31256195.0053441-.5646559.25743805-.57.57v4.93c.0053441.3125619.25743805.5646559.57.57h9.85000005c.3148023 0 .57.2551977.57.57v3.34c-.0053442.3125619-.2574381.5646559-.57.57h-9.85000005c-.31480231 0-.57.2551977-.57.57v9.7c0 .3148023-.25519769.5700911-.57.5700911h-4.63c-.15199663.0026482-.29857542-.0565251-.40607072-.1640204s-.16666863-.2540741-.16402033-.4060707v-25.1c0-.1511734.06014445-.29615513.16704019-.40305086.10689573-.10689574.25187746-.16694914.40305086-.16694914h17.31000005c.3125619.0053441.5646558.25743805.57.57"></path>
                <path d="m22.7800911 4.3v-3.73c.0053441-.31256195.257438-.5646559.57-.57h4.08c.3148023 0 .57.25519769.57.57v3.73c.0027393.15199663-.056434.29857542-.1639293.40607072s-.2540741.16666863-.4060707.16392928h-4.08c-.3148024 0-.57-.25519769-.57-.57m5.22 4.13v17.24c.0027393.1519966-.056434.2985754-.1639293.4060707s-.2540741.1666686-.4060707.1640204h-4.08c-.3148024 0-.57-.2552888-.57-.5700911v-17.24c.005455-.31089021.2590619-.56008941.57-.56008941h4.08c.1502462-.00259399.2952669.05521909.4024601.16053172.1071932.10531262.1675638.2492875.1675399.39955769"></path>
                <path d="m32.4700911 23.16 2.88 2.88c.1056645.1106509.2520012.1732507.405.1732507.1529987 0 .2993354-.0625998.405-.1732507l17.35-17.35c.2185615-.22188307.2185615-.57811693 0-.8l-2.89-2.89c-.2218831-.21856159-.578117-.21856159-.8 0l-17.35 17.38c-.1106509.1056646-.1732508.2520012-.1732508.405s.0625999.2993354.1732508.405"></path>
                <path d="m36.1600911 5.03c-.2252833-.21975909-.5847168-.21975909-.81 0l-2.88 2.89c-.1101041.1039084-.1725083.24860695-.1725083.4s.0624042.2960916.1725083.4l5.81 5.82 3.69-3.69z"></path>
                <path d="m53.5100911 22.38-5.83-5.82-3.69 3.69 5.82 5.82c.1039084.110104.2486069.1725083.4.1725083.151393 0 .2960915-.0624043.4-.1725083l2.9-2.91c.219759-.2252833.219759-.5847167 0-.81"></path>
              </g>
              <g class="line" fill="#000">
                <path d="m139.567157 20.03s-.49-4.22 5.32-4.22c0 0 5.53-.28 5.38 3.36h-2.83s-.23-1.53-2.55-1.58c-1.048699-.0835775-2.002609.6074771-2.25 1.63v.81h7.82v1.35s.72-1.78 4-1.68c0 0 5.09-.1 5.37 3.6v6.42h-3v-6s-.31-1.83-2.83-1.83c0 0-3-.2-3.5 2.21v5.61h-3.06v-7.61h-4.75v7.62h-3v-7.62h-1.35v-2.07z"></path>
                <path d="m168.697157 20.11c-1.500072-.2174707-3.020518-.2577474-4.53-.12 0 0-3.78.35-3.69 3.4h3.07s-.27-1.59 2-1.68h1.25s2 0 2.1 1.2c-.002572.2873182-.120592.561529-.327491.7609052-.2069.1993762-.485293.3071623-.772509.2990948 0 0-4.36.4-6 .76-.969803.3284945-1.624395 1.2360885-1.63 2.26.067221 1.2703137.962633 2.3448083 2.2 2.64.809746.1681555 1.633177.2618794 2.46.28 1.497936.0811197 2.979944-.3413053 4.21-1.2v1h2.68v-6.56s.11-2.29-3.02-3.04zm.22 6c-.256192 1.2550929-1.359029 2.1574143-2.64 2.16h-1s-1.85 0-2-1.29c0-.5522847.447715-1 1-1 0 0 1.37-.21 2-.22.897203-.0821613 1.784543-.2495838 2.65-.5z"></path>
                <path d="m184.457157 23.15h-3.16c-.551975-.961182-1.631975-1.4912917-2.73-1.34 0 0-3.46 0-3.46 2.91 0 0-.1 3.05 3.55 3.13 0 0 2.27.08 2.92-1.58h3.000013s.049987 3.15-6.050013 3.55c0 0-6.29.27-6.42-5.17 0 0-.37-4.68 6.37-4.81.03 0 5.35-.09 5.98 3.31z"></path>
              </g>
              <g class="line" fill="#000">
                <path d="m129.197157 27.21c.057746.7196997-.180667 1.4318017-.660112 1.9716489-.479445.5398473-1.158405.8606937-1.879888.8883511-.585924.0313844-1.15376-.2082864-1.54-.65v.5h-1.8v-7.58h1.8v2.66c.38624-.4417136.954076-.6813844 1.54-.65.720482.030442 1.39773.3521011 1.876585.8912844s.718278 1.2496809.663415 1.9687156zm-1.8 0c-.021906-.6239272-.54159-1.1141706-1.165734-1.0996932s-1.120538.5282894-1.113491 1.1525613.514913 1.1267475 1.139225 1.1271319c.312105.0090687.613596-.1137327.830542-.3382904.216945-.2245577.32928-.5301031.309458-.8417096z"></path>
                <path d="m135.187157 24.48-1.85 5.33c-.362935 1.4709777-1.765697 2.4404703-3.27 2.26v-1.67c.77 0 1.1-.17 1.34-.65l-2.16-5.27h2l1.09 3.14.85-3.14z"></path>
              </g>
            </g>
          </svg>
        </a>
        <div class="collapse navbar-collapse order-lg-2">
          <ul class="navbar-nav ms-auto" role="list">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" aria-label="Réparez dés maintenant votre appareil">
                <span class="fw-medium">Réparer</span>
              </a>
              <ul class="dropdown-menu pb-0" style="width: 290px" role="list">
                <li class="dropdown position-relative mb-0">
                  <a class="dropdown-item dropdown-toggle border-bottom py-2" href="#" aria-label="Réparez votre smartphone !">
                    <div class="d-flex align-items-center">
                      <svg width="28px" height="28px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M8.5,3 C7.67157288,3 7,3.67157288 7,4.5 L7,19.5 C7,20.3284271 7.67157288,21 8.5,21 L15.5113578,21 C16.3397849,21 17.0113578,20.3284271 17.0113578,19.5 L17.0113578,4.5 C17.0113578,3.67157288 16.3397849,3 15.5113578,3 L15.4999997,3 C15.2238576,3 15,3.22385763 15,3.5 C15,4.32842712 14.3284271,5 13.5,5 L10.5,5 C9.67157288,5 9,4.32842712 9,3.5 C9,3.22385763 8.77614237,3 8.5,3 Z M9.91464715,3 C9.96992289,3.15638946 10,3.32468229 10,3.5 C10,3.77614237 10.2238576,4 10.5,4 L13.5,4 C13.7761424,4 14,3.77614237 14,3.5 C14,3.32468229 14.0300771,3.15638946 14.0853529,3 L9.91464715,3 Z M6,4.5 C6,3.11928813 7.11928813,2 8.5,2 L15.5113578,2 C16.8920696,2 18.0113578,3.11928813 18.0113578,4.5 L18.0113578,19.5 C18.0113578,20.8807119 16.8920696,22 15.5113578,22 L8.5,22 C7.11928813,22 6,20.8807119 6,19.5 L6,4.5 Z"></path>
                      </svg>
                      <div class="ms-3">
                        <span class="d-block text-heading fs-md mts fw-medium">Smartphones</span>
                        <small class="d-block text-muted">Réparez votre smartphone !</small>
                      </div>
                    </div>
                  </a>
                  <ul class="dropdown-menu" style="width: 270px" role="list">
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre smartphone Apple !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('images/apple.webp')}}" srcset="{{asset('images/apple.webp 1.5x')}}" alt="Protection écran Apple" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">APPLE</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre smartphone Samsung !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('images/samsung.webp')}}" srcset="{{asset('images/samsung.webp 1.5x')}}" alt="Protection écran Samsung" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">SAMSUNG</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre smartphone Huawei !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('images/huawei.webp')}}" srcset="{{asset('images/huawei.webp 1.5x')}}" alt="Protection écran Huawei" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">HUAWEI</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre smartphone Xiaomi !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('images/xiaomi.webp')}}" srcset="{{asset('images/xiaomi.webp 1.5x')}}" alt="Protection écran Xiaomi" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">XIAOMI</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre smartphone Oppo !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('images/oppo.webp')}}" srcset="{{asset('images/oppo.webp 1.5x')}}" alt="Protection écran Oppo" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">OPPO</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre smartphone Oneplus !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('images/oneplus.webp')}}" srcset="{{asset('images/oneplus.webp 1.5x')}}" alt="Protection écran Oneplus" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">ONEPLUS</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre smartphone Honor !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('images/honor.webp')}}" srcset="{{asset('images/honor.webp 1.5x')}}" alt="Protection écran Honor" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">HONOR</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre smartphone Google !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('images/google.webp')}}" srcset="{{asset('images/google.webp 1.5x')}}" alt="Protection écran Google" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">GOOGLE</div>
                      </a>
                    </li>
                    <li class="dropdown position-static bg-faded-accent mb-0">
                      <a class="dropdown-item py-3" href="#" aria-label="Réparez votre smartphone !">
                        <div class="d-flex align-items-center justify-content-between">
                          <strong class="d-block text-heading fs-14 mts">
                            <u>Voir tous les smartphones</u>
                          </strong>
                          <i class="ci-arrow-right fw-bold fs-12"></i>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown position-relative mb-0">
                  <a class="dropdown-item dropdown-toggle border-bottom py-2" href="#" aria-label="Réparez votre tablette !">
                    <div class="d-flex align-items-center">
                      <svg width="28px" height="28px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" fill-rule="nonzero" d="M5,4.5 L5,19.5 C5,20.3284271 5.67157288,21 6.5,21 L17.5113578,21 C18.3397849,21 19.0113578,20.3284271 19.0113578,19.5 L19.0113578,4.5 C19.0113578,3.67157288 18.3397849,3 17.5113578,3 L6.5,3 C5.67157288,3 5,3.67157288 5,4.5 Z M4,4.5 C4,3.11928813 5.11928813,2 6.5,2 L17.5113578,2 C18.8920696,2 20.0113578,3.11928813 20.0113578,4.5 L20.0113578,19.5 C20.0113578,20.8807119 18.8920696,22 17.5113578,22 L6.5,22 C5.11928813,22 4,20.8807119 4,19.5 L4,4.5 Z"></path>
                        <path fill="currentColor" d="M11,19 C11,18.448 11.448,18 12,18 C12.552,18 13,18.448 13,19 C13,19.552 12.552,20 12,20 C11.448,20 11,19.552 11,19 Z"></path>
                        <path fill="currentColor" fill-rule="nonzero" d="M10.5,5 C10.2238576,5 10,4.77614237 10,4.5 C10,4.22385763 10.2238576,4 10.5,4 L13.5,4 C13.7761424,4 14,4.22385763 14,4.5 C14,4.77614237 13.7761424,5 13.5,5 L10.5,5 Z"></path>
                      </svg>
                      <div class="ms-3">
                        <span class="d-block text-heading fs-md mts fw-medium">Tablettes</span>
                        <small class="d-block text-muted">Réparez votre tablette !</small>
                      </div>
                    </div>
                  </a>
                  <ul class="dropdown-menu" style="width: 270px" role="list">
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre tablette Samsung !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('reparation/samsung(1).webp')}}" srcset="{{asset('/assets/images/navbar/reparation/tablette/samsung.webp 1.5x')}}" alt="Protection écran Samsung" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">SAMSUNG</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre tablette Huawei !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('reparation/huawei(1).webp')}}" srcset="{{asset('/assets/images/navbar/reparation/tablette/huawei.webp 1.5x')}}" alt="Protection écran Huawei" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">HUAWEI</div>
                      </a>
                    </li>
                    <li class="dropdown position-static bg-faded-success mb-0">
                      <a class="dropdown-item py-3" href="#" aria-label="Réparez votre tablette !">
                        <div class="d-flex align-items-center justify-content-between">
                          <strong class="d-block text-heading fs-14 mts">
                            <u>Voir toutes les tablettes</u>
                          </strong>
                          <i class="ci-arrow-right fw-bold fs-12"></i>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown position-relative mb-0">
                  <a class="dropdown-item dropdown-toggle border-bottom py-2" href="#" aria-label="Réparez votre console de jeu Nintendo Switch !">
                    <div class="d-flex align-items-center">
                      <svg width="28px" height="28px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M13.5 8L14.5 8C14.7761424 8 15 8.22385763 15 8.5L15 9.5C15 9.77614237 14.7761424 10 14.5 10L13.5 10C13.2238576 10 13 9.77614237 13 9.5L13 8.5C13 8.22385763 13.2238576 8 13.5 8zM16.5 8L17.5 8C17.7761424 8 18 8.22385763 18 8.5L18 9.5C18 9.77614237 17.7761424 10 17.5 10L16.5 10C16.2238576 10 16 9.77614237 16 9.5L16 8.5C16 8.22385763 16.2238576 8 16.5 8zM14.5 11L15.5 11C15.7761424 11 16 11.2238576 16 11.5L16 12.5C16 12.7761424 15.7761424 13 15.5 13L14.5 13C14.2238576 13 14 12.7761424 14 12.5L14 11.5C14 11.2238576 14.2238576 11 14.5 11zM17.5 11L18.5 11C18.7761424 11 19 11.2238576 19 11.5L19 12.5C19 12.7761424 18.7761424 13 18.5 13L17.5 13C17.2238576 13 17 12.7761424 17 12.5L17 11.5C17 11.2238576 17.2238576 11 17.5 11z"></path>
                        <path fill="currentColor" fill-rule="nonzero" d="M12,7 C10.649064,7 9.8079887,6.82293152 8.98443077,6.45690577 C8.87868964,6.40990972 8.53493964,6.24787268 8.46359743,6.21616503 C8.11708872,6.06216116 7.86533602,6 7.5,6 C5.48842607,6 3,9.36669409 3,14.5 C3,16.9847067 3.40644417,17.9684375 4.08053547,18.0487836 C4.68069217,18.1203173 5.10652885,17.9217038 7.47252293,16.5919638 C8.80629064,15.8423575 9.69745371,15.4265247 10.6398833,15.1840632 C11.1101017,15.0630889 11.5618096,15 12,15 C12.4381904,15 12.8898983,15.0630889 13.3601167,15.1840632 C14.3025463,15.4265247 15.1937094,15.8423575 16.5274771,16.5919638 C18.8934711,17.9217038 19.3193078,18.1203173 19.9194645,18.0487836 C20.5935558,17.9684375 21,16.9847067 21,14.5 C21,9.36669409 18.5115739,6 16.5,6 C16.134664,6 15.8829113,6.06216116 15.5364026,6.21616503 C15.4650604,6.24787268 15.1213104,6.40990972 15.0155692,6.45690577 C14.1920113,6.82293152 13.350936,7 12,7 Z M12,6 C13.211564,6 13.9142387,5.85206848 14.6094308,5.54309423 C14.7016063,5.50212732 15.0453563,5.34009028 15.1302641,5.30235348 C15.5962554,5.09524625 15.9820027,5 16.5,5 C19.1406,5 22,8.86860003 22,14.5 C22,17.4394544 21.4053282,18.8787592 20.0378185,19.0417551 C19.1067466,19.1527312 18.7307433,18.9773603 16.0375326,17.4637175 C14.7749612,16.754125 13.9462042,16.3674119 13.1109577,16.1525258 C12.7184246,16.0515377 12.349421,16 12,16 C11.650579,16 11.2815754,16.0515377 10.8890423,16.1525258 C10.0537958,16.3674119 9.22503877,16.754125 7.96246739,17.4637175 C5.26925666,18.9773603 4.89325336,19.1527312 3.96218146,19.0417551 C2.59467185,18.8787592 2,17.4394544 2,14.5 C2,8.86860003 4.85940002,5 7.5,5 C8.01799731,5 8.40374461,5.09524625 8.8697359,5.30235348 C8.95464369,5.34009028 9.29839369,5.50212732 9.39056923,5.54309423 C10.0857613,5.85206848 10.788436,6 12,6 Z"></path>
                        <path fill="currentColor" fill-rule="nonzero" d="M7,8.5 C7,8.22385763 7.22385763,8 7.5,8 C7.77614237,8 8,8.22385763 8,8.5 L8,12.5 C8,12.7761424 7.77614237,13 7.5,13 C7.22385763,13 7,12.7761424 7,12.5 L7,8.5 Z"></path>
                        <path fill="currentColor" fill-rule="nonzero" d="M5.5,11 C5.22385763,11 5,10.7761424 5,10.5 C5,10.2238576 5.22385763,10 5.5,10 L9.5,10 C9.77614237,10 10,10.2238576 10,10.5 C10,10.7761424 9.77614237,11 9.5,11 L5.5,11 Z"></path>
                      </svg>
                      <div class="ms-3">
                        <span class="d-block text-heading fs-md mts fw-medium">Consoles de jeu</span>
                        <small class="d-block text-muted">Réparez votre Switch !</small>
                      </div>
                    </div>
                  </a>
                  <ul class="dropdown-menu" style="width: 280px" role="list">
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre tablette Nintendo Switch OLED !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('reparation/oled.webp')}}" srcset="{{asset('/assets/images/navbar/reparation/switch/oled.webp 1.5x')}}" alt="Protection écran Nintendo Switch OLED" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">Nintendo Switch OLED</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre tablette Nintendo Switch Lite !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('reparation/lite.webp')}}" srcset="{{asset('/assets/images/navbar/reparation/switch/lite.webp 1.5x')}}" alt="Protection écran Nintendo Switch Lite" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">Nintendo Switch Lite</div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center py-2" href="#" aria-label="Réparez votre tablette Nintendo Switch !">
                        <div class="me-2" style="width: 40px; height: 40px">
                          <img src="{{asset('reparation/switch.webp')}}" srcset="{{asset('/assets/images/navbar/reparation/switch/switch.webp 1.5x')}}" alt="Protection écran Nintendo Switch" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                        </div>
                        <div class="mts fs-16 fw-medium">Nintendo Switch</div>
                      </a>
                    </li>
                    <li class="dropdown position-static bg-faded-danger mb-0">
                      <a class="dropdown-item py-3" href="#" aria-label="Réparez votre Nintendo Switch !">
                        <div class="d-flex align-items-center justify-content-between">
                          <strong class="d-block text-heading fs-14 mts">
                            <u>Voir toutes les Switch</u>
                          </strong>
                          <i class="ci-arrow-right fw-bold fs-12"></i>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown position-static bg-faded-primary mb-0">
                  <a class="dropdown-item py-3" href="#" aria-label="Voir toutes les marques !">
                    <div class="d-flex align-items-center justify-content-between">
                      <strong class="d-block text-heading fs-14 mts">
                        <u>Voir toutes les marques</u>
                      </strong>
                      <i class="ci-arrow-right fw-bold fs-12"></i>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fw-medium" href="#" aria-label="Protégez tous vos appareils !">
                <span>Revendre</span>
              </a>
              <div class="dropdown-menu py-3 px-2">
                <div class="d-flex flex-wrap flex-sm-nowrap" style="gap: 8px">
                  <a class="product-card-alt mega-dropdown-column" href="#" aria-label="Protection Apple">
                    <div class="widget widget-links product-thumb">
                      <div class="product-card-actions">
                        <div class="btn btn-light btn-icon mx-2">
                          <i class="ci-eye fs-17"></i>
                        </div>
                      </div>
                      <div class="product-thumb-overlay"></div>
                      <img src="{{asset('reparation/apple(1).webp')}}" srcset="{{asset('/assets/images/navbar/xforce/apple.webp 1.5x')}}" alt="Protection écran Apple" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                    </div>
                    <div class="title fs-20 mt-2">Univers <strong>APPLE</strong>
                    </div>
                    <small class="text-muted">Protégez vos appareils Apple.</small>
                  </a>
                  <a class="product-card-alt mega-dropdown-column" href="#" aria-label="Protection Samsung">
                    <div class="widget widget-links product-thumb">
                      <div class="product-card-actions">
                        <div class="btn btn-light btn-icon mx-2">
                          <i class="ci-eye fs-17"></i>
                        </div>
                      </div>
                      <div class="product-thumb-overlay"></div>
                      <img src="{{asset('reparation/samsung(2).webp')}}" srcset="{{asset('/assets/images/navbar/xforce/samsung.webp 1.5x')}}" alt="Protection écran Samsung" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                    </div>
                    <div class="title fs-20 mt-2">Univers <strong>SAMSUNG</strong>
                    </div>
                    <small class="text-muted">Protégez vos appareils Samsung.</small>
                  </a>
                </div>
                <div class="d-flex flex-wrap flex-sm-nowrap my-3" style="gap: 8px">
                  <a class="product-card-alt mega-dropdown-column" href="#" aria-label="Protection Oppo">
                    <div class="widget widget-links product-thumb">
                      <div class="product-card-actions">
                        <div class="btn btn-light btn-icon mx-2">
                          <i class="ci-eye fs-17"></i>
                        </div>
                      </div>
                      <div class="product-thumb-overlay"></div>
                      <img src="{{asset('reparation/oppo(1).webp')}}" srcset="{{asset('/assets/images/navbar/xforce/oppo.webp 1.5x')}}" alt="Protection écran Oppo" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                    </div>
                    <div class="title fs-20 mt-2">Univers <strong>OPPO</strong>
                    </div>
                    <small class="text-muted">Protégez vos appareils Oppo.</small>
                  </a>
                  <a class="product-card-alt mega-dropdown-column" href="#" aria-label="Protection Huawei">
                    <div class="widget widget-links product-thumb">
                      <div class="product-card-actions">
                        <div class="btn btn-light btn-icon mx-2">
                          <i class="ci-eye fs-17"></i>
                        </div>
                      </div>
                      <div class="product-thumb-overlay"></div>
                      <img src="{{asset('reparation/huawei(2).webp')}}" srcset="{{asset('/assets/images/navbar/xforce/huawei.webp 1.5x')}}" alt="Protection écran Huawei" width="100%" height="100%" draggable="false" oncontextmenu="return false">
                    </div>
                    <div class="title fs-20 mt-2">Univers <strong>HUAWEI</strong>
                    </div>
                    <small class="text-muted">Protégez vos appareils Huawei.</small>
                  </a>
                </div>
                <div class="d-flex align-items-center justify-content-end">
                  <a class="hover-underline fw-medium" href="#" aria-label="Toutes les marques XFORCE">
                    <div class="title-subsection text-primary fs-16">Voir toutes les marques que nous protégeons <i class="ci-arrow-right fs-14 ms-1"></i>
                    </div>
                  </a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" aria-label="Toutes nos boutiques Mayday Phone !">
                <span class="fw-medium">Nos boutiques</span>
              </a>
            </li>

            <li class="nav-item">
              <sl-icon class="nav-link" library="heroicons" name="magnifying-glass" style="display:inline-block;width:1.5em;height:1.5em;vertical-align:middle; cursor: pointer;" data-search-open="" aria-hidden="true">
                <template shadowrootmode="open">
                  <!---->
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                  </svg>
                </template>
              </sl-icon>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
