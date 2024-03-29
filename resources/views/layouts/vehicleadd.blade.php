@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid m-auto"> 
            <h1 class="text-center mb-5">add Vehicle</h1>
            <div class="col-lg-7 m-auto">
                <form action="/vehicle" method="POST">
                   @csrf
                    @method('POST')
                    <div class="card">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="license_plate" class=" form-control-label">License Plate</label>
                                <input type="text" name="license_plate" id="license_plate" placeholder="Enter License Plate" class="form-control @error('license_plate') is-invalid @enderror" required value="{{old('license_plate')}}">
                            </div>
                            @error('license_plate') {{$message}} @enderror
                            <div class="form-group">
                                <label for="member_id" class=" form-control-label">Owner</label>
                                <select name="member_id" id="select"  class="form-control" >
                                    <option value=""> Enter Owner</option>
                                    @foreach ($nameMember as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>  
                            </div>
                            <div class="form-group">
                                <label for="vehicletype_id" class=" form-control-label">Vehicle Type</label>
                               
                                    <select name="vehicletype_id" id="select" name="select" class="form-control" >
                                        <option value="">Enter Vehicle Type</option>
                                        @foreach ($vehicleType as $item)
                                            <option value="{{$item->id}}">{{$item->name_type}}</option>
                                        @endforeach
                                    </select>   
                            </div>
                            <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="notes" class=" form-control-label">Notes</label>
                                        <textarea name="notes" id="notes" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
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