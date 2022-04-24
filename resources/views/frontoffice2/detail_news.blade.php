@extends('layouts.mainlayout2')

@section('title', 'News')
@section('style')

@endsection
@section('content')
    <!-- Breadcumb -->
    <div class="relative bg-second">
        <div class="container mx-auto px-3 py-16">
            <div class="flex flex-col">
                <h1 class="font-bold text-third text-xl mb-6">{{ $news[0]->title }}</h1>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-first" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="font-semibold text-four text-sm py-2">Home</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                    <span class="font-semibold text-sm py-2">News</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                    <span class="font-semibold text-sm py-2">Detail News</span>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container px-5 py-2 mx-auto my-10">
            <div class="relative mb-16">              
              <img class="w-full h-96 object-cover object-center mb-5" src="{{ url('images/news') }}/{{ $news[0]->filename }}" alt="">
              <p class="font-normal text-gray-700">{{ $news[0]->description }}</p>
            </div>
            <div class="flex flex-col md:flex-row md:flex-wrap lg:flex-nowrap md:justify-center">
              @foreach ($latestnews as $new)
              <div
                  class="relative w-11/12 md:w-2/5 lg:w-1/4 m-4 bg-white rounded-lg border border-gray-200 shadow-md">
                  <a href="#">
                      <img class="rounded-t-lg w-full h-40 lg:h-80 object-cover"
                          src="{{ url('images/news') }}/{{ $new->filename }}" alt="" />
                  </a>
                  <div class="p-5">
                      <a href="#">
                          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 max-h-16">{{ \Illuminate\Support\Str::limit($new->title ?? '',40,' ...') }}</h5>
                      </a>
                      <p class="mb-3 font-normal text-gray-700 h-28">{{ \Illuminate\Support\Str::limit($new->description ?? '',140,' ...') }}</p>
                      <a href="{{ url('news') }}/{{ \Illuminate\Support\Str::slug($new->title) }}/{{ $new->id }}"
                          class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-first focus:ring-4 focus:outline-none focus:ring-blue-300">
                          Read more
                      </a>
                  </div>
              </div>
              @endforeach                                                
          </div>
        </div>
    </section>
@endsection

@section('script')
    
@endsection
