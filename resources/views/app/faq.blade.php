@extends('layouts.app')

@section('content')
	<div class="page-content pt-5 mt-5">
		<section class="z-index-1">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-lg-8 col-md-12">
						<div class="section-title">
							<h2 class="title">Frequently asked questions</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="chatbot-body">
							<div class="msger">
								<header class="msger-header">
									<div class="msger-header-title text-light fw-bold">
										Petribo
									</div>
								</header>

								<main class="msger-chat">
									<div class="msg left-msg">
										<div class="msg-img"></div>
										<div class="msg-bubble">
											<div class="msg-info">
												<div class="msg-info-name">Petribo</div>
												<div class="now">Now</div>
											</div>
											<div class="msg-text">
												👋 Hello, how can i help you?
											</div>
										</div>
									</div>
								</main>

								<form class="msger-inputarea">
									<input class="msger-input" id="textInput" type="text" placeholder="Input your question...">
									<button class="msger-send-btn" type="submit">Send</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
@endsection
