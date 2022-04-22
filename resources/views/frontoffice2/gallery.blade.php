@extends('layouts.mainlayout2')

@section('title', 'Gallery')
@section('style')
    
@endsection
@section('content')
  <!-- Breadcumb -->
  <div class="relative bg-second">
    <div class="container mx-auto px-3 py-16">
      <div class="flex flex-col">
        <h1 class="font-bold text-third text-xl mb-6">Our Farm</h1>
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-first" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          <span class="font-semibold text-four text-sm py-2">Home</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
          <span class="font-semibold text-sm py-2">Gallery</span>         
        </div>
      </div>
    </div>
  </div>
  <section class="overflow-hidden text-gray-700">
    <div class="container px-5 py-2 mx-auto my-10">      
      <div class="flex flex-wrap justify-center -m-1 md:-m-2">        
        <div class="flex flex-wrap w-1/2">
          @foreach ($galleries as $gallery)
            @if ($loop->iteration < 4)
              @if ($loop->iteration < 3)
                <div class="w-1/2 p-1 md:p-2">
                  <a href="{{ url('images/gallery') }}/{{ $gallery->filename }}" data-lightbox="image-1" data-title="{{ $gallery->title }}">
                    <img alt="{{ $gallery->title }}" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ url('images/gallery') }}/{{ $gallery->filename }}">
                  </a>            
                </div>
              @else
                <div class="w-full p-1 md:p-2">
                  <a href="{{ url('images/gallery') }}/{{ $gallery->filename }}" data-lightbox="image-1" data-title="{{ $gallery->title }}">
                    <img alt="{{ $gallery->title }}" class="block object-cover object-center w-full h-full rounded-lg"
                      src="{{ url('images/gallery') }}/{{ $gallery->filename }}">
                  </a>
                </div>
              @endif              
            @endif                       
          @endforeach                    
        </div>
        <div class="flex flex-wrap w-1/2">
          @foreach ($galleries as $gallery)
            @if ($loop->iteration > 3 && $loop->iteration < 7)
              @if ($loop->iteration > 3 && $loop->iteration < 5)                
                <div class="w-full p-1 md:p-2">
                  <a href="{{ url('images/gallery') }}/{{ $gallery->filename }}" data-lightbox="image-1" data-title="{{ $gallery->title }}">
                    <img alt="{{ $gallery->title }}" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ url('images/gallery') }}/{{ $gallery->filename }}">
                  </a>            
                </div>
              @else              
                <div class="w-1/2 p-1 md:p-2">
                  <a href="{{ url('images/gallery') }}/{{ $gallery->filename }}" data-lightbox="image-1" data-title="{{ $gallery->title }}">
                    <img alt="{{ $gallery->title }}" class="block object-cover object-center w-full h-full rounded-lg"
                      src="{{ url('images/gallery') }}/{{ $gallery->filename }}">
                  </a>
                </div>
              @endif              
            @endif                       
          @endforeach                    
        </div>
      </div>
    </div>
  </section>
  <section class="container px-5 py-2 mx-auto my-10 overflow-hidden">
    <div class="flex flex-col">  
      <div class="relative">
        <p class="text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ipsum consequuntur officia alias ipsa repellendus doloremque provident architecto aut corrupti distinctio eligendi dolorem ea atque repellat, repudiandae vero magnam fugiat.</p>
      </div>
      <div class="flex flex-wrap justify-center mt-5">
        @foreach ($galleries as $gallery)
          @if ($loop->iteration > 1)
          <div class="w-1/5 p-2">
            <a href="{{ url('images/gallery') }}/{{ $gallery->filename }}" data-lightbox="image-1" data-title="{{ $gallery->title }}">
              <img class="block object-cover object-center w-full h-64" src="{{ url('images/gallery') }}/{{ $gallery->filename }}" alt="{{ $gallery->title }}" srcset="">   
            </a>
          </div>
          @endif     
        @endforeach
      </div>
    </div>
  </section>
@endsection

@section('script')

@endsection