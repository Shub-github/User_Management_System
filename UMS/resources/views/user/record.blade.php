@extends('layouts.app')

@section('content')
@php
$index=1;
@endphp
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
                                                @foreach($records as $recvalue)
                                                    <tr>
                                                    
                                                    <td> <img src="{{asset('uploads/avatar/'.$recvalue->image)}}" width="40px" height="40px" alt="image not showing"></td>
                                                
                                                    <td>{{$recvalue->name}}</td>
                                                    <td>{{$recvalue->email}}</td>
                                                    <td>{{$recvalue->experience}}</td>
                                                    
                                                    <td>
                        
                                                    <form style="display:inline;" action="{{route('delete',$recvalue->id)}}" method="post">
                                                    @csrf()
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                    </form>
                                                    </td>
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