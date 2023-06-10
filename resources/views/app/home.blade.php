@extends('layouts.app')

@section('content')
	<section class="fullscreen-banner banner p-0 bg-contain bg-pos-rt" id="home" data-bg-img="assets/images/bg/01.png">
		<div class="spinner-eff">
			<div class="spinner-circle circle-1"></div>
			<div class="spinner-circle circle-2"></div>
		</div>
		<div class="align-center pt-0">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<img class="img-fluid wow jackInTheBox" data-wow-duration="3s"
							src="assets/images/bg/undraw_connected_world_wuay.svg" alt="">
					</div>
					<div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
						<h1 class="mb-4 wow fadeInUp" data-wow-duration="1.5s">Enhancing BTS Efficiency
						</h1>
						<p class="lead mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">Petrichor is
							an application to detect whether a BTS tower is good or bad at a specific location where
							it will be installed.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="page-content">
		<section class="position-relative bg-contain bg-pos-l custom-py-1" id="about"
			data-bg-img="assets/images/bg/02.png">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12 image-column p-0">
						<div class="img-box box-shadow">
							<div class="box-loader">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<img class="img-fluid" src="assets/images/bg/undraw_lost_re_xqjt.svg" alt="">
						</div>
					</div>
					<div class="col-lg-5 ms-auto col-md-12 mt-5 mt-lg-0">
						<div class="section-title mb-4">
							<div class="title-effect">
								<div class="bar bar-top"></div>
								<div class="bar bar-right"></div>
								<div class="bar bar-bottom"></div>
								<div class="bar bar-left"></div>
							</div>
							<h6>About Us</h6>
							<h2>Easily Predict BTS for Future</h2>
						</div>
						<ul class="list-unstyled list-icon mb-4">
							<li class="mb-3">
								<i class="la la-check"></i> 74% Accuracy dataset, compared from 15 model with 6
								inputs.
							</li>
							<li class="mb-3"><i class="la la-check"></i> Based on Padang City, West Sumatera</li>
							<li class="mb-3">
								<i class="la la-check"></i> Machine Learning
							</li>
						</ul>
						<a class="btn btn-circle" data-text="Dataset"
							href="https://drive.google.com/file/d/1AY63ZdcRWiz45XJm_SKu-rljcgHGWJ1-/view?usp=sharing" target="_blank">
							<span>D</span><span>a</span><span>t</span><span>a</span><span>s</span><span>e</span><span>t</span>
						</a>
						<a class="btn btn-theme btn-circle" data-text="Predict" href="bts.html" target="_blank">
							<span>P</span><span>r</span><span>e</span><span>d</span><span>i</span><span>c</span><span>t</span>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="service position-relative bg-effect overflow-hidden" id="service">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-12 order-lg-12 image-column right">
						<div class="blink-img">
							<img class="img-fluid blinkblink" src="assets/images/pattern/04.png" alt="">
						</div>
						<img class="img-fluid z-index-1 w-100" src="assets/images/svg/01.svg" alt="">
					</div>
					<div class="col-lg-6 col-md-12 mt-5 mt-lg-0 order-lg-1">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="featured-item style-3">
									<div class="featured-icon">
										<i class="la la-map-marked"></i>
									</div>
									<div class="featured-title">
										<h5>Location</h5>
									</div>
									<div class="featured-desc">
										<p>Based on Padang City, North Sumatera</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mt-4">
								<div class="featured-item style-3">
									<div class="featured-icon">
										<i class="la la-bullseye"></i>
									</div>
									<div class="featured-title">
										<h5>Accuracy</h5>
									</div>
									<div class="featured-desc">
										<p>74% Dataset accuracy, compared with 15 model and 6 inputs</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mt-3 mt-md-0">
								<div class="featured-item style-3">
									<div class="featured-icon">
										<i class="la la-code"></i>
									</div>
									<div class="featured-title">
										<h5>Code</h5>
									</div>
									<div class="featured-desc">
										<p>Using Python as the Machine Learning program base code and superior
											library as PyCaret.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mt-4">
								<div class="featured-item style-3">
									<div class="featured-icon">
										<i class="la la-headphones"></i>
									</div>
									<div class="featured-title">
										<h5>Helping Support</h5>
									</div>
									<div class="featured-desc">
										<p>Fast response chatbot that will help answering your question.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-effect right position-relative overflow-hidden" id="team">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="section-title">
							<div class="title-effect">
								<div class="bar bar-top"></div>
								<div class="bar bar-right"></div>
								<div class="bar bar-bottom"></div>
								<div class="bar bar-left"></div>
							</div>
							<h6>Team</h6>
							<h2 class="title">Meet Our Team</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid p-0">
				<div class="row">
					<div class="col-xl-10 col-lg-11 col-md-10 ms-auto">
						<div class="owl-carousel" data-dots="false" data-items="3" data-md-items="2" data-sm-items="1"
							data-autoplay="true">
							<div class="item">
								<div class="team-member style-1">
									<div class="team-images">
										<img class="img-fluid rounded box-shadow" src="assets/images/team/01.jpg" alt="">
										<div class="social-icons social-colored circle team-social-icon">
											<ul>
												<li class="social-github">
													<a href="https://github.com/rheznendra" target="blank">
														<i class="fab fa-github"></i>
													</a>
												</li>
												<li class="social-linkedin">
													<a href="https://www.linkedin.com/in/rheznendra/" target="blank">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="team-description">
										<span>Leader & Machine Learning Developer</span>
										<h5>Rheznendra Praditya L.P</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="team-member style-1">
									<div class="team-images">
										<img class="img-fluid rounded box-shadow" src="assets/images/team/03.jpg" alt="">
									</div>
									<div class="team-description">
										<span>Chatbot Developer</span>
										<h5>Facrhozi Haykal Nugraha</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="team-member style-1">
									<div class="team-images">
										<img class="img-fluid rounded box-shadow" src="assets/images/team/02.jpg" alt="">
									</div>
									<div class="team-description">
										<span>Member</span>
										<h5>Siti Nur Anisa</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="team-member style-1">
									<div class="team-images">
										<img class="img-fluid rounded box-shadow" src="assets/images/team/04.jpg" alt="">
									</div>
									<div class="team-description">
										<span>Member</span>
										<h5>Lefenia Indriani</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="team-member style-1">
									<div class="team-images">
										<img class="img-fluid rounded box-shadow" src="assets/images/team/05.jpg" alt="">
									</div>
									<div class="team-description">
										<span>Member</span>
										<h5>Intelekgencia Gulo</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
