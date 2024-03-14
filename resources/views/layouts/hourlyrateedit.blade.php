@extends('main.index')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="col-lg-7 m-auto">
            <div class="card card-block">
                <form action="/hourlyrate/{{$hourlyrate->id}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center">Edit hourlyrate</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="membership_id"> Name Member</label>
                            <select name="membership_id" id="membership_id" class="form-control">
                                <option value="{{$hourlyrate->membership_id}}">{{$hourlyrate->membership->name_member}}</option>
                                @foreach ($membership as $item)
                                    <option value="{{$item->id}}">{{$item->name_member}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vehicletype_id">Vehicle Type</label>
                            <select name="vehicletype_id" id="vehicletype_id" class="form-control">
                                <option value="{{$hourlyrate->vehicletype_id}}">{{$hourlyrate->vehicletype->name_type}}</option>
                                @foreach ($vehicletype as $item)
                                    <option value="{{$item->id}}">{{$item->name_type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="text" name="value" id="value" class="form-control" value="{{$hourlyrate->value}}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset"> Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection