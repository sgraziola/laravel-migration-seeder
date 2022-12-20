@extends('layouts.app')

@section('content')


<div class="container py-5">
    <h1>TRENI</h1>
    <div class="row row-cols-1 row-cols-sm-3 g-4">

        @forelse($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3>Azienda: {{$train->agency}}</h3>
                    <p>Stazione di partenza: {{$train->departure_station}} Station</p>
                    <p>Stazione di arrivo: {{$train->arrival_station}} Station</p>
                    <p>Orario di partenza: {{$train->departure_time}}</p>
                    <p>Orario di arrivo: {{$train->arrival_time}}</p>
                    <p class="text-uppercase">PNR: {{$train->train_codex}}</p>
                    <p>Carrozza: {{$train->carriage}}</p>
                    @if($train->is_delayed)
                    <p>In arrivo</p>
                    @if($train->is_in_time)
                    <p>In Orario</p>
                    @else
                    <p>In Ritardo</p>
                    @endif
                    @else
                    <p>Cancellato</p>
                    @endif
                </div>
            </div>
        </div>

        @empty

        <div class="col-12">
            <p>Sorry No trains yet!</p>
        </div>
        @endforelse


    </div>
    @endsection