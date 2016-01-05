<div class="container">

	<!-- SECTION TITLE -->
	<div class="row">
		<div class="col-sm-12 titlebar">

			<h3>Property Details</h3>
			<p>{{$property['streetAddress']}} {{$property['city']}} {{$property['state']}} {{$property['zipcode']}}</p>

		</div>
	</div>

	<div class="row price-row">
		<div id="price_1" class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
			<div class="pricing-table">

				<div style="color: #333;font-size: 15px;font-weight: 300;text-transform: uppercase;padding: 20px 40px;">
					{{$property['property_description']}}
				</div>

				<!-- Plan Features  -->
				<ul class="features">

					@if (!empty($property['type']))
					<li>{{$property['type']}}</li>
					@endif

					@if (!empty($property['beds']))
					<li>Beds: <strong>{{$property['beds']}}</strong></li>
					@endif

					@if (!empty($property['baths']))
					<li>Baths: <strong>{{$property['baths']}}</strong></li>
					@endif

					@if (!empty($property['sqft']))
					<li>SQFT: <strong>{{$property['sqft']}}</strong></li>
					@endif

					@if (!empty($property['bultIn']))
					<li>Built in: <strong>{{$property['bultIn']}}</strong></li>
					@endif

					@if (!empty($property['hoa']))
					<li>HOA: <strong>{{$property['hoa']}}</strong></li>
					@endif

				</ul>

				<div style="color: #333;font-size: 15px;font-weight: 300;text-transform: uppercase;padding: 0px 40px;">
					<a href="#" class="btn">Inquire Now</a>
				</div>

			</div>
		</div>  <!-- END PRICE PLAN BASIC -->
	</div>  <!-- END PRICING TABLES HOLDER -->

</div>
