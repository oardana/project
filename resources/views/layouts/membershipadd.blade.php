@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid m-auto"> 
            <h1 class="text-center mb-5">Add Membership</h1>
            <div class="col-lg-7 m-auto">
                <form action="/membership" method="POST">
                   @csrf
                    @method('POST')
                    <div class="card">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="name_member">Member Name</label>
                                <input type="text" class="form-control @error('name_member') is_invalid @enderror" name="name_member">
                            </div>
                            @error('name_member') {{$message}} @enderror
                        </div>
                        <div class="card-footer">
                            <button  class="btn btn-primary btn-sm" type="submit">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>                                  
@endsection