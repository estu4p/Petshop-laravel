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
                  <a
                      class="font-semibold"
                      href=""
                      aria-label="current-page"
                      >Details</a
                  >
              </li>
          </ul>
      </div>
  </section>
  <!--  -->

  <!-- Product Details -->
  <section class="text-gray-700 body-font overflow-hidden bg-white">
      <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
              <img
                  alt="ecommerce"
                  class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                  src="{{ Storage::url($product->photo_url) }}"
                  {{-- src="https://www.whitmorerarebooks.com/pictures/medium/2465.jpg" --}}
              />

              <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                  
                  <h1
                      class="text-gray-900 text-3xl title-font font-medium mb-4"
                  >
                  {{ $product->name }}
                  </h1>
                  <h2
                      class="text-sm title-font text-gray-500 tracking-widest"
                  >
                      DESCRIPTION
                  </h2>
                  <p class="leading-relaxed">
                      {!! $product->description !!}
                  </p>

                  {{--  --}}
                  <div
                      class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5"
                  >

                  </div>
                  <div class="flex justify-between">
                      <span
                          class="title-font font-medium text-2xl text-gray-900"
                          >IDR {{ $product->price }}</span
                      >
                      <form action="{{ route('cart-add', $product->id) }}" method="POST">
                        @csrf
                        <button
                            type="submit"
                            class="flex ml-auto text-white bg-primer border-0 py-2 px-6 focus:outline-none hover:bg-primer2 rounded-md">
                            Add to Cart
                        </button>
                      </form>
                  </div>
                  <div class="flex mt-4 items-center">
                      <span class="text-gray-600 font-semibold"
                          >Share</span
                      >
                      <span class="flex ml-1 pl-3 py-2">
                          <a href="#" class="text-gray-500">
                              <svg
                                  fill="currentColor"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  class="w-5 h-5"
                                  viewBox="0 0 24 24"
                              >
                                  <path
                                      d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
                                  ></path>
                              </svg>
                          </a>
                          <a href="#" class="ml-2 text-gray-500">
                              <svg
                                  fill="currentColor"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  class="w-5 h-5"
                                  viewBox="0 0 24 24"
                              >
                                  <path
                                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"
                                  ></path>
                              </svg>
                          </a>
                          <a href="#" class="ml-2 text-gray-500">
                              <svg
                                  fill="currentColor"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  class="w-5 h-5"
                                  viewBox="0 0 24 24"
                              >
                                  <path
                                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"
                                  ></path>
                              </svg>
                          </a>
                      </span>
                  </div>
                  {{--  --}}
                </div>
          </div>
      </div>
  </section>
  <!-- End Product Details -->

  <hr />
  <!-- Our Product -->
  <section class="bg-white dark:bg-gray-900" id="our-product">
      <div
          class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8"
      >
          <div class="flex items-center justify-between">
              <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                  Our Products
              </h2>
              <a
                  href="/product"
                  class="text-primer font-semibold flex items-center underline hover:text-primer2"
                  ><span class="mr-2"> Shop the collections </span
                  ><svg
                      class="h-4 mt-0.5"
                      fill="#D0A988"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 448 512"
                  >
                      <path
                          d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                      />
                  </svg>
              </a>
          </div>
          <div
              class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"
          >
              <!-- More products... -->
              @foreach ($recommendations as $recommen)
              <div class="group relative">
                  <div
                      class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:brightness-75 ease-out duration-200 lg:h-80"
                  >
                      <img
                          src="{{ Storage::url($recommen->photo_url) }}"
                          alt="{{ $recommen->name }}"
                          class="h-full w-full object-cover object-center lg:h-full lg:w-full"
                      />
                  </div>
                  <div class="mt-4 flex justify-between">
                      <div>
                          <h3 class="text-sm text-gray-700">
                              <a href="{{ route('details', $recommen->slug) }}">
                                  <span
                                      aria-hidden="true"
                                      class="absolute inset-0"
                                  ></span>
                              {{ $recommen->name }}
                              </a>
                          </h3>
                          <p class="text-sm font-medium text-gray-900">
                              IDR {{ $recommen->price }}
                          </p>
                      </div>
                  </div>
              </div>
              @endforeach

          </div>
      </div>
  </section>
  <!-- EndOur Product -->

@endsection