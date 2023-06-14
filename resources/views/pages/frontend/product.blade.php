@extends('layouts.frontend')

@section('content')
    
    <!--  -->
    <section class="py-7 pl-10">
      <div class="container mx-auto">
        <ul class="flex text-xl">
          <li>
            <a class="mr-3 font-light" href="/">Home</a>
          </li>
          <span class="mr-3">/</span>
          <li>
            <a class="font-semibold" href="#" aria-label="current-page">Products</a>
          </li>
        </ul>
      </div>
    </section>
    <!--  -->

    <!-- Product List -->
    {{-- <div class="bg-white">
      <div class="mx-auto max-w-2xl px-4 pb-16 py-10 sm:px-6 sm:pb-24 lg:max-w-7xl lg:px-8">
        <h1 class="font-bold text-4xl text-center pb-28">Product List</h1>
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
          
          @foreach ($products as $product)
          <a href="{{ route('details', $product->slug) }}" class="group">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
              <img
                src="{{ Storage::url($product->photo_url) }}"
                alt="{{$product->photo_url}}"
                class="h-full w-full object-cover object-center group-hover:brightness-75 ease-out duration-200"
              />
            </div>
            <h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">IDR {{ $product->price }}</p>
          </a>
          @endforeach
          
        </div>
      </div>
    </div> --}}
    
    <!-- Our Product -->
    <section class="bg-white dark:bg-gray-900" id="our-product">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="text-center" style="margin-bottom: 4rem">
          <h2 class="text-2xl font-bold tracking-tight text-gray-900">Our Products</h2>
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



    <!-- End Product -->

@endsection