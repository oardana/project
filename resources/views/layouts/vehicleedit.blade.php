@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid m-auto"> 
            <h1 class="text-center mb-5">edit Vehicle</h1>
            <div class="col-lg-7 m-auto">
                <form action="/vehicle/{{$vehicle->id}}" method="POST">
                   @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="license_plate" class=" form-control-label">License Plate</label>
                                <input type="text" name="license_plate" id="license_plate" placeholder="Enter License Plate" class="form-control" required value="{{$vehicle->license_plate}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="member_id" class=" form-control-label">Owner</label>
                                <select name="member_id" id="select"  class="form-control" >
                                    <option value="{{$vehicle->member_id}}">{{$vehicle->member->name}}</option>
                                    @foreach ($nameMember as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>  
                            </div>
                            <div class="form-group">
                                <label for="vehicletype_id" class=" form-control-label">Vehicle Type</label>
                                    <select name="vehicletype_id" id="select" name="select" class="form-control" >
                                        <option value="{{$vehicle->vehicletype_id}}">{{$vehicle->vehicletype->name_type}}</option>
                                        @foreach ($vehicleType as $item)
                                            <option value="{{$item->id}}">{{$item->name_type}}</option>
                                        @endforeach
                                    </select>   
                            </div>
                            <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="notes" class=" form-control-label">Notes</label>
                                        <textarea name="notes" id="notes" class="form-control" rows="5">{{$vehicle->notes}}</textarea>
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