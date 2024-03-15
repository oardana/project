@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid"> 
            
            <h1 class="text-center mb-5"> Page Member</h1>
            <a href="/member/create">
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

            @if ($members->isEmpty())
                <h1 class="text-center mt-5">Data Not Found....</h1>
            @else
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <div class="table-responsive table-responsive-data2 text-center">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Membership Type</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Date Of Birth</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $item)
                                <tr class="tr-shadow">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->membership->name_member}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone_number}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->date_of_birth}}</td>
                                    <td>{{$item->gender}}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="/member/{{$item->id}}">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                            </a>
                                                <form action="/member/{{$item->id}}" method="POST">
                                                    @method('delete')
                                                    @csrf
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
            @endif
            {{$members->links()}}   
        </div>
        
    </div>                                  
@endsection