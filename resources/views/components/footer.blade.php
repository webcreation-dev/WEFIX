<footer class="footer bg-darker pb-md-0 pb-2">
    <div class="bg-dark">
      <div class="container py-5">
        <div class="grid-footer">
          <div>
            <div class="title"><a href="{{ route('typedevices.index') }}">RÉPARATION</a></div>
            {{-- <ul role="list">
              <li>
                <a href="#" aria-label="Rendez-vous réparation">Rendez-vous réparation</a>
              </li>
              <li>
                <a href="#" aria-label="Réparation iPhone 11">Réparation iPhone 11</a>
              </li>
              <li>
                <a href="#" aria-label="Réparation iPhone 12">Réparation iPhone 12</a>
              </li>
              <li>
                <a href="#" aria-label="Réparation Apple">Réparation Apple</a>
              </li>
              <li>
                <a href="#" aria-label="Réparation Samsung">Réparation Samsung</a>
              </li>
              <li>
                <a href="#" aria-label="Réparation Huawei">Réparation Huawei</a>
              </li>
              <li>
                <a href="#" aria-label="Smartphones">Smartphones</a>
              </li>
              <li>
                <a href="#" aria-label="Tablettes">Tablettes</a>
              </li>
            </ul> --}}
          </div>
          <div>
            <div class="title"><a href="{{route('stepsellings.index')}}">REVENDRE</a></div>
            {{-- <ul role="list">
              <li>
                <a href="#" aria-label="Protection XFORCE">Protection XFORCE</a>
              </li>
              <li>
                <a href="#" aria-label="Transfert de données">Transfert de données</a>
              </li>
              <li>
                <a href="#" aria-label="Smartphones reconditionnés">Smartphones reconditionnés</a>
              </li>
              <li>
                <a href="#" aria-label="Nos accessoires">Nos accessoires</a>
              </li>
              <li>
                <a href="#" aria-label="Changement batterie">Changement batterie</a>
              </li>
              <li>
                <a href="#" aria-label="Changer écran iPhone">Changer écran iPhone</a>
              </li>
              <li>
                <a href="#" aria-label="Client Bouygues Telecom ?">Client Bouygues Telecom ?</a>
              </li>
              <li>
                <a href="#" aria-label="Abonné Darty Max Intégral ?">Abonné Darty Max Intégral ?</a>
              </li>
            </ul> --}}
          </div>
          <div>
            <div class="title"><a href="{{route('products.index')}}">NOTRE BOUTIQUE</a></div>
            {{-- <ul role="list">
              <li>
                <a href="#" aria-label="Trouver une boutique">Trouver une boutique</a>
              </li>
              <li>
                <a href="#" aria-label="Besoin d&#39;aide ?">Besoin d'aide ?</a>
              </li>
              <li>
                <a href="#" aria-label="Nos CGV">Nos CGV</a>
              </li>
              <li>
                <a href="#" aria-label="Nous contacter">Nous contacter</a>
              </li>
              <li>
                <a href="#" aria-label="Politique cookies">Politique cookies</a>
              </li>
              <li>
                <a href="#" aria-label="Politique de confidentialité">Politique de confidentialité</a>
              </li>
            </ul> --}}
          </div>
          <div>
            <div class="title"><a target="_blank" href="https://www.custom.maydayphone.com/phone_case">COQUES PERSONNALISEES</a></div>
            {{-- <ul role="list">
              <li>
                <a href="#" aria-label="Qui sommes-nous ?">Qui sommes-nous ?</a>
              </li>
              <li>
                <a href="#" aria-label="Mayday Phone recrute">Mayday Phone recrute</a>
              </li>
              <li>
                <a href="#" aria-label="Mentions légales">Mentions légales</a>
              </li>
              <li>
                <a href="#" aria-label="Index égalité H/F">Index égalité H/F</a>
              </li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="container my-lg-4 my-3 py-2">

      {{-- <div class="container-fluid mb-md-0 mb-3">
        <div class="widget widget-newsletter">
          <div class="title-section widget-title" data-sal="slide-up" data-sal-delay="400" data-sal-duration="600">S'inscrire à notre newsletter</div>
          <form class="form-newsletter subscription-form validate" novalidate="">
            <div class="input-group flex-nowrap">
              <i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
              <input class="form-control form-control-lg rounded-start" type="email" data-newsletter-mail="" placeholder="Adresse mail..." required="">
              <button class="btn cta-primary cta-left-radius fs-14" type="submit" aria-label="Abonnez-vous à notre newsletter" style="border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important">VALIDER <sup>*</sup>
              </button>
            </div>
            <div class="form-text text-light mt-3" data-sal="slide-up" data-sal-delay="600" data-sal-duration="800">
              <sup>*</sup> Inscrivez-vous à notre newsletter pour profiter de nos actualités, nos conseils, nos promotions et tous nos bons plans.
            </div>
          </form>
          <div class="subscription-status"></div>
        </div>
      </div> --}}

      <div class="d-flex flex-md-row flex-column align-items-center justify-content-md-between">
        <div class="d-flex flex-column align-items-center align-items-md-start">
          <a href="/" aria-label="Retourner à l&#39;accueil">
            <img src="{{asset('images/mayday-phone-logo.png')}}" style="border-radius: 5px;" alt="" width="250">
          </a>
          <div class="mt-2">
            <div class="fs-xs text-light">© Tous droits réservés. <strong>Mayday Phone 2023</strong>. </div>
          </div>
        </div>
        <div class="mt-md-0 mt-4">
          <div class="title-subsection fs-16 text-light fw-bold mb-2 text-md-start text-center">Rejoignez-nous sur </div>
          <a class="btn-social bs-lg bs-light bs-facebook me-2" href="https://www.facebook.com/profile.php?id=100091874050224" aria-label="Rejoignez-nous sur Facebook" target="_blank" rel="noreferrer noopener">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="facebook"><path fill="#1976D2" d="M14 0H2C.897 0 0 .897 0 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V2c0-1.103-.897-2-2-2z"></path><path fill="#FAFAFA" fill-rule="evenodd" d="M13.5 8H11V6c0-.552.448-.5 1-.5h1V3h-2a3 3 0 0 0-3 3v2H6v2.5h2V16h3v-5.5h1.5l1-2.5z" clip-rule="evenodd"></path></svg>
          </a>
          <a class="btn-social bs-lg bs-light bs-twitter me-2" href="https://t.snapchat.com/LMPYKbqe" aria-label="Rejoignez-nous sur Twitter" target="_blank" rel="noreferrer noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="2498" height="2500" viewBox="147.553 39.286 514.231 514.631" id="snapchat"><path fill="#fffc00" d="M147.553 423.021v.023c.308 11.424.403 22.914 2.33 34.268 2.042 12.012 4.961 23.725 10.53 34.627 7.529 14.756 17.869 27.217 30.921 37.396 9.371 7.309 19.608 13.111 30.94 16.771 16.524 5.33 33.571 7.373 50.867 7.473 10.791.068 21.575.338 32.37.293 78.395-.33 156.792.566 235.189-.484 10.403-.141 20.636-1.41 30.846-3.277 19.569-3.582 36.864-11.932 51.661-25.133 17.245-15.381 28.88-34.205 34.132-56.924 3.437-14.85 4.297-29.916 4.444-45.035v-3.016c0-1.17-.445-256.892-.486-260.272-.115-9.285-.799-18.5-2.54-27.636-2.117-11.133-5.108-21.981-10.439-32.053-5.629-10.641-12.68-20.209-21.401-28.57-13.359-12.81-28.775-21.869-46.722-26.661-16.21-4.327-32.747-5.285-49.405-5.27-.027-.004-.09-.173-.094-.255H278.56c-.005.086-.008.172-.014.255-9.454.173-18.922.102-28.328 1.268-10.304 1.281-20.509 3.21-30.262 6.812-15.362 5.682-28.709 14.532-40.11 26.347-12.917 13.386-22.022 28.867-26.853 46.894-4.31 16.084-5.248 32.488-5.271 49.008"></path><path fill="#fff" d="M407.001 473.488c-1.068 0-2.087-.039-2.862-.076-.615.053-1.25.076-1.886.076-22.437 0-37.439-10.607-50.678-19.973-9.489-6.703-18.438-13.031-28.922-14.775-5.149-.854-10.271-1.287-15.22-1.287-8.917 0-15.964 1.383-21.109 2.389-3.166.617-5.896 1.148-8.006 1.148-2.21 0-4.895-.49-6.014-4.311-.887-3.014-1.523-5.934-2.137-8.746-1.536-7.027-2.65-11.316-5.281-11.723-28.141-4.342-44.768-10.738-48.08-18.484a7.187 7.187 0 0 1-.584-2.443 4.518 4.518 0 0 1 3.777-4.711c22.348-3.68 42.219-15.492 59.064-35.119 13.049-15.195 19.457-29.713 20.145-31.316a2.85 2.85 0 0 1 .101-.217c3.247-6.588 3.893-12.281 1.926-16.916-3.626-8.551-15.635-12.361-23.58-14.882-1.976-.625-3.845-1.217-5.334-1.808-7.043-2.782-18.626-8.66-17.083-16.773 1.124-5.916 8.949-10.036 15.273-10.036 1.756 0 3.312.308 4.622.923 7.146 3.348 13.575 5.045 19.104 5.045 6.876 0 10.197-2.618 11-3.362a1170.709 1170.709 0 0 0-.679-11.262c-1.614-25.675-3.627-57.627 4.546-75.95 24.462-54.847 76.339-59.112 91.651-59.112a3909.561 3909.561 0 0 0 7.582-.071c15.354 0 67.339 4.27 91.816 59.15 8.173 18.335 6.158 50.314 4.539 76.016l-.076 1.23c-.222 3.49-.427 6.793-.6 9.995.756.696 3.795 3.096 9.978 3.339 5.271-.202 11.328-1.891 17.998-5.014 2.062-.968 4.345-1.169 5.895-1.169 2.343 0 4.727.456 6.714 1.285l.106.041c5.66 2.009 9.367 6.024 9.447 10.242.071 3.932-2.851 9.809-17.223 15.485-1.472.583-3.35 1.179-5.334 1.808-7.952 2.524-19.951 6.332-23.577 14.878-1.97 4.635-1.322 10.326 1.926 16.912.036.072.067.145.102.221 1 2.344 25.205 57.535 79.209 66.432a4.523 4.523 0 0 1 3.778 4.711 7.252 7.252 0 0 1-.598 2.465c-3.289 7.703-19.915 14.09-48.064 18.438-2.642.408-3.755 4.678-5.277 11.668-.63 2.887-1.271 5.717-2.146 8.691-.819 2.797-2.641 4.164-5.567 4.164h-.441c-1.905 0-4.604-.346-8.008-1.012-5.95-1.158-12.623-2.236-21.109-2.236-4.948 0-10.069.434-15.224 1.287-10.473 1.744-19.421 8.062-28.893 14.758-13.265 9.379-28.272 19.987-50.707 19.987"></path><path fill="#020202" d="M408.336 124.235c14.455 0 64.231 3.883 87.688 56.472 7.724 17.317 5.744 48.686 4.156 73.885-.248 3.999-.494 7.875-.694 11.576l-.084 1.591 1.062 1.185c.429.476 4.444 4.672 13.374 5.017l.144.008.15-.003c5.904-.225 12.554-2.059 19.776-5.442 1.064-.498 2.48-.741 3.978-.741 1.707 0 3.521.321 5.017.951l.226.09c3.787 1.327 6.464 3.829 6.505 6.093.022 1.28-.935 5.891-14.359 11.194-1.312.518-3.039 1.069-5.041 1.7-8.736 2.774-21.934 6.96-26.376 17.427-2.501 5.896-1.816 12.854 2.034 20.678 1.584 3.697 26.52 59.865 82.631 69.111a2.487 2.487 0 0 1-.229.9c-.951 2.24-6.996 9.979-44.612 15.783-5.886.902-7.328 7.5-9 15.17-.604 2.746-1.218 5.518-2.062 8.381-.258.865-.306.914-1.233.914h-.442c-1.668 0-4.2-.346-7.135-.922-5.345-1.041-12.647-2.318-21.982-2.318-5.21 0-10.577.453-15.962 1.352-11.511 1.914-20.872 8.535-30.786 15.543-13.314 9.408-27.075 19.143-48.071 19.143-.917 0-1.812-.031-2.709-.076l-.236-.01-.237.018c-.515.045-1.034.068-1.564.068-20.993 0-34.76-9.732-48.068-19.143-9.916-7.008-19.282-13.629-30.791-15.543-5.38-.896-10.752-1.352-15.959-1.352-9.333 0-16.644 1.428-21.978 2.471-2.935.574-5.476 1.066-7.139 1.066-1.362 0-1.388-.08-1.676-1.064-.844-2.865-1.461-5.703-2.062-8.445-1.676-7.678-3.119-14.312-9.002-15.215-37.613-5.809-43.659-13.561-44.613-15.795a2.739 2.739 0 0 1-.231-.918c56.11-9.238 81.041-65.408 82.63-69.119 3.857-7.818 4.541-14.775 2.032-20.678-4.442-10.461-17.638-14.653-26.368-17.422-2.007-.635-3.735-1.187-5.048-1.705-11.336-4.479-14.823-8.991-14.305-11.725.601-3.153 6.067-6.359 10.837-6.359 1.072 0 2.012.173 2.707.498 7.747 3.631 14.819 5.472 21.022 5.472 9.751 0 14.091-4.537 14.557-5.055l1.057-1.182-.085-1.583c-.197-3.699-.44-7.574-.696-11.565-1.583-25.205-3.563-56.553 4.158-73.871 23.37-52.396 72.903-56.435 87.525-56.435.36 0 6.717-.065 6.717-.065.26-.002.549-.006.852-.006m0-9.038h-.017c-.333 0-.646 0-.944.004l-6.633.066c-8.566 0-25.705 1.21-44.115 9.336-10.526 4.643-19.994 10.921-28.14 18.66-9.712 9.221-17.624 20.59-23.512 33.796-8.623 19.336-6.576 51.905-4.932 78.078l.006.041c.176 2.803.361 5.73.53 8.582-1.265.581-3.316 1.194-6.339 1.194-4.864 0-10.648-1.555-17.187-4.619-1.924-.896-4.12-1.349-6.543-1.349-3.893 0-7.997 1.146-11.557 3.239-4.479 2.63-7.373 6.347-8.159 10.468-.518 2.726-.493 8.114 5.492 13.578 3.292 3.008 8.128 5.782 14.37 8.249 1.638.645 3.582 1.261 5.641 1.914 7.145 2.271 17.959 5.702 20.779 12.339 1.429 3.365.814 7.793-1.823 13.145-.069.146-.138.289-.201.439-.659 1.539-6.807 15.465-19.418 30.152-7.166 8.352-15.059 15.332-23.447 20.752-10.238 6.617-21.316 10.943-32.923 12.855a9.038 9.038 0 0 0-7.559 9.424c.078 1.33.39 2.656.931 3.939l.013.023c1.843 4.311 6.116 7.973 13.063 11.203 8.489 3.943 21.185 7.26 37.732 9.855.836 1.59 1.704 5.586 2.305 8.322.629 2.908 1.285 5.898 2.22 9.074 1.009 3.441 3.626 7.553 10.349 7.553 2.548 0 5.478-.574 8.871-1.232 4.969-.975 11.764-2.305 20.245-2.305 4.702 0 9.575.414 14.48 1.229 9.455 1.574 17.606 7.332 27.037 14 13.804 9.758 29.429 20.803 53.302 20.803.651 0 1.304-.021 1.949-.066.789.037 1.767.066 2.799.066 23.88 0 39.501-11.049 53.29-20.799l.022-.02c9.433-6.66 17.575-12.41 27.027-13.984 4.903-.814 9.775-1.229 14.479-1.229 8.102 0 14.517 1.033 20.245 2.15 3.738.736 6.643 1.09 8.872 1.09l.218.004h.226c4.917 0 8.53-2.699 9.909-7.422.916-3.109 1.57-6.029 2.215-8.986.562-2.564 1.46-6.674 2.296-8.281 16.558-2.6 29.249-5.91 37.739-9.852 6.931-3.215 11.199-6.873 13.053-11.166.556-1.287.881-2.621.954-3.979a9.036 9.036 0 0 0-7.56-9.424c-51.585-8.502-74.824-61.506-75.785-63.758a6.454 6.454 0 0 0-.205-.438c-2.637-5.354-3.246-9.777-1.816-13.148 2.814-6.631 13.621-10.062 20.771-12.332 2.07-.652 4.021-1.272 5.646-1.914 7.039-2.78 12.07-5.796 15.389-9.221 3.964-4.083 4.736-7.995 4.688-10.555-.121-6.194-4.856-11.698-12.388-14.393-2.544-1.052-5.445-1.607-8.399-1.607-2.011 0-4.989.276-7.808 1.592-6.035 2.824-11.441 4.368-16.082 4.588-2.468-.125-4.199-.66-5.32-1.171.141-2.416.297-4.898.458-7.486l.067-1.108c1.653-26.19 3.707-58.784-4.92-78.134-5.913-13.253-13.853-24.651-23.604-33.892-8.178-7.744-17.678-14.021-28.242-18.661-18.384-8.066-35.522-9.271-44.1-9.271"></path><path fill="none" d="M147.553 39.443h514.231v514.23H147.553z"></path></svg>
          </a>
          <a class="btn-social bs-lg bs-light bs-instagram me-2" href="https://www.tiktok.com/@maydayphone?is_from_webapp=1&sender_device=pc" aria-label="Rejoignez-nous sur Instagram" target="_blank" rel="noreferrer noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" id="tiktok"><path d="M38.4 21.68V16c-2.66 0-4.69-.71-6-2.09a8.9 8.9 0 0 1-2.13-5.64v-.41l-5.37-.13V30.8a5 5 0 1 1-3.24-5.61v-5.5a10.64 10.64 0 0 0-1.7-.14 10.36 10.36 0 1 0 10.36 10.36 10.56 10.56 0 0 0-.08-1.27v-9.15a14.48 14.48 0 0 0 8.16 2.19Z"></path></svg>
          </a>
          <a class="btn-social bs-lg bs-light bs-linkedin" href="https://www.instagram.com/mayday_phone/?igshid=NTc4MTIwNjQ2YQ==" aria-label="Rejoignez-nous sur Linkedin" target="_blank" rel="noreferrer noopener">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="instagram"><linearGradient id="a" x1="1.464" x2="14.536" y1="14.536" y2="1.464" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#FFC107"></stop><stop offset=".507" stop-color="#F44336"></stop><stop offset=".99" stop-color="#9C27B0"></stop></linearGradient><path fill="url(#a)" d="M11 0H5a5 5 0 0 0-5 5v6a5 5 0 0 0 5 5h6a5 5 0 0 0 5-5V5a5 5 0 0 0-5-5zm3.5 11c0 1.93-1.57 3.5-3.5 3.5H5c-1.93 0-3.5-1.57-3.5-3.5V5c0-1.93 1.57-3.5 3.5-3.5h6c1.93 0 3.5 1.57 3.5 3.5v6z"></path><linearGradient id="b" x1="5.172" x2="10.828" y1="10.828" y2="5.172" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#FFC107"></stop><stop offset=".507" stop-color="#F44336"></stop><stop offset=".99" stop-color="#9C27B0"></stop></linearGradient><path fill="url(#b)" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm0 6.5A2.503 2.503 0 0 1 5.5 8c0-1.379 1.122-2.5 2.5-2.5s2.5 1.121 2.5 2.5c0 1.378-1.122 2.5-2.5 2.5z"></path><linearGradient id="c" x1="11.923" x2="12.677" y1="4.077" y2="3.323" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#FFC107"></stop><stop offset=".507" stop-color="#F44336"></stop><stop offset=".99" stop-color="#9C27B0"></stop></linearGradient><circle cx="12.3" cy="3.7" r=".533" fill="url(#c)"></circle></svg>
          </a>
        </div>
      </div>
    </div>
  </footer>
