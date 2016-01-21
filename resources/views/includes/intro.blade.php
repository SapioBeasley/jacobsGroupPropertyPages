<div class="container">
	<div id="intro_content" class="row">

		<!-- INTRO TEXT -->
		<div class="col-md-7 intro_text">

			<h2>{{$property['streetAddress']}}<br>
			<span>{{$property['city']}} {{$property['state']}}</span> {{$property['zipcode']}}</h2>

			<p> {{$property['property_description']}} </p>

			<!-- INTRO BUTTONS -->
			<div class="intro_button">
				<a class="btn btn-tra" href="#details">Learn more</a>
			</div>

		</div>  <!-- END TEXT -->

		<!-- INTRO REGISTER FORM -->
		<div id="intro_form" class="col-md-5 form_register text-center">

			<!-- Register Form -->
			{!! Form::open(['route' => ['inquire', $property['id']], 'name' => 'registerform', 'class' => 'row']) !!}

				@if (Session::has('success_message'))
					{{Session::get('success_message')}}
				@endif

				<h4>Request More information!</h4>

				<div class="col-md-12">
					{!! Form::text( 'first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your name']) !!}
				</div>

				<div class="col-md-12">
					{!! Form::text( 'email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email']) !!}
				</div>

				<div class="col-md-12">
					{!! Form::text( 'phone', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
				</div>

				<!-- Submit Button -->
				<div id="form_register_btn" class="text-center">
					{!! Form::submit('Inquire Now', ['class' => 'btn']) !!}
				</div>
			{!! Form::close() !!}

		</div>    <!-- END INTRO REGISTER FORM -->

	</div>   <!-- End Intro Content -->
</div>
