@extends('layouts/base')

@section('pageTitle')
    Caterina e Matteo
@endsection

@section('header')
    @include('layouts/header')  
@endsection

@section('main')
    <section>
        <div class="mycontainer container-m">
            <img class="section__fiore" src="{{asset('storage/img/fiori/fiore_viola.svg')}}" alt="Viola">
            <h2 class="section__titolo">E LA LISTA NOZZE?</h2>
            <p>Ve lo ripeteremo più e più volte!<br>Per noi il fatto di poter <strong>condividere con voi</strong>  questo nostro giorno di festa è davvero il dono più gradito. </p>
        </div>
    </section>
    {{-- section realo --}}
    <section class="bg-pri">
        <div class="mycontainer container-m">
            <img class="section__box__icona" src="{{asset('storage/img/icone/regalo.svg')}}" alt="Icona di un regalo">
            <h2 class="section__titolo">il regalo perfetto!</h2>
            <p>L’idea di regalo vi perseguita e non riuscite ad abbandonarla?</p>
            <p class="mt-10">In quel caso potrebbe esserci una soluzione: un aiuto nella realizzazione del nostro <strong>viaggio di nozze</strong>.</p>
        </div>
        <div class="mycontainer container-l">
            <div class="regalo__box">
                <div class="regalo__box__column">
                    <h5>IBAN</h5>
                    <p>IT28 M030 5801 6041 0057 2088 761</p>
                </div>
                <div class="regalo__box__column">
                    <h5>causale</h5>
                    <p>matrimonio Caterina e Matteo</p>
                </div>
                <div class="regalo__box__column">
                    <h5>intestatario</h5>
                    <p>Matteo Furlani</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <img class="section__box__icona" src="{{asset('storage/img/icone/viaggio.svg')}}" alt="Icona di due palloncini">
        <h3 class="h3--secfont"><a href="{{route('viaggio')}}">Il viaggio ></a></h3>
    </section>
    <div class="divider divider__lg"></div>






        

@endsection

