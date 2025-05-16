@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100 p-6">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden w-full  flex">
            <!-- Left Side -->
            <div class="w-full relative hidden md:block">
                <img src="{{asset('images/kitchen/kitchen_card7.jpg')}}"
                    class="absolute inset-0 w-full h-full object-cover">
                <div
                    class="absolute top-15 grid grid-cols-1 sm:grid-cols-[1fr] place-items-center text-white text-3xl sm:text-2xl md:text-4xl font-bold w-full px-4 text-center">
                    <p>Home to beautiful interiors</p>
                </div>
            </div>

            <!-- Right Side -->
            <div class="w-full  p-10 flex flex-col justify-center">
                <h2 class="text-2xl font-semibold text-gray-900">Do you have any questions, suggestions, or feedback?</h2>
                <p class="text-sm text-gray-600 mb-6">We'd love to hear from you!</p>

                @if(session('success'))
                    <div class="bg-green-500 text-white p-3 rounded-md mb-4 text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('enquiry.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required
                        class="w-full p-3 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                    <input type="email" name="email" placeholder="email@gmail.com" required
                        class="w-full p-3 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                    <input type="text" name="phone" placeholder="Mobile Number"required
                        class="w-full p-3 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                    <textarea name="message" placeholder="Your message" rows="3" required
                        class="w-full p-3 border-b border-gray-300 focus:outline-none focus:border-blue-500"></textarea>
                    <button type="submit"
                        class="w-full py-3 text-white bg-blue-500 hover:bg-blue-700 rounded-full shadow-md font-semibold">
                        SUBMIT
                    </button>
                </form>
                <p class="text-xs text-gray-500 text-center mt-6">No Invitation. Only Art. Only Senses.</p>
            </div>
        </div>
    </div>
@endsection