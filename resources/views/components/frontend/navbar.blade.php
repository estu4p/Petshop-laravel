    
    <!-- Navbar -->
    <nav class="bg-white">
      <div class="container mx-auto relative px-4 py-4 flex justify-between items-center bg-white">
        <a class="text-3xl font-bold leading-none" href="#">
          <img src="/frontend/img/PetHouse.png" class="h-14" alt="PetHouse | Logo" />
        </a>
        <div class="lg:hidden">
          <button class="navbar-burger flex items-center text-gray-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Mobile menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
          </button>
        </div>
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
          <li><a class="{{ request()->is('/') ? 'text-primer pb-1.5 border-b-2 border-primer2' : 'text-gray-500' }} font-semibold hover:text-primer" href="/">Home</a></li>
          <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
          </li>
          <li><a class="{{ request()->is('product') ? 'text-primer pb-1.5 border-b-2 border-primer2' : 'text-gray-500' }} font-semibold hover:text-primer" href="/product">Products</a></li>
          <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
          </li>
          <li><a class="text-gray-500 font-semibold hover:text-primer" href="#footer">Contact</a></li>
          <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
          </li>
          <li><a class="{{ request()->is('cart') ? 'text-primer pb-1.5 border-b-2 border-primer2' : 'text-gray-500' }} font-semibold hover:text-primer" href="/cart">Cart</a></li>
        </ul>

        {{-- if belum login --}}
        @auth
        {{-- <a href="/cart" class="hidden lg:inline-block"
          ><svg xmlns="http://www.w3.org/2000/svg" class="h-7 fill-primer2 mr-4" viewBox="0 0 576 512">
            <path
              d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
            /></svg
        ></a>--}}

        <a href="/dashboard" class="hidden lg:inline-block"
          ><?xml version="1.0" ?><svg enable-background="new 0 0 50 50" height="35px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="25" cy="25" fill="none" r="24" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><rect fill="none" height="50" width="50"/><path d="M29.933,35.528c-0.146-1.612-0.09-2.737-0.09-4.21c0.73-0.383,2.038-2.825,2.259-4.888c0.574-0.047,1.479-0.607,1.744-2.818  c0.143-1.187-0.425-1.855-0.771-2.065c0.934-2.809,2.874-11.499-3.588-12.397c-0.665-1.168-2.368-1.759-4.581-1.759  c-8.854,0.163-9.922,6.686-7.981,14.156c-0.345,0.21-0.913,0.878-0.771,2.065c0.266,2.211,1.17,2.771,1.744,2.818  c0.22,2.062,1.58,4.505,2.312,4.888c0,1.473,0.055,2.598-0.091,4.21c-1.261,3.39-7.737,3.655-11.473,6.924  c3.906,3.933,10.236,6.746,16.916,6.746s14.532-5.274,15.839-6.713C37.688,39.186,31.197,38.93,29.933,35.528z"/></svg>
        </a>
        @endauth

        @guest
        <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-500 font-bold rounded-xl transition duration-200" href="/login">Sign In</a>
        <a class="hidden lg:inline-block py-2 px-6 bg-primer hover:bg-primer2 text-sm text-white font-bold rounded-xl transition duration-200" href="/register">Sign up</a>
        @endguest

      </div>
    </nav>
    <!-- Responsiv -->
    <div class="navbar-menu relative z-50 hidden">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
      <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
          <a class="mr-auto text-3xl font-bold leading-none" href="#">
            <img src="/frontend/img/PetHouse.png" class="h-12" alt="PetHouse | Logo" />
          </a>
          <button class="navbar-close">
            <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <hr class="-mt-3 mb-4" />
        <div>
          <ul>
            <li class="mb-1">
              <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-gray-50 hover:text-primer rounded" href="#">Home</a>
            </li>
            <li class="mb-1">
              <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-gray-50 hover:text-primer rounded" href="#">Products</a>
            </li>
            <li class="mb-1">
              <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-gray-50 hover:text-primer rounded" href="#">Services</a>
            </li>
            <li class="mb-1">
              <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-gray-50 hover:text-primer rounded" href="#">Contact</a>
            </li>
          </ul>
        </div>
        <div class="mt-auto">
          <div class="pt-6">
            <!-- <a class="block px-4 py-4 mb-3 text-xs text-center font-semibold leading-none bg-gray-100 hover:bg-gray-100 rounded-xl" href="#">Sign in</a>
            <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-primer hover:bg-primer2 rounded-xl" href="#">Sign Up</a> -->

            <!-- If Login -->
            <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-primer hover:bg-primer2 rounded-xl" href="#">Cart</a>
          </div>
          <p class="my-4 text-xs text-center text-gray-400">
            <span>Copyright © 2021 PetHouse</span>
          </p>
        </div>
      </nav>
    </div>
    <!-- End Navbar -->

