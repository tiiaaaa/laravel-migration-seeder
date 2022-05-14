@extends("layouts.main")

@section("main-content")
    <div class="container-fluid">
        <section class="row p-4">
            @foreach ($trains as $train )
                <div class="col-4">
                    {{-- Singola Card raffigurante ogni treno --}}
                    <div class="card border border-2 border-dark">
                        {{-- Wrapper dell'immagine --}}
                        <div class="train-immage border-bottom border-2 border-dark d-flex align-items-center justify-content-center">
                            @if ($train->url_immage)
                                <img src="{{$train->url_immage}}" class="card-img-top" alt="Train Immage">
                            @else
                                <p>Immagine non disponibile</p>
                            @endif
                        </div>

                        <div class="card-body p-3">
                            {{-- Riepilogo orari date e destinazione --}}
                            <div class="desciption mb-2">
                                <h5 class="card-text fw-bold">
                                    {{$train->agency}}
                                </h5>
                                <p class="card-text mb-1 text-capitalize">
                                    partenza da: {{$train->departure_station}}
                                </p>
                                <p class="card-text mb-1 text-capitalize">
                                    arrivo presso: {{$train->arrival_station}}
                                </p>
                                <p class="card-text mb-1 text-capitalize">
                                    partenza giorno: {{$train->departure_date}}
                                </p>
                                <p class="card-text mb-1 text-capitalize">
                                    ora di partenza: {{$train->departure_time}}
                                </p>
                                <p class="card-text mb-0 text-capitalize">
                                    ora di arrivo: {{$train->arrival_time}}
                                </p>
                            </div>

                            {{-- Indicazione se il treno è in orario o in ritardo --}}
                            <div class="in-time mb-2">
                                @if ($train->is_in_time == 1)
                                    Il treno é:
                                    <span class="text-capitalize fw-bold" style="color: rgb(42, 209, 42)">
                                        in orario
                                    </span>
                                @else
                                    Il treno é:
                                    <span class="text-capitalize fw-bold" style="color: red">
                                        in ritardo
                                    </span>
                                @endif
                            </div>

                            {{-- Descrizioni Secondarie --}}
                            <div class="train-details d-flex justify-content-between">
                                <span class="text-capitalize">
                                    codice treno: {{$train->train_code}}
                                </span>
                                <span class="text-capitalize">
                                    n. vagoni: {{$train->train_wagons}}
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
