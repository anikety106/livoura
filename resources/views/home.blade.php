@extends('layouts.app')

@section('title', 'Home')
@section('content')


    {{-- <x-header /> --}}
    <div class="relative w-full">
        <!-- Background Image -->
        <!-- Image for small and medium screens -->
        <img src="{{ asset('banner/banner2.jpg') }}" alt="Modern interior design showcase"
            class="w-full h-full object-cover shadow-lg block lg:hidden" loading="lazy" width="1200" height="600" />

        <!-- Image for large and above screens -->
        <img src="{{ asset('banner/tr_banner.png') }}" alt="Modern interior design showcase"
            class="w-full h-full object-cover shadow-lg hidden lg:block" loading="lazy" width="1200" height="600" />
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 w-full h-full bg-gradient-to-b from-black/10 to-black "></div>
        <!-- Text Content (Optional) -->

        <div
            class="absolute bottom-20 grid grid-cols-1 sm:grid-cols-[1fr_2fr_1fr] place-items-center text-white md:text-3xl font-bold w-full px-4 text-center">
            <div></div>
            <div>
                <p>Home to beautiful interiors</p>
            </div>
            <div></div>
        </div>

        <div
            class="absolute bottom-0 grid grid-cols-1 sm:grid-cols-[1fr_3fr_1fr] place-items-center text-white text-base sm:text-base text-sm md:text-xl w-full px-4 text-center">
            <div></div>
            <div>
                <p>End-to-end interiors, renovation, or modular solutions we have it all for your home or office. With a
                    wide range of furniture & decor, we have your back from start to finish.</p>
            </div>
            <div></div>
        </div>
        <div ss="absolute inset-0 flex items-center justify-center text-white text-2xl "></div>
    </div>
    <div class="flex flex-col items-center justify-center text-center  p-6">
        <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-4xl ">
            One-stop shop for all things interiors
        </h1>
        <p class="mb-6 text-sm font-normal text-gray-500 lg:text-xl ">
            TR Furniture beckons you into a realm where visionary designers, trusted service partners, and renowned brands
            converge. Step into a world where your imagination knows no bounds and experience the magic of TR Furniture as
            we craft extraordinary interiors for all your spaces. From managing your entire interior design project to
            crafting timeless interiors for homes, our comprehensive interior design services are unmatched!
        </p>
        <a href="#"
            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Learn more
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
    <div class="p-6">
        <x-gallery />
    </div>
    <div class="flex flex-col items-center justify-center text-center  p-6">
        <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-3xl ">
            Elegant Kitchen Wardrobes & Home Interiors – Where Style Meets Functionality!
        </h1>
        <p class="mb-6 text-sm font-normal text-gray-500 lg:text-xl ">
            Transform your living space with elegant kitchen wardrobes and stunning home interiors designed for both
            functionality and style. Whether you seek modern minimalism or classic charm, our expertly crafted solutions
            enhance
            every corner of your home. From sleek modular kitchens to spacious wardrobes and bespoke interiors, we ensure a
            perfect blend of aesthetics and practicality, creating a home that truly reflects your personality.
        </p>

    </div>

    <div class="p-6 flex flex-wrap gap-4 justify-center md:flex-row sm:flex-col sm:items-center">
        <x-card image="images/kitchen/kitchen_card1.jpg" title="Kitchen Interiors"
            description="Modern and stylish kitchen designs for a perfect cooking space." link="/kitchen-details" />

        <x-card image="images/wardrobes/wardrobes_card1.jpg" title="Wardrobes"
            description="Elegant and spacious wardrobes to fit all your storage needs." link="/wardrobe-details" />

        <x-card image="images\home_interior\home_interior_card1.jpg" title="Home Interiors"
            description="Beautiful and cozy interior designs to elevate your living space."
            link="/home-interiors-details" />
    </div>

    <div class="flex flex-col items-center justify-center text-center  p-6">
        <h2 class="text-4xl font-bold text-center text-gray-900  mb-10">
            4 Easy Steps to Your Dream Kitchen
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="relative flex flex-col bg-white  p-6 rounded-2xl shadow-lg">
                <img src="{{ asset('images/banners/consult-experts.avif') }}"
                    class="w-full h-[220px] object-cover rounded-t-2xl">
                <div
                    class="absolute left-1/2 transform -translate-x-1/2 -top-6 bg-blue-700 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold">
                    1
                </div>
                <h3 class="text-xl font-semibold text-blue-700  mt-6 text-center">
                    Meet our design experts at any of our Kitchen Galleries
                </h3>
            </div>

            <!-- Step 2 -->
            <div class="relative flex flex-col bg-white  p-6 rounded-2xl shadow-lg">
                <img src="{{ asset('images/banners/finalize-kitchen.avif') }}"
                    class="w-full h-[220px] object-cover rounded-t-2xl">
                <div
                    class="absolute left-1/2 transform -translate-x-1/2 -top-6 bg-blue-700 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold">
                    2
                </div>
                <h3 class="text-xl font-semibold text-blue-700  mt-6 text-center">
                    Review and get your Personalized Design
                </h3>
            </div>

            <!-- Step 3 -->
            <div class="relative flex flex-col bg-white  p-6 rounded-2xl shadow-lg">
                <img src="{{ asset('images/banners/factory.avif') }}" class="w-full h-[220px] object-cover rounded-t-2xl">
                <div
                    class="absolute left-1/2 transform -translate-x-1/2 -top-6 bg-blue-700 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold">
                    3
                </div>
                <h3 class="text-xl font-semibold text-blue-700  mt-6 text-center">
                    Relax while your kitchen is manufactured at our State-of-the-art manufacturing facilities
                </h3>
            </div>

            <!-- Step 4 -->
            <div class="relative flex flex-col bg-white  p-6 rounded-2xl shadow-lg">
                <img src="{{ asset('images/banners/delivery-installation.avif') }}"
                    class="w-full h-[220px] object-cover rounded-t-2xl">
                <div
                    class="absolute left-1/2 transform -translate-x-1/2 -top-6 bg-blue-700 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold">
                    4
                </div>
                <h3 class="text-xl font-semibold text-blue-700  mt-6 text-center">
                    We deliver and install your dream kitchen
                </h3>
            </div>
        </div>
    </div>
    {{-- <div class="flex flex-col items-center justify-center text-center  p-6">
        <img src="{{ asset('banner\banner.jpg') }}">
    </div> --}}
    <div class="flex flex-col items-center justify-center text-center px-6 pt-6">
        <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-3xl ">
            Kitchens Hall of Fame
        </h1>
        <p class="mb-6 text-sm font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 ">
            Looking for ideas for your kitchen? Here's a peek at some of the kitchens we created for our happy customers</p>
            
        </div>
        <x-carousel />


    <div class="flex flex-col items-center justify-center text-center  p-2 pt-6">
        <div class="grid grid-cols-2 gap-1">
            <!-- Experience Our Stores -->
            <div class="bg-white p-2 rounded-2xl shadow-lg text-center flex flex-col items-center">
                <img src="{{ asset('images/store-icon.png') }}" class="w-16 h-16 mb-4" alt="Store Logo">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Experience Our Products</h2>
                <p class="text-gray-600 text-sm mb-4">
                    Experience our products at <strong>Livoura</strong>.
                    Click below to explore more procducts .
                </p>
                <a href="#"
                    class="inline-flex items-center bg-blue-500 text-white text-sm font-bold p-2    rounded-lg hover:bg-blue-600 transition">

                    LOCATE OUR STORES
                </a>
            </div>

            <!-- Request A Callback -->
            <div class="bg-white p-2 rounded-2xl shadow-lg text-center flex flex-col items-center">
                <img src="{{ asset('images/call-icon.png') }}" class="w-16 h-16 mb-4" alt="Call Icon">
                <h2 class="text-xl font-bold text-gray-900  mb-4">Request A Callback</h2>
                <p class="text-gray-600 text-sm  mb-4">
                    Have a query regarding a service Our representatives are here to assist you.
                </p>
                <a href="#"
                    class="inline-flex items-center bg-green-700 text-white text-sm font-bold p-2 rounded-lg hover:bg-green-600 transition">

                    REQUEST A CALLBACK
                </a>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center text-center p-6">
        <!-- Title -->
        <h2 class="text-xl lg:text-3xl font-bold text-gray-900  text-center mb-6">
            Kitchen Designs Based on Layout
        </h2>

        <p class="text-sm lg:text-lg text-gray-600  text-center mb-8">
            Modular kitchens, with their adaptability and style, offer a versatile canvas for culinary spaces.
            Let's explore the nuances of different kitchen layouts – straight, parallel, L-shape, and U-shape – delving into
            their advantages, suitability for diverse spaces, and the latest trends.
        </p>
    </div>
    <div class="p-6">
        <!-- Layout Sections -->
        <div class="space-y-10">
            <!-- Straight Modular Kitchen -->
            <div class="flex flex-col lg:flex-row items-center gap-6">
                <img src="{{ asset('images/kitchen/carousel_img6.avif') }}" class="w-full lg:w-1/2 rounded-lg shadow-lg">
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-semibold text-blue-700 ">1. Straight Modular Kitchen</h3>
                    <p class="text-gray-600  mt-2">
                        <strong>Advantages:</strong> Compact and efficient, the straight modular kitchen is a go-to for
                        small spaces. Its streamlined design ensures easy access.
                    </p>
                    <p class="text-gray-600 ">
                        <strong>Suitability:</strong> Ideal for studio apartments or kitchens with limited space.
                    </p>
                    <p class="text-gray-600 ">
                        <strong>Trend:</strong> Sleek, minimalist aesthetics are in vogue, combining functionality with a
                        contemporary look.
                    </p>
                </div>
            </div>

            <!-- Parallel Modular Kitchen -->
            <div class="flex flex-col lg:flex-row-reverse items-center gap-6">
                <img src="{{ asset('images/kitchen/parallel-kitchen.jpg') }}"
                    class="w-full lg:w-1/2 rounded-lg shadow-lg">
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-semibold text-blue-700 ">2. Parallel Modular Kitchen</h3>
                    <p class="text-gray-600  mt-2">
                        <strong>Advantages:</strong> Two-facing countertops balance storage and workspace efficiently,
                        ensuring a smooth workflow.
                    </p>
                    <p class="text-gray-600 ">
                        <strong>Suitability:</strong> Well-suited for spacious kitchens.
                    </p>
                    <p class="text-gray-600 ">
                        <strong>Trend:</strong> Modern kitchens are using contrasting colours and textures to add visual
                        interest.
                    </p>
                </div>
            </div>

            <!-- L-Shaped Modular Kitchen -->
            <div class="flex flex-col lg:flex-row items-center gap-6">
                <img src="{{ asset('images/kitchen/carousel_img4.avif') }}" class="w-full lg:w-1/2 rounded-lg shadow-lg">
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-semibold text-blue-700 ">3. L-Shaped Modular Kitchen</h3>
                    <p class="text-gray-600  mt-2">
                        <strong>Advantages:</strong> Harnesses corner spaces effectively, combining flexibility with
                        sociability.
                    </p>
                    <p class="text-gray-600 ">
                        <strong>Suitability:</strong> Versatile and adaptable, suitable for both small and large kitchens.
                    </p>
                    <p class="text-gray-600 ">
                        <strong>Trend:</strong> Earthy tones and natural materials bring warmth and a touch of nature.
                    </p>
                </div>
            </div>

            <!-- U-Shaped Modular Kitchen -->
            <div class="flex flex-col lg:flex-row-reverse items-center gap-6">
                <img src="{{ asset('images/kitchen/u-shape-kitchen.jpg') }}"
                    class="w-full lg:w-1/2 rounded-lg shadow-lg">
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-semibold text-blue-700 ">4. U-Shaped Modular Kitchen</h3>
                    <p class="text-gray-600  mt-2">
                        <strong>Advantages:</strong> Maximizes storage and workspace by utilizing three walls.
                    </p>
                    <p class="text-gray-600 ">
                        <strong>Suitability:</strong> Best for medium to large kitchens.
                    </p>
                    <p class="text-gray-600 ">
                        <strong>Trend:</strong> Integrated smart storage solutions keep the space clean and clutter-free.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
