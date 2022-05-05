@extends('template.base')

@section('page_title', 'Treni in partenza')

@section('content')
    <div class="leaving-trains-container">
        @foreach ($trains as $train)
        <div class="train">
            <h2>{{ $train->azienda }}</h2>
            <h2><small>stazione di partenza:</small> {{ $train->{'stazione di partenza'} }}</h2>
            <h2><small>stazione di arrivo:</small> {{ $train->{'stazione di arrivo'} }}</h2>
            <h2><small>orario di partenza:</small> {{ $train->{'orario di partenza'} }}</h2>
            <h2><small>orario di arrivo:</small> {{ $train->{'orario di arrivo'} }}</h2>
            <h2><small>codice treno:</small> {{ $train->{'codice treno'} }}</h2>
            <h2><small>numero di carrozze:</small> {{ $train->{'numero di carrozze'} }}</h2>
            <h2>{{ $train->{'in orario'} }}</h2>
            <h2>{{ $train->{'cancellato'} }}</h2>

        </div>
        @endforeach
    </div>

@endsection

