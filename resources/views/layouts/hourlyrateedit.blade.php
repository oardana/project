@extends('main.index')
@section('content')
<div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4 bg-gray-200">
    <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto">
        <form action="/hourlyrate/{{$hourlyrate->id}}" method="post">
            @method('PATCH')
            @csrf
            <h1 class="text-center">Add hourlyrate</h1>
            <div>
                <label for="membership_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Name Member</label>
                <select name="membership_id" id="membership_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white mb-6 @error('membership_id') is_invalid @enderror">
                    <option value="{{$hourlyrate->membership_id}}">{{$hourlyrate->membership->name_member}}</option>
                    @foreach ($membership as $item)
                        <option value="{{$item->id}}">{{$item->name_member}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="vehicletype_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Type</label>
                <select name="vehicletype_id" id="vehicletype_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white mb-6 @error('vehicletype_id') is_invalid @enderror">
                    <option value="{{$hourlyrate->vehicletype_id}}">{{$hourlyrate->vehicletype->name_type}}</option>
                    @foreach ($vehicletype as $item)
                        <option value="{{$item->id}}">{{$item->name_type}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="value" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Value</label>
                <input type="text" name="value" id="value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white mb-6 @error('value') is_invalid @enderror" value="{{$hourlyrate->value}}">
            </div>
            <button  class="w-50 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
                Submit
            </button>
            <button type="reset" class="w-50 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                <i class="fa fa-ban"></i> Reset
            </button>
        </form>
    </div>
</div>
@endsection