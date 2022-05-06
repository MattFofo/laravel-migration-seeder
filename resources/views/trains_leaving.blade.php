@extends('template.base')

@section('page_title', 'Treni in partenza')

@section('content')
    <div class="leaving-trains-container">
        @foreach ($trains as $train)
        @php
            //dd($train);
        @endphp
        <div class="train">
            <h2>{{ $train->azienda }}</h2>
            <h2><small>stazione di partenza:</small> {{ $train->stazione_di_partenza }}</h2>
            <h2><small>stazione di arrivo:</small> {{ $train->stazione_di_arrivo }}</h2>
            <h2><small>orario di partenza:</small> {{ $train->orario_di_partenza }}</h2>
            <h2><small>orario di arrivo:</small> {{ $train->orario_di_arrivo }}</h2>
            <h2><small>codice treno:</small> {{ $train->codice_treno }}</h2>
            <h2><small>numero di carrozze:</small> {{ $train->numero_di_carrozze }}</h2>
            <h2>{{ $train->in_orario }}</h2>
            <h2>{{ $train->cancellato }}</h2>

        </div>
        @endforeach
    </div>
    {{ $trains->links() }}
@endsection

