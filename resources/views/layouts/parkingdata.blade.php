@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container">
            <h1 class="text-center"> Parking data</h1>
            <div class="col-lg-12">
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>License Plate</th>
                                <th>Owner</th>
                                <th>Type Member</th>
                                <th>Type Vehicle</th>
                                <th>Value</th>
                                <th>Date In</th>
                                <th>Date Out</th>
                                <th>Total</th>
                                <th>Employee</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($parkingdata as $item)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->license_plate}}</td>
                                    <td>{{$item->vehicle->member->name}}</td>
                                    <td>{{$item->hourlyrate->membership->name_member}}</td>
                                    <td>{{$item->hourlyrate->vehicletype->name_type}}</td>
                                    <td>{{$item->hourlyrate->value}}</td>
                                    <td>{{$item->date_in}}</td>
                                    <td>{{$item->date_out}}</td>
                                    <td>{{$item->amount_to_pay}}</td>
                                    <td>{{$item->Employee->name}}</td>
                                    <td>
                                        <div class="table-data-feature"> 
                                                <form action="/parkingdata/{{$item->id}}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </form>
                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection