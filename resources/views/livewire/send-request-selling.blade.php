<form class="form wf-form-client-reparation mt-4" wire:submit.prevent="submitForm" novalidate="">

    <div class="grid" style="--wf-gap: 16px">
      <div class="d-flex g-col-sm-6 g-col-12">
        <input class="btn-check" type="radio"  id="MR" name="civility" wire:model="appointmentFields.civility" required value="MR" checked>
        <label class="btn btn-outline-primary fw-medium w-50 me-2" for="MR">Monsieur</label>
        <input class="btn-check" type="radio" id="MME" name="civility" wire:model="appointmentFields.civility" required value="MME">
        <label class="btn btn-outline-primary fw-medium w-50" for="MME">Madame</label>
      </div>
    </div>


    <div class="grid mt-3" style="--wf-gap: 16px">
      <div class="g-col-sm-6 g-col-12">
        <div class="form-floating">
          <input class="form-control" type="text" required name="surname" id="surname" wire:model="appointmentFields.surname" style="text-transform: capitalize" placeholder="..." maxlength="40" autofocus="" autocomplete="" required="">
          <label class="fs-sm mts" for="surname">Votre prénom</label>
          <div class="invalid-tooltip fs-12 fw-medium fade-in mt-1">Veuillez entrer votre prénom !</div>
            @error("appointmentFields.surname")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
      </div>
      <div class="g-col-sm-6 g-col-12">
        <div class="form-floating">
          <input class="form-control" type="text" required name="name" id="name" wire:model="appointmentFields.name"  style="text-transform: capitalize" placeholder="..." maxlength="40" autocomplete="" required="">
          <label class="fs-sm mts" for="name">Votre nom</label>
          <div class="invalid-tooltip fs-12 fw-medium fade-in mt-1">Veuillez entrer votre nom !</div>
            @error("appointmentFields.name")
                    <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
      </div>
      <div class="g-col-12">
        <div class="form-floating">
          <input class="form-control" type="email" required name="mail" wire:model="appointmentFields.mail" id="mail" placeholder="..." maxlength="60" autocomplete="" required="">
          <label class="fs-sm mts" for="mail">Votre adresse mail</label>
          <div class="invalid-tooltip fs-12 fw-medium fade-in mt-1">Adresse mail incorrecte !</div>
          @error("appointmentFields.mail")
                    <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
      </div>
      <div class="g-col-sm-6 g-col-12">
        <div class="form-floating">
          <input class="form-control" type="number" required name="postal" id="postal" wire:model="appointmentFields.postal" placeholder="..." inputmode="numeric" oninput="this.value = this.value.replace(/D+/g, &#39;&#39;)" required="">
          <label class="fs-sm mts" for="postal">Votre code postal</label>
          <div class="invalid-tooltip fs-12 fw-medium fade-in mt-1">Veuillez entrer votre code postal !</div>
          @error("appointmentFields.postal")
                    <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
      </div>
      <div class="g-col-sm-6 g-col-12">
        <div class="form-floating">
          <select class="form-select" name="country" required id="country" wire:model="appointmentFields.country">
            <option value="France" selected="">France</option>
            <option value="Belgique">Belgique</option>
          </select>
          <label class="d-flex flex-row align-items-center" for="country">Pays <span class="ms-1" data-form-country-flag="">
              <img src="{{asset('reparation/france.svg')}}" alt="France" width="18px" height="18px">
            </span>
          </label>
          @error("appointmentFields.country")
                    <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
      </div>
      <div class="g-col-12">
        <div class="form-floating">
          <input class="form-control" type="number" required name="phone" wire:model="appointmentFields.phone" id="phone" placeholder="..." inputmode="numeric" oninput="this.value = this.value.replace(/D+/g, &#39;&#39;)" autocomplete="" required="">
          <label class="fs-sm mts" for="phone">Numéro de téléphone</label>
          <div class="invalid-tooltip fs-12 fw-medium fade-in mt-1">Veuillez entrer votre numéro de téléphone !</div>
            @error("appointmentFields.phone")
                    <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
      </div>
      <div class="g-col-12">
        <div class="checkbox-container">
          <input class="checkbox-input" type="checkbox" required id="newsletter" wire:model="appointmentFields.newsletter">
          <label class="checkbox" for="newsletter">
            <span>
              <svg class="checkbox-symbol">
                <symbol id="check" viewBox="0 0 12 10">
                  <polyline points="1.5 6 4.5 9 10.5 1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
                </symbol>
              </svg>
              <svg width="12px" height="10px">
                <use xlink:href="#"></use>
              </svg>
            </span>
            <span class="text-muted fs-sm">Je ne souhaite pas recevoir des informations commerciales, des nouveautés, des promotions et tous les bons plans et remises <strong>de la part de Mayday Phone</strong>. </span>
          </label>
        </div>
      </div>
    </div>
    <div class="text-center mt-md-3 mt-5">
      <button class="btn btn-lg cta-primary" type="submit" onclick="validateForm()" data-event-type="rdv" wire:click="submitForm" data-label-form-submit="" size="large">SOUMETTRE VOTRE DEMANDE</button>
    </div>
  </form>


