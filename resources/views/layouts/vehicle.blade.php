@extends('main.index')
@section('content')
<div class="section__content section__content--p30 ">
        <div class="container-fluid "> 
            <h1 class="text-center mb-5"> Page Vehicle</h1>
            <a href="/vehicle/create">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>add item</button>
            </a>
            @if(session()->has('success'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show mt-4">
               {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if(session()->has('error'))
            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show mt-4">
                {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if ($vehicles->isEmpty())
                <h1 class="text-center mt-5">Data Not Found....</h1>
            @else
            <div class="col-md-12">
                <div class="table-data__tool ">
                    <div class="table-data__tool-right">
                        
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>License Plate</th>
                                        <th>Owner</th>
                                        <th>Vehicle Type</th>
                                        <th>Note</th>
                                        <th>created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehicles as $item)
                                    <tr class="tr-shadow">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->license_plate}}</td>
                                        <td>{{$item->member->name}}</td>
                                        <td>{{$item->vehicletype->name_type}}</td>
                                        <td>{{$item->notes}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="/vehicle/{{$item->id}}/edit" >
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                <form action="/vehicle/{{$item->id}}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$item->id}}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
            </div>
            @endif
        </div>
    </div>                                
@endsection