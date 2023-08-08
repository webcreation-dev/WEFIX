<div class="g-col-md-6 g-col-12">
    <div class="title-section fs-lg fw-bold widget-title text-center"> {{$current_step_selling->title}}</div>

    <sl-details class="wf-mt--3 wf-details wf-details--static wf-details--pannes" summary="" open="">

        @foreach ($current_step_selling->questionStepSellings()->get() as $question)
            <div class="select-pannes-container">
                <label class="select-pannes">
                    <input class="pannes-checkbox" name="pannes" type="radio" data-pannes="" autocomplete="off"
                    data-current-step="{{$current_step_selling->id}}" data-question="{{$question->id}}" data-model="{{$model->id}}"
                        value="" data-name-step="{{$current_step_selling->name}}" data-answer="{{$question->title}}"
                        data-img="https://intranet.wefix.net/WB/PictoReparation/FacadeAvant.png"
                        @if ($this->isActive($current_step_selling->id, $question->id,$model->id)) checked @endif
                        data-id="{{ $question->id }}N" data-titre="Façade avant" data-step-selling-id="{{$current_step_selling->id}}" data-question-step-selling-id="{{ $question->id }}"
                        onclick="updateQuestionSellingDevice(this)" @isset($stepSelling['answer'][$current_step_selling->id]) @if($stepSelling['answer'][$current_step_selling->id] == $question->id) checked @endif @endisset  >

                    <div class="card-pannes" style="height: 5rem !important">
                        <div>
                            <img src="{{asset('reparation/autres.svg')}}"
                                srcset="{{asset('reparation/autres.svg')}}"
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
        <div class="btn btn-lg cta-primary" wire:click="estimatePriceDevice('{{$model}}')" style="float: right;">VOIR L'ESTIMATION</div>
    @else
        <div class="btn btn-lg cta-primary" wire:click="nextStepSelling('{{$current_step}}', '{{$model}}')"    style="float: right;">CONTINUER
        </div>
    @endif


</div>


<script>
    function updateQuestionSellingDevice(checkbox) {

        var question = checkbox.dataset.questionStepSellingId;
        var step = checkbox.dataset.stepSellingId;
        var nameStep = checkbox.dataset.nameStep;
        var answer = checkbox.dataset.answer;
        var currentStep = checkbox.dataset.currentStep;
        var question = checkbox.dataset.question;
        var model = checkbox.dataset.model;

        var data = {
            question: question,
            step: step,
            nameStep: nameStep,
            answer: answer,
            currentStep: currentStep,
            question: question,
            model: model
        };

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url:"{{ route('update.question.selling.device.post') }}",
            data:{question: question, step: step, nameStep: nameStep, answer: answer
                , currentStep: currentStep, question: question, model: model
             },
                success: function(data){
                    // alert('success');
            }
        });
    }
</script>
