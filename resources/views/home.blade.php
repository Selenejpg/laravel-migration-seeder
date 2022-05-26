@extends('layouts.layout')

@section('content')

<div class="d-flex mt-3 justify-content-center row row-cols-4 g-3">
    
    @forelse ($trains as $key => $train)
    
    <div class="">
        <div class="col p-3 card" style="width: 18rem;">
            <div class="card-body">

                <h4 class="card-title text-center mb-4">{{$train -> azienda}}</h4>
                <p class="card-text">Data viaggio: {{$train -> data_viaggio}}</p>
                <p class="card-text">Codice treno: {{$train -> codice_treno}}</p>
                <p class="card-text">In partenza da: {{$train -> stazione_partenza}}</p>
                <p class="card-text">Diretto a: {{$train -> stazione_arrivo}}</p>
                <p class="card-text">Orario partenza: {{$train -> orario_partenza}}</p>
                <p class="card-text">Orario arrivo: {{$train -> orario_arrivo}}</p>
                <p class="card-text">Carrozza: {{$train -> n_carrozze}}</p>
                <div class="d-flex justify-content-center">
                  <a href="#" class="btn mt-2 btn-primary">Prenota treno</a>  
                </div>
                
            </div>
        </div>
    </div>

    @empty
        
        <h2>Non ci sono treni da mostrare</h2>

    @endforelse

</div>

@endsection