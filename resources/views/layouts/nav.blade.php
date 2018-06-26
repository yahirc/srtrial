<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="#">Valencia</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{ url('/clientes') }}">Clientes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Ordenes</a>
			</li>
		</ul>
        @if (Auth::check())
		<form class="form-inline mt-2 mt-md-0">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/logout') }}">{{ Auth::user()->name }}, {{ Auth::user()->sucursal }}</a>
				</li>
			</ul>
		</form>
        @endif
	</div>
</nav>
