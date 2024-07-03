
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parking System</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.css" integrity="sha512-lCk0aEL6CvAGQvaZ47hoq1v/hNsunE8wD4xmmBelkJjg51DauW6uVdaWEJlwgAE6PxcY7/SThs1T4+IMwwpN7w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
   @media (max-width: 1024px) {
  .closed {
    transform: translatex(-100%);
 }
}
</style>
<body >
  <div class="loader fixed left-0 top-50 w-full h-full z-50 bg-gray-400"> 
    <div class="fixed top-1/2 left-1/2 ">
      <span class="material-symbols-outlined animate-spin ">autorenew</span>
    </div>
  </div>
  
<div class='flex bg-gray-100'>
    <aside class='h-screen bg-white fixed lg:sticky top-0 border-r-2 p-6 pt-10 whitespace-nowrap z-40 closed shadow-xl transition-all duration-300 ease '>
        <div class='mb-10 flex ml-40'>
        <button class='lg:hidden bg-gray-200 text-gray-500 rounded leading-none p-1 btn-close-menu'>
          <span class="material-symbols-outlined ">chevron_left</span>
        </button>
        </div>
        <ul class='text-gray-500 font-semibold flex flex-col gap-2'>
        <li>
          <a href="/member" class='flex items-center rounded px-3 py-2 hover:text-black hover:bg-gray-50  transition-all'>
            <span class="material-symbols-outlined mr-3">
              group
              </span>
            <span class='flex-grow'>Master Member</span>
          </a>
        </li>
        <li>
          <a href="/vehicle" class='flex   items-center rounded px-3 py-2 hover:text-black hover:bg-gray-50 transition-all'>
            <span class="material-symbols-outlined mr-3" >
              garage_home
              </span>
            <span class='flex-grow'>Master Vehicle</span>
          </a>
        </li>
        <li>
          <a href="/payment" class='flex rounded px-3 py-2 hover:text-black hover:bg-gray-50 transition-all'>
            <span class='flex items-center gap-3'>
              <span class="material-symbols-outlined">
                monetization_on
                </span>
              Master Payment
            </span>
          </a>
        </li>
        <li class='border my-2'></li>
        <li>
          <a href="/membership" class='flex rounded px-3 py-2 hover:text-black hover:bg-gray-50 transition-all'>
            <span class='flex items-center gap-3'>
              <span class="material-symbols-outlined">
                loyalty
                </span>
              Master Membership
            </span>
          </a>
        </li>

        <li>
          <a href="/hourlyrate" class='flex items-center rounded px-3 py-2 hover:text-black hover:bg-gray-50 transition-all'>
            <span class="material-symbols-outlined mr-3">
              schedule
              </span>
            <span class='flex-grow'>Master Hourlyrate</span>

          </a>
        </li>


        <li>
          <a href="/vehicletype" class='flex items-center rounded px-3 py-2 hover:text-black hover:bg-gray-50 transition-all'>
            <span class="material-symbols-outlined mr-3">
              transportation
              </span>
            <span class='flex-grow'>Master VehicleType</span>

          </a>
        </li>
        <li>
          <a href="/parkingdata" class='flex items-center rounded px-3 py-2 hover:text-black hover:bg-gray-50 transition-all'>
            <span class="material-symbols-outlined mr-3">
              storage
              </span>
            <span class='flex-grow'>Master Parkingdata</span>
          </a>
        </li>
      </ul>
    </aside>

    <div class='w-full'>
    <header class='px-6 lg:px-8 pb-2 lg:pb-2 pt-4 lg:pt-5 shadow bg-white mb-1 sticky top-0 z-30'>
    <h1 class='text-xl font-semibold mb-2 flex items-center'>
      <button class='btn-open-menu inline-block lg:hidden mr-6'>
        <span class="material-symbols-outlined">
          menu
          </span>
      </button>
      <span>My Dashboard</span>
    </h1>
    <form action="{{Request::is('member') ? '/member':'' }}" class="flex items-center gap-3 bg-gray-100 rounded-md py-2 px-2 lg:max-w-lg">
      <button class='text-gray-500'>
        <span class="material-symbols-outlined">search</span>
          
      </button>
      <input type="text" name="search" class='bg-transparent outline-none w-full rounded-md '>
    </form>
        <div class="profil absolute right-10 top-3  ">
          <div class="open bg-blue-400 rounded-full hover:shadow-2xl">
            <img src="{{asset('storage/'.auth()->user()->image)}}" class="rounded-full w-10 h-10" alt="No image"/>
          </div>
          <div class="profil-wrapper absolute close top-12 right-0 hidden bg-gray-200 w-48 sm:w-[305px] rounded-lg shadow-2xl border-2 border-gray-400">
            <ul class="px-4 sm:px-10 text-sm py-4 font-sans ">
              <li class="mb-3 flex hover:text-blue-600 "><span class="material-symbols-outlined pr-2">account_circle</span>{{Auth()->user()->name}}</li>
              <li class="mb-3 flex hover:text-blue-600"><span class="material-symbols-outlined pr-2">mail</span>{{auth()->user()->email}}</li>
              <li class=" flex hover:text-blue-600 "><span class="material-symbols-outlined pr-2">logout</span><a  href="/logout">Logout</a></li>
            </ul>
          </div>
        </div>
    </header>

    <main class='px-2 py-2 m-auto lg:px-4 bg-gray-100 flex flex-col gap-6 '>
    @yield('content')
    </main>

    </div>
</div>

</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.js" integrity="sha512-ynDTbjF5rUHsWBjz7nsljrrSWqLTPJaORzSe5aGCFxOigRZRmwM05y+kuCtxaoCSzVGB1Ky3XeRZsDhbSLdzXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Main JS-->
<script src="{{asset('js/code.js')}}"></script>

</html>
