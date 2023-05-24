@extends('layouts.layout')

@section('content')
    <section class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-6 mb-4">
                    {{-- <div class="card">
                        <div class="card-header"></div>

                        <span>{{ $train['stazione_di_partenza'] }}</span>
                        <span>{{ $train['stazione_di_arrivo'] }}</span>
                        <span>{{ $train['orario_di_partenza'] }}</span>
                        <span>{{ $train['orario_di_arrivo'] }}</span>
                        <span>{{ $train['codice_treno'] }}</span>
                        <span>{{ $train['numero_carrozze'] }}</span>
                        <span>{{ $train['in_orario'] }}</span>
                        <span>{{ $train['cancellato'] }}</span>
                    </div> --}}
                    <div class="card">
                        <div class="card-header">
                            <h4>Azienda: {{ $train['azienda'] }}</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span>Stazione di partenza: <strong>{{ $train['stazione_di_partenza'] }}</strong> </span>
                            </li>
                            <li class="list-group-item">
                                <span>Stazione di arrivo: <strong>{{ $train['stazione_di_arrivo'] }}</strong></span>
                            </li>
                            <li class="list-group-item">
                                <span>Orario di partenza: <strong>{{ $train['orario_di_partenza'] }}</strong></span>
                            </li>
                            <li class="list-group-item">
                                <span>Orario di arrivo: <strong>{{ $train['orario_di_arrivo'] }}</strong></span>
                            </li>
                            <li class="list-group-item">
                                <span>Codice treno: <strong>{{ $train['codice_treno'] }}</strong></span>
                            </li>
                            <li class="list-group-item">
                                <span>Numero carrozze: <strong>{{ $train['numero_carrozze'] }}</strong></span>
                            </li>
                            <li class="list-group-item">
                                <span>In orario: <strong>{{ $train['in_orario'] }}</strong></span>
                            </li>
                            <li class="list-group-item">
                                <span>Cancellato: <strong>{{ $train['cancellato'] }}</strong></span>
                            </li>

                        </ul>
                    </div>

                </div>
            @endforeach
        </div>
    </section>
@endsection
