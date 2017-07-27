<nav>
  <h1>The French Mangathèque</h1>
  <ul>
   <li><a href="/">Accueil</a></li>
   <li><a href="/list">Liste des Mangas</a></li>
  @if (Auth::guest())
   <li><a href="{{ route('login') }}">Se connecter</a></li>
   <li><a href="{{ route('register') }}">S'enregistrer</a></li>
  @else
  @if (!Auth::guest())
   <li><a href="/addManga">Ajouter un Manga</a></li>
  @endif
  @if (!Auth::guest())
   <li><a href="/add/author">Ajouter un Mangaka</a></li>
  @endif

  <li>
     <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                 Déconnexion
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         {{ csrf_field() }}
     </form>
  </li>
  @endif
  </ul>
</nav>
