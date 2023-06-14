@extends('layouts.frontend')

@section('content')
    
    <!--  -->
    <!-- Hero -->
    <section class="bg-white relative dark:bg-gray-900 z-10 border-b-4 border-black">
      <div class="grid h-screen max-w-screen-xl px-4 py-8 mx-auto mt-20 lg:gap-8 xl:gap-0 lg:py-16 lg:px-11 lg:grid-cols-12 lg:h-fit lg:mb-14">
        <div class="mr-auto absolute top-6 left-10 place-self-center md:relative md:py-4 lg:col-span-7">
          <!-- <div class=""> -->
          <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">WE TAKE CARE OF YOUR PET</h1>
          <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">We always try to Provide Our Best Service for yout pet.</p>
          <!-- </div> -->
          <a
            href="#our-product"
            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-primer border border-gray-400 rounded-lg hover:text-white hover:bg-primer focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
          >
            Purchase Now
          </a>
        </div>
        <div class="absolute z-0 right-1 bottom-0 md:right-14">
          <img src="/frontend/img/img-hero.png" alt="SiPetShop | Hero" class="h-[530px]" />
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <!-- Find Product-->
    <section class="flex bg-body dark:bg-gray-900">
      <div class="container mx-auto px-4 py-16 my-10">
        <div class="mb-4">
          <h1 class="capitalize mb-1 text-2xl font-semibold tracking-tight leading-none dark:text-white">find out what's new</h1>
          <p class="capitalize mb-6 text-2xl font-semibold text-gray-900 dark:text-gray-400">for your employer</p>
        </div>
        <div class="grid grid-rows-1 grid-cols-9 gap-4">
          <div class="relative col-span-9 row-span-1 md:col-span-4 md:-mb-2 card hover:drop-shadow-xl ease-out duration-200 md:h-auto">
            <a href="product.html" class="stretched-link">
              <div class="card-shadow rounded-xl">
                <img src="/frontend/img/w-new-1.jpg" alt="" class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl" />
              </div>
              <!--  -->
              <div class="h-32 absolute overlay left-0 top-0 bottom-0 flex justify-center py-28 flex-col pl-48 md:pl-72">
                <h5 class="text-lg font-semibold">New Friends</h5>
                <span class="">21 items</span>
              </div>
            </a>
          </div>
          <div class="relative col-span-9 row-span-1 md:col-span-2 md:row-span-2 card hover:drop-shadow-xl ease-out duration-200">
            <a href="product.html" class="stretched-link">
              <div class="card-shadow rounded-xl">
                <img src="/frontend/img/w-new-4.jpg" alt="" class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl" />
              </div>
              <div class="absolute overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12">
                <h5 class="text-lg font-semibold">Pet Foods</h5>
                <span class="">38 items</span>
              </div>
            </a>
          </div>
          <div class="relative col-span-9 row-span-1 md:col-span-3 md:row-span-2 card hover:drop-shadow-xl ease-out duration-200">
            <a href="product.html" class="stretched-link">
              <div class="card-shadow rounded-xl">
                <img src="/frontend/img/w-new-3.jpg" alt="" class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl" />
              </div>
              <div class="absolute overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12">
                <h5 class="text-lg font-semibold">Pet House</h5>
                <span class="">14 items</span>
              </div>
              <!-- fake children -->
            </a>
          </div>
          <div class="relative col-span-9 row-span-1 md:col-span-4 card hover:drop-shadow-xl ease-out duration-200 md:h-auto">
            <a href="product.html" class="stretched-link">
              <div class="card-shadow rounded-xl">
                <img src="/frontend/img/w-new-2.jpg" alt="" class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl" />
              </div>
              <div class="absolute overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72">
                <h5 class="text-lg font-semibold">Toys</h5>
                <span class="">47 items</span>
              </div>
              <!-- fake children -->
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Find Product-->

    <!-- Our Product -->
    <section class="bg-white dark:bg-gray-900" id="our-product">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="flex items-center justify-between">
          <h2 class="text-2xl font-bold tracking-tight text-gray-900">Our Products</h2>
          <a href="/product" class="text-primer font-semibold flex items-center underline hover:text-primer2"
            ><span class="mr-2"> Shop the collections </span
            ><svg class="h-4 mt-0.5" fill="#D0A988" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path
                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
              />
            </svg>
          </a>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
          <!-- More products... -->
          @foreach ($products as $product)
          <div class="group relative">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:brightness-75 ease-out duration-200 lg:h-80">
              {{-- <img src="{{ $product->photo_url->exists() ? Storage::url($product->photo_url) : 'frontend/img/image-catalog-1.png' }}" alt="{{$product->photo_url}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full" /> --}}
              <img src="{{ Storage::url($product->photo_url) }}" alt="{{$product->photo_url}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full" />
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="{{ route('details', $product->slug) }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $product->name }}
                  </a>
                </h3>
                <p class="text-sm font-medium text-gray-900">IDR {{ number_format($product->price) }}</p>
              </div>
            </div>
          </div>
          @endforeach

          
        </div>
      </div>
    </section>
    <!-- EndOur Product -->

    <!-- Logo -->
    <div class="bg-white -mt-10 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Our trusted product</h2>
        <div class="mx-auto mt-2 opacity-60 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
          <img class="col-span-2 h-32 object-contain lg:col-span-1" src="/frontend/img/Logo-Whiskas.png" alt="Wiskas" />
          <img class="col-span-2 h-32 object-contain lg:col-span-1" src="/frontend/img/Logo-Pedigree.png" alt="Pedigree" />
          <img class="col-span-2 max-h-12 object-contain lg:col-span-1" src="/frontend/img/Logo-Purnia.png" alt="Purina" />
          <img class="col-span-2 h-32 w-full object-contain sm:col-start-2 lg:col-span-1" src="/frontend/img/Logo-Royal Canin -.png" alt="Royal Canin" />
          <img class="col-span-2 col-start-2 h-28 w-full object-contain sm:col-start-auto lg:col-span-1" src="/frontend/img/Logo-Hills.png" alt="Hills" />
        </div>
      </div>
    </div>
    <!-- End Logo -->

@endsection