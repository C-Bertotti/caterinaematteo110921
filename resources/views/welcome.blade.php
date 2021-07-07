@extends('layouts/base')

@section('pageTitle')
    Caterina e Matteo
@endsection


@section('main')

    @include('layouts/hero/heroBgFlower/heroHome')
    <section>
        <div class="mycontainer container-m">
            <img class="section__fiore" src="{{asset('storage/img/fiori/papavero.svg')}}" alt="Papavero">
            <h2 class="section__titolo">Grazie di cuore!</h2>
            <p>Per noi é una vera <strong>gioia</strong> sapere che la nostra grandissima <strong>famiglia</strong>  ci accompagna in questa meravigliosa <strong>tappa</strong> del nostro cammino.</p>
            <img class="section__cuore" src="{{asset('storage/img/icone/cuore.svg')}}" alt="Icona cuore">
        </div>
    </section>
    <section class="bg-pri">

    </section>

    

@endsection