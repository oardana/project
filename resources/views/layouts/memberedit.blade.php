@extends('main.index')
@section('content')
<div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4 bg-gray-200 ">
    <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto">
        <form action="/member/{{$member->id}}" method="POST" class="space-y-6">
            @csrf
             @method('PATCH')
             <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your  name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$member->name}}">
            </div>
            <div>
                <label for="membership_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Membership Type</label>
                <select name="membership_id" id="select" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="{{$member->membership_id}}">{{$member->membership->name_member}}</option>
                        @foreach ($memberships as $item)
                            <option value="{{$item->id}}">{{$item->name_member}}</option>
                        @endforeach
                    </select>   
            </div>
            <div>
                <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text"  name="email"id="email" placeholder="Enter Email name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$member->email}}">
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                <input type="text" name="phone_number" id="phone" placeholder="Enter your Phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$member->phone_number}}">
            </div>
            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <input type="text" name="address" id="addres" placeholder="Address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$member->address}}">
            </div>
            <div>
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$member->date_of_birth}}">
            </div>
            <div>
                <label for="gender"> Gender</label>
                 <div class="col col-md-9">
                    <div class="form-check">
                        <input type="radio" name="gender" id="gender" value="male" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{$member->gender =='male' ? 'checked': ''}}> Male
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender" id="gender" value="female" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{$member->gender =='female' ? 'checked': ''}}> female
                    </div>
                </div>
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