<div class="mycontainer container-l ">
    <nav>
        <div class="nav__left">
            <p class="nav__title">Caterina e Matteo</p>
            <img id="burger" src="{{asset('storage/img/icone/menu.svg')}}" alt="Icona menu">
        </div>
        <div id="nav__right">
            <ul>
                <li><a href="{{route('home')}}" class="{{Route::getCurrentRoute()->getName() == 'home' ? 'active' : '' }}"><span>Home</span></a></li>
                <li><a href="{{route('matrimonio')}}" class="{{Route::getCurrentRoute()->getName() == 'matrimonio' ? 'active' : '' }}"><span>Il matrimonio</span></a></li>
                <li><a href="{{route('lista')}}" class="{{Route::getCurrentRoute()->getName() == 'lista' ? 'active' : '' }}"><span>La lista nozze</span></a></li>
                <li><a href="{{route('viaggio')}}" class="{{Route::getCurrentRoute()->getName() == 'viaggio' ? 'active' : '' }}"><span>Il viaggio</span></a></li>
            </ul>
        </div>
    </nav>    
</div>