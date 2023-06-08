@extends('layouts.app')

@section('content')
	<div class="page-content pt-5 mt-5">
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 mx-auto text-center mt-5 mt-lg-0">
						<h2 class="fw-bolder mb-5 title">Predict BTS Location</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7 col-md-7">
						<div class="card">
							<div class="card-body">
								@csrf
								<div class="form-group">
									{!! Form::text('longitude', null, [
									    'placeholder' => 'Longitude',
									    'class' => 'form-control' . ($errors->has('longitude') ? ' is-invalid' : null),
									]) !!}
									@error('longitude')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
								<div class="form-group">
									{!! Form::text('latitude', null, [
									    'placeholder' => 'Latitude',
									    'class' => 'form-control' . ($errors->has('latitude') ? ' is-invalid' : null),
									]) !!}
									@error('latitude')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
								<div class="form-group">
									{!! Form::number('height', null, [
									    'placeholder' => 'Height',
									    'class' => 'form-control' . ($errors->has('height') ? ' is-invalid' : null),
									]) !!}
									@error('height')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
								<div class="form-group">
									{!! Form::number('direction', null, [
									    'placeholder' => 'Direction',
									    'min' => 0,
									    'max' => 360,
									    'class' => 'form-control' . ($errors->has('direction') ? ' is-invalid' : null),
									]) !!}
									@error('direction')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
								<div class="form-group">
									{!! Form::select('cell_type', [1 => 'Macro', 2 => 'Indoor'], $request->cell_type ?? null, [
									    'class' => 'form-control' . ($errors->has('cell_type') ? ' is-invalid' : null),
									    'placeholder' => 'Choose Cell Type',
									]) !!}

								</div>
								<button class="btn btn-theme" id="submit" data-text="Submit" onclick="calculate()">
									<span>S</span><span>u</span><span>b</span><span>m</span><span>i</span><span>t</span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="card">
							<div class="card-header">
								<h4>Results</h4>
							</div>
							<div class="card-body">
								<div>
									<label class="fw-bold" for="category">Category : <div class="d-inline-block fw-normal" id="category">
											{{ session('category') ?? '-' }}</div>
									</label>
								</div>
								<div class="mt-3">
									<label class="mb-3 fw-bold" for="map">Map :</label>
									<div id="map-container">
										<div id="map"></div>
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

@push('css')
	<link href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" rel="stylesheet" />
@endpush

@push('js')
	<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
	<script>
		const calculate = () => {
			let long = $('input[name="longitude"]')
			let lat = $('input[name="latitude"]')
			let height = $('input[name="height"]')
			let direction = $('input[name="direction"]')
			let cell_type = $('select[name="cell_type"]')

			long.attr('disabled', true)
			lat.attr('disabled', true)
			height.attr('disabled', true)
			direction.attr('disabled', true)
			cell_type.attr('disabled', true)
			$('#category').html('-')
			$('#submit').attr('disabled', true)


			long.removeClass('is-invalid')
			lat.removeClass('is-invalid')
			height.removeClass('is-invalid')
			direction.removeClass('is-invalid')
			cell_type.removeClass('is-invalid')
			$('.err-msg').remove()
			$('#map').remove()
			axios({
					method: 'POST',
					url: '/bts',
					data: {
						longitude: long.val(),
						latitude: lat.val(),
						height: height.val(),
						direction: direction.val(),
						cell_type: cell_type.val()
					},
					headers: {
						X_CSRF_TOKEN: $('input[name="_token"]').val()
					}
				})
				.then((res) => {
					generateMap(res.data.category, long.val(), lat.val())
				})
				.catch((err) => {
					let errVal = err.response.data.errors

					for (const key in errVal) {
						let elItem = $(`input[name="${key}"]`)
						if (!elItem.length) {
							elItem = $(`select[name="${key}"]`)
						}
						elItem.addClass('is-invalid')
						elItem.after(`<span class="text-danger err-msg">${errVal[key][0]}</span>`)
					};
				})
				.then(() => {
					long.removeAttr('disabled')
					lat.removeAttr('disabled')
					height.removeAttr('disabled')
					direction.removeAttr('disabled')
					cell_type.removeAttr('disabled')
					$('#submit').removeAttr('disabled')
				})
		}
		const generateMap = (category, long, lat) => {
			$('#map-container').append('<div id="map"></div>')
			if (category == 'Green') {
				color = 'green'
			} else if (category == 'Yellow') {
				color = 'yellow'
			} else {
				color = 'red'
			}
			const url =
				`https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-${color}.png`
			// Create a map object and set the center and zoom level
			var map = L.map('map', {
				center: [lat, long],
				zoom: 14,
				dragging: false, // disable dragging
				touchZoom: false, // disable touch zoom
				scrollWheelZoom: false, // disable scroll wheel zoom
				doubleClickZoom: false, // disable double click zoom
				boxZoom: false, // disable box zoom
				zoomControl: false // hide zoom control
			})

			// Add a tile layer to the map
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				maxZoom: 18
			}).addTo(map);

			// Add a marker to the map with a blue icon
			var icon = L.icon({
				iconUrl: url,
				shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
				iconSize: [25, 41],
				iconAnchor: [12, 41],
				popupAnchor: [1, -34],
				shadowSize: [41, 41]
			})
			var marker = L.marker([lat, long], {
				icon: icon
			}).addTo(map);
			$('#category').html(category)
		}
	</script>
@endpush
