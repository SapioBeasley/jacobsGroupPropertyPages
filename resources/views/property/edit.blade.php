@extends('layouts.app')

@section('content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

				@if (Session::has('success_message'))
					{{Session::get('success_message')}}
				@endif

				<div class="panel panel-default">
					<div class="panel-heading">Edit Property</div>

					<div class="panel-body">
						{!! Form::model($property, ['route' => ['property.update', $property['id']], 'method' => 'PUT']) !!}
							{!! Form::label('streetAddress', 'Address') !!}
							{!! Form::text('streetAddress', null, ['class' => 'form-control']) !!}
							{!! Form::label('city', 'City') !!}
							{!! Form::text('city', null, ['class' => 'form-control']) !!}
							{!! Form::label('state', 'State') !!}
							{!! Form::text('state', null, ['class' => 'form-control']) !!}
							{!! Form::label('zipcode', 'Zipcode') !!}
							{!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
							{!! Form::label('property_description', 'Property Description') !!}
							{!! Form::textarea('property_description', null, ['class' => 'form-control']) !!}
							{!! Form::label('type', 'Housing Type') !!}
							{!! Form::text('type', null, ['class' => 'form-control']) !!}
							{!! Form::label('beds', 'Beds') !!}
							{!! Form::text('beds', null, ['class' => 'form-control']) !!}
							{!! Form::label('baths', 'Baths') !!}
							{!! Form::text('baths', null, ['class' => 'form-control']) !!}
							{!! Form::label('sqft', 'SQFT') !!}
							{!! Form::text('sqft', null, ['class' => 'form-control']) !!}
							{!! Form::label('bultIn', 'Built In') !!}
							{!! Form::text('bultIn', null, ['class' => 'form-control']) !!}
							{!! Form::label('hoa', 'HOA') !!}
							{!! Form::text('hoa', null, ['class' => 'form-control']) !!}
							<div class="dropzone" id="dropzoneFileUpload"></div>
							{!! Form::submit('Update') !!}
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
