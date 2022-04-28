@extends('layouts.adminlayout')

@section('title', 'Edit Section Home')
@section('content')
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            @if ($errors->any())
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-400">
                    <span class="text-xl inline-block mr-5 align-middle">
                    <i class="fas fa-bell"></i>
                    </span>
                    <span class="inline-block align-middle ml-3 mr-8">
                        <b class="capitalize">Whoops!</b> There were some problems with your input 
                        <ul class="list-disc">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </span>
                    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
                    <span>×</span>              
                    </button>
                </div>
            @endif
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg border-0 bg-white">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-gray-700 text-xl font-bold">
                          Reply Messages
                        </h6>                        
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form action="{{ route('send-message', $message->id) }}" method="POST" >
                      @csrf                      
                        <input type="hidden" name="status" value="1">
                        <div class="flex flex-wrap">
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-600 text-xs font-bold mb-2"
                                        htmlFor="name">
                                        Sender
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="name" name="name" value="{{ $message->name }}" disabled/>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-600 text-xs font-bold mb-2"
                                        htmlFor="email">
                                        Email
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="email" name="email" value="{{ $message->email }}" disabled/>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-600 text-xs font-bold mb-2"
                                        htmlFor="message">
                                        Messages
                                    </label>
                                    <textarea type="text" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        rows="4" placeholder="Text Here" name="message" disabled>{{ $message->message }}</textarea>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-600 text-xs font-bold mb-2"
                                        htmlFor="body">
                                        Reply Messages
                                    </label>
                                    <textarea type="text" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        rows="4" placeholder="Text Here" name="body"></textarea>
                                </div>
                            </div>
                        </div>                        
                        
                        <div class="flex justify-end">
                          <div class="px-4 mt-10 mr-2">
                            <button type="submit" class="bg-green-500 px-6 py-2 rounded text-white uppercase font-bold">Send</button>
                          </div>
                          <div class="px-4 mt-10">
                            <a href="{{ route('messages') }}" class="block bg-gray-300 px-6 py-2 rounded text-gray-50 uppercase font-bold">Cancel</a>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function closeAlert(event){
            let element = event.target;
            while(element.nodeName !== "BUTTON"){
            element = element.parentNode;
            }
            element.parentNode.parentNode.removeChild(element.parentNode);
        }
    </script>
@endsection
