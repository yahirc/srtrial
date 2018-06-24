<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="#">Valencia</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
		</ul>
        @if (Auth::check())
		<form class="form-inline mt-2 mt-md-0">
			<li class="nav-item">
				<a class="nav-link" href="#">{{ Auth::user()->name }}, {{ Auth::user()->sucursal }}</a>
			</li>
		</form>
        @endif
	</div>
</nav>
