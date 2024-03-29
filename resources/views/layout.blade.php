@php
$segments=explode("/",url()->current());
$currentRoute=end($segments);


@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body class="">
      <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="/" class="flex items-center md:flex">
              <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
          </a>
          @auth
          
              <div class=" hidden md:flex items-center md:order-2 ">
                  <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                  </button>
              </div>
          @endauth
          @guest
              <div class=" md:flex items-center md:order-2 ">
                  @if (Route::has('login'))
                    <a href="{{route('login')}}" class="{{$currentRoute=='login'?'text-blue-500':''}} font-semibold block py-2 pl-3 pr-4rounded md:bg-transparent hover:text-blue-500" >Login</a>
                      
                  @endif
                   
                  @if (Route::has('register'))
                  <a href="{{route('register')}}" class="{{$currentRoute=='register'?'text-blue-500':'text-gray-900'}} font-semibold block py-2 pl-3 pr-4  rounded hover:text-blue-500">Register</a>
                      
                  @endif
              </div>
          @endguest

          <div class="items-center justify-between  w-full sm:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="/" class="{{$currentRoute=='127.0.0.1:8000'?'text-blue-500':''}} block py-2 pl-3 pr-4rounded md:bg-transparent hover:text-blue-500 " >Home</a>
              </li>
              <li>
                <a href="/store" class="{{$currentRoute=='store'?'text-blue-500':'text-gray-900'}} block py-2 pl-3 pr-4  rounded hover:text-blue-500">Store</a>
              </li>
              <li>
                <a href="#" class="{{$currentRoute=='service'?'text-blue-500':'text-gray-900'}} block py-2 pl-3 pr-4  rounded hover:text-blue-500">Services</a>
              </li>
              <li>
                <a href="#" class="{{$currentRoute=='community'?'text-blue-500':'text-gray-900'}} block py-2 pl-3 pr-4  rounded hover:text-blue-500">Community</a>
              </li>
              <li>
                <a href="#" class="{{$currentRoute=='contact'?'text-blue-500':'text-gray-900'}} block py-2 pl-3 pr-4  rounded hover:text-blue-500">Contact</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

      

        @yield('content')

        <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
          </span>
          <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
              </li>
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
              </li>
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
              </li>
              <li>
                  <a href="#" class="hover:underline">Contact</a>
              </li>
              @auth
                  <li class="ml-2">
                    <form action="{{route('logout')}}" method="POST">
                      @csrf
                      <button type="submit" class="text-warning">Logout</button>
                    </form>
                  </li>
              @endauth
          </ul>
      </footer>
    </body>
</html>
