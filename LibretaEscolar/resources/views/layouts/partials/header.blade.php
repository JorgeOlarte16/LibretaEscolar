<header>
    <h1>Libreta escolar lel</h1>
    <nav>
        <ul>

            <li><a href="{{route('anuncios.show')}}" class="{{(request()->routeIs('anuncios.show'))? 'active' : ''}}">Anuncios</a>                  
            </li>
            <li><a href="{{route('actividades.show')}}" class="{{(request()->routeIs('actividades.show'))? 'active' : ''}}">Actividadess</a>                   
            </li>

            

        </ul>
    </nav>
</header>