@extends('layouts/base')

@section('pageTitle')
    Caterina e Matteo
    
@endsection

@section('main')

    @extends('layouts/hero/heroBgFlower')

    @section('contenutoCerchio')
        <div class="cerchio__caption__wrapper">
            <img class="icona" src="{{asset('storage/img/icone/uccellini.svg')}}" alt="Icona di due uccellini che si danno un bacino">
            <h1>Caterina<br>Matteo</h1>
            <p>11 settembre 2021</p>    
        </div>
    @endsection
    
@endsection