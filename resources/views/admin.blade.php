@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if (Session::has('success_message'))
                    {{Session::get('success_message')}}
                @endif

                <a class="btn" href="{{route('property.create')}}">Add New Property</a>

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
                                        <a class='btn btn-info btn-xs' href="{{route('property.edit', $property['id'])}}" style="    float: right;margin-left: 10px;"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        {!! Form::open(['route' => ['property.destroy', $property['id']], 'style' => 'float: right;width: 50px', 'method' => 'DELETE']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
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
