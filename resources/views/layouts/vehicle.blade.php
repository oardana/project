@extends('main.index')
@section('content')
<div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4 bg-gray-200 h-[100vh]">    
    <h1 class="text-center text-3xl mb-5"> Vehicle</h1>
    <a href="/vehicle/create" class="text-blue-500 font-medium">Add Data</a>
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

    @if ($vehicles->isEmpty())
        <h1 class="text-center mt-5">Data Not Found....</h1>
    @else
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10 mb-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">No</th>
                    <th scope="col" class="px-6 py-3">License Plate</th>
                    <th scope="col" class="px-6 py-3">Owner</th>
                    <th scope="col" class="px-6 py-3">Vehicle Type</th>
                    <th scope="col" class="px-6 py-3">Note</th>
                    <th scope="col" class="px-6 py-3">created_at</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{$loop->iteration}}</td>
                    <td class="px-6 py-4">{{$item->license_plate}}</td>
                    <td class="px-6 py-4">{{$item->member->name}}</td>
                    <td class="px-6 py-4">{{$item->vehicletype->name_type}}</td>
                    <td class="px-6 py-4">{{$item->notes}}</td>
                    <td class="px-6 py-4">{{$item->created_at}}</td>
                    <td class="flex items-center px-6 py-4">
                        <a href="/vehicle/{{$item->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="pl-3 font-medium text-red-600 dark:text-red-500 hover:underline" data-toggle="modal" data-target="#confirmDeleteModal{{$item->id}}">remove</a>
                    </td>
                    <!-- Modal -->
                    <div class="modal fixed z-50 inset-0 overflow-y-auto" id="confirmDeleteModal{{$item->id}}" style="display: none;">
                        <div class="flex items-end justify-center min-h-screen pb-60 text-center sm:block sm:p-0">
                            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>
                    
                            <!-- This element is to trick the browser into centering the modal contents. -->
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    
                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                            <!-- Heroicon name: exclamation -->
                                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.5 4h13c1.38 0 2.5-1.12 2.5-2.5V10a1 1 0 00-1-1h-4.31a2.5 2.5 0 01-4.38 0H5a1 1 0 00-1 1v9.5c0 1.38 1.12 2.5 2.5 2.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                            Delete Confirm
                                            </h3>
                                            <div class="mt-2">
                                                <p class="text-sm text-gray-500">
                                                    Do you Have Deleted It ?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <form action="/vehicle/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        Delete
                                        </button>
                                    </form>
                                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm" onclick="document.getElementById('confirmDeleteModal{{$item->id}}').style.display='none'">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                <tr class="spacer"></tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$vehicles->links('vendor.pagination.tailwind')}}
    @endif
</div>
@endsection