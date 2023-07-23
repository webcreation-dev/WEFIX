<!DOCTYPE html>
<!-- saved from url=(0041)https://wefix.net/reparation/devis/client -->
<html lang="en">
@include('components.head')

<body x-init="" cz-shortcut-listen="true">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC998KW" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>
    <main class="wrapper">
        @livewire('header-controller')
        <section class="container my-3">
            <div class="wf-step sal-animate" aria-label="stepper" role="navigation" data-sal="fade-in"
                data-sal-delay="200" data-sal-duration="200" data-sal-once="data-sal-once">

            </div>
            <h6 class="mt-5 text-center my-4 sal-animate" style="font-size: 15px !important;" data-sal="slide-up" data-sal-delay="400"
                data-sal-duration="300"> Notre offre de reprise </h6>

            <h2 class="form border-top wf-form-client-reparation title-1" style="border-bottom-width:1px;">
            </h2>
            <h2 class="form wf-form-client-reparation mt-5 title-1" style="border-bottom-width:1px;">
                🎉 Envoyez nous votre questionnaire!
            </h2>

            {{-- <div class="form wf-form-client-reparation mt-4 title mb-1"
                style="opacity: 0.8; text-align:left !important;">
                Le reconditionneur vous fait une offre à <strong>456,00 €</strong> pour votre
                <strong>{{ $stepSelling['model']->id }}</strong>.
                C’est la plus élevée parmi tous nos partenaires.
            </div> --}}

            @livewire('send-request-selling-controller')

            <h2 class="form border-top wf-form-client-reparation mt-5 title-1" style="border-bottom-width:1px;">
            </h2>
            <h5 class="form wf-form-client-reparation mt-5" style="border-bottom-width:1px;">
                Une dernière chose...
            </h5>

            <div class="form wf-form-client-reparation mt-4 title mb-1"
                style="opacity: 0.8; text-align:left !important;">
                Votre appareil sera vérifié une fois arrivé à l'usine. Si les informations que vous avez fournies sont inexactes, le marchand vous fera une contre-offre. Bref, mieux vaut être honnête ! Nous ne reprenons pas les appareils blocklistés, greylistés, rootés ou contrefaits.
            </div>



            <p class="text-muted fs-sm mt-5">
                {{-- <sup>*</sup>Réduction de 10% applicable sur la réparation la plus chère de la prestation réservée via
                une prise de rendez-vous sur le site <a class="wf-decoration--underline" href="#">wefix.net</a>. Sous
                réserve que la réparation soit effectuée dans le point de vente et a l’heure choisie lors de la prise de
                rendez-vous. Mayday Phone se réserve le droit d’annuler le rendez-vous à tout moment. Offre non cumulable avec
                une autre offre. --}}
            </p>
        </section>
    </main>

    @include('components.footer')
    @include('components.footer-scripts')

</body>

</html>
