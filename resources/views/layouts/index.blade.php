@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid"> 
            <h1 class="text-center"> Welcome {{auth()->user()->name}}</h1>
        </div>
    </div>                                  
@endsection