<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.css" integrity="sha512-lCk0aEL6CvAGQvaZ47hoq1v/hNsunE8wD4xmmBelkJjg51DauW6uVdaWEJlwgAE6PxcY7/SThs1T4+IMwwpN7w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="loader fixed left-0 top-0 w-full h-full z-50 bg-gray-400"> 
    <div class="fixed top-1/2 left-1/2 ">
      <span class="material-symbols-outlined animate-spin ">autorenew</span>
    </div>
  </div>
  <div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
    <div class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
      <div class="p-4 py-6 text-white bg-blue-500 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
        <div class="my-3 text-4xl font-bold tracking-wider text-center">
          <a href="#">DashBoard Admin</a>
        </div>
        <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minima voluptatibus quia neque, reprehenderit veritatis officia doloremque veniam aspernatur dolores assumenda repellat ab expedita odit est earum voluptate consequatur sequi.
        </p>
        <p class="flex flex-col items-center justify-center mt-10 text-center">
          <span>Don't have an account?</span>
          <a href="/registration" class="underline">Get Started!</a>
        </p>
      </div>
      <div class="p-5 bg-white md:flex-1">
        <h3 class="my-4 text-2xl font-semibold text-gray-700">Account Login</h3>
        <form action="/login" class="flex flex-col space-y-5" method="POST">
            @csrf
          <div class="flex flex-col space-y-1">
            <label for="name" class="text-sm font-semibold text-gray-500">Name Employee</label>
            <input type="text" id="name" name="name" autofocus class="@error('name') is-invalid @enderror px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
          </div>
          @error('name') {{$message}} @enderror
          <div class="flex flex-col space-y-1">
            <div class="flex items-center justify-between">
              <label for="password" class="text-sm font-semibold text-gray-500">Password</label>
              <a href="#" class="text-sm text-blue-600 hover:underline focus:text-blue-800">Forgot Password?</a>
            </div>
            <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"/>
            <p class="text-blue-400">Min 8 Character </p>
          </div>
          @error('password'){{$message}} @enderror
          <div>
            <button type="submit" class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4" >Log in </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(window).on('load', function(){
    $('.loader').fadeOut(2000);
  });
</script>
</html>
<!-- end document-->


