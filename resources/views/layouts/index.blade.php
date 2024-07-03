@extends('main.index')
@section('content')
<div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4 bg-gray-200 h-[100vh]">
    <h1 class="text-center text-3xl"> Welcome {{auth()->user()->name}}</h1>
</div>                                  
@endsection