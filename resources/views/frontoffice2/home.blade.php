@extends('layouts.mainlayout2')

@section('title', 'Home')
@section('style')
    <link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}" />
@endsection
@section('content')
    <!-- Slider -->
    <div class="relative bg-second">
        <div class="swiper mySwiper container h-[38rem] ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="relative w-full h-full">
                        <div class="flex flex-col lg:flex-row text-center lg:text-left items-center justify-center h-full">
                            <div class="w-full px-4 lg:w-1/2 lg:px-0 lg:py-0">
                                <h1
                                    class="relative w-full lg:w-1/2 pb-3 mb-4 text-third font-bold text-4xl leading-snug after:content-[''] after:bg-first after:absolute after:-top-5 after:h-1.5 after:w-20 after:left-0">
                                    Welcome to Garuda <b class="text-first">Aquatic</b></h1>
                                <p class="text-four lg:w-3/4 lg:border-l-4 lg:pl-3">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Aliquam aspernatur officia assumenda, natus quam
                                    amet!</p>
                                <button class="bg-first px-4 py-2 text-white my-6">Contact Us</button>
                            </div>
                            <div class="w-full h-full lg:w-1/2">
                                <img class="h-full object-cover object-center"
                                    src="{{ asset('images/boiga-multo-maculata-snake-closeup-natural-background-boiga-multo-maculata-closeup.jpg') }}"
                                    alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full h-full">
                        <div class="flex flex-col lg:flex-row text-center lg:text-left items-center justify-center h-full">
                            <div class="w-full px-4 lg:w-1/2 lg:px-0 lg:py-0">
                                <h1
                                    class="relative w-full lg:w-1/2 pb-3 mb-4 text-third font-bold text-4xl leading-snug after:content-[''] after:bg-first after:absolute after:-top-5 after:h-1.5 after:w-20 after:left-0">
                                    Welcome to Garuda <b class="text-first">Aquatic</b></h1>
                                <p class="text-four lg:w-3/4 lg:border-l-4 lg:pl-3">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Aliquam aspernatur officia assumenda, natus quam
                                    amet!</p>
                                <button class="bg-first px-4 py-2 text-white my-6">Contact Us</button>
                            </div>
                            <div class="w-full h-full lg:w-1/2">
                                <img class="h-full object-cover object-center"
                                    src="{{ asset('images/boiga-multo-maculata-snake-closeup-natural-background-boiga-multo-maculata-closeup.jpg') }}"
                                    alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination w-1/2"></div>
        </div>
    </div>
    <!-- About -->
    <section id="about">
        <div class="relative container mx-auto px-7 py-20 lg:pt-48 lg:pb-64">
            <div class="flex flex-col-reverse lg:flex-row">
                <div class="relative w-full h-[24rem] lg:h-[30rem] lg:w-1/2">
                    <img class="block absolute top-0 right-1/4 z-0 w-52 h-[24rem] lg:w-80 lg:h-[30rem] object-cover object-center"
                        src="{{ asset('images/nitty-ditty-_YCUANSCaO4-unsplash.jpg') }}" alt="" srcset="">
                    <img class="block absolute top-12 left-1/4 z-1 w-52 h-[24rem] lg:w-80 lg:h-[30rem] object-cover object-center"
                        src="{{ asset('images/boiga-multo-maculata-snake-closeup-natural-background-boiga-multo-maculata-closeup.jpg') }}"
                        alt="" srcset="">
                </div>
                <div class="w-full lg:w-1/3">
                    <span class="font-normal text-sm text-first">About Us</span>
                    <h1 class="font-bold text-third text-3xl mb-6">Lorem ipsum dolor sit amet consectetur</h1>
                    <p class="font-normal text-four mb-12">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quidem unde accusantium consequuntur blanditiis. Magnam maiores, culpa sed fuga aspernatur
                        sunt vitae eligendi id tempore iste, ex deserunt autem debitis doloribus. Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Quidem unde accusantium consequuntur blanditiis.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Us -->
    <section id="why-us">
        <div class="relative bg-second">
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full p-7 md:w-1/2 md:px-7 lg:px-40">
                    <span class="font-normal text-sm text-first">Why Us</span>
                    <h1 class="font-bold text-third text-3xl mb-6">Lorem ipsum dolor sit amet consectetur</h1>
                    <p class="font-normal text-four mb-12">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quidem unde accusantium consequuntur blanditiis. Magnam maiores, culpa sed fuga aspernatur
                        sunt vitae eligendi id tempore iste, ex deserunt autem debitis doloribus. Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Quidem unde accusantium consequuntur blanditiis.</p>
                </div>
                <div class="w-full md:w-1/2">
                    <img class="w-full h-[24rem] md:h-[40rem] object-cover object-center"
                        src="{{ asset('images/nitty-ditty-_YCUANSCaO4-unsplash.jpg') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section id="services">
        <div class="relative container mx-auto px-7 py-20 lg:py-28">
            <div class="flex flex-col">
                <div class="flex flex-col justify-center mb-16">
                    <span class="font-normal text-base text-first text-center">Services</span>
                    <h1 class="font-bold text-third text-center text-2xl">Our Main Focus</h1>
                </div>
                <div class="flex flex-wrap justify-center lg:flex-row">
                    <div class="w-full sm:w-5/12 lg:w-1/5 flex flex-col items-center mx-3 my-4">
                        <div class="py-5 px-5 flex items-center bg-first rounded-full mb-5">
                            <img src="{{ asset('images/icon-bird.png') }}" alt="">
                        </div>
                        <h2 class="font-bold text-base text-center text-third mb-3">Lorem ipsum dolor sit amet
                            consectetur adipisicing </h2>
                        <p class="font-normal text-sm text-center text-four px-4">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Cupiditate illo doloribus non eius, unde corporis tempore
                            hic veniam inventore quae nisi labore provident.</p>
                    </div>
                    <div class="w-full sm:w-5/12 lg:w-1/5 flex flex-col items-center mx-3 my-4">
                        <div class="py-5 px-5 flex items-center bg-first rounded-full mb-5">
                            <img src="{{ asset('images/icon-cat.png') }}" alt="">
                        </div>
                        <h2 class="font-bold text-base text-center text-third mb-3">Lorem ipsum dolor sit amet
                            consectetur adipisicing </h2>
                        <p class="font-normal text-sm text-center text-four px-4">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Cupiditate illo doloribus non eius, unde corporis tempore
                            hic veniam inventore quae nisi labore provident.</p>
                    </div>
                    <div class="w-full sm:w-5/12 lg:w-1/5 flex flex-col items-center mx-3 my-4">
                        <div class="py-5 px-5 flex items-center bg-first rounded-full mb-5">
                            <img src="{{ asset('images/icon-fish.png') }}" alt="">
                        </div>
                        <h2 class="font-bold text-base text-center text-third mb-3">Lorem ipsum dolor sit amet
                            consectetur adipisicing </h2>
                        <p class="font-normal text-sm text-center text-four px-4">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Cupiditate illo doloribus non eius, unde corporis tempore
                            hic veniam inventore quae nisi labore provident.</p>
                    </div>
                    <div class="w-full sm:w-5/12 lg:w-1/5 flex flex-col items-center mx-3 my-4">
                        <div class="py-5 px-5 flex items-center bg-first rounded-full mb-5">
                            <img src="{{ asset('images/icon-reptile.png') }}" alt="">
                        </div>
                        <h2 class="font-bold text-base text-center text-third mb-3">Lorem ipsum dolor sit amet
                            consectetur adipisicing </h2>
                        <p class="font-normal text-sm text-center text-four px-4">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Cupiditate illo doloribus non eius, unde corporis tempore
                            hic veniam inventore quae nisi labore provident.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How to order -->
    <section id="how-to-order">
        <div class="relative container mx-auto px-7 py-20 lg:py-28">
            <div class="flex flex-col lg:flex-row lg:items-center">
                <div class="w-full lg:w-1/2">
                    <img class="w-full h-[24rem] lg:h-[40rem] object-cover object-center"
                        src="{{ asset('images/boiga-multo-maculata-snake-closeup-natural-background-boiga-multo-maculata-closeup.jpg') }}"
                        alt="" srcset="">
                </div>
                <div class="w-full py-3 lg:py-0 lg:w-1/2 lg:px-16">
                    <span class="font-normal text-sm text-first">How to Order</span>
                    <h1 class="font-bold text-third text-3xl mb-6">Lorem ipsum dolor sit amet consectetur</h1>
                    <p class="font-normal text-four mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quidem unde accusantium consequuntur blanditiis. Magnam maiores, culpa sed fuga aspernatur
                        sunt vitae eligendi id tempore iste, ex deserunt autem debitis doloribus. Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Quidem unde accusantium consequuntur blanditiis.</p>
                    <ul class="text-four list-disc ml-5">
                        <li>Lorem ipsum dlolr</li>
                        <li>Lorem ipsum dlolr</li>
                        <li>Lorem ipsum dlolr</li>
                    </ul>
                    <button class="bg-first px-4 py-2 text-white my-6">Contact Us</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News -->
    <section id="latest-news">
        <div class="bg-no-repeat"
            style="background-size: 100% 50%;background-image: url({{ asset('images/muara-ibrahim-wsu233FqMoU-unsplash.jpg') }});">
            <div class="relative container mx-auto px-7 py-10 mb-14 lg:px-0">
                <div class="flex flex-col">
                    <div class="flex flex-col justify-center mb-16">
                        <span class="font-normal text-base text-white">Latest News</span>
                        <h1 class="font-bold text-white text-3xl">Lorem ipsum dolor sit amet</h1>
                    </div>
                    <div class="flex flex-col md:flex-row md:flex-wrap lg:flex-nowrap md:justify-center">
                        <div
                            class="relative w-11/12 md:w-2/5 lg:w-1/3 m-4 bg-white rounded-lg border border-gray-200 shadow-md">
                            <a href="#">
                                <img class="rounded-t-lg w-full h-40 lg:h-80 object-cover"
                                    src="{{ asset('images/stephanie-leblanc-SVwOposMxHY-unsplash.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                        technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-first focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div
                            class="relative w-11/12 md:w-2/5 lg:w-1/3 m-4 bg-white rounded-lg border border-gray-200 shadow-md">
                            <a href="#">
                                <img class="rounded-t-lg w-full h-40 lg:h-80 object-cover"
                                    src="{{ asset('images/stephanie-leblanc-SVwOposMxHY-unsplash.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                        technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-first focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div
                            class="relative w-11/12 md:w-2/5 lg:w-1/3 m-4 bg-white rounded-lg border border-gray-200 shadow-md">
                            <a href="#">
                                <img class="rounded-t-lg w-full h-40 lg:h-80 object-cover"
                                    src="{{ asset('images/stephanie-leblanc-SVwOposMxHY-unsplash.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                        technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-first focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
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
@endsection
