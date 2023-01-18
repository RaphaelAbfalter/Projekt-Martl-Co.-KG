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
                   @if(Auth::user()['admin'])
                        <span class="dropdown">
                             <button id="dropdownButton" class="dropdown-button nav-button" data-dropdown="dropdown">Admin</button>
                             <span class="dropdown-content" data-dropdown="dropdown">
                                    <a href="{{ URL('/contactShow') }}">Kontakt</a>
                                    <a href="{{ URL('/newsletter') }}">Newsletter</a>
                                    <a href="{{ URL('downloads') }}">Kunden erstellen</a>
                             </span>
                        </span>
                   @endif
               @endif

              <span class="dropdown">
                     <button id="dropdownButton" class="dropdown-button nav-button" data-dropdown="dropdown">Unternehmen</button>
                     <span class="dropdown-content" data-dropdown="dropdown">
                            <a href="{{ URL('/video') }}">Videos</a>
                            <a href="{{ URL('/newsletter') }}">Newsletter</a>
                            <a href="{{ URL('downloads') }}">Downloads</a>
                            <a href="{{ URL('anfahrtsplan') }}">Anfahrt</a>
                            <a href="{{ URL('impressum') }}">Impressum</a>
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
