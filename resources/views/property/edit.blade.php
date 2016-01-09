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

			@foreach ($images as $image)
				<div class="col-md-4">
					<div class="card">
						<div class="card-image">
							<img class="img-responsive" src="{{asset($image['url'])}}">
						</div><!-- card image -->

						<!-- card content -->
						<div class="card-action">
							{!! Form::open(['route' => ['image.destroy', $image['id']], 'method' => 'DELETE']) !!}
								{!! Form::submit('Remove') !!}
							{!! Form::close() !!}

							{!! Form::open(['route' => ['makeImageFeatured', $image['id']], 'method' => 'PUT']) !!}
								{!! Form::submit('Make Featured') !!}
							{!! Form::close() !!}
						</div><!-- card actions -->
					</div>
				</div>
			@endforeach

			{{-- Card CSS (MOVE IT) --}}
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family=Roboto:400,300);
				@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);

				.card{
				    font-family: 'Roboto', sans-serif;
				    margin-top: 10px;
				    position: relative;
				    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
				  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
				  box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
				}

				.card .card-content {
				    padding: 10px;
				}

				.card .card-content .card-title, .card-reveal .card-title{
				    font-size: 24px;
				    font-weight: 200;
				}

				.card .card-action{
				    padding: 20px;
				    border-top: 1px solid rgba(160, 160, 160, 0.2);
				}
				.card .card-action a{
				    font-size: 15px;
				    color: #ffab40;
				    text-transform:uppercase;
				    margin-right: 20px;
				    -webkit-transition: color 0.3s ease;
				    -moz-transition: color 0.3s ease;
				    -o-transition: color 0.3s ease;
				    -ms-transition: color 0.3s ease;
				    transition: color 0.3s ease;
				}
				.card .card-action a:hover{
				    color:#ffd8a6;
				    text-decoration:none;
				}

				.card .card-reveal{
				    padding: 20px;
				    position: absolute;
				    background-color: #FFF;
				    width: 100%;
				    overflow-y: auto;
				    /*top: 0;*/
				    left:0;
				    bottom:0;
				    height: 100%;
				    z-index: 1;
				    display: none;
				}

				.card .card-reveal p{
				    color: rgba(0, 0, 0, 0.71);
				    margin:20px ;
				}

				.btn-custom{
				    background-color: transparent;
				    font-size:18px;
				}

			</style>
		</div>
	</div>
@endsection
