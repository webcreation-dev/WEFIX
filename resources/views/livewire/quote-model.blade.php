<header class="bg-light navbar-reveal">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid align-items-center mts">
        <a class="navbar-brand" href="https://wefix.net/" aria-label="Retourner à l&#39;accueil">
            <img src="{{asset('images/logo.png')}}" alt="" width="215">
        </a>
        <div class="navbar-tool">
          <div class="d-none d-md-block">
            <div class="d-flex align-items-center">
              <img class="ms-sm-n1 ms-n2" src="{{asset('reparation/'. $model->image )}}" srcset="{{asset('reparation/'. $model->image )}}" alt="GALAXY S23" width="70">
              <div class="d-flex flex-column">
                {{-- <div class="text-dark fs-14 fw-medium"></div> --}}
                <span class="title-section fs-21 text-primary ellipsis-navbar-text">{{$model->name}}</span>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column align-items-end ms-auto">
            <div class="title-section fs-13 fw-medium d-none d-sm-block">Total de votre devis :</div>
            <div class="d-flex flex-sm-row flex-column align-items-end mt-1">
              <s class="oldPrice fs-14 fw-medium me-sm-2"></s>
              <span class="newPrice title-section fs-21 text-primary">
                @if(isset($quoteData['discountPrice'])) {{$quoteData['discountPrice']}} @else 0.00 €  @endif
                </span>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <header class="bg-light shadow navbar-product none">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid align-items-center mts">
        <div class="d-flex align-items-center">
          <img class="ms-sm-n1 ms-n2" src="{{asset('reparation/'. $model->image )}}" srcset="{{asset('reparation/'. $model->image )}}" alt="GALAXY S23" width="70">
          <div class="d-flex flex-column">
            {{-- <div class="text-dark fs-14 fw-medium d-none d-sm-block">SAMSUNG</div> --}}
            <div class="d-flex flex-sm-row flex-column align-items-start scroll-device">
              {{-- <div class="text-dark fs-14 fw-medium me-2 d-sm-none">SAMSUNG</div> --}}
              <span class="title-section fs-21 text-primary scroll-device-text">{{$model->name}}</span>
            </div>
          </div>
        </div>
        <div class="d-flex ms-auto">
          <div class="d-flex flex-column align-items-end">
            <div class="title-section fs-13 fw-medium d-none d-sm-block">Total de votre devis :</div>
            <div class="d-flex flex-sm-row flex-column align-items-end mt-1">
              <s class="oldPriceAlt fs-14 fw-medium me-sm-2" id="notDiscountPrice"></s>
              <span id="discountPrice"  class="newPriceAlt title-section fs-21 text-primary">
                    @if(isset($quoteData['discountPrice'])) {{$quoteData['discountPrice']}} @else 0.00 €  @endif
                </span>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

