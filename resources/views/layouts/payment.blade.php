@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid"> 
            <h1 class="text-center">Page Payment</h1>
           <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <form action="/payment" method="post">
                            @method('POST')
                            @csrf
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="license_plate">License Plate</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="license_plate" id="license_plate" class="form-control" >
                                        <div class="input-group-append">
                                            <input type="reset" id="resetAll" value="X" class="form-control" >
                                        </div>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="vehicle_type">Vehicle Type</label>
                                    <input type="text" id="vehicle_type" class="form-control" required>
                                    <input type="hidden" name="vehicle_id" id="vehicle_id" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Owner</label>
                                    <input type="hidden" name="employee_id" id="employee_id" value="{{auth()->user()->id}}">
                                    <input type="text" id="owner" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Member Type</label>
                                    <input type="text" id="member" class="form-control"  required >
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="date_in">DATE IN</label>
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="datetime"  id="date1" class="form-control " readonly>
                                        <label for="">Time</label>
                                        <input type="datetime"  id="date2" class="form-control" readonly>
                                        <input type="hidden" name="date_in" id="date_in" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date_out"> Date Out</label>
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="text"  id="dateout1" class="form-control" value="{{$date}}" readonly>
                                        <label for="">Time</label>
                                        <input type="datetime"  id="dateout2" class="form-control" value="{{$time}}" readonly>
                                        <input type="hidden" name="date_out" id="date_out" value="{{$datetime}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Parking Duration</label>
                                    <input type="text"  id="parkingduration" class="form-control" required>
                                </div> 
                                <div class="form-group">
                                    <label for="">Hourly Rate</label>
                                    <input type="text" id="hourlyrate" name="hourlyrate" class="form-control" required>
                                    <input type="hidden" name="hourlyrate_id" id="hourlyrate_id" required>
                                </div>   
                            </div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <label for="">Amount To Pay</label>
                                    <input type="text" name="amount_to_pay" id="hasil" class="form-control" required>
                                </div>
                                <button class="btn btn-danger" id="submit"> Submit</button>
                            </div>
                        </form>
                    </div>               
                </div>
           </div>
        </div>
    </div>                                  
@endsection