<!--

=========================================================
* Notus JS - v1.1.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Garuda Aquatic</title>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" />
</head>

<body class="text-gray-700 antialiased">
    <main>
        <section class="relative w-full h-full py-40 min-h-screen">
            <div class="absolute top-0 w-full h-full bg-gray-700 bg-full bg-no-repeat"
                style="background-image: url({{ asset('images/login-bg.png') }})"></div>
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-4/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-0">
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <div class="text-gray-700 text-center mb-3 py-8 font-bold">
                                    LOGIN
                                </div>
                                @if(session('error'))
                                <div class="text-red-600 mb-3 font-bold">
                                    Email atau password salah!
                                </div>
                                @endif
                                <form action="{{ route('validation') }}" method="post">
                                    @csrf
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-600 text-xs font-bold mb-2"
                                            for="grid-password">Email</label><input type="email" name="email"
                                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Email" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-600 text-xs font-bold mb-2"
                                            for="grid-password">Password</label><input type="password" name="password"
                                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Password" />
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center cursor-pointer"><input
                                                type="checkbox"
                                                class="form-checkbox border border-gray-200 rounded text-gray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" /><span
                                                class="ml-2 text-sm font-semibold text-gray-600">Remember
                                                me</span></label>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button
                                            class="bg-gray-800 text-white active:bg-gray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                            type="submit">
                                            Sign In
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="flex flex-wrap mt-6">
                            <div class="w-1/2">
                                <a href="#pablo" class="text-gray-200"><small>Forgot password?</small></a>
                            </div>
                            <div class="w-1/2 text-right">
                                <a href="./register.html" class="text-gray-200"><small>Create new
                                        account</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
    /* Make dynamic date appear */
    (function() {
        if (document.getElementById("get-current-year")) {
            document.getElementById(
                "get-current-year"
            ).innerHTML = new Date().getFullYear();
        }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start",
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }
</script>

</html>
