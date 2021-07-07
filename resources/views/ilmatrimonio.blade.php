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

    @include('layouts/hero/heroBgFlower/heroHome')

    

@endsection