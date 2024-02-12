<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>

<body >
  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{asset('images/default.png')}}" class="h-8" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Dawstagram @if (auth()->user()) __ @ {{auth()->user()->username}} @endif</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="{{route('home')}}"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" id="home">Home</a>
          </li>
          <li>
            <a href="https://youtu.be/xvFZjo5PgG0?si=Zrlkr50SMZz5frDj" target="_blank"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
          </li>
          @if (!auth()->user())
          <li>
            <a href="{{route('login')}}"
            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" id="login">Login</a>
          </li>
          <li>
            <a href="{{route('register')}}"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" id="register">Register</a>
          </li>
          @else
          <li> <a
            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              href="{{route('main')}}" id="profile">
              Profile
            </a></li>

            <li>
              <a href={{route('paypal')}}>Buy followers</a>
            </li>

          <li> <a
            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              href="{{route('logout')}}" id="logout">
              Logout
            </a></li>
          @endif

        </ul>
      </div>
    </div>
  </nav>

  @yield('article')
</body>
<footer class="text-center text-gray-500 dark:text-gray-400 mt-8 pb-8">
  <p>&copy; Dawstagram - All Rights Reserved 2023</p>
</footer>
<script>
  let ref=window.location.href;

  if (ref.includes('profile')){
    document.getElementById('profile').classList.add('text-blue-700')
    document.getElementById('profile').classList.remove('text-gray-900')
  }else if (ref.includes('login')){
    document.getElementById('login').classList.add('text-blue-700')
    document.getElementById('login').classList.remove('text-gray-900')
  }else if (ref.includes('register')){
    document.getElementById('register').classList.add('text-blue-700')
    document.getElementById('register').classList.remove('text-gray-900')
  }else if(ref.includes('logout')){
    document.getElementById('logout').classList.add('text-blue-700')
    document.getElementById('logout').classList.remove('text-gray-900')
  }else{
    document.getElementById('home').classList.add('text-blue-700')
    document.getElementById('home').classList.remove('text-gray-900')
  }

</script>
</html>