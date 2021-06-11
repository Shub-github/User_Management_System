@extends('layouts.app')
@section('content')

<div class="container">

    <div class="card card-default">

        <div class="card-body">

            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                @csrf()
                <form class="px-4 py-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="Name">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="featured">Featured Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>



                    <div class="checkbox-card">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="checkme"><b>Currently Working</b>
                            </label>
                        </div>

                        <div class="form-group ">
                            <label for="start">Start date:</label>
                            <input type="date" class="form-control" id="start" name="start">
                        </div>

                        <!-- end hide -->
                        <div class="passport-box">

                         <div class="form-group ">
                         <label for="start">End date:</label>
                            <input type="date" class="form-control" id="end" name="end">
                        </div>

                        </div>
                    </div>
        


        <div class="form-group">
            <button  type="submit" class="btn btn-primary">Submit</button>
            
        </div>
            </form>
        </div>
    </div>
</div>
</form>

</div>

</div>

</div>
@endsection


@section('scripts')

 


<script>
    $(function() {
        $(".checkme").click(function(event) {
            var x = $(this).is(':checked');
            if (x == true) {
                $(this).parents(".checkbox-card").find('.passport-box').hide();

            } else {
                $(this).parents(".checkbox-card").find('.passport-box').show();

            }
        });
    })
</script>


@endsection