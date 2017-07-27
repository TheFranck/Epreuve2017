<nav>
  <h1>The French Mangathèque</h1>
  <ul>
   <li><a href="/accueil">Accueil</a></li>
   <li><a href="/list">Liste des Mangas</a></li>
  @if (Auth::guest())
   <li><a href="{{ route('login') }}">Login</a></li>
   <li><a href="{{ route('register') }}">Register</a></li>
  @else
  @if (!Auth::guest())
   <li><a href="/add/author">Ajouter un auteur</a></li>
  @endif
  @if (!Auth::guest())
   <li><a href="/addManga">Ajouter un Manga</a></li>
  @endif
  <li>
     <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                 Logout
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         {{ csrf_field() }}
     </form>
  </li>
  @endif
  </ul>
</nav>
