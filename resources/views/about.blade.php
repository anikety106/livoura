@extends('layouts.app')

@section('title', 'About Modular Kitchens | Benefits, Designs & Costs')

@section('meta_description',
    'Explore the benefits of modular kitchens, different design options, components, and cost
    factors. Learn why modular kitchens are the perfect blend of functionality and style.')

@section('content')

    <!-- Hero Banner Section -->
    <section class="relative w-full h-96 md:h-[500px] overflow-hidden">
        <img src="{{ asset('banner/banner.jpg') }}" alt="Modern Modular Kitchen Design"
            class="w-full h-full object-cover shadow-lg" loading="lazy" width="1600" height="500">
        {{-- <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center">
            <h1 class="text-white text-4xl md:text-6xl font-bold text-center px-4">
                The Future of Kitchen Design
            </h1>
        </div> --}}
    </section>
    <div class="bg-white">
        <!-- Hero Section -->
        <div class="relative bg-gray-100 py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">About Modern Kitchen Designs</h1>
                    <p class="text-xl text-gray-600">Crafting Functional, Beautiful Spaces Since 2010</p>
                </div>
            </div>
        </div>

        <!-- Intro Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                <div>
                    <p class="text-lg text-gray-600 mb-6">
                        At Modern Kitchen Designs, we believe the kitchen is the heart of every home. For over a decade,
                        we've transformed ordinary cooking spaces into extraordinary modular kitchens that blend innovative
                        design with everyday functionality.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0">
                    <img src="{{ asset('images\kitchen\kitchen_card5.jpg') }}" alt="Modern Kitchen Showroom"
                        class="rounded-lg shadow-lg w-full h-auto">
                </div>
            </div>
        </div>

        <!-- Our Story Section -->
        <div class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                    <div class="order-last lg:order-first">
                        <img src="{{ asset('images\team\team-member.jpg') }}" alt="Our humble beginnings"
                            class="rounded-lg shadow-lg w-full h-auto">
                    </div>
                    <div class="mb-10 lg:mb-0">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                        <p class="text-gray-600 mb-4">
                            Founded in Indore by a team of passionate interior designers and kitchen specialists, we started
                            with a simple vision: to revolutionize Indian kitchens through modular design.
                        </p>
                        <p class="text-gray-600">
                            What began as a small workshop has grown into one of the region's most trusted kitchen solution
                            providers, with showrooms across three states and hundreds of satisfied families.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Modular Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Why Choose Modular?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-4xl mx-auto">
                We specialize exclusively in modular kitchens because they offer:
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Smart Space Utilization</h3>
                            <p class="mt-1 text-gray-600">Clever storage solutions for India's compact urban homes</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Hassle-Free Installation</h3>
                            <p class="mt-1 text-gray-600">70% faster than traditional kitchen construction</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Customized Designs</h3>
                            <p class="mt-1 text-gray-600">Tailored to your cooking style and family needs</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Premium Materials</h3>
                            <p class="mt-1 text-gray-600">Using moisture-resistant finishes perfect for Indian conditions
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Easy Maintenance</h3>
                            <p class="mt-1 text-gray-600">Spill-proof surfaces that clean in seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Design Philosophy Section -->
        <div class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Our Design Philosophy</h2>
                <p class="text-xl text-center text-gray-600 italic mb-12 max-w-3xl mx-auto">
                    "Form follows function" guides every kitchen we create.
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-white p-6 rounded-lg shadow-md h-full">
                            <div class="mx-auto h-16 w-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">The Golden Triangle</h3>
                            <p class="text-gray-600">Optimizing the workflow between stove, sink, and refrigerator</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="bg-white p-6 rounded-lg shadow-md h-full">
                            <div class="mx-auto h-16 w-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Ergonomic Heights</h3>
                            <p class="text-gray-600">Countertops customized to your comfort</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="bg-white p-6 rounded-lg shadow-md h-full">
                            <div class="mx-auto h-16 w-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Intelligent Storage</h3>
                            <p class="text-gray-600">Pull-out trays, corner units, and vertical dividers</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="bg-white p-6 rounded-lg shadow-md h-full">
                            <div class="mx-auto h-16 w-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Aesthetic Harmony</h3>
                            <p class="text-gray-600">Colors and finishes that complement your home</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Meet Our Team</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="{{ asset('images/team/rajiv-mehta.jpg') }}" alt="Rajiv Mehta"
                        class="mx-auto h-48 w-48 rounded-full object-cover mb-4">
                    <h3 class="text-xl font-medium text-gray-900">Rajiv Mehta</h3>
                    <p class="text-blue-600 mb-2">Founder & Chief Designer</p>
                    <p class="text-gray-600">25+ years experience in kitchen ergonomics</p>
                </div>

                <div class="text-center">
                    <img src="{{ asset('images/team/priya-khanna.jpg') }}" alt="Priya Khanna"
                        class="mx-auto h-48 w-48 rounded-full object-cover mb-4">
                    <h3 class="text-xl font-medium text-gray-900">Priya Khanna</h3>
                    <p class="text-blue-600 mb-2">Head of Customer Experience</p>
                    <p class="text-gray-600">Ensures seamless project execution</p>
                </div>

                <div class="text-center">
                    <img src="{{ asset('images/team/vikram-joshi.jpg') }}" alt="Vikram Joshi"
                        class="mx-auto h-48 w-48 rounded-full object-cover mb-4">
                    <h3 class="text-xl font-medium text-gray-900">Vikram Joshi</h3>
                    <p class="text-blue-600 mb-2">Master Installer</p>
                    <p class="text-gray-600">Precision installation specialist</p>
                </div>
            </div>
        </div>

        <!-- Our Promise Section -->
        <div class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Our Promise</h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="mx-auto h-16 w-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">3-Year Comprehensive Warranty</h3>
                        <p class="text-gray-600">on all installations</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="mx-auto h-16 w-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">100% Transparent Pricing</h3>
                        <p class="text-gray-600">No hidden charges</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="mx-auto h-16 w-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">45-Day Completion Guarantee</h3>
                        <p class="text-gray-600">from design to installation</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="mx-auto h-16 w-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Free Post-Installation Support</h3>
                        <p class="text-gray-600">for 6 months</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sustainability Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Beyond Kitchens</h2>
            <p class="text-xl text-center text-gray-600 mb-12 max-w-3xl mx-auto">
                We're committed to sustainable practices
            </p>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Eco-Friendly Materials</h3>
                            <p class="mt-1 text-gray-600">We use sustainable and non-toxic materials in all our kitchen
                                components</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Energy-Efficient Lighting</h3>
                            <p class="mt-1 text-gray-600">LED solutions that reduce power consumption by up to 80%</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-green-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Recycling Program</h3>
                            <p class="mt-1 text-gray-600">Responsible disposal and recycling of old kitchen components</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-blue-600 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Ready to design your dream kitchen?</h2>
                <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-blue-700 bg-white hover:bg-blue-50 transition duration-300">
                        Book a Free Consultation
                    </a>
                    {{-- <a href="#"
                        class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-600 transition duration-300">
                        Visit Our Showroom
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Sections -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Benefits Section -->
        <x-kitchencard image1="{{ asset('images/kitchen/carousel_img4.avif') }}" heading1="Benefits of a Modular Kitchen"
            type="Customization"
            description1="A modular kitchen offers extensive customization options, allowing you to select from a wide range of materials, finishes, and colors to complement your home's interior. Whether you prefer a sleek modern aesthetic or a timeless classic design, a modular kitchen can be tailored to reflect your personal style."
            type1="Space Efficiency"
            description2="Designed to maximize space utilization, modular kitchens incorporate smart layouts and innovative storage solutions. Every inch is optimized, making them ideal for small apartments and homes where space is limited."
            type2="Quick and Easy Installation"
            description3="Unlike traditional kitchens that require weeks to construct, modular kitchens are pre-fabricated in a factory and assembled on-site. This significantly reduces installation time, ensuring minimal disruption to your daily routine."
            type3="Easy Maintenance and Repairs"
            description4="Modular kitchens are built for convenience. Their pre-fabricated components allow for easy cleaning and maintenance, and in case of damage, individual modules can be replaced without disturbing the rest of the kitchen. This makes them a durable and cost-effective choice in the long run."
            image2="{{ asset('images/kitchen/kitchen_card2.jpg') }}" heading2="Modular Kitchen Components"
            type4="Modular Kitchen Cabinets"
            description5="Cabinets form the foundation of any modular kitchen, offering a variety of sizes, materials, and finishes to complement your kitchen's design. They provide ample storage for utensils, appliances, and pantry essentials, ensuring an organized and clutter-free space."
            type5="Modular Kitchen Cupboards"
            description6="Designed for storing larger kitchen essentials like pots, pans, and bulk groceries, modular kitchen cupboards blend functionality with aesthetics. Options such as glass doors, open shelving, and pull-out units enhance both convenience and style."
            type6="Modular Kitchen Interior"
            description7="A well-planned modular kitchen interior maximizes space and efficiency. Features like pull-out drawers, corner units, built-in appliances, and under-cabinet lighting contribute to seamless usability and a modern look."
            type7="Readymade Kitchen Units"
            description8="For a quick and hassle-free setup, readymade kitchen units offer an excellent solution. These pre-assembled units come in standard sizes and designs, ensuring easy installation. Cost-effective and customizable, they allow for additional modules to meet specific needs." />

        <!-- Designs Section -->
        <x-kitchencard image1="{{ asset('images/kitchen/kitchen_card3.jpg') }}" heading1="Modular Kitchen Designs"
            type="Straight Modular Kitchen"
            description1="The straight modular kitchen is a sleek and space-efficient design, ideal for small homes and apartments. It features a single counter along one wall, with cabinets and appliances aligned in a straight line. This layout optimizes functionality in compact spaces while ensuring easy access to all essentials."
            type1="L-Shaped Modular Kitchen"
            description2="Perfect for medium-sized kitchens, the L-shaped modular kitchen utilizes two adjoining walls to form an L. This design maximizes counter space and allows for smooth workflow, making cooking and meal prep more convenient. With ample storage along both walls, it offers a balanced combination of style and practicality."
            type2="U-Shaped Modular Kitchen"
            description3="Best suited for larger kitchens, the U-shaped modular kitchen consists of three walls lined with cabinets and appliances, forming a U. This layout provides extensive counter space and storage, making it an excellent choice for households that need an efficient and spacious kitchen setup."
            type3="Island Modular Kitchen"
            description4="An island modular kitchen features a freestanding counter or island at the center, adding extra workspace and versatility. Ideal for open-plan layouts, it enhances meal preparation, dining, and social interaction. The island can also incorporate storage and built-in appliances, improving the kitchen's functionality."
            image2="{{ asset('images/kitchen/kitchen_card6.jpg') }}" heading2="Cost of a Modular Kitchen"
            type4="Kitchen Features"
            description5="The cost of a modular kitchen varies significantly based on factors such as design, materials, and finishes. Key elements influencing the overall expense include the kitchen size, the quality of materials used, and the complexity of the layout. Premium and luxury options may come at a higher price, but they offer enhanced durability and aesthetics."
            type5="Durability and Aesthetics"
            description6="To make the most of your investment, it's essential to set a budget and work with a trusted kitchen designer who can help optimize both functionality and style while ensuring cost-effectiveness."
            type6="Material"
            description7="Modular kitchens are typically made from materials like plywood, MDF, particle board, and various laminates. Options like stainless steel and glass are also popular for specific elements."
            type7="Size and Layout"
            description8="The overall cost of a modular kitchen is significantly influenced by its size and layout. Larger kitchens require more materials, cabinetry, and appliances, which naturally increases the expenses. Similarly, complex layouts such as L-shaped or U-shaped designs demand additional components, including extra storage units, extended countertops, and more intricate installation processes." />

        <!-- Call to Action Section -->
        {{-- <section class="mt-16 bg-gray-50 rounded-lg p-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Transform Your Kitchen?</h2>
            <p class="text-lg text-gray-600 mb-6 max-w-3xl mx-auto">
                Contact our kitchen design experts today to discuss your project and get a personalized quote.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-300">
                Get a Free Consultation
            </a>
        </section> --}}



        <div class="max-w-7xl mx-auto p-6">
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
                    <h3 class="text-xl font-semibold text-blue-700 dark:text-blue-400 mt-6 text-center">
                        Meet our design experts at any of our Kitchen Galleries
                    </h3>
                </div>

                <!-- Step 2 -->
                <div class="relative flex flex-col bg-white p-6 rounded-2xl shadow-lg">
                    <img src="{{ asset('images/banners/finalize-kitchen.avif') }}"
                        class="w-full h-[220px] object-cover rounded-t-2xl">
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 -top-6 bg-blue-700 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold">
                        2
                    </div>
                    <h3 class="text-xl font-semibold text-blue-700 dark:text-blue-400 mt-6 text-center">
                        Review and get your Personalized Design
                    </h3>
                </div>

                <!-- Step 3 -->
                <div class="relative flex flex-col bg-white p-6 rounded-2xl shadow-lg">
                    <img src="{{ asset('images/banners/factory.avif') }}"
                        class="w-full h-[220px] object-cover rounded-t-2xl">
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 -top-6 bg-blue-700 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold">
                        3
                    </div>
                    <h3 class="text-xl font-semibold text-blue-700 dark:text-blue-400 mt-6 text-center">
                        Relax while your kitchen is manufactured at our State-of-the-art manufacturing facilities
                    </h3>
                </div>

                <!-- Step 4 -->
                <div class="relative flex flex-col bg-white p-6 rounded-2xl shadow-lg">
                    <img src="{{ asset('images/banners/delivery-installation.avif') }}"
                        class="w-full h-[220px] object-cover rounded-t-2xl">
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 -top-6 bg-blue-700 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold">
                        4
                    </div>
                    <h3 class="text-xl font-semibold text-blue-700 dark:text-blue-400 mt-6 text-center">
                        We deliver and install your dream kitchen
                    </h3>
                </div>
            </div>
        </div>
    </main>
@endsection
