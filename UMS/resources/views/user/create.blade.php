@extends('layouts.app')
@section('content')

<div class="container">
        <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
             <label for="Name">Full Name</label>
             <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
                        <label for="featured">Featured Image</label>
                        <input type="file" name="featured" class="form-control">
        </div>
        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</div>

@endsection