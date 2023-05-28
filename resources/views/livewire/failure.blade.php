<div class="g-col-md-7 g-col-12">
    <sl-details class="wf-mt--3 wf-details wf-details--static wf-details--pannes" summary="Pannes" open="">
      <template shadowrootmode="open">
        <!---->
        <div part="base" class=" details details--open ">

          <div class="details__body" role="region" aria-labelledby="header" style="height: auto;">
            <slot part="content" id="content" class="details__content"></slot>
          </div>
        </div>
      </template>
      <sl-text class="wf-decoration--underline mts wf-me--2" slot="expand-icon">Voir plus</sl-text>
      <sl-icon library="heroicons" name="plus" slot="expand-icon" aria-hidden="true">
        <template shadowrootmode="open">
          <!---->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
          </svg>
        </template>
      </sl-icon>
      <sl-text class="wf-decoration--underline mts wf-me--2" slot="collapse-icon">Voir moins</sl-text>
      <sl-icon library="heroicons" name="minus" slot="collapse-icon" aria-hidden="true">
        <template shadowrootmode="open">
          <!---->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"></path>
          </svg>
        </template>
      </sl-icon>

      @foreach ($failures as $failure)
        <div class="select-pannes-container">
            <label class="select-pannes">
                <input class="pannes-checkbox" type="checkbox" data-pannes="" autocomplete="off"
                    value="{{ $failure->id }}"
                    data-original-price="{{ $failure->price }}" data-final-price="{{ $failure->reduction_price }}"
                    data-img="https://intranet.wefix.net/WB/PictoReparation/FacadeAvant.png" data-id="{{ $failure->code }}N"
                    data-titre="Façade avant"
                    data-failure-id="{{ $failure->id }}"
                    onclick="updateQuoteData(this)"  @if(isset($quoteData['failures'][$failure->id])) checked @endif >

            <div class="card-pannes" style="height: 5rem !important">
                <div>
                <img src="{{asset('reparation/'. $failure->image )}}" srcset="https://intranet.wefix.net/WB/PictoReparation/FacadeAvant.png 1.5x" alt="Façade avant">
                </div>
                <div>
                <div class="title mb-1">{{$failure->name}}</div>
                <div class="d-flex flex-lg-row flex-md-column flex-sm-row flex-column align-items-start remiseBadge wf-display--none">
                    <span class="badge rounded-pill">-{{$failure->reduction}}% </span>
                    <span class="remiseTextRDV fs-md-13 fs-11 text-green mts ms-1 none">en prenant rendez-vous en ligne ! <sup>*</sup>
                    </span>
                </div>
                </div>
                <div>
                <div class="list-prices">
                    <div class="price-first none" style="display: none;">{{$failure->reduction_price}}€</div>
                    <div class="price-final price-sans-remise" style="display: block;">{{$failure->price}}€</div>
                </div>
                </div>
            </div>
            </label>

            @if ($failure->failureAttributes()->exists())
                <div class="color-selector-container px-2 wf-display--none">
                    <div class="title-section fs-16 fw-bold mt-3">Sélection de la couleur de votre façade avant :</div>
                    <ul class="wf-colors-selector my-3">
                        @foreach ( $failure->failureAttributes()->get() as $attribute)
                            <li class="wf-colors-selector-item"
                            onclick="updateAttributeFailureQuoteData({{$failure->id}}, {{$attribute->id}})"
                            >
                                <sl-card class="wf-colors-selector-item-card wf-card"  data-id="{{ $failure->code . substr($attribute->name, 0, 1) }}" data-prix="339.9" data-color="Noir">

                                    <div class="wf-colors-selector-item-card-body">
                                    <div class="wf-colors-selector-item-card-body-badge" style="background-color: {{$attribute->code}}; border: 1px solid #{{$attribute->code}};"></div>
                                    <div class="wf-colors-selector-item-card-body-content">
                                        <div class="wf-color-text">{{$attribute->name}}</div>
                                        <div class="wf-color-price">{{$failure->price}}€</div>
                                    </div>
                                    </div>
                                </sl-card>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
      @endforeach


      {{-- <div class="select-pannes-container">
        <label class="select-pannes">
          <input class="pannes-checkbox" type="checkbox" data-pannes="" autocomplete="off" data-original-price="79.9" data-final-price="79.9" data-img="https://intranet.wefix.net/WB/PictoReparation/Batterie.png')}}" data-id="GS23batt" data-titre="Batterie">
          <div class="card-pannes" style="height: 5rem !important">
            <div>
              <img src="{{asset('reparation/Batterie.png')}}" srcset="https://intranet.wefix.net/WB/PictoReparation/Batterie.png 1.5x" alt="Batterie">
            </div>
            <div>
              <div class="title mb-1">Batterie</div>
              <div class="d-flex flex-lg-row flex-md-column flex-sm-row flex-column align-items-start remiseBadge wf-display--none">
                <span class="badge rounded-pill"></span>
                <span class="remiseTextRDV fs-md-13 fs-11 text-green mts ms-1 none">en prenant rendez-vous en ligne ! <sup>*</sup>
                </span>
              </div>
            </div>
            <div>
              <div class="list-prices">
                <div class="price-first none" style="display: none;">79.90€</div>
                <div class="price-final price-sans-remise" style="display: block;">79.90€</div>
              </div>
            </div>
          </div>
        </label>
      </div>
      <div class="select-pannes-container">
        <label class="select-pannes">
          <input class="pannes-checkbox" type="checkbox" data-pannes="" autocomplete="off" data-original-price="89.9" data-final-price="89.9" data-img="https://intranet.wefix.net/WB/PictoReparation/AppareilPhotoArriere.png')}}" data-id="GS23Apn50Mp" data-titre="Appareil photo arrière">
          <div class="card-pannes" style="height: 5rem !important">
            <div>
              <img src="{{asset('reparation/AppareilPhotoArriere.png')}}" srcset="https://intranet.wefix.net/WB/PictoReparation/AppareilPhotoArriere.png 1.5x" alt="Appareil photo arrière">
            </div>
            <div>
              <div class="title mb-1">Appareil photo arrière</div>
              <div class="d-flex flex-lg-row flex-md-column flex-sm-row flex-column align-items-start remiseBadge wf-display--none">
                <span class="badge rounded-pill"></span>
                <span class="remiseTextRDV fs-md-13 fs-11 text-green mts ms-1 none">en prenant rendez-vous en ligne ! <sup>*</sup>
                </span>
              </div>
            </div>
            <div>
              <div class="list-prices">
                <div class="price-first none" style="display: none;">89.90€</div>
                <div class="price-final price-sans-remise" style="display: block;">89.90€</div>
              </div>
            </div>
          </div>
        </label>
      </div>
      <div class="select-pannes-container">
        <label class="select-pannes">
          <input class="pannes-checkbox" type="checkbox" data-pannes="" autocomplete="off" data-original-price="59.9" data-final-price="59.9" data-img="https://intranet.wefix.net/WB/PictoReparation/AppareilPhotoAvant.png')}}" data-id="GS23FrontApn12Mp" data-titre="Appareil photo avant">
          <div class="card-pannes" style="height: 5rem !important">
            <div>
              <img src="{{asset('reparation/AppareilPhotoAvant.png')}}" srcset="https://intranet.wefix.net/WB/PictoReparation/AppareilPhotoAvant.png 1.5x" alt="Appareil photo avant">
            </div>
            <div>
              <div class="title mb-1">Appareil photo avant</div>
              <div class="d-flex flex-lg-row flex-md-column flex-sm-row flex-column align-items-start remiseBadge wf-display--none">
                <span class="badge rounded-pill"></span>
                <span class="remiseTextRDV fs-md-13 fs-11 text-green mts ms-1 none">en prenant rendez-vous en ligne ! <sup>*</sup>
                </span>
              </div>
            </div>
            <div>
              <div class="list-prices">
                <div class="price-first none" style="display: none;">59.90€</div>
                <div class="price-final price-sans-remise" style="display: block;">59.90€</div>
              </div>
            </div>
          </div>
        </label>
      </div>
      <div class="select-pannes-container">
        <label class="select-pannes">
          <input class="pannes-checkbox" type="checkbox" data-pannes="" autocomplete="off" data-original-price="69.9" data-final-price="69.9" data-img="https://intranet.wefix.net/WB/PictoReparation/ConnecteurCharge.png')}}" data-id="GS23Dock" data-titre="Connecteur de charge">
          <div class="card-pannes" style="height: 5rem !important">
            <div>
              <img src="{{asset('reparation/ConnecteurCharge.png')}}" srcset="https://intranet.wefix.net/WB/PictoReparation/ConnecteurCharge.png 1.5x" alt="Connecteur de charge">
            </div>
            <div>
              <div class="title mb-1">Connecteur de charge</div>
              <div class="d-flex flex-lg-row flex-md-column flex-sm-row flex-column align-items-start remiseBadge wf-display--none">
                <span class="badge rounded-pill"></span>
                <span class="remiseTextRDV fs-md-13 fs-11 text-green mts ms-1 none">en prenant rendez-vous en ligne ! <sup>*</sup>
                </span>
              </div>
            </div>
            <div>
              <div class="list-prices">
                <div class="price-first none" style="display: none;">69.90€</div>
                <div class="price-final price-sans-remise" style="display: block;">69.90€</div>
              </div>
            </div>
          </div>
        </label>
      </div>
      <div class="select-pannes-container">
        <label class="select-pannes">
          <input class="pannes-checkbox" type="checkbox" data-pannes="" autocomplete="off" data-original-price="75.9" data-final-price="75.9" data-img="https://intranet.wefix.net/WB/PictoReparation/FacadeArriere.png')}}" data-id="GS23arN" data-titre="Façade arrière">
          <div class="card-pannes" style="height: 5rem !important">
            <div>
              <img src="{{asset('reparation/FacadeArriere.png')}}" srcset="https://intranet.wefix.net/WB/PictoReparation/FacadeArriere.png 1.5x" alt="Façade arrière">
            </div>
            <div>
              <div class="title mb-1">Façade arrière</div>
              <div class="d-flex flex-lg-row flex-md-column flex-sm-row flex-column align-items-start remiseBadge wf-display--none">
                <span class="badge rounded-pill"></span>
                <span class="remiseTextRDV fs-md-13 fs-11 text-green mts ms-1 none">en prenant rendez-vous en ligne ! <sup>*</sup>
                </span>
              </div>
            </div>
            <div>
              <div class="list-prices">
                <div class="price-first none" style="display: none;">75.90€</div>
                <div class="price-final price-sans-remise" style="display: block;">75.90€</div>
              </div>
            </div>
          </div>
        </label>
        <div class="color-selector-container px-2 wf-display--none">
          <div class="title-section fs-16 fw-bold mt-3">Sélection de la couleur de votre façade arrière :</div>
          <ul class="wf-colors-selector my-3">
            <li class="wf-colors-selector-item">
              <sl-card class="wf-colors-selector-item-card wf-card" data-id="GS23arN" data-prix="75.9" data-color="Noir">

                <div class="wf-colors-selector-item-card-body">
                  <div class="wf-colors-selector-item-card-body-badge" style="background-color: #272727; border: 1px solid #272727;"></div>
                  <div class="wf-colors-selector-item-card-body-content">
                    <div class="wf-color-text">Noir</div>
                    <div class="wf-color-price">75.90€</div>
                  </div>
                </div>
              </sl-card>
            </li>
            <li class="wf-colors-selector-item">
              <sl-card class="wf-colors-selector-item-card wf-card" data-id="GS23arGr" data-prix="75.9" data-color="Gris">

                <div class="wf-colors-selector-item-card-body">
                  <div class="wf-colors-selector-item-card-body-badge" style="background-color: #808080; border: 1px solid #808080;"></div>
                  <div class="wf-colors-selector-item-card-body-content">
                    <div class="wf-color-text">Gris</div>
                    <div class="wf-color-price">75.90€</div>
                  </div>
                </div>
              </sl-card>
            </li>
            <li class="wf-colors-selector-item">
              <sl-card class="wf-colors-selector-item-card wf-card" data-id="GS23arC" data-prix="75.9" data-color="Crème">

                <div class="wf-colors-selector-item-card-body">
                  <div class="wf-colors-selector-item-card-body-badge" style="background-color: #F0EBE1; border: 1px solid #F0EBE1;"></div>
                  <div class="wf-colors-selector-item-card-body-content">
                    <div class="wf-color-text">Crème</div>
                    <div class="wf-color-price">75.90€</div>
                  </div>
                </div>
              </sl-card>
            </li>
            <li class="wf-colors-selector-item">
              <sl-card class="wf-colors-selector-item-card wf-card" data-id="GS23arLi" data-prix="75.9" data-color="Jaune">

                <div class="wf-colors-selector-item-card-body">
                  <div class="wf-colors-selector-item-card-body-badge" style="background-color: #FFFF00; border: 1px solid #FFFF00;"></div>
                  <div class="wf-colors-selector-item-card-body-content">
                    <div class="wf-color-text">Jaune</div>
                    <div class="wf-color-price">75.90€</div>
                  </div>
                </div>
              </sl-card>
            </li>
            <li class="wf-colors-selector-item">
              <sl-card class="wf-colors-selector-item-card wf-card" data-id="GS23arL" data-prix="75.9" data-color="Mauve">

                <div class="wf-colors-selector-item-card-body">
                  <div class="wf-colors-selector-item-card-body-badge" style="background-color: #D4C8DA; border: 1px solid #D4C8DA;"></div>
                  <div class="wf-colors-selector-item-card-body-content">
                    <div class="wf-color-text">Mauve</div>
                    <div class="wf-color-price">75.90€</div>
                  </div>
                </div>
              </sl-card>
            </li>
            <li class="wf-colors-selector-item">
              <sl-card class="wf-colors-selector-item-card wf-card" data-id="GS23arV" data-prix="75.9" data-color="Vert">

                <div class="wf-colors-selector-item-card-body">
                  <div class="wf-colors-selector-item-card-body-badge" style="background-color: #12AD2B; border: 1px solid #12AD2B;"></div>
                  <div class="wf-colors-selector-item-card-body-content">
                    <div class="wf-color-text">Vert</div>
                    <div class="wf-color-price">75.90€</div>
                  </div>
                </div>
              </sl-card>
            </li>
          </ul>
        </div>
      </div>
      <div class="select-pannes-container">
        <label class="select-pannes">
          <input class="pannes-checkbox" type="checkbox" data-pannes="" autocomplete="off" data-original-price="39.9" data-final-price="39.9" data-img="https://intranet.wefix.net/WB/PictoReparation/HautParleur.png')}}" data-id="GS23Hp" data-titre="Haut parleur">
          <div class="card-pannes" style="height: 5rem !important">
            <div>
              <img src="{{asset('reparation/HautParleur.png')}}" srcset="https://intranet.wefix.net/WB/PictoReparation/HautParleur.png 1.5x" alt="Haut parleur">
            </div>
            <div>
              <div class="title mb-1">Haut parleur</div>
              <div class="d-flex flex-lg-row flex-md-column flex-sm-row flex-column align-items-start remiseBadge wf-display--none">
                <span class="badge rounded-pill"></span>
                <span class="remiseTextRDV fs-md-13 fs-11 text-green mts ms-1 none">en prenant rendez-vous en ligne ! <sup>*</sup>
                </span>
              </div>
            </div>
            <div>
              <div class="list-prices">
                <div class="price-first none" style="display: none;">39.90€</div>
                <div class="price-final price-sans-remise" style="display: block;">39.90€</div>
              </div>
            </div>
          </div>
        </label>
      </div>
      <label class="select-pannes">
        <input type="checkbox" data-other-pannes="" autocomplete="off">
        <div class="card-pannes">
          <div>
            <img class="other-pannes" src="{{asset('reparation/autres.webp')}}" srcset="{{asset('reparation/autres.webp 1.5x')}}" alt="Autres pannes ?">
          </div>
          <div>
            <div class="title">Diagnostic <br class="d-sm-none"> de ma panne </div>
          </div>
          <div>
            <div class="list-prices">
              <span class="diagnostic-text">GRATUIT</span>
            </div>
          </div>
        </div>
      </label>
      <alert class="fade-in d-none" role="alert" data-other-pannes-alert="">
        <i class="ci-announcement"></i>
        <span>Vous ne savez pas quelle est la panne exacte de votre appareil ? Prenez <strong>rendez-vous</strong> afin que l’un de nos experts réalise un <strong>diagnostic gratuit</strong> de votre appareil et vous conseille sur la réparation à effectuer. </span>
      </alert>  --}}

    </sl-details>

    <sl-details class="wf-details wf-details--static wf-details--pannes" summary="Services" open="">
      <template shadowrootmode="open">
        <!---->
        <div part="base" class=" details details--open ">

          <div class="details__body" role="region" aria-labelledby="header" style="height: auto;">
            <slot part="content" id="content" class="details__content"></slot>
          </div>
        </div>
      </template>
      <sl-text class="wf-decoration--underline mts wf-me--2" slot="expand-icon">Voir plus</sl-text>
      <sl-icon library="heroicons" name="plus" slot="expand-icon" aria-hidden="true">
        <template shadowrootmode="open">
          <!---->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
          </svg>
        </template>
      </sl-icon>
      <sl-text class="wf-decoration--underline mts wf-me--2" slot="collapse-icon">Voir moins</sl-text>
      <sl-icon library="heroicons" name="minus" slot="collapse-icon" aria-hidden="true">
        <template shadowrootmode="open">
          <!---->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" part="svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"></path>
          </svg>
        </template>
      </sl-icon>
      <label class="select-pannes">
        <input type="checkbox" data-service="" data-product-id="FORFAIT_SAUVE_TRANSFERT" data-name="Sauvegarde / Transfert de données" data-original-price="24.9" data-img="https://intranet.wefix.net/WB/services/sauvegarde.webp" data-categorie="service" data-sous-categorie="service" autocomplete="off">
        <div class="card-pannes">
          <div>
            <img class="other-pannes" src="{{asset('reparation/sauvegarde.webp')}}" srcset="https://intranet.wefix.net/WB/services/sauvegarde.webp 1.5x" alt="Autres pannes ?">
          </div>
          <div style="flex: 1">
            <div class="title">Sauvegarde / Transfert de données</div>
          </div>
          <div>
            <div class="list-prices">
              <span class="service-price">24.90€</span>
            </div>
          </div>
        </div>
      </label>
      <label class="select-pannes">
        <input type="checkbox" data-service="" data-product-id="FORFAIT_PARAMETRAGE_TEL" data-name="Paramétrage de l&#39;appareil" data-original-price="24.9" data-img="https://intranet.wefix.net/WB/services/parametrage.webp" data-categorie="service" data-sous-categorie="service" autocomplete="off">
        <div class="card-pannes">
          <div>
            <img class="other-pannes" src="{{asset('reparation/parametrage.webp')}}" srcset="https://intranet.wefix.net/WB/services/parametrage.webp 1.5x" alt="Autres pannes ?">
          </div>
          <div style="flex: 1">
            <div class="title">Paramétrage de l'appareil</div>
          </div>
          <div>
            <div class="list-prices">
              <span class="service-price">24.90€</span>
            </div>
          </div>
        </div>
      </label>
      <label class="select-pannes">
        <input type="checkbox" data-service="" data-product-id="FORFAIT_DEGEOLOCALISATION" data-name="Dé-géolocalisation téléphone" data-original-price="9.9" data-img="https://intranet.wefix.net/WB/services/degeolocalisation.webp" data-categorie="service" data-sous-categorie="service" autocomplete="off">
        <div class="card-pannes">
          <div>
            <img class="other-pannes" src="{{asset('reparation/degeolocalisation.webp')}}" srcset="https://intranet.wefix.net/WB/services/degeolocalisation.webp 1.5x" alt="Autres pannes ?">
          </div>
          <div style="flex: 1">
            <div class="title">Dé-géolocalisation téléphone</div>
          </div>
          <div>
            <div class="list-prices">
              <span class="service-price">9.90€</span>
            </div>
          </div>
        </div>
      </label>
      <label class="select-pannes">
        <input type="checkbox" data-service="" data-product-id="FORFAIT_EFFACE_RESTORE" data-name="Restauration effacement des données" data-original-price="9.9" data-img="https://intranet.wefix.net/WB/services/restauration.webp" data-categorie="service" data-sous-categorie="service" autocomplete="off">
        <div class="card-pannes">
          <div>
            <img class="other-pannes" src="{{asset('reparation/restauration.webp')}}" srcset="https://intranet.wefix.net/WB/services/restauration.webp 1.5x" alt="Autres pannes ?">
          </div>
          <div style="flex: 1">
            <div class="title">Restauration effacement des données</div>
          </div>
          <div>
            <div class="list-prices">
              <span class="service-price">9.90€</span>
            </div>
          </div>
        </div>
      </label>
      <label class="select-pannes">
        <input type="checkbox" data-service="" data-product-id="FORFAIT_SAUVEGARDE_ICLOUD" data-name="Forfait sauvegarde iCloud" data-original-price="9.9" data-img="https://intranet.wefix.net/WB/services/icloud.webp" data-categorie="service" data-sous-categorie="service" autocomplete="off">
        <div class="card-pannes">
          <div>
            <img class="other-pannes" src="{{asset('reparation/icloud.webp')}}" srcset="https://intranet.wefix.net/WB/services/icloud.webp 1.5x" alt="Autres pannes ?">
          </div>
          <div style="flex: 1">
            <div class="title">Forfait sauvegarde iCloud</div>
          </div>
          <div>
            <div class="list-prices">
              <span class="service-price">9.90€</span>
            </div>
          </div>
        </div>
      </label>
    </sl-details>
    <label class="select-xforce disabled" for="xforce" data-xforce-card="">
      <input type="checkbox" name="protection" id="xforce" autocomplete="off" data-xforce-checkbox="" data-type-stock="CORNER">
      <div class="card-xforce">
        <div>
          <div>
            <span class="badge">-25%</span>
            <img src="{{asset('reparation/xforce.webp')}}" alt="Protection d&#39;écran XFORCE">
          </div>
        </div>
        <div>
          <div class="title-section fs-lg-20 fs-16">Protection d'écran XFORCE</div>
          <div class="fw-medium fs-md-16 fs-13 mt-2">
            <span class="ci-check-circle text-primary fw-bold me-1"></span> Ultra-résistant <br class="d-sm-none"> et sur-mesure !
          </div>
          <div class="fw-medium fs-md-16 fs-13">
            <span class="ci-check-circle text-primary fw-bold me-1"></span> Autocicatrisant <br class="d-sm-none"> et tactile !
          </div>
        </div>
        <div>
          <div class="prices">
            <div>22.42€</div>
            <s>29.90€</s>
          </div>
        </div>
      </div>
    </label>
    <div class="disabled" data-bouygues="">
      <label class="select-bouygues">
        <input class="bouygues-checkbox" type="checkbox" data-bs-toggle="collapse" data-bs-target="#collapse-bouygues" aria-expanded="false" aria-controls="collapse-bouygues" autocomplete="off">
        <div class="card-bouygues">
          <div>
            <svg width="36px" height="36px" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 505.175 508.97" xml:space="preserve">
              <g>
                <g>
                  <path fill="#EA5B0F" d="M281.506,318.25c23.18,16.006,69.045-10.148,102.433-58.508c33.392-48.359,41.67-100.48,18.49-116.487 c-23.186-16.007-67.894,8.811-101.285,57.172C267.755,248.786,258.33,302.243,281.506,318.25z"></path>
                  <path fill="#0055A4" d="M223.686,318.25c-23.179,16.006-69.044-10.148-102.433-58.508c-33.392-48.359-41.669-100.48-18.49-116.487 c23.186-16.007,67.894,8.811,101.285,57.172C237.436,248.786,246.861,302.243,223.686,318.25z"></path>
                  <ellipse fill="#009DCC" cx="252.577" cy="103.062" rx="106.511" ry="50.935"></ellipse>
                </g>
                <g>
                  <g>
                    <g>
                      <path fill="#009DCC" d="M147.032,382.547c-5.047-5.883-12.332-7.424-18.293-7.43c-5.961-0.005-13.248,1.547-18.293,7.43 c-5.036,5.865-5.761,13.603-5.761,21.146c0,7.547,0.725,16.33,5.761,22.198c5.046,5.881,12.332,7.435,18.293,7.427 c5.961-0.006,13.246-1.546,18.293-7.427c5.037-5.868,5.761-14.189,5.761-22.198 C152.793,395.688,152.069,388.413,147.032,382.547z M140.52,419.912c-2.852,3.613-7.186,5.024-11.781,5.024 c-4.596,0-8.93-1.411-11.781-5.024c-2.877-3.646-3.22-9.711-3.22-16.218c0-6.504,0.343-11.522,3.22-15.169 c2.852-3.614,7.185-5.013,11.781-5.013c4.595,0,8.929,1.398,11.781,5.013c2.878,3.646,3.221,8.671,3.221,15.169 C143.741,410.194,143.398,416.265,140.52,419.912z"></path>
                      <path fill="#009DCC" d="M202.559,380.824c0-2.427-1.966-4.393-4.391-4.393c-2.427,0-4.393,1.966-4.393,4.393l-0.006,41.274 c0,0.746-0.547,1.433-1.114,1.664c-0.566,0.23-3,1.182-11.292,1.182c-4.159,0-8.567-1.659-11.265-5.227 c-2.72-3.597-3.048-9.861-3.048-16.274l-0.001-22.619c0-2.427-1.966-4.393-4.392-4.393c-2.426,0-4.392,1.966-4.392,4.393 l-0.004,22.602c0,7.898,0.499,16.384,5.631,22.594c4.483,5.424,11.988,7.327,17.471,7.327c3.479,0,11.091,0.241,17.949-2.31 c1.888-0.632,3.235-3.085,3.235-5.184L202.559,380.824z"></path>
                      <path fill="#009DCC" d="M354.915,380.824c0-2.427-1.967-4.393-4.392-4.393c-2.426,0-4.393,1.966-4.393,4.393l-0.006,41.274 c0,0.746-0.548,1.433-1.115,1.664c-0.565,0.23-3,1.182-11.292,1.182c-4.159,0-8.567-1.659-11.265-5.227 c-2.72-3.597-3.048-9.861-3.048-16.274l-0.001-22.619c0-2.427-1.965-4.393-4.392-4.393c-2.425,0-4.393,1.966-4.393,4.393 l-0.002,22.602c0,7.898,0.498,16.384,5.63,22.594c4.482,5.424,11.988,7.327,17.471,7.327c3.479,0,11.09,0.241,17.949-2.31 c1.888-0.632,3.235-3.085,3.235-5.184L354.915,380.824z"></path>
                      <path fill="#009DCC" d="M303.801,383.121c0-1.92-1.134-3.571-2.769-4.327c-7.422-3.189-15.839-3.656-19.646-3.656 c-5.796,0-13.248,1.506-18.292,7.311c-5.038,5.786-5.761,14.64-5.761,22.538s0.723,15.179,5.761,20.967 c5.044,5.804,12.313,7.372,18.292,7.372c5.503,0,11.575-2.465,13.495-4.554v7.547c0,4.051-0.966,7.249-2.915,9.493 c-1.925,2.229-4.659,3.355-8.125,3.355c-2.288,0-4.655-0.301-7.037-0.886c-2.37-0.586-6.387-2.499-7.811-3.184 c-1.424-0.688-4.061-0.159-5.257,1.768c-1.197,1.928-0.401,4.804,1.483,5.841c1.884,1.035,4.278,2.452,9.297,3.745 c3.203,0.824,6.341,1.214,9.325,1.214c3.275,0,6.199-0.527,8.691-1.631c2.493-1.099,4.598-2.616,6.25-4.512 c1.647-1.885,2.911-4.182,3.755-6.81c0.839-2.611,1.263-5.439,1.263-8.395L303.801,383.121z M294.765,415.088 c0,3.165-1.333,5.295-2.829,6.702c-1.846,1.73-5.952,3.149-10.55,3.149c-4.595,0-8.928-1.321-11.78-4.888 c-2.876-3.596-3.221-8.656-3.221-15.066c0-6.414,0.344-13.043,3.221-16.639c2.853-3.566,7.28-4.843,11.78-4.843 c3.49,0,8.244,0.756,12.207,2.155c0.683,0.235,1.172,0.887,1.172,1.65V415.088z"></path>
                      <path fill="#009DCC" d="M445.237,386.86c0.31,0.08,0.638,0.122,0.974,0.12c2.18,0,3.949-1.772,3.949-3.958 c0.001-0.051-0.003-0.1-0.003-0.146c0-1.274-0.804-3.156-2.354-4.119c-3.824-2.648-9.659-3.641-14.738-3.641 c-5.086,0-10.462,1.286-13.804,3.819c-3.378,2.568-5.092,6.186-5.092,10.759c0,8.377,6.193,14.464,18.412,16.986 c5.396,1.132,11.28,3.908,11.28,8.716c0,2.427-1.156,5.065-3.122,6.486c-3.146,2.29-7.696,2.744-9.932,2.76 c-2.95,0.025-7.58-0.616-11.482-2.803c-0.167-0.118-0.351-0.217-0.537-0.319c-0.604-0.329-1.293-0.518-2.028-0.518 c-2.339,0-4.233,1.9-4.233,4.247c0,0.998,0.345,1.915,0.918,2.638c0.351,0.478,0.785,0.901,1.308,1.229 c5.274,3.648,12.787,4.2,16.201,4.2c3.227,0,6.356-0.667,9.812-1.736c2.481-0.772,4.633-1.896,6.401-3.344 c1.764-1.454,3.167-3.231,4.168-5.279c1.001-2.056,1.714-5.108,1.714-7.562c0-11.236-9.977-15.679-18.684-17.375 c-7.396-1.536-11.145-4.71-11.145-8.327c0-1.048,0.26-1.962,0.774-2.722c0.529-0.772,1.207-1.393,2.021-1.842 c0.837-0.459,1.816-0.8,2.909-1.013c1.118-0.215,2.365-0.33,4.14-0.324c2.507,0.01,7.836,1.142,10.138,2.278 C443.848,386.392,444.535,386.688,445.237,386.86z"></path>
                      <path fill="#009DCC" d="M92.829,382.448c-5.045-5.805-12.313-7.33-18.293-7.33c-5.5,0-11.572,2.42-13.494,4.51l0.001-26.333 c0-2.461-1.995-4.456-4.454-4.456c-2.46,0-4.455,1.995-4.455,4.456l-0.011,71.896c0,2.121,1.323,3.933,3.19,4.653 c7.314,3.031,15.487,3.472,19.222,3.472c5.798,0,13.248-1.486,18.293-7.29c5.038-5.79,5.762-13.896,5.762-21.795 C98.591,396.33,97.867,388.234,92.829,382.448z M86.318,420.125c-2.851,3.564-7.28,4.825-11.782,4.825 c-3.513,0-8.307-0.743-12.287-2.159h0.003c-0.634-0.207-1.092-0.803-1.092-1.504v-27.978c0-3.163,1.332-5.296,2.826-6.698 c1.846-1.733,5.955-3.089,10.55-3.089c4.597,0,8.931,1.259,11.782,4.825c2.877,3.596,3.22,9.47,3.22,15.883 S89.195,416.527,86.318,420.125z"></path>
                      <path fill="#009DCC" d="M233.718,418.227c-0.246,0.523-0.77,0.854-1.336,0.851c-0.688-0.005-1.185-0.722-1.371-0.989 c-1.398-2-12.312-32.255-14.678-38.826c-0.826-2.229-3.335-3.379-5.559-2.559c-2.217,0.818-3.375,3.315-2.565,5.542 l14.188,37.625c1.663,4.451,4.061,6.975,7.579,8.237l-8.623,22.841c-0.854,2.251,0.278,4.767,2.53,5.621 c2.252,0.855,4.769-0.275,5.623-2.529l27.169-71.764c0.826-2.219-0.308-4.718-2.503-5.56c-2.215-0.848-4.75,0.282-5.598,2.514 L233.718,418.227z"></path>
                      <path fill="#009DCC" d="M404.185,382.448c-6.319-7.405-16.47-7.341-18.546-7.33c-1.922,0.012-11.963,0.061-18.041,7.33 c-2.754,3.293-3.845,6.9-4.599,10.082c-0.949,4.003-1.074,7.695-1.074,11.655c0,7.447,0.638,16.015,5.673,21.804 c5.044,5.802,12.332,7.328,18.292,7.328c6.587,0,13.756-0.546,19.029-4.183c1.026-0.638,1.734-1.673,2.086-2.669 c0.171-0.453,0.265-0.943,0.265-1.456c0-2.264-1.832-4.096-4.094-4.096c-0.528,0-1.023,0.115-1.493,0.281 c-0.265,0.094-0.601,0.295-1.338,0.688c-3.896,2.179-7.614,3.189-14.455,3.033c-4.596,0-8.929-1.262-11.78-4.828 c-2.663-3.328-3.066-8.625-3.124-14.483h34.327c2.571,0,4.655-2.084,4.655-4.652 C409.969,388.427,404.185,382.448,404.185,382.448z M371.21,397.609c-0.019-0.938-0.137-7.48,5.221-11.484 c3.272-2.444,6.849-2.608,9.032-2.608c2.183,0,6.311-0.086,9.936,2.665c5.359,4.069,5.411,10.521,5.393,11.428H371.21z"></path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path fill="#009DCC" d="M316.454,456.844h-1.047c-0.382,0-0.69-0.274-0.69-0.618v-10.573h-3.41c-0.381,0-0.69-0.276-0.69-0.616 v-0.986c0-0.339,0.309-0.613,0.69-0.613h9.262c0.382,0,0.693,0.274,0.693,0.613v0.986c0,0.34-0.311,0.616-0.693,0.616h-3.426 v10.573C317.144,456.57,316.834,456.844,316.454,456.844z"></path>
                    </g>
                    <g>
                      <path fill="#009DCC" d="M362.865,456.844h-8.349c-0.386,0-0.69-0.274-0.69-0.618V444.05c0-0.339,0.305-0.613,0.69-0.613h1.042 c0.388,0,0.697,0.274,0.697,0.613v10.575h6.61c0.382,0,0.695,0.274,0.695,0.617v0.983 C363.561,456.57,363.247,456.844,362.865,456.844z"></path>
                    </g>
                    <g>
                      <path fill="#009DCC" d="M382.745,456.844h-8.347c-0.382,0-0.691-0.274-0.691-0.618V444.05c0-0.339,0.309-0.613,0.691-0.613 h8.347c0.385,0,0.696,0.274,0.696,0.613v0.986c0,0.34-0.312,0.616-0.696,0.616h-6.61V449h5.526c0.387,0,0.692,0.273,0.692,0.606 v0.941c0,0.335-0.305,0.608-0.692,0.608h-5.526v3.469h6.61c0.385,0,0.696,0.274,0.696,0.617v0.983 C383.441,456.57,383.13,456.844,382.745,456.844z"></path>
                    </g>
                    <g>
                      <path fill="#009DCC" d="M341.169,456.844h-8.35c-0.381,0-0.688-0.274-0.688-0.618V444.05c0-0.339,0.308-0.613,0.688-0.613h8.35 c0.384,0,0.695,0.274,0.695,0.613v0.986c0,0.34-0.311,0.616-0.695,0.616h-6.612V449h5.527c0.387,0,0.692,0.273,0.692,0.606 v0.941c0,0.335-0.305,0.608-0.692,0.608h-5.527v3.469h6.612c0.384,0,0.695,0.274,0.695,0.617v0.983 C341.864,456.57,341.554,456.844,341.169,456.844z"></path>
                    </g>
                    <g>
                      <path fill="#009DCC" d="M449.315,456.844h-1.044c-0.383,0-0.699-0.274-0.699-0.618v-6.583l-2.842,6.813 c-0.111,0.219-0.366,0.362-0.639,0.362h-1.037c-0.275,0-0.521-0.142-0.636-0.362l-2.927-6.863v6.633 c0,0.344-0.312,0.618-0.688,0.618h-1.048c-0.38,0-0.69-0.274-0.69-0.618V444.05c0-0.339,0.311-0.613,0.69-0.613h1.048 c0.264,0,0.514,0.138,0.624,0.359l4.156,9.829l4.053-9.823c0.107-0.222,0.359-0.365,0.634-0.365h1.044 c0.383,0,0.69,0.274,0.69,0.613v12.176C450.006,456.57,449.698,456.844,449.315,456.844z"></path>
                    </g>
                    <path fill="#009DCC" d="M425.359,444.637c-1.061-0.941-2.533-1.413-4.006-1.413c-1.471,0-2.944,0.472-4.008,1.413 c-1.509,1.335-1.736,2.721-1.736,5.482c0,2.766,0.228,4.148,1.736,5.48c1.07,0.944,2.487,1.461,4.008,1.461 c1.522,0,2.939-0.517,4.006-1.461c1.511-1.332,1.736-2.715,1.736-5.48C427.096,447.358,426.87,445.972,425.359,444.637z M423.509,454.197c-0.557,0.499-1.356,0.75-2.155,0.75s-1.595-0.251-2.159-0.75c-0.79-0.701-1.106-1.44-1.106-4.077 c0-2.635,0.316-3.38,1.106-4.073c0.566-0.499,1.331-0.782,2.159-0.782c0.826,0,1.597,0.283,2.155,0.782 c0.795,0.693,1.112,1.438,1.112,4.073C424.621,452.756,424.304,453.496,423.509,454.197z"></path>
                    <path fill="#009DCC" d="M404.786,452.782l-1.08-0.169c-0.32-0.05-0.64,0.11-0.76,0.382c-0.178,0.558-0.446,0.907-0.827,1.235 c-0.56,0.499-1.33,0.779-2.157,0.779c-0.828,0-1.597-0.28-2.156-0.779c-0.793-0.694-1.109-1.44-1.109-4.075 c0-2.633,0.316-3.403,1.109-4.098c0.56-0.5,1.328-0.782,2.156-0.782c0.827,0,1.598,0.282,2.157,0.782 c0.381,0.326,0.649,0.675,0.827,1.231c0.12,0.276,0.439,0.434,0.76,0.385l1.08-0.169c0.21-0.035,0.383-0.148,0.493-0.309 c0.114-0.158,0.129-0.362,0.062-0.537c-0.25-0.768-0.674-1.396-1.374-2.011c-1.061-0.94-2.528-1.412-4.005-1.412 c-1.472,0-2.945,0.472-4.006,1.412c-1.511,1.336-1.737,2.722-1.737,5.481c0,2.764,0.227,4.176,1.737,5.504 c1.061,0.946,2.534,1.414,4.006,1.414c1.477,0,2.944-0.468,4.005-1.414c0.7-0.61,1.124-1.237,1.374-2.006 c0.067-0.175,0.053-0.378-0.062-0.54C405.169,452.929,404.996,452.817,404.786,452.782z"></path>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div>
            <div class="title ms-2">Client forfait <br class="d-md-none"> Bouygues Telecom <sup>***</sup> ? </div>
          </div>
          <div>-30%</div>
        </div>
      </label>
    </div>
    <div class="collapse" id="collapse-bouygues">
      <p>
        <i class="ci-rocket"></i> Entrez votre numéro de téléphone afin de vérifier votre éligibilité et <strong>calculer votre réduction</strong> sur les pannes sélectionnées.
      </p>
      <form class="form-bouygues" novalidate="">
        <div class="input-group">
          <input class="form-control form-control-lg" type="phone" data-bouygues-value="" minlength="10" maxlength="10" inputmode="numeric" pattern="[0-9]*" placeholder="Par ex : 0601020304" required="">
          <button class="btn cta-primary fs-sm" type="submit" style="border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important">CONFIRMER</button>
          <div class="invalid-feedback">Le numéro de téléphone est incorrect !</div>
        </div>
        <feedback class="fade-in none" data-feedback-bouygues=""></feedback>
      </form>
    </div>
    <div class="disabled" data-darty="">
      <label class="select-darty">
        <input class="darty-checkbox" type="checkbox" data-bs-toggle="collapse" data-bs-target="#collapse-darty" aria-expanded="false" aria-controls="collapse-darty" autocomplete="off">
        <div class="card-darty">
          <div>
            <svg width="36px" height="36px" viewBox="0 0 1066.6667 1269.3333" xmlns="http://www.w3.org/2000/svg">
              <defs id="defs6">
                <clippath id="clipPath18" clipPathUnits="userSpaceOnUse">
                  <path id="path16" d="M 0,952 H 800 V 0 H 0 Z"></path>
                </clippath>
              </defs>
              <g transform="matrix(1.3333333,0,0,-1.3333333,0,1269.3333)" id="g10">
                <g id="g12">
                  <g clip-path="url(#clipPath18)" id="g14">
                    <g transform="translate(682.4951,582.7476)">
                      <path style="fill:#005ead;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -59.794,58.339 -153.52,58.274 -213.486,-0.24 l -69.6,-69.607 -8.665,-8.666 10e-4,-0.003 -28.699,-28.699 -0.268,-0.268 -69.35,-69.359 c -36.254,-37.1 -100.647,-37.448 -137.421,0.26 -13.944,13.952 -22.865,30.734 -26.823,48.314 l -29.335,19.178 -24.954,-14.11 c 3.642,-34.12 18.803,-65.857 43.471,-90.525 56.342,-57.927 156.881,-57.58 212.704,-0.261 l 69.368,69.378 30.047,30.047 -0.003,0.001 7.077,7.077 0.243,0.243 69.35,69.358 c 39.139,38.12 100.407,38.055 138.94,0.478 15.92,-16.336 25.16,-36.539 27.794,-57.356 l 27.954,15.805 25.28,-16.526 C 40.926,-60.979 26.428,-27.111 0,0"></path>
                    </g>
                    <g transform="translate(337.5645,500.0137)">
                      <path style="fill:#ffde17;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 37.719,37.013 0.135,0.133 -18.722,18.722 -26.627,26.626 c -56.235,56.236 -156.145,56.279 -212.466,0 -25.537,-25.537 -40.856,-58.357 -43.965,-93.52 l 26.183,14.805 26.612,-17.397 c 2.396,21.304 11.901,42.027 28.573,58.709 37.296,37.295 100.344,37.339 137.66,0 z"></path>
                    </g>
                    <g transform="translate(695.2129,473.6572)">
                      <path style="fill:#ed1c1d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -27.768,-15.701 c -3.403,-18.871 -12.308,-36.961 -26.748,-51.79 -38.965,-38.966 -99.973,-38.966 -138.94,0 l -33.997,33.998 -7.406,7.406 -0.134,-0.135 -37.359,-37.373 9.628,-9.629 0.161,0.034 0.196,-0.196 31.509,-31.51 c 28.768,-28.768 66.692,-44.605 106.873,-44.605 40.179,0 78.104,15.837 107.133,44.866 24.364,25.018 38.489,55.968 42.426,87.916 z"></path>
                    </g>
                    <g transform="translate(150.3687,737.5391)">
                      <path style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 27.996,0 43.628,20.063 43.628,53.419 0,21.229 -4.67,35.925 -14.696,45.257 -7.703,7.465 -20.995,12.131 -35.691,12.131 H -28.222 V 0 Z m -74.414,137.633 h 73.487 c 50.62,0 80.948,-30.795 80.948,-82.581 0,-24.491 -6.768,-45.72 -19.133,-59.718 C 47.354,-19.83 28.932,-26.827 2.105,-26.827 H -74.648 V 0 h 12.833 v 110.807 h -12.599 z"></path>
                    </g>
                    <g transform="translate(336.7939,769.729)">
                      <path style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -29.391,-2.799 -48.523,-5.363 -48.523,-22.624 0,-10.268 8.17,-17.031 20.527,-17.031 15.865,0 27.996,11.897 27.996,27.529 z M 29.158,-34.755 H 39.894 V -59.017 H 1.17 v 14.696 c -12.833,-12.828 -22.399,-17.261 -37.796,-17.261 -24.956,0 -44.087,16.793 -44.087,38.958 0,36.622 41.288,40.586 81.181,44.321 -0.234,19.128 -4.904,24.028 -23.092,24.028 -12.833,0 -21.697,-7.231 -22.398,-18.898 l -30.328,0.936 c 1.638,24.959 21.697,41.054 51.322,41.054 34.521,0 53.186,-15.628 53.186,-44.087 z"></path>
                    </g>
                    <g transform="translate(443.4336,816.1514)">
                      <path style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 8.162,15.865 17.26,22.395 31.254,22.395 4.202,0 7.937,-0.464 14.003,-1.634 V -8.396 C 39.659,-7.231 35.223,-6.763 30.093,-6.763 13.76,-6.763 0,-18.426 0,-32.658 v -48.519 h 14.929 v -24.262 h -57.621 v 24.262 h 12.13 v 76.281 h -11.897 v 24.258 l 42.459,0 z"></path>
                    </g>
                    <g transform="translate(523.8691,875.4062)">
                      <path style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 H 30.327 V -39.893 H 54.823 V -64.15 H 30.327 v -64.385 c 0,-8.864 4.671,-13.063 14.696,-13.063 h 9.8 v -23.096 c -7.235,-1.165 -13.526,-1.633 -18.898,-1.633 -12.824,0 -36.158,0 -36.158,24.262 v 77.915 h -15.389 v 24.257 H 0 Z"></path>
                    </g>
                    <g transform="translate(672.4902,835.5132)">
                      <path style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 H 51.547 V -24.257 H 40.82 L -3.033,-154.426 c -3.735,-11.199 -10.502,-14.462 -30.561,-14.462 -9.566,0 -14.228,0.23 -19.6,1.166 v 25.193 h 16.801 c 6.767,0 9.098,2.565 12.131,13.764 l 0.927,3.033 -39.417,101.475 H -73.253 V 0 h 52.258 v -24.257 h -10.97 l 22.633,-63.22 20.059,63.22 -10.727,0 z"></path>
                    </g>
                    <g transform="translate(77.1021,276.7266)">
                      <path style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 h 76.036 l 20.291,-73.179 19.441,-74.04 18.869,75.182 L 154.078,0 h 76.036 v -32.873 h -16.012 v -135.783 h 16.012 v -32.873 h -52.602 v 129.205 l 0.86,38.023 0.287,8.861 L 129.2,-201.529 H 101.763 L 50.882,-21.724 53.165,-81.753 V -201.529 H 0 v 32.873 h 15.715 v 135.783 l -15.715,0 z"></path>
                    </g>
                    <g transform="translate(432.1787,238.9902)">
                      <path style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 -26.863,-89.186 H 26.301 Z M -24.294,37.736 H 24.019 L 79.476,-130.92 h 15.141 v -32.873 H 48.313 l -13.146,43.735 h -70.896 l -13.146,-43.735 h -46.889 v 32.873 h 15.439 z"></path>
                    </g>
                    <g transform="translate(561.7187,276.7266)">
                      <path style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 H 40.879 L 77.469,-62.03 114.059,0 h 40.878 v -32.873 h -14.578 l -40.88,-64.606 46.306,-71.177 h 15.152 v -32.873 H 117.488 L 77.756,-132.64 38.31,-201.529 H -5.426 v 32.873 H 9.716 l 46.601,71.177 -41.166,64.606 H 0 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div>
            <div class="title ms-2">Abonné <br class="d-sm-none"> Darty Max Intégral ? </div>
          </div>
          <div>-30%</div>
        </div>
      </label>
    </div>
    <div class="collapse" id="collapse-darty">
      <p>
        <i class="ci-rocket"></i> Entrez votre adresse mail de souscription afin de vérifier votre éligibilité et <strong>calculer votre réduction</strong> sur les pannes sélectionnées.
      </p>
      <form class="form-darty" novalidate="">
        <div class="input-group">
          <input class="form-control form-control-lg" type="email" data-darty-value="" placeholder="Par ex : nicolas.dupont@gmail.com" required="">
          <button class="btn cta-primary fs-sm rounded-end" type="submit" style="border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important">CONFIRMER</button>
          <div class="invalid-feedback">L'adresse mail est incorrecte !</div>
        </div>
        <feedback class="fade-in none" data-feedback-darty=""></feedback>
      </form>
    </div>
    <div class="d-none" data-pannes-total="">
      <div>
        <div>
          <div>Total (TTC)</div>
          <div class="fs-sm fw-medium text-green" data-pannes-total-ten="">prenez rendez-vous et bénéficiez des -10% <sup>*</sup>
          </div>
        </div>
        <div>
          <s data-pannes-total-full=""></s>
          <span data-pannes-total-discounted="">0.00€</span>
        </div>
      </div>
      <div class="alert alert-info none" role="alert" data-pannes-remise="">Grâce à la remise, vous économisez 0€ sur les pannes sélectionnées !</div>
    </div>

    <div class="btn btn-lg cta-primary d-none" id="nextButton" wire:click="getAppointment()" data-pannes-submit="">PRENDRE RENDEZ-VOUS <div>(c'est gratuit !)</div>
    </div>

    <alert class="fade-in mt-3 d-none" role="alert" data-message-pannes-prices="">
      <i class="ci-announcement"></i>
      <span>Nos tarifs sont indiqués à titre indicatif et pourront évoluer selon le diagnostic effectué en boutique WeFix. </span>
    </alert>
    <p class="text-muted fs-sm mt-3" data-pannes-total-ten="">
      <sup>*</sup>Réduction de 10% applicable sur la réparation la plus chère de la prestation réservée via une prise de rendez-vous sur le site <a class="wf-decoration--underline" href="https://wefix.net/">wefix.net</a>. Sous réserve que la réparation soit effectuée dans le point de vente et a l’heure choisie lors de la prise de rendez-vous. WeFix se réserve le droit d’annuler le rendez-vous à tout moment. Offre non cumulable avec une autre offre.
    </p>
  </div>

<script>
    document.getElementById('nextButton').addEventListener('click', function() {
        var totalPrice = document.getElementById('totalPrice').innerText;
        Livewire.emit('totalPriceUpdated', totalPrice);
    });
</script>

<script>
    function updateQuoteData(checkbox) {
        var failureId = checkbox.dataset.failureId;
        var isChecked = checkbox.checked;

        var data = {
            failureId: failureId,
            isChecked: isChecked
        };

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url:"{{ route('update.failure.quote.post') }}",
            data:{failureId:failureId, isChecked:isChecked},
                success: function(data){
                    // alert(data.success);
            }
        });
    }

    function updateAttributeFailureQuoteData(failureId, attributeId) {
        var failureId = failureId;
        var attributeId = attributeId;

        var data = {
            failureId: failureId,
            attributeId: attributeId
        };

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url:"{{ route('update.attribute.failure.quote.post') }}",
            data:{failureId:failureId, attributeId: attributeId},
                success: function(data){
                    // alert(data.success);
            }
        });
    }

</script>

