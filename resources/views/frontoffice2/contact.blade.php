@extends('layouts.mainlayout2')

@section('title', 'Contact Us')
@section('style')

@endsection
@section('content')
    <!-- Breadcumb -->
    <div class="relative bg-second">
        <div class="container mx-auto px-3 py-16">
            <div class="flex flex-col">
                <h1 class="font-bold text-third text-xl mb-6">Contact Us</h1>
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
                    <span class="font-semibold text-sm py-2">Contact Us</span>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container px-5 py-2 mx-auto my-10">
            <div class="flex">
                <div class="w-full lg:w-1/2 flex flex-col">
                    <div class="relative">
                        <h1>What will next step?</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae ipsa magni reiciendis a </p>

                        <ol class="relative border-l border-gray-200 mt-4">
                            <li class="mb-10 ml-6">
                                <span
                                    class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white ">
                                    <svg class="w-3 h-3 text-first" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900">Flowbite
                                    Application UI v2.0.0
                                </h3>
                                <p class="mb-4 text-base font-normal text-gray-500">Get access to over 20+
                                    pages including a dashboard layout, charts, kanban board, calendar, and pre-order
                                    E-commerce
                                    &amp; Marketing pages.</p>
                            </li>
                            <li class="mb-10 ml-6">
                                <span
                                    class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white">
                                    <svg class="w-3 h-3 text-first" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900">Flowbite Figma v1.3.0</h3>
                                <p class="text-base font-normal text-gray-500">All of the pages and
                                    components are first designed in Figma and we keep a parity between the two versions
                                    even as
                                    we update the project.</p>
                            </li>
                            <li class="mb-10 ml-6">
                                <span
                                    class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white">
                                    <svg class="w-3 h-3 text-first" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900">Flowbite Library v1.2.2
                                </h3>
                                <p class="text-base font-normal text-gray-500">Get started with dozens of web
                                    components and interactive elements built on top of Tailwind CSS.</p>
                            </li>
                        </ol>

                    </div>

                    <div class="flex justify-between">
                        <div class="flex flex-col text-center m-5 px-5 py-14 border border-gray-300 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-first" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <h1 class="font-bold text-lg text-five my-2">Email Address</h1>
                            <p class="font-normal text-sm text-four">admin@aquatic.com</p>
                        </div>
                        <div class="flex flex-col text-center m-5 px-5 py-14 border border-gray-300 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-first" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <h1 class="font-bold text-lg text-five my-2">Phone Number</h1>
                            <p class="font-normal text-sm text-four">+62812019292</p>
                        </div>
                        <div class="flex flex-col text-center m-5 px-5 py-14 border border-gray-300 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-first" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h1 class="font-bold text-lg text-five my-2">Office Address</h1>
                            <p class="font-normal text-sm text-four">Bandung, West Java</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <form class="w-full max-w-lg mx-auto">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Your Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:ring-first focus:border-first"
                                    id="grid-first-name" type="text" placeholder="Budi">
                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Your Email
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:ring-first focus:border-first"
                                    id="grid-last-name" type="text" placeholder="jhon@mail.com">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">

                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                                    message</label>
                                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-first focus:border-first"
                                    placeholder="Leave a comment..."></textarea>

                                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                            </div>
                        </div>
                        <div class="w-full mb-6">
                            <button type="submit" class="w-full bg-first text-white font-semibold py-2 rounded">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('script')

@endsection
