<div class="g-col-md-6 g-col-12">
    <div class="title-section fs-lg fw-bold widget-title text-center">{{$current_step_selling->title}}</div>

    <sl-details class="wf-mt--3 wf-details wf-details--static wf-details--pannes" summary="" open="">

        @foreach ($current_step_selling->questionStepSellings()->get() as $question)
        <div class="select-pannes-container">
            <label class="select-pannes">
                <input class="pannes-checkbox" name="pannes" type="radio" data-pannes="" autocomplete="off"
                    value=""
                    data-img="https://intranet.wefix.net/WB/PictoReparation/FacadeAvant.png"
                    data-id="{{ $question->id }}N" data-titre="Façade avant" data-step-selling-id="{{$current_step_selling->id}}" data-question-step-selling-id="{{ $question->id }}"
                    onclick="updateQuestionSellingDevice(this)" @if($stepSelling['answer'][$current_step_selling->id] == $question->id) checked @endif >

                <div class="card-pannes" style="height: 5rem !important">
                    <div>
                        <img src="{{asset('reparation/autres.webp')}}"
                            srcset="https://intranet.wefix.net/WB/PictoReparation/FacadeAvant.png 1.5x"
                            alt="Façade avant">
                    </div>
                    <div>
                        <div class="subtitle mb-1">{{$question->title}}</div>
                        <div class="title mb-1" style="opacity: 0.8;">{{$question->description}}</div>
                    </div>
                    <div>
                        <div class="list-prices">
                            <div class="price-first none" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </label>
        </div>
        @endforeach
    </sl-details>

    @if ($total_step == $current_step)
        <div class="btn btn-lg cta-primary" style="float: right;">VOIR L'ESTIMATION</div>
    @else
        <div class="btn btn-lg cta-primary" wire:click="nextStepSelling('{{$current_step}}', '{{$model}}')"    style="float: right;">CONTINUER
        </div>
    @endif



    <p class="text-muted fs-sm mt-3" style="text-align: justify; float: left;" data-pannes-total-ten="">
        <sup>*</sup>Réduction de 10% applicable sur la réparation la plus chère de la prestation réservée via une prise
        de rendez-vous sur le site <a class="wf-decoration--underline" href="https://wefix.net/">wefix.net</a>. Sous
        réserve que la réparation soit effectuée dans le point de vente et a l’heure choisie lors de la prise de
        rendez-vous. WeFix se réserve le droit d’annuler le rendez-vous à tout moment. Offre non cumulable avec une
        autre offre.
    </p>
</div>


<script>
    function updateQuestionSellingDevice(checkbox) {

        var question = checkbox.dataset.questionStepSellingId;
        var step = checkbox.dataset.stepSellingId;
        // alert(step);

        var data = {
            question: question,
            step: step,
        };

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url:"{{ route('update.question.selling.device.post') }}",
            data:{question: question, step: step},
                success: function(data){
                    // alert(data.success);
            }
        });
    }
</script>
