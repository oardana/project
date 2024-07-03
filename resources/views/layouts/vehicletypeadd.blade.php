@extends('main.index')
@section('content')
<div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4 bg-gray-200"> 
    <h1 class="text-center mb-5">Add Vehicletype</h1>
    <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto">
        <form action="/vehicletype" method="POST" class="space-y-6">
           @csrf
            @method('POST')
            <div>
                <div>
                    <label for="name_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Type</label>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white mb-6 @error('name_type') is_invalid @enderror" name="name_type" >
                </div>
                @error('name_type') {{$message}} @enderror
                <button  class="w-50 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
                    Submit
                </button>
                <button type="reset" class="w-50 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </form>
    </div> 
</div>                                  
@endsection