@extends('main.index')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <h1 class="text-center mb-5">Add vehicletype</h1>
       <div class="col-lg-7 m-auto">
            <form action="/vehicletype" method="post">
                @method('POST')
                @csrf
                <div class="card">
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name_type"> Name Type</label>
                            <input type="text" class="form-control" name="name_type">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"> submit</button>
                            <button class="btn btn-danger" type="reset">reset</button>
                        </div>
                    </div>
                </div>
            </form>
       </div>
    </div>
</div>
@endsection