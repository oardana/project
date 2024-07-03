@extends('main.index')
@section('content')
<div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4 bg-gray-200 h-auto">
    <h1 class="text-center text-3xl mb-10">Payment</h1>
    @if(session()->has('success'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 border-2 border-green-300 dark:bg-gray-800 dark:text-green-400" role="alert">
      <span class="material-symbols-outlined">report</span>
      <div class="ms-3 text-sm font-medium">
          {{session('success')}}
      </div>
      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
          <span class="material-symbols-outlined">close</span>
      </button>
    </div>
  @endif

  @if(session()->has('error'))
  <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 border-2 border-red-300 dark:bg-gray-800 dark:text-red-400" role="alert">
      <span class="material-symbols-outlined">report</span>
      <div class="ms-3 text-sm font-medium">
          {{session('error')}}
      </div>
      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
          <span class="material-symbols-outlined">close</span>
      </button>
    </div>
  @endif
<div class="grid gap-6 mb-6 pl-10 pr-10 lg:grid-cols-2">
    <div class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-[60vh]">
        <form action="/payment" method="POST" class="space-y-6">
            @method('POST')
            @csrf
            <div>
                <label for="license_plate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">License Plate</label>
                <div class="flex">
                    <div class="relative w-full">
                        <input type="text" name="license_plate" id="license_plate" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg rounded-s-gray-100 rounded-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"/>
                        <input id="resetall" type="reset" value="X" class="absolute top-0 end-0 w-10 text-center h-full text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    </div>
                </div>
            </div>
            @error('license_plate') {{$message}} @enderror
            <div>
                <label for="vehicle_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Type</label>
                <input type="text" id="vehicle_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <input type="hidden" name="vehicle_id" id="vehicle_id" required>
            </div>
            <div>
                <label for="employee_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Owner</label>
                <input type="hidden" name="employee_id" id="employee_id" value="{{auth()->user()->id}}">
                <input type="text" id="owner" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="member" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Member Type</label>
                <input type="text" id="member" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required >
            </div>
    </div>
    <div class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 space-y-6">
        <div>
            <label for="date_in">DATE IN</label>
            <div>
                <label for="date1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                <input type="text"  id="date1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-6" readonly>
                <label for="date2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>
                <input type="text"  id="date2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                <input type="hidden" name="date_in" id="date_in" required>
            </div>
        </div>
        <div>
            <label for="date_out"> Date OUT</label>
            <div>
                <label for="dateout1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                <input type="text" id="dateout1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-6" value="{{$date}}" readonly>
                <label for="dateout2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>
                <input type="text"  id="dateout2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$time}}" readonly>
                <input type="hidden" name="date_out" id="date_out" value="{{$datetime}}" required>
            </div>
        </div>
        <div>
            <label for="parkingduration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parking Duration</label>
            <input type="text"  id="parkingduration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div> 
        <div>
            <label for="hourlyrate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hourly Rate</label>
            <input type="text" id="hourlyrate" name="hourlyrate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            <input type="hidden" name="hourlyrate_id" id="hourlyrate_id" required>
        </div>  
        <div>
            <label for="amout_to_pay" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount To Pay</label>
            <input type="text" name="amount_to_pay" id="hasil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <button class="w-50 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5" id="submit"> Submit</button>       
    </form>
    </div>
</div>
</div>                         
@endsection