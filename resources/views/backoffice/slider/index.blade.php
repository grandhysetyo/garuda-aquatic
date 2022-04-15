@extends('layouts.adminlayout')

@section('title', 'Slider')
@section('content')
    <div class="flex flex-wrap mt-4">
        <div class="w-full mb-12 px-4">
            @if ($message = Session::get('success'))
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-400">
                    <span class="text-xl inline-block mr-5 align-middle">
                        <i class="fas fa-bell"></i>
                    </span>
                    <span class="inline-block align-middle mr-8">
                        <b class="capitalize">Success!</b> {{ $message }}
                    </span>
                    <button
                        class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
                        onclick="closeAlert(event)">
                        <span>×</span>
                    </button>
                </div>
            @endif
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">
                                SLIDER
                            </h3>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <a class="bg-first text-white text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                href="{{ route('create-slider') }}">
                                Create
                            </a>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-blueGray-500 border-blueGray-100">
                                    Image
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-blueGray-500 border-blueGray-100">
                                    Title
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-blueGray-500 border-blueGray-100">
                                    Description
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-blueGray-500 border-blueGray-100">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($sliders)> 0)
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <th
                                            class="h-20 w-20 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap m-4 text-left flex items-center">
                                            <img src="/images/sliders/{{ $slider->filename }}"
                                                class="h-20 w-20 bg-white rounded border" alt="..." />
                                        </th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            {{ $slider->title }}
                                        </td>
                                        <td
                                            class="w-1/3 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-normal p-4">
                                            {{ $slider->description }}
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                            <div class="flex">
                                                <a href="{{ route('edit-slider', $slider->id) }}"
                                                    class="text-green-400 block py-1 px-3">
                                                    <i class="fas fa-edit"></i>
                                                </a>                                            
                                                <button class="text-red-600 block py-1 px-3" type="button" onclick="toggleModal('delete','{{ route('delete-slider', $slider->id) }}')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                @if ($slider->status == 1)
                                                    <button class="text-blue-600 block py-1 px-3" type="button" onclick="toggleModal('deactive','{{ route('toggle-slider', ['id' => $slider->id, 'status' => 0]) }}')">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                @else
                                                    <button href="#pablo" class="text-blue-600 block py-1 px-3" type="button" onclick="toggleModal('active','{{ route('toggle-slider', ['id' => $slider->id, 'status' => 1]) }}')">
                                                        <i class="fas fa-eye-slash"></i>
                                                    </button>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach   
                            @else
                                <tr>
                                <td colspan="4" class="text-center py-9">No data found</td>
                                </tr>
                            @endif                           
                        </tbody>
                    </table>
                    {!! $sliders->links('pagination::custom') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-base font-semibold" id="modal-title">
                        Active Slide
                    </h3>
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="toggleModal('regular-modal-id')">
                        <span
                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            ×
                        </span>
                    </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                    <p class="my-4 text-blueGray-500 text-sm leading-relaxed" id="modal-body">
                        Are u sure want to active this slide?
                    </p>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                    <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal()">
                        Cancel
                    </button>
                    <a
                        class="text-white bg-green-400 font-bold uppercase text-sm px-5 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        id="modal-url">
                        Active
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-backdrop"></div>
@endsection

@section('script')
    <script type="text/javascript">
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
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

        function closeAlert(event) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            element.parentNode.parentNode.removeChild(element.parentNode);
        }

        function toggleModal(type, url){
            $(`#modal`).toggleClass("hidden");
            $(`#modal-backdrop`).toggleClass("hidden");
            $(`#modal`).toggleClass("flex");
            $(`#modal-backdrop`).toggleClass("flex");    
            console.log(url)
            if(type === 'delete'){
                $('#modal-title').html("Delete Slide");
                $('#modal-body').html("Are u sure want to delete this slide?");
                $('#modal-url').html("Delete");
            }
            else if(type === 'active'){
                $('#modal-title').html("Active Slide");
                $('#modal-body').html("Are u sure want to active this slide?");
                $('#modal-url').html("Active");
            } 
            else if(type === 'deactive'){
                $('#modal-title').html("Deactive Slide");
                $('#modal-body').html("Are u sure want to deactive this slide?");
                $('#modal-url').html("Deactive");
            } 
            
               
            if(url!==''){                
                $("#modal-url").attr("href", url);
            }              
        }
    </script>
@endsection
