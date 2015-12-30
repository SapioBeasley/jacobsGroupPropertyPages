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
							{!! Form::text('streetAddress', null, ['class' => 'form-control']) !!}
							{!! Form::text('city', null, ['class' => 'form-control']) !!}
							{!! Form::text('state', null, ['class' => 'form-control']) !!}
							{!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
							<div class="dropzone" id="dropzoneFileUpload"></div>
							{!! Form::submit('Update') !!}
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
