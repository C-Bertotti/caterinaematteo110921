@extends('layouts/base')

@section('pageTitle')
    Caterina e Matteo
@endsection


@section('main')

    @include('layouts/hero/heroBgFlower/heroHome')
    <section>
        <div class="mycontainer container-m">
            <img class="section__fiore" src="img/fiori/papavero.svg" alt="Papavero">
            <h2 class="section__titolo">Grazie di cuore!</h2>
            <p>Per noi é una vera <strong>gioia</strong> sapere che la nostra grandissima <strong>famiglia</strong>  ci accompagna in questa meravigliosa <strong>tappa</strong> del nostro cammino.</p>
            <img class="section__cuore" src="img/icone/cuore.svg" alt="Icona cuore">
        </div>
    </section>
    <section class="bg-pri">
        <div class="mycontainer container-l">
            <img class="section__fiore" src="img/fiori/fiore_viola.svg" alt="Viola">
            <h2 class="section__titolo">Il nostro giorno</h2>
            <div class="section__box__wrapper">
                <a href="{{route('matrimonio')}}" class="section__box">
                    <img class="section__box__icona" src="img/icone/anelli.svg" alt="Icona di due anelli">
                    <h3>Il matrimonio</h3>
                    <p>La cerimonia<br>e il ricevimento.</p>
                </a>
                <a href="{{route('lista')}}" class="section__box">
                    <img class="section__box__icona" src="img/icone/lista-nozze.svg" alt="Icona di una lettera">
                    <h3>La lista nozze</h3>
                    <p>“‘Sa ghe regalan?<br>I g’ha za tut!”</p>                    
                </a>
                <a href="{{route('viaggio')}}" class="section__box">
                    <img class="section__box__icona" src="img/icone/viaggio.svg" alt="Icona di una macchina fotografica">
                    <h3>Il viaggio</h3>
                    <p>Dove inizieremo<br>la nostra nuova avventura?</p>
                </a>
            </div>
        </div>
    </section>
    

    

@endsection