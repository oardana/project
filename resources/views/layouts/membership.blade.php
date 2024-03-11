@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid"> 
            
            <h1 class="text-center mb-5">Membership</h1>
            <a href="/membership/create">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>add item</button>
            </a>

            @if ($membership->isEmpty())
                <h1 class="text-center mt-5">Data Not Found....</h1>
            @else
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <div class="table-responsive table-responsive-data2 text-center">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Member Name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($membership as $item)
                                <tr class="tr-shadow">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name_member}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                        <div class="table-data-feature"> 
                                            <a href="/membership/{{$item->id}}/edit">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                            </a>
                                                <form action="/membership/{{$item->id}}" method="POST">
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
        </div>
        
    </div>                                  
@endsection