<div class="d-block d-lg-none">
    <div data-calendar-animation-mobile="" class="none">
        <div>
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Chargement du calendrier ...</span>
            </div>
            <div class="title-section">Chargement du calendrier ...</div>
        </div>
    </div>
    <div class="d-flex flex-column mb-5" data-calendar-mobile="">



        @foreach ($nextDays as $day)
            @php
                $day = explode(" ", $day);
                $times = \App\Models\Repair\StoreDevice::timeSlots($day[0], $store);
            @endphp

            <div class="accordion item mb-3" id="accordionSchedules">
                <div class="accordion-item py-1">
                    <div class="accordion-header" id="head1">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="false"
                            aria-controls="collapse1">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="d-flex align-items-center fs-md mts fw-bold">
                                    <span class="d-none d-md-block fw-medium me-1">Sélectionnez votre
                                        créneau le</span> {{$day[0]}} {{$day[count($day) - 2] . " " . $day[count($day) - 1]}}
                                </div>
                                <div
                                    class="badge rounded-pill bg-primary title-subsection text-light fs-12 me-3">
                                    <div class="d-flex align-items-center">{{count($times)}}<span
                                            class="d-none d-sm-block mx-1">créneaux</span> libres </div>
                                </div>
                            </div>
                        </button>

                        <div class="accordion-collapse collapse" id="collapse{{ $loop->iteration }}" aria-labelledby="head1"
                            data-bs-parent="#accordionSchedules" style="">
                            <div class="accordion-body">
                                <div class="d-flex flex-wrap">

                                    @foreach ($times as $time)
                                        <div class="col-4 text-center my-2"  >
                                            <label>
                                                <input class="scheduleCheckbox card-input-element d-none"
                                                    type="checkbox">
                                                <div class="bg-primary title-subsection fs-16 text-light p-3 rounded"
                                                wire:click="confirmAppointment('{{$day[0]}}', '{{$day[count($day) - 2] . " " . $day[count($day) - 1]}}', {{$time}}')"
                                                    >
                                                    {{$time}}</div>
                                            </label>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
