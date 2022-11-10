
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ route('index') }}"> DNS HOST</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{ route('index') }}" class="nav-link">Accueil</a></li>
	          <li class="nav-item"><a href="{{ route('domain') }}" class="nav-link">Domain</a></li>
	          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
	          <li class="nav-item cta">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}"><span>Se connecter</span></a>
              </li>
                    @else
            	       <li class="nav-item ">

                            <form id="logout" action="{{ route('logout') }}" method="POST">
                                <a role="button" class="nav-link"
                                onclick="document.getElementById('logout').submit();"><span>Déconnexion</span></a>
                                @csrf
                            </form>
                    @endguest
                 </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->