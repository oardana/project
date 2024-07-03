<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Registration</title>
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

    <div class="bg-gradient-to-r from-blue-800 to-cyan-400 mt-[6%] py-[3%] mx-8 mb-[6%] lg:mx-[220px] shadow-2xl rounded-xl" >
        <div class="grid grid-rows-1 lg:grid-flow-col gap-2">
          <div>
            <h3 class="text-center text-white text-2xl mt-44 font-bold">Welcome</h3>
            <h2 class="text-center lg:mt-[75%] lg:mb-[6%] mb-[6%] mt-[50%] font-light text-white">Do you have an account?</h2>
            <h1 class="text-center mb-5"><a href="/login" class="w-50 px-14 py-2.5 bg-white rounded-full font-bold">Login</a></h1>
          </div>
          <div class="bg-white lg:p-20 rounded-l-[10%_50%]">
            <h1 class="lg:mt-[-4%] lg:mb-[6%] text-center lg:text-3xl py-6"> Apply as a Employee</h1>
            <form action="/registration" method="post" enctype="multipart/form-data">
              @csrf
              <div class="grid lg:grid-cols-2 gap-2 ">
                <div class="mx-7 lg:mr-4 pl-30px">
                  <div>
                    <input type="text" placeholder="Name *" name="name" value="{{old('name')}}" class="bg-gray-50 mb-4  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </div>
                  <div class="">
                    <input type="email" placeholder="Email *" name="email" value="{{old('email')}}" class=" bg-gray-50 mb-4  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </div>
                  <div>
                    <input type="password" placeholder="Password *" name="password" value="{{old('password')}}" class=" bg-gray-50 mb-4  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number *" name="phone_number" value="{{old('phone_number')}}" class=" bg-gray-50 mb-4  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </div>
                </div>
                <div class="mx-7 lg:mr-4">
                  <textarea placeholder="Address" name="address" class="bg-gray-50 mb-4  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                  <input type="date" name="date_of_birth" placeholder="6" value="{{old('name')}}" class=" bg-gray-50 mb-4  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <label class="radio inline"> 
                    <input type="radio" name="gender" id="gender2" value="male">
                    <span> Male </span> 
                </label>
                <label class="radio inline"> 
                    <input type="radio" name="gender" id="gender2" value="female">
                    <span>Female </span> 
                </label>
                  <input type="file" name="image" id="image" class="mt-4 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"/>
                  <button class="w-60 text-white float-right mt-[10%] mb-10 lg:mb-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " id="submit"> Submit</button>       
                </div>
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
