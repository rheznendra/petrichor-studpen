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
									@csrf
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

@push('js')
	<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
	<script>
		const msgerForm = $(".msger-inputarea");
		const msgerInput = $(".msger-input");
		const msgerChat = $(".msger-chat");

		// Icons made by Freepik from www.flaticon.com
		const BOT_IMG = "{{ asset('assets/images/chatbot_240px.png') }}";
		const PERSON_IMG = "{{ asset('assets/images/person_240px.png') }}";
		const BOT_NAME = "Petribo";
		const PERSON_NAME = "You";

		msgerForm.submit(function(event) {
			event.preventDefault();

			const msgText = msgerInput.val();
			if (!msgText) return;

			appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
			msgerInput.val(null);
			botResponse(msgText);
		});

		function appendMessage(name, img, side, text) {
			//   Simple solution for small apps
			const msgHTML = `<div class="msg ${side}-msg">
					<div class="msg-img" style="background-image: url(${img})"></div>
					<div class="msg-bubble">
						<div class="msg-info">
						<div class="msg-info-name">${name}</div>
						<div class="msg-info-time text-dark">${formatDate(new Date())}</div>
						</div>

						<div class="msg-text">${text}</div>
					</div>
					</div>`;

			msgerChat.append(msgHTML)
			msgerChat.scrollTop(500)
		}

		function botResponse(rawText) {
			axios({
					method: 'POST',
					url: '/faq',
					data: {
						message: rawText
					},
					headers: {
						X_CSRF_TOKEN: $('input[name="_token"]')
					}
				}).then((res) => {
					const msgText = res.data.response;
					appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
				})
				.catch((err) => {
					console.log(err);
				});
		}

		function formatDate(date) {
			const h = "0" + date.getHours();
			const m = "0" + date.getMinutes();

			return `${h.slice(-2)}:${m.slice(-2)}`;
		}
	</script>
@endpush
