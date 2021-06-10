@extends('layouts.app')
@section('content')

<div class="container">
       
    <div class="card card-default">
       
        <div class="card-body">
            
            <form class="px-4 py-3">
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

                            <div class="form-group row">
                                    <div >
                                            <label for="Date of joining">Date of Joining</label>
                                            <section class="col-sm-10 ">
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' class="form-control" />
                                                        <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </section>
                                    </div>
                            
                                    <div>
                                            <label for="Date of leaving ">Date of leaving</label>
                                            <section class="col-sm-10">
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker2'>
                                                        <input type='text' class="form-control" />
                                                        <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </section>
                                    </div>  
                            </div>

                            <div class="form-group col-sm-12">
                                    <div >
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">&nbsp&nbsp&nbsp&nbsp Still Working</label>
                                                    </div>                                   
                                    </div>
        
                            <div>
                                    <button onclick="calculate()" type="submit" class="btn btn-primary">Submit</button>
                            </div>
            </form>
            
        </div>

    </div>

</div>
@endsection


@section('scripts')

        <script>
                const calculate=()=>{
                    let join=document.getElementById("datetimepicker1").value;
                    let leave=document.getElementById("datetimepicker2").value;

                    let difference=join-leave;

                    console.log(difference);
                }
        </script>

@endsection

