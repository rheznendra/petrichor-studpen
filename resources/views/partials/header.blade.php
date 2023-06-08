<header class="header header-1" id="site-header">
	<div class="container-fluid">
		<div class="box-shadow" id="header-wrap">
			<div class="row">
				<div class="col-lg-12">
					<!-- Navbar -->
					<nav class="navbar navbar-expand-lg">
						<a class="navbar-brand logo" href="{{ route('home') }}">
							<h2 class="fw-bolder">Petrichor</h2>
						</a>
						<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" type="button"
							aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
							<span></span>
							<span></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<!-- Left nav -->
							<ul class="nav navbar-nav mx-auto">
								<!-- Home -->
								<li class="nav-item"> <a class="nav-link active" href="{{ route('home') }}#home">Home</a>
								</li>
								<li class="nav-item"> <a class="nav-link" href="{{ route('home') }}#about">About</a>
								</li>
								<li class="nav-item"> <a class="nav-link" href="{{ route('home') }}#service">Service</a>
								</li>
								<li class="nav-item"> <a class="nav-link" href="{{ route('home') }}#team">Team</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">More</a>
									<ul class="dropdown-menu">
										<li><a href="{{ route('faq') }}">FAQ</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						@if (Request::route()->getName() != 'bts')
							<a class="btn btn-theme btn-sm" data-text="Predict" href="{{ route('bts') }}">
								<span>P</span><span>r</span><span>e</span><span>d</span><span>i</span><span>c</span><span>t</span>
							</a>
						@endif
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
