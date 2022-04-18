@extends('layouts.mainlayout')

@section('title', 'Home')
@section('style')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endsection
@section('content')
    <!-- Slider -->
    <div class="relative bg-cover bg-no-repeat bg-opacity-30 px-12 lg:px-44 before:content-[''] before:absolute before:left-0 before:top-0 before:bottom-0 before:right-0 before:bg-black/20" style="background-image: url('{{ asset('images/bg-slider.png') }}')">
        <div class="swiper mySwiper container h-96">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="relative w-full h-full">
                        <div class="flex flex-col md:flex-row text-center md:text-left items-center justify-center h-full">
                            <div class="w-full md:w-1/2 ">
                                <h1 class="text-white font-bold">Welcome to Garuda Aquatic</h1>
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam aspernatur officia assumenda, natus quam amet!</p>
                                <button class="bg-first px-4 py-2 text-white mt-3 rounded-md">Contact Us</button>
                            </div>
                            <div class="w-full md:w-1/2">
                                <img class="w-3/5 md:w-10/12 rounded-lg mx-auto" src="{{ asset('images/boiga-multo-maculata-snake-closeup-natural-background-boiga-multo-maculata-closeup.jpg') }}" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full h-full">
                        <div class="flex flex-col md:flex-row text-center md:text-left items-center justify-center h-full">
                            <div class="w-full md:w-1/2 ">
                                <h1 class="text-white font-bold">Welcome to Garuda Aquatic</h1>
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam aspernatur officia assumenda, natus quam amet!</p>
                                <button class="bg-first px-4 py-2 text-white mt-3 rounded-md">Contact Us</button>
                            </div>
                            <div class="w-full md:w-1/2">
                                <img class="w-3/5 md:w-10/12 rounded-lg mx-auto" src="{{ asset('images/boiga-multo-maculata-snake-closeup-natural-background-boiga-multo-maculata-closeup.jpg') }}" alt="" srcset="">
                            </div>
                        </div>
                    </div>    
                </div>                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="container mt-2 pb-16 lg:px-40 mx-auto bg-white">
        <!-- Section 1 -->
        <div class="flex flex-col items-center md:flex-row my-5">
            <div class="relative w-full md:w-1/2">
                <h1
                    class="relative pb-3 mb-4 text-second font-bold text-2xl after:content-[''] after:bg-first after:absolute after:bottom-0 after:h-0.5 after:w-6 after:left-1">
                    Who we are?</h1>
                <p class="text-base font-normal text-gray-700">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Provident ipsum ut animi placeat adipisci nobis soluta aliquam corporis dicta nihil recusandae ipsa
                    nam optio commodi ducimus, quo, fuga nisi doloremque. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Harum voluptate suscipit magnam rerum maiores enim pariatur explicabo amet,
                    ducimus voluptates facere eveniet incidunt optio, aspernatur odit vero velit, aliquid cum?</p>
            </div>
            <div class="relative w-full md:w-1/2">
                <img class="block w-10/12 m-auto rounded-lg"
                    src="https://thumbs.dreamstime.com/b/aquatic-monitor-lizard-bali-indonesia-large-unique-reptile-beautiful-green-wild-animal-125705407.jpg"
                    alt="">
            </div>
        </div>
        <!-- Section 2 -->
        <div class="flex flex-col mt-16">
            <h1
                class="relative w-fit mx-auto pb-3 mb-10 text-second font-bold text-2xl after:content-[''] after:bg-first after:absolute after:bottom-0 after:h-0.5 after:w-6 after:left-1/3">
                Our Service</h1>
            <!-- Card -->
            <div class="flex">
                <div class="w-1/3 text-center px-10">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-24 w-24 border-2 rounded-full p-5 mx-auto border-second stroke-first mb-3" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h1 class="font-semibold text-xl text-second">Lorem Ipsum sit</h1>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus explicabo
                        neque maxime sit, </p>
                </div>
                <div class="w-1/3 text-center px-10">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-24 w-24 border-2 rounded-full p-5 mx-auto border-second stroke-first mb-3" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h1 class="font-semibold text-xl text-second">Lorem Ipsum sit</h1>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus explicabo
                        neque maxime sit, </p>
                </div>
                <div class="w-1/3 text-center px-10">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-24 w-24 border-2 rounded-full p-5 mx-auto border-second stroke-first mb-3" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h1 class="font-semibold text-xl text-second">Lorem Ipsum sit</h1>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus explicabo
                        neque maxime sit, </p>
                </div>
            </div>
        </div>
        <!-- Section 3 -->
        <div class="flex flex-col items-center md:flex-row mt-16 bg-second rounded-3xl px-7 py-16">
            <div class="relative w-full md:w-1/2">
                <img class="block w-10/12 m-auto rounded-lg"
                    src="https://thumbs.dreamstime.com/b/aquatic-monitor-lizard-bali-indonesia-large-unique-reptile-beautiful-green-wild-animal-125705407.jpg"
                    alt="">
            </div>
            <div class="relative w-full md:w-1/2">
                <h1
                    class="relative pb-3 mb-4 text-white font-bold text-2xl after:content-[''] after:bg-first after:absolute after:bottom-0 after:h-0.5 after:w-6 after:left-1">
                    Why Garuda Aquatic?</h1>
                <p class="text-base font-normal text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Provident ipsum ut animi placeat adipisci nobis soluta aliquam corporis dicta nihil recusandae ipsa
                    nam optio commodi ducimus, quo, fuga nisi doloremque. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.?</p>
            </div>
        </div>
        <!-- Section 4 -->
        <div class="flex flex-col items-center md:flex-row mt-28">
            <div class="relative w-full md:w-1/2">
                <h1
                    class="relative pb-3 mb-4 text-second font-bold text-2xl after:content-[''] after:bg-first after:absolute after:bottom-0 after:h-0.5 after:w-6 after:left-1">
                    How to Order</h1>
                <p class="text-base font-normal text-gray-700">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Provident ipsum ut animi placeat adipisci nobis soluta aliquam corporis dicta nihil recusandae </p>
                <ul class="list-disc text-base font-normal text-gray-700 pl-7 mt-5">
                    <li>Lorem ipsum dolor</li>
                    <li>Lorem ipsum dolor</li>
                    <li>Lorem ipsum dolor</li>
                </ul>
            </div>
            <div class="relative w-full md:w-1/2">
                <img class="block w-10/12 m-auto rounded-lg"
                    src="https://thumbs.dreamstime.com/b/aquatic-monitor-lizard-bali-indonesia-large-unique-reptile-beautiful-green-wild-animal-125705407.jpg"
                    alt="">
            </div>
        </div>
        <!-- Section 5 -->
        <div class="flex flex-col mt-20">
            <h1
                class="relative w-fit mx-auto pb-3 mb-10 text-second font-bold text-2xl after:content-[''] after:bg-first after:absolute after:bottom-0 after:h-0.5 after:w-6 after:left-1/3">
                News</h1>
            <div class="flex justify-between">
                <div class="relative mx-4 bg-white rounded-lg border border-gray-200 shadow-md">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="relative mx-4 bg-white rounded-lg border border-gray-200 shadow-md">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="relative mx-4 bg-white rounded-lg border border-gray-200 shadow-md">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="flex py-20 lg:px-40 bg-four">
        <div class="relative w-1/2">
            <h1 class="text-third font-bold text-2xl">Book your order now</h1>
        </div>
        <div class="relative w-1/2">
            <button class="mx-auto bg-first text-white rounded px-7 py-3 uppercase">Order Now</button>
        </div>
    </div>
@endsection

@section('script')
    <script type="module">
        import Swiper from '{{ asset('lib/swiper/swiper-bundle.esm.browser.min.js') }}';

        function initSwiper() {
            let swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        }
        $(document).ready(() => {
            initSwiper();
        });
    </script>
    <script type="text/javascript">

    </script>
@endsection
