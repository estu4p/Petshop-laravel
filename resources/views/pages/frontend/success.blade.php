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
            <a class="font-semibold" href="#" aria-label="current-page">Checkout Success</a>
          </li>
        </ul>
      </div>
    </section>
    <!--  -->

    <!-- Success -->
    <section class="bg-white">
      <div class="container mx-auto min-h-screen pt-10 pb-20">
        <div class="flex flex-col items-center justify-center">
          <div class="w-full md:w-4/12 text-center">
            <svg class="h-96 mx-auto my-5" fill="#4BB543" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>
            <h2 class="text-3xl font-semibold mb-6">Your payment was successful!</h2>
            <p class="text-lg mb-12">Barang yang anda beli akan kami kirimkan saat ini juga so now please sit tight and be ready for it</p>
            <a href="/" class="text-gray-900 font-semibold bg-primer hover:bg-primer2 hover:text-white focus:outline-none w-full py-3 rounded-xl text-lg focus:text-black transition-all duration-200 px-8">Back to Shop</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Success -->



@endsection