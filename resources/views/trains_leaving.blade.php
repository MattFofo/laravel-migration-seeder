@extends('template.base')

@section('page_title', 'Treni in partenza')

@section('content')
    <div class="leaving-trains-container">
        @foreach ($trains as $train)
        <div class="train">
            <h2>{{ $train->azienda }}</h2>
            <h2>{{ $train->{'stazione di partenza'} }}</h2>
            <h2>{{ $train->{'stazione di arrivo'} }}</h2>

            <h2>{{ $train->{'orario di partenza'} }}</h2>

            <h2>{{ $train->{'codice treno'} }}</h2>

            <h2>{{ $train->{'numero di carrozze'} }}</h2>
            <h2>{{ $train->{'in orario'} }}</h2>
            <h2>{{ $train->{'cancellato'} }}</h2>

        </div>
        @endforeach
    </div>

@endsection

