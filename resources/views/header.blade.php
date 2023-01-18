<header>
       <nav>
       <a href="{{ URL('/') }}">
              <img src="./assets/LOGO_Martl&Co.KG.svg">
       </a>
       <span>
              <a href="{{ URL('/') }}">Startseite</a>
              <a href="{{ URL('projektmanagement') }}">Projektmanagement</a>
              <a href="{{ URL('contact') }}">Kontakt</a>

              @if(isset(Auth::user()['admin']))
                <a href="">Admin</a>
               @endif

              <span class="dropdown">
                     <button id="dropdownButton" class="dropdown-button nav-button" data-dropdown="dropdown">Unternehmen</button>
                     <span class="dropdown-content" data-dropdown="dropdown">
                            <a href="/video">Videos</a>
                            <a href="/newsletter">Newsletter</a>
                            <a href="/downloads">Downloads</a>
                            <a href="/anfahrtsplan">Anfahrt</a>
                            <a href="/impressum">Impressum</a>
                     </span>
              </span>
              @guest
              <a href="{{ route('register-user') }}" class="nav-button">Registrieren</a>
              <a href="{{ route('login') }}" class="nav-button">Login</a>
              @else
              <a href="{{ route('signout')}}" class="nav-button">Sign Out</a>
              @endguest
       </span>
       </nav>
</header>
