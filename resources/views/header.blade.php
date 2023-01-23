<script defer type="text/javascript" src="{{asset('js/scroll.js')}}"></script>
<header>
       <nav>
              <span id="stickyBar">
                     <a href="{{ URL('/') }}" class="logo">
                            <img src="{{asset('assets/LOGO_Martl&Co.KG.svg')}}">
                     </a>
              </span>
              <span>
                     <a href="{{ URL('/') }}">Startseite</a>
                     <a href="{{ URL('projektmanagement') }}">Projektmanagement</a>
                     <button id="dialogButton" class="style-button">Kontakt</button>
              <span class="dropdown">
                     <button id="dropdownButton" class="dropdown-button style-button" data-dropdown="unternehmen">Unternehmen</button>
                     <span class="dropdown-content" data-dropdown="unternehmen">
                            <a href="{{ URL('/video') }}">Videos</a>
                            <a href="{{ URL('/newsletter') }}">Newsletter</a>
                            <a href="{{ URL('downloads') }}">Downloads</a>
                            <a href="{{ URL('anfahrtsplan') }}">Anfahrt</a>
                            <a href="{{ URL('impressum') }}">Impressum</a>
                     </span>
              </span>
              @if(isset(Auth::user()['admin']))
                   @if(Auth::user()['admin'])
                        <span class="dropdown">
                             <button id="dropdownButton" class="dropdown-button style-button admin-style" data-dropdown="admin">Admin</button>
                             <span class="dropdown-content" data-dropdown="admin">
                                    <a href="{{ URL('/contactShow') }}">Kontakt</a>
                                    <a href="{{ URL('/newsletter') }}">Newsletter</a>
                                    <a href="{{ route('register-user') }}">Kunden erstellen</a>
                             </span>
                        </span>
                   @endif
               @endif
              @guest
              <a href="{{ route('login') }}"><button class="style-button">Login</button></a>
              @else
              <a href="{{ route('signout')}}"><button class="style-button">Sign Out</button></a>
              @endguest
       </span>
       </nav>
</header>
