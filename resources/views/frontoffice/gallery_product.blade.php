@extends('layouts.mainlayout')

@section('title','Our Product')
@section('content')
    {{-- Our Product --}}
    <section class="overflow-hidden">
      <div class="container px-5 py-2 mx-auto my-10 lg:px-40">
        <h1 class="relative pb-3 mb-4 text-second font-bold text-2xl after:content-[''] after:bg-first after:absolute after:bottom-0 after:h-0.5 after:w-6 after:left-1">
                    Our Product</h1>
        <div class="flex flex-wrap -m-1 md:-m-2">
          <div class="flex flex-wrap w-1/2">
            <div class="w-1/2 p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
            </div>
            <div class="w-1/2 p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp">
            </div>
            <div class="w-full p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
            </div>
          </div>
          <div class="flex flex-wrap w-1/2">
            <div class="w-full p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
            </div>
            <div class="w-1/2 p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
            </div>
            <div class="w-1/2 p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp">
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection