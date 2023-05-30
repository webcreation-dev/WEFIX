<footer class="footer-slim">
    <div class="container py-md-3 py-4 d-flex flex-column align-items-center">
      <a href="/">

        <img src="{{asset('images/mayday-phone-logo.png')}}" style="border-radius: 5px;" alt="" width="300" >
      </a>
      <div class="mt-1 mb-md-4">
        <div class="fs-xs text-light">© Tous droits réservés. <strong>Mayday Phone 2023</strong>. </div>
      </div>
      <div class="widget widget-links widget-light mt-md-0 mt-3">
        <div class="grid mts" style="--wf-gap: 16px">
          <div class="g-col-md-3 g-col-6">
            <a class="widget-list-link fs-14 fw-bold" href= aria-label="Nous contacter">
              <span class="text-light hover-underline-light">Nous contacter</span>
            </a>
          </div>
          <div class="g-col-md-3 g-col-6">
            <a class="widget-list-link fs-14 fw-bold" href= aria-label="Mentions légales">
              <span class="text-light hover-underline-light">Besoin d'aide ?</span>
            </a>
          </div>
          <div class="g-col-md-3 g-col-6">
            <a class="widget-list-link fs-14 fw-bold" href= aria-label="Politique cookies">
              <span class="text-light hover-underline-light">Politique cookies</span>
            </a>
          </div>
          <div class="g-col-md-3 g-col-6">
            <div class="_pts widget-list-link fs-14 fw-bold ot-sdk-show-settings">Gérer mes cookies</div>
          </div>
        </div>
      </div>
    </div>
  </footer>




  <script>
    var cornersTotal = 150
  </script>
  <script src="{{asset('reparation/app.bundle.min.js.téléchargement')}}"></script>

  <script>
    const marque = 'SAMSUNG';
  </script>
  <script src="{{asset('reparation/reparation_pannes.bundle.min.js.téléchargement')}}"></script>
  <script>
    window.dataLayer.push({
      event: 'quoteBrand',
      ecInit: document.title,
      ecType: 'SMARTPHONE',
      ecBrand: 'SAMSUNG',
      ecModel: 'GALAXY S23'
    })
  </script>

  @livewireScripts
