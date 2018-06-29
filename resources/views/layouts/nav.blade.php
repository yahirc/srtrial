<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="#" title="Valencia Sartoriale">
		<img style="max-width:100px; margin-top: -1px;" src="{{ asset('img/logo-white.png') }}">
    </a>	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{ url('/clientes') }}">Clientes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('/ordenes') }}">Ordenes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Informes</a>
			</li>
		</ul>
        @if (Auth::check())
		<form class="form-inline mt-2 mt-md-0">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{ Auth::user()->name }}, {{ Auth::user()->sucursal }}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Usuario</a>
					<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ url('/logout') }}">Salir</a>
					</div>
				</li>
		  	</ul>
		</form>
        @endif
	</div>
</nav>
