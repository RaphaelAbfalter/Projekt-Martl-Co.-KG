<header>
       <nav>
       <a href="">
              <img src="./assets/LOGO_Martl&Co.KG.svg">
       </a>
       <span>
              <a href="/">Startseite</a>
              <a href="/projektmanagement">Projektmanagement</a>
              <a href="/contact">Kontakt</a>
              <span class="dropdown">
                     <button id="dropdownButton" class="dropdown-button nav-button" data-dropdown="dropdown">Unternehmen</button>
                     <span class="dropdown-content" data-dropdown="dropdown">
                            <a href="/videos">Videos</a>
                            <a href="/newsletter">Newsletter</a>
                            <a href="/anfahrtsplan">Anfahrt</a>
                            <a href="/impressum">Impressum</a>
                     </span>
              </span>
              @guest
              <a href="/registration" class="nav-button">Registrieren</a>
              <a href="/login" class="nav-button">Login</a>
              @else
              <a href="{{ route('signout')}}" class="nav-button">Sign Out</a>
              @endguest
       </span>
       </nav>
</header>