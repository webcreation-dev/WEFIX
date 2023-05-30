<div class="row gx-lg-3">
    {{-- <div class="input-group">
        <button class="btn btn-outline-secondary btn-icon" type="button" data-corner-locate="">
          <i class="ci-location fw-bold fs-22"></i>
        </button>
        <input class="form-control form-control-lg" type="number" inputmode="numeric" oninput="this.value = this.value.replace(/D+/g, &#39;&#39;)" placeholder="Votre code postal ..." value="06260" data-corner-code="">
        <button class="btn btn-primary" type="button" data-corner-search="">
          <i class="ci-search fw-bold"></i>
        </button>
    </div> --}}
    @foreach ($stores as $store)
    <div class="col-lg-4">
        <div data-corner-list="">
        <div class="wf-corner-card">
            <div class="wf-corner-card__body">
            <div class="wf-corner-card__body--header">
                <div class="wf-corner-card__body--header-title">
                <span>{{ $loop->iteration }}.</span> {{$store->name}}
                </div>
                <div class="wf-corner-card__body--header-info">
                <div>{{$store->address}},</div>
                <div><span class="code">{{$store->city}}</span>
                </div>
                </div>
            </div>
            {{-- <div class="wf-corner-card__body--content">
                <div class="wf-corner-card__body--content-header">Liste de mes pannes :</div>
                <ul class="list" role="list">
                <li class="list--item" role="list-item" data-type-stock="CORNER" data-product-id="FORFAIT_EFFACE_RESTORE">
                    <div class="list--item-image list--item-image--reparation">
                    <img src="{{asset('reparation/restauration.webp')}}" alt="Restauration effacement des données" srcset="https://intranet.wefix.net/WB/services/restauration.webp 1.5x">
                    </div>
                    <div class="list--item-name">Restauration effacement des données</div>
                    <div class="list--item-stock">
                    <svg width="62px" height="22px" viewBox="0 0 70 22" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="icon-stock" fill-rule="nonzero">
                            <rect id="Rectangle" fill="#129F1E" x="0" y="0" width="70" height="22" rx="11"></rect>
                            <g id="Group" transform="translate(12.000000, 4.000000)" fill="#FFFFFF" font-family="Helvetica" font-size="12" font-weight="normal">
                            <g id="En-stock-sur-rdv">
                                <text id="En-stock">
                                <tspan x="0" y="11">En stock</tspan>
                                </text>
                            </g>
                            </g>
                        </g>
                        </g>
                    </svg>
                    </div>
                </li>
                </ul>
            </div> --}}
            <div class="accordion">
                <div class="accordion-item">
                <div class="accordion-header accordion-hours--header" id="hours0">
                    <div class="accordion-button accordion-hours--header-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-hours{{ $loop->iteration }}" aria-expanded="false" aria-controls="collapse-hours0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>Horaires d'ouverture :</div>
                    </div>
                </div>
                <div class="accordion-collapse collapse" id="collapse-hours{{ $loop->iteration }}" aria-labelledby="hours0">
                    <div class="accordion-body">
                    <div class="wf-corner-card__body--hours">
                        <div class="wf-corner-card__body--hours-content">

                            @foreach ($store->scheduleStores()->get() as $shedule )

                                <div class="wf-corner-card__body--hours-content--day">{{$shedule->day}}</div>
                                <div class="wf-corner-card__body--hours-content--start">{{substr($shedule->hour_open, 0, 5) }}</div>
                                <div class="wf-corner-card__body--hours-content--divider">-</div>
                                <div class="wf-corner-card__body--hours-content--end">{{substr($shedule->hour_close, 0, 5) }}</div>
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="wf-corner-card__body--footer">
                <sl-button class="wf-button wf-button--primary" wire:click="getAppointment({{$store}})"  data-boutique-id="060" data-boutique-style="reparation" data-boutique-submit="data-boutique-submit" size="large" variant="default" data-optional="" data-valid="">
                Prendre rendez-vous
                </sl-button>
            </div>

            </div>
        </div>


        </div>
    </div>
    @endforeach

    {{-- <div class="col-lg-4">
        <div data-corner-list="">
            <div class="wf-corner-card">
                <div class="wf-corner-card__body">
                <div class="wf-corner-card__body--header">
                    <div class="wf-corner-card__body--header-title">
                    <span>2.</span> Mayday Phone - Fnac Nice
                    </div>
                    <div class="wf-corner-card__body--header-info">
                    <div>44 avenue Jean Médecin,</div>
                    <div>Nice 06000 - <span class="code">38,75 km</span>
                    </div>
                    </div>
                </div>
                <div class="wf-corner-card__body--content">
                    <div class="wf-corner-card__body--content-header">Liste de mes pannes :</div>
                    <ul class="list" role="list">
                    <li class="list--item" role="list-item" data-type-stock="CORNER" data-product-id="FORFAIT_EFFACE_RESTORE">
                        <div class="list--item-image list--item-image--reparation">
                        <img src="{{asset('reparation/restauration.webp')}}" alt="Restauration effacement des données" srcset="https://intranet.wefix.net/WB/services/restauration.webp 1.5x">
                        </div>
                        <div class="list--item-name">Restauration effacement des données</div>
                        <div class="list--item-stock">
                        <svg width="62px" height="22px" viewBox="0 0 70 22" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="icon-stock" fill-rule="nonzero">
                                <rect id="Rectangle" fill="#129F1E" x="0" y="0" width="70" height="22" rx="11"></rect>
                                <g id="Group" transform="translate(12.000000, 4.000000)" fill="#FFFFFF" font-family="Helvetica" font-size="12" font-weight="normal">
                                <g id="En-stock-sur-rdv">
                                    <text id="En-stock">
                                    <tspan x="0" y="11">En stock</tspan>
                                    </text>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                    </li>
                    </ul>
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                    <div class="accordion-header accordion-hours--header" id="hours1">
                        <div class="accordion-button accordion-hours--header-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-hours1" aria-expanded="false" aria-controls="collapse-hours1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>Horaires d'ouverture :</div>
                        </div>
                    </div>
                    <div class="accordion-collapse collapse" id="collapse-hours1" aria-labelledby="hours1" style="">
                        <div class="accordion-body">
                        <div class="wf-corner-card__body--hours">
                            <div class="wf-corner-card__body--hours-content">
                            <div class="wf-corner-card__body--hours-content--day">lundi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">mardi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">mercredi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">jeudi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day wf-corner-card__body--hours-content--day-active">vendredi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">samedi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">dimanche</div>
                            <div class="wf-corner-card__body--hours-content--start">11:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:00 </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="wf-corner-card__body--footer">
                    <sl-button class="wf-button wf-button--primary" data-boutique-id="0603" data-boutique-style="reparation" data-boutique-submit="data-boutique-submit" size="large" variant="default" data-optional="" data-valid="">
                    Prendre rendez-vous
                    </sl-button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div data-corner-list="">
            <div class="wf-corner-card">
                <div class="wf-corner-card__body">
                <div class="wf-corner-card__body--header">
                    <div class="wf-corner-card__body--header-title">
                    <span>2.</span> Fnac Cannes
                    </div>
                    <div class="wf-corner-card__body--header-info">
                    <div>83 rue d'Antibes,</div>
                    <div>Cannes 06400 - <span class="code">41,67 km</span>
                    </div>
                    </div>
                </div>
                <div class="wf-corner-card__body--content">
                    <div class="wf-corner-card__body--content-header">Liste de mes pannes :</div>
                    <ul class="list" role="list">
                    <li class="list--item" role="list-item" data-type-stock="CORNER" data-product-id="FORFAIT_EFFACE_RESTORE">
                        <div class="list--item-image list--item-image--reparation">
                        <img src="{{asset('reparation/restauration.webp')}}" alt="Restauration effacement des données" srcset="https://intranet.wefix.net/WB/services/restauration.webp 1.5x">
                        </div>
                        <div class="list--item-name">Restauration effacement des données</div>
                        <div class="list--item-stock">
                        <svg width="62px" height="22px" viewBox="0 0 70 22" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="icon-stock" fill-rule="nonzero">
                                <rect id="Rectangle" fill="#129F1E" x="0" y="0" width="70" height="22" rx="11"></rect>
                                <g id="Group" transform="translate(12.000000, 4.000000)" fill="#FFFFFF" font-family="Helvetica" font-size="12" font-weight="normal">
                                <g id="En-stock-sur-rdv">
                                    <text id="En-stock">
                                    <tspan x="0" y="11">En stock</tspan>
                                    </text>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                    </li>
                    </ul>
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                    <div class="accordion-header accordion-hours--header" id="hours2">
                        <div class="accordion-button accordion-hours--header-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-hours6" aria-expanded="false" aria-controls="collapse-hours2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>Horaires d'ouverture :</div>
                        </div>
                    </div>
                    <div class="accordion-collapse collapse" id="collapse-hours6" aria-labelledby="hours2" style="">
                        <div class="accordion-body">
                        <div class="wf-corner-card__body--hours">
                            <div class="wf-corner-card__body--hours-content">
                            <div class="wf-corner-card__body--hours-content--day">lundi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">mardi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">mercredi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">jeudi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day wf-corner-card__body--hours-content--day-active">vendredi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">samedi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">dimanche</div>
                            <div class="wf-corner-card__body--hours-content--start">11:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:00 </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="wf-corner-card__body--footer">
                    <sl-button class="wf-button wf-button--primary" data-boutique-id="0604" data-boutique-style="reparation" data-boutique-submit="data-boutique-submit" size="large" variant="default" data-optional="" data-valid="">
                    Prendre rendez-vous
                    </sl-button>
                </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-4">
        <div data-corner-list="">
            <div class="wf-corner-card">
                <div class="wf-corner-card__body">
                <div class="wf-corner-card__body--header">
                    <div class="wf-corner-card__body--header-title">
                    <span>3.</span> Fnac Cannes
                    </div>
                    <div class="wf-corner-card__body--header-info">
                    <div>83 rue d'Antibes,</div>
                    <div>Cannes 06400 - <span class="code">41,67 km</span>
                    </div>
                    </div>
                </div>
                <div class="wf-corner-card__body--content">
                    <div class="wf-corner-card__body--content-header">Liste de mes pannes :</div>
                    <ul class="list" role="list">
                    <li class="list--item" role="list-item" data-type-stock="CORNER" data-product-id="FORFAIT_EFFACE_RESTORE">
                        <div class="list--item-image list--item-image--reparation">
                        <img src="{{asset('reparation/restauration.webp')}}" alt="Restauration effacement des données" srcset="https://intranet.wefix.net/WB/services/restauration.webp 1.5x">
                        </div>
                        <div class="list--item-name">Restauration effacement des données</div>
                        <div class="list--item-stock">
                        <svg width="62px" height="22px" viewBox="0 0 70 22" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="icon-stock" fill-rule="nonzero">
                                <rect id="Rectangle" fill="#129F1E" x="0" y="0" width="70" height="22" rx="11"></rect>
                                <g id="Group" transform="translate(12.000000, 4.000000)" fill="#FFFFFF" font-family="Helvetica" font-size="12" font-weight="normal">
                                <g id="En-stock-sur-rdv">
                                    <text id="En-stock">
                                    <tspan x="0" y="11">En stock</tspan>
                                    </text>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                    </li>
                    </ul>
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                    <div class="accordion-header accordion-hours--header" id="hours2">
                        <div class="accordion-button accordion-hours--header-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-hours2" aria-expanded="false" aria-controls="collapse-hours2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>Horaires d'ouverture :</div>
                        </div>
                    </div>
                    <div class="accordion-collapse collapse" id="collapse-hours2" aria-labelledby="hours2" style="">
                        <div class="accordion-body">
                        <div class="wf-corner-card__body--hours">
                            <div class="wf-corner-card__body--hours-content">
                            <div class="wf-corner-card__body--hours-content--day">lundi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">mardi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">mercredi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">jeudi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day wf-corner-card__body--hours-content--day-active">vendredi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">samedi</div>
                            <div class="wf-corner-card__body--hours-content--start">10:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:30 </div>
                            <div class="wf-corner-card__body--hours-content--day">dimanche</div>
                            <div class="wf-corner-card__body--hours-content--start">11:00</div>
                            <div class="wf-corner-card__body--hours-content--divider">-</div>
                            <div class="wf-corner-card__body--hours-content--end">19:00 </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="wf-corner-card__body--footer">
                    <sl-button class="wf-button wf-button--primary" data-boutique-id="0604" data-boutique-style="reparation" data-boutique-submit="data-boutique-submit" size="large" variant="default" data-optional="" data-valid="">
                    Prendre rendez-vous
                    </sl-button>
                </div>
                </div>
            </div>
        </div>
    </div> --}}

</div>
