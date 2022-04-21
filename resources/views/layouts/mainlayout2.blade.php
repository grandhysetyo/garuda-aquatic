<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title') | Garuda Aquatic</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    @yield('style')
</head>

<body class="antialiased">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
                <span class="self-center text-xl font-bold whitespace-nowrap">Garuda Aquatic</span>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full lg:flex lg:w-auto" id="mobile-menu">
                <ul
                    class="flex flex-col mt-4 lg:items-center lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium">
                    <li class="flex justify-end items-center">
                        <a href="#" class="text-gray-700 px-3 py-4 lg:py-2 text-sm font-semibold"
                            aria-current="page">Home</a>
                    </li>
                    <li class="flex justify-end items-center">
                        <a href="#" class="text-gray-700 px-3 py-4 lg:py-2 text-sm font-semibold"
                            aria-current="page">About</a>
                    </li>
                    <li class="flex justify-end items-center">
                        <a href="#" class="text-gray-700 px-3 py-4 lg:py-2 text-sm font-semibold"
                            aria-current="page">Why Us</a>
                    </li>
                    <li class="flex justify-end items-center">
                        <a href="#" class="text-gray-700 px-3 py-4 lg:py-2 text-sm font-semibold"
                            aria-current="page">Service</a>
                    </li>
                    <li class="flex justify-end items-center">
                        {{-- <a href="#" class="text-gray-700 px-3 py-4 lg:py-2 text-sm font-semibold"
                            aria-current="page">Gallery</a> --}}
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex justify-between items-center text-gray-700 px-3 py-4 lg:py-2 text-sm font-semibold">Gallery
                            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our
                                        Farm</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Product</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="flex justify-end items-center">
                        <a href="#" class="text-white bg-first px-4 py-3 lg:py-2 text-sm font-semibold"
                            aria-current="page">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
        <!-- Contact Us -->
        <section>
          <div class="relative container mx-auto bg-first px-9 py-16">
              <div class="flex flex-col md:flex-row items-center justify-between">
                  <div class="w-full md:w-4/5">
                      <h1 class="text-white font-bold text-2xl">Lorem Ipsum dolor sit amet ka dolor?</h1>
                      <p class="text-white font-normal text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut
                          natus voluptate provident optio reprehenderit.</p>
                  </div>
                  <div class="w-full mt-4 md:mt-0 md:w-1/5">
                      <button class="bg-white text-third font-semibold px-3 py-2 lg:px-7 lg:py-3 ">Contact Us</button>
                  </div>
              </div>
          </div>
      </section>
        <footer>
            <div class="bg-five">
                <div class="relative container mx-auto -mt-16 pt-24 pb-5 px-5 md:px-0">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="flex flex-col">
                            <a href="https://flowbite.com" class="flex items-center">
                                <img src="{{ asset('images/logo.png') }}" class="mr-3 h-6 sm:h-14"
                                    alt="Flowbite Logo">
                                <span class="self-center text-2xl font-bold whitespace-nowrap text-white">Garuda
                                    Aquatic</span>
                            </a>
                            <p class="text-white md:w-96 mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Iste unde voluptate labore vel</p>
                            <ul class="text-white mt-5">
                                <li class="flex my-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Bandung, West Java
                                </li>
                                <li class="flex my-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    +6282388282
                                </li>
                                <li class="flex my-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    admin@aquatic.com
                                </li>
                            </ul>
                        </div>
                        <div class="flex md:flex-wrap lg:flex-nowrap mt-8 md:mt-0">
                            <div class="mx-3 md:mt-4 lg:mt-0 md:mx-10">
                                <h1 class="text-white font-semibold text-xl">Company</h1>
                                <ul class="text-white">
                                    <li class="py-3">
                                        <a href="">About</a>
                                    </li>
                                    <li class="py-3">
                                        <a href="">Services</a>
                                    </li>
                                    <li class="py-3">
                                        <a href="">Why Us?</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mx-3 md:mt-4 lg:mt-0 md:mx-10">
                                <h1 class="text-white font-semibold text-xl">Gallery</h1>
                                <ul class="text-white">
                                    <li class="py-3">
                                        <a href="">Product</a>
                                    </li>
                                    <li class="py-3">
                                        <a href="">Our Farm</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mx-3 md:mt-4 lg:mt-0 md:mx-10">
                                <h1 class="text-white font-semibold text-xl">Social Media</h1>
                                <ul class="text-white">
                                    <li class="py-3">
                                        <a href="">Instagram</a>
                                    </li>
                                    <li class="py-3">
                                        <a href="">Facebook</a>
                                    </li>
                                    <li class="py-3">
                                        <a href="">Twitter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-six">
                <p class="text-center text-white py-6">All Rights Reserved | Garuda Aquatic 2022</p>
            </div>
        </footer>
    </main>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!-- Script -->
    @yield('script')
</body>

</html>
