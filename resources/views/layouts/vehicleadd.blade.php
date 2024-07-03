@extends('main.index')
@section('content')
<div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4 bg-gray-200 ">
    <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto">
        <h1 class="text-center mb-5">Add Data Vehicle</h1>
        <form action="/vehicle" method="POST" class="space-y-6">
            @csrf
             @method('POST')
             <div>
                <label for="license_plate" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">License Plate</label>
                <input type="text" name="license_plate" id="license_plate" placeholder="Enter License Plate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is_invalid @enderror " required value="{{old('license_plate')}}">
            </div>
            <div>
                <label for="member_id" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Owner</label>
                <select name="member_id" id="select"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('member_id') is_invalid @enderror" >
                    <option value=""> Enter Owner</option>
                    @foreach ($nameMember as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>  
            </div>
            <div>
                <label for="vehicletype_id" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Type</label>
               
                    <select name="vehicletype_id" id="select" name="select" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('vehicletype_id') is_invalid @enderror" >
                        <option value="">Enter Vehicle Type</option>
                        @foreach ($vehicleType as $item)
                            <option value="{{$item->id}}">{{$item->name_type}}</option>
                        @endforeach
                    </select>   
            </div>
            <div>
                <label for="notes" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                <textarea name="notes" id="notes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('notes') is_invalid @enderror" rows="5"></textarea>
            </div>

             <button  class="w-50 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
                 <i class="fa fa-dot-circle-o"></i> Submit
             </button>
             <button type="reset" class="w-50 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                 <i class="fa fa-ban"></i> Reset
             </button>
         </form>
    </div>                                  
</div>
@endsection