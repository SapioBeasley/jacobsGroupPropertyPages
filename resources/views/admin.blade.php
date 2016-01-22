@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if (Session::has('success_message'))
                    {{Session::get('success_message')}}
                @endif

                <a class="btn btn-primary" style="margin-bottom: 25px" href="{{route('property.create')}}">Add New Property</a>

                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <table class="table table-striped custab">
                            <thead>
                                <tr>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            @foreach ($properties as $property)
                                <tr>
                                    <td><a href="{{route('property.show', $property['slug'])}}">{{$property['streetAddress']}}</td>
                                    <td class="text-center">
                                        <div class="col-md-6">
                                            <a class='btn btn-primary btn-xs' href="{{route('property.edit', $property['id'])}}" style="width:100%"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        </div>

                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ['property.destroy', $property['id']], 'style' => 'float: right;width: 100%', 'method' => 'DELETE']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'style' => 'width:100%']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
