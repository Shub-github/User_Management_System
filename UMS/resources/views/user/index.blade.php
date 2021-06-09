@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Record  <a href="{{route('User_create')}}"><button type="button" class="btn btn-success float-right">Add Record</button></a></div>
                                        <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">Avtar</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Experience</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($users as $user)
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>##</td>
                                                    <td>
                                                            <a href="##"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    </td>
                                                    </tr>
                                                @endforeach
                                        </tbody>
                                        </table>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection