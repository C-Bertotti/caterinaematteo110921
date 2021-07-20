@extends('layouts/base')

@section('pageTitle')
    Caterina e Matteo
@endsection

@section('links')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
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

    <section class="bg-pri">
        <div class="mycontainer container-l">
            <img class="section__fiore" src="{{asset('storage/img/fiori/papavero.svg')}}" alt="Papavero">
            <h2 class="section__titolo">MA QUANTO MANCA?</h2>
            <div class="section__box date__box">
                <div class="date__wrapper">
                    <div class="date__left">
                        <p>giorni</p>
                        <p class="date" id="date-d">0</p>
                    </div>
                    <div class="date__right">
                        <div>
                            <p>ore</p>
                            <p class="date" id="date-h">0</p>
                        </div>
                        <div>
                            <p>minuti</p>
                            <p class="date" id="date-m">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="divider divider__small"></div>
    <section class="slider slider__matrimonio">
        <div class="mycontainer container-m">
            <div class="slider__wrapper">
                <!-- Slider ritrovo -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide cover">
                            <div>
                                <img class="section__box__icona" src="{{asset('storage/img/icone/ritrovo.svg')}}" alt="Icona di due palloncini">
                                <h3>IL RITROVO</h3>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="{{asset('storage/img/icone/sposa_or.svg')}}" alt="Icona della sposa">
                                <h4>Per la sposa</h4>
                                <p>ore 9:00<br>Via Trento, 9 - Vigolo Vattaro</p>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="{{asset('storage/img/icone/sposo_or.svg')}}" alt="Icona dello sposo">
                                <h4>Per lo sposo</h4>
                                <p>ore 9:00<br>Via al Dos del Pin, 18 - Valsorda</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <!-- Slider cerimonia -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide cover">
                            <div>
                                <img class="section__box__icona" src="{{asset('storage/img/icone/chiesa.svg')}}" alt="Icona di una chiesa">
                                <h3>La cerimonia</h3>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <h4>Sabato 11 settembre 2021</h4>
                                <p> alle ore 10:00</p>
                                <p>a Bosentino presso il<br><strong>SANTUARIO <br class="d-none-xs"> MADONNA DEL FELES</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide bg-pri slider__img__wrapper chiesa">
                        </div>
                    </div>
                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <!-- Slider ristorante -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide cover">
                            <div>
                                <img class="section__box__icona" src="{{asset('storage/img/icone/ristorante.svg')}}" alt="Icona di un piatto con posate">
                                <h3>IL RISTORANTE</h3>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <h4>RIFUGIO MARANZA</h4>
                                <p>Siete pronti a mettere alla prova le vostre papille gustative?</p>
                            </div>
                        </div>
                        <div class="swiper-slide bg-pri slider__img__wrapper ristorante">
                        </div>
                    </div>
                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="">
            <img class="section__fiore" src="{{asset('storage/img/fiori/fiore_viola.svg')}}" alt="Viola">
            <h2 class="section__titolo">i luoghi</h2>
            <div id='map'></div>
        </div>
    </section>




        

@endsection

@section('script')
    <script src="{{ asset('js/matrimonio.js') }}"></script> 
@endsection