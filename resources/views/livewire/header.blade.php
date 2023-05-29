<header class="navbar-sticky bg-light navbar-stuck">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="order-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#navigation"
                    aria-label="Ouvrir le menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- <button class="navbar-toggler" type="button" data-search-open="">
                    <sl-icon library="heroicons" name="magnifying-glass"
                        style="display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;" aria-hidden="true">
                        <template shadowrootmode="open">
                            <!---->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" part="svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg>
                        </template>
                    </sl-icon>
                </button> --}}
            </div>
            <a class="navbar-brand order-2 order-lg-1" href="/" aria-label="Retourner à l&#39;accueil">
                <img src="{{asset('images/logo.png')}}" alt="" width="200">
            </a>
            <div class="collapse navbar-collapse order-lg-2">
                <ul class="navbar-nav ms-auto" role="list">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-medium" href="{{route('stepsellings.index')}}"
                            aria-label="Protégez tous vos appareils !">
                            <span>REVENDRE</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('typedevices.index') }}"
                            aria-label="Réparez dés maintenant votre appareil">
                            <span class="fw-medium">REPARER</span>
                        </a>
                        <ul class="dropdown-menu pb-0" style="width: 290px" role="list">

                            @foreach ($typedevices as $typedevice)

                            <li class="dropdown position-relative mb-0">
                                <a class="dropdown-item dropdown-toggle border-bottom py-2"
                                    href="{{ route('typedevices.show', $typedevice) }}"
                                    aria-label="Réparez votre smartphone !">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('reparation/'. $typedevice->icon )}}" alt="">
                                        <div class="ms-3">
                                            <span
                                                class="d-block text-heading fs-md mts fw-medium">{{$typedevice->name}}</span>
                                            <small class="d-block text-muted">Réparez votre appareil !</small>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" style="width: 270px" role="list">
                                    @foreach ($typedevice->brandDevices()->get() as $brand)
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center py-2"
                                            href="{{ route('brands.create', ['typedevice' => $typedevice , 'brand' => $brand ]) }}"
                                            aria-label="Réparez votre smartphone Apple !">
                                            <div class="me-2" style="width: 40px; height: 40px">
                                                <img src="{{asset('images/'. $brand->image )}}"
                                                    srcset="{{asset('images/'. $brand->image.' 1.5x' )}}"
                                                    alt="Protection écran Apple" width="100%" height="100%"
                                                    draggable="false" oncontextmenu="return false">
                                            </div>
                                            {{-- <div class="mts fs-16 fw-medium">APPLE</div> --}}
                                        </a>
                                    </li>
                                    @endforeach
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
                            @endforeach

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

                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-label="Toutes nos boutiques WeFix !">
                            <span class="fw-medium">NOS BOUTIQUES</span>
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <sl-icon class="nav-link" library="heroicons" name="magnifying-glass"
                            style="display:inline-block;width:1.5em;height:1.5em;vertical-align:middle; cursor: pointer;"
                            data-search-open="" aria-hidden="true">
                            <template shadowrootmode="open">
                                <!---->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                    </path>
                                </svg>
                            </template>
                        </sl-icon>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>




<div class="wf-aside modal" tabindex="-1" id="navigation" role="dialog"
    x-data="{ reparation: false, protection: false }">
    <div class="wf-aside__wrap modal-dialog modal-dialog-scrollable modal-fullscreen" role="document">
        <div class="wf-aside__screen modal-content" x-show="!reparation &amp;&amp; !protection">
            <div class="wf-aside__screen-nav">
                <div class="wf-aside__screen-nav--title">Menu</div>
                <div class="wf-aside__screen-nav-close" data-bs-dismiss="modal" aria-label="Fermer le menu">
                    <i class="ci-close"></i>
                </div>
            </div>

            <div class="wf-aside__screen-content modal-body">
                <a class="wf-aside__screen-content-card" href="{{route('stepsellings.index')}}">
                    <div class="wf-aside__screen-content-card--title">
                        <span>REVENDRE</span>
                    </div>
                </a>

                <a class="wf-aside__screen-content-card" href="#" @click="reparation = !reparation"
                    >
                    <div class="wf-aside__screen-content-card--title">
                        <span>REPARER</span>
                    </div>
                    <i class="ci-arrow-right"></i>
                </a>


                <a class="wf-aside__screen-content-card" href="#" aria-label="Effectuez une réclamation">
                    <div class="wf-aside__screen-content-card--title"><span>NOS BOUTIQUES</span> </div>
                </a>
            </div>
            <div class="wf-aside__screen-footer modal-footer">
                <a class="btn btn-lg cta-accent" href="#" aria-label="Prenez rendez-vous dés maintenant !">PRENDRE
                    RENDEZ-VOUS </a>
            </div>
        </div>
        <div class="wf-aside__reparation modal-content" x-show="reparation" style="display: none;">
            <div class="wf-aside__reparation-nav">
                <div class="wf-aside__reparation-nav-return" @click="reparation = !reparation" x-show="reparation"
                    style="display: none;">
                    <i class="ci-arrow-left"></i>
                </div>
                <div class="wf-aside__reparation-nav-close" data-bs-dismiss="modal"
                    aria-label="Fermer le menu réparation">
                    <i class="ci-close"></i>
                </div>
            </div>
            <div class="wf-aside__reparation-content modal-body">
                <div class="wf-aside__reparation-content--title">Choisissez votre appareil ... </div>

                @foreach ($typedevices as $typedevice)
                    <a class="wf-aside__reparation-content-card" href="{{ route('typedevices.show', $typedevice) }}" aria-label="Réparez votre smartphone !">
                        <img src="{{asset('reparation/'. $typedevice->icon )}}" alt="">
                        <div class="wf-aside__reparation-content-card-body">
                            <div class="wf-aside__reparation-content-card-body--title">{{$typedevice->name}}</div>
                            <div class="wf-aside__reparation-content-card-body--subtitle">Réparez votre
                                <span>appareil</span>
                            </div>
                        </div>
                        <i class="ci-arrow-right"></i>
                    </a>
                @endforeach


            </div>
            <div class="wf-aside__screen-footer modal-footer">
                <a class="btn btn-lg cta-accent" href="#" aria-label="Effectuez votre devis dés maintenant !">EFFECTUEZ
                    VOTRE DEVIS </a>
            </div>
        </div>
    </div>
</div>
