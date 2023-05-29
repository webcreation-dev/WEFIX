<div class="g-col-md-6 g-col-12">
    <div class="title-section fs-lg fw-bold widget-title text-center">Quel est l'état esthétique de votre appareil ?
    </div>

    <sl-details class="wf-mt--3 wf-details wf-details--static wf-details--pannes" summary="" open="">

        @foreach ($failures as $failure)
        <div class="select-pannes-container">
            <label class="select-pannes">
                <input class="pannes-checkbox" name="pannes" type="radio" data-pannes="" autocomplete="off"
                    value="{{ $failure->id }}" data-original-price="{{ $failure->price }}"
                    data-final-price="{{ $failure->reduction_price }}"
                    data-img="https://intranet.wefix.net/WB/PictoReparation/FacadeAvant.png"
                    data-id="{{ $failure->code }}N" data-titre="Façade avant" data-failure-id="{{ $failure->id }}"
                    onclick="updateQuestionSellingDevice(this)" @if(isset($sellData['questions'][$failure->id])) checked @endif >

                <div class="card-pannes" style="height: 5rem !important">
                    <div>
                        <img src="{{asset('reparation/'. $failure->image )}}"
                            srcset="https://intranet.wefix.net/WB/PictoReparation/FacadeAvant.png 1.5x"
                            alt="Façade avant">
                    </div>
                    <div>
                        <div class="subtitle mb-1">{{$failure->name}}</div>
                        <div class="title mb-1" style="opacity: 0.8;">Peut présenter des micro-rayures à peine visibles </div>
                    </div>
                    <div>
                        <div class="list-prices">
                            <div class="price-first none" style="display: none;">{{$failure->reduction_price}}€</div>
                        </div>
                    </div>
                </div>
            </label>
        </div>
        @endforeach
    </sl-details>

    <div class="btn btn-lg cta-primary" style="float: right;">CONTINUER
    </div>


    <p class="text-muted fs-sm mt-3" style="text-align: justify; float: left;" data-pannes-total-ten="">
        <sup>*</sup>Réduction de 10% applicable sur la réparation la plus chère de la prestation réservée via une prise
        de rendez-vous sur le site <a class="wf-decoration--underline" href="">wefix.net</a>. Sous
        réserve que la réparation soit effectuée dans le point de vente et a l’heure choisie lors de la prise de
        rendez-vous. WeFix se réserve le droit d’annuler le rendez-vous à tout moment. Offre non cumulable avec une
        autre offre.
    </p>
</div>


<script>
    function updateQuestionSellingDevice(checkbox) {
        var failureId = checkbox.dataset.failureId;

        var data = {
            failureId: failureId,
        };

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url:"{{ route('update.question.selling.device.post') }}",
            data:{failureId:failureId, isChecked:isChecked},
                success: function(data){
                    // alert(data.success);
            }
        });
    }
</script>
