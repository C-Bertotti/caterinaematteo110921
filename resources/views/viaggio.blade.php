@extends('layouts/base')

@section('pageTitle')
    Caterina e Matteo
@endsection

@section('header')
    <div class="mycontainer container-l ">
        <nav>
            <div class="nav__left">
                <p class="nav__title">Caterina e Matteo</p>
                <img id="burger" src="{{asset('storage/img/icone/menu.svg')}}" alt="Icona menu">
            </div>
            <div id="nav__right">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </nav>    
    </div>
@endsection

@section('main')

    @include('layouts/hero/heroBgFlower/heroViaggio')

    <section>
        <div class="mycontainer container-m">
            <img class="section__fiore" src="{{asset('storage/img/fiori/papavero.svg')}}" alt="Papavero">
            <h2 class="section__titolo main__title">la nostra luna di <br class="d-none-xs">“m...armellata”!</h2>
            <h5>(100% vegan)</h5>
            <p class="sec__box">Dopo aver viaggiato in lungo in largo e nelle più disparate modalità, ci siamo resi conto di aver dimenticato l’Italia dalla Pianura Padana in giù.</p>
            <p><strong>ROMA</strong> e <strong>NAPOLI!</strong><p>
                <p class="mt-10">
                Ne abbiamo tanto letto e sentito parlare ed ora non vediamo l’ora di farle diventare parte delle nostre avventure. <br class="d-none-xs"> 
                Il tutto come piace a noi… </p>
                <p class="mt-10"><strong>ZAINO IN SPALLA, SI PARTE!</strong> </p>
            <img class="section__cuore" src="{{asset('storage/img/icone/cuore.svg')}}" alt="Icona cuore">
        </div>
    </section>

    

@endsection